<?php

namespace Modules\Office\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\Office;

class OfficeController extends Controller
{

    /**
     *
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     */
    public function index()
    {
        $offices = Office::sortable()->paginate();

        return view('office::office.index', compact('offices'));
    }

    /**
     * @return Factory|View|Application
     */
    public function create()
    {
        $office = new Office;
        return view('office::office.create', compact('office'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request) 
    {
        $sanitized = $request->all();
        $sanitized['default'] = isset($sanitized['default']);
        Office::create($sanitized);

        return redirect()->route('office.index')
            ->with('success', 'Office created successfully.');
    }

    /**
     * @param Office $office
     * @return Factory|View|Application
     */
    public function show(Office $office) 
    {
        return view('office::office.show', compact('office'));
    }

    /**
     * @param Office $office
     * @return Factory|View|Application
     */
    public function edit(Office $office) 
    {
        return view('office::office.edit', compact('office'));
    }

    /**
     * @param Request $request
     * @param Office $office
     * @return RedirectResponse
     */
    public function update(Request $request, Office $office) 
    {
        $sanitized = $request->all();
        $sanitized['default'] = isset($sanitized['default']);
        
        $office->update($sanitized);

        return redirect()->route('office.edit', [$office])
            ->with('success', 'Office updated successfully');
    }

    /**
     * @param Office $office
     * @return RedirectResponse
     */
    public function destroy(Office $office) 
    {
        $office->delete();

        return redirect()->route('office.index')
            ->with('success', 'Office deleted successfully');
    }
}
