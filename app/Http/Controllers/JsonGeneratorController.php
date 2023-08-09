<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJsonGeneratorRequest;
use App\Http\Requests\UpdateJsonGeneratorRequest;
use App\Models\Flowchart;
use App\Services\ComponentToJsonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Form\Entities\Form;
use Modules\Office\Entities\Office;

class JsonGeneratorController extends Controller
{
    /**
     * @var ComponentToJsonService
     */
    private ComponentToJsonService $componentToJsonService;

    /**
     * @param ComponentToJsonService $componentToJsonService
     */
    public function __construct(ComponentToJsonService $componentToJsonService)
    {
        $this->middleware(['auth']);
        $this->componentToJsonService = $componentToJsonService;
    }

    public function index()
    {
        $allJsonFiles = $this->componentToJsonService->getAllJsonFileNames();
        return view('pages.json-generator.index', compact('allJsonFiles'));
    }

    public function create()
    {
        return view('pages.json-generator.create');
    }

    public function show($fileName)
    {
        $jsonFile = $this->componentToJsonService->getJsonFile($fileName);

        if (empty($jsonFile)) {
            abort(404);
        }

        return view('pages.json-generator.show', compact('jsonFile', 'fileName'));
    }

    public function edit($fileName)
    {
        $form = Form::where('file', 'like', "%{$fileName}%")->firstOrFail();
   
        $jsonFile = $form->json;
        $flowchartId = $form->flowchart_id;
        $formId = $form->id;
        if (empty($jsonFile)) {
            abort(404);
        }

        $flowchartList = Flowchart::get();
        if (!is_null($flowchartId)) {    
            $flowchart = Flowchart::findOrFail($flowchartId);
            $workFlow = $flowchart->json;
        } else {
            $workFlow = null;
        }

        return view('pages.json-generator.edit', compact(
            'jsonFile', 
            'fileName', 
            'workFlow', 
            'flowchartList',
            'flowchartId',
            'formId',
            'form'
        ));
    }

    public function update(UpdateJsonGeneratorRequest $request, $fileName)
    {
        $data = $request->all();

        $form = Form::where('file', 'like', "%{$fileName}%")->firstOrFail();
        $jsonFile = $this->componentToJsonService->getJsonFile($fileName);

        if (empty($jsonFile)) {
            abort(404);
        }

        $arrayComponent = $data['json_content'];
        $data['json'] = $arrayComponent;

        $form->update($data);

        Storage::disk('public_forms')->put("{$fileName}.json", $arrayComponent);

        return redirect()->route('json-generator.edit', $fileName)
            ->with('success', 'Json update successfully.');
    }

    public function store(StoreJsonGeneratorRequest $request)
    {
        $sanitized = $request->getSanitized();

        $arrayComponent = $this->componentToJsonService->switchFormat($sanitized);

        $department = $sanitized['department'];
        $formName = $sanitized['form_name'];

        Storage::disk('public_forms')->put("{$department} .-. {$formName}.json", json_encode($arrayComponent));

        return redirect()->route('json-generator.index')
            ->with('success', 'Json created successfully.');
    }

    public function createForm()
    {
        $offices = Office::get();

        return view('pages.json-generator.create-form', compact('offices'));
    }

    public function storeForm(Request $request)
    {
        $data = $request->all();
        $office = Office::find($data['office']);
        $officeName = $office->name;
        $formName = $data['form_name'];

        $fileName = "{$officeName} .-. {$formName}.json";

        Storage::disk('public_forms')->put($fileName, json_encode($data['json_content']));

        Form::create([
            'office_id' => $office->id,
            'name' => $formName,
            'file' => $fileName,
            'json' => $data['json_content'],
            'fee' => @$data['fee'],
            'active' => @$data['active'],
        ]);

        return redirect()->route('json-generator.index')
            ->with('success', 'Json created successfully.');
    }

    public function storeWorkflow(Request $request)
    {
        $data = $request->all();

        if(@$data['id']) {
            $form = Form::findOrFail($data['form_id']);
            $form->flowchart_id = $data['id'];
            $form->save();
            $fileName = str_replace('.json', '', $form->file); 
        }
        return redirect()->route('json-generator.index')
            ->with('success', 'Work flow update successfully.');
    }
}
