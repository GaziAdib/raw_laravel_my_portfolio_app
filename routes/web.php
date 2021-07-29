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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/main',  [App\Http\Controllers\MainPagesController::class, 'main'])->name('main.index');



Route::get('/admin/projects/index', [App\Http\Controllers\AdminProjectsController::class, 'index'])->name('admin.projects.index');
Route::get('/admin/projects/create', [App\Http\Controllers\AdminProjectsController::class, 'create'])->name('admin.projects.create');
Route::post('/admin/projects/store', [App\Http\Controllers\AdminProjectsController::class, 'store'])->name('admin.projects.store');
Route::get('/admin/projects/edit/{id}', [App\Http\Controllers\AdminProjectsController::class, 'edit'])->name('admin.projects.edit');
Route::post('/admin/projects/update/{id}', [App\Http\Controllers\AdminProjectsController::class, 'update'])->name('admin.projects.update');
Route::post('/admin/projects/destroy/{id}', [App\Http\Controllers\AdminProjectsController::class, 'update'])->name('admin.projects.destroy');

Route::get('/projects/index', [App\Http\Controllers\MainPagesController::class, 'index'])->name('projects.index');


Route::get('/admin/skills/index', [App\Http\Controllers\AdminSkillController::class, 'index'])->name('admin.skills.index');
Route::get('/admin/skills/create', [App\Http\Controllers\AdminSkillController::class, 'create'])->name('admin.skills.create');
Route::post('/admin/skills/store', [App\Http\Controllers\AdminSkillController::class, 'store'])->name('admin.skills.store');
Route::get('/admin/skills/edit/{id}', [App\Http\Controllers\AdminSkillController::class, 'edit'])->name('admin.skills.edit');
Route::post('/admin/skills/update/{id}', [App\Http\Controllers\AdminSkillController::class, 'update'])->name('admin.skills.update');
Route::delete('/admin/skills/delete/{id}', [App\Http\Controllers\AdminSkillController::class, 'destroy'])->name('admin.skills.destroy');

Route::get('/skills/chart', [App\Http\Controllers\MainPagesController::class, 'chart'])->name('skills.chart');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
