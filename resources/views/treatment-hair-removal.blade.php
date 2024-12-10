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
                text-align: left; /* Keep text aligned to the left */
            }

            .top-container, .bottom-container {
                text-align: left; /* Align text to the left for smaller screens */
            }

            .top-container .col-md-5, .bottom-container .col-md-5 {
                margin: 0 auto; /* Center images in their containers */
            }

            /* Text alignment for specific elements */
            .treatment-title-text {
                font-size: 24px;
                text-align: left; /* Ensure text remains left-aligned */
            }

            .treatment-desc {
                margin: 0;
                text-align: left; /* Align treatment description text to the left */
            }

            .treatment-price {
                text-align: left; /* Align treatment price text to the left */
            }

            /* Preventing unnecessary centering of image descriptions */
            .treatment-img {
                margin-bottom: 15px;
                padding-bottom: 2em;
                text-align: left; /* Align image description to the left */
            }
    }
</style>

<section class="header">
    <div class="treatment-page-title text-center section-title">
        <h1><span class="uac-text text-center">Hair</span> <span class="second-text">Removal</span></h1>
    </div>
</section>


{{-- design awal --}}
<section class="treatment-desc py-4">
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
            <div class="col-md-7 treatment-desc-container order-1 order-md-2">
                <div class="section-title">
                    <h1><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="treatment-text">Hair Removal</span></h1>
                </div>
                <p class="treatment-desc">Hair removal treatment dengan mesin generasi terbaru Intense Pulsed Light (I2PL) yang meminimalkan rasa sakit. Hanya dengan sekali treatment, folikel rambut akan , pertumbuhan rambut akan semakin tipis dan halus sehingga kulit mulus bebas bulu dengan beberapa kali treatment.  </p>
                <p class="treatment-price">Treatment Yang Tersedia:</p>
                <ul>
                    <li>Underarm</li>
                    <li>Face</li>
                    <li>Arm</li>
                    <li>Leg</li>
                    <li>Brazillian</li>
                  </ul>
            </div>
            <div class="col-md-5 treatment-img  order-md-1">
                <img src="{{asset('assets/hair-removal-kaki.png')}}" alt="Image" class="align-right">
            </div>
        </div>
</section>

            <!-- FAQ 1 - Bootstrap Brain Component -->
    {{-- <section class="bg-light py-3 faq-accordion">
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
    </section> --}}


@endsection
