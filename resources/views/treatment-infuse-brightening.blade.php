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
        padding-top: 5px;
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
        /* justify-content: space-between; */
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
            text-align: left; /* Center-align text for smaller screens */
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
</style>

<section class="header">
    <div class="treatment-page-title text-center section-title">
        <h1><span class="uac-text text-center">Infuse</span> <span class="second-text">Brightening</span></h1>
    </div>
</section>

<section class="treatment-desc py-4">
    <div class="container">

        <div class="bottom-container row d-flex">
            <div class="col-md-8 treatment-desc-container order-1 order-md-2 py-4">
                <div class="section-title">
                    <h1><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="treatment-text">Infuse Brightening</span></h1>
                </div>
                <p class="treatment-desc">Infuse Brightening adalah solusi kecantikan modern yang menggabungkan manfaat untuk kulit dan tubuh. Perawatan ini membantu mencerahkan kulit, meratakan warna, dan memberikan kilau sehat alami. Tak hanya itu, Infuse Brightening juga membantu meningkatkan daya tahan tubuh mengatasi kelelahan, dan membuat badan terasa lebih sehat. </p>
            </div>
            <div class="col-md-4 treatment-img  order-md-1">
                <img src="{{asset('assets/infuse brightening.jpg')}}" alt="Image" class="align-right">
            </div>
        </div>
</section>

@endsection
