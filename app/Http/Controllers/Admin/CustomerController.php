<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interface\UserService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $userSvc;

    public function __construct(UserService $userSvc)
    {
        $this->userSvc = $userSvc;
    }

    public function index()
    {
        $data['records'] = $this->userSvc->getAll(10);
        return view('admin.customer.list', $data);
    }

    public function detail($id)
    {
        return view('admin.customer.detail');
    }
}
