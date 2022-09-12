<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;




Route::get('/',[AdminController::class,'main'])->name('root')->middleware('tutorloggedout');
/*
Tutor---------Arabi
*/
Route::get('/tutorhome',[TeacherController::class,'home'])->name('thome')->middleware('tutorloggedin');

Route::get('/mytutorprofile',[TeacherController::class,'myTutorProfile'])->name('tutorprofile')->middleware('tutorloggedin');

Route::get('/tutoreditprofile',[TeacherController::class,'editProfile'])->name('editprofile')->middleware('tutorloggedin');
Route::post('/tutoreditprofile',[TeacherController::class,'editProfileSubmit'])->name('editprofilesubmit')->middleware('tutorloggedin');

Route::get('/jobboard',[TeacherController::class,'getJobs'])->name('getjobs')->middleware('tutorloggedin');
Route::get('/jobboard/{id}',[TeacherController::class,'getJobsSubmit'])->name('getjobssubmit');

Route::get('/myjobs',[TeacherController::class,'myJobs'])->name('myjobs')->middleware('tutorloggedin');

Route::get('/myfeedbacks',[TeacherController::class,'myFeedbacks'])->name('myfeedbacks')->middleware('tutorloggedin');

Route::get('/editpassword',[TeacherController::class,'editPassword'])->name('editpw')->middleware('tutorloggedin');
Route::post('/editpassword',[TeacherController::class,'editPasswordSubmit'])->name('editpwsubmit')->middleware('tutorloggedin');

Route::get('/changepassword',[TeacherController::class,'changePassword'])->name('changepw');
Route::post('/changepassword',[TeacherController::class,'changePasswordSubmit'])->name('changepwsubmit');

Route::get('/betutor',[TeacherController::class,'create'])->name('register')->middleware('tutorloggedout');
Route::post('/betutor',[TeacherController::class,'createSubmit'])->name('registersubmit');

Route::get('/verification',[TeacherController::class,'verify'])->name('verify');
Route::post('/verification',[TeacherController::class,'verifySubmit'])->name('verifysubmit');

Route::get('/tutorlogin',[TeacherController::class,'login'])->name('login')->middleware('tutorloggedout');
Route::post('/tutorlogin',[TeacherController::class,'loginSubmit'])->name('loginsubmit');

Route::get('/tutorforgot',[TeacherController::class,'forgotPassword'])->name('forgotpw');
Route::post('/tutorforgot',[TeacherController::class,'forgotPasswordSubmit'])->name('forgotpwsubmit');

Route::get('/tutorlogout',[TeacherController::class,'logout'])->name('logout');


/*
Student---------Raiyan
*/

Route::get('/register',[StudentController::class,'register'])->name('student.register');
Route::post('/register',[StudentController::class,'adddata']);
Route::get('/login',[StudentController::class,'login'])->name('student.login');
Route::post('/login',[StudentController::class,'userLogin']);
Route::get('/mainpage',[StudentController::class,'mainpage'])->name('student.mainpage')->middleware('auth.user');
Route::get('/logout',[StudentController::class,'logout']);
Route::get('/sendmail',[StudentController::class,'sendmail'])->name('student.mail')->middleware('auth.user');
Route::get('/application',[StudentController::class,'application'])->name('student.application')->middleware('auth.user');
Route::post('/addPost',[StudentController::class,'addPost']);
Route::get('/appfeedback',[StudentController::class,'appfeedback'])->name('student.appfeedback')->middleware('auth.user');
Route::post('/addfeedback',[StudentController::class,'addfeedback']);
Route::get('/userprofile',[StudentController::class,'userprofile'])->name('student.profile')->middleware('auth.user');
Route::get('/editprofile',[StudentController::class,'editprofile'])->middleware('auth.user');
Route::post('/editprofile',[StudentController::class,'profileupdate']);
Route::get('/review',[StudentController::class,'review'])->name('student.review');
Route::get('/contact',[StudentController::class,'contact'])->name('student.contact');
Route::get('/about',[StudentController::class,'about'])->name('student.about');
Route::get('/teacherlist',[StudentController::class,'teacherlist'])->name('student.teacherlist')->middleware('auth.user');
Route::get('/tutor/{id}/{name}',[StudentController::class,'tutor'])->name('student.tutor')->middleware('auth.user');
Route::post('/teacherfeedback',[StudentController::class,'teacherfeedback']);
Route::get('/mytutor',[StudentController::class,'mytutor'])->name('student.mytutor')->middleware('auth.user');    

/*
Admin---------Faiza, Adrita
*/
//Faiza
Route::get('/admin',[AdminController::class,'Home'])->name('admin.home');
Route::get('/teacherdetails',[AdminController::class,'tlist'])->name('Tutor.Tlist');
Route::get('/tdetails/{tutor_id}/{name}/{email}',[AdminController::class,'tutor'])->name('Tutor.teacherdetails');
Route::get('/studentdetails',[AdminController::class,'slist'])->name('Student.Slist');
Route::get('/sdetails/{student_id}/{name}/{email}/{phone}/{username}/{address}',[AdminController::class,'student'])->name('Student.studentdetails');
Route::get('/students/status/{student}/{status_code}',[AdminController::class,'updateStatus'])->name('students.status.update');
Route::get('/tutors/status/{tutor}/{status}',[AdminController::class,'updatetStatus'])->name('tutors.status.update');
Route::get('/ssearch',[AdminController::class,'ssearch'])->name('Student.ssearch');
Route::get('/tsearch',[AdminController::class,'tsearch'])->name('Tutor.tsearch');
Route::get('/course',[AdminController::class,'clist'])->name('Tutor.course');
Route::get('/subdel/{tutor_id}',[AdminController::class,'subdel'])->name('Tutor.course');
Route::get('/schedule',[AdminController::class,'sclist'])->name('Tutor.schedule');
Route::get('/schdel/{tutor_id}',[AdminController::class,'schdel'])->name('Tutor.schedule');
Route::get('/addCourse',[AdminController::class,'addCourse']);
Route::post('/addCourse',[AdminController::class,'addCourse']);

//Adrita
Route::get('/adminlogin',[AdminController::class,'adlogin'])->name('admin.adlogin');
Route::post('/adminlogin',[AdminController::class,'adloginSubmit'])->name('admin.adloginsubmit');
Route::get('/delete/{tutor_id}',[AdminController::class,'delete'])->name('admin.teacherdetails');
Route::get('/remove/{student_id}',[AdminController::class,'remove'])->name('admin.studentdetails');
Route::get('/adminlogout',[AdminController::class,'logout'])->name('admin.logout');
Route::get('/upload',[AdminController::class,'create']);
Route::post('/upload',[AdminController::class,'save']);
Route::get('/upload',[AdminController::class,'display'])->name('admin.upload');
Route::get('/upload/{username}',[AdminController::class,'del'])->name('admin.upload');
Route::view('profile'.'profile',[AdminController::class,'plist'])->name('admin.profile');