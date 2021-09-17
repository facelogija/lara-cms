<!-- Central Modal Fluid Search by Type-->
<div class="modal fade" id="centralModal_search_lesson_by_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-notify modal-primary" role="document">
    <!--Content-->
      <div class="modal-content">
        <div class="modal-header">
          <p class="heading lead">PAMOKOS PAIEŠKA PAGAL </p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="{{ route('lesson.search') }}" enctype="multipart/form-data" method="post" >
          @csrf
          <div class="modal-body">
            <div class="form-row">
              <div class="col">
                <div class="md-form">
                  <select id="type" name="type" class="mdb-select without-border">
                    <option value="" disabled selected>Pasirinkite kategoriją</option>
                    <option value="arduino">Arduino</option>
                    <option value="robotics">Robotika</option>
                    <option value="automatics">Automatika</option>
                    <option value="electronics">Elektronika</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
            <div class="modal-footer">
              <button role="button" class="btn btn-primary">IEŠKOTI
              <i class="fa fa-diamond ml-1"></i>
              </button>
              <a role="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">ATŠAUKTI</a>
            </div>
        </form>
        <!-- Form -->
      </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Fluid Search by Type-->