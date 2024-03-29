@extends('layouts.userlayout')
@section('content')

    <head>
        <style>
            .image-container {
                height: 280px;
                overflow: hidden;
                display: flex;
            }

            .image-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .portfolio-item {
                width: 430px;
                margin: 5px;
                justify-content: center;
                align-items: center;
            }

            .portfolio-warp {
                margin: 10px;
                float: left;
            }
        </style>
    </head>

    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Galery Wisata</h2>
                <p>Tempat tempat wisata yang indah</p>
            </div>

            @foreach ($galeris as $key => $galeri)
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-item">
                        <div class="portfolio-wrap">
                            <div class="image-container">
                                <img src="{{ asset('storage/' . $galeri->galeri) }}" class="img-fluid" alt="">

                                <div class="portfolio-links">
                                    <a href="{{ asset('storage/' . $galeri->galeri) }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="">
                                        <center><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                            </svg></center>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        </div>
        </div>
    </section>
@endsection
