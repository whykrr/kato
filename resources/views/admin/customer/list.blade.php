@extends('admin.common.privateLayout')
@section('title', 'Pelanggan')
@section('breadcrumb')
    <li class="breadcrumb-item active"><span>Pelangan</span></li>
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>Pelangan</strong></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = $records->firstItem();
                        @endphp
                        @foreach ($records as $r)
                            <tr onclick="window.location = '{{ url('admin/customer/' . $r->id) }}'" style="cursor: pointer">
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->email }}</td>
                                <td>{{ $r->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $records->render() }}
            </div>
        </div>
    </div>
@endsection
