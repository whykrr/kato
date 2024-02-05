<?php

namespace App\Services;

use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Auth;
use App\Services\Interface\PaymentMethodService;
use Hash;

class PaymentMethodServiceImpl implements PaymentMethodService
{
    private string $error;

    public function getAll($perpage = 10)
    {
        return PaymentMethod::orderBy('id', 'desc')->paginate($perpage);
    }

    public function getDetail($id)
    {
        $record = PaymentMethod::find($id);
        return $record;
    }

    public function save($data): bool
    {
        if (isset($data['id'])) {
            $payment = PaymentMethod::find($data['id']);
        } else {
            $payment = new PaymentMethod();
        }

        $payment->code = $data['code'];
        $payment->name = $data['name'];
        $payment->account_name = $data['account_name'];
        $payment->account_number = $data['account_number'];
        $payment->description = $data['description'];

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
        $admin = PaymentMethod::findOrFail($id);
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
