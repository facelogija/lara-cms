 <!DOCTYPE html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/content.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/012ce59742.js" crossorigin="anonymous"></script>
        <link href="{{ asset('/css/about.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Arduinopagalba.lt</title>
        <link rel='shortcut icon' href='https://arduinopagalba.lt/public/uploads/Logo.jpg' type='image/x-icon' />
    </head>
    <body>
        <div style="margin: 0px;" class="row full-height">
            <div class="col option-left d-flex justify-content-center">
                <div id="mySidepanel_left" class="sidepanel">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeLeft()">×</a>
                    <div class="sidepanel-content p-3">
                            <h1>Mes esame tam,</h1><h1>kad jum būtų lengviau</h1>
                            <p>Mūsų komandos tikslas,<br> įgyvendinti kliento vizijas ir sukurti produktą <br>padėsiantį jam pasiekti užsibrėžtus tikslus.</p>

                            <p style="text-align: center;">Nes <span style="font-style: italic;">„tikslas yra ne kas kita kaip galutinį terminą turinti svajonė“.</span></p>
                            <p style="color: #BA2F11; text-align: right;">Joe L. Griffithas</p>
                    </div>
                </div>
                <div class="about-left">AP</div>
                <div class="vertical-left d-flex justify-content-center">
                    <a onclick="openLeft()" href="#">mus</a>
                </div>
            </div>
            <div class="col option-right d-flex justify-content-center">
                <div id="mySidepanel_right" class="sidepanel">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeRight()">×</a>
                    <div class="sidepanel-content p-3">
                            <h1>Projekto tikslas</h1>
                            <p>Suteikti mokomąją medžiagą moksleiviams studentams <br> ar tiesiog elektronika ir programavimu besidomintiems asmenims.<br>Padėti rasti atsakymus į jiems iškilusius klausimus.</p>

                            <p style="text-align: center;">Nes <span style="font-style: italic;">„Išsilavinęs žmogus yra tas, kuris žino, kaip sužinoti tai, ko jis dar nežino“.</span></p>
                            <p style="color: #BA2F11; text-align: right;">George Simmel</p>
                            <p style="transform: translate(0px, 180px); text-align:center; font-family: Verdana, Geneva, sans-serif;font-size: 21px;font-style: italic; color: #fff;">Arduinopagalba<span style="color: #BA2F11">.lt</span></p>
                    </div>
                </div>
                <div class="exit"><a href="/"><i class="fas fa-times"></i></a></div>
               <div class="about-right">IE</div>
                <div class="vertical-right d-flex justify-content-center">
                    <a onclick="openRight()" href="#">projektą</a>
                </div>
            </div>
        </div>


<script>
function openLeft() {
  document.getElementById("mySidepanel_left").style.width = "50%";
}

function closeLeft() {
  document.getElementById("mySidepanel_left").style.width = "0";
}

function openRight() {
  document.getElementById("mySidepanel_right").style.width = "50%";
  document.getElementById("mySidepanel_right").style.transform = "translate(100%, 0px)";
}

function closeRight() {
  document.getElementById("mySidepanel_right").style.width = "0";
  document.getElementById("mySidepanel_right").style.transform = "translate(0%, 0px)";
}
</script>



    </body>
</html>
