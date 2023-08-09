<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Modules\Office\Entities\Office;
use Modules\Role\Entities\Role;
use Modules\User\Entities\User;
use Auth;
use Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $allowedRoleAndOffice = [
            'super-admin',
        ];

        $allowedRoleAndOffice[] = config('office.name');
        $user = User::where('username', $request->username)->first();
        $role = Role::where('name', 'super-admin')->first();
        $defaultOfficeId = Office::where('default', 1)->pluck('id')->toArray();
        if (empty($user)) {
            return redirect()->route('login')->with('error', 'Invalid username and password combination.');
        }

        $userRoles = $user->roles()->pluck('name')->toArray();
        $userRoleAndOffice = array_merge($userRoles, $allowedRoleAndOffice);
        $existingRole = array_intersect($allowedRoleAndOffice, $userRoleAndOffice);

        if (empty($existingRole)) {
            return redirect()->route('login')->with('error', 'User is not allowed to login');
        }

        if (empty($user->office_id)) {
            return redirect()->route('login')->with('error', 'User is not allowed to login');
        }

        if (in_array($user->office_id, $defaultOfficeId)) {
            return redirect()->route('login')->with('error', 'User is not allowed to login');
        }

        if (Auth::guard()->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('index');
        }

        return redirect()->route('login')->with('error', 'Invalid username and password combination.');
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();
        return redirect()->route('login');
    }

    // Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google callback
    public function handleGoogleCallback()
    {
        // http://localhost:8000/login
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user, 'google');
        // Return home after login
        return redirect()->route('index');
    }

    // Facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Facebook callback
    public function handleFacebookCallback(Request $request)
    {
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user, 'facebook');
        // Return home after login
        return redirect()->route('index');
    }

    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function handleLinkedInCallback(Request $request)
    {
        $user = Socialite::driver('linkedin')->user();

        $this->_registerOrLoginUser($user, 'linkedin');
        // Return home after login
        return redirect()->route('index');
    }
    protected function _registerOrLoginUser($data, $social)
    {
        switch ($social) {
            case 'google':
                $firstName = @$data->user['given_name'];
                $lastName = @$data->user['family_name'];
                $providerId = @$data->id;
                $email = $data->email;
                break;
            case 'facebook':
                $firstName = @$data['first_name'] ?: $data['name'];
                $lastName = @$data['last_name'] ?: '';
                $providerId = $data['id'];
                $email = @$data['email'];
                break;
            case 'linkedin':
                $firstName = @$data->user['given_name'];
                $lastName = @$data->user['family_name'];
                $providerId = @$data->id;
                $email = $data->email;
                break;
        }
        $user = User::where('email', '=', $email)->first();
        if (!$user) {
            $user = new User();
            $user->first_name = $firstName;
            $user->last_name = $lastName;
            $user->email = $email;
            $user->provider_id = $providerId;
            $user->username = generateSlug($user->first_name . " " . $user->last_name . " " . $user->id);
            $user->password = $user->first_name . $user->last_name;
            $user->save();
        }

        Auth::login($user);
    }
}
