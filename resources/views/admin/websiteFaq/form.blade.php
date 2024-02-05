@extends('admin.common.privateLayout')
@section('title', 'Pembayaran')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <span>Website</span>
    </li>
    <li class="breadcrumb-item active">
        <span>Pertanyaan Umum</span>
    </li>
@endsection
@section('modal')
    @isset($record)
        <x-coreui.modal-confirm id="modalDelete" type="delete" :url="route('admin.faq.delete', ['id' => $record->id])" />
    @endisset
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>
                @isset($record)
                    Detail
                @else
                    Tambah
                @endisset Data Pertanyaan Umum
            </strong></div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.faq.save') }}" method="POST">
                @csrf
                @isset($record)
                    <input type="hidden" name="id" value="{{ $record->id }}">
                @endisset
                <div class="mb-3">
                    <x-coreui.textarea label="Pertanyaan" name="question" :value="@$record->question" />
                </div>
                <div class="mb-3">
                    <x-coreui.textarea label="Jawaban" name="answer" :value="@$record->answer" :large="true" />
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
                        <a href="{{ route('admin.faq') }}" class="btn btn-secondary me-2 text-white">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
