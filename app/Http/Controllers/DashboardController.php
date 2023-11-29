<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'Alex', 'age' => 53],
            ['name' => 'Dan', 'age' => 25],
            ['name' => 'Bob', 'age' => 17],
        ];

        return view('dashboard', compact('users'));
    }
}
