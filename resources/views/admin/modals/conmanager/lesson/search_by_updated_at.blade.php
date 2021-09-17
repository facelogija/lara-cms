<!-- Central Modal Fluid Search by Type-->
<div class="modal fade" id="centralModal_search_lesson_by_updated_at" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-notify modal-primary" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">PAMOKOS PAIEŠKA PAGAL ATNAUJIMO DATĄ</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="{{ route('lesson.search') }}" enctype="multipart/form-data" method="post" >
      @csrf
        <div class="modal-body">
          <div class="form-group row">
            <div class="col-12">
              <label>Pasirinkite atnaujimo datą nuo</label>
              <input class="form-control" type="date" value="2020-12-01" id="date_from_updated" name="date_from_updated">
            </div>
          </div>
          <div class="form-group row">
              <div class="col-12">
                <label>Pasirinkite atnaujimo datą iki</label>
                <input class="form-control" type="date" value="2020-12-01" id="date_to_updated" name="date_to_updated">
              </div>
          </div>
          <div class="modal-footer">
            <button role="button" class="btn btn-primary">IEŠKOTI
            <i class="fa fa-diamond ml-1"></i>
            </button>
            <a role="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">ATŠAUKTI</a>
          </div>
        </div>
      </form>
      <!-- Form -->
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Fluid Search by Type-->