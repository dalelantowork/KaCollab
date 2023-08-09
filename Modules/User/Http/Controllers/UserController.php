<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\Office;
use Modules\Role\Entities\Role;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\User\StoreUserRequest;
use Modules\User\Http\Requests\User\UpdateUserRequest;
use Modules\User\Http\Requests\User\UpdatePasswordRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{
    use AuthorizesRequests;
    
    /**
     *
     */
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->authorizeResource(User::class);
    }

    /**
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $users = User::sortable()->paginate();

        return view('user::user.index', compact('users'));
    }

    /**
     * @return Factory|View|Application
     */
    public function create(): Factory|View|Application
    {
        $user = new User;
        $roles = Role::get();
        $offices = Office::get();
        
        return view('user::user.create', compact('user','roles', 'offices'));
    }

    /**
     * @param StoreUserRequest $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $sanitized = $request->getSanitized();

        $user = User::create($sanitized);

        if (@$sanitized['role_id']) {
            $user->roles()->attach($sanitized['role_id']);
        }

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * @param User $user
     * @return Factory|View|Application
     */
    public function show(User $user): Factory|View|Application
    {
        return view('user::user.show', compact('user'));
    }

    /**
     * @param User $user
     * @return Factory|View|Application
     */
    public function edit(User $user): Factory|View|Application
    {
        $roles = Role::get();
        $roleId = $user->roles()->pluck('id')->toArray();
        $offices = Office::get();
        return view('user::user.edit', compact('user', 'roleId', 'roles', 'offices'));
    }

    /**
     * @param UpdateUserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $sanitized = $request->getSanitized();
        $user->update($sanitized);

        $user->roles()->detach();

        if (@$sanitized['role_id']) {
            $user->roles()->attach($sanitized['role_id']);
        }

        return redirect()->route('users.edit', [$user])
            ->with('success', 'User updated successfully');
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }

    public function editPassword(User $user): Factory|View|Application
    {
        return view('user::user.change', compact('user'));
    }

    public function updatePassword(UpdatePasswordRequest $request, User $user): RedirectResponse
    {
        $sanitized = $request->all();

        $user->password = bcrypt($sanitized['password']);
        $user->save();

        return redirect()->route('users.edit-password', [$user])
            ->with('success', 'Password updated successfully');
    }
}
