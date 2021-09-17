    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed scrollable-left-menu">

      <div class="d-flex justify-content-center mt-3"><img style="width: 100px;" src="https://arduinopagalba.lt/public/uploads/Logo.jpg"></div>
      <a class="navbar-brand waves-effect d-flex justify-content-center mb-3" href="{{ route('main') }}">
          <strong class=" ard-text font-italic"><span style="color:black;">Arduinopagalba</span>.lt</strong>
        </a>

      <div class="list-group list-group-flush">
        <a href="{{ route('main') }}" class="list-group-item list-group-item-action waves-effect ard-text">
       </i>Pagrindinis puslapis</a>

        <a id="lesson_slide" class="{{ (request()->segment(1) == 'lesson') ? 'ard-active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fas fa-book-reader mr-3"></i>Pamokos<i id="lesson_slide_arrow" class="fas fa-chevron-down float-right menu_arrow"></i></a>
        <div class="not-display" id="lesson_slide_content">
        @foreach ($lessons as $lesson)
          <a href="{{ route('lesson.show', $lesson->id ) }}" class="{{ (request()->segment(2) == $lesson->id) ? 'ard-text' : '' }} list-group-item list-group-item-action  waves-effect list-item-bottom-border ml-2">
          {{ $lesson->title }}</a>

        @endforeach
      </div>
       <a id="post_slide" class="{{ (request()->segment(1) == 'post') ? 'ard-active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fas fa-microchip mr-3"></i></i>Projektai<i id="post_slide_arrow" class="fas fa-chevron-down float-right menu_arrow"></i></a>
        <div class="not-display" id="post_slide_content">
        @foreach ($posts as $post)
          <a href="{{ route('post.show', $post->id) }}" class="{{ (request()->segment(2) == $post->id) ? 'ard-text' : '' }} list-group-item list-group-item-action  waves-effect list-item-bottom-border ml-2">
          {{ $post->title }}</a>

        @endforeach
      </div>
        <a href="#social_section" class="list-group-item list-group-item-action waves-effect">
          <i class="fa fa-table mr-3"></i>Soc. tinklai</a>
        <a href="{{ route('about') }}" class="list-group-item list-group-item-action waves-effect">
          <i class="fa fa-money mr-3"></i>Apie mus</a>
      </div>

    </div>

 <script>
  $(document).ready(function(){
    $("#lesson_slide").click(function(){
      $("#lesson_slide_content").slideToggle("slow");
      $("#lesson_slide_arrow").toggleClass('flip');
    });
  });
</script>
 <script>
  $(document).ready(function(){
    $("#post_slide").click(function(){
      $("#post_slide_content").slideToggle("slow");
      $("#post_slide_arrow").toggleClass('flip');
    });
  });
</script>
    <!-- Sidebar -->