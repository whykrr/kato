<?php

namespace App\Services;

use App\Models\Faq as Service;
use App\Services\Interface\FaqService;

class FaqServiceImpl implements FaqService
{
    private string $error;

    public function getAll($perpage = 10)
    {
        return Service::orderBy('id', 'desc')->paginate($perpage);
    }

    public function getDetail($id)
    {
        $record = Service::find($id);
        return $record;
    }

    public function save($data): bool
    {
        if (isset($data['id'])) {
            $payment = Service::find($data['id']);
        } else {
            $payment = new Service();
        }

        $payment->question = str_replace(PHP_EOL, '<br>', $data['question']);
        $payment->answer = str_replace(PHP_EOL, '<br>', $data['answer']);

        if (isset($data['id']) && !isset($data['flag'])) {
            $payment->flag = 0;
        } else {
            $payment->flag = 1;
        }

        if ($payment->save()) {
            return true;
        }

        return false;
    }

    public function delete($id): bool
    {
        $admin = Service::findOrFail($id);
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
