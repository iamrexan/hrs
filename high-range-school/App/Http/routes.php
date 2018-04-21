<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/users-list', 'UserViewController@index');


Route::get('sendmymail', function() {
    Mail::raw('This message from my laravel application..!', function($message){
        $message->subject('Mailgun and Laravel are awesome!');
		$message->from('no-reply@website_name.com', 'Website Name');
		$message->to('antorex2910@gmail.com');
    });
});

Route::auth();

Route::post('/onChangeData', 'UserViewController@changeOnAlumni');
Route::post('/deleteAll', 'UserViewController@bulkDel');

Route::get('/home', 'HomeController@index');

Route::get('/admin_home', 'adminHomeController@index');
Route::get('/admin_home', 'adminHomeController@showHomeWelcome');
Route::post('/storeHomeWelcome', 
        ['uses' => 'adminHomeController@storeHomeWelcome']);
Route::post('/storeHomeNewsEvents', 'newsEventsController@storeHomeNewsEvents');
Route::post('/submit_banner', 
        ['uses' => 'bannerController@addBanner']);
Route::post('/delBanner', 'bannerController@deleteBanner');
Route::post('/update_banner', 'bannerController@updateBanner');
Route::post('/storeGallery', 'adminHomeController@StoreGallery');
Route::post('/deleteGallery', 'adminHomeController@deleteGallery');
Route::post('/degitalFileUpload', 'adminHomeController@degitalFileUpload');
Route::post('/dellibrary', 'adminHomeController@dellibrary');

Route::get('/admin-about', 'aboutController@index');
Route::post('/aboutAdminUpdate', 
        ['uses' => 'aboutController@storeInTo']);
//Route::post('/aboutAdminVisibStatUpdate','aboutController@updateVisibility');
Route::controller('/aboutAdminVisibStatUpdate','aboutController');

Route::get('/admin-academics', 'academicsController@index');
Route::post('/academicsUpdate', 
        ['uses' => 'academicsController@storeInTo']);

Route::get('/admin-faculty', function(){
   return view('faculty'); 
});

Route::get('/admin-infrastructure', 'infrastructureController@index');
Route::post('/infrastructureUpdate', 
        ['uses' => 'infrastructureController@storeInTo']);

Route::get('/admin-gallery', 'galleryController@showPage');
Route::post('/admin-gallery-update', 'galleryController@updateTable');

Route::get('/admin-alumni', 'alumniController@showPage');
Route::post('/admin-alumni-update', 'alumniController@updatePage');

Route::get('/admin-curricular', 'curricularController@showActivitiesPage');
Route::post('/admin-curricular-update', 'curricularController@updatePage');

Route::get('admin-contact', 'contactController@contactShowUp');
Route::post('address-lineup', 'contactController@addressSetup');

Route::get('/ckfinder/type=Images', 'adminHomeController@showAllImages');

Route::get('/post-blog', 'blogController@index');
Route::post('/newblog', 'blogController@blog_update');
Route::post('/delblog/{id}', 'blogController@blog_delete');
Route::post('/deleteblogbulk', 'blogController@deletebulkblog');
Route::get('/admin-show-blog', 'blogController@indexAllBlogs');



//main website routes
Route::get('show-blog', 'viewController@blogPageView');
Route::get('index', 'viewController@indexPageView');
Route::get('/', 'viewController@indexPageView');
Route::get('about-us', 'viewController@aboutPageView');
Route::get('management', 'viewController@managementPageView');
Route::get('ptsa', 'viewController@ptsaPageView');
Route::get('message_principal', 'viewController@msgPrinciPageView');

Route::get('academics', 'viewController@academicsPageView');
Route::get('infrastructure', 'viewController@infrastructurePageView');
Route::get('events', 'viewController@galleryPageView');

Route::get('cocurricular_activities', 'viewController@curricularPageView');
Route::get('cocurricular_assets', 'viewController@curricularAssetsPageView');
Route::get('cocurricular_houses', 'viewController@curricularHousesPageView');
Route::get('cocurricular_h3club', 'viewController@curricularClubPageView');
Route::get('cocurricular_sports', 'viewController@curricularSportPageView');
Route::get('cocurricular_music', 'viewController@curricularMusicPageView');
Route::get('cocurricular_dance', 'viewController@curricularDancePageView');
Route::get('cocurricular_yoga', 'viewController@curricularYogaPageView');
Route::get('cocurricular_artsdepart', 'viewController@curricularArtsPageView');
Route::get('cocurricular_scouts', 'viewController@curricularScoutPageView');

Route::get('alumni_overview', 'viewController@alumniPageView');
Route::get('contact', 'viewController@contactPageView');

Route::get('digital_library', 'viewController@digitalLibraryPageView');
Route::post('user-quick-form', 'QuickFormController@quickForm');

Route::get('alumni_registration', function(){
   return view('main/alumni_registration'); 
});
Route::get('alumni_donor_form', function(){
   return view('main/alumni_donor_form'); 
});
Route::get('gallery', function(){
   return view('main/gallery'); 
});
Route::get('faculty_details', function(){
   return view('main/faculty_details'); 
});
Route::get('faculty_details', function(){
   return view('main/faculty_details'); 
});
Route::get('faculty', function(){
   return view('main/faculty'); 
});
Route::get('cocurricular_vistaclub', function(){
   return view('main/cocurricular_vistaclub'); 
});
Route::get('cocurricular_vathayanamclub', function(){
   return view('main/cocurricular_vathayanamclub'); 
});
Route::get('cocurricular_natureclub', function(){
   return view('main/cocurricular_natureclub'); 
});
Route::get('cocurricular_mathsclub', function(){
   return view('main/cocurricular_mathsclub'); 
});
Route::get('cocurricular_hecsaclub', function(){
   return view('main/cocurricular_hecsaclub'); 
});