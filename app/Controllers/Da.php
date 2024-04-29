<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Da extends Controller
{
    public function index()
    {
        // Load the about page view
        $data['title'] = 'Da';

        return view('header', $data) . view('da');
    }
}
