<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Services\Interface\PaymentMethodService as Service;

class PaymentController extends Controller
{
    private Service $svc;

    public function __construct(Service $svc)
    {
        App::setLocale('id');

        $this->svc = $svc;
    }
    public function index()
    {
        $data['records'] = $this->svc->getAll(10);
        return view('admin.payment.list', $data);
    }
    public function form($id = '')
    {
        $data = [];
        if ($id != '') {
            $data['record'] = $this->svc->getDetail($id);
        }
        return view('admin.payment.form', $data);
    }

    public function doSave(Request $request)
    {
        $action = 'ditambahkan';
        if ($request->input('id')) {
            $action = 'diubah';
        }

        $validator = Validator::make($request->all(), [
            'code' => ['required', 'max:100', Rule::unique('payment_methods')->ignore($request->input('id'))],
            'name' => 'required|max:100',
            'account_name' => 'required|max:200',
            'account_number' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $admin = $this->svc->save($request->all());
        if ($admin) {
            return redirect()->route('admin.payment')->with('success', "Data berhasil $action");
        }

        return redirect()->route('admin.payment.add')->with('error', "Data gagal $action")->withInput();
    }

    public function doDelete($id)
    {
        $admin = $this->svc->delete($id);
        if ($admin) {
            return redirect()->route('admin.payment')->with("success", "Data berhasil dihapus");
        }
        return redirect()->route('admin.payment.edit', ['id' => $id])->with("error", "Data gagal dihapus");
    }
}
