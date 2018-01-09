<?php

use Illuminate\Http\Request;

use App\User;

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

Route::get('/', 'TestController@index');

Route::get('/email', function (Request $request) {
    try {
        return response()->json(User::where('email', '=', $request->q)->firstOrFail());
    } catch(Exception $e) {
        return response()->json(['error' => $e->getMessage()], 404);
    }
});
