<header class="w-full z-100">
  <div class="relative grid grid-cols-4 sm:grid-cols-12 gap-8 px-14 md:px-24 lg:px-28 py-8">
    <div class="col-span-4 sm:col-span-12 md:col-span-6 lg:col-span-4 flex items-center">
      <div class="hamburger-wrapper lg:hidden">
        <button id="hamburger">
          {{-- ☰ --}}
          <div class="hamburger-menu-container">
              <div class="hamburger-menu-animated"></div>
          </div>
        </button>
      </div>
      <div class="h-full w-[1px] bg-black/25 ms-8 lg:hidden"></div>
      <a href="/" class="h-10 w-fit ms-6 lg:ms-0 border-s-black">
        <img src="{{ asset('assets/img/galseid-logo-design-1.png') }}" alt="GalseId Logo" class="h-10">
      </a>
    </div>
    {{-- <div class="hamburger-container">
      <button id="hamburger" aria-label="Navigation Button" style="width: 44px;"><i id="hamburger-icon" class="fas fa-bars" style="color: #362706;"></i></button>
    </div> --}}
    <div class="col-span-4 md:col-span-6 lg:col-span-8 flex ms-auto">
      <nav id="drawer" class="hidden md:block items-center">
        <ul class="flex items-center gap-8">
          <li class="hidden lg:block btn-galseid-link"><a href="/galeri">Galeri</a></li>
          <li class="hidden lg:block btn-galseid-link"><a href="/acara">Acara</a></li>
          <li class="hidden lg:block btn-galseid-link"><a href="/seniman">Seniman</a></li>
          <li><a id="btnMerch" class="btn-galseid-yellow transition-all duration-300" href="/merch">Beli Merch <i class="fas fa-coffee"></i></a></li>
        </ul>
      </nav>
    </div>
    <nav id="drawerMobile" class="col-span-4 close-drawer absolute block mt-16 transition-all duration-300">
      {{-- <div class="bg-black/30 w-screen h-screen fixed delay-900"></div> --}}
      <ul class="items-center bg-galseid-blur shadow-2xl p-5 m-8">
        <li class="block btn-galseid-link mb-2"><a href="/galeri">Galeri</a></li>
        <li class="block btn-galseid-link mb-2"><a href="/acara">Acara</a></li>
        <li class="block btn-galseid-link mb-3"><a href="/seniman">Seniman</a></li>
        <li><a class="inline-block btn-galseid-yellow" href="/merch">Beli Merch <i class="fas fa-coffee"></i></a></li>
      </ul>
    </nav>
  </div>
</header>