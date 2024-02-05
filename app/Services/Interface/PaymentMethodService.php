<?php

namespace App\Services\Interface;

use App\Models\PaymentMethod as Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface PaymentMethodService
{
    /**
     * get all data with pagination
     *
     * @param int $perPage
     * @return LengthAwarePaginator
     * @mixin Model
     */
    public function getAll($perpage);

    /**
     * get detail admin
     *
     * @param array $data
     * @return Model|null
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
