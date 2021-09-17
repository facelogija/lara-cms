<head>

	<link href="{{ asset('css/headline_menu.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <script src="{{ asset('js/galleria.min.js') }}" crossorigin="anonymous"></script>
  <link href="{{ asset('css/post.css') }}" rel="stylesheet">



	


</head>
<!-- Side menu bar/ height: 100% -->
<div id="side" class="w3-sidebar w3-light-grey w3-bar-block" >
  <h3 class="w3-bar-item">Arduino</h3>
  	@foreach($lessonA AS $lesson) 
 		<a class="{{ (request()->segment(2) == $lesson->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button" href="/lesson/{{ $lesson->id }}" >{!!$lesson->title!!}</a> 
	@endforeach
   <h3 class="w3-bar-item">Electronics</h3>
    @foreach($lessonE AS $lesson) 
    <a href="/lesson/{{ $lesson->id }}" class="{{ (request()->segment(2) == $lesson->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$lesson->title!!}</a> 
  @endforeach
   <h3 class="w3-bar-item">Robotics</h3>
    @foreach($lessonR AS $lesson) 
    <a href="/lesson/{{ $lesson->id }}" class="{{ (request()->segment(2) == $lesson->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$lesson->title!!}</a> 
  @endforeach
   <h3 class="w3-bar-item">Automatic</h3>
    @foreach($lessonAu AS $lesson) 
    <a href="/lesson/{{ $lesson->id }}" class="{{ (request()->segment(2) == $lesson->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$lesson->title!!}</a> 
  @endforeach
</div>
<!-- Side menu bar end -->

<!-- Page Content -->
<div class="post-container p-3">
  <div class="row justify-content-center mb-3 ">
		<h1 class="title">{!!$lessonq->title!!}</h1>
	</div>

<div class="content_text">
  {!!$lessonq->instruction!!}
</div>

<div class="content_text">
    <h2 class="m-3">Pamokos vaizdo įrašas</h2>
    <div class="youtube-player" data-id="{{$lessonq->video_url}}"></div>
</div>
</div>

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

