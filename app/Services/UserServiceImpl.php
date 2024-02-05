<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Services\Interface\UserService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserServiceImpl implements UserService
{
    public function login(string $email, string $password): bool
    {
        return Auth::guard("admin")->attempt(["email" => $email, "password" => $password]);
    }

    public function register($data): bool
    {
        return true;
    }
    function getAll($perPage)
    {
        return User::orderBy("id", "desc")->paginate($perPage);
    }

    function detail($id)
    {
        return true;
    }

    function addAddress($data): bool
    {
        return true;
    }
    function changePassword(string $password, string $newPassword): bool
    {
        return true;
    }
    function deleteAddress($data): bool
    {
        return true;
    }
    function editAddress($data): bool
    {
        return true;
    }
    function update($data): bool
    {
        return true;
    }

    public function logout(): bool
    {
        return true;
    }
}
