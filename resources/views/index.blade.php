
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Arduinopagalba.lt - </title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/css/admin/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('/css/admin/mdb.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/admin/style.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/about.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/app.js') }}" defer></script>
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
                <!-- First row of content -->
                <div class="row mb-5">
                    <div class="col-lg-6 col-md-12 p-5 text-center">
                        <div><p class="responsive-h1 mb-0">ARDUINO</p></div>
                        <div><p class="responsive-h3 text-muted">Sukurkite savo Arduino projektą</p>
                        </div>
                        <div>
                            <a role="button" class="btn btn-outline-ard waves-effect">Kurti projektą</a>
                            <a role="button" class="btn btn-outline-ard waves-effect">Pereiti prie mokymų</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card p-3 rounded-0">
                            <p class="responsive-h3 mb-0 text-muted">Arduino IDE kodo pavyzdys:</p>
                            <div class="ard-lighten-5 rounded ard-border-left mb-1">@include('layouts.code_samples.arduino_ide_code')</div>
                            <div><a role="button" class="btn btn-outline-ard waves-effect m-0 mt-1">Išbandyti</a></div>
                        </div>
                    </div>
                </div>
                <!-- Second row of content -->
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card primary-color-ard p-3 rounded-0">
                            <p class="responsive-h3 mb-0 text-white">Elektronika:</p>
                            <div class="ard-lighten-5 rounded ard-border-left mb-1"><img class="rounded ard-border-left-white" style="height:auto; width: 100%;" src="photo/electronics.webp"></div>
                            <div><a role="button" class="btn btn-outline-white waves-effect m-0 mt-1">Išbandyti</a></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 p-5 text-center">
                        <div><p class="responsive-h2 mb-0">ELEKTRONIKA</p></div>
                        <div><p class="responsive-h3 text-muted">Išmokite kurti elektronikos projektus</p>
                        </div>
                        <div>
                            <a role="button" class="btn btn-outline-ard waves-effect">Kurti projektą</a>
                            <a role="button" class="btn btn-outline-ard waves-effect">Pereiti prie mokymų</a>
                        </div>
                    </div>
                </div>

                <hr>
                <!-- social section -->
                @include('layouts.social_section')

                 <div class="row bg_img_ard ml-0 pb-5 mt_md_15">
                    <div>
                        <p class="responsive-h2 mb-0">APIE PROJEKTĄ</p>
                        <h4 class="mb_xl_25 mb_xxl_25"><small class="text-muted">Arduinopagalba.lt projektas pradėtas kurti 2020 metais. <br>
                        Esminis projekto tikslas yra suteikti <br> mokomąją medžiagą moksleiviams studentams <br>
                        ar tiesiog elektronika ir programavimu besidomintiems asmenims. <br>
                        Padėti rasti atsakymus į jiems iškilusius klausimus.<br>
                        Skatinti pažangių ir inovatyvių spręndimų <br> pritaikymą kasdieniame gyvenime.</small></h4>
                       <div class="d_max-inline mt-3">
                        </div>
                    </div>
                </div>
                <div class="row primary-color-ard pt-3  pb-3 rounded-0">
                    <div class="mb-3 col-sm-12 col-md-6">
                        <div class="card p-3 text-center dark_text rounded-0">
                            <h3 class="mb-3 font-weight-bold">ARDUINO</h3>
                            <p class="mb-3">Išmokite kurti projektus naudojant Arduino mikrovaldiklį</p>
                            <a role="button" class="btn btn-outline-ard waves-effect">Pradėti mokymus</a>
                        </div>
                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <div class="card p-3 text-center dark_text rounded-0">
                            <h3 class="mb-3 font-weight-bold">ELEKTRONIKA</h3>
                            <p class="mb-3">Pradėkite praktikoje naudoti elektronikos projektus</p>
                            <a role="button" class="btn btn-outline-ard waves-effect">Pradėti</a>
                        </div>
                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <div class="card p-3 text-center dark_text">
                            <h3 class="mb-3 font-weight-bold">AUTOMATIKA</h3>
                            <p class="mb-3">Įgykite žinių automatikos ir elektronikos srityse</p>
                            <a role="button" class="btn btn-outline-ard waves-effect">Pereiti prie mokymų</a>
                        </div>
                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <div class="card p-3 text-center dark_text">
                            <h3 class="mb-3 font-weight-bold">ROBOTIKA</h3>
                            <p class="mb-3">Išbandykite jėgas bandant kurti robotikos projektus</p>
                            <a role="button" class="btn btn-outline-ard waves-effect">Kurti projektą</a>
                        </div>
                    </div>
                </div>

                <hr>
                <!-- social section -->
                <div class="row justify-content-center responsive_margin_for_ard_logo pt-md-5">
                    <div class="col-xs-12 col-lg-10 col-xl-8 card rounded-0 bg-white">
                        <div class="h2 m-4">TAPKITE MŪSŲ PARTNERIU</div>
                        <div class="row mb-5">
                        <div class="col-xs-12 col-lg-8">
                        <h4 class="ml-4"><small class="text-muted">Tapdami mūsų partneriais gausite galimybę talpinti savo projektus, turinį ar
                        pamokas mūsų platformoje. Taip padėsite augti projektui, o savo sukauptas žinias galėsite perduoti kitiems.</small></h4>
                        </div>
                        <div class="col-xs-12 col-lg-4 text-center">
                        <a role="button" class="btn btn-outline-ard waves-effect text-center">Tapti partneriu</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row responsive_padding_5 ard-lighten-5">
                    <div class="col">
                        <p class="navbar-brand waves-effect d-inline align-middle responsive-h1 line_height_1">
                          <strong class="ard-text font-italic align-middle"><span class="ard-text-dark">Arduinopagalba</span>.lt</strong><small class="text-muted ml-3"></small>
                        </p>
                    </div>
                </div>
                <div class="row ard-lighten-5 pt-4 pb-5">
                    <div class="col-6 col-lg-2">
                        <div class="font-weight-bold mb-4">Nuorodos</div>
                        <div class="mb-3 "><a class="text-muted hov-text-dark" href="{{ route('about') }}">Apie mus</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" href="{{ route('post.show', $firstpost) }}">Projektai</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" href="{{ route('lesson.show', $firstlesson) }}">Arduino kas tai?</a></div>
                        <div class="mb-3 text-muted">Kaip pradėti?</div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" href="{{ route('lesson.show', $firstlesson) }}">Pamokos</a></div>

                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="font-weight-bold mb-4">Šaltiniai</div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.digikey.com/">Digikey.com</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.w3schools.com/">W3Schools.com</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.circuito.io/">Circuito.io</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.makerspaces.com/">Makerspaces.com</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="http://cplusplus.com/">Cplusplus.com</a></div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="font-weight-bold mb-4">Technologijos</div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.arduino.cc/">Arduino UNO</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="http://cplusplus.com/">C++</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://docs.microsoft.com/en-us/dotnet/csharp/">C#</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.arduino.cc/en/pmwiki.php?n=Main/ArduinoBoardNano">Arduino NANO</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.raspberrypi.org/">Raspberry Pi</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.microchip.com/wwwproducts/en/ATmega328P">ATmega328P</a></div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="font-weight-bold mb-4">Programinė įranga </div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.arduino.cc/en/Main/Software_">Arduino IDE</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://www.labcenter.com/">Proteus</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="http://atmel-studio-doc.s3-website-us-east-1.amazonaws.com/webhelp/GUID-54E8AE06-C4C4-430C-B316-1C19714D122B-en-US-1/index.html?GUID-8F63ECC8-08B9-4CCD-85EF-88D30AC06499">Atmel Studio</a></div>
                        <div class="mb-3 text-muted"><a class="text-muted hov-text-dark" target="_blank" href="https://visualstudio.microsoft.com/">Visual Studio</a></div>
                    </div>

                    <div class="col-lg-4"></div>
                </div>


                <!--<div class="row mt-5 pt-5 pl-5 pr-5">
                    <div class="col-md-12 col-lg-6 ">
                        <img class="rounded" style="height:auto; width: 100%;" src="photo/header-bg.jpg">
                    </div>
                    <div class="col-md-12 col-lg-6"> bbb
                    </div>
                </div>-->
            </div>
        </main>

    </div>
    @include('layouts.footer')
</body>
</html>
