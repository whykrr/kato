@extends('admin.common.privateLayout')
@section('title', 'Artikel')
@section('breadcrumb')
    <li class="breadcrumb-item"><span>Situs Web</span></li>
    <li class="breadcrumb-item active"><span>Artikel</span></li>
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>Artikel</strong></div>
        <div class="card-body">
            <x-coreui.add-link :url="route('admin.article.add')" />
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
                            <tr onclick="window.location = '{{ route('admin.article.edit', ['id' => $r->id]) }}'"
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
