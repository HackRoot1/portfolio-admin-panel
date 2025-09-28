<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $skills = Skill::all();
        // Pass the skills to the view
        return view('index', compact('skills'));
    }

}
