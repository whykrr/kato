<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\Interface\UserService;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function login()
    {
        return view("website.login");
    }
    public function register()
    {
        return view("website.register");
    }
    public function doRegister(Request $request)
    {
        // $request
    }

    public function dologin(Request $request)
    {
        $validator = Validator::make([
            "email" => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = $request->input('email');
        $password = $request->input('email');

        $doLogin = $this->userService->login($email, $password);
        if (!$doLogin) {
            return redirect()->back()->withErrors([
                'login' => 'login failed'
            ])->withInput();
        }

        return redirect()->to(session('login_redirect'));
    }
}
