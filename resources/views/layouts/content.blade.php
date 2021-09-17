<head>

	<script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
	<link href="{{ asset('css/headline_menu.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <script src="{{ asset('js/galleria.min.js') }}" crossorigin="anonymous"></script>
 <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

	


</head> 
<!-- Side menu bar/ height: 100% -->

<div id="side" class="w3-sidebar w3-light-grey w3-bar-block" >
   <h3 class="w3-bar-item">Arduino mokymai</h3>
    @foreach($lessonA AS $lesson) 
    <a class="w3-bar-item w3-button" href="/lesson/{{ $lesson->id }}">{!!$lesson->title!!}</a> 
  @endforeach
   <h3 class="w3-bar-item">Automatikos mokymai</h3>
    @foreach($lessonAu AS $lesson) 
    <a href="/lesson/{{ $lesson->id }}" class="w3-bar-item w3-button">{!!$lesson->title!!}</a> 
  @endforeach

   <h3 class="w3-bar-item">Arduino projektai</h3>
    @foreach($postA AS $post) 
    <a href="/post/{{ $post->id }}" class="w3-bar-item w3-button">{!!$post->title!!}</a> 
  @endforeach
   <h3 class="w3-bar-item">Automatikos projektai</h3>
  @foreach($postAu AS $post) 
    <a href="/post/{{ $post->id }}" class="w3-bar-item w3-button">{!!$post->title!!}</a> 
  @endforeach
</div>


<!-- Side menu bar end -->

<!-- Page Content -->

<div class="block">
  <div class="row for-text-elements">
    <div style="padding: 3%;" class="col w3-center">
      <h1 style="margin: 3%;">ARDUINO</h1>
      <p>Sukurkite savo arduino projektą</p>
      <a class="w3-button w3-dark-grey" href="#">KURTI PROJEKTĄ</a>
      <a class="w3-button w3-dark-grey" href="#">PEREITI PRIE MOKYMŲ</a>
    </div>
    <div class="col">
      <div class="code-block">
        <h4>Arduino IDE kodo pavyzdys</h4>
        <!-- This is code exemple copied from Arduino IDE as html -->
        <div style="border-left: 3px solid #BA2F11;" class="code-card">
<pre>
<font color="#00979c">void</font> <font color="#5e6d03">setup</font><font color="#000000">(</font><font color="#000000">)</font> <font color="#000000">{</font>
<font color="#d35400">pinMode</font><font color="#000000">(</font><font color="#000000">8</font><font color="#434f54">,</font> <font color="#00979c">INPUT</font><font color="#000000">)</font><font color="#000000">;</font>
<font color="#d35400">pinMode</font><font color="#000000">(</font><font color="#000000">2</font><font color="#434f54">,</font> <font color="#00979c">OUTPUT</font><font color="#000000">)</font><font color="#000000">;</font>
<font color="#000000">}</font>

<font color="#00979c">void</font> <font color="#5e6d03">loop</font><font color="#000000">(</font><font color="#000000">)</font> <font color="#000000">{</font>
<font color="#00979c">int</font> <font color="#000000">mygtukas</font><font color="#434f54">=</font><font color="#d35400">digitalRead</font><font color="#000000">(</font><font color="#000000">8</font><font color="#000000">)</font><font color="#000000">;</font>
<font color="#5e6d03">if</font> <font color="#000000">(</font><font color="#000000">mygtukas</font><font color="#434f54">==</font><font color="#000000">1</font><font color="#000000">)</font><font color="#000000">{</font>
 &nbsp;<font color="#d35400">digitalWrite</font><font color="#000000">(</font><font color="#000000">2</font><font color="#434f54">,</font> <font color="#00979c">HIGH</font><font color="#000000">)</font><font color="#000000">;</font>
<font color="#000000">}</font>
<font color="#5e6d03">else</font><font color="#000000">{</font>
<font color="#000000">}</font>
<font color="#000000">}</font>
</pre>
        </div>
        <a class="w3-button w3-dark-grey" href="#">PERŽIURĖTI KODĄ</a>
      </div>
    </div>

</div>
<div style="background-color: #343a40;" class="row for-text-elements">
  <div  class="col w3-center pt-5 not-wide-display">
    <h1 style="margin: 3%; color: white; ">ELEKTRONIKA</h1>
      <p style="color: white;">Išmokite kurti elektronikos projektus</p>
      <a style="border: 2px solid #BA2F11;" class="w3-button w3-dark-grey" href="lesson/2">PEREITI PRIE MOKYMŲ</a>
  </div>
  <div class="col">
    <div style="background-color: white;" class="code-block">
      <h4 style="color:#343a40">Elektronika</h4>
    <div class="code-card">
      <img style="height:auto; width: 100%;" src="/photo/electronics.webp">
      <a class="w3-button w3-dark-grey" href="post/2">KURTI PROJEKTĄ</a>
    </div>
    </div>
  </div>
  <div  class="col w3-center pt-5 wide-display">
    <h1 style="margin: 3%; color: white; ">ELEKTRONIKA</h1>
      <p style="color: white;">Išmokite kurti elektronikos projektus</p>
      <a style="border: 2px solid #BA2F11;" class="w3-button w3-dark-grey" href="lesson/2">PEREITI PRIE MOKYMŲ</a>
  </div>
  </div>
<div class="row">
  <div class="bg">
    <div class="col">
      <h2>“Good software,</h2>
      <h2>like wine,</h2>
      <h2>takes time„</h2>
      <p class="w3-center" style="max-width: 140px; background-color: #BA2F11;font-family: 'Dosis', sans-serif; font-size: 1.5vw;">Joel Spolsky</p>
    </div>
    <div class="col"></div>
  </div>
</div>

  <div class="row for-text-elements">
    <div style="padding: 3%;" class="col w3-center">
      <h1 style="margin: 3%;">AUTOMATIKA</h1>
      <p>Išmokite kurti automatikos projektus</p>
      <a class="w3-button w3-dark-grey" href="post/5">KURTI PROJEKTĄ</a>
      <a class="w3-button w3-dark-grey" href="lesson/5">PEREITI PRIE MOKYMŲ</a>
    </div>
    <div class="col">
      <div class="code-block">
        <h4>Automatikos schemos pavyzdys</h4>
        <!-- This is code exemple copied from Arduino IDE as html -->
        <div class="code-card">
          <img style="height:100%; width: 100%;" src="/photo/schema.webp">
        </div>
        <a style="margin-top: 5%;border: 2px solid #BA2F11;" class="w3-button w3-dark-grey" href="post/5">PERŽIURĖTI SCHEMĄ</a>
      </div>
    </div>

</div>

<div class="wrap pb-3">
 <div class="container-slider-video">
   <div id="video-slider" class="carousel slide" data-ride="carousel" data-interval="10000">
     <div class="carousel-inner">
      <h1 style="margin: 2%;" class="w3-center">Projektų video galerija</h1>
      <div class="carousel-item active">
        <div style="padding-bottom: 42.23%; width: 85%; margin:0px;" class="youtube-player" data-id="{{$postONE->video_url}}"></div>
        <div style="width: 85%;">
            <a style="margin-top: 2%;border: 2px solid #BA2F11;" class="w3-button w3-dark-grey" href="/post/{{$postONE->id}}">PERŽIURĖTI PROJEKTĄ</a>
            <a style="margin-top: 2%;border: 2px solid #BA2F11; float: right; margin-right: 0px;" class="w3-button w3-dark-grey" href="#">APLANKYTI YouTube KANALĄ</a>
        </div>
         </div>

          @foreach($posts AS $post) 
            <div class="carousel-item ">
            <div style="padding-bottom: 42.23%; width: 85%; margin:0px;" class="youtube-player" data-id="{{$post->video_url}}"></div>
            <div style="width: 85%;">
            <a style="margin-top: 2%;border: 2px solid #BA2F11;" class="w3-button w3-dark-grey" href="/post/{{$post->id}}">PERŽIURĖTI PROJEKTĄ</a>
            <a style="margin-top: 2%;border: 2px solid #BA2F11; float: right; margin-right: 0px;" class="w3-button w3-dark-grey" href="#">APLANKYTI YouTube KANALĄ</a>
        </div>
            </div>
          @endforeach
          
          <script>
    /* Light YouTube Embeds by @labnol */

    /* Web: http://labnol.org/?p=27941 */

    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });

    function labnolThumb(id) {
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function labnolIframe() {
        var iframe = document.createElement("iframe");
        iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.id + "?autoplay=1");
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }

</script>
          


        <a href="#video-slider" role="button" data-slide="prev" class="carousel-control-prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">previuos</span>
       </a>
       <a href="#video-slider" role="button" data-slide="next" class="carousel-control-next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">next</span>
       </a>
     
     
     </div>
   </div>
 </div> 
</div>




<div class="row">
  <div class="bg1">
    <div  class="col">
      <div class="quote-card">
      <div class="quote-text">
        <p><span style="color:pink;">while</span>(noSuccess)</p>
        <p>{</p>
        <p style="margin-left: 40px;">tryAgain();</p>
        <p style="margin-left: 40px;"><span style="color:pink;">if</span>(dead)</p>
        <p style="margin-left: 60px;"><span style="color:pink;">break</span>;</p>
        <p>}</p>
      </div>
     </div>
    </div>
    <div class="col"></div>
  </div>
</div>

<div class="learn_arduino w3-center">
  <h1>ARDUINO</h1>
  <h3>Išmokite kurti ARDUINO programas ir įrenginius</h3>
  <a style="border: 2px solid #BA2F11; margin-bottom: 50px;" class="w3-button w3-dark-grey" href="#">PEREITI PRIE MOKYMŲ</a>
  <p><i style="font-size: 100px; opacity: 0.5; float: left; margin-left: 25px;" class="fas fa-infinity"></i></p>
  <div class="bottom_effect">
    <h2>Kodėl verta mokytis?</h2>
  </div>
</div>
  <div class="why_learn row">
    <div class="col-8">
      <p>Arduino  mikrovaldiklio  plokštė  išsiskiria  savo  nedidele  kaina,  plačiu  operacinių  sistemų  palaikymu, lanksčia programavimo aplinka.</p> 
      <p>Taip pat visi komponentai ir techninė įranga, įeinanti į Arduinomikrovaldiklio plokštę ir jo išplėtimo modulius yra atviro kodo, todėl šį valdiklį galima pasidaryti ir pačiam.</p>
    </div>
    <div class="col-4 only_wide">
      <div class="why_learn_card">
      <h3>Pamokos</h3>
      <p><strong>{{ $lessonA->count() }}</strong></p>
      <hr>
      <h3>Projektai</h3>
      <p><strong>{{ $postA->count() }}</strong></p>
      <hr>
      <h3>Laikas</h3>
      <p><strong>12 val.</strong></p>
      </div>
    </div>
  </div>

<div class="what_you_learn">
  <h1>Ko išmoksite?</h1>
  <div class="what_you_learn_block wide-display-l">
    <div class="row ">
      <div class="col-2 list_number">1</div>
      <div class="col-8 learn_text"><h4>Išvedimo įrenginia</h4>
          <p>Išmokite naudoti įvairius išvedimo įrenginius, kaip led diodai, signalizatoriai ir t.t., suprogramuokite juos taip, kad jie veiktų pagal jūsų nurodytas taisykles.</p>
      </div>
      <div class="col-2 learn_button"><a style="border-radius: 5px; border: 2px solid #BA2F11; margin-top: auto; margin-bottom: auto;" class="w3-button w3-dark-grey" href="#">PRADĖTI</a></div>
    </div>
    <div class="row ">
      <div class="col-2 list_number">2</div>
      <div class="col-8 learn_text"><h4>Įvedimo įrenginiai</h4>
          <p>Išmokite naudotis įvairiais temperatūros, garso ar atstumo davikliais, pritaikykite juos savo projektuose. Išmokite išvesti jų rodmenis į ekraną.</p>
      </div>
      <div class="col-2 learn_button"><a style="border-radius: 5px; border: 2px solid #BA2F11; margin-top: auto; margin-bottom: auto;" class="w3-button w3-dark-grey" href="#">PRADĖTI</a></div>
    </div>
    <div class="row ">
     <div class="col-2 list_number">3</div>
      <div class="col-8 learn_text"><h4>Analoginiai signalai</h4>
          <p>Išmokite naudotis ne tik skaitmeniniais, bet ir analoginiais signalais.</p>
      </div>
      <div class="col-2 learn_button"><a style="border-radius: 5px; border: 2px solid #BA2F11; margin-top: auto; margin-bottom: auto;" class="w3-button w3-dark-grey" href="#">PRADĖTI</a></div>
    </div>
      <div class="row ">
      <div class="col-2 list_number">4</div>
      <div class="col-8 learn_text"><h4>Sudėtingesniu struktūrų kūrimas</h4>
          <p>Išmokite kurti sudėtingesnius projektus. Savo projektuose pritaikykite lcd ekranus, GSM ar Wi-fi plokštes.</p>
      </div>
      <div class="col-2 learn_button"><a style="border-radius: 5px; border: 2px solid #BA2F11; margin-top: auto; margin-bottom: auto;" class="w3-button w3-dark-grey" href="#">PRADĖTI</a></div>
    </div>
  </div>


  <div class="what_you_learn_block not-wide-display-l">
    <div class="row wide">
      <div class="col-10 learn_text ml-2"><h4>Išvedimo įrenginiai</h4>
          <p>Išmokite naudoti įvairius išvedimo įrenginius, kaip led diodai, signalizatoriai ir t.t., suprogramuokite juos taip, kad jie veiktų pagal jūsų nurodytas taisykles.</p>
      </div>
      <div class="col-2 learn_button ml-2"><a style="border-radius: 5px; border: 2px solid #BA2F11; margin-top: auto; margin-bottom: auto;" class="w3-button w3-dark-grey" href="#">PRADĖTI</a></div>
    </div>
    <div class="row ">
      <div class="col-10 learn_text ml-2"><h4>Įvedimo įrenginiai</h4>
          <p>Išmokite naudotis įvairiais temperatūros, garso ar atstumo davikliais, pritaikykite juos savo projektuose. Išmokite išvesti jų rodmenis į ekraną.</p>
      </div>
      <div class="col-2 learn_button ml-2"><a style="border-radius: 5px; border: 2px solid #BA2F11; margin-top: auto; margin-bottom: auto;" class="w3-button w3-dark-grey" href="#">PRADĖTI</a></div>
    </div>
    <div class="row ">
      <div class="col-10 learn_text ml-2"><h4>Analoginiai signalai</h4>
          <p>Išmokite naudotis ne tik skaitmeniniais, bet ir analoginiais signalais.</p>
      </div>
      <div class="col-2 learn_button ml-2"><a style="border-radius: 5px; border: 2px solid #BA2F11; margin-top: auto; margin-bottom: auto;" class="w3-button w3-dark-grey" href="#">PRADĖTI</a></div>
    </div>
      <div class="row ">
      <div class="col-10 learn_text ml-2"><h4>Sudėtingesniu struktūrų kūrimas</h4>
          <p>Išmokite kurti sudėtingesnius projektus. Savo projektuose pritaikykite lcd ekranus, GSM ar Wi-fi plokštes.</p>
      </div>
      <div class="col-2 learn_button ml-2"><a style="border-radius: 5px; border: 2px solid #BA2F11; margin-top: auto; margin-bottom: auto;" class="w3-button w3-dark-grey" href="#">PRADĖTI</a></div>
    </div>
  </div>

</div>
  
</div>







