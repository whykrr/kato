<?php

namespace App\Services;

use App\Models\Variation as Model;
use App\Models\VariationOption as ModelOption;
use App\Services\Interface\VariationService;
use Illuminate\Support\Facades\Auth;
use Hash;

class VariationServiceImpl implements VariationService
{
    private string $error;

    public function getAll($perpage = 10)
    {
        return Model::orderBy('id', 'desc')->paginate($perpage);
    }

    public function getDetail($id)
    {
        $record = Model::find($id);
        return $record;
    }

    public function getDetailOption($id)
    {
        $record = ModelOption::find($id);
        return $record;
    }

    public function save($data): bool
    {
        if (isset($data['id'])) {
            $variation = Model::find($data['id']);
        } else {
            $variation = new Model();
        }

        $variation->name = $data['name'];

        if (!isset($data['is_multiple'])) {
            $variation->is_multiple = 0;
        } else {
            $variation->is_multiple = 1;
        }

        if (isset($data['id']) && !isset($data['flag'])) {
            $variation->flag = 0;
        } else {
            $variation->flag = 1;
        }

        if ($variation->save()) {
            return true;
        }

        return false;
    }

    public function saveOption($data): bool
    {
        if (isset($data['id'])) {
            $option = ModelOption::find($data['id']);
        } else {
            $option = new ModelOption();
        }

        $option->variation_id = $data['variation_id'];
        $option->name = $data['name'];

        if (isset($data['id']) && !isset($data['flag'])) {
            $option->flag = 0;
        } else {
            $option->flag = 1;
        }

        if ($option->save()) {
            return true;
        }

        return false;
    }

    public function delete($id): bool
    {
        $model = Model::findOrFail($id);
        $model->options()->delete();
        if ($model->delete()) {
            return true;
        }
        return false;
    }

    public function deleteOption($id): bool
    {
        $model = ModelOption::findOrFail($id);
        if ($model->delete()) {
            return true;
        }
        return false;
    }

    public function error(): string
    {
        return $this->error;
    }
}
