@extends('main')

@section('main-content')

@vite('resources/js/data/art-api.js')
@vite('resources/js/data/event-api.js')
@vite('resources/js/data/artist-api.js')
@vite('resources/js/data/merch-api.js')

<div class="xl:container xl:mx-auto px-14 md:px-24 lg:px-28">

  {{-- heros --}}
  <div class="grid grid-cols-4 sm:grid-cols-12 gap-8 items-center">
    <div class="col-span-4 sm:col-span-12 lg:col-span-6 xl:col-span-5 justify-start">
      <h1 class="mb-8 text-galseid-dark text-[46px]/[120%] md:text-[50px]/[120%] lg:text-[56px]/[120%] font-bold font-header">
        Apresiasi Karya Seni Nusantara Lewat Galse<span class="bg-gradient-to-t from-galseid-orange to-galseid-yellow bg-clip-text text-transparent">i</span><span class="bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent">d</span>
      </h1>
      <p class="mb-8 text-galseid-dark text-lg font-display">
        <b>Galseid</b> merupakan <b>galeri seni digital</b> yang memamerkan karya-karya seni Indonesia untuk meningkatkan kecintaan terhadap <b>seni nusantara</b>.
      </p>
      <a href="/#" class="btn-galseid-red">
        Jelajahi Galeri Seni &ensp;<i class="fas fa-long-arrow-alt-right"></i>
      </a>
    </div>
    <div class="col-span-4 sm:col-span-12 md:col-span-8 lg:col-span-6 lg:col-start-7 items-center">
      <img src="{{ asset('assets/img/hero-images.png') }}" alt="Placeholder Promo Image" class="p-5 w-full object-contain">
    </div>
  </div>

  {{-- art --}}
  <section id="galeri">
    <div class="text-center mt-36 mb-20">
      <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Galeri Seni</h2>
    </div>
    <div id="artData" class="grid grid-cols-4 sm:grid-cols-12 gap-8">
      
    </div>
  </section>

  {{-- event --}}
  <section id="acara">
    <div class="text-center mt-36 mb-20">
      <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Acara Seni</h2>
    </div>
    <div id="eventData" class="grid grid-cols-4 sm:grid-cols-12 gap-8 items-center">
      
    </div>
  </section>
  
  {{-- artist --}}
  <section id="seniman">
    <div class="text-center mt-36 mb-20">
      <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Seniman</h2>
    </div>
    <div id="artistData" class="grid grid-cols-4 sm:grid-cols-12 gap-8">
      
    </div>
  </section>
  

  {{-- merch --}}
  <section id="merch">
    <div class="text-center mt-36 mb-20">
      <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Merchandise</h2>
    </div>
    <div id="merchData" class="grid col-span-4 sm:grid-cols-12 gap-8">
      
    </div>
  </section>
</div>

@endsection