<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body>

<div class="wrapper">
    <!-- Navbar -->
    @include('layouts.nav')

    <!-- Main Content -->
    <div class="content">
        @yield('section')
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</div>

</body>
</html>
