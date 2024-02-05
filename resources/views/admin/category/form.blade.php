@extends('admin.common.privateLayout')
@section('title', 'Produk - Kategori')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <span>Produk</span>
    </li>
    <li class="breadcrumb-item active">
        <span>Kategori</span>
    </li>
@endsection
@section('modal')
    @isset($record)
        <x-coreui.modal-confirm id="modalDelete" type="delete" :url="route('admin.category.delete', ['id' => $record->id])" />
    @endisset
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>
                @isset($record)
                    Detail
                @else
                    Tambah
                @endisset Data Kategori
            </strong></div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.category.save') }}" method="POST">
                @csrf
                @isset($record)
                    <input type="hidden" name="id" value="{{ $record->id }}">
                @endisset
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <x-coreui.input label="Nama" type="text" name="name" value="{{ @$record->name }}" />
                        </div>
                        <div class="mb-3">
                            <x-coreui.input label="Gambar" type="file" name="image" />
                            <small class="text-muted">Dimensi gambar 500 X 500 </small>
                        </div>
                        @isset($record)
                            <div class="mb-3">
                                <x-coreui.radio-switch label="Status" name="flag" :value="@$record->flag" />
                            </div>
                        @endisset
                    </div>
                    <div class="col-6">
                        @isset($record)
                            <div class="mb-3">
                                <img class="img-thumbnail" src="{{ url($record->image) }}" alt="{{ $record->name }}"
                                    width="100%">
                            </div>
                        @endisset
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        @isset($record)
                            <x-coreui.modal-toggle type="danger" target="modalDelete" label="Hapus" />
                        @endisset
                    </div>
                    <div class="col-6 d-flex justify-content-md-end">
                        <a href="{{ route('admin.category') }}" class="btn btn-secondary me-2 text-white">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
