<!-- Full Height modal right admin menu-->
@guest
  @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
  @endif
   @else
              <div class="modal fade right" id="fluidModalRightAdminMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-full-height modal-right modal-notify" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header bg_deep_blue">
                      <p class="heading lead">{{ Auth::user()->username }}</p>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                        <img style="width: 60px; height: auto;" src="{{ Auth::user()->userImage() }}" class="img-fluid" alt="">
                        <p>Vartotojo vardas: {{ Auth::user()->name }}
                        </p>
                      </div>
                      <ul class="list-group z-depth-0">
                        <li class="list-group-item justify-content-between"><a href="{{ route('admin.profile') }}">
                          Profilis
                          <span class="float-right deep-blue"><i class="fas fa-arrow-right"></i></span>
                        </a></li>
                        <li class="list-group-item justify-content-between"><a href="{{ route('admin.profile') }}">
                          Redaguoti asmeninę informaciją
                         <span class="float-right deep-blue"><i class="fas fa-arrow-right"></i></span>
                        </a></li>
                        <li class="list-group-item justify-content-between"><a href="{{ route('admin.settings') }}">
                          Sauga
                          <span class="float-right deep-blue"><i class="fas fa-arrow-right"></i></span>
                        </a></li>
                        <li class="list-group-item justify-content-between"><a href="{{ route('admin.conmanager') }}">
                          Turinio paieška
                          <span class="float-right deep-blue"><i class="fas fa-arrow-right"></i></span>
                        </a></li>
                        <li class="list-group-item justify-content-between"><a href="{{ route('admin.conmanager') }}">
                          Turinio talpinimas
                          <span class="float-right deep-blue"><i class="fas fa-arrow-right"></i></span>
                        </a></li>
                      </ul>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                      <a role="button" class="btn btn-outline-deep_blue waves-effect"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Atsijungti</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
                 </form>
@endguest
              </div>


 <!-- End of right admin menu-->