<?php

namespace App\Services;

use App\Models\Article as Model;
use App\Services\Interface\ArticleService;
use Cocur\Slugify\Slugify;
use Hash;
use Storage;

class ArticleServiceImpl implements ArticleService
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
            $banner = Model::find($data['id']);
        } else {
            $banner = new Model();
        }

        $slug = new Slugify();

        $banner->slug = $slug->slugify($data['title']);
        $banner->title = $data['title'];
        if (isset($data['images'])) {
            $imagesArray = [];
            foreach ($data['images'] as $image) {
                $imagesArray[] = $image->store('article', 'public');
            }
            $images = implode('|', $imagesArray);
            if (isset($data['id'])) {
                $images = $banner->images . '|' . $images;
            }
            $banner->images = $images;
        }
        $banner->quotes = str_replace(PHP_EOL, '<br>', $data['quotes']);

        if (isset($data['id']) && !isset($data['flag'])) {
            $banner->flag = 0;
        } else {
            $banner->flag = 1;
        }

        if ($banner->save()) {
            return true;
        }

        return false;
    }

    public function deleteImage($id, $image): bool
    {
        $admin = Model::findOrFail($id);
        $image = $admin->images;
        if ($admin->delete()) {
            Storage::disk('public')->delete($image);
            return true;
        }
        return false;
    }

    public function delete($id): bool
    {
        $admin = Model::findOrFail($id);
        $image = $admin->images;
        if ($admin->delete()) {
            $images = explode('|', $image);
            foreach ($images as $image) {
                Storage::disk('public')->delete($image);
            }
            return true;
        }
        return false;
    }

    public function error(): string
    {
        return $this->error;
    }
}
