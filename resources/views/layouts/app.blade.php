<!DOCTYPE html>
<html lang="en">
  @include('partials.head')
<body>

<header>
    @include('partials.navbar')
</header>

<main>
    @yield('main-content')
</main>

<footer>
    @yield('footer-content')
</footer>
    
</body>
</html>