<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>GalseId | {{ $title }}</title>
      <!-- Google Font-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&family=Nunito+Sans:ital,opsz,wght@0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700&display=swap" rel="stylesheet">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      {{-- tailwind CSS --}}
      @vite('resources/css/app.css')
  </head>
  <body>
    @include('partials.navbar')
    
    <main class="px-28 mt-12 mb-40">
      @yield('main-content')
    </main>
    
    @include('partials.footer')
  </body>
</html>