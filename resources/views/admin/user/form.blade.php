@extends('admin.common.privateLayout')
@section('title', 'Admin')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <span>Admin</span>
    </li>
@endsection
@section('modal')
    @isset($record)
        <x-coreui.modal-confirm id="modalDelete" type="delete" :url="route('admin.user.delete', ['id' => $record->id])" />
    @endisset
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>
                @isset($data)
                    Detail
                @else
                    Tambah
                @endisset Data Administrator
            </strong></div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.user.save') }}" method="POST">
                @csrf
                @isset($record)
                    <input type="hidden" name="id" value="{{ $record->id }}">
                @endisset
                <div class="mb-3">
                    <x-coreui.input label="Nama" type="text" name="name" :value="@$record->name" />
                </div>
                <div class="mb-3">
                    <x-coreui.input label="Email" type="email" name="email" :value="@$record->email" />
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        @isset($record)
                            <x-coreui.modal-toggle type="danger" target="modalDelete" label="Hapus" />
                        @endisset
                    </div>
                    <div class="col-6 d-flex justify-content-md-end">
                        <a href="{{ route('admin.user') }}" class="btn btn-secondary me-2 text-white">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
