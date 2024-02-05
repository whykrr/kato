@extends('admin.common.privateLayout')
@section('title', 'Varian')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <span>Produk</span>
    </li>
    <li class="breadcrumb-item">
        <span>Varian</span>
    </li>
    <li class="breadcrumb-item active">
        <span>Opsi Varian</span>
    </li>
@endsection
@section('modal')
    @isset($record)
        <x-coreui.modal-confirm id="modalDelete" type="delete" :url="route('admin.variation.deleteOption', ['id' => $record->id, 'variation_id' => @$variation_id])" />
    @endisset
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>
                @isset($record)
                    Detail
                @else
                    Tambah
                @endisset Data Opsi Varian - {{ @$variation_name }}
            </strong></div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.variation.saveOption') }}" method="POST">
                @csrf
                @isset($record)
                    <input type="hidden" name="id" value="{{ $record->id }}">
                @endisset
                <input type="hidden" name="variation_id" value="{{ $variation_id }}">
                <div class="mb-3">
                    <x-coreui.input label="Nama" type="text" name="name" :value="@$record->name" />
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
                        <a href="{{ route('admin.variation.edit', ['id' => $variation_id]) }}"
                            class="btn btn-secondary me-2 text-white">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
