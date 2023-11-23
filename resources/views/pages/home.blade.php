@extends('main')

@section('main-content')

{{-- heros --}}
<div class="flex flex-row gap-20 items-center mt-12">
  <div class="flex flex-1 flex-col justify-start">
    <h1 class="text-slate-700 text-5xl font-bold pb-4 font-header">
      Lorem ipsum dolor sit amet consectetur
    </h1>
    <p class="text-gray-500 text-base pb-12 font-display">
      Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.
    </p>
    <a href="/#" class="bg-slate-500 rounded-full font-bold py-3 px-8 text-base text-white hover:bg-slate-700 w-fit font-display">
      Jelajahi Galeri Seni
    </a>
  </div>
  <div class="flex flex-1 items-center">
    <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="p-5 w-full object-contain">
  </div>
</div>

{{-- art --}}
<div class="text-center mt-36 mb-20">
  <h2 class="text-slate-500 text-3xl font-bold font-display">Galeri Seni</h2>
</div>
<div class="grid grid-cols-3 gap-x-5 gap-y-5">
  {{-- cards Component --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-2">
      <div class="flex items-center h-64">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <div class="flex flex-row gap-2 items-center">
        <i class="far fa-user"></i>
        <p class="text-gray-500 text-base font-display">Nama Seniman</p>
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Karya Seni
      </h3>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Detail
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
  {{-- cards Component --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-2">
      <div class="flex items-center h-64">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <div class="flex flex-row gap-2 items-center">
        <i class="far fa-user"></i>
        <p class="text-gray-500 text-base font-display">Nama Seniman</p>
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Karya Seni
      </h3>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Detail
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
  {{-- cards Component --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-2">
      <div class="flex items-center h-64">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <div class="flex flex-row gap-2 items-center">
        <i class="far fa-user"></i>
        <p class="text-gray-500 text-base font-display">Nama Seniman</p>
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Karya Seni
      </h3>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Detail
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
  {{-- cards Component --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-2">
      <div class="flex items-center h-64">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <div class="flex flex-row gap-2 items-center">
        <i class="far fa-user"></i>
        <p class="text-gray-500 text-base font-display">Nama Seniman</p>
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Karya Seni
      </h3>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Detail
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
  {{-- cards Component --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-2">
      <div class="flex items-center h-64">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <div class="flex flex-row gap-2 items-center">
        <i class="far fa-user"></i>
        <p class="text-gray-500 text-base font-display">Nama Seniman</p>
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Karya Seni
      </h3>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Detail
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
  {{-- cards Component --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-2">
      <div class="flex items-center h-64">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <div class="flex flex-row gap-2 items-center">
        <i class="far fa-user"></i>
        <p class="text-gray-500 text-base font-display">Nama Seniman</p>
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Karya Seni
      </h3>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Detail
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
</div>

{{-- event --}}
<div class="text-center mt-36 mb-20">
  <h2 class="text-slate-500 text-3xl font-bold font-display">Acara Seni</h2>
</div>
<div class="grid grid-cols-2 gap-x-5 gap-y-5">
  {{-- card component --}}
  <div class="bg-slate-200 rounded-3xl">
    <div class="flex flex-row p-6 items-center justify-between">
      <div class="flex flex-col gap-2 my-4">
        <h3 class="text-slate-500 text-xl font-bold font-display">
          Nama Event
        </h3>
        <div class="grid grid-template gap-x-2 gap-y-1">
          <div class="flex justify-center items-center">
            <i class="fas fa-scroll"></i>
          </div>
          <p>Penyelenggara</p>
          <div class="flex justify-center items-center">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <p>Lokasi</p>
          <div class="flex justify-center items-center ">
            <i class="far fa-calendar"></i>
          </div>
          <p>01 Januari 2023</p>
          <div></div>
          <p class="font-bold">00:00-00:00 WIB</p>
        </div>
      </div>
      <div class="flex items-center w-2/6">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="h-full object-contain">
      </div>
    </div>
  </div>
  {{-- card component --}}
  <div class="bg-slate-200 rounded-3xl">
    <div class="flex flex-row p-6 items-center justify-between">
      <div class="flex flex-col gap-2 my-4">
        <h3 class="text-slate-500 text-xl font-bold font-display">
          Nama Event
        </h3>
        <div class="grid grid-template gap-x-2 gap-y-1">
          <div class="flex justify-center items-center">
            <i class="fas fa-scroll"></i>
          </div>
          <p>Penyelenggara</p>
          <div class="flex justify-center items-center">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <p>Lokasi</p>
          <div class="flex justify-center items-center ">
            <i class="far fa-calendar"></i>
          </div>
          <p>01 Januari 2023</p>
          <div></div>
          <p class="font-bold">00:00-00:00 WIB</p>
        </div>
      </div>
      <div class="flex items-center w-2/6">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="h-full object-contain">
      </div>
    </div>
  </div>
  {{-- card component --}}
  <div class="bg-slate-200 rounded-3xl">
    <div class="flex flex-row p-6 items-center justify-between">
      <div class="flex flex-col gap-2 my-4">
        <h3 class="text-slate-500 text-xl font-bold font-display">
          Nama Event
        </h3>
        <div class="grid grid-template gap-x-2 gap-y-1">
          <div class="flex justify-center items-center">
            <i class="fas fa-scroll"></i>
          </div>
          <p>Penyelenggara</p>
          <div class="flex justify-center items-center">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <p>Lokasi</p>
          <div class="flex justify-center items-center ">
            <i class="far fa-calendar"></i>
          </div>
          <p>01 Januari 2023</p>
          <div></div>
          <p class="font-bold">00:00-00:00 WIB</p>
        </div>
      </div>
      <div class="flex items-center w-2/6">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="h-full object-contain">
      </div>
    </div>
  </div>
  {{-- card component --}}
  <div class="bg-slate-200 rounded-3xl">
    <div class="flex flex-row p-6 items-center justify-between">
      <div class="flex flex-col gap-2 my-4">
        <h3 class="text-slate-500 text-xl font-bold font-display">
          Nama Event
        </h3>
        <div class="grid grid-template gap-x-2 gap-y-1">
          <div class="flex justify-center items-center">
            <i class="fas fa-scroll"></i>
          </div>
          <p>Penyelenggara</p>
          <div class="flex justify-center items-center">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <p>Lokasi</p>
          <div class="flex justify-center items-center ">
            <i class="far fa-calendar"></i>
          </div>
          <p>01 Januari 2023</p>
          <div></div>
          <p class="font-bold">00:00-00:00 WIB</p>
        </div>
      </div>
      <div class="flex items-center w-2/6">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="h-full object-contain">
      </div>
    </div>
  </div>
</div>

{{-- artist --}}
<div class="text-center mt-36 mb-20">
  <h2 class="text-slate-500 text-3xl font-bold font-display">Seniman</h2>
</div>
  <div class="grid grid-cols-3 gap-x-5 gap-y-20">
    {{-- profile --}}
    <div class="flex flex-col items-center gap-8">
      <div class="flex items-center h-60 w-60">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="rounded-full object-contain">
      </div>
      <a href="#" class="text-slate-500 text-3xl font-semibold font-display">John Doe</a>
    </div>
    {{-- profile --}}
    <div class="flex flex-col items-center gap-8">
      <div class="flex items-center h-60 w-60">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="rounded-full object-contain">
      </div>
      <a href="#" class="text-slate-500 text-3xl font-semibold font-display">John Doe</a>
    </div>
    {{-- profile --}}
    <div class="flex flex-col items-center gap-8">
      <div class="flex items-center h-60 w-60">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="rounded-full object-contain">
      </div>
      <a href="#" class="text-slate-500 text-3xl font-semibold font-display">John Doe</a>
    </div>
    {{-- profile --}}
    <div class="flex flex-col items-center gap-8">
      <div class="flex items-center h-60 w-60">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="rounded-full object-contain">
      </div>
      <a href="#" class="text-slate-500 text-3xl font-semibold font-display">John Doe</a>
    </div>
    {{-- profile --}}
    <div class="flex flex-col items-center gap-8">
      <div class="flex items-center h-60 w-60">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="rounded-full object-contain">
      </div>
      <a href="#" class="text-slate-500 text-3xl font-semibold font-display">John Doe</a>
    </div>
    {{-- profile --}}
    <div class="flex flex-col items-center gap-8">
      <div class="flex items-center h-60 w-60">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="rounded-full object-contain">
      </div>
      <a href="#" class="text-slate-500 text-3xl font-semibold font-display">John Doe</a>
    </div>
  </div>
<div>
  
</div>

{{-- merch --}}
<div class="text-center mt-36 mb-20">
  <h2 class="text-slate-500 text-3xl font-bold font-display">Beli Merchandise</h2>
</div>
<div class="grid grid-cols-4 gap-x-6">
  {{-- Merch item --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-3">
      <div class="flex items-center h-40">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Merch
      </h3>
      <p class="text-slate-500 text-2xl font-display">
        Rp100.000
      </p>
      <p class="text-slate-500 font-display text-base">
        Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar...
      </p>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Beli Sekarang
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
  {{-- Merch item --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-3">
      <div class="flex items-center h-40">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Merch
      </h3>
      <p class="text-slate-500 text-2xl font-display">
        Rp100.000
      </p>
      <p class="text-slate-500 font-display text-base">
        Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar...
      </p>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Beli Sekarang
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
  {{-- Merch item --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-3">
      <div class="flex items-center h-40">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Merch
      </h3>
      <p class="text-slate-500 text-2xl font-display">
        Rp100.000
      </p>
      <p class="text-slate-500 font-display text-base">
        Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar...
      </p>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Beli Sekarang
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
  {{-- Merch item --}}
  <div class="border-gray-300 rounded-3xl border border-solid">
    <div class="flex flex-col p-6 gap-3">
      <div class="flex items-center h-40">
        <img src="{{ asset('assets/img/image-placeholder.png') }}" alt="Placeholder Promo Image" class="w-full h-full rounded-xl object-cover">
      </div>
      <h3 class="text-slate-500 text-xl font-bold font-display">
        Nama Merch
      </h3>
      <p class="text-slate-500 text-2xl font-display">
        Rp100.000
      </p>
      <p class="text-slate-500 font-display text-base">
        Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar...
      </p>
      <a href='/#' class="flex flex-row items-center justify-center gap-2 bg-slate-500 rounded-xl font-bold py-3 px-8 text-lg text-white hover:bg-slate-700 font-display">
        Beli Sekarang
        <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
</div>

@endsection