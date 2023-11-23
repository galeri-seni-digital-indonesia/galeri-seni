@extends('main')

@section('main-content')

<div class="flex justify-center mt-28">
  <div class="flex flex-col gap-12 w-3/5 h-fit items-center">
    <h1 class="text-slate-500 text-4xl font-bold font-display">
      Nama Karya Seni <span class="text-purple-500">(1857)</span>
    </h1>
    <div class="flex items-center h-96 w-full">
      <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full object-cover border-gray-300 rounded-3xl border border-solid">
    </div>
    <div class="absolute info-overlay grid grid-cols-3 border-gray-300 rounded-3xl border border-solid bg-white max-w-7xl">
      <div class="grid grid-template gap-x-2 gap-y-0 text-slate-500 p-5 max-w-7xl">
        <div class="flex justify-center items-center ">
          <i class="far fa-calendar"></i>
        </div>
        <h2 class="font-display font-bold text-2xl">Seniman</h2>
        <div></div>
        <p class="font-display">Nama Seniman</p>
      </div>
      <div class="grid grid-template gap-x-2 gap-y-0 text-slate-500 border-r border-l p-5 max-w-7xl">
        <div class="flex justify-center items-center ">
          <i class="fas fa-images"></i>
        </div>
        <h2 class="font-display font-bold text-2xl">Media</h2>
        <div></div>
        <p class="font-display">Nama Media</p>
      </div>
      <div class="grid grid-template gap-x-2 gap-y-0 text-slate-500 p-5 max-w-7xl">
        <div class="flex justify-center items-center ">
          <i class="fas fa-pencil-ruler"></i>
        </div>
        <h2 class="font-display font-bold text-2xl">Ukuran</h2>
        <div></div>
        <p class="font-display">100 x 200 cm</p>
      </div>
    </div>
    <p class="text-gray-500 text-base font-display text-justify mt-10">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut enim auctor risus molestie lacinia. Suspendisse magna dui, tincidunt a est a, elementum scelerisque enim. 
      Nulla suscipit neque vitae lacus ullamcorper porta. Vestibulum vel risus sed est elementum sollicitudin et vel velit. Donec aliquet ut sem ut iaculis. 
      Quisque tempus eleifend lorem, sit amet mattis sem posuere non. Integer pretium blandit felis, quis suscipit dolor suscipit mattis. Maecenas sit amet commodo quam. 
      Mauris pretium erat urna, sed volutpat nibh convallis eget. Vivamus tincidunt dui eu nunc vulputate tincidunt. Nullam congue orci vitae ultrices auctor. 
      Donec nec mauris maximus, porta orci ut, porttitor ex.
      
      Ut facilisis mauris quis ullamcorper vehicula. Sed congue congue urna. Nullam a bibendum ex, vel scelerisque nibh. 
      Vestibulum mattis, ipsum mattis porttitor vulputate, libero urna maximus erat, id ultricies augue arcu vitae enim. 
      Nunc quis dui vel lectus imperdiet consequat in auctor quam. Aliquam eu semper ante, eget tempor erat. 
      Morbi id ligula vel ex imperdiet accumsan ut et tellus. Phasellus dictum eu enim eu consectetur.
    </p>
  </div>
</div>

@endsection