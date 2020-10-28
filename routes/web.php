<?php

use Illuminate\Support\Facades\Route;
use App\Models\branch;
use App\Models\client;
use App\Models\director;

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
// Route::get('/', [App\Http\Controllers\homeController::class,'home1'])->name('home1');

// Route::get('/home', [App\Http\Controllers\homeController::class,'home2'])->name('home2');

Route::get('/', function () {
    $data = ["branches" => branch::all(), "directors" => director::all(), "clients" => client::all()];
    return view('welcome',compact(['data']));
//    $data=App\Models\branch::all();

//     return view('welcome')->with('branches',$data);
//     //dd($data);
   


});



// Route::get('/lands', function () {
//     return view('landsForSale.landForSale');
// });
Route::get('/lands', function () {
    return view('landsForSale.index');
});




Route::get('/home', function () {
//     $data=App\Models\branch::all();
$data = ["branches" => branch::all(), "directors" => director::all(), "clients" => client::all()];
   return view('welcome',compact(['data']));
//     return view('welcome')->with('branches',$data);
});

//Route::get('home', [App\Http\Controllers\Auth\homeController::class,'index'])->name('home');

//Auth::routes();


//Admin,Manager,Employees Login Register..
// Authentication Routes...
Route::get('login', [App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class,'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

// Registration Routes...
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class,'register']);


// Password Reset Routes...
Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class,'reset'])->name('password.update');

// Confirm Password (added in v6.2)
Route::get('password/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class,'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class,'confirm']);

// Email Verification Routes...
Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class,'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class,'verify'])->name('verification.verify'); // v6.x
/* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
Route::get('email/resend', [App\Http\Controllers\Auth\VerificationController::class,'resend'])->name('verification.resend');

//Admin,Manager,Employees Dashboards.
Route::get('/admin', [App\Http\Controllers\adminController::class,'index'])->name('admin')->middleware('admin');
Route::get('/manager', [App\Http\Controllers\managerController::class,'index'])->name('manager')->middleware('manager');
Route::get('/hrm', [App\Http\Controllers\hrmController::class,'index'])->name('hrm')->middleware('hrm');
Route::get('/unknown', [App\Http\Controllers\unknownController::class,'index'])->name('unknown')->middleware('unknown');
Route::get('/accounting', [App\Http\Controllers\accountingController::class,'index'])->name('accounting')->middleware('accounting');
Route::get('/emp', [App\Http\Controllers\empController::class,'index'])->name('emp')->middleware('emp');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/adminAddBranch', [App\Http\Controllers\adminController::class,'addBranch'])->name('adminAddBranch')->middleware('admin');
Route::get('/adminAddingBranch', [App\Http\Controllers\adminController::class,'addingBranch'])->name('adminAddingBranch')->middleware('admin');

Route::get('/adminAddClient', [App\Http\Controllers\adminController::class,'addClient'])->name('adminAddClient')->middleware('admin');
Route::post('/adminAddingClient', [App\Http\Controllers\adminController::class,'addingClient'])->name('adminAddingClient')->middleware('admin');

Route::get('/adminAddOwner', [App\Http\Controllers\adminController::class,'addOwner'])->name('adminAddOwner')->middleware('admin');
Route::post('/adminAddingOwner', [App\Http\Controllers\adminController::class,'addingOwner'])->name('adminAddingOwner')->middleware('admin');

Route::get('/addAdmin', [App\Http\Controllers\adminController::class,'addAdmin'])->name('addAdmin')->middleware('admin');
Route::get('/adminDetails', [App\Http\Controllers\adminController::class,'adminDetails'])->name('adminDetails')->middleware('admin');

Route::get('/addManager', [App\Http\Controllers\adminController::class,'addManager'])->name('addManager')->middleware('admin');
Route::get('/managerDetails', [App\Http\Controllers\adminController::class,'managerDetails'])->name('managerDetails')->middleware('admin');

Route::get('/addCustomer', [App\Http\Controllers\adminController::class,'addCustomer'])->name('addCustomer')->middleware('admin');
Route::get('/customerDetails', [App\Http\Controllers\adminController::class,'customerDetails'])->name('customerDetails')->middleware('admin');

Route::get('/addemp', [App\Http\Controllers\adminController::class,'addemp'])->name('addemp')->middleware('admin');
Route::get('/empDetails', [App\Http\Controllers\adminController::class,'empDetails'])->name('empDetails')->middleware('admin');



Route::post('/uploadBranch', [App\Http\Controllers\adminController::class,'uploadBranch'])->name('uploadBranch')->middleware('admin');
//Route::get('/BranchPDF', [App\Http\Controllers\adminController::class,'adminPDF'])->name('adminPDF')->middleware('admin');
Route::get('/convertPDF', [App\Http\Controllers\adminController::class,'convertBranchPDF'])->name('convertBranchPDF')->middleware('admin');


Route::get('/showBranch/{bid}', [App\Http\Controllers\adminController::class,'showBranch'])->name('showBranch')->middleware('admin');
Route::get('/hideBranch/{bid}', [App\Http\Controllers\adminController::class,'hideBranch'])->name('hideBranch')->middleware('admin');
Route::get('/deleteBranch/{bid}', [App\Http\Controllers\adminController::class,'deleteBranch'])->name('deleteBranch')->middleware('admin');
Route::get('/editeBranch/{bid}', [App\Http\Controllers\adminController::class,'editeBranch'])->name('editeBranch')->middleware('admin');
Route::post('/updateBranch', [App\Http\Controllers\adminController::class,'updateBranch'])->name('updateBranch')->middleware('admin');
Route::get('/showDirector/{did}', [App\Http\Controllers\adminController::class,'showDirector'])->name('showDirector')->middleware('admin');
Route::get('/hideDirector/{did}', [App\Http\Controllers\adminController::class,'hideDirector'])->name('hideDirector')->middleware('admin');
Route::get('/showClient/{clientid}', [App\Http\Controllers\adminController::class,'showClient'])->name('showClient')->middleware('admin');
Route::get('/hideClient/{clientid}', [App\Http\Controllers\adminController::class,'hideClient'])->name('hideClient')->middleware('admin');

Route::get('/calendar', [App\Http\Controllers\adminController::class,'calendar'])->name('adminCalendar')->middleware('admin');


Route::get('/composeAdmin', [App\Http\Controllers\adminController::class,'composeAdmin'])->name('composeAdmin')->middleware('admin');
Route::post('/AdminUploadMSG', [App\Http\Controllers\adminController::class,'AdminUploadMSG'])->name('AdminUploadMSG')->middleware('admin');

Route::get('/inboxAdmin', [App\Http\Controllers\adminController::class,'inboxAdmin'])->name('inboxAdmin')->middleware('admin');
    //'admin.message.inboxAdmin'

Route::get('/readAdmin/{msgID}', [App\Http\Controllers\adminController::class,'readAdmin'])->name('readAdmin')->middleware('admin');
    //'admin.message.readAdmin'

Route::get('/sentAdmin', [App\Http\Controllers\adminController::class,'sentAdmin'])->name('sentAdmin')->middleware('admin');

Route::get('/TrashAdmin', [App\Http\Controllers\adminController::class,'TrashAdmin'])->name('TrashAdmin')->middleware('admin');

Route::get('/deleteInboxMSG/{msgID}', [App\Http\Controllers\adminController::class,'deleteInboxMSG'])->name('deleteInboxMSG')->middleware('admin');
Route::get('/deleteSentMSG/{msgID}', [App\Http\Controllers\adminController::class,'deleteSentMSG'])->name('deleteSentMSG')->middleware('admin');
Route::get('/AdminDeleteMSG/{msgID}', [App\Http\Controllers\adminController::class,'AdminDeleteMSG'])->name('AdminDeleteMSG')->middleware('admin');

//---------------------------------------------------------------
//---------------------------------------------------------------
//---------------------------------------------------------------
//---------------------------------------------------------------

//Customer Login Register..
// Authentication Routes...
Route::get('loginCus', [App\Http\Controllers\AuthCustomer\LoginCusController::class,'showLoginForm'])->name('loginCus');
Route::post('loginCus', [App\Http\Controllers\AuthCustomer\LoginCusController::class,'login']);
Route::post('logoutCus', [App\Http\Controllers\AuthCustomer\LoginCusController::class,'logout'])->name('logoutCus');

// Registration Routes...
Route::get('registerCus', [App\Http\Controllers\AuthCustomer\RegisterCusController::class,'showRegistrationForm'])->name('registerCus');
Route::post('registerCus', [App\Http\Controllers\AuthCustomer\RegisterCusController::class,'register']);

// Password Reset Routes...
Route::get('password/resetCus', [App\Http\Controllers\AuthCustomer\ForgotPasswordCusController::class,'showLinkRequestForm'])->name('password.requestCus');
Route::post('password/emailCus', [App\Http\Controllers\AuthCustomer\ForgotPasswordCusController::class,'sendResetLinkEmail'])->name('password.emailCus');

Route::get('password/resetCus/{token}', [App\Http\Controllers\AuthCustomer\ResetPasswordCusController::class,'showResetForm'])->name('password.resetCus');
Route::post('password/resetCus', [App\Http\Controllers\AuthCustomer\ResetPasswordCusController::class,'reset'])->name('password.updateCus');

// Confirm Password (added in v6.2)
Route::get('password/confirmCus', [App\Http\Controllers\AuthCustomer\ConfirmPasswordCusController::class,'showConfirmForm'])->name('password.confirmCus');
Route::post('password/confirmCus', [App\Http\Controllers\AuthCustomer\ConfirmPasswordCusController::class,'confirm']);

// Email Verification Routes...
Route::get('email/verifyCus', [App\Http\Controllers\AuthCustomer\VerificationCusController::class,'show'])->name('verification.noticeCus');
Route::get('email/verifyCus/{id}/{hash}', [App\Http\Controllers\AuthCustomer\VerificationCusController::class,'verify'])->name('verification.verifyCus'); // v6.x
/* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
Route::get('email/resendCus', [App\Http\Controllers\AuthCustomer\VerificationCusController::class,'resend'])->name('verification.resendCus');


// //Customer Dashboards.
Route::get('/customer', [App\Http\Controllers\CustomerController::class,'index'])->name('customer')->middleware('customer');
Route::get('/customer/edit', [App\Http\Controllers\CustomerController::class,'edit'])->name('customer.edit')->middleware('customer');
Route::get('/customer/myloans', [App\Http\Controllers\CustomerController::class,'customerMyloan'])->name('customerMyloan')->middleware('customer');
Route::post('/customerUpdate', [App\Http\Controllers\CustomerController::class,'editCusDetails'])->name('editCusDetails')->middleware('customer');
Route::get('/customer/EditProfile', [App\Http\Controllers\CustomerController::class,'CusEditProfile'])->name('CusEditProfile')->middleware('customer');

Route::get('/deleteCusAccount/{id}', [App\Http\Controllers\CustomerController::class,'deleteCusAccount'])->name('deleteCusAccount')->middleware('customer');


//Manager
Route::get('/manager/add/customer', [App\Http\Controllers\managerController::class,'ManageraddCustomer'])->name('ManageraddCustomer')->middleware('manager');
Route::get('/manager/customer/Details', [App\Http\Controllers\managerController::class,'ManagerCustomerDetails'])->name('ManagerCustomerDetails')->middleware('manager');
Route::get('/manager/add/employees', [App\Http\Controllers\managerController::class,'ManagerAddEmployees'])->name('ManagerAddEmployees')->middleware('manager');
Route::get('/manager/emp/Details', [App\Http\Controllers\managerController::class,'ManagerEmployeeDetails'])->name('ManagerEmployeeDetails')->middleware('manager');
Route::get('/manager/add/loan', [App\Http\Controllers\managerController::class,'ManagerAddLoan'])->name('ManagerAddLoan')->middleware('manager');
Route::get('/manager/add/loanDetails', [App\Http\Controllers\managerController::class,'ManagerAddLoanDetails'])->name('ManagerAddLoanDetails')->middleware('manager');
Route::get('/manager/add/land', [App\Http\Controllers\managerController::class,'ManagerAddLand'])->name('ManagerAddLand')->middleware('manager');
Route::get('/manager/add/landDetails', [App\Http\Controllers\managerController::class,'ManagerAddLandDetails'])->name('ManagerAddLandDetails')->middleware('manager');

Route::post('/uploadLoan', [App\Http\Controllers\managerController::class,'uploadLoan'])->name('uploadLoan')->middleware('manager');
Route::post('/editLoan', [App\Http\Controllers\managerController::class,'editLoan'])->name('editLoan')->middleware('manager');
Route::get('/deleteLoan/{LoanID}', [App\Http\Controllers\managerController::class,'deleteLoanDetails'])->name('deleteLoanDetails')->middleware('manager');

Route::post('/uploadLand', [App\Http\Controllers\managerController::class,'uploadLand'])->name('uploadLand')->middleware('manager');
Route::post('/editLand', [App\Http\Controllers\managerController::class,'editLand'])->name('editLand')->middleware('manager');
Route::get('/deleteLand/{LandID}', [App\Http\Controllers\managerController::class,'deleteLand'])->name('deleteLand')->middleware('manager');


//Hasini

/*Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Single Page View
Route::get('/payment-slip', function () {
    return view('Hasini.PaymentSlip');
});


Route::get('/payment-slip-all-data', function () {
    $data=App\Models\PaymentSlip::all();
    $data = App\Models\PaymentSlip::latest()->paginate(5);
    return view('Hasini.index', compact('data'))
            ->with('data',$data)
            ->with('i', (request()->input('page', 1) - 1) * 5);
});


Route::resource('payment-slip-system', 'PaymentSlipController');

Route::resource('paymentslip', 'App\Http\Controllers\PaymentSlipController');

Route::post('/saveSlipData', 'App\Http\Controllers\PaymentSlipController@store');
Route::post('/saveSlipData', 'App\Http\Controllers\PaymentSlipController@store');


//End Hasini

