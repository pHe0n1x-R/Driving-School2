<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>student management @yield('title')</title>

    @include('partials.header')
  </head>

  <body>
    @include('partials.navbar')
    @include('partials.sidebar')
    
  <div class="container">
    @yield('content')
    </div>

    

    @include('partials.footer')
    @include('partials.scripts')


  </body>
</html>
