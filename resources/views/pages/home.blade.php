@extends('main')

@section('main-content')

@vite('resources/js/data/art-api.js')
@vite('resources/js/data/event-api.js')
@vite('resources/js/data/artist-api.js')
@vite('resources/js/data/merch-api.js')
@vite('resources/js/utils/art-recommendation.js')

<div class="xl:container xl:mx-auto px-8 md:px-24 lg:px-28">

  {{-- heros --}}
  <div class="grid grid-cols-4 sm:grid-cols-12 gap-8 items-center">
    <div id="heroContent" class="col-span-4 sm:col-span-12 lg:col-span-6 xl:col-span-5 justify-start">
      <h1 class="mb-8 text-galseid-dark text-[46px]/[120%] md:text-[50px]/[120%] lg:text-[56px]/[120%] font-bold font-header">
        Apresiasi Karya Seni Nusantara Lewat Galse<span class="bg-gradient-to-t from-galseid-orange to-galseid-yellow bg-clip-text text-transparent">i</span><span class="bg-gradient-to-t from-galseid-red-dark to-galseid-red-light bg-clip-text text-transparent">d</span>
      </h1>
      <p class="mb-8 text-galseid-dark text-lg font-display">
        <b>Galseid</b> merupakan <b>galeri seni digital</b> yang memamerkan karya-karya seni Indonesia untuk meningkatkan kecintaan terhadap <b>seni nusantara</b>.
      </p>
      <a href="/#" class="btn-galseid-red">
        Jelajahi Galeri Seni &ensp;<i class="fas fa-long-arrow-alt-right"></i>
      </a>
    </div>
    <div id="heroImage" class="col-span-4 sm:col-span-12 md:col-span-8 lg:col-span-6 lg:col-start-7 items-center">
      <img src="{{ asset('assets/img/hero-images.png') }}" alt="Placeholder Promo Image" class="p-5 w-full object-contain">
    </div>
  </div>

  {{-- art --}}
  <section id="galeri">
    <div class="text-center mt-36 mb-20">
      <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Galeri Seni</h2>
      <p class="text-md sm:text-lg mt-5 sm:px-8 mb-3 text-justify">Gunakan fitur rekomendasi untuk menemukan lukisan yang sesuai dengan preferensi anda. Anda dapat memasukkan query rekomendasi berdasarkan makna lukisan, bentuk, dll. Coba menggunakan contoh berikut :</p>
      <button id="recExample1" type="button" class="inline font-header font-semibold bg-gradient-to-r from-galseid-orange/30 to-galseid-yellow/10 hover:from-galseid-dark/30 hover:to-galseid-dark/10 border border-galseid-orange hover:border-galseid-dark rounded-lg px-4 me-2 mb-3 transition-all">Abstrak dan geometris</button>
      <button id="recExample2" type="button" class="inline font-header font-semibold bg-gradient-to-r from-galseid-orange/30 to-galseid-yellow/10 hover:from-galseid-dark/30 hover:to-galseid-dark/10 border border-galseid-orange hover:border-galseid-dark rounded-lg px-4 me-2 mb-3 transition-all">Kolonialisme</button>
      <button id="recExample3" type="button" class="inline font-header font-semibold bg-gradient-to-r from-galseid-orange/30 to-galseid-yellow/10 hover:from-galseid-dark/30 hover:to-galseid-dark/10 border border-galseid-orange hover:border-galseid-dark rounded-lg px-4 mb-3 transition-all">Lukisan dengan tema romantis</button>
      <!-- Modal toggle -->
      <div class="mt-5">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <input 
              type="search" 
              id="input-recommendation" 
              class="block w-full p-6 ps-4 sm:ps-8 text-lg sm:text-xl text-white bg-gradient-to-r from-galseid-dark to-galseid-dark/90 border-none focus:ring-2 focus:ring-galseid-yellow rounded-2xl" 
              placeholder="Masukkan preferensi anda..." 
              required
            >
            <button type="submit" id="btn-recommendation" data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white absolute top-3 right-3 btn-galseid-yellow transition-all duration-300">
              <span class="hidden md:inline">Rekomendasi&nbsp;</span>
              <i class="fas fa-robot"></i>
            </button>
        </div>
      </div>
    </div>
    <div id="artData" class="grid grid-cols-4 sm:grid-cols-12 gap-8">
      
    </div>
  </section>

  <!-- Extra Large Modal -->
  <div id="default-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full px-2 md:p-24 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-galseid-blur rounded-xl shadow">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5">
            <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Hasil Rekomendasi</h2>
            <button type="button" class="text-galseid-dark bg-transparent hover:bg-galseid-dark hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <!-- Modal body -->
        <div class="px-4 md:px-12 text-center">
          <h3 id="queryContainer" class="text-2xl mt-4 mb-6"></h3>
          <p id="emptyMessage" class="hidden w-full text-center bg-gradient-to-r from-galseid-dark/30 to-galseid-dark/0 border border-galseid-dark/60 rounded-lg p-4 mt-4"></p>
          <div id="artRec" class="grid grid-cols-4 sm:grid-cols-12 gap-8 p-4 md:p-5">
              
          </div>
          <div id="recSpinner" role="status" class="w-full h-full absolute -translate-x-1/2 -translate-y-1/2 top-2/4 left-1/2 bg-white/80 backdrop-blur-2xl rounded-xl pb-56">
            <div class="mt-20"></div>
            <svg aria-hidden="true" class="w-14 h-14 m-auto text-galseid-dark animate-spin fill-galseid-orange" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
            <span class="text-xl font-bold font-header mt-6">Merekomendasikan...</span>
          </div>
        </div>
        {{-- <!-- Modal footer -->
        <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
            <button data-modal-hide="extralarge-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
            <button data-modal-hide="extralarge-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
        </div> --}}
      </div>
    </div>
  </div>



  {{-- event --}}
  <section id="acara">
    <div class="text-center mt-36 mb-20">
      <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Acara Seni</h2>
    </div>
    <div id="eventData" class="grid grid-cols-4 sm:grid-cols-12 gap-8 items-center">
      
    </div>
  </section>
  
  {{-- artist --}}
  <section id="seniman">
    <div class="text-center mt-36 mb-20">
      <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Seniman</h2>
    </div>
    <div id="artistData" class="grid grid-cols-4 sm:grid-cols-12 gap-8">
      
    </div>
  </section>
  

  {{-- merch --}}
  <section id="merch">
    <div class="text-center mt-36 mb-20">
      <h2 class="galseid-title"><span class="galseid-bg-title">&nbsp;</span>Merchandise</h2>
    </div>
    <div id="merchData" class="grid col-span-4 sm:grid-cols-12 gap-8">
      
    </div>
  </section>
</div>

@endsection