<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
