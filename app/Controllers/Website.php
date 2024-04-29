<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Website extends Controller
{
    public function index()
    {
        $data['title'] = 'Website';
        return view('header', $data) . view('website/index') . view('footer');
    }
}
