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

//Admin Panel

//Route::middleware(['auth', 'adminAuth'])->group( function (){
//    Route::get('/admin' , function (){
//        return view('admin.dashboard');
//    });
//});

Route::group( ["prefix" =>"admin" , "middleware" => ["auth" , "adminAuth"]], function (){
    Route::get('/' , function (){
        return view('admin.dashboard');
    });

    //Staff view
    Route::get('/staff' , function (){
       $staff = \App\Models\User::whereRoleId(Role::IS_TEACHER)->paginate();
       return view('admin.staff.dashboard' , compact('staff'));
    })->name('admin.staff');
});





//Main Website

Route::group( ["middleware" => "auth"] , function (){
    //Dashboard
   Route::get( '/dashboard' , function () {
     return view( 'dashboard');
   })->name("dashboard");

   //Notices
   Route::get('/notices', function (){
       return view('notices.notices');
   })->name('notices');

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
