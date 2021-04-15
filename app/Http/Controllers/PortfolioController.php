<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class PortfolioController extends Controller
{
    public function portfolio($locale)
    {
        App::setLocale($locale);
        return view("portfolio");
    }
}

