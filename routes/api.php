<?php

use Illuminate\Http\Request;
use App\personas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/CrearPersona', function(Request $request){
    $persona = new personas();
    $persona->nombre  = 'Jorge 2';
    $persona->edad = 22;
    $persona->origen = $_SERVER['SERVER_ADDR'];

    $persona->save();

    return $persona;
});

Route::post('/git-auto-deploy', function(){
    Artisan::call('git:deploy');

    return 'hola';
});
