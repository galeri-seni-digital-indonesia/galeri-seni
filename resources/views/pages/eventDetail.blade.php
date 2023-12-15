@extends('main')

@section('main-content')

<div class="container mx-auto mt-3 md:mt-20 px-10 sm:px-16 md:px-24 lg:px-28">
  <div class="grid grid-cols-4 md:grid-cols-12 gap-8">
    <div class="col-span-4 md:col-span-12 lg:col-span-6">
      <div class="flex flex-col gap-5">
        <h3 class="text-galseid-dark text-4xl font-bold font-header mb-4">
          {{ $event['nama'] }}
        </h3>
        <div class="grid grid-template gap-x-2 gap-y-1 text-[22px] font-display text-galseid-dark mb-4">
          <div class="flex justify-center items-center text-2xl">
            <i class="fas fa-scroll bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
          </div>
          <p class="font-display mb-1 ms-1 pt-2">{{ $event['namaPenyelenggara'] }}</p>
          <div class="flex justify-center items-center text-2xl">
            <i class="fas fa-map-marker-alt bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
          </div>
          <p class="font-display mb-1 ms-1 pt-2">{{ $event['lokasi'] }}</p>
          <div class="flex justify-center items-center text-2xl">
            <i class="far fa-calendar-alt bg-gradient-to-tr from-galseid-orange to-galseid-yellow bg-clip-text text-transparent"></i>
          </div>
          <div id="eventDate">
            
          </div>
          <div></div>
          <div id="eventTime">
            
          </div>
        </div>
        <a href='{{ $event['linkEvent'] }}' class="w-fit btn-galseid-red rounded-xl font-bold mb-5 py-3 px-8 text-lg text-white font-display">
          Buka Link Event&ensp;
          <i class="fas fa-link"></i>
        </a>
        <div>
          <h3 class="text-galseid-dark text-2xl font-bold font-display mb-3">
            Deskripsi
          </h3>
          <div class="paragraphs text-galseid-dark text-base font-display text-justify">
            {{-- BEGIN: Ganti paragraf di sini --}}   
            <p>
              {{ $event['deskripsi'] }}
            </p>    
            {{-- END: Ganti paragraf di sini --}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-span-4 md:col-span-12 lg:col-span-6 lg:col-start-7 xl:col-span-5 xl:col-start-8 bg-gradient-to-b from-galseid-orange to-galseid-yellow rounded-xl p-2">
      <img src="{{ $event['gambar'] }}" alt="{{ $event['nama'] }}" class="w-full h-full object-cover rounded-lg">
    </div>
  </div>
</div>

<script>
  document.title = `GalseId | {{ $event['nama'] }}`;
</script>

@vite('resources/js/utils/event-details.js')

<script>
  const eventDate = @json($event['tanggal']);
</script>

@endsection