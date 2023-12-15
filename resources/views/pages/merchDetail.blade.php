@extends('main')

@section('main-content')

<div class="container mx-auto mt-3 md:mt-20 px-10 sm:px-16 md:px-24 lg:px-28">
  <div class="grid grid-cols-4 md:grid-cols-12 gap-8">
    <div class="col-span-4 md:col-span-12 lg:col-span-6 xl:col-span-5 bg-gradient-to-b from-galseid-orange to-galseid-yellow rounded-xl p-2">
      <img src="{{ $merch['gambar'] }}" alt="{{ $merch['nama'] }}" class="image-detail w-full h-full object-cover rounded-lg">
    </div>
    <div class="col-span-4 md:col-span-12 lg:col-span-6 lg:col-start-7">
      <h1 class="text-galseid-dark text-3xl font-bold font-display mb-4">
        {{ $merch['nama'] }}
      </h1>
      <div id="priceData">
        
      </div>
      <div class="mb-8">
        <h3 class="text-galseid-dark text-2xl font-bold font-display mb-3">
          Deskripsi
        </h3>
        <div class="paragraphs text-galseid-dark text-base font-display text-justify">
          <p class="">
            {{ $merch['deskripsi'] }}
          </p>
        </div>
      </div>
      <a href='{{ $merch['link'] }}' class="btn-galseid-red rounded-xl font-bold py-3 px-8 text-lg text-white font-display">
        Beli Sekarang&ensp;
        <i class="fas fa-shopping-cart"></i>
      </a>
    </div>
  </div>
</div>
<script>
  document.title = `GalseId | {{ $merch['nama'] }}`;
</script>
<script>
  function formatNumber(number) {
    if (isNaN(number)) {
      return "Invalid price";
    }

    const parts = number.toString().split("-");
    
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return parts.join("-");
  }

  const price = formatNumber({{ $merch['harga'] }});

  const priceContainer = document.getElementById('priceData');
  const priceHTML = `<h2 class="text-galseid-dark text-4xl sm:text-5xl font-bold font-header mb-10">Rp${price}</h2>`;
  priceContainer.innerHTML = priceHTML;
</script>
@endsection