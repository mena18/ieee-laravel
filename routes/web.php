<?php

/******************************************** Guest Section *******************************************/

Route::get('/','MainController@index')->name('home');

Route::prefix('news')->group(function (){
	Route::get('/', 'NewsController@index')->name('news.all');
	Route::get('/{id?}', 'NewsController@show')->name('news.show');
});

Route::prefix('events')->group(function (){
	Route::get('/{name?}', 'EventController@index')->name('events.all');
	Route::get('/event/{id?}', 'EventController@show')->name('events.event');
	Route::get('/register/{id?}', 'EventController@register')->name('event.register');
	Route::post('/attendance/{id?}', 'EventController@attendance')->name('event.attendance');
});

Route::group(['prefix'=>'mega'], function (){
	Route::get('/', 'MegaController@index')->name('mega.all');
	Route::get('/event/{id?}', 'MegaController@show')->name('mega.event');
	Route::post('/register/{id?}', ['uses'=>'MegaController@register','as'=>'mega.register']);
});


Route::prefix('team')->group(function (){
	Route::get('/volunteers', 'TeamController@volunteers')->name('team.volunteers');
	Route::get('/webmasters', 'TeamController@webmasters')->name('team.webmasters');
	Route::get('/board', 'TeamController@board')->name('team.board');
});




Route::prefix('gallery')->group(function (){
	Route::get('/', 'GalleryController@index')->name('gallery');
});

Route::get('/schedule', function () {return view('about.schedule');})->name('schedule');

Route::prefix('courses')->group(function (){
	Route::get('/', 'CoursesController@index')->name('courses.index');
	Route::get('/certificate/{serial?}', 'CoursesController@certificate')->name('courses.certificate');
	Route::get('/offline', 'CoursesController@offline')->name('courses.offline');
	Route::get('/online', 'CoursesController@online')->name('courses.online');

});

Route::prefix('about')->group(function (){
	Route::get('/', 'AboutController@index')->name('about.index');
	Route::get('/contact', 'AboutController@contact')->name('about.contact');
  Route::post('/contact', 'MessagesController@store');
	Route::get('/committees', 'AboutController@committees')->name('about.committees');
	Route::get('/benefits','AboutController@benefits')->name('about.benefits');

});

Route::prefix('magazines')->group(function (){
	Route::get('/', 'magazineController@index')->name('magazine.index');
	Route::get('/{id}', 'magazineController@show')->name('magazine.show');
});

/***************************************** End of Guest Section *******************************************/

/********************************* Admin section ******************************************/
Route::prefix('admin')->group(function(){

/* login  */
Route::group(['middleware'=>'guest'],function(){
    Route::get('/login','UserController@login_view')->name('admin.login');
    Route::post('/login', 'UserController@login')->name('login');
});
/* End of login  */


/* logged in user */
Route::group(['middleware'=>"auth"], function () {
    Route::get('/', 'admin_home@index')->name('admin');
    Route::get('/logout', 'UserController@logout')->name('logout');

    Route::prefix('messages')->group(function(){
        Route::get('/','MessagesController@index')->name('messages.home');
        Route::get('/{id}','MessagesController@show')->name('messages.show');
    });


    Route::prefix('events')->group(function(){

        Route::get('/',        'admin_events@home')->name('event.home');

        Route::group(['middleware'=>"media"], function () {
            Route::get('/create',        'admin_events@create')->name('event.create');
            Route::post('/store',        'admin_events@store')->name('event.store');
            Route::get('/edit/{id?}',    'admin_events@edit')->name('event.edit');
            Route::post('/update/{id?}', 'admin_events@update')->name('event.update');
        });

        Route::group(['middleware'=>"registration"], function () {
            Route::get('/toggle/{id?}',  'admin_events@toggle')->name('event.toggle');
        });

        Route::group(['middleware'=>"board"], function () {
            Route::get('/delete/{id?}',  'admin_events@destroy')->name('event.delete');
        });


    });


    Route::prefix('mega')->group(function(){
        Route::get('/',        'admin_mega@home')->name('mega.home');
        Route::group(['middleware'=>"media"], function () {
            Route::get('/edit/{id?}',     'admin_mega@edit')->name('mega.edit');
            Route::post('/update/{id?}',  'admin_mega@update')->name('mega.update');
        });

        Route::group(['middleware'=>"registration"], function () {
            Route::get('/toggle/{id?}',   'admin_mega@toggle')->name('mega.toggle');
        });

        Route::group(['middleware'=>"board"], function () {
            Route::get('/create',         'admin_mega@create')->name('mega.create');
            Route::post('/store',         'admin_mega@store')->name('mega.store');
            Route::get('/delete/{id?}',   'admin_mega@destroy')->name('mega.delete');
        });

    });

    Route::prefix('news')->group(function(){
        Route::get('/',        'admin_news@home')->name('news.home');

        Route::group(['middleware'=>"media"], function () {
            Route::get('/create', 'admin_news@create')->name('news.create');
            Route::post('/store', 'admin_news@store')->name('news.store');
            Route::get('/edit/{id?}', 'admin_news@edit')->name('news.edit');
            Route::post('/update/{id?}', 'admin_news@update')->name('news.update');
            Route::get('/delete/{id?}', 'admin_news@destroy')->name('news.delete');
        });
    });

    Route::prefix('gallery')->group(function(){
        Route::get('/',        'admin_gallery@home')->name('gallery.home');

        Route::group(['middleware'=>"media"], function () {
            Route::get('/create', 'admin_gallery@create')->name('gallery.create');
            Route::post('/store', 'admin_gallery@store')->name('gallery.store');
            Route::get('/edit/{id?}', 'admin_gallery@edit')->name('gallery.edit');
            Route::post('/update/{id?}', 'admin_gallery@update')->name('gallery.update');
            Route::get('/delete/{id?}', 'admin_gallery@destroy')->name('gallery.delete');
        });
    });

    Route::prefix('volunteer')->group(function(){
        Route::get('/',        'admin_volunteer@home')->name('volunteer.home');

        Route::group(['middleware'=>"media"], function () {
            Route::get('/edit/{id?}', 'admin_volunteer@edit')->name('volunteer.edit');
            Route::post('/update/{id?}', 'admin_volunteer@update')->name('volunteer.update');
        });

        Route::group(['middleware'=>"registration"], function () {
            Route::get('/download/', 'admin_volunteer@download_volunteers')->name('volunteer.download');
        });

        Route::group(['middleware'=>"board"], function () {
            Route::get('/create', 'admin_volunteer@create')->name('volunteer.create');
            Route::post('/store', 'admin_volunteer@store')->name('volunteer.store');
            Route::get('/delete/{id?}', 'admin_volunteer@destroy')->name('volunteer.delete');
        });

    });

		Route::prefix('magazine')->group(function(){



        /*the attendee home is event */
        Route::get('/','admin_magazine@home')->name('magazine.home');
        Route::get('/create','admin_magazine@create')->name('magazine.create');
        Route::post('/store','admin_magazine@store')->name('magazine.store');
        Route::get('/edit/{id}','admin_magazine@edit')->name('magazine.edit');
        Route::post('/update/{id}','admin_magazine@update')->name('magazine.update');
        Route::get('/delete/{id}','admin_magazine@destroy')->name('magazine.delete');
        /******  Event Attendee ******/



    });


    Route::prefix('attendee')->group(function(){



        /*the attendee home is event */
        Route::get('/','admin_attendee@event')->name('attendee.event');
        /******  Event Attendee ******/
        Route::get('/event','admin_attendee@event')->name('attendee.event');
        Route::get('/event/{id?}','admin_attendee@event')->name('attendee.event_2');

        /******  Mega Attendee ******/
        Route::get('/mega','admin_attendee@mega')->name('attendee.mega');
        Route::get('/mega/{id?}','admin_attendee@mega')->name('attendee.mega_2');

        Route::group(['middleware'=>"registration"], function () {
            Route::get('/download_event/{id?}/','admin_attendee@download_event')->name('attendee.download_event');
            Route::get('/download_mega/{id?}/','admin_attendee@download_mega')->name('attendee.download_mega');
        });


    });
    Route::prefix('courses')->group(function(){


        Route::get('/','admin_courses@courses_home')->name('courses.home');
        Route::get('/certificate','admin_courses@certificate_home')->name('certificate.home');

        Route::group(['middleware'=>"board"], function () {

        /*  Courses  */

            Route::get('/create','admin_courses@create_course')->name('course.create');
            Route::post('/store','admin_courses@store_course')->name('course.store');
            Route::get('/edit/{id?}','admin_courses@edit_course')->name('course.edit');
            Route::post('/update/{id?}','admin_courses@update_course')->name('course.update');
            Route::get('/delete/{id?}','admin_courses@delete_course')->name('course.delete');
            /*  Certification  */

            Route::get('/create_certificate','admin_courses@create_certificate')->name('certificate.create');
            Route::post('/store_certificate','admin_courses@store_certificate')->name('certificate.store');
            Route::post('/upload_certificates','admin_courses@upload_certificates')->name('certificate.upload');

            Route::get('/edit_certificate/{id?}','admin_courses@edit_certificate')->name('certificate.edit');
            Route::post('/update_certificate/{id?}','admin_courses@update_certificate')->name('certificate.update');
            Route::get('/delete_certificate/{id?}','admin_courses@delete_certificate')->name('certificate.delete');


        });


    });




});
});


Route::fallback('MainController@index');
/********************************* End of Admin section ******************************************/
