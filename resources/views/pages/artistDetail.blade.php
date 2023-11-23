@extends('main')

@section('main-content')

<div class="flex justify-center mt-28">
  <div class="flex flex-col gap-12 w-1/2 items-center">
    <h1 class="text-slate-500 text-4xl font-bold font-display">
      Nama Seniman
    </h1>
    <div class="flex items-center h-60 w-60">
      <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="rounded-full object-cover">
    </div>
    <div class="flex flex-col gap-2">
      <h2 class="text-slate-500 text-2xl font-bold font-display">
        Biodata
      </h2>
      <p class="text-gray-500 text-base pb-12 font-display text-justify">
        Ut facilisis mauris quis ullamcorper vehicula. Sed congue congue urna. Nullam a bibendum ex, vel scelerisque nibh. 
        Vestibulum mattis, ipsum mattis porttitor vulputate, libero urna maximus erat, id ultricies augue arcu vitae enim. 
        Nunc quis dui vel lectus imperdiet consequat in auctor quam. Aliquam eu semper ante, eget tempor erat. 
        Morbi id ligula vel ex imperdiet accumsan ut et tellus. Phasellus dictum eu enim eu consectetur.
      </p>
    </div>
  </div>
</div>

@endsection