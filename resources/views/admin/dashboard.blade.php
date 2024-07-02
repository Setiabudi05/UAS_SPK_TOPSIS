@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="/assets/scss/iconly.scss">

    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Data Kriteria</h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_kriteria }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Data Alternatif</h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_alternatif }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Data User</h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_user }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Penilaian</h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_penilaian }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Explanation Section --}}
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sistem Pendukung Keputusan Pemilihan Guru TKJ (SIPEGU)</h4>
                        </div>
                        <div class="card-body">
                            <p>
                            Sistem Pendukung Keputusan Pemilihan Guru Teknik Komputer dan Jaringan (SIPEGU) 
                            adalah perangkat lunak berbasis teknologi informasi yang dirancang untuk membantu 
                            institusi pendidikan dalam proses seleksi dan pemilihan guru TKJ. SIPEGU memanfaatkan 
                            analisis data dan algoritma untuk menyediakan rekomendasi yang objektif, efisien, dan 
                            transparan, dengan tujuan untuk memilih calon guru yang paling memenuhi kualifikasi dan kompetensi yang dibutuhkan 
                            sesuai dengan standar yang telah ditentukan.
                            </p>
                            <p>
                            Perangkat lunak ini mampu mengelola data calon guru, melakukan analisis terhadap kualifikasi dan pengalaman, 
                            serta memberikan skor dan peringkat berdasarkan kriteria yang dapat disesuaikan. Dengan fitur-fitur seperti 
                            antarmuka pengguna yang intuitif, keamanan data yang tinggi, dan kemampuan pelaporan yang komprehensif,
                            SIPEGU membantu mengurangi bias dalam pengambilan keputusan, mempercepat proses seleksi, dan meningkatkan kualitas 
                            pendidikan di bidang Teknik Komputer dan Jaringan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/static/js/pages/dashboard.js"></script>
@endsection