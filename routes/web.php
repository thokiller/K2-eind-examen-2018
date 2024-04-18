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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Auth::routes();
Route::get('/reset/success', 'Auth\ForgotPasswordController@success')->name('password_reset_success');

Route::group(['middleware' => ['status', 'auth', 'emailNotConfirmed']], function () {

     Route::get('/confirm-email', 'EmailController@index');
     Route::get('/confirm-email/{uuid}', 'EmailController@confirm');
     Route::get('/confirm-email/send/{email}', 'EmailController@send');
 });

 Route::group(['middleware' => ['notQualified','status', 'auth', 'emailConfirmed']], function () {
     Route::get('/order/{object}', 'OrderController@order')->name('order_object');
     Route::post('/order/{object}', 'OrderController@orderSend')->name('order_object_send');
     Route::get('/order/edit/{order}', 'OrderController@editOrder')->name('order_object_edit');
     Route::post('/order/edit/{order}', 'OrderController@editOrderSend')->name('order_object_edit_send');
     Route::get('/order/delete/{order}', 'OrderController@deleteOrder')->name('order_object_delete');
     Route::post('/object/available/{object}', 'ObjectsController@isAvailable')->name('object_check');
 });


 Route::group(['middleware' => ['status', 'auth', 'emailConfirmed']], function () {

     Route::get('/objecten', 'ObjectsController@index')->name('objectOverview');
     Route::get('/objects/{id}','ObjectsController@info')->name('object_info');

     Route::get('/thank-you', function (){return view('thank-you');});

     Route::get('/my-settings','MysettingsController@index')->name('mysettings');
     Route::post('/my-settings','MysettingsController@update')->name('my-update');

     Route::view('/qualification', 'qualification');
     Route::post('/qualification', 'QualificationController@store');

     Route::get('/order-detail/{id}','OrderController@detail')->name('order-detail');
     Route::get('/my-orders','OrderController@myorders')->name('my-order');
     Route::get('/order/invoice/{order}','OrderController@getInvoice')->name('invoice');

     Route::post('/users/deactivate', 'UsersController@deactivate')->name('users');

 });

 Route::group(['middleware' => ['auth', 'admin']], function () {

     Route::get('/admin/objects', 'ObjectsController@adminIndex');
     Route::view('/admin/objects/create', 'admin.createObject');
     Route::post('/admin/objects/create', 'ObjectsController@store');
     Route::patch('/admin/objects/update/{id}', 'ObjectsController@update');
     Route::get('/admin/objects/edit/{id}', 'ObjectsController@edit');
     Route::delete('/admin/remove/{id}', 'ObjectsController@remove');

     Route::get('/admin/qualifications', 'QualificationController@qualifications');
     Route::post('/admin/qualify/{id}', 'QualificationController@qualify');

     Route::get('/promos', 'PromosController@index')->name('promos');
     Route::post('/promos/save', 'PromosController@save')->name('promossave');
     Route::get('/promos/info/{id}','PromosController@info')->name('promo_info');
     Route::get('/promos/newpromo', 'PromosController@newPromoIndex');
     Route::post('/promos/newpromo', 'PromosController@newPromo')->name('promos_new');
     Route::post('/promos/delpromo', 'PromosController@delPromo')->name('promos_new');

     Route::get('/orders','OrderController@all')->name('allOrders');

     Route::get('/users', 'UsersController@index')->name('users');
     Route::post('/users/delete', 'UsersController@delete')->name('users');

     Route::get('/location/{object}', 'LocationController@index')->name('locationView');
     Route::post('/location/get/{object}', 'LocationController@getInfo')->name('locationPartial');
 });