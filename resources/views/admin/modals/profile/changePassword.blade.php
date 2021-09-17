<!-- Edit profile modal-->
<div class="modal fade" id="modal_changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header bg_deep_blue">
        <p class="heading lead">Slaptažodžio keitimas</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
         <form  name="userPassword" class="text-center" style="color: #757575;" action="{{ route('profile.changepassword') }}" enctype="multipart/form-data" method="post" >
              @csrf
            <div class="form-row">
                <div class="col col-sm">
                    <!-- Title -->
                    <div class="md-form {{ $errors->has('oldPassword') ? 'has-error' : '' }}">
                        <input type="password" id="oldPassword" name="oldPassword" class="form-control" placeholder="Įveskite savo slaptažodį" >
                    </div>
                </div>

            </div> 
            <div class="form-row">
                <div class="col-sm-12 col-md-6">
                    <!-- Title -->
                    <div class="md-form {{ $errors->has('newPassword') ? 'has-error' : '' }}">
                        <input style="color: #00000098;" type="password" id="newPassword" name="newPassword" class="form-control" placeholder="Įveskite naują slaptažodį">
                        <span id="newPasswordCheck" class="text-warning"></span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <!-- Author -->
                    <div class="md-form">
                        <input type="password" id="confirmation" name="confirmation" class="form-control" placeholder="Pakartokite naują slaptažodį">
                        <span id="confirmationCheck" class="text-warning"></span>
                    </div>
                </div>
            </div>
            <div style="display:none;" id="error_msg" class="alert alert-warning">
            </div>
      <div class="modal-footer">
        <button onclick="return validateUserPassword();"  role="button" class="btn btn-deep_blue">Pakeisti slaptažodį</button>
        <a role="button" class="btn btn-outline-deep_blue waves-effect" data-dismiss="modal">Atšaukti</a>
      </div>
<script type="text/javascript">
      function validateUserPassword() {
        var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
        var emptyValue = document.getElementById("error_msg");
        var newPasswordCheck = document.getElementById("newPasswordCheck");
        var confirmationCheck = document.getElementById("confirmationCheck");
        var oldPassword = document.forms["userPassword"]["oldPassword"].value;
        var newPassword = document.forms["userPassword"]["newPassword"].value;
        var confirmation = document.forms["userPassword"]["confirmation"].value;
        if (oldPassword === "", newPassword === "", confirmation === "") {
          emptyValue.style.display = "block";
          emptyValue.innerHTML = 'Klaida neužpildėte visų privalomų laukų.';
          return false;
        }
        if (!(re.test(newPassword))) {
           newPasswordCheck.innerHTML = 
           'Slaptažodį privalo sudaryti mažiausiai 8 simboliai. Slaptažodis privalo būti sudarytas iš bent vienos didžiosios ir mažosios raidės, privaloma panaudoti ir bent vieną skaičių.';
          return false;
        }
        if (!(newPassword == confirmation)) {
          confirmationCheck.innerHTML = 'Slaptažodžiai nesutampa.';
          return false;
        }
        return true; 
      }
</script>

    </form>

    </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Fluid Success-->