  <footer class="page-footer text-center font-small primary-color-ard darken-2 mt-md-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-3 pb-3">
      <a class="btn btn-outline-white" data-toggle="modal" data-target="#modal_contact"
        role="button">Susisiekite su mumis
        <i class="fas fa-envelope ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="{{ route('about') }}" role="button">Apie projektą
        <i class="fa fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action my-4-->

    <hr class="mt-0 mb-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="#" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
      
       <a href="#" target="_blank">
        <i class="fab fa-linkedin mr-3"></i>
      </a>
      <a href="#" target="_blank">
        <i class="fab fa-instagram mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-2">
      © 2021 Visos teisės saugomos:
      <a href="{{ route('main') }}" target="_blank"> Arduinopagalba.lt </a>
    </div>
    <!--/.Copyright-->
    
    @include('modals.contact')

  </footer>
	



