<?php

Route::get('/', function () {


////    hard code an array containing some things to do
//    $tasks = [
//
//        'Go to the store',
//        'Go to the market',
//        'Go to the toilet',
//        'Go to the farm',
//    ];

// variables ('foo') passed to the view in the array are available in the linked view
//     this is the longer form
//    return view('welcome', [
//        'tasks' => $tasks,
//        'foo' => 'I want a foobar'


    // this is the shorter form
    return view('welcome')->with([
        'tasks' => ['Go to the store',
            'Go to the market',
            'Go to the toilet',
            'Go to the farm',],

        'foo' => 'I want a foobar please'
    ]);

});

Route::get(' / artists', function () {
    return view('artists');
});

Route::get(' / songs', function () {
    return view('songs');

});
Route::get(' / labels', function () {
    return view('labels');
});

