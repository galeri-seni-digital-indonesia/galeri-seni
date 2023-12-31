@extends('main')

@section('main-content')

<div class="container mx-auto mt-3 md:mt-20 px-0 md:px-24 lg:px-28">
  <div class="grid grid-cols-4 md:grid-cols-12 text-center">
    <div class="col-span-4 md:col-span-12 lg:col-span-10 xl:col-span-8 lg:col-start-2 xl:col-start-3">
      <div class="w-fit p-4 mx-auto bg-gradient-to-b from-galseid-red-dark to-galseid-red-light border-8 border-galseid-yellow rounded-full">
        <img src="{{ $artist['gambar'] }}" alt="{{ $artist['nama'] }}" class="image-detail h-48 w-48 sm:h-60 sm:w-60 md:h-80 md:w-80 rounded-full object-cover">
      </div>
      <div class="relative bg-galseid-blur shadow-2xl text-galseid-dark rounded-3xl mt-[-10rem] px-10 sm:px-20 pb-8 pt-48 z-[-10]">
        <h1 class="text-4xl font-bold font-header mb-10">
          {{ $artist['nama'] }}
        </h1>
        <h2 class="text-2xl font-bold font-display text-start mb-3">
          Biodata
        </h2>
        <div class="paragraphs text-base pb-8 font-display text-justify">
          {{-- BEGIN: Ganti paragraf di sini --}}
          <p class="">
            {{ $artist['biodata'] }}
          </p>
          {{-- END: Ganti paragraf di sini --}}
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.title = `GalseId | {{ $artist['nama'] }}`;
</script>
@endsection