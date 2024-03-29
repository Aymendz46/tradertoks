<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=5" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/loading.css">
    @yield('page-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/navbar.js"></script>
    @yield('page-script')
    

    <link rel="icon" href="./images/logo/Logo.svg" type="image/svg+xml">
    <link rel="icon" type="image/svg+xml" href="./images/logo/Logo.svg">
    <link rel="alternate icon" href="./images/logo/Logo.svg">
    <link rel="mask-icon" href="./images/logo/Logo.svg" color="#ff8a01">

    @yield('page-title')
</head>

<body>

    <div class="mainn">

    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')
    
    <script>
        $('#course-scroll').scrollLeft($('#course-scroll').width())
    </script>
</body>

</html>