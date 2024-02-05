<?php

namespace App\Services\Interface;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserService
{
    public function login(string $email, string $password): bool;

    /**
     * get all data with pagination
     *
     * @param int $perPage
     * @return LengthAwarePaginator
     * @mixin User
     */
    function getAll($perPage);

    /**
     * get detail user
     *
     * @param int $id
     * @return User
     */
    function detail($id);

    /**
     * Register User
     *
     * @param array $data
     * @return boolean
     */
    public function register($data): bool;
    public function update($data): bool;
    public function changePassword(string $password, string $newPassword): bool;
    public function addAddress($data): bool;
    public function editAddress($data): bool;
    public function deleteAddress($data): bool;
    public function logout(): bool;
}
