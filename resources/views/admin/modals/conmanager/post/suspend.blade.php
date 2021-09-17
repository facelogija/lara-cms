<!--Modal: confirm to suspend lesson -->
 <div class="modal fade" id="modal_suspend_post" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              @if($postq->status == 'active')
              Ar tikrai norite sustabdyti šio projekto rodymą?<span style="font-size: 14px;">(Sustabdžius turinio rodymą jį bus galima bet kada atstatyti) 
              </span>
              @elseif($postq->status == 'suspended')
              Ar tikrai norite atnaujinti šio projekto rodymą?<span style="font-size: 14px;">(Atnaujinus turinio rodymą jį bus galima bet kada sustabdyti) </span>
              @endif
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="white-text">&times;</span>
            </button>
           </div>
          <div class="modal-footer">
            <a href="{{ route('post.suspend', $postq->id) }}"><button type="button" class="btn btn-secondary" >TAIP</button></a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">NE, ATŠAUKTI
            </button>
          </div>
      </div>
    </div>
  </div>
<!--Modal: confirm to suspend lesson -->

