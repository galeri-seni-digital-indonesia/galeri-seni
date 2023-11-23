<header class="w-full">
  <div class=" px-28 mt-8 w-full flex flex-row gap-28 mb-5">
    <div class="flex items-center flex-shrink-0">
      <a href="/" class="h-fit">
        <img src="{{ asset('assets/img/galseid-logo-design-1.png') }}" alt="GalseId Logo" class="h-10 object-contain">
      </a>
    </div>
    {{-- <div class="hamburger-container">
      <button id="hamburger" aria-label="Navigation Button" style="width: 44px;"><i id="hamburger-icon" class="fas fa-bars" style="color: #362706;"></i></button>
    </div> --}}
    <div class="flex flex-row justify-end w-full">
      <nav id="drawer" class="flex items-center">
        <ul class="flex items-center gap-12">
          <li class="h-fit font-medium text-base text-black rounded hover:text-blue-700 font-header"><a href="/galeri">Galeri</a></li>
          <li class="h-fit font-medium text-base text-black rounded hover:text-blue-700 font-header"><a href="/acara">Acara</a></li>
          <li class="h-fit font-medium text-base text-black rounded hover:text-blue-700 font-header"><a href="/seniman">Seniman</a></li>
          <li><a class="bg-slate-500 rounded-full font-medium py-3 px-8 text-base text-white hover:bg-slate-700 font-display" href="/merch">Beli Merch</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>