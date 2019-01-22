<?php

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

Route::get('/', function()
{
    return View::make('web.pages.home');
});
Route::get('about', function()
{
    return View::make('web.pages.about');
});
Route::get('projects', function()
{
    return View::make('web.pages.projects');
});
Route::get('contact', function()
{
    return View::make('web.pages.contact');
});
/*
 * Start of  Admin Routes
 *
 *
 * */
Route::get('admin/login', function()
{
    return View::make('admin.auth.login');
});

Route::get('admin/register', function()
{
    return View::make('admin.auth.register');
});

Route::get('admin/dashboard', function()
{
    return View::make('admin.dashboard.index');
});
/*
 * End of Admin Routes
 *
 *
 * */