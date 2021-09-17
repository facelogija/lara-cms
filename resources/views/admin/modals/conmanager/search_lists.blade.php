<!--Modal:  Select lesson or post/project-->
  <div class="modal fade" id="modal_search_list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ką norite rasti?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
          <!--Review post-->
          <a href="{{route('post.search_lists')}}"><button type="button" class="btn btn-secondary" >Projektą</button></a>
          <!--Review post-->
          <!--Review lesson-->
          <a href="{{route('lesson.search_lists')}}"><button type="button" class="btn btn-primary">Pamoką</button></a>
        </div>
      </div>
    </div>
  </div>
<!--Select lesson or post/project -->