<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Categories',
        ];

        return view('Manager/Categories/index', $data);
    }
}
