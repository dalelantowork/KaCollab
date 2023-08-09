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

        if(Auth::guard()->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('index');
        }

        return redirect()->route('login')->with('error', 'Invalid username and password combination.');
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();
        return redirect()->route('login');
    }
}
