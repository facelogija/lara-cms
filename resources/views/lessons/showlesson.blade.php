<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Arduinopagalba.lt</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/css/admin/bootstrap.min.css">
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="/css/admin/mdb.min.css">
        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="/css/admin/style.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<body class="ard-lighten-7">
    <div class="container-for-admin">
        <header>
            @include('layouts.leftmenu')
            @include('layouts.navbar')
        </header>
        <main style="overflow: hidden !important;" class="pt-5 mx-lg-5">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12 col-lg-9 pl-4">
                        <h3 class="text-uppercase">{{ $showLesson->title }}</h3>
                        {!! $showLesson->instruction !!}
                    </div>
                    <div class="col-lg-3 d-md-none d-lg-block"></div>
                </div>
                <hr>
                @include('layouts.social_section')
            </div>
        </main>
    </div>
    @include('layouts.footer')
</body>

</html>