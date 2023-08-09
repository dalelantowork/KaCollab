<?php

namespace Modules\Main\Http\Controllers;

use App\Models\Flowchart;
use App\Models\Form;
use App\Models\Office;
use App\Services\ComponentToJsonService;
use Modules\Form\Entities\Application;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('main::dashboard');
    }
}
