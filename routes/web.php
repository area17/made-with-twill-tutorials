<?php

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

Route::name('homepage')->get('/', 'PageController@homepage');

Route::name('project.index')->get('projects', 'ProjectController@index');
Route::name('project.show')->get('projects/{slug}', 'ProjectController@show');

Route::name('contributor.index')->get('contributors', 'ContributorController@index');
Route::name('contributor.show')->get('contributors/{slug}', 'ContributorController@show');
