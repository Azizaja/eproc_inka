<div class="tab-pane fade" id="detail-persiapan-pengadaan" role="tabpanel" aria-labelledby="detail-persiapan-pengadaan-tab">
    <div class="row p-3">
        <div class="col-6">
            <div class="mb-3">
                <table class="align-top">
                    <tr>
                        <td><b>No Pengadaaan</b></td>
                        <td>:</td>
                        <td>12RRIO90</td>
                    </tr>
                    <tr>
                        <td><b>Nama Pengadaan</b></td>
                        <td>:</td>
                        <td>Pengadaan Bahan Baku</td>
                    </tr>
                    <tr>
                        <td><b>Di Buat Oleh</b></td>
                        <td>:</td>
                        <td>PT Bahagia Selalu</td>
                    </tr>
                    <tr>
                        <td><b>Unit kerja</b></td>
                        <td>:</td>
                        <td>Logistik</td>
                    </tr>
                    <tr>
                        <td><b>Bidang/Sub Bidang</b></td>
                        <td>:</td>
                        <td>
                            <table class="table table-bordered table-responsive m-2">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Bidang</th>
                                        <th>Sub Bidang</th>
                                        <th>Kualifikasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Logistik dan perencanaan gudang pengendalian
                                            komoditas</td>
                                        <td>Logistik aktivitas jasa pelayanan informasi
                                            gudang logistik</td>
                                        <td>Non Kecil</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><b>HPS</b></td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>PR Number</b></td>
                        <td>:</td>
                        <td>PR0026TYY</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <table class="align-top">
                    <tr>
                        <td><b>Metode</b></td>
                        <td>:</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><b>Bobot</b></td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Batas Lulus</b></td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Group Material</b></td>
                        <td>:</td>
                        <td>
                            <table class="table table-bordered table-responsive m-2">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Material</th>
                                        <th>Group Material</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Logistik dan perencanaan gudang pengendalian
                                            komoditas</td>
                                        <td>Logistik aktivitas jasa pelayanan informasi
                                            gudang logistik</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Metode Kontrak</b></td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    {{-- button --}}
    <div class="col-12">
        <a href="#usulan-perubahan" data-toggle="modal" class="btn btn-warning btn-sm mb-2">
            <i class="fas fa-plus-circle"></i> Usulan Perubahan
        </a>
        <a href="{{ route('setting-persiapan.index') }}" class="btn btn-info btn-sm mb-2">
            <i class="fas fa-sliders-h"></i> Setting Persiapan Pengadaan
        </a>
        <a href="{{ route('persiapan-pengadaan.undangan') }}" class="btn btn-primary btn-sm mb-2">
            <i class="fas fa-mail-bulk"></i> Undang Penyedia (0)
        </a>
        <a href="" class="btn btn-success btn-sm mb-2">
            <i class="fas fa-clipboard-check"></i> Register
        </a>
        <a href="" class="btn btn-danger btn-sm mb-2">
            <i class="fas fa-trash"></i> Hapus
        </a>
    </div>
    {{-- detail --}}
    <div class="col-12 p-0">
        <div class="card card-dark card-outline card-tabs mb-0">
            <div class="card-header p-0">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#rincian-item"
                            role="tab" aria-controls="rincian-item" aria-selected="true">Rincian
                            Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-home-tab" data-toggle="pill"
                            href="#persyaratan-pengadaan" role="tab" aria-controls="persyaratan-pengadaan"
                            aria-selected="true">Persyaratan Pengadaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                            href="#pelaksana-pengadaan" role="tab" aria-controls="pelaksana-pengadaan"
                            aria-selected="false">Pelaksana Pengadaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                            href="#perusahaan-diundang" role="tab" aria-controls="perusahaan-diundang"
                            aria-selected="false">Perusahaan Diundang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#activity-log"
                            role="tab" aria-controls="activity-log" aria-selected="false">Activity
                            Log</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#activity-resume"
                            role="tab" aria-controls="activity-resume" aria-selected="false">Activity
                            Resume</a>
                    </li>
                </ul>
            </div>
            <div class="card-body table-responsive p-0">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    {{-- rincian item --}}
                    <div class="tab-pane fade show active p-3" id="rincian-item" role="tabpanel"
                        aria-labelledby="custom-tabs-one-home-tab">

                        @include('persiapanPengadaan.rincianItemPengadaan')

                    </div>
                    {{-- persyaratan pengadaan --}}
                    <div class="tab-pane fade" id="persyaratan-pengadaan" role="tabpanel"
                        aria-labelledby="custom-tabs-one-home-tab">
                        
                        @include('persiapanPengadaan.persyaratanPengadaan')

                    </div>
                    {{-- pelaksana pengadaan --}}
                    <div class="tab-pane fade p-3" id="pelaksana-pengadaan" role="tabpanel"
                        aria-labelledby="custom-tabs-one-profile-tab">

                       @include('persiapanPengadaan.pelaksanaPengadaan')

                    </div>
                    {{-- perusahaan diundang --}}
                    <div class="tab-pane fade p-3" id="perusahaan-diundang" role="tabpanel"
                        aria-labelledby="custom-tabs-one-profile-tab">
                    
                        @include('persiapanPengadaan.perusahaanDiundang')

                    </div>
                    {{-- activity log --}}
                    <div class="tab-pane fade p-3" id="activity-log" role="tabpanel"
                        aria-labelledby="custom-tabs-one-profile-tab">
                        
                        @include('persiapanPengadaan.activityLog')

                    </div>
                    {{-- activity resume --}}
                    <div class="tab-pane fade p-3" id="activity-resume" role="tabpanel"
                        aria-labelledby="custom-tabs-one-profile-tab">
                        
                        @include('persiapanPengadaan.activityResume')
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
