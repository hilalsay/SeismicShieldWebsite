<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller
{
    public function index()
    {
        // Load the about page view
        $data['title'] = 'About';

        return view('header', $data) . view('about');
    }
}
