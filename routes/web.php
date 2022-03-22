<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function () {
    // when using eloquent
    $dataSet =  DB::table('users')->select(['id','name'])->take(50000)->get();
    
    //$dataSet =  User::select(['id','name','email'])->take(20000)->get();
    // when using query builder
    // $users = DB::table('users')->chunk(100, function ($users) {
    //     foreach ($users as $post) {
    //         // Process users
    //     }
    // });
    return view('users', compact('dataSet'));
});
