<!-- Central Modal Fluid Search by Title-->
<div class="modal fade" id="operations_search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-notify modal-primary" role="document">
    <!--Content-->
    <div class="modal-content">
      <div class="modal-header">
        <p class="heading lead">OPERACIJOS PAIEŠKA</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="{{ route('budget.operation.search') }}" enctype="multipart/form-data" method="post" >
      @csrf
        <div class="modal-body">
          <div class="form-row">
            <div class="col">
              <div class="alert alert-warning" role="alert">
              Atkreipkite dėmesį, kad ieškomos operacijos dokumento numeris privalo būti įvestas teisingai, kitu atveju paieškos rezultatai bus klaidingi!
              </div>
              <div class="md-form">
                <input type="text" id="document_nr" name="document_nr" class="form-control" placeholder="Įveskite ieškomo dokumento numerį">
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
<!-- Central Modal Fluid Search by Title-->