<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\LoanCalculatorController;
use App\Http\Controllers\LeaseController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SendPropertyController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SentByUsersController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\FinancingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
// Login routes
// Route::get('/logins', [AuthController::class,'showLoginForm'])->name('login');

// Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class,'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard')->middleware('auth');

// Registration routes

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class,'register']);
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('reset.password');

Route::get('/forsaleland', [HomeController::class, 'forsaleland'])->name('forsaleland');
Route::get('/forleaseland', [HomeController::class, 'forleaseland'])->name('forleaseland');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::get('/Oneantonio', [HomeController::class, 'book'])->name('book');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('/reservation', [AppointmentController::class, 'appointments'])->name('admin.appointments');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointment.store');
Route::put('/appointments/{id}/accept', [AppointmentController::class, 'acceptAppointment'])->name('appointment.accept');

Route::delete('/appointments/{id}/cancel', [AppointmentController::class, 'cancelAppointment'])->name('appointment.cancel');

// Route::delete('/appointments/{appointment}', [AppointmentController::class, 'delete'])->name('appointment.delete');


//admin dashboard
Route::get('/showprop', [PropertiesController::class, 'index'])->name('showprop');
Route::get('/dashboard', [HomeController::class, 'index'])->name('index');

// Route::get('/leisure', [LeisureController::class, 'index'])->name('leisure.index');
Route::post('/properties', [PropertiesController::class, 'store'])->name('properties.store');
// Route::delete('/properties/{id}',[PropertiesController::class, 'destroy'])->name('property.destroy');
Route::delete('/properties/{id}', [PropertiesController::class, 'destroy'])->name('property.destroy');

Route::put('/properties/{id}', [PropertiesController::class, 'update'])->name('properties.update');
// Route::put('/leisure/{id}', [LeisureController::class, 'update'])->name('leisure.update');
// Route::delete('leisure/{leisure}', [LeisureController::class,'delete'])->name('leisure.delete');
Route::get('/concept', [ConceptController::class, 'index'])->name('concept');
Route::post('/concept', [ConceptController::class, 'store'])->name('concept.store');
Route::delete('/concepts/{id}',[ConceptController::class, 'destroy'])->name('concepts.destroy');


Route::get('/amenity', [AmenityController::class, 'index'])->name('amenity');
Route::post('/amenity', [AmenityController::class, 'store'])->name('amenity.store');


Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact-message', [ContactController::class, 'index'])->name('admin.index');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
// Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');


// Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
// Route::get('/email-form', function () {
//     return view('email_form');
Route::get('/inquiry', [InquiryController::class, 'send_inquiry'])->name('inquiry.store');
Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiry.index');

// routes/web.php

Route::get('/emails', [EmailController::class, 'email'])->name('admin.semail.index');
Route::get('/email/send', [EmailController::class, 'create'])->name('email.send');
Route::post('/email/send', [EmailController::class, 'send'])->name('email.send.submit');


Route::get('/forsale', [HomeController::class, 'forsale'])->name('forsale');

//


Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
Route::post('/sales', [SaleController::class, 'store'])->name('sales.store');
Route::put('/sales/{id}', [SaleController::class, 'update'])->name('sales.update');
Route::delete('/sales/{id}', [SaleController::class, 'destroy'])->name('sales.destroy');



//
Route::get('/viewsale{id}', [HomeController::class, 'viewsale'])->name('viewsale');

//loan calculator
Route::get('/calculator', [LoanCalculatorController::class, 'index'])->name('loan.calculator.index');
Route::post('/calculate', [LoanCalculatorController::class, 'calculate'])->name('loan.calculator.calculate');

//for lease
Route::get('/lease', [LeaseController::class, 'index'])->name('lease.index');
Route::post('/leases', [LeaseController::class, 'store'])->name('lease.store');
// Route::put('/lease/{id}', [LeaseController::class, 'update'])->name('lease.update');
Route::put('/lease/{id}', [LeaseController::class, 'update'])->name('lease.update');
Route::delete('/lease/{lease}', [LeaseController::class, 'destroy'])->name('lease.destroy');


//
Route::get('/viewlease{id}', [HomeController::class, 'viewlease'])->name('viewlease');

Route::get('/forlease', [HomeController::class, 'forlease'])->name('forlease');



Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create');


Route::post('/property', [PropertyController::class, 'store'])->name('property.store');

//upload\
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
Route::post('/uploads/{id}/accept', [UploadController::class, 'accept'])->name('upload.accept');
Route::post('/uploads/{id}/decline', [UploadController::class, 'decline'])->name('upload.decline');
Route::get('/uploads/{id}', [UploadController::class,'show'])->name('uploads.show');


Route::post('/filter-properties', function (Request $request) {
    // Retrieve the name from the request
    $name = $request->input('name');

    // Redirect to the filter method of PropertyController with name data
    return app()->make('App\Http\Controllers\PropertyController')->filter($name);
})->name('property.filter.submit');

//
Route::get('/locale/{lange}',[LocalizationController::class, 'index']);
Route::match(['get','post'],'/botman', [BotManController::class, 'handle']);
Route::get('/greeting/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    // ...
});

//contact form
Route::get('/contactform', [HomeController::class, 'contactform'])->name('contactform');

//award
Route::get('/award', [HomeController::class, 'award'])->name('award');
Route::get('/awards', [HomeController::class, 'awardindex'])->name('award.index');
Route::post('/awards', [HomeController::class, 'store'])->name('award.store');
// Route::put('/lease/{id}', [LeaseController::class, 'update'])->name('lease.update');



Route::put('/award/{id}', [HomeController::class, 'update'])->name('awards.update');

Route::delete('award/{award}', [HomeController::class,'destroy'])->name('awards.delete');


//logoutzzzzzzzzzzzzzzzzzzzzzz
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//financing
Route::get('/financing', [FinancingController::class, 'index'])->name('financing.index');
Route::post('/financing', [FinancingController::class, 'store'])->name('financing.store');
Route::get('/financing/{id}', [FinancingController::class, 'show'])->name('financing.show');
Route::put('/financing/{id}', [FinancingController::class, 'update'])->name('financing.update');


Route::delete('/financing/{id}', [FinancingController::class, 'destroy'])->name('financing.destroy');
