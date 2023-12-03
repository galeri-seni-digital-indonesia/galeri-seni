@extends('main')

@section('main-content')

<div class="grid grid-cols-4 md:grid-cols-12 gap-8 mt-3 md:mt-20 px-10 sm:px-16 md:px-24 lg:px-28">
  <div class="col-span-4 md:col-span-12 lg:col-span-6">
    <div class="flex flex-col gap-5">
      <h3 class="text-galseid-dark text-4xl font-bold font-header mb-4">
        Nama Event
      </h3>
      <div class="grid grid-template gap-x-2 gap-y-1 text-2xl font-display text-galseid-dark mb-4">
        <div class="flex justify-center items-center">
          <i class="fas fa-scroll text-galseid-orange"></i>
        </div>
        <p class="font-display mb-2">Penyelenggara</p>
        <div class="flex justify-center items-center">
          <i class="fas fa-map-marker-alt text-galseid-orange"></i>
        </div>
        <p class="font-display mb-2">Lokasi</p>
        <div class="flex justify-center items-center ">
          <i class="far fa-calendar text-galseid-orange"></i>
        </div>
        <p class="font-display">01 Januari 2023</p>
        <div></div>
        <p class="font-bold font-display">00:00-00:00 WIB</p>
      </div>
      <a href='/#' class="w-fit btn-galseid-red rounded-xl font-bold mb-5 py-3 px-8 text-lg text-white font-display">
        Buka Link Event&ensp;
        <i class="fas fa-link"></i>
      </a>
      <div>
        <h3 class="text-galseid-dark text-2xl font-bold font-display mb-3">
          Deskripsi
        </h3>
        <div class="paragraphs text-galseid-dark text-base font-display text-justify">
          {{-- BEGIN: Ganti paragraf di sini --}}       
          <p class="">
            Ut facilisis mauris quis ullamcorper vehicula. Sed congue congue urna. Nullam a bibendum ex, vel scelerisque nibh. 
            Vestibulum mattis, ipsum mattis porttitor vulputate, libero urna maximus erat, id ultricies augue arcu vitae enim. 
            Nunc quis dui vel lectus imperdiet consequat in auctor quam. Aliquam eu semper ante, eget tempor erat. 
            Morbi id ligula vel ex imperdiet accumsan ut et tellus. Phasellus dictum eu enim eu consectetur.
          </p>
          {{-- END: Ganti paragraf di sini --}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-span-4 md:col-span-12 lg:col-span-5 lg:col-start-8 bg-gradient-to-b from-galseid-orange to-galseid-yellow rounded-xl p-2">
    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/art-show-flyer-template-design-8b29337182f22af171999cc1514011c0_screen.jpg?ts=1636987180" alt="Placeholder Promo Image" class="w-full h-full object-cover rounded-lg">
  </div>
</div>

@endsection