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

Route::get('/', 'GalleryController@index')->name('index');
Route::get('index', 'GalleryController@index')->name('index');

Route::group(['prefix' => 'admin'], function() {
    Route::auth();
});

// Auth::routes();
Route::post('drik-logout', 'Auth\LoginController@logout')->name('drik-logout');
Route::get('user-logout', 'UserController@logout')->name('user-logout');

Route::middleware(['guest'])->group(function () {
    Route::get('user-login', 'UserController@login')->name('user-login');
    Route::post('user-registration', 'UserController@registration')->name('user-registration');
    Route::post('make-login', 'UserController@make_login')->name('make-login');
});


// Route::get('home', 'GalleryController@index')->name('home');

Route::get('filter/{category}','FilterController@index')->name('filter');
Route::post('filter','FilterController@filterImage');

Route::post('add_to_cart', 'CartController@addItem');
Route::post('remove_from_cart', 'CartController@removeItem');
Route::get('get_cart', 'CartController@getCart');
Route::get('checkout', 'CheckoutController@index')->name('checkout');


Route::group(['middleware' => ['revalidate','auth', 'contributor']], function(){
// Route::group(['middleware' => 'revalidate'], function(){
	//Route::get('/home', 'HomeController@index');
	Route::get('dashboard', 'HomeController@index');


// Role route
Route::resource('role', 'ErpRoleController');

Route::post('role_permission_store', 'ErpRoleController@rolePermissionStore');
Route::get('role_assign-permission/{id}', 'ErpRoleController@assignPermission');
Route::get('all_document_msg', 'ErpPatientController@allDocumentMsg');


// User route
Route::resource('user', 'ErpUserController');
Route::resource('doc_type_code', 'ErpDocTypeController');
Route::resource('speciality', 'ErpSpecialityController');
Route::get('profile', 'ErpUserController@profile');
Route::put('view_profile', 'ErpUserController@edit_profile');


Route::get('deleteUserView/{id}', 'ErpUserController@deleteUserView');
Route::get('deleteUser/{id}', 'ErpUserController@deleteUser');
Route::get('user/editPassword/{id}','ErpUserController@editPassword');
Route::put('user/changePassword/{id}','ErpUserController@changePassword');
Route::get('user_assign-permission/{user_id}', 'ErpUserController@assignPermission');
Route::post('user_permission_store', 'ErpUserController@userPermissionStore');

//Header route
Route::get('header', 'ErpHeaderController@index_header');
Route::put('header_edit', 'ErpHeaderController@edit_header');

// Base group routes
Route::resource('base_group', 'ErpBaseGroupController');
Route::get('deleteBaseGroupView/{id}', 'ErpBaseGroupController@deleteBaseGroupView');
Route::get('deleteBaseGroup/{id}', 'ErpBaseGroupController@deleteBaseGroup');

// Base setup routes
Route::resource('base_setup', 'ErpBaseSetupController');
Route::get('deleteBaseSetupView/{id}', 'ErpBaseSetupController@deleteBaseSetupView');
Route::get('deleteBaseSetup/{id}', 'ErpBaseSetupController@deleteBaseSetup');

// Designation routes
Route::resource('designation', 'ErpDesignationController');
Route::get('deleteDesignationView/{id}', 'ErpDesignationController@deleteDesignationView');
Route::get('deleteDesignation/{id}', 'ErpDesignationController@deleteDesignation');

// Department routes
Route::resource('department', 'ErpDepartmentController');
Route::get('deleteDepartmentView/{id}', 'ErpDepartmentController@deleteDepartmentView');
Route::get('deleteDepartment/{id}', 'ErpDepartmentController@deleteDepartment');

// Patient routes
Route::resource('patient', 'ErpPatientController');
Route::get('deletePateientView/{id}', 'ErpPatientController@deletePateientView');
Route::get('deletePateient/{id}', 'ErpPatientController@deletePateient');

Route::get('create', ['as' => 'create', 'uses' => 'ErpPatientController@create']);
Route::post('edit', ['as' => 'edit', 'uses' => 'ErpPatientController@edit']);

Route::get('document/create/{id}', 'ErpPatientController@createDoc');
Route::post('document/store', 'ErpPatientController@storeDoc');
Route::get('document/edit/{id}', 'ErpPatientController@editDoc');
Route::put('document/update/{id}', 'ErpPatientController@updateDoc');
Route::get('document/{id}', 'ErpPatientController@documentPdf');
Route::get('deleteDocumentView/{id}', 'ErpPatientController@deleteDocumentView');
Route::get('deleteDocument/{id}', 'ErpPatientController@deleteDocument');


Route::get('patients_doc_types/{id}', ['as' => 'patients_doc_types', 'uses' => 'ErpPatientController@patients_doc_types']);




Route::get('checked_out/{id}', 'ErpPatientController@checkedOut');
Route::get('checkedOutLink/{id}', 'ErpPatientController@checkedOutLink');

Route::get('checked_in/{id}', 'ErpPatientController@checkedIn');
Route::get('checkedInLink/{id}', 'ErpPatientController@checkedInLink');

Route::post('getDocTypeCode', ['as' => 'getDocTypeCode', 'uses' => 'ErpPatientController@getDocTypeCode']);

Route::get('previousVersions/{id}', 'ErpPatientController@previousVersions');

// document preview

Route::get('preview_doc/{id}','ErpPatientController@doc_preview');

//send email
Route::post('send_email/{id}','ErpPatientController@send_email');

//web
// Route::get('home', 'ErpWebController@home');
//Route::get('behabiour', 'ErpWebController@behabiour');

Route::get('support_plan', ['as' => 'support_plan', 'uses' => 'ErpWebController@support_plan']);
Route::get('behabiour', ['as' => 'behabiour', 'uses' => 'ErpWebController@behabiour']);

//Route::get('generatePDF', 'ErpPatientController@generatePDF');
//Route::get('generatePDF/{id}', ['as' => 'generatePDF', 'uses' => 'ErpPatientController@generatePDF']);
Route::get('generatePDF/{id}', 'ErpPatientController@generatePDF');
Route::get('patient_demog/{id}', 'ErpPatientController@patient_demog');
Route::get('support_plan/{id}', 'ErpPatientController@support_plan');
Route::get('full_patients_details/{id}', 'ErpPatientController@full_patients_details');

//document
Route::get('doc_dashboard','ErpDocumentListController@allDoc');
Route::get('doc_list/{id}/{type}','ErpDocumentListController@docList');
Route::get('patient_doc_list/{id}/{type}','ErpDocumentListController@patient_doc_list');

Route::get('doc-type/edit/{id}', 'ErpDocumentListController@editDoc');
Route::put('doc-type/update/{id}', 'ErpDocumentListController@updateDoc');


//bulk update

Route::get('add_bulk', 'BulkImportController@addBulk');
Route::Post('bulk_import', 'BulkImportController@storeBulk');

// getting sub categories
Route::post('get_sub_categories', 'HomeController@get_sub_categories');

//image upload routes

Route::resource('upload_photo', 'ErpPatientController');

Route::post('get_image_metas', 'ImageController@get_image_metas');
Route::post('upload_image', 'ImageController@upload_image');

// image list
Route::get('image_list', 'ImageController@imageList');
Route::get('get_all_images', 'ImageController@getAllImages');
Route::post('delete_image', 'ImageController@deleteImage');
Route::post('delete_bulk_image', 'ImageController@deleteBulkImage');
Route::post('update_image/{id}', 'ImageController@updateImage');
Route::get('image_details/{id}', 'ImageController@imageDetails');


Route::get('image_list_all', 'ImageController@image_list_all');


Route::resource('category', 'CategoriesController');
Route::get('delete-category/{id}', 'CategoriesController@deleteCategory');

//Contributor list
Route::resource('contributor', 'ContributorController');
Route::get('contributors_old', 'ContributorController@index');
Route::get('contributor_list', 'ContributorController@getContributors');
Route::post('approve_contributor', 'ContributorController@approveContributor');
});


// Route::get('your-dashboard', 'ErpPatientController@index');
Route::get('your-dashboard', ['as' => 'your-dashboard', 'uses' => 'CustomerController@index']);
Route::get('purchased-list', ['as' => 'purchased-list', 'uses' => 'CustomerController@getPurchasedInfo']);
Route::get('customer-profile', ['as' => 'customer-profile', 'uses' => 'CustomerController@profile']);
Route::put('customer-edit-profile', ['as' => 'customer-edit-profile', 'uses' => 'CustomerController@edit_profile']);
Route::get('wishlist', ['as' => 'wishlist', 'uses' => 'CustomerController@wishlist']);

Route::get('contributor-upload', ['as' => 'contributor-upload', 'uses' => 'CustomerController@upload']);

Route::get('promocode', ['as' => 'promocode', 'uses' => 'CustomerController@promocode']);
//Email
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
   $xx = \Mail::to('nurullah.engg@gmail.com')->send(new \App\Mail\SendEmail($details));
   dd($xx);
    dd("Email is Sent.");
});


Route::get('search', ['as' => 'search-image', 'uses' => 'ImageController@searchImage']);

Route::get('search_image_data', ['as' => 'search_image_data', 'uses' => 'ImageController@searchImageData']);
