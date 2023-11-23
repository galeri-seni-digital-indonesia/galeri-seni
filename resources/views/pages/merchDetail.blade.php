@extends('main')

@section('main-content')

<div class="flex flex-row gap-20 px-12 mt-28">
  <div class="flex flex-1 items-center h-72">
    <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full object-cover border-gray-300 rounded-3xl border border-solid">
  </div>
  <div class="flex flex-1 flex-col gap-8">
    <h1 class="text-slate-500 text-3xl font-bold font-display">
      Nama Merchandise
    </h1>
    <h2 class="text-slate-500 text-4xl font-normal font-display">
      Rp100.000
    </h2>
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
    <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-full font-bold py-3 px-8 w-fit text-lg text-white hover:bg-slate-700 font-display">
      Beli Sekarang
      <i class="fas fa-external-link-alt"></i>
    </a>
  </div>
</div>

@endsection