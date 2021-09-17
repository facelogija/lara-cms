<!--Two factor confirmation-->
<div class="modal fade bottom" id="modal_twoFactorConfirmation" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead text-uppercase">Dviejų veiksnių autentifikacija</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div id="info_content">
        <p class="font-weight-bold">Kam tai reikalinga?</p>
        <p>Dviejų veiksnių autentifikacija reikalinga norint papildomai apsaugoti savo vartotojo paskyrą nuo galimybės ją užgrobti ar pasisavinti.</p>
        <p class="font-weight-bold">Kaip tai veikia?</p>
        <p>Mūsų sistema Jums siūlo dviejų veiksnių autentifikaciją naudojantis Jūsų pateitku el. pašto adresu, t. y. suvedus savo prisijungimo duomenis sistema išsiųs į Jūsų el. pašto dėžutę laišką su patvirtinimo kodu, kurį įvedę į tam skirtą lauką busite nukreipti į sistemos valdymo skydą. </p>
        </div>
        <div id="info_drop">
        <i class="fas fa-info-circle"></i>
        <i id="info_arrow" class="fas fa-angle-up text-dark menu_arrow"></i>
        </div>
         <script>
          $(document).ready(function(){
            $("#info_drop").click(function(){
              $("#info_content").slideToggle("slow");
              $("#info_arrow").toggleClass('flip');
            });
          });
        </script>
      </div>
      <!--Body-->
      <!--Footer-->
      <div class="modal-footer">
        @if (auth()->user()->two_factor_confirmation == 'false')
          <a href="{{route('admin.enabletwofactor')}}" role="button" class="btn btn-success">
            Įjungti
          </a>
        @else
          <a href="{{route('admin.enabletwofactor')}}" role="button" class="btn btn-danger">
            Išjungti
          </a>
        @endif
        <a role="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Atšaukti</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Two factor confirmationt-->