<?php

use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Notice;
use App\Models\Role;
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


Route::group( ["middleware" => "auth"] , function (){
   Route::get( '/dashboard' , function () {

     $notices = Notice::paginate();
     return view( 'dashboard', compact( 'notices' ) );
   })->name("dashboard");

//   Profile
   Route::get('/profile', function (){
       $roles = Role::all();
       return view('profile',compact('roles'));
   })->name('profile');
   Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');



//   Students cannot use these routes
    Route::group( ["middleware" => "can:admin-teachers-principal-only"], function (){
        // Students
        Route::resource( 'student', StudentController::class);


        //  Teachers
        Route::resource( 'teacher', TeacherController::class );

        //    Notices
        Route::resource( 'notice' , NoticeController::class );
    });

});

require __DIR__.'/auth.php';
