@extends('admin.common.privateLayout')
@section('title', 'Artikel')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <span>Artikel</span>
    </li>
@endsection
@section('modal')
    @isset($record)
        <x-coreui.modal-confirm id="modalDelete" type="delete" :url="route('admin.article.delete', ['id' => $record->id])" />
    @endisset
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>
                @isset($record)
                    Detail
                @else
                    Tambah
                @endisset Data Artikel
            </strong></div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.article.save') }}" method="POST">
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
                            <x-coreui.textarea label="Kutipan" name="quotes" :value="strip_tags(@$record->quotes)" :large="true" />
                        </div>
                        @isset($record)
                        @else
                            <div class="mb-3">
                                <x-coreui.input label="Gambar" type="file" name="images[]" :multiple="true" />
                                <small class="text-muted">Dimensi gambar 1000 X 1400 </small>
                            </div>
                        @endisset
                        @isset($record)
                            <div class="mb-3">
                                <x-coreui.radio-switch label="Status" name="flag" :value="@$record->flag" />
                            </div>
                        @endisset
                    </div>

                    <div class="col-6">
                        @isset($record)
                            @foreach (explode('|', $record->images) as $image)
                                <div class="mb-3">
                                    <img class="img-thumbnail" src="{{ url($image) }}" alt="{{ $record->title }}"
                                        width="100%">
                                </div>
                            @endforeach
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
                        <a href="{{ route('admin.article') }}" class="btn btn-secondary me-2 text-white">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
