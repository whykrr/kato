@extends('admin.common.privateLayout')
@section('title', 'Produk - Kategori')
@section('breadcrumb')
    <li class="breadcrumb-item"><span>Produk</span></li>
    <li class="breadcrumb-item active"><span>Kategori</span></li>
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>Kategori</strong></div>
        <div class="card-body">
            <x-coreui.add-link :url="route('admin.category.add')" />
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = $records->firstItem();
                        @endphp
                        @foreach ($records as $r)
                            <tr onclick="window.location = '{{ route('admin.category.edit', ['id' => $r->id]) }}'"
                                style="cursor: pointer">
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $r->name }}</td>
                                <td><x-coreui.flag-label value="{{ $r->flag }}" /></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $records->render() }}
        </div>
    </div>
@endsection
