@extends('layouts.navbar')

@section('content')

<style>
    .header, .container, .uac-products-profile, .product-section {
        background-color: #fff;
    }

    .product-section{
        padding-top: 40px;
    }

    .header {
        padding: 150px 0;
        background-image: url("{{ asset('assets/treatment-header-bg.JPG') }}");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y: 20%;
    }


    .doctor-img img {
        display: block;
        max-width: 90%;
        max-height: 90%;
        margin: auto;
    }

    .doctor-desc {
        font-weight: 500;
    }

    .cards-wrapper {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .carousel-item {
        align-items: center;
    }

    .card {
        display: flex;
        flex-direction: column; /* Aligns items vertically */
        height: 100%; /* Ensures the card takes up full height of its container */
        min-height: 500px;
        /* margin: 0.5em; */
        width: 22%;
        background-color: transparent;
        border: none;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        flex: 1;
        align-items: center;
        /* padding: 1em; */
        justify-content: space-between;
    }

    .product-name{
        font-size: 16px;
        text-align: center;

    }

    .product-desc{
        font-size: 14px;
    }
    .price{
        top: 0;
    }

    .uac-products-profile  {
        background: rgb(217,184,175);
        background: linear-gradient(90deg, rgba(217,184,175,1) 0%, rgba(241,225,221,1) 100%);
        position: relative;
        display: flex;
        flex-wrap: wrap;
    }

    .uac-products-profile .product-hero-image {
        max-width: 80%; /* Ensures the image scales properly */
        height: auto; /* Maintains the aspect ratio */
        position: relative; /* Adjusts positioning within the container */
        align-self: flex-end; /* Aligns the image to the bottom of the column */
        margin-left: auto; /* Pushes the image to the right */
        object-fit: contain; /* Ensures the image is fully visible within its box */
    }

    .product-heading-shopee{
        font-size: 6rem;
        font-style: oblique;
    }

    .product-heading{
        font-size: 3.5rem;
        color: #77163B;
        font-style: oblique;

    }


    @media (max-width: 768px) {
        .carousel-inner {
            justify-content: center;
            align-items: center;
        }

        .card {
            margin: auto;
            width: 65%;
        }
        .category-title{
            text-align: center;
        }

        .product-hero-image-container img{
            display: none;
        }

        .product-heading{
            font-size: 2.5rem;
        }

        .product-heading-shopee{
            font-size: 4rem;
        }

    }

    .image-wrapper {
        width: 100%;
        padding-top: 90%;
        position: relative;
    }

    .image-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain; /* Ensures the image fits within its container without distortion */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
        border-radius: 50%;
        border: 2px solid black;
    }



    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        /* background-color: rgba(0, 0, 0, 0.5); */
    }

    .fa-chevron-right,
    .fa-chevron-left{
        color: black;
        font-size: 2em;
    }
</style>

<section class="header">
    <div class="product-page-title text-center section-title">
        <h1><span class="uac-text text-center">UAC</span> <span class="second-text">Products</span></h1>
    </div>
</section>

{{-- <section class="uac-products-profile P-4">
    <div class="container ">
        <div class="col-md-5 d-flex justify-content-end align-items-center text-right">
            <div class="lc-block text-right px-4">
                <h5 class="product-heading" style="font-size: 2rem;">We Are on <span class="fw-bolder" style="font-weight: bolder; font-size: 2rem;">Shoppee!</span> </h5>
                <a href="http://wa.me/6285173155211" target="_blank">
                    <button class="button-17" role="button" style="font-size: 1.25rem;">Book Now!</button>
                </a>
            </div>
        </div>
        <div class="col-md-7 d-flex justify-content-end align-items-center position-relative">
            <img class="hero-image"
                 src="assets/Hero-asset.png"
                 alt="Hero Image">
        </div>
    </div>
</section> --}}


{{-- acneseries product --}}
<section class="product-section">
    <div class="container">
        <div class="category-title  d-flex justify-content-center section-title">
            <h1><span class="uac-text">Facial Wash</span> <span class="second-text">Series</span></h1>
        </div>

        <div class="cards-wrapper d-none d-md-flex">
            <!-- Product 1 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Fw Coffee.png')}}" alt="UAC Facial Wash Coffee" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Facial Wash Coffee</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Facial Wash Coffee mengandung ekstrak kopi yang dapat membantu membersihkan kotoran dan debu di kulit wajah yang berjerawat.
                    </p>
                    <p class="text-center" style="color: #636363">Rp 99.000,-</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/fw bright.png')}}" alt="UAC Facial Wash Coffee" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Brightening Face Wash</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Facial Wash Brightening diformulasikan untuk mengangkat kotoran dan debu di wajah, serta mencerahkan kulit wajah.
                    </p>
                    <p class="text-center" style="color: #636363">Rp 99.000,-</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Fw Anti aging.png')}}" alt="UAC Facial Wash Coffee" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Anti-Aging Face Wash</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Facial Wash Anti Aging  diformulasikan untuk mengangkat kotoran dan debu di wajah, serta membantu menyamarkan tanda-tanda penuaan dini.

                    </p>
                    <p class="text-center" style="color: #636363">Rp 99.000,-</p>
                </div>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide d-md-none" data-bs-ride="false">
            <div class="carousel-inner">
                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Fw Coffee.png')}}" alt="UAC Facial Wash Coffee" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Facial Wash Coffee</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Facial Wash Coffee mengandung ekstrak kopi yang dapat membantu membersihkan kotoran dan debu di kulit wajah yang berjerawat.
                            </p>
                            <p class="text-center" style="color: #636363">Rp 99.000,-</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/fw bright.png')}}" alt="UAC Facial Wash Coffee" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Brightening Face Wash</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Facial Wash Brightening diformulasikan untuk mengangkat kotoran dan debu di wajah, serta mencerahkan kulit wajah.
                            </p>
                            <p class="text-center" style="color: #636363">Rp 99.000,-</p>
                        </div>
                    </div>

                </div>

                <!-- Carousel Item 3 -->
                <div class="carousel-item">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Fw Anti aging.png')}}" alt="UAC Facial Wash Coffee" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Anti-Aging Face Wash</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Facial Wash Anti Aging  diformulasikan untuk mengangkat kotoran dan debu di wajah, serta membantu menyamarkan tanda-tanda penuaan dini.

                            </p>
                            <p class="text-center" style="color: #636363">Rp 99.000,-</p>
                        </div>
                    </div>

                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

{{-- brightening series product --}}
<section class="product-section">
    <div class="container">
        <div class="category-title  d-flex justify-content-center section-title">
            <h1><span class="uac-text">Toner</span> <span class="second-text">Series</span></h1>
        </div>

        <div class="cards-wrapper d-none d-md-flex">
            <!-- Product 1 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Toner astringen.png')}}" alt="UAC Toner Astringen" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Toner Astringen</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Toner yang diformulasikan untuk menyegarkan kulit wajah yang berminyak dan berjerawat.</p>
                    <p class="text-center" style="color: #636363">Rp 95.000,-</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Toner bright.png')}}" alt="UAC Toner Astringen" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Toner Brightening</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Toner brightening diformulasikan untuk menyegarkan kulit Wajah dan membantu mencerahkan kulit wajah.
                    </p>
                    <p class="text-center" style="color: #636363">Rp 95.000,-</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Toner antiaging.png')}}" alt="UAC Toner Astringen" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Toner Anti-Aging</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Toner Anti-aging diformulasikan untuk menyegarkan kulit wajah dan membantu menyamarkan tanda-tanda penuaan dini.                    </p>
                    <p class="text-center" style="color: #636363">Rp 95.000,-</p>
                </div>
            </div>
        </div>

        <div id="brightening-carousel" class="carousel slide d-md-none" data-bs-ride="false">
            <div class="carousel-inner">
                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Toner astringen.png')}}" alt="UAC Toner Astringen" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Toner Astringen</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Toner yang diformulasikan untuk menyegarkan kulit wajah yang berminyak dan berjerawat.</p>
                            <p class="text-center" style="color: #636363">Rp 95.000,-</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Toner astringen.png')}}" alt="UAC Toner Astringen" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Toner Astringen</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Toner yang diformulasikan untuk menyegarkan kulit wajah yang berminyak dan berjerawat.</p>
                            <p class="text-center" style="color: #636363">Rp 95.000,-</p>
                        </div>
                    </div>

                </div>

                <!-- Carousel Item 3 -->
                <div class="carousel-item">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Toner antiaging.png')}}" alt="UAC Toner Astringen" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Toner Anti-Aging</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Toner Anti-aging diformulasikan untuk menyegarkan kulit wajah dan membantu menyamarkan tanda-tanda penuaan dini.                    </p>
                            <p class="text-center" style="color: #636363">Rp 95.000,-</p>
                        </div>
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#brightening-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#brightening-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                </span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</section>

{{-- antiaging series product --}}
<section class="product-section">
    <div class="container">
        <div class="category-title  d-flex justify-content-center section-title">
            <h1><span class="uac-text">Serum</span> <span class="second-text">Series</span></h1>
        </div>

        <div class="cards-wrapper d-none d-md-flex">
            <!-- Product 1 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Serum Acne.png')}}" alt="UAC Acne Day Serum" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Acne Day Serum</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Mengandung glycolic acid, salicylic acid, dan sulfur untuk mengatasi jerawat meradang dan memudarkan bekas jerawat.</p>
                    <p class="text-center" style="color: #636363">Rp 199.000,-</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Serum essential.png')}}" alt="UAC Acne Day Serum" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Essential Whitening Serum</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Mengandung vitamin c yang membantu mencerahkan kulit, menyamarkan noda hitam, dan melindungi dari kerusakan akibat radikal bebas.
                    </p>
                    <p class="text-center" style="color: #636363">Rp 189.000,-</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Serum Intense.png')}}" alt="UAC Acne Day Serum" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Intense Brightening Serum</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Mengandung tranexamic acid yang efektif membantu menyamarkan hiperpigmentasi, meratakan warna kulit, dan membuat kulit menjadi lebih cerah

                    </p>
                    <p class="text-center" style="color: #636363">Rp 229.000,-</p>
                </div>
            </div>
        </div>

        <div id="anti-aging-carousel" class="carousel slide d-md-none" data-bs-ride="false">
            <div class="carousel-inner">
                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Serum Acne.png')}}" alt="UAC Acne Day Serum" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Acne Day Serum</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Mengandung glycolic acid, salicylic acid, dan sulfur untuk mengatasi jerawat meradang dan memudarkan bekas jerawat.</p>
                            <p class="text-center" style="color: #636363">Rp 199.000,-</p>
                        </div>
                    </div>

                </div>

                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Serum essential.png')}}" alt="UAC Acne Day Serum" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Essential Whitening Serum</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Mengandung vitamin c yang membantu mencerahkan kulit, menyamarkan noda hitam, dan melindungi dari kerusakan akibat radikal bebas.
                            </p>
                            <p class="text-center" style="color: #636363">Rp 189.000,-</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Item 3 -->
                <div class="carousel-item">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Serum Intense.png')}}" alt="UAC Acne Day Serum" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Intense Brightening Serum</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Mengandung tranexamic acid yang efektif membantu menyamarkan hiperpigmentasi, meratakan warna kulit, dan membuat kulit menjadi lebih cerah

                            </p>
                            <p class="text-center" style="color: #636363">Rp 229.000,-</p>
                        </div>
                    </div>
                    </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#anti-aging-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#anti-aging-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

{{-- misscellaneous items  --}}
<section class="product-section">
    <div class="container">
        <div class="category-title  d-flex justify-content-center section-title">
            <h1><span class="uac-text">Miscellaneous</span> <span class="second-text">Items</span></h1>
        </div>

        <div class="cards-wrapper d-none d-md-flex">
            <!-- Product 1 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Sunscreen.png')}}" alt="UAC Facial Wash Coffee" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Sun Screen</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Physical Sunscreen SPF 60 bertekstur water gel yang cepat meresap. Melindungi kulit dari sinar UV tanpa rasa lengket, nyaman untuk penggunaan sehari-hari.

                    </p>
                    <p class="text-center" style="color: #636363">Rp 235.000,-</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/whitening cream.png')}}" alt="UAC Toner Astringen" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Whitening Cream</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Mencerahkan area lipatan kulit dengan camellia leaf, glycolic acid, dan aloe vera yang aman untuk daerah kulit yang sensitif sekalipun.                   </p>
                    <p class="text-center" style="color: #636363">Rp 99.000,-</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{asset('assets/Skincare/Acne day cream.png')}}" alt="UAC Acne Day Serum" class="product-image">
                </div>
                <div class="card-body mt-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="product-name mb-0">UAC Acne Day Cream</h5>
                        {{-- <a href="#">
                            <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                        </a> --}}
                    </div>
                    <p class="product-desc text-center pt-3">Mengandung glycolic acid dan niacinamide yang membantu mengontrol minyak berlebih, mencegah munculnya jerawat, mencerahkan dan memudarkan bekas jerawat.

                    </p>
                    <p class="text-center" style="color: #636363">Rp 115.000,-</p>
                </div>
            </div>
        </div>

        <div id="miscellaneous-carousel" class="carousel slide d-md-none" data-bs-ride="false">
            <div class="carousel-inner">
                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Sunscreen.png')}}" alt="UAC Facial Wash Coffee" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Sun Screen</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Physical Sunscreen SPF 60 bertekstur water gel yang cepat meresap. Melindungi kulit dari sinar UV tanpa rasa lengket, nyaman untuk penggunaan sehari-hari.

                            </p>
                            <p class="text-center" style="color: #636363">Rp 235.000,-</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/whitening cream.png')}}" alt="UAC Toner Astringen" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Whitening Cream</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Mencerahkan area lipatan kulit dengan camellia leaf, glycolic acid, dan aloe vera yang aman untuk daerah kulit yang sensitif sekalipun.                   </p>
                            <p class="text-center" style="color: #636363">Rp 99.000,-</p>
                        </div>
                    </div>

                </div>

                <!-- Carousel Item 3 -->
                <div class="carousel-item">
                    <div class="card">
                        <div class="image-wrapper">
                            <img src="{{asset('assets/Skincare/Acne day cream.png')}}" alt="UAC Acne Day Serum" class="product-image">
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="product-name mb-0">UAC Acne Day Cream</h5>
                                {{-- <a href="#">
                                    <img src="assets/shopee.svg" alt="Shopee" class="footer-icon">
                                </a> --}}
                            </div>
                            <p class="product-desc text-center pt-3">Mengandung glycolic acid dan niacinamide yang membantu mengontrol minyak berlebih, mencegah munculnya jerawat, mencerahkan dan memudarkan bekas jerawat.

                            </p>
                            <p class="text-center" style="color: #636363">Rp 115.000,-</p>
                        </div>
                    </div>
                    </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#miscellaneous-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#miscellaneous-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="uac-products-profile ">
    {{-- <div class="container "> --}}
        <div class="col-md-5 col-12 d-flex justify-content-center align-items-center text-center text-md-start py-3">
            <div class="lc-block  ">
                <h1 class="product-heading mb-4">We Are on  <br><span class="product-heading-shopee fw-bold">Shopee!</span> </h1>
                <a href="https://shopee.co.id/unicareaesthetic?originalCategoryId=11043254" target="_blank">
                    <button class="button-17" role="button" style="font-size: 1rem;">Shop Now!</button>
                </a>
            </div>
        </div>
        <div class="product-hero-image-container col-md-7 d-flex justify-content-end align-items-center position-relative">
            <img class="product-hero-image"
                 src="{{asset('assets/contact.png')}}"
                 alt="Hero Image">
        </div>
    {{-- </div> --}}
</section>
@endsection
