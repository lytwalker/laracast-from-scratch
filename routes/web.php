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

Route::get('/', function () {

    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work'
    ];

    return view('welcome', [
        'tasks' => $tasks,
        'foo' => request('title')
    ]);
});

Route::get('/contact', function () {
    $tasks = [
      'Go to the contact store',
      'Go to the contact market',
      'Go to contact work',
      'Go to contact home'
    ];
      return view('contact')->withTasks($tasks)->withFoo('foo');
});

Route::get('/about', function () {
    return view('about', [
    'unescaped' => '<script>alert("This is a demo of how to pass unescaped code.")</script>'
    ]);
});

Route::get('/extra', function () {
    return view('extra')->with([
      'foo' => request('title', 'Try entering a url parameter \'title\' with whatever value you want'),
      'tasks' => ['some task']
    ]);
});
