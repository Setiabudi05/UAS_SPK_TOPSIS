@extends('public.layouts.app')

@push('css')
@endpush
@push('js')
@endpush

@section('content')
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>SIPEGU</h3>
                        <h2>Sistem Pendukung Keputusan Pemilihan Guru Pada Jurusan Teknik Komputer & Jaringan.</h2>
                        <p>
                        Sistem Pendukung Keputusan Pemilihan Guru TKJ (SIPEGU) adalah sistem yang dirancang
                        untuk membantu dalam proses pengambilan keputusan dalam memilih guru untuk mata pelajaran 
                        Teknik Komputer dan Jaringan (TKJ). Sistem ini menggunakan berbagai teknik dan metode komputasi untuk 
                        menganalisis data calon guru, seperti pengalaman kerja, pendidikan, keterampilan teknis, dan evaluasi
                        kinerja sebelumnya. Tujuannya adalah untuk memastikan bahwa seleksi guru TKJ dilakukan secara objektif 
                        dan berdasarkan kriteria yang telah ditentukan, sehingga dapat memilih calon yang paling sesuai untuk 
                        mengajar dalam bidang tersebut.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/public/img/about.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- /About Section -->

    <!-- /Recent Posts Section -->
@endsection
