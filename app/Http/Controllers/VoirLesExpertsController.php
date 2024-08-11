<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoirLesExpertsController extends Controller
{
    public function get_experts()
    {
        return view('voirLesExperts');
    }
}
