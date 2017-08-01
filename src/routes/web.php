<?php

use Truemedia\Lwap\App\Http\Controllers\TestController;

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

function a($controllerMethod) { return implode('@', [class_basename($controllerMethod->class), $controllerMethod->name]); }; // Action
function rn($controllerMethod) { return implode('.', [class_basename($controllerMethod->class), $controllerMethod->name]); }; // Route name

/**
  * Section name
  */
$testController = new ReflectionClass(TestController::class);
Route::group(['namespace' => $testController->getNamespaceName()], function() use ($testController) {
    // Page name
    $method = $testController->getMethod('index');
    Route::get('test', a($method))->name( rn($method) );
});
