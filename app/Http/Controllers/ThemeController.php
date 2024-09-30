<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function home()
    {
        $theme = Session::get('theme', 'classic');
        return view("themes.$theme.home", compact('theme'));
    }

    public function contacts()
    {
        $theme = Session::get('theme', 'classic');
        return view("themes.$theme.contacts", compact('theme'));
    }

    public function selectTheme(Request $request)
    {
        $theme = $request->input('theme', 'classic');
        Session::put('theme', $theme);
        return redirect()->route('home');
    }
}
