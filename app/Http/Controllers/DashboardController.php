<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Modelgaleri;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return View('dashboard.dashboard');
    }
   
}
