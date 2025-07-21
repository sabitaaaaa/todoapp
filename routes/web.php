
<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\usercontrollers;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\studentcontroller;
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

// Route::get('/about-us', function () {
//     $name = "Amiadjbjft";
//     $age = 2343;
//     return view('new.about-us', compact('name', 'age'));
// });

Route::get('/contact', [FrontendController::class, 'contact']);
Route::view('user-form','user-form');
Route::view('user','user');

Route::get('adduser', [usercontroller::class, 'adduser']);
Route::post('users', [usercontrollers::class, 'users']);


Route::view('add','form');
Route::post('add', [studentcontroller::class, 'add']);
Route::get('record',[studentcontroller::class,'records']);



Route::get('delete_record/{id}',[studentcontroller::class,'delete_record']);
Route::get('edit_record/{id}',[studentcontroller::class,'edit_record']);
Route::post('update_data/{id}',[studentcontroller::class,'update_data']);
 


Route::get('/trek/recommend', [TrekController::class, 'showForm'])->name('trek.form');
Route::post('/trek/recommend', [TrekController::class, 'recommendTrek'])->name('trek.recommend');



Route::get('/user-form', function () {
    return view('user-form.blade.php');
});


