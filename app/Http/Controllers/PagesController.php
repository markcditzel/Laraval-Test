<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class PagesController extends Controller

// here we define a new function called 'home'
// that function returns the welcome view
// and provides that view with an array of tasks and a foo 'variable'
// the welcome.blade.php view calls foo and extracts each task with a foreach loop
{
    public function home()
    {
        return view('welcome')->with([
        'tasks' => ['Go to the store',
            'Go to the market',
            'Go to the toilet',
            'Go to the farm',],

        'foo' => 'I want a foobar please'
    ]);
    }

    public function artists()
    {
        return view('artists');
    }

    public function songs()
    {
        return view('songs');
    }

    public function labels()
    {
        return view('labels');
    }
}
