<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleGeneratorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ComponentGeneratorController;
use App\Http\Controllers\JsonGeneratorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
  return redirect()->route('dashboard');
})->name('index');

// Route::get('dashboard/show/{filename}', [DashboardController::class, 'show'])->name('dashboard.show');
// Route::get('dashboard/flowchart', [DashboardController::class, 'flowchart'])->name('dashboard.flowchart');
// Route::get('dashboard/flowy', [DashboardController::class, 'flowy'])->name('dashboard.flowy');
// Route::post('dashboard/flowchartSave', [DashboardController::class, 'flowchartSave'])->name('dashboard.flowchartSave');
// Route::get('dashboard/flowchartGet', [DashboardController::class, 'flowchartGet'])->name('dashboard.flowchartGet');

Route::get('admin-panel', function() {
  return view('dummy.admin-panel');
});

Route::get('processing-page', function() {
  return view('dummy.processing-page');
})->name('processing-page');

Route::get('admin-dashboard', function() {
  return view('dummy.admin-dashboard');
})->name('admin-dashboard');

Route::get('admin-dashboard-revenue', function() {
  return view('dummy.admin-dashboard-revenue');
})->name('admin-dashboard-revenue');

Route::get('citizen-profile', function() {
  return view('dummy.citizen-profile');
})->name('citizen-profile');

Route::get('hr-dashboard', function() {
  return view('dummy.hr-dashboard');
})->name('hr-dashboard');

Route::get('treasury-dashboard', function() {
  return view('dummy.treasury-dashboard');
})->name('treasury-dashboard');

Route::get('financial-report', function() {
  return view('dummy.financial-report');
})->name('financial-report');

Auth::routes(['verify' => true]);


