<div class="modal fade left" id="leftmenu_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-full-height modal-left modal-notify" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header primary-color-ard">
          <p class="heading lead">MENIU</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <div class="d-flex justify-content-center mt-3"><img style="width: 100px;" src="https://arduinopagalba.lt/public/uploads/Logo.jpg">
            </div>
            <a class="navbar-brand waves-effect d-flex justify-content-center mb-3" href="{{ route('main') }}">
                <strong class=" ard-text font-italic"><span style="color:black;">Arduinopagalba</span>.lt</strong>
            </a>
          </div>
            <div class="list-group list-group-flush">
              <a href="{{ route('main') }}" class="list-group-item list-group-item-action waves-effect ard-text">
               </i>Pagrindinis puslapis</a>

                <a id="lesson_slide_mob" class="{{ (request()->segment(1) == 'lesson') ? 'ard-active' : '' }} list-group-item list-group-item-action waves-effect">
                  <i class="fas fa-book-reader mr-3"></i>Pamokos<i id="lesson_slide_arrow_mob" class="fas fa-chevron-down float-right menu_arrow"></i></a>
                <div class="not-display" id="lesson_slide_content_mob">
                @foreach ($lessons as $lesson)
                  <a href="{{ route('lesson.show', $lesson->id ) }}" class="{{ (request()->segment(2) == $lesson->id) ? 'ard-text' : '' }} list-group-item list-group-item-action  waves-effect list-item-bottom-border ml-2">
                  {{ $lesson->title }}</a>

                @endforeach
              </div>
               <a id="post_slide_mob" class="{{ (request()->segment(1) == 'post') ? 'ard-active' : '' }} list-group-item list-group-item-action waves-effect">
                  <i class="fas fa-microchip mr-3"></i></i>Projektai<i id="post_slide_arrow_mob" class="fas fa-chevron-down float-right menu_arrow"></i></a>
                <div class="not-display" id="post_slide_content_mob">
                @foreach ($posts as $post)
                  <a href="{{ route('post.show', $post->id) }}" class="{{ (request()->segment(2) == $post->id) ? 'ard-text' : '' }} list-group-item list-group-item-action  waves-effect list-item-bottom-border ml-2">
                  {{ $post->title }}</a>

                @endforeach
            </div>

  

        <a href="{{ route('admin.conmanager') }}" class="{{ (request()->segment(2) == 'conmanager') ? 'active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fa fa-table mr-3"></i>Straipsniai</a>
        <a href="{{ route('about') }}" class="{{ (request()->segment(2) == 'settings') ? 'active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fa fa-money mr-3"></i>Apie mus</a>
            </div>
        </div>

<script>
  $(document).ready(function(){
    $("#lesson_slide_mob").click(function(){
      $("#lesson_slide_content_mob").slideToggle("slow");
      $("#lesson_slide_arrow_mob").toggleClass('flip');
    });
  });
</script>
 <script>
  $(document).ready(function(){
    $("#post_slide_mob").click(function(){
      $("#post_slide_content_mob").slideToggle("slow");
      $("#post_slide_arrow_mob").toggleClass('flip');
    });
  });
</script>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <a role="button" class="btn btn-outline-ard waves-effect" data-dismiss="modal">Išeiti</a>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>