@extends('main')

@section('main-content')

<div class="grid grid-cols-4 md:grid-cols-12 mt-3 md:mt-20 text-center px-0 md:px-24 lg:px-28">
  <div class="col-span-4 md:col-span-12 lg:col-span-10 xl:col-span-8 lg:col-start-2 xl:col-start-3">
    <div class="w-fit p-4 mx-auto bg-gradient-to-b from-galseid-red-dark to-galseid-red-light border-8 border-galseid-yellow rounded-full">
      <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Raden_Saleh.jpg" alt="Placeholder Promo Image" class="h-48 w-48 sm:h-60 sm:w-60 md:h-80 md:w-80 rounded-full object-cover">
    </div>
    <div class="relative bg-galseid-blur shadow-2xl text-galseid-dark rounded-3xl mt-[-10rem] px-10 sm:px-20 pb-8 pt-48 z-[-10]">
      <h1 class="text-4xl font-bold font-header mb-10">
        Nama Seniman
      </h1>
      <h2 class="text-2xl font-bold font-display text-start mb-3">
        Biodata
      </h2>
      <div class="paragraphs text-base pb-8 font-display text-justify">
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

@endsection