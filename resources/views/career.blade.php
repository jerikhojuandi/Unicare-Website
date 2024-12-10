@extends('layouts.navbar')

@section('content')

<style>
    /* sama kek products jgn di copy ke style */
    .header {
        padding: 150px 0;
        background-image: url("{{ asset('assets/treatment-header-bg.JPG') }}");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y: 20%;
    }

    .treatment-text{
        color:#434343;
    }

    .treatment-desc,
    .facial-treatment {
        background-color: #f8f8f8;
        /* background-color: #F1E1DD; */
    }

    .treatment-desc h1 {
        font-size: 28px;
    }

    .treatment-desc{
        /* margin: 50px 50px; */
        /* justify-content: center; */
    }

    .treatment-card{
        display: flex;
        flex-direction: column;
        align-items: center; /* Centers content horizontally */
        text-align: center;
        justify-content: center;
        padding: 15px; /* Add padding as needed */
        /* width: 90%; */
  }

    .treatment-img img {
        /* display: block; */
        max-width: 100%;
        max-height: 100%;
        /* margin-right: auto; */
        /* margin-left: auto; */
    }

    .align-left {
        margin-left: 0;
        margin-right: auto;
    }

    .align-right {
        margin-left: auto;
        margin-right: 0;
    }

    .treatment-desc-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* margin-bottom: auto; */
        /* height: 100%; */
    }

    .treatment-price {
        /* margin-top: auto; */
    }

    .treatment-name{
        padding: 10px 0;
        border-bottom: 2px solid;
        border-color: #939589;
        width: 80%;
        font-size: 22px
    }

    .treatment-title{
        padding-top: 40px;
    }

    .treatment-title-text{
        font-size: 36px;
        font-weight: 700;
    }

    .treatment-card-text{
        font-size: 16px;
    }



        /* Responsive Adjustments */
        @media (max-width: 768px) {
        .header h1 {
            font-size: 24px; /* Reduce header font size on smaller screens */
        }

        .treatment-desc h1 {
            font-size: 24px; /* Reduce treatment description font size */
        }

        .top-container, .bottom-container {
            text-align: center; /* Center-align text for smaller screens */
        }

        .top-container .col-md-5, .bottom-container .col-md-5 {
            margin: 0 auto; /* Center images in their containers */
        }

        /* .treatment-img {
            margin-bottom: 15px;
        } */
        .align-left,
        .align-right{
            margin-left: auto;
            margin-right: auto;
        }
        .treatment-title-text{
            font-size: 24px;
            text-align: center;
        }
        .treatment-desc{
            margin: 0;
        }
    }

        /* Accordion Styling */
    .accordion-button {
        background-color: #f8f8f8;
        /* border: 1px solid #ddd; */
        border-radius: 0.375rem; /* Rounded corners */
        color: #333;
        font-weight: 600;
        font-size: 24px;
    }

    .accordion-button:focus {
        box-shadow: none; /* Remove box-shadow on focus */
    }

    .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #882947;
        border-color: #ddd;
    }

    .accordion-body {
        padding: 1.25rem;
        background-color: #;
        border-top: 1px solid #ddd;
    }


    .accordion-item {
        /* margin-bottom: 1rem; */
        border: 1px solid #ddd;
        border-radius: 0.375rem; /* Rounded corners */
    }
</style>

<section class="header">
    <div class="treatment-page-title text-center section-title">
        <h1><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> Career<span class="treatment-text"></span></h1>
    </div>
</section>


{{-- design awal --}}
<section class="treatment-desc pt-5">
    <div class="container">
        {{-- <div class="top-container row d-flex pb-3">
            <div class="col-md-7 treatment-desc-container order-2 order-md-1">
                <div class="section-title">
                    <h1><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="treatment-text">Signature Facial</span></h1>
                </div>
                <p class="treatment-desc">Treatment Facial signature (khas) Unicare Aesthetic Clinic, dengan serangkaian treatment untuk membersihkan, relaksasi, dan mengatasi berbagai permasalahan kulitmu secara spesifik.</p>
                <p class="treatment-price">Harga Treatment mulai dari Rp1.299.000</p>
            </div>
            <div class="col-md-5 treatment-img pb-3 order-1 order-md-2">
                <img src="{{asset('assets/placeholder.jpg')}}" alt="Image" class="align-left">
            </div>
        </div> --}}

        <div class="bottom-container row d-flex">
            <div class="col-md-7 treatment-desc-container order-1 order-md-2 py-5">
                <p class="treatment-desc" style="font-size: 2rem;"><span class="fw-bolder">Bergabunglah Bersama Tim Kami!</span></p>
                <p class="treatment-price py-2">Kami di Unicare Aesthetic Clinic terus berkembang, dan ini adalah kesempatan Anda untuk menjadi bagian dari tim yang berdedikasi dalam menciptakan versi terbaik dari diri setiap pelanggan. Jika Anda mencari lingkungan kerja yang inspiratif dengan tim profesional, tempat Anda bisa bertumbuh dan berkontribusi, kami ingin mendengar dari Anda!                </p>
                <p class="treatment-desc">Cek peluang karir kami sekarang dan mari berkembang bersama!                </p>
            </div>
            <div class="col-md-5 treatment-img  order-md-1">
                <img src="{{asset('assets/career-img.png')}}" alt="Image" class="align-right">
            </div>
        </div>
</section>

            <!-- FAQ 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 faq-accordion">
        <div class="container">
            <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Dokter (Full-time/Part-time)
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="fw-bolder">Kualifikasi:</span>
                            <ul>
                                <li>Pria/Wanita, berusia maksimal 35 tahun</li>
                                <li>Pendidikan S1 Kedokteran dari Universitas ternama                                </li>
                                <li>Memiliki pengalaman di bidang estetika adalah suatu nilai tambah
                                </li>
                                <li>Terbuka juga untuk Fresh graduate yang memiliki STR dan passion di bidang Estetika
                                </li>
                                <li>Berpenampilan menarik
                                </li>
                                <li>Memiliki kemampuan komunikasi dan interpersonal yang baik
                                </li>
                                <li>Bersedia untuk mengikuti masa training selama 1-3 bulan
                                </li>
                              </ul>
                            <span class="fw-bolder">Yang Kami Tawarkan:                            </span>
                            <ul>
                                <li> Suasana kerja yang menyenangkan dan menjunjung kekeluargaan</li>
                                <li> Gaji pokok (uang duduk)</li>
                                <li> Komisi Tindakan</li>
                                <li> Uang Makan
                                </li>
                                <li> Tunjangan Hari Raya
                                </li>
                                <li> Disediakan pelatihan dan pengembangan
                                </li>
                              </ul>
                            <p><span class="fw-bolder">Kirimkan CV dan lamaran pekerjaan ke email <span class="uac-text">hrd.unicare@gmail.com</span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Perawat (Full-time)
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="fw-bolder">Kualifikasi:</span>
                            <ul>
                                <li>Wanita, berusia maksimal 30 tahun</li>
                                <li>Pendidikan min. D3 Keperawatan / Kebidanan                                </li>
                                <li>Memiliki pengalaman di bidang estetika adalah suatu nilai tambah
                                </li>
                                <li>Terbuka juga untuk Fresh graduate yang memiliki STR dan passion di bidang Estetika
                                </li>
                                <li>Berpenampilan menarik
                                </li>
                                <li>Memiliki kemampuan komunikasi dan interpersonal yang baik
                                </li>
                                <li>Mau belajar dan bersedia untuk mengikuti masa training selama 1-3 bulan
                                </li>
                              </ul>
                            <span class="fw-bolder">Yang Kami Tawarkan:                            </span>
                            <ul>
                                <li> Suasana kerja yang menyenangkan dan menjunjung kekeluargaan</li>
                                <li> Gaji pokok (uang duduk)</li>
                                <li> Komisi Tindakan</li>
                                <li> Uang Makan
                                </li>
                                <li> Tunjangan Hari Raya
                                </li>
                                <li> Disediakan pelatihan dan pengembangan
                                </li>
                              </ul>
                            <p><span class="fw-boldest">Kirimkan CV dan lamaran pekerjaan ke email <span class="uac-text">hrd.unicare@gmail.com</span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Terapis / Beautician (Full-time)
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="fw-bolder">Kualifikasi:</span>
                            <ul>
                                <li>Wanita, berusia maksimal 30 tahun</li>
                                <li>Pendidikan minimal SMK Kesehatan</li>
                                <li>Memiliki pengalaman di bidang estetika adalah suatu nilai tambah
                                </li>
                                <li>Terbuka juga untuk Fresh graduate
                                </li>
                                <li>Berpenampilan menarik
                                </li>
                                <li>Memiliki kemampuan komunikasi dan interpersonal yang baik
                                </li>
                                <li>Mau belajar dan bersedia untuk mengikuti masa training selama 1-3 bulan
                                </li>
                              </ul>
                            <span class="fw-bolder">Yang Kami Tawarkan:                            </span>
                            <ul>
                                <li> Suasana kerja yang menyenangkan dan menjunjung kekeluargaan</li>
                                <li> Gaji pokok (uang duduk)</li>
                                <li> Komisi Tindakan</li>
                                <li> Uang Makan
                                </li>
                                <li> Tunjangan Hari Raya
                                </li>
                                <li> Disediakan pelatihan dan pengembangan
                                </li>
                              </ul>
                            <p><span class="fw-boldest">Kirimkan CV dan lamaran pekerjaan ke email <span class="uac-text">hrd.unicare@gmail.com</span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Social Media Staff (Full-time)
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="fw-bolder">Kualifikasi:</span>
                            <ul>
                                <li>Pria/Wanita, berusia maksimal 30 tahun</li>
                                <li>Pendidikan min. SMA/sederajat                             </li>
                                <li>Terbuka juga untuk Fresh graduate
                                </li>
                                <li>Menguasai social media (Instagram, Tiktok, Youtube)
                                </li>
                                <li>Memiliki taste yang baik dalam menciptakan konten (foto, video, dan konten visual lainnya)
                                </li>
                                <li>Fasih menggunakan aplikasi editing (Photoshop / Adobe Illustrator)
                                </li>
                                <li>Memiliki skill dasar fotografi
                                </li>
                                <li>Aktif, kreatif, inovatif, dapat mengikuti perkembangan trend
                                </li>
                                <li>Memiliki kepribadian baik dan penampilan menarik
                                </li>
                              </ul>
                            <span class="fw-bolder">Yang Kami Tawarkan:                            </span>
                            <ul>
                                <li> Suasana kerja yang menyenangkan dan menjunjung kekeluargaan</li>
                                <li> Gaji pokok (uang duduk)</li>
                                <li> Komisi Omset</li>
                                <li> Uang Makan
                                </li>
                                <li> Tunjangan Hari Raya
                                </li>
                                <li> Disediakan pelatihan dan pengembangan
                                </li>
                              </ul>
                            <p><span class="fw-boldest">Kirimkan CV dan lamaran pekerjaan ke email <span class="uac-text">hrd.unicare@gmail.com</span></span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
