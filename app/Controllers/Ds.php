<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Ds extends Controller
{
    public function index()
    {
        $data['title'] = 'ds';

        // Load the about page view
        return view('header', $data) . view('ds');
    }
}
