@extends('admin.common.privateLayout')
@section('title', 'Spanduk')
@section('breadcrumb')
    <li class="breadcrumb-item"><span>Situs Web</span></li>
    <li class="breadcrumb-item active"><span>Spanduk</span></li>
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>Spanduk</strong></div>
        <div class="card-body">
            <x-coreui.add-link :url="route('admin.banner.add')" />
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = $records->firstItem();
                        @endphp
                        @foreach ($records as $r)
                            <tr onclick="window.location = '{{ route('admin.banner.edit', ['id' => $r->id]) }}'"
                                style="cursor: pointer">
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $r->title }}</td>
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
