@extends('main')

@section('main-content')

<div class="flex flex-row justify-between gap-28 mt-32">
  <div class="flex flex-1 flex-col">
    <div class="flex flex-col gap-5">
      <h3 class="text-slate-500 text-2xl font-bold font-display">
        Nama Event
      </h3>
      <div class="grid grid-template gap-x-2 gap-y-1 text-xl text-slate-500">
        <div class="flex justify-center items-center">
          <i class="fas fa-scroll"></i>
        </div>
        <p class="font-display">Penyelenggara</p>
        <div class="flex justify-center items-center">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <p class="font-display">Lokasi</p>
        <div class="flex justify-center items-center ">
          <i class="far fa-calendar"></i>
        </div>
        <p class="font-display">01 Januari 2023</p>
        <div></div>
        <p class="font-bold font-display">00:00-00:00 WIB</p>
      </div>
      <div>
        <h3 class="text-slate-500 text-xl font-bold font-display">
          Deskripsi
        </h3>
        <p class="text-gray-500 text-base font-display text-justify">
          Ut facilisis mauris quis ullamcorper vehicula. Sed congue congue urna. Nullam a bibendum ex, vel scelerisque nibh. 
          Vestibulum mattis, ipsum mattis porttitor vulputate, libero urna maximus erat, id ultricies augue arcu vitae enim. 
          Nunc quis dui vel lectus imperdiet consequat in auctor quam. Aliquam eu semper ante, eget tempor erat. 
          Morbi id ligula vel ex imperdiet accumsan ut et tellus. Phasellus dictum eu enim eu consectetur.
        </p>
      </div>
    </div>
  </div>
  <div class="flex flex-1 items-center h-96">
    <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full object-cover border-gray-300 rounded-3xl border border-solid">
  </div>
</div>

@endsection