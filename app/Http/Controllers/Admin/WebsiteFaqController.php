<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Services\Interface\FaqService as Service;

class WebsiteFaqController extends Controller
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
        return view('admin.websiteFaq.list', $data);
    }
    public function form($id = '')
    {
        $data = [];
        if ($id != '') {
            $data['record'] = $this->svc->getDetail($id);
        }
        return view('admin.websiteFaq.form', $data);
    }

    public function doSave(Request $request)
    {
        $action = 'ditambahkan';
        if ($request->input('id')) {
            $action = 'diubah';
        }

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $admin = $this->svc->save($request->all());
        if ($admin) {
            return redirect()->route('admin.faq')->with('success', "Data berhasil $action");
        }

        return redirect()->route('admin.faq.add')->with('error', "Data gagal $action")->withInput();
    }

    public function doDelete($id)
    {
        $admin = $this->svc->delete($id);
        if ($admin) {
            return redirect()->route('admin.faq')->with("success", "Data berhasil dihapus");
        }
        return redirect()->route('admin.faq.edit', ['id' => $id])->with("error", "Data gagal dihapus");
    }
}
