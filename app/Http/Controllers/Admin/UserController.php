<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\Interface\AdminService;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private AdminService $adminSvc;

    public function __construct(AdminService $adminService)
    {
        $this->adminSvc = $adminService;
    }
    public function index()
    {
        $data['records'] = $this->adminSvc->getAll(10);
        return view('admin.user.list', $data);
    }
    public function form($id = '')
    {
        $data = [];
        if ($id != '') {
            $data['record'] = $this->adminSvc->getDetail($id);
        }
        return view('admin.user.form', $data);
    }

    public function doSave(Request $request)
    {
        $action = 'ditambahkan';
        if ($request->input('id')) {
            $action = 'diubah';
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', Rule::unique('admins')->ignore($request->input('id'))],
        ], [
            'required' => 'wajib diisi.',
            'unique' => 'email sudah digunakan.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $admin = $this->adminSvc->save($request->all());
        if ($admin) {
            return redirect()->route('admin.user')->with('success', "Data berhasil $action");
        }

        return redirect()->route('admin.user.add')->with('error', "Data gagal $action")->withInput();
    }

    public function doDelete($id)
    {
        $admin = $this->adminSvc->delete($id);
        if ($admin) {
            return redirect()->route('admin.user')->with("success", "Data berhasil dihapus");
        }
        return redirect()->route('admin.user.edit', ['id' => $id])->with("error", "Data gagal dihapus");
    }

    public function doLogin(Request $request)
    {
        $validation = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required",
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $email = $request->input('email');
        $password = $request->input('password');

        if ($this->adminSvc->login($email, $password)) {
            $request->session()->regenerate();

            return redirect()->to("admin");
        }

        return redirect()->back()->withErrors("login error");
    }

    public function doLogout(Request $request)
    {
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}
