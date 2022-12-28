<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    function index(){
        return redirect()->route('main', App::currentLocale());
    }

    function setLocale($lang = 'ru'){
        App::setLocale($lang);
        $locale = App::currentLocale();
        $title = __('layouts.main');
        return view('index', compact('locale', 'title'));
    }
}
