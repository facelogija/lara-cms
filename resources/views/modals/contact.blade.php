<!-- Modal Users type chart-->
<div class="modal fade bottom" id="modal_contact" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-lg modal-notify modal-info primary-color-ard" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header primary-color-ard">
        <p class="heading lead text-uppercase">Susisiekite su mumis</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
          <p>Norėdami palikti mums pranešimą, galite pasinaudoti šia forma. Perskaitę jūsų žinutę, su Jumis susisieksime. Taip pat galite su mumis susisiekti siųsdami laiškus el. pašto adresu <u>info@arduinopagalba.lt</u></p>
        <form name="contact" class="text-center" style="color: #757575;" action="{{route('sentmail')}}" enctype="multipart/form-data" method="post" >
            @csrf
            <div class="form-row">
                <div class="col">
                <!-- Name -->
                    <div class="md-form">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Jūsų vardas">
                    </div>
                </div>
                <div class="col">
                <!-- Subject -->
                    <div class="md-form">
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Tema">
                    </div>
                </div>
            </div>
            <!-- Video url  -->
            <div class="md-form">
            <input placeholder="Jūsų el. pašto adresas" type="text" id="email" name="email" class="form-control">
             <span id="emailcheck" class="text-warning"></span>
            </div>
            <div class="md-form">
            <textarea placeholder="Jūsų žinutė" type="text" id="content" name="content" class="form-control"></textarea>
            </div>
            <div style="display:none;" id="error_msg" class="alert alert-warning"></div>
                    <!-- Sent data to controller -->
                    <button onclick="return validateForm();" role="button" class="btn btn-outline-ard btn-rounded btn-block my-4 waves-effect z-depth-0">Siųsti</button>
            </form>
      </div>
      <!--Body-->

    </div>
    <!--/.Content-->
  </div>
  <script type="text/javascript">
      function validateForm() {
        var emptyValue = document.getElementById("error_msg");
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var emailcheck = document.getElementById("emailcheck");
        var name = document.forms["contact"]["name"].value;
        var subject = document.forms["contact"]["subject"].value;
        var email = document.forms["contact"]["email"].value;
        var content = document.forms["contact"]["content"].value;
        if (name === "", subject === "", email === "", content === "") {
          emptyValue.style.display = "block";
          emptyValue.innerHTML = 'Klaida neužpildėte visų privalomų laukų.';
          return false;
        }
        if (!(re.test(email))) {
           emailcheck.innerHTML = 
           'Privalote pateikti el. pašto adresą.';
          return false;
        }
        return true; 
      }
</script>
</div>
<!-- Modal Users type chart-->
