<?php

Route::namespace('Principal')->group(function () {
    Route::get('/', 'HomeController@index')->name('home-site');
    Route::get('/sobre', 'HomeController@about')->name('about-doctor');
    Route::resource('/contato', 'ContactController')->only(['index', 'store']);

    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');
    Route::get('tratamentos/{slug}', 'TreatmentController')->name('tratamentos');
    Route::get('portfolio', 'PortfolioController')->name('portfolio');

});

Route::get('home', function () {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', 'DashboardController')->name('dashboard');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
    Route::namespace('Admin\Control')->prefix('control')->group(function () {
        Route::prefix('pubs')->group(function () {
            Route::resource('categories', 'CategoriesController');
            Route::resource('posts', 'PostController');
        });
        Route::resource('contacts', 'ContactController');
        Route::resource('portfolio', 'PortfolioController');
        Route::resource('images-portfolio', 'ImagePortfolioController');

    });
});

Route::middleware('auth')->get('logout', function () {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function () {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function () {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});
