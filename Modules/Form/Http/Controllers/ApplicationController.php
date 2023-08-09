<?php

namespace Modules\Form\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Form\Entities\Application;
use Modules\Form\Http\Requests\StoreApplicationRequest;
use Modules\Form\Http\Requests\UpdateApplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreApplicationRequest $request)
    {
        $data = $request->sanitized();

        $application = Application::create($data);

        return redirect()->route('application.show', $application->id);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $application = Application::findOrFail($id);

        $form = $application->form;

        $officeName = @$form->office->name ?: '';
        $formName = @$form->name ?: '';

        $jsonFile = $form->json;

        if (empty($jsonFile)) {
            abort(404);
        }
        return view('pages.application.show', compact(
            'jsonFile',
            'officeName',
            'form',
            'formName',
            'application'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateApplicationRequest $request, $id)
    {
        $application = Application::findOrFail($id);

        $data = $request->sanitized();

        $application->update($data);

        return redirect()->route('application.show', $application->id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        $formId = $application->form_id;
        $application->delete();

        return redirect()->route('dashboard.show', $formId);
    }
}
