<?php

namespace Modules\Barangay\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Barangay\Entities\Barangay;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        //return view('user::user.index', compact('users'));
        $barangays = Barangay::sortable()->paginate();
        return view('barangay::barangay.index', compact('barangays'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('barangay::barangay.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $sanitized = $request->all();

        Barangay::create($sanitized);

        return redirect()->route('barangay.index')
            ->with('success', 'Barangay created successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $barangay = Barangay::findOrFail($id);
        return view('barangay::barangay.edit', compact('barangay'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $barangay = Barangay::findOrFail($id);
        $sanitized = $request->all();
        $barangay->update($sanitized);

        return redirect()->route('barangay.edit', [$barangay])
            ->with('success', 'Barangay updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $barangay = Barangay::findOrFail($id);
        $barangay->delete();

        return redirect()->route('barangay.index')
            ->with('success', 'Barangay deleted successfully');
    }
}
