<?php

namespace App\Services;

use App\Models\Category as Model;
use Illuminate\Support\Facades\Storage;
use App\Services\Interface\CategoryService;


class CategoryServiceImpl implements CategoryService
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

  public function save($data): bool
  {
    if (isset($data['id'])) {
      $category = Model::find($data['id']);
    } else {
      $category = new Model();
    }

    $category->name = $data['name'];
    if (isset($data['image'])) {
      if (isset($data['id'])) {
        Storage::disk('public')->delete($category->image);
      }
      $category->image = $data['image']->store('category', 'public');
    }

    if (isset($data['id']) && !isset($data['flag'])) {
      $category->flag = 0;
    } else {
      $category->flag = 1;
    }

    if ($category->save()) {
      return true;
    }

    return false;
  }

  public function delete($id): bool
  {
    $category = Model::findOrFail($id);
    if ($category->delete()) {
      return true;
    }
    return false;
  }

  public function error(): string
  {
    return $this->error;
  }
}
