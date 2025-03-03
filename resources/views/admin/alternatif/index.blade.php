@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin/scss/pages/datatables.scss') }}">
@endpush

@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('.alternatifs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.alternatif.data') }}",
                columns: [
                    { data: 'nama', name: 'nama' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                initComplete: function() {
                    // Move the create button into the datatable toolbar
                    $('.dataTables_filter').prepend($('.create-button-container').html());
                }
            });
        });

        function hapus(id) {
            event.preventDefault();
            swal({
                title: "Apakah Anda Yakin?",
                text: "Data Alternatif akan dihapus!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((confirm) => {
                if (confirm.value) {
                    try {
                        $('#form-delete-alternatif-' + id).submit();
                    } catch (error) {
                        console.log('failed');
                    }
                }
            });
        }
    </script>
@endpush

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Alternatif</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Alternatif</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Data Alternatif</h5>
                    <div class="create-button-container">
                        <a href="{{ route('admin.alternatif.create') }}" class="btn btn-success">Tambahkan Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table alternatifs-table" id="alternatifs-table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Tables end -->
    </div>
@endsection
