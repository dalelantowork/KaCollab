<?php

namespace Modules\Hris\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hris\Entities\DailyTimeRecord;
use Modules\User\Entities\User;

class DtrController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $dateNow = date('Y-m-d');
        $latest = $user->dtrs()->orderBy('created_at', 'desc')->first();
        return view('hris::dtr.index', compact('user', 'latest'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('hris::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $dtr = DailyTimeRecord::find($data['dtr_id']);

        if (empty($dtr)) {
            DailyTimeRecord::create($data);
        } else if ($dtr->time_in && $dtr->time_out) {
            DailyTimeRecord::create($data);
        } else if (@$dtr->time_in && empty($dtr->time_out)) {
            $dtr->update($data);
        }

        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        $latest = $user->dtrs()->orderBy('created_at', 'desc')->first();
        return view('hris::dtr.show', compact('user','latest'));
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
        //
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
