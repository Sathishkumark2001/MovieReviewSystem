<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the most recent review or adjust the logic to fetch the required review
        return view('welcome');
    }
}
