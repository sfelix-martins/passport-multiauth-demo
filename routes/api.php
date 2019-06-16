<?php

use Illuminate\Http\Request;

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

Route::middleware('multi.auth:api')->get('/user', function (Request $request) {
    return [
        $request->user(),
        $request->user('api'),
        $request->user('company'),
        \Illuminate\Support\Facades\Auth::user(),
        \Illuminate\Support\Facades\Auth::guard('api')->user(),
        \Illuminate\Support\Facades\Auth::guard('company')->user(),
        \Illuminate\Support\Facades\Auth::check(),
        \Illuminate\Support\Facades\Auth::id(),
    ];
});

Route::middleware('multi.auth:company')->get('/company', function (Request $request) {
    return [
        $request->user(),
        $request->user('api'),
        $request->user('company'),
        \Illuminate\Support\Facades\Auth::user(),
        \Illuminate\Support\Facades\Auth::guard('api')->user(),
        \Illuminate\Support\Facades\Auth::guard('company')->user(),
        \Illuminate\Support\Facades\Auth::check(),
        \Illuminate\Support\Facades\Auth::id(),
    ];
});

Route::middleware('multi.auth:api,company')->get('/all', function (Request $request) {
    return [
        $request->user(),
        $request->user('api'),
        $request->user('company'),
        \Illuminate\Support\Facades\Auth::user(),
        \Illuminate\Support\Facades\Auth::guard('api')->user(),
        \Illuminate\Support\Facades\Auth::guard('company')->user(),
        \Illuminate\Support\Facades\Auth::check(),
        \Illuminate\Support\Facades\Auth::id(),
    ];
});
