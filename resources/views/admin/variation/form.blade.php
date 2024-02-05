@extends('admin.common.privateLayout')
@section('title', 'Varian')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <span>Produk</span>
    </li>
    <li class="breadcrumb-item active">
        <span>Varian</span>
    </li>
@endsection
@section('modal')
    @isset($record)
        @if ($record->is_deletable)
            <x-coreui.modal-confirm id="modalDelete" type="delete" :url="route('admin.variation.delete', ['id' => $record->id])" />
        @endif
    @endisset
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>
                @isset($record)
                    Detail
                @else
                    Tambah
                @endisset Data Varian
            </strong></div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.variation.save') }}" method="POST">
                @csrf
                @isset($record)
                    <input type="hidden" name="id" value="{{ $record->id }}">
                @endisset
                <div class="mb-3">
                    <x-coreui.input label="Nama" type="text" name="name" :value="@$record->name" />
                </div>
                <div class="mb-3">
                    @php
                        if (isset($record)) {
                            $valMultiple = $record->is_multiple;
                        } else {
                            $valMultiple = false;
                        }
                    @endphp
                    <x-coreui.radio-switch label="Pilihan Ganda" name="is_multiple" :value="$valMultiple" />
                </div>
                @isset($record)
                    <div class="mb-3">
                        <x-coreui.radio-switch label="Status" name="flag" :value="@$record->flag" />
                    </div>
                @endisset
                <div class="row mb-3">
                    <div class="col-6">
                        @isset($record)
                            @if ($record->is_deletable)
                                <x-coreui.modal-toggle type="danger" target="modalDelete" label="Hapus" />
                            @endif
                        @endisset
                    </div>
                    <div class="col-6 d-flex justify-content-md-end">
                        <a href="{{ route('admin.variation') }}" class="btn btn-secondary me-2 text-white">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @isset($record)
        <div class="card mb-4">
            <div class="card-header"><strong>Opsi</strong></div>
            <div class="card-body">
                <x-coreui.add-link :url="route('admin.variation.addOption', ['variation_id' => $record->id])" label="Tambah Opsi" />
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record->options as $r)
                                <tr onclick="window.location = '{{ route('admin.variation.editOption', ['id' => $r->id, 'variation_id' => $r->variation_id]) }}'"
                                    style="cursor: pointer">
                                    <td>{{ $r->name }}</td>
                                    <td><x-coreui.flag-label value="{{ $r->flag }}" /></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endisset
@endsection
