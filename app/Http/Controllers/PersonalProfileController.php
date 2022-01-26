<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalProfileController extends Controller
{
    public function create() 
    {
        return view('personalProfile.profile');
    }
}
