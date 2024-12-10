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


.treatment-desc .row > .col-md-4 {
    display: flex; /* Make columns flexible */
    flex-direction: column;
    justify-content: stretch; /* Stretch the cards to equal height */
}

    .treatment-card {
    display: flex;
    flex-direction: column;
    align-items: center; /* Centers content horizontally */
    justify-content: space-between; /* Ensures content is evenly distributed */
    text-align: center;
    padding: 15px; /* Add padding as needed */
    height: 100%; /* Ensure cards take up the same height */
    box-sizing: border-box; /* Prevent padding from affecting height */
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
        <h1><span class="uac-text text-center">Face & Body</span> <span class="second-text">Contouring</span></h1>
    </div>
</section>

<section class="facial-treatment">

    <div class="container">
        <div class="justify-content-center ">
            {{-- <div class=" d-flex justify-content-center treatment-title">
                <h1 class="treatment-title-text"><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="treatment-text">Face & Body Contouring</span></h1>
            </div> --}}
            <div class="treatment-desc">
                <div class="row d-flex">
                    <div class="col-md-4  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Botox</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-fnbcontouring-botox.jpg')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Mengurangi kerutan di wajah dengan cara melemahkan otot penyebab garis ekspresi, sehingga kulit terlihat lebih halus dan awet muda.</h5>
                    </div>
                    <div class="col-md-4  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Filler</span>  </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-fnb-filler.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Mengembalikan volume wajah yang hilang, mengisi garis atau lipatan, dan membentuk area tertentu seperti bibir, dagu, atau pipi agar tampak lebih proporsional. </h5>
                    </div>
                    <div class="col-md-4  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Threadlift</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-fnb-threadlift.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Mengencangkan dan mengangkat kulit wajah tanpa operasi menggunakan benang khusus yang merangsang produksi kolagen untuk hasil yang lebih muda dan kencang.</h5>
                    </div>

                </div>
                <div class="row justify-content-center d-flex">
                    <div class="col-md-4 justif  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Mesolipo Face</span>  </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-fnb-mesoface.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Mengurangi lemak di area wajah seperti pipi atau double chin, sehingga wajah tampak lebih tirus dan terdefinisi.                        </h5>
                    </div>
                    <div class="col-md-4  treatment-card">
                        <h3 class="text-center mb-4 treatment-name"><span class="uac-text">Mesolipo Body</span> </h3>
                        <div class="treatment-img">
                            <img src="{{asset('assets/treatment-fnb-mesobody.png')}}" alt="">
                        </div>
                        <h5 class="text-center treatment-card-text">Menghilangkan lemak berlebih di area tubuh tertentu seperti perut, paha, atau lengan, untuk membantu membentuk tubuh yang lebih ideal.</h5>
                    </div>
                </div>
            </div>
        </div>
</section>


@endsection
