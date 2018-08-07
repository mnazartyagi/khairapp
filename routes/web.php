<?php

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

Route::get('/','HomeController@index')->name('home');

Route::post('language',array(
    'uses'=>'LanguageController@choose',
    'Middleware'=>'LanguageChooser',
    ))->name('language.change');

Route::get('/diseases','DiseasesController@getdiseases')->name('diseases');

Route::get('/diseases/{disease}','DiseasesController@viewdiseases')->name('view_diseases');

Route::get('/hospitals','HospitalsController@gethospitals')->name('hospitals');

Route::get('/blogs','BlogsController@getblogs')->name('blogs');

Route::get('/blogs/{blogs}','BlogsController@viewblog')->name('view_blog');

Route::get('/how_it_works','HomeController@how_works')->name('how_works');

Route::get('/contact','HomeController@contact')->name('contact');

Route::post('/contact','HomeController@postcontacts')->name('post.contact');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/ayurveda', function () {
    return view('pages.ayurveda');
})->name('ayurveda');

Route::get('/naturopathy', function () {
    return view('pages.naturopathy');
})->name('naturopathy');

Route::get('/yoga', function () {
    return view('pages.yoga');
})->name('yoga');

Route::post('post/consultation','ConsultController@postConsultation')->name('post.consultation');

Route::post('post/callbacks','CallbacksController@postcallbacks')->name('post.callbacks');

Route::post('post/quote','HospQuotesController@postquote')->name('post.quote');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/export/patient_request/{id}','ExportController@exportpatient')->name('exportpatient');
    Route::post('/send_mail/{id}','ExportController@send_to_hospital')->name('send_to_hospital');
});


Route::group(['prefix' => 'normal_user'], function () {
    Route::get('/login','Auth\NormalUsersLoginController@getlogin')->name('normal_user.getlogin');
    Route::post('/login','Auth\NormalUsersLoginController@postlogin')->name('normal_user.postlogin');
    Route::get('/signup','Auth\NormalUsersLoginController@getsignup')->name('normal_user.getsignup');
    Route::post('/signup','Auth\NormalUsersLoginController@postsignup')->name('normal_user.postsignup');
    Route::post('profile','NormalUsersController@postprofile')->name('normal_user.postprofile');
    Route::get('/documents','NormalUsersController@getdocuments')->name('normal_user.getdocuments');
    Route::post('documents','NormalUsersController@postdocuments')->name('normal_user.postdocuments');
    Route::post('/documents/{delete}','NormalUsersController@deletedocuments')->name('normal_user.deletedocuments');
    Route::post('requests','NormalUsersController@postrequests')->name('normal_user.postrequests');
    Route::get('/treatments','NormalUsersController@viewtreatments')->name('normal_user.viewtreatments');
    Route::get('/','NormalUsersController@getprofile')->name('normal_user.getprofile');
    Route::get('/logout','Auth\NormalUsersLoginController@logout')->name('normal_user.logout');
    //password reset route
    Route::post('/password/email','Auth\NormalUserForgotPasswordController@sendResetLinkEmail')->name('normal_user.password.email');
    Route::get('/password/reset','Auth\NormalUserForgotPasswordController@showLinkRequestForm')->name('normal_user.password.request');
    Route::post('/password/reset','Auth\NormalUserResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\NormalUserResetPasswordController@showResetForm')->name('normal_user.password.reset');
});

Route::group(['prefix' => 'facilities'], function () {
    Route::get('/login','Auth\HospitalsLoginController@getlogin')->name('hospital.getlogin');
    Route::post('/login','Auth\HospitalsLoginController@postlogin')->name('hospital.postlogin');
    Route::get('/profile','HospitalsController@getprofile')->name('hospital.getprofile');
    Route::post('profile','HospitalsController@postprofile')->name('hospital.postprofile');
    Route::get('/documents','HospitalsController@getdocuments')->name('hospital.getdocuments');
    Route::post('documents','HospitalsController@postdocuments')->name('hospital.postdocuments');
    Route::post('/documents/{documents}','HospitalsController@deletedocuments')->name('hospital.deletedocuments');
    Route::get('/updates','HospitalsController@getupdates')->name('hospital.getupdates');
    Route::post('updates','HospitalsController@postupdates')->name('hospital.postupdates');
    Route::get('/','HospitalsController@index')->name('hospital.dashboard');
    Route::get('/logout','Auth\HospitalsLoginController@logout')->name('hospital.logout');
});

Route::get('/search','SearchController@search')->name('search');

Route::get('/packages','PackagesController@packages')->name('packages');

Route::get('/packages/{package}','PackagesController@view_packages')->name('view_packages');

Route::get('/news','NewsController@index')->name('news');

Route::get('news/{slug}','NewsController@view_news')->name('view_news');

Route::get('/offer','OfferController@show')->name('offer');

Route::get('/offers/{slug}','OfferController@view_offer')->name('view_offer');

Route::get('offers/{slug}/book','OfferController@book')->name('book_offer');