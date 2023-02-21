<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DownloadsController;

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

Route::get('/download/{path}/{file}',[UploadController::class,'download'])->name('Upload.download');



Route::get('/allfilesbyid/{id}',[UploadController::class,'allFilesbyid'])->name('Upload.allFilesbyid');
//Route::get('/',[UploadController::class,'allFiles']);


/*Route::post('/upload',[UploadController::class,'upload']);
Route::post('store',[UploadController::class,'store']);
*/
Route::post('/dashboard/upload', [UploadController::class, 'store'])->name('Upload.store');
Route::post('/tmp-upload',[UploadController::class,'tmpUpload']);
Route::delete('/tmp-delete',[UploadController::class,'tmpDelete']);

//okRoute::get('/dashboard/department/', function () {
//    return view('layouts.departments.index', ['name' => 'James']);
//});

//Route::get('/dashboard/department/',[DepartmentController::class,'index']);
//Route::get('/dashboard/department/create',[DepartmentController::class,'create']);
Route::post('/admin/department/upload', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/',[DepartmentController::class,'allDepartments']);
Route::resource('/department', DepartmentController::class);
//Route::resource('/admin/department', DepartmentController::class)->name('*','admin.department');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});




require __DIR__.'/auth.php';
