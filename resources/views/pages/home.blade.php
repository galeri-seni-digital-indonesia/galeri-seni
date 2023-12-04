@extends('main')

@section('main-content')

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
  <div class="text-center mt-36 mb-20">
    <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Galeri Seni</h2>
  </div>
  <div class="grid grid-cols-4 sm:grid-cols-12 gap-8">
    @for ($i = 0; $i < 6; $i++)
    {{-- cards Component --}}
    <div class="relative col-span-4 sm:col-span-6 lg:col-span-4 m-4">
      <object data="{{ asset('assets/img/card-corner-tl.svg') }}" class="absolute h-[70px] w-[70px] z-[-10] mt-[-14px] ms-[-12px]"></object>
      <object data="{{ asset('assets/img/card-corner-bl.svg') }}" class="absolute bottom-0 h-[70px] w-[70px] z-[-10] mb-[-14px] ms-[-12px]"></object>
      <object data="{{ asset('assets/img/card-corner-tr.svg') }}" class="absolute right-0 h-[70px] w-[70px] z-[-10] mt-[-14px] me-[-12px]"></object>
      <object data="{{ asset('assets/img/card-corner-br.svg') }}" class="absolute bottom-0 right-0 h-[70px] w-[70px] z-[-10] mb-[-14px] me-[-12px]"></object>
      <div class="flex flex-col p-6 gap-2 bg-galseid-blur">
        <div class="flex items-center h-64 mb-2">
          <img src="https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FAgus_Djaya_Kuda_Lumping_e378417837.jpg&w=1920&q=60" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
        </div>
        <div class="flex flex-row gap-2 items-center font-bold bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent">
          <i class="fas fa-paint-brush"></i>
          <p class="text-lg font-header truncate">Agus Djaya</p>
        </div>
        <h3 class="text-galseid-dark text-2xl font-bold font-display mb-2 truncate">
          Kuda Lumping
        </h3>
        <a href='/#' class="btn-galseid-red text-center">
          Detail&nbsp;
          <i class="fas fa-external-link-alt"></i>
        </a>
      </div>
    </div>
    @endfor
  </div>

  {{-- event --}}
  <div class="text-center mt-36 mb-20">
    <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Acara Seni</h2>
  </div>
  <div class="grid grid-cols-4 sm:grid-cols-12 gap-8">
    @for ($i = 0; $i < 4; $i++)
    {{-- card component --}}
    <div class="relative col-span-4 sm:col-span-12 lg:col-span-6">
      <div class="flex flex-wrap flex-row-reverse p-6 justify-center sm:justify-between bg-galseid-blur rounded-2xl">
        <div class="flex mb-4 sm:mb-0">
          <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/art-show-flyer-template-design-8b29337182f22af171999cc1514011c0_screen.jpg?ts=1636987180" alt="Placeholder Promo Image" class="h-40 w-40 object-cover rounded-2xl">
        </div>
        <div class="flex flex-col gap-2 my-2 w-full sm:w-1/2 min-[530px]:w-1/2">
          <h3 class="text-galseid-dark text-2xl font-bold font-display truncate">
            Nama Event
          </h3>
          <div class="grid grid-template gap-x-2 gap-y-1 me-6">
            <div class="flex justify-center items-center">
              <i class="fas fa-scroll bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
            </div>
            <p class="text-base font-display truncate">Penyelenggara</p>
            <div class="flex justify-center items-center">
              <i class="fas fa-map-marker-alt bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
            </div>
            <p class="font-display">Lokasi</p>
            <div class="flex justify-center items-center ">
              <i class="far fa-calendar bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
            </div>
            <p class="font-display">01 Januari 2023</p>
            <div></div>
            <p class="font-bold font-display">00:00-00:00 WIB</p>
          </div>
        </div>
      </div>
    </div>
    @endfor
  </div>

  {{-- artist --}}
  <div class="text-center mt-36 mb-20">
    <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Seniman</h2>
  </div>
    <div class="grid grid-cols-4 sm:grid-cols-12 gap-8">
      @for ($i = 0; $i < 6; $i++)
      {{-- profile --}}
      <div class="flex flex-col col-span-4 sm:col-span-6 lg:col-span-4 items-center m-3">
        <div class="flex items-center p-4 bg-galseid-blur border-4 border-galseid-yellow rounded-full">
          <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Raden_Saleh.jpg" alt="Placeholder Promo Image" class="h-56 w-56 rounded-full object-cover mx-auto">
        </div>
        <a href="#" class="w-full mt-[-16px] bg-gradient-to-b from-galseid-red-dark to-galseid-red-light  text-white text-2xl font-semibold font-display rounded-t-[90px] rounded-b-[36px] text-center truncate py-4 px-7">
          John Doe
        </a>
        <div class="w-[80%] h-3 bg-gradient-to-r from-galseid-orange to-galseid-yellow rounded-b-full"></div>
      </div>
      @endfor;
    </div>
  <div>
    
  </div>

  {{-- merch --}}
  <div class="text-center mt-36 mb-20">
    <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Merchandise</h2>
  </div>
  <div class="grid col-span-4 sm:grid-cols-12 gap-8">
    @for ($i = 0; $i < 8; $i++)
    {{-- Merch item --}}
    <div class="col-span-4 sm:col-span-6 md:col-span-4 lg:col-span-3 bg-galseid-blur rounded-2xl border border-solid">
      <div class="flex flex-col p-6 gap-3">
        <div class="flex items-center h-40">
          <img src="https://store.nebula.tv/cdn/shop/products/CIG_Mug_-_outside_720x.JPG" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
        </div>
        <h3 class="text-galseid-dark text-xl font-bold font-display truncate">
          Nama Merch
        </h3>
        <p class="text-galseid-dark text-2xl font-display">
          Rp100.000
        </p>
        <a href='/#' class="flex flex-row items-center justify-center btn-galseid-red gap-2 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
          Beli
          <i class="fas fa-shopping-cart"></i>
        </a>
      </div>
    </div>
    @endfor;
  </div>
  
</div>

@endsection