@extends('admin.common.privateLayout')
@section('title', 'Admin')
@section('breadcrumb')
    <li class="breadcrumb-item active"><span>Admin</span></li>
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>Administrator</strong></div>
        <div class="card-body">
            <x-coreui.add-link :url="route('admin.user.add')" />
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = $records->firstItem();
                        @endphp
                        @foreach ($records as $r)
                            @if ($r->is_deletable)
                                <tr onclick="window.location = '{{ route('admin.user.edit', ['id' => $r->id]) }}'"
                                    style="cursor: pointer">
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $r->name }}</td>
                                    <td>{{ $r->email }}</td>
                                </tr>
                            @else
                                <tr style="cursor: not-allowed">
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $r->name }}</td>
                                    <td>{{ $r->email }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $records->render() }}
        </div>
    </div>
@endsection
