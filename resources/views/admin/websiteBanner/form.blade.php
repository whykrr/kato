@extends('admin.common.privateLayout')
@section('title', 'Banner')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <span>Spanduk</span>
    </li>
@endsection
@section('modal')
    @isset($record)
        <x-coreui.modal-confirm id="modalDelete" type="delete" :url="route('admin.banner.delete', ['id' => $record->id])" />
    @endisset
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>
                @isset($record)
                    Detail
                @else
                    Tambah
                @endisset Data Spanduk
            </strong></div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.banner.save') }}" method="POST">
                @csrf
                @isset($record)
                    <input type="hidden" name="id" value="{{ $record->id }}">
                @endisset
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <x-coreui.input label="Judul" type="text" name="title" :value="@$record->title" />
                        </div>
                        <div class="mb-3">
                            <x-coreui.input label="Tautan" type="text" name="link" :value="@$record->link" />
                        </div>
                        <div class="mb-3">
                            <x-coreui.input label="Gambar" type="file" name="image" />
                            <small class="text-muted">Dimensi gambar 1920 X 1080 </small>
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
                                <img class="img-thumbnail" src="{{ url($record->image) }}" alt="{{ $record->title }}"
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
                        <a href="{{ route('admin.banner') }}" class="btn btn-secondary me-2 text-white">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
