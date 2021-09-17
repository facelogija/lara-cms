<!-- Edit profile modal-->
<div class="modal fade" id="edit_profile_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header bg_deep_blue">
        <p class="heading lead">Profilio redagavimas</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
         <form  name="userInfo" class="text-center" style="color: #757575;" action="{{ route('profile.edit') }}" enctype="multipart/form-data" method="post" >
              @csrf
            <div class="form-row">
                <div class="col">
                    <!-- Title -->
                    <div class="md-form">
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') ?? $user->name }}">
                        <span id="nameCheck" class="text-warning"></span>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="col">
                    <!-- Title -->
                    <div class="md-form">
                        <input style="color: #00000098;" type="date" id="b_date" name="b_date" class="form-control" value="{{ old('b_date') ?? $user->b_date }}">
                    </div>
                </div>
                <div class="col">
                    <!-- Author -->
                    <div class="md-form">
                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ old('phone_number') ?? $user->phone_number ?? 'Tel. numeris'  }}">
                        <span id="ph_numberCheck" class="text-warning"></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- Title -->
                    <div class="md-form">
                        <input type="text" id="personal_phone_number" name="personal_phone_number" class="form-control" value="{{ old('personal_phone_number') ?? $user->personal_phone_number ?? 'Asmeninis tel. numeris' }}">
                    <span id="per_numberCheck" class="text-warning"></span>
                    </div>
                </div>
                <div class="col">
                    <!-- Author -->
                    <div class="md-form">
                        <input type="text" id="address" name="address" class="form-control" value="{{ old('address') ?? $user->address ?? 'Adresas' }}">
                    <span id="addressCheck" class="text-warning"></span>
                    </div>
                </div>
            </div>
            <div style="display:none;" id="error_for_empty_values" class="alert alert-warning">
            </div>
      <div class="modal-footer">
        <button onclick="return validateUserInfo()" role="button" class="btn btn-deep_blue">Įrašyti duomenis</button>
        <a role="button" class="btn btn-outline-deep_blue waves-effect" data-dismiss="modal">Atšaukti</a>
      </div>
    </form>
<script type="text/javascript">
      function validateUserInfo() {
        var emptyValues = document.getElementById("error_for_empty_values");
        var nameCheck = document.getElementById("nameCheck");
        var ph_numberCheck = document.getElementById("ph_numberCheck");
        var per_numberCheck = document.getElementById("per_numberCheck");
        var addressCheck = document.getElementById("addressCheck");
        var name = document.forms["userInfo"]["name"].value;
        var b_date = document.forms["userInfo"]["b_date"].value;
        var phone_number = document.forms["userInfo"]["phone_number"].value;
        var personal_phone_number = document.forms["userInfo"]["personal_phone_number"].value;
        var address = document.forms["userInfo"]["address"].value;
        if (name === "" || b_date === "" || phone_number === "" || phone_number === "Tel. numeris" || personal_phone_number === "" || personal_phone_number === "Asmeninis tel. numeris" || address === "" || address === "Adresas") {
          emptyValues.style.display = "block";
          emptyValues.innerHTML = 'Klaida, neužpildėte visų privalomų laukų.';
          return false;
        }
        if (name.length > 50) {
          nameCheck.innerHTML = 'Vardas negali būti ilgesnis nei 50 simbolių.';
          return false;
        }
        if (phone_number.length > 15) {
          ph_numberCheck.innerHTML = 'Nurodėte neteisngą telefono numerį.';
          return false;
        }
        if (personal_phone_number.length > 15) {
          per_numberCheck.innerHTML = 'Nurodėte neteisngą telefono numerį.';
          return false;
        }
        if (address.length > 100) {
          addressCheck.innerHTML = 'Nurodėte neteisngą adresą.';
          return false;
        }
        return true; 
      }
</script>
    </div>

    </div>
    <!--name === "", b_date === "", phone_number === "" || phone_number == "Tel. numeris", personal_phone_number === "" || personal_phone_number == "Asmeninis tel. numeris", address === "" || address == "Adresas"-->
  </div>
</div>
<!-- Central Modal Fluid Success-->