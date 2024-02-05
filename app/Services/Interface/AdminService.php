<?php

namespace App\Services\Interface;

use App\Models\Admin;
use Illuminate\Pagination\LengthAwarePaginator;

interface AdminService
{
    public function login(string $email, string $password): bool;
    /**
     * get all data with pagination
     *
     * @param int $perPage
     * @return LengthAwarePaginator
     * @mixin Admin
     */
    public function getAll($perpage);

    /**
     * get detail admin
     *
     * @param array $data
     * @return Admin|null
     */
    public function getDetail($id);

    /**
     * save admin
     *
     * @param array $data
     * @return boolean
     */
    public function save($data): bool;

    /**
     * delete admin
     *
     * @param int $id
     * @return boolean
     */
    public function delete($id): bool;

    /**
     * get error message
     *
     * @return string
     */
    public function error(): string;
}
