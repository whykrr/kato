<?php

namespace App\Services;

use App\Models\Banner as Model;
use App\Services\Interface\BannerService;
use Cocur\Slugify\Slugify;
use Hash;
use Storage;

class BannerServiceImpl implements BannerService
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
        if (isset($data['image'])) {
            if (isset($data['id'])) {
                Storage::disk('public')->delete($banner->image);
            }
            $banner->image = $data['image']->store('banner', 'public');
        }
        $banner->link = $data['link'];

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

    public function delete($id): bool
    {
        $admin = Model::findOrFail($id);
        $image = $admin->image;
        if ($admin->delete()) {
            Storage::disk('public')->delete($image);
            return true;
        }
        return false;
    }

    public function error(): string
    {
        return $this->error;
    }
}
