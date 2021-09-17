<!--Modal:  Select lesson or post creation -->
<div class="modal fade" id="modal_select_stats_period" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">PASIRINKITE ATASKAITOS PERIODĄ</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="white-text">&times;</span>
      </button>
    </div>
    <div class="modal-footer">
      <!--Create post-->
      <a href="{{ route('admin.statistics') }}"><button type="button" class="btn {{ (request()->segment(3) == '') ? 'btn-secondary' : 'btn-primary' }}" >PASTAROSIOS 7 D.</button></a>
       <!--Create post-->
       <!--Create lesson-->
      <a href="{{ route('admin.statistics.lastMonth') }}"><button type="button" class="btn {{ (request()->segment(3) == 'lastmonth') ? 'btn-secondary' : 'btn-primary' }}">PASTAROSIOS 30 D.
      <!--Create lesson-->
      </button></a>
      <a href="{{ route('admin.statistics.lastYear') }}"><button type="button" class="btn {{ (request()->segment(3) == 'lastyear') ? 'btn-secondary' : 'btn-primary' }}">PASTARIEJI METAI
      <!--Create lesson-->
      </button></a>
    </div>
  </div>
</div>
</div>
<!--Select lesson or post creation-->