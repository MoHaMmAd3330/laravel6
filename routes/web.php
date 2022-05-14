<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


//Code Terminal
//php artisan serve
//php artisan  make:controller FirstController
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



Route::namespace('Front')->group(function () {

    //all route only access or controller
    Route::get('First', 'FirstController@showAdminName');
    Route::get('users', 'UserController@showAdminName');
    Route::get('Admin', 'SacondController@showstring');
});

Route::group(['namespace' => 'Admin'],function(){

    Route::get('second0','SecondController@showstring0')->middleware('auth');
    Route::get('second1','SecondController@showstring1');
    Route::get('second2','SecondController@showstring2');
    Route::get('second3','SecondController@showstring3');
});

Route::get('login',function(){
return 'Password plasae';
}) -> name('login');

Route::get('user', 'userController@index');


Route::resource('news','NewsController');



Route::get('/','Front\UserController@getindex');

Route::get('loading','Front\UserController@getloading');

Route::get('master','Front\UserController@getmaster');

Route::get('aboutus','Front\UserController@getaboutus');

Route::get('home','Front\UserController@gethome');



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');



Route::get('/redirect/{service}','SocialiteController@redirect');
Route::get('/callback/{service}','SocialiteController@callback');


Route::get('fillable','CrudController@getOffers');
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function() {

    Route::group(['prefix' => 'offers'],function (){
//   Route::get('store','CrudController@store');
        Route::get('create', 'CrudController@create')-> middleware('auth');
        Route::post('store', 'CrudController@store')->name('offers.store');
        Route::get('edit/{offer_id}', 'CrudController@EditOffer')-> middleware('auth');
        Route::post('update/{offer_id}', 'CrudController@updateOffer')->name('offers.update')-> middleware('auth');
        Route::get('delete/{offer_id}', 'CrudController@delete')->name('offers.delete')-> middleware('auth');
        Route::get('all', 'CrudController@getAllOffers')->name('offers.all')-> middleware('auth');
});
    Route::get('youtube','CrudController@getVideo')-> middleware('auth');

});






########################## begin Ajax Routes #################
Route::group(['prefix'=>'ajax-offers'],function (){
    Route::get('create','OfferController@create');
    Route::post('store','OfferController@store')->name('ajax.offers.store');
    Route::get('all','OfferController@all')->name('ajax.offers.all');
    Route::post('delete', 'OfferController@delete')->name('ajax.offers.delete');
    Route::get('edit/{offer_id}', 'OfferController@edit')->name('ajax.offers.edit');
    Route::post('update', 'OfferController@update')->name('ajax.offers.update');
});

    ########################## End Ajax Routes #################


    ########################## Authentication && Guards ##########
    Route::group(['middleware'=>'Check','namespace'=>'Auth'],function (){
        Route::get('adults','CustomAuthController@adult')->name('adult');

    });
    Route::get('site','Auth\CustomAuthController@site')->name('site')-> middleware('auth:web');
    Route::get('Admin','Auth\CustomAuthController@admin')->name('admin')-> middleware('auth:admin');
    Route::get('admin','Auth\CustomAuthController@Adminlog')->name('admin.login');
    Route::get('admin/login','Auth\CustomAuthController@adminlogin')->name('admin.login');
    Route::post('Admin/login','Auth\CustomAuthController@checkAdminLogin')->name('save.admin.login');

    ########################## End Authentication && Guards  ########


######################### begin One To One relations #############################
Route::get('has-one','Relation\RelationsController@hasOneRelations');

Route::get('has-one-reserve','Relation\RelationsController@hasOneRelationsReserve');

Route::get('get-user-has-phone','Relation\RelationsController@getUserHasPhone');

Route::get('get-user-not-has-phone','Relation\RelationsController@getUserNotHasPhone');

######################### end One To One relations #############################

######################### begin One To many relations #############################
Route::get('hospital-has-many','Relation\RelationsController@getHospitalDoctors');
Route::get('hospitals','Relation\RelationsController@hospitals')->name('hospitals.all');
Route::get('doctors/{hospital_id}','Relation\RelationsController@doctors')->name('hospital.doctors');
Route::get('hospitals/{hospitals_id}','Relation\RelationsController@delete')->name('hospital.delete');
Route::get('doctors-services','Relation\RelationsController@getDoctorServicers');
Route::get('services-doctors','Relation\RelationsController@getServicersDoctor');
Route::get('doctors/services/{doctor_id}','Relation\RelationsController@getdoctorsServicersbyeid')->name('doctors.services');
Route::post('saveServices-to-doctor','Relation\RelationsController@saveServicesTodoctor')->name('save.Services');

######################### end One To many relations #############################


######################### has One through #############################
Route::get('has-one-through','Relation\RelationsController@getpatientDoctor');

######################### end has One through#############################
