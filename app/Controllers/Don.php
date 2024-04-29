<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Don extends Controller
{
    public function index()
    {
        $data['title'] = 'D. o.';

        // Load the about page view
        return view('header', $data) . view('don');
    }
}
