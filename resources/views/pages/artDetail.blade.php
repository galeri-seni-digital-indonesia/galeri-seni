@extends('main')

@section('main-content')

<div class="xl:container xl:mx-auto mt-3 md:mt-20 px-0 md:px-24 lg:px-28">
  <div class="grid grid-cols-4 md:grid-cols-12 text-center">
    <div class="col-span-4 md:col-span-12 lg:col-span-10 xl:col-span-8 lg:col-start-2 xl:col-start-3 h-fit">
      <h1 class="text-galseid-dark text-3xl md:text-4xl font-bold font-header px-20 mb-10">
        {{ $art['nama'] }} <span class="text-galseid-orange">(<span class="text-galseid-red-dark">{{ $art['tahun'] }} </span>)</span>
      </h1>
      <div class="h-fit w-screen md:w-full bg-gradient-to-r md:bg-gradient-to-b from-galseid-orange to-galseid-yellow pt-2.5 md:p-2.5 md:rounded-3xl" style="min-height: 200px">
        <img src="{{ $art['gambar'] }}" alt="{{ $art['nama'] }} " class="w-full h-fit object-cover md:rounded-2xl">
      </div>
      <div class="relative bg-gradient-to-b from-white via-white/80 to-white/0 md:bg-none mt-[-1.2rem] rounded-3xl px-7 sm:px-14 md:px-0 pb-16">
        <div class="relative grid grid-cols-[auto] lg:grid-cols-[auto_auto_auto] md:bg-galseid-blur md:rounded-3xl text-start align-top md:mx-20 lg:mx-14 md:mt-[-7rem] lg:mt-[-4rem] sm:px-4 pt-14 md:py-8 lg:py-5 z-100">
          <div class="grid grid-cols-[auto_1fr] grid-rows-[auto_1fr] gap-x-2 gap-y-0 text-galseid-dark px-5 mb-4 lg:mb-0 max-w-7x">
            <div class="">
              <i class="fas fa-images text-xl bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent"></i>
            </div>
            <h2 class="font-header font-bold text-xl bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent">Media</h2>
            <div></div>
            <p class="font-display font-bold text-galseid-dark mt-1">{{ $art['mediaLukis'] }} </p>
          </div>
          <div class="grid grid-cols-[auto_1fr] grid-rows-[auto_1fr] gap-x-2 gap-y-0 text-galseid-dark px-5 mb-4 lg:mb-0 max-w-7xl lg:border-r lg:border-l border-galseid-dark/25">
            <div class="flex justify-center items-center ">
              <i class="fas fa-pencil-ruler text-xl bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent"></i>
            </div>
            <h2 class="font-header font-bold text-xl bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent">Ukuran</h2>
            <div></div>
            <p class="font-display font-bold text-galseid-dark mt-1">{{ $art['ukuran'] }} </p>
          </div>
          <div class="grid grid-cols-[auto_1fr] grid-rows-[auto_1fr] gap-x-2 gap-y-0 text-galseid-dark px-5 max-w-7xl">
            <div class="">
              <i class="fas fa-paint-brush text-xl bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent"></i>
            </div>
            <h2 class="font-header font-bold text-xl bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent">Seniman</h2>
            <div></div>
            <div id="artistName"></div>
          </div>
        </div>
        <div class="paragraphs text-galseid-dark text-lg font-display text-justify mt-10 mb-20">
          <div class="h-2 w-24 bg-gradient-to-r from-galseid-orange to-galseid-yellow rounded-full mt-16 mb-8 mx-auto"></div>
          {{-- BEGIN: Ganti paragraf di sini --}}
          <p>
            {{ $art['deskripsi'] }}
          </p>
          {{-- END: Ganti paragraf di sini --}}
        </div>
        <div class="bg-galseid-red-dark/10 border-2 border-galseid-red-dark rounded-xl">
          <div class="w-fit bg-gradient-to-r from-galseid-red-dark to-galseid-red-light text-white text-lg font-header font-bold rounded-md mt-[-18px] mx-auto py-0.5 px-8">
            Source
          </div>
          <a href="{{ $art['sumber'] }}" class="w-full text-lg truncate hover:text-galseid-red-dark text-galseid-dark underline rounded-md leading-[2.5] px-4 mb-2">
            {{ $art['sumber'] }}
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>  
  async function fetchArtistName(artistId) {
    try {
      const response = await fetch(`https://www.galseid.wip.la/api/v1/records/artists/${artistId}`);
      const data = await response.json();
      return data.nama;
    } catch (error) {
      console.error('Error fetching artist name:', error);
      throw error;
    }
  }

  function updateArtistName(artistName) {
    const artistNameContainer = document.getElementById('artistName');
    const artistNameHTML = `<p class="font-display font-bold text-galseid-dark mt-1">${artistName}</p>`;
    artistNameContainer.innerHTML = artistNameHTML;
  }

  // Get the artistId from your existing art details
  const artistId = {{ $art['artistId'] }}

  fetchArtistName(artistId)
    .then(updateArtistName)
    .catch(error => console.error('Error:', error));

  document.title = `GalseId | {{ $title }}`;
</script>
@endsection