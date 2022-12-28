<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class ServicesController extends Controller
{
    function index(){
        return redirect()->route('services', App::currentLocale());
    }

    function setLocale($lang = 'ru'){
        App::setLocale($lang);
        $locale = App::currentLocale();
        $title = __('layouts.services');
        return view('services', compact('locale', 'title'));
    }
}
