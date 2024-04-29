<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Projeler extends Controller
{
    public function index()
    {
        // Load the about page view
        return view('projeler');
    }
}
