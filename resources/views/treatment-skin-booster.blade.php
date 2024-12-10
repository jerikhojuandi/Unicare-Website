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

    .treatment-desc .row {
        display: flex;
        flex-wrap: wrap; /* Ensure rows wrap properly */
    }


    .treatment-desc .row > . {
        display: flex; /* Make columns flexible */
        flex-direction: column;
        justify-content: stretch; /* Stretch the cards to equal height */
    }

    .treatment-card {
        display: flex;
        flex-direction: column; /* Stack content vertically */
        align-items: center; /* Center content horizontally */
        justify-content: flex-start; /* Push content to the top initially */
        text-align: center;
        padding: 15px; /* Add padding as needed */
        height: 100%; /* Ensure cards take up the same height */
        box-sizing: border-box; /* Prevent padding from affecting height */
        position: relative; /* Required for absolute positioning */
    }

    .best-treatment {
        margin-top: auto; /* Push the .best-treatment to the bottom of the card */
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
        justify-content: space-between;
        padding-top: 40px;
        padding-bottom: 40px;
        /* margin-bottom: auto; */
        /* height: 100%; */
    }

    .treatment-price {
        /* margin-top: auto; */
    }

    .treatment-name {
        padding: 10px 0;
        border-bottom: 2px solid #939589;
        width: 80%;
        font-size: 22px;
        margin-bottom: auto; /* Push other content downward */
        font-weight: 600;

    }

    .treatment-title{
        padding-top: 40px;
    }

    .treatment-title-text{
        font-size: 36px;
        font-weight: 700;
    }

    .treatment-card-text {
        flex-grow: 1; /* Allow this content to expand to fill the space */
        display: flex;
        align-items: center; /* Center text vertically */
        justify-content: center; /* Center text horizontally */
        font-size: 1em;
        font-weight: 400;
        padding-top: 10px;
    }

    .best-treatment{
        bottom: 0%;
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
</style>

<section class="header">
    <div class="treatment-page-title text-center section-title">
        <h1><span class="uac-text text-center">Skin</span> <span class="second-text">Booster</span></h1>
    </div>
</section>

<section class="facial-treatment">

    <div class="container px-5">
        <div class="justify-content-center ">
            {{-- <div class=" d-flex justify-content-center treatment-title">
                <h1 class="treatment-title-text"><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="treatment-text">Skin Booster</span></h1>
            </div> --}}
            <div class="treatment-desc ">
                <div class="row d-flex">
                    <div class=" col-md-6  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Acne & Scars</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-fb-acne.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Skinbooster untuk acne dan scar bekerja dengan mengurangi peradangan jerawat, mempercepat regenerasi sel, merangsang pertumbuhan kolagen, dan memperbaiki jaringan kulit, sehingga efektif untuk menyembuhkan jerawat aktif sekaligus memperbaiki bekasnya secara holistik.</h5>
                        <p class="best-treatment"> <spen class="fw-bold">Best Treatment:</spen> <spen class="fst-italic">Dermastem Face, PRP</spen></p>
                    </div>
                    <div class=" col-md-6 treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Dry Skin</span>  </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-sb-dryskin.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Skinbooster untuk hidrasi berfungsi memberikan kelembapan intensif pada kulit, memperbaiki skin barrier, meningkatkan elastisitas, dan merangsang regenerasi sel, sehingga kulit terasa lebih lembap, kenyal, dan tampak lebih sehat secara optimal </h5>
                        <p class="best-treatment"> <spen class="fw-bold">Best Treatment:</spen> <spen class="fst-italic">Intense Deep Hydration, Profhilo, NCTF</spen></p>
                    </div>
                    <div class="  col-md-6 treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Hyperpigmentation</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-sb-hyperpig.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Skinbooster untuk mengatasi hiperpigmentasi bekerja dengan mempercepat regenerasi sel kulit, meratakan warna kulit, dan mengurangi produksi melanin berlebih, sehingga membantu mencerahkan noda hitam dan membuat kulit tampak lebih cerah serta merata secara keseluruhan. </h5>
                        <p class="best-treatment"> <spen class="fw-bold">Best Treatment:</spen> <spen class="fst-italic">Flek Injection, Xela Rederm, Hydraglow</spen></p>
                    </div>
                    <div class=" col-md-6 treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Anti-Aging</span>  </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-fnb-antiaging.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Skinbooster untuk anti-aging bekerja dengan merangsang produksi kolagen, meningkatkan elastisitas kulit, dan mengurangi kerutan, sehingga membantu memperbaiki tekstur kulit, mengencangkan kulit yang kendur, dan memberikan tampilan yang lebih muda dan segar </h5>
                        <p class="best-treatment"> <spen class="fw-bold">Best Treatment:</spen> <spen class="fst-italic">Collagen Stimulator, NBomb, NCTF, DNA Salmon</spen></p>
                    </div>
                    <div class=" col-md-6 treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Rejuvenation</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-sb-rejuvenation.JPG')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Skinbooster untuk rejuvenasi bekerja dengan meremajakan sel-sel kulit, meningkatkan sirkulasi darah, dan memperbaiki struktur kulit, sehingga kulit tampak lebih segar, kenyal, dan awet muda, mengurangi tanda-tanda penuaan secara menyeluruh </h5>
                        <p class="best-treatment"> <spen class="fw-bold">Best Treatment:</spen> <spen class="fst-italic">PRP, Nucleofil / Rejuran, Vit C Skin Booster</spen></p>
                    </div>
                    <div class=" col-md-6 treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Hair Treatment</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-sb-hairtreatment.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Skinbooster untuk perawatan rambut bekerja dengan merangsang folikel rambut, meningkatkan sirkulasi darah di kulit kepala, dan memberikan nutrisi intensif, sehingga membantu memperkuat akar rambut, mengurangi kerontokan, dan merangsang pertumbuhan rambut yang lebih sehat dan tebal </h5>
                        <p class="best-treatment"> <spen class="fw-bold">Best Treatment:</spen> <spen class="fst-italic">PRP Hair & Dermastem Hair</spen></p>
                    </div>

                </div>
                <div class="row justify-content-center d-flex">

                </div>
            </div>
        </div>
</section>


@endsection
