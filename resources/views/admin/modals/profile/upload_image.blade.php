<!--upload image-->
<div class="modal fade" id="modal_upload_image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Įkelti naują profilio nuotrauką</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
        <form name="getImage" class="text-center" style="color: #757575;" action="{{ route('profile.updateimage') }}" enctype="multipart/form-data" method="post" >
        @csrf
        <input type="file" name="image" id="image">
        <div class="error_for_empty">
          <p class="mb-0" id="error_for_empty"></p>
        </div>

      <div class="modal-footer">
        <button onclick="return IsEmpty();" role="button" class="btn btn-deep_blue">Įkelti</button>
        <a role="button" class="btn btn-outline-deep_blue waves-effect" data-dismiss="modal">Atšaukti</a>
      </div>
<script>
  function IsEmpty() {
  if (document.forms['getImage'].image.value === "") {
    error_for_empty  = "Nepasirinkote jokio failo, pasirinkite profilio nuotrauką.";
    document.getElementById("error_for_empty").innerHTML = error_for_empty;
    return false;
  }
  return true;
}
</script>
    </form>
    </div>
  </div>
</div>