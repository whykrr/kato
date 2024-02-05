@extends('admin.common.privateLayout')
@section('title', 'Admin')
@section('breadcrumb')
    <li class="breadcrumb-item active"><span>Pembayaran</span></li>
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>Pembayaran</strong></div>
        <div class="card-body">
            <x-coreui.add-link :url="route('admin.payment.add')" />
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Rekening</th>
                            <th scope="col">Nomor Rekening</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = $records->firstItem();
                        @endphp
                        @foreach ($records as $r)
                            <tr onclick="window.location = '{{ route('admin.payment.edit', ['id' => $r->id]) }}'"
                                style="cursor: pointer">
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->account_name }}</td>
                                <td>{{ $r->account_number }}</td>
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
