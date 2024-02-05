<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Services\Interface\VariationService as Service;

class VariationController extends Controller
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
        return view('admin.variation.list', $data);
    }
    public function form($id = '')
    {
        $data = [];
        if ($id != '') {
            $data['record'] = $this->svc->getDetail($id);
        }
        return view('admin.variation.form', $data);
    }

    public function formOption($variation_id = '', $id = '',)
    {
        $data = [];
        $data['variation_id'] = $variation_id;
        if ($id != '') {
            $data['record'] = $this->svc->getDetailOption($id);
            $data['variation_name'] = $data['record']->variation->name;
        } else {
            $data['variation_name'] = $this->svc->getDetail($variation_id)->name;
        }
        return view('admin.variation.formOption', $data);
    }

    public function doSave(Request $request)
    {
        $action = 'ditambahkan';
        if ($request->input('id')) {
            $action = 'diubah';
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:100', Rule::unique('variations')->ignore($request->input('id'))],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $admin = $this->svc->save($request->all());
        if ($admin) {
            return redirect()->route('admin.variation')->with('success', "Data berhasil $action");
        }

        return redirect()->route('admin.variation.add')->with('error', "Data gagal $action")->withInput();
    }
    public function doSaveOption(Request $request)
    {
        $action = 'ditambahkan';
        if ($request->input('id')) {
            $action = 'diubah';
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:100', Rule::unique('variation_options')->ignore($request->input('id'))->where(function ($query) use ($request) {
                $query->where('variation_id', $request->input('variation_id'));
            })],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $admin = $this->svc->saveOption($request->all());
        if ($admin) {
            return redirect()->route('admin.variation.edit', ['id' => $request->input('variation_id')])->with('success', "Data berhasil $action");
        }

        return redirect()->route('admin.variation.addOption')->with('error', "Data gagal $action")->withInput();
    }

    public function doDelete($id)
    {
        $admin = $this->svc->delete($id);
        if ($admin) {
            return redirect()->route('admin.variation')->with("success", "Data berhasil dihapus");
        }
        return redirect()->route('admin.variation')->with("error", "Data gagal dihapus");
    }

    public function doDeleteOption($variation_id, $id)
    {
        $admin = $this->svc->deleteOption($id);
        if ($admin) {
            return redirect()->route('admin.variation.edit', ['id' => $variation_id])->with("success", "Data berhasil dihapus");
        }
        return redirect()->route('admin.variation.editOption', ['id' => $id, 'variation_id' => $variation_id])->with("error", "Data gagal dihapus");
    }
}
