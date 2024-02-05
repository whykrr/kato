<?php

namespace App\Services\Interface;

use App\Models\Variation as Model;
use App\Models\VariationOption as ModelOption;
use Illuminate\Pagination\LengthAwarePaginator;

interface VariationService
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
     * get detail admin
     *
     * @param array $data
     * @return ModelOption|null
     */
    public function getDetailOption($id);

    /**
     * save admin
     *
     * @param array $data
     * @return boolean
     */
    public function save($data): bool;

    /**
     * save admin
     *
     * @param array $data
     * @return boolean
     */
    public function saveOption($data): bool;

    /**
     * delete admin
     *
     * @param int $id
     * @return boolean
     */
    public function delete($id): bool;

    /**
     * delete admin
     *
     * @param int $id
     * @return boolean
     */
    public function deleteOption($id): bool;

    /**
     * get error message
     *
     * @return string
     */
    public function error(): string;
}
