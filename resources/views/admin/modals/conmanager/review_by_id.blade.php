<!--Modal:  Select lesson or post/project find by id -->
  <div class="modal fade" id="modal_review_by_id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Peržiūrėti</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
           <!--Review post-->
          <a href="{{ route('post.search_id') }}"><button type="button" class="btn btn-secondary" >Projektą</button></a>
          <!--Review lesson-->
          <a href="{{ route('lesson.search_id') }}"><button type="button" class="btn btn-primary">Pamoką</button></a>
        </div>
      </div>
    </div>
  </div>
<!--Select lesson or post/project find by id -->