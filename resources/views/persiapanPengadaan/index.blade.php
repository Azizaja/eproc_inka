@extends('layouts.app')
@section('title', 'Persiapan Pengadaan')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid p-3">
            <div class="row">
                <div class="col-12">
                    <div class="card card-tabs mb-0">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                        href="#daftar-persiapan-pengadaan" role="tab"
                                        aria-controls="daftar-persiapan-pengadaan" aria-selected="true">Daftar Persiapan
                                        Pengadaan</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-0">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="daftar-persiapan-pengadaan" role="tabpanel"
                                    aria-labelledby="daftar-persiapan-pengadaan-tab">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="{{ route('persiapan-pengadaan.sap') }}"
                                                            class="btn btn-primary mb-2">
                                                            <i class="fas fa-plus-circle"></i> RFQ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table responsive">
                                                <table id="datatable" class="table table-bordered table-hover mb-2">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Dibuat</th>
                                                            <th>Tim Panitia</th>
                                                            {{-- <th>Aksi</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pekerjaans as $pekerjaan)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>
                                                                    <a
                                                                        href="{{ route('persiapan-pengadaan.show', ['id' => $pekerjaan->id]) }}">
                                                                        <i class="fas fa-search"></i> {{ $pekerjaan->kode }}
                                                                    </a>
                                                                </td>
                                                                <td>{{ $pekerjaan->nama }}</td>
                                                                <td>
                                                                    @switch($pekerjaan->status)
                                                                        @case(50)
                                                                            <span class="badge badge-warning">Persiapan
                                                                                Pengadaan</span>
                                                                        @break

                                                                        @case(1)
                                                                            <span class="badge badge-warning">Pengadaan
                                                                                Berjalan</span>
                                                                        @break

                                                                        @case(100)
                                                                            <span class="badge badge-success">Pengadaan
                                                                                Selesai</span>
                                                                        @break

                                                                        @case(2)
                                                                            <span class="badge badge-danger">Pengadaan
                                                                                Batal</span>
                                                                        @break
                                                                    @endswitch
                                                                    @if ($pekerjaan->status_multi_pemenang == 1)
                                                                        <span class="badge badge-success">Multi
                                                                            Pemenang</span>
                                                                    @endif
                                                                    @switch($pekerjaan->rev_status)
                                                                        @case(App\Models\Pekerjaan::STATUS_REV)
                                                                            <span class="badge badge-danger">Revisi</span>
                                                                        @break

                                                                        @case(App\Models\Pekerjaan::STATUS_REV_FREEZE)
                                                                            <span class="badge badge-danger">Hold</span>
                                                                        @break

                                                                        @default
                                                                    @endswitch
                                                                </td>
                                                                <td>{{ $pekerjaan->created_at }}</td>
                                                                <td>
                                                                    <a data-toggle="modal"
                                                                        href="#modal-pelaksana-kegiatan-{{ $pekerjaan->id }}">
                                                                        <i class="fas fa-search"></i> Pelaksana Pengadaan
                                                                    </a>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal. --}}
    @include('persiapanPengadaan.modal')
@endsection

@push('scripts')
    <script>
        new DataTable('#datatable', {
            "autoWidth": false,
        });
    </script>
@endpush
