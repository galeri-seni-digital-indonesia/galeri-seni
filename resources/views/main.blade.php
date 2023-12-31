<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      {{-- Dicoding Email Verification --}}
      <meta name="dicoding:email" content="falahabdurrafi@gmail.com">
      <title>GalseId | {{ $title }}</title>
      {{-- Favicon --}}
      <link rel="icon" sizes="32x32" href="./favicon-dark.png" media="(prefers-color-scheme: dark)" />
      <link rel="icon" sizes="32x32" href="./favicon-light.png" media="(prefers-color-scheme: light)" />
      <!-- Google Font-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&family=Nunito+Sans:ital,opsz,wght@0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700&display=swap" rel="stylesheet">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      {{-- Flowbite CSS --}}
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
      {{-- tailwind CSS --}}
      @vite('resources/css/app.css')
      {{-- Scroll Reveal --}}
      <script src="https://unpkg.com/scrollreveal"></script>
  </head>
  <body>
    @include('partials.navbar')
    
    <main id="mainContent" class="mt-0 sm:mt-9 mb-40">
      @yield('main-content')
    </main>
    
    @include('partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    @vite('resources/js/app.js')
    {{-- @vite('resources/js/art-api.js')
    @vite('resources/js/event-api.js')
    @vite('resources/js/artist-api.js')
    @vite('resources/js/merch-api.js') --}}
  </body>
</html>