<!--Modal: confirm to delete lesson -->
 <div class="modal fade" id="modal_delete_post" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Ar tikrai norite ištrinti įrašą?<br>
              <span style="font-size: 14px;">(Įrašas bus ištrintas negrįžtamai)</span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="white-text">&times;</span>
            </button>
           </div>
          <div class="modal-footer">
            <a href="{{ route('post.delete', $postq->id) }}"><button type="button" class="btn btn-danger" >TAIP, IŠTRINTI</button></a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">NE, ATŠAUKTI</button>
          </div>
      </div>
    </div>
  </div>
<!--Modal: confirm to delete lesson -->