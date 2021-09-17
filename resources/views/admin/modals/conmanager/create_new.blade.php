<!--Modal:  Select lesson or post creation -->
<div class="modal fade" id="modal_create_new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Kurti naują</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="white-text">&times;</span>
      </button>
    </div>
    <div class="modal-footer">
      <!--Create post-->
      <a href="{{ route('post.create') }}"><button type="button" class="btn btn-secondary" >Projektą</button></a>
       <!--Create post-->
       <!--Create lesson-->
      <a href="{{ route('lesson.create') }}"><button type="button" class="btn btn-primary">Pamoką
      <!--Create lesson-->
      </button></a>
    </div>
  </div>
</div>
</div>
<!--Select lesson or post creation-->