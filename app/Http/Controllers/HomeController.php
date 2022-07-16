<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index ()
    {
      
        // Inertia::render est un classe avec une méthode (Home->fichier / home->vue) qui permet une rediriger vers une page vue ( ex: Home.vue)
            return Inertia::render('Home/home');
    }
}
