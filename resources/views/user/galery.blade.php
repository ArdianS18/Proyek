@extends('layouts.userlayout')
@section('content')

<head>
  <style>

    .image-container{
      height: 280px;
      overflow: hidden;
      display: flex;
    }

    .image-container img{
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .portfolio-item {
      width: 380px;
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

  {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
      </ul>
    </div>
  </div> --}}

  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset('storage/'.$galeri->galeri) }}" alt="foto"  width="100px"  class="img-fluid" alt="">
        <div class="portfolio-links">
          <a href="{{ asset('storage/'.$galeri->galeri) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
          <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
        </div>
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
        </div>
      </div>
    </div> --}}

    <div class="portfolio-item">
      <div class="portfolio-wrap">
        <div class="image-container">
          <img src="{{ asset('storage/'.$galeri->galeri) }}" class="img-fluid" alt="">
          
          <div class="portfolio-links">
            <a href="{{ asset('storage/'.$galeri->galeri) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="">
              <center><svg  class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
              </svg></center>
            </a>
            {{-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> --}}
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset('storage/'.$galeri->galeri) }}" class="img-fluid" alt="">
        <div class="portfolio-links">
          <a href="{{ asset('storage/'.$galeri->galeri) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
          <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
        </div>
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
        </div>
      </div>
    </div> --}}
{{-- 
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-links">
          <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
          <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
        </div>
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <p>Card</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-links">
          <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
          <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
        </div>
        <div class="portfolio-info">
          <h4>Web 2</h4>
          <p>Web</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-links">
          <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
          <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
        </div>
        <div class="portfolio-info">
          <h4>App 3</h4>
          <p>App</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-links">
          <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
          <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
        </div>
        <div class="portfolio-info">
          <h4>Card 1</h4>
          <p>Card</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-links">
          <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
          <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
        </div>
        <div class="portfolio-info">
          <h4>Card 3</h4>
          <p>Card</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-links">
          <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
          <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
        </div>
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
        </div>
      </div>--}}

      @endforeach
    </div> 

  </div>
</div>
</section>

@endsection