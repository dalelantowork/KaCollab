<?php

namespace Modules\Hris\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\Office;
use Modules\Role\Entities\Role;
use Modules\User\Entities\User;
use Modules\Hris\Http\Requests\StoreRequest;
use Modules\Hris\Traits\EmployeeRole;

class HrisController extends Controller
{
    use EmployeeRole;

    private $role;

    public function __construct()
    {
        $this->role = $this->getEmployeeRole();
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users = $this->role->users()->with('offices')->get();
        $statuses = [
            'all' => @$users->count() ?: 0,
            'active' => @$users->where('employee_status', 'active')->count() ?: 0,
            'inactive' => @$users->where('employee_status', 'inactive')->count() ?: 0,
        ];
        return view('hris::index', compact('users', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $role = $this->role;

        return view('hris::create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreRequest $request)
    {
        $data = $request->getSanitized();

        $user = User::create($data);
        $role = $this->role;

        $user->roles()->attach([$role->id]);

        return redirect()->route('hris.show', $user->id)
            ->with('success', 'Employee registered successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $offices = Office::get();

        return view('hris::show', compact('user','offices'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('hris::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);
        $user->offices()->detach();

        if (@$data['office_ids']) {
            $user->offices()->attach($data['office_ids']);
        }

        return redirect()->back()
            ->with('success', 'Employee registered successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
