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
        margin: 50px 50px;
        /* justify-content: center; */
    }

    .treatment-card {
        display: flex;
        flex-direction: column;
        justify-content: flex-start; /* Aligns content at the top */
        align-items: center;
        text-align: center;
        padding: 15px;
    }

    .treatment-img img {
        /* display: block; */
        max-width: 90%;
        max-height: 90%;
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
        justify-content: flex-start; /* Aligns the text container to the top */
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .treatment-img {
        display: flex;
        align-items: flex-start; /* Aligns the image to the top */
    }

    .treatment-price {
        /* margin-top: auto; */
    }

    .treatment-name{
        padding: 10px 0;
        border-bottom: 2px solid;
        border-color: #939589;
        width: 80%;
        font-size: 22px;
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
        <h1><span class="uac-text text-center">Vital</span> <span class="second-text">Injector</span></h1>
    </div>
</section>


{{-- design awal
<section class="treatment-desc pt-5">
    <div class="container">
        <div class="top-container row d-flex pb-3">
            <div class="col-md-7 treatment-desc-container order-2 order-md-1">
                <div class="section-title">
                    <h1><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="treatment-text">Signature Facial</span></h1>
                </div>
                <p class="treatment-desc">Treatment Facial signature (khas) Unicare Aesthetic Clinic, dengan serangkaian treatment untuk membersihkan, relaksasi, dan mengatasi berbagai permasalahan kulitmu secara spesifik.</p>
                <p class="treatment-price">Harga Treatment mulai dari Rp1.299.000</p>
            </div>
            <div class="col-md-5 treatment-img pb-3 order-1 order-md-2">
                <img src="{{ asset('{{asset('assets/placeholder.jpg')}}') }}" alt="Image" class="align-right">
            </div>
        </div>

        <div class="bottom-container row d-flex">
            <div class="col-md-7 treatment-desc-container order-1 order-md-2">
                <div class="section-title">
                    <h1><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="treatment-text">Signature Facial</span></h1>
                </div>
                <p class="treatment-desc">Treatment Facial signature (khas) Unicare Aesthetic Clinic, dengan serangkaian treatment untuk membersihkan, relaksasi, dan mengatasi berbagai permasalahan kulitmu secara spesifik.</p>
                <p class="treatment-price">Harga Treatment mulai dari Rp1.299.000</p>
            </div>
            <div class="col-md-5 treatment-img pb-3 order-md-1">
                <img src="{{ asset('{{asset('assets/placeholder.jpg')}}') }}" alt="Image" class="align-left">
            </div>
        </div>
</section> --}}

<section class="facial-treatment">
    <div class="container">
        <div class="justify-content-center ">
            <div class=" d-flex justify-content-center treatment-title">
                <h1 class="treatment-title-text"><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="treatment-text">Vital Injector</span></h1>
            </div>
            <div class="treatment-desc">
                <div class="row d-flex">
                    <div class="col-md-4  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">NCTF</span> <span class="second-text">Skin Booster</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/placeholder.jpg')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Menghidrasi kulit secara mendalam, bersifat anti-aging, mencerahkan kulit, memperbaiki tekstur dan elastisitas kulit.</h5>
                    </div>
                    <div class="col-md-4  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">DNA Salmon</span> <span class="second-text"> (RMDA)</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/placeholder.jpg')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Membantu meregenarasi sel pertumbuhan, melembabkan kuilit, merangsang pembentukan kolagen pada kulit, meningkatkan elastisitas dan mencerahkan kulit </h5>
                    </div>
                    <div class="col-md-4  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Flek</span> <span class="second-text">Injection</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/placeholder.jpg')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Membantu memudarkan flek hitam pada kulit yang diakibatkan oleh sinar uv, proses penuaan, dan proses peradangan pada kulit </h5>
                    </div>
                </div>
            </div>
        </div>
</section>

            <!-- FAQ 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 faq-accordion">
        <div class="container">
            <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How Do I Change My Billing Information?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>To change your billing information, please follow these steps:</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How Does Payment System Work?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            A payment system is a way to transfer money from one person or organization to another. It is a complex process that involves many different parties, including banks, credit card companies, and merchants.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How Do I Cancel My Account?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>To cancel your account, please follow these steps:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
