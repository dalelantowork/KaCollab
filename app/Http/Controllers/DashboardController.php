<?php

namespace App\Http\Controllers;

use App\Models\Flowchart;
use App\Models\Form;
use App\Models\Office;
use App\Services\ComponentToJsonService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        abort(404);
    }
}
