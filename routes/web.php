<?php



use App\Http\Controllers\stdReg;
use App\Http\Controllers\studentReg;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\checkPayment;
use App\Http\Controllers\deleteSession;
use App\Http\Controllers\billController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\noticeController;
use App\Http\Controllers\resultController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\stdResultController;
use App\Http\Controllers\Tutor_access_Controller;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\paymentGatewayController;
use App\Http\Controllers\Student_access_Controller;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/contactus', function () {
     return view('contactus');
   
});

Route::get('/rates', function () {
    return view('rates');
  
});

Route::get('/prerequisites',function(){
    return view('docs');
});

Route::get('/gallery',function(){
    return view('photo');
});


// Route::get('/admin',[UserController::class,'index']);
  

Route::get('/admin/createUser', function () {
    return view('admin.createUser');
  
});

// Route::get('/quiz', function () {
//     return view('Student.quiz');
  
// });


// Route::get('/student_access', [App\Http\Controllers\Student_access_Controller::class, 'showDash'])->name('student_access');

    Route::get('/reg',[stdReg::class,'create'])->name('reg');
    Route::post('/signup',[stdReg::class,'store'])->name('signup');

    Route::post('/saveContact','App\Http\Controllers\ContactController@storeContact');




Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class)->middleware('Admin');
    Route::resource('users', UserController::class)->middleware('Admin');
    Route::resource('products', ProductController::class)->middleware('Admin');
    Route::resource('students', StudentController::class)->middleware('Admin');
    Route::resource('notices', noticeController::class)->middleware('Admin');
    Route::resource('results', resultController::class)->middleware('Admin');
    Route::resource('costs',paymentController::class)->middleware('Admin');
    Route::resource('deleteSession',deleteSession::class)->middleware('Admin');
    Route::resource('profile',profileController::class)->middleware('Student');
    Route::resource('checkPay',checkPayment::class)->middleware('Admin');
    
    //Route::resource('reg',studentReg::class);

    Route::get('/viewContact', function () {
        $ConData=App\Models\Contact::all();
        return view('Admin.viewContact')->with('contacts',$ConData);
    });



    Route::get('/studentaccess',[Student_access_Controller::class,'showDash'])->name('student_access');
    
    
    Route::get('/pay-form',[paymentGatewayController::class,'index'])->name('pay-form');
    Route::post('/pay-submit',[paymentGatewayController::class,'payDone'])->name('pay-submit');
    Route::get('/quiz',[Student_access_Controller::class,'showQuiz'])->name('quiz');
    Route::get('/pastpapers',[Student_access_Controller::class,'showPP'])->name('pp');
    Route::get('/exam',[stdResultController::class,'showResult'])->name('exam');
    Route::get('/bill',[billController::class,'showBill'])->name('bill');
    Route::post('/billStore',[billController::class,'billStore'])->name('billStore');
    Route::get('/fixexam',[ExamController::class,'create'])->name('fixexam');
    Route::get('/viewexamdate',[ExamController::class,'index'])->name('viewexamdate');
    Route::post('/saveExam',[ExamController::class,'store'])->name('saveExam');
    Route::get('/AdminViewExamDate',[ExamController::class,'adminExamIndex'])->name('AdminViewexamdate');
    
   
    Route::get('/tutoraccess',[Tutor_access_Controller::class,'showDashTutor'])->name('tutoraccess');


    Route::get('/studentnotice',[Student_access_Controller::class,'showNotice'])->name('studentnotice');
    Route::get('/tutornotice',[Tutor_access_Controller::class,'showNotice'])->name('tutornotice');

    Route::get('/createSession',[sessionController::class,'create'])->name('createSession');
    Route::get('/viewSession',[sessionController::class,'index'])->name('viewSession');
    Route::post('/sessionStore',[sessionController::class,'store'])->name('sessionStore');
    Route::get('/sessionDelete',[sessionController::class,'delete'])->name('sessionDelete');
    Route::post('/adminSession',[sessionController::class,'adminindex'])->name('adminSession');
    Route::get('/selectDate',[sessionController::class,'selectDate'])->name('selectDate');
    // Route::get('/editAtten',[sessionController::class,'editAtten'])->name('editAtten');
    
    Route::get('/dashboard',function(){
        return view('Admin.dashboard');
    });

    Route::get('/tutorDashboard',function(){
        return view('Tutor.tutorDashboard');
    });



});

//Route::get('/dashboard', [ReviewController::class, 'index'])->name('admin.dashboard');






   
    
    