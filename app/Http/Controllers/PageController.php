<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function accueil(): View
    {
        return view('pageshtml.accueil');
    }
}
