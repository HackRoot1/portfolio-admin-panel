<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    
    public function showAdminDashboard() {
        return view('admin.index');
    }

    public function showPersonalInfo() {
        return view('admin.personal_info');
    }
}
