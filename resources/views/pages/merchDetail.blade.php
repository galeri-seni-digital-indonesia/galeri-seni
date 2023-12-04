@extends('main')

@section('main-content')

<div class="container mx-auto mt-3 md:mt-20 px-10 sm:px-16 md:px-24 lg:px-28">
  <div class="grid grid-cols-4 md:grid-cols-12 gap-8">
    <div class="col-span-4 md:col-span-12 lg:col-span-6 xl:col-span-5 bg-gradient-to-b from-galseid-orange to-galseid-yellow rounded-xl p-2">
      <img src="https://store.nebula.tv/cdn/shop/products/CIG_Mug_-_outside_720x.JPG" alt="Placeholder Promo Image" class="w-full h-full object-cover rounded-lg">
    </div>
    <div class="col-span-4 md:col-span-12 lg:col-span-6 lg:col-start-7">
      <h1 class="text-galseid-dark text-3xl font-bold font-display mb-4">
        Nama Merchandise
      </h1>
      <h2 class="text-galseid-dark text-4xl sm:text-5xl font-bold font-header mb-10">
        Rp100.000
      </h2>
      <div class="mb-8">
        <h3 class="text-galseid-dark text-2xl font-bold font-display mb-3">
          Deskripsi
        </h3>
        <div class="paragraphs text-galseid-dark text-base font-display text-justify">
          <p class="">
            Ut facilisis mauris quis ullamcorper vehicula. Sed congue congue urna. Nullam a bibendum ex, vel scelerisque nibh. 
            Vestibulum mattis, ipsum mattis porttitor vulputate, libero urna maximus erat, id ultricies augue arcu vitae enim. 
            Nunc quis dui vel lectus imperdiet consequat in auctor quam. Aliquam eu semper ante, eget tempor erat. 
            Morbi id ligula vel ex imperdiet accumsan ut et tellus. Phasellus dictum eu enim eu consectetur.
          </p>
        </div>
      </div>
      <a href='/#' class="btn-galseid-red rounded-xl font-bold py-3 px-8 text-lg text-white font-display">
        Beli Sekarang&ensp;
        <i class="fas fa-shopping-cart"></i>
      </a>
    </div>
  </div>
</div>

@endsection