<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [Controller::class, 'index']);
Route::get('/new-transactions', [HomeController::class, 'transactions']);
Route::get('/registration/{id}', [HomeController::class, 'registration']);
Route::get('/transactions/search', [HomeController::class, 'search']);
Route::post('/registration', [HomeController::class, 'store']);
Route::get('/invoices', [HomeController::class, 'invoices']);
Route::get('/invoice_update/{id}', [HomeController::class, 'invoice_update']);
Route::get('/proforma_invoice_print/{id}', [HomeController::class, 'print']);
Route::get('/agent_search', [HomeController::class, 'agent_search']);
Route::get('/agentid', [HomeController::class, 'agentid']);
Route::get('/transaction_search', [HomeController::class, 'transaction_search']);
Route::get('/bulk_import', [HomeController::class, 'import_bulk']);
Route::post('/bulk_import', [HomeController::class, 'store_bulk']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// agents
Route::get('/agents', [AgentController::class, 'index']);
Route::get('/agentsform', function () {
    return view('addagentForm');
});
Route::get('/projectform', function () {
    return view('addprojectform');
});
Route::post('/addagents', [AgentController::class, 'store']);
Route::get('/editagents/{id}', [AgentController::class, 'edit']);
Route::post('/updateagent/{id}', [AgentController::class, 'update']);
Route::get('/deleteagent/{id}', [AgentController::class, 'destroy']);

// projects
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/editproject/{id}', [ProjectController::class, 'edit']);
Route::post('/addprojects', [ProjectController::class, 'create']);

Route::post('/updateprojects/{id}', [ProjectController::class, 'update']);
Route::get('/deleteproject/{id}', [ProjectController::class, 'destroy']);
