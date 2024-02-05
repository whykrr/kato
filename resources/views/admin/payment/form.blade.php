@extends('admin.common.privateLayout')
@section('title', 'Pembayaran')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <span>Pembayaran</span>
    </li>
@endsection
@section('modal')
    @isset($record)
        <x-coreui.modal-confirm id="modalDelete" type="delete" :url="route('admin.payment.delete', ['id' => $record->id])" />
    @endisset
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>
                @isset($record)
                    Detail
                @else
                    Tambah
                @endisset Data Pembayaran
            </strong></div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.payment.save') }}" method="POST">
                @csrf
                @isset($record)
                    <input type="hidden" name="id" value="{{ $record->id }}">
                @endisset
                <div class="row mb-3">
                    <div class="col-4">
                        <x-coreui.input label="Kode" type="text" name="code" :value="@$record->code" />
                    </div>
                    <div class="col-8">
                        <x-coreui.input label="Nama" type="text" name="name" :value="@$record->name" />
                    </div>
                </div>
                <div class="mb-3">
                    <x-coreui.input label="Nama Rekening" type="text" name="account_name" :value="@$record->account_name" />
                </div>
                <div class="mb-3">
                    <x-coreui.input label="Nomor Rekening" type="text" name="account_number" :value="@$record->account_number" />
                </div>
                <div class="mb-3">
                    <x-coreui.textarea label="Keterangan" name="description" :value="@$record->description" />
                </div>
                @isset($record)
                    <div class="mb-3">
                        <x-coreui.radio-switch label="Status" name="flag" :value="@$record->flag" />
                    </div>
                @endisset
                <div class="row mb-3">
                    <div class="col-6">
                        @isset($record)
                            <x-coreui.modal-toggle type="danger" target="modalDelete" label="Hapus" />
                        @endisset
                    </div>
                    <div class="col-6 d-flex justify-content-md-end">
                        <a href="{{ route('admin.payment') }}" class="btn btn-secondary me-2 text-white">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
