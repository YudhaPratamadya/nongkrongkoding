@extends('dashboard.layout.dashboard')

@section('adminTitle', 'Dashboard | Video')

@section('video', 'active open')
@section('indexVideo', 'active')

@section('breadOld', 'Dashboard')
@section('breadNow', 'Video')

@section('adminContent')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">Data Admin</div>

            <div class="table-responsive text-nowrap">
                <table class="table table-striped table-bordered dt-responsive nowrap w-100 display" id="table-category">
                    <thead>
                        <tr class="text-nowrap">
                        <th>No</th>
                        <th>Nama Video</th>
                        <th>Link YouTube</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection

@push('customJs')
    <script>
        $('#table-hakakses').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: '{!! url()->current() !!}',
            order: [
                [1, 'asc']
            ],
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    width: '1%',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: '',
                    name: 'nik'
                },
                {
                    data: 'nama_lengkap',
                    name: 'nama_lengkap',
                },
                {
                    data: 'rt',
                    name: 'rt',
                },
                {
                    data: 'rw',
                    name: 'rw',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '1%'
                }
            ],
            sDom: '<"secondBar d-flex flex-w1rap justify-content-between mb-2"lf>rt<"bottom"p>',
            "fnCreatedRow": function(nRow, data) {
                $(nRow).attr('id', 'warga' + data.id);
            },
        });
    </script>
@endpush