<?php

namespace App\Services;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Services\Interface\AdminService;
use Hash;

class AdminServiceImpl implements AdminService
{
    private string $error;
    public function login(string $email, string $password): bool
    {
        return Auth::guard("admin")->attempt(["email" => $email, "password" => $password]);
    }

    public function getAll($perpage = 10)
    {
        return Admin::orderBy('id', 'desc')->paginate($perpage);
    }

    public function getDetail($id)
    {
        $record = Admin::find($id);
        return $record;
    }

    public function save($data): bool
    {
        if (isset($data['id'])) {
            $admin = Admin::findOrFail($data['id']);
        } else {
            $admin = new Admin();
        }

        $admin->name = $data['name'];
        $admin->email = $data['email'];
        $admin->password = Hash::make('12345678');
        $admin->is_deletable = 1;

        if ($admin->save()) {
            return true;
        }

        return false;
    }

    public function delete($id): bool
    {
        $admin = Admin::where('is_deletable', 1)->findOrFail($id);
        if ($admin->delete()) {
            return true;
        }
        return false;
    }

    public function error(): string
    {
        return $this->error;
    }
}
