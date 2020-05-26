<?php

namespace App\Http\Controllers;

use App\Formulaire;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $formulaire = Formulaire::all();
       
        return view('welcome', compact('formulaire'));

    }
}

