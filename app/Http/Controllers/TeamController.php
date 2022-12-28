<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class TeamController extends Controller
{
    function index(){
        return redirect()->route('team', App::currentLocale());
    }

    function setLocale($lang = 'ru'){
        App::setLocale($lang);
        $locale = App::currentLocale();
        $title = __('layouts.team');
        return view('team', compact('locale', 'title'));
    }
}
