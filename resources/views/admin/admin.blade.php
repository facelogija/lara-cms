<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Valdymo skydas Arduinopagalba.lt</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/admin/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/admin/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/admin/style.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
<body> 
    <div class="container-for-admin">
<!--Main Navigation-->
  <header>

    <!-- Navbar -->
    @include('admin.layouts.navbar') 
    <!-- Navbar -->

    <!-- Sidebar -->
    @include('admin.layouts.left_menu')
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->
  @include('footerview')
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Valdymo panelė</a>

          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Ieškoti..." aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fa fa-search"></i>
            </button>

          </form>

        </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-9 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <canvas id="visitsCompareChart_main"></canvas>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">

          <!--Card-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header text-center">
              Lankomumas pagal valstybes
            </div>

            <!--Card content-->
            <div class="card-body">

              <canvas id="visitorsCountrysChart_main"></canvas>

            </div>

          </div>
          <!--/.Card-->

          <!--Card-->
          <div class="card mb-4">

            <!--Card content-->
            <div class="card-body">
 
              <!-- List group links -->
              <div class="list-group list-group-flush">
                <a data-toggle="modal" data-target="#modal_lastWeekUploads" class="list-group-item list-group-item-action waves-effect" >Įkeltas turinys
                  <span class="badge badge-success badge-pill pull-right">{{ $upploadsInWeek }}
                    <i class="fa fa-arrow-up ml-1"></i>
  
                  </span>
                </a>
                <a data-toggle="modal" data-target="#modal_suspendedUploads" class="list-group-item list-group-item-action waves-effect">Sustabdytas turinys
                  <span class="badge badge-danger badge-pill pull-right">{{ $inactiveNow }}
                    <i class="fa fa-arrow-down ml-1"></i>                
                  </span>
                </a>
              </div>
              <!-- List group links -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-xl-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <!-- Table  -->
              <table class="table table-hover">
                <!-- Table head -->
                <thead class="blue-grey lighten-4">
                  <tr>
                    <td class="md_dont_show">Numeris#</td>
                    <th>Pavadinimas</th>
                    <th>Data</th>
                    <th>Kategorija</th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  @foreach ($lastThreeLessons as $lesson) 
                  <tr>   
                    <th class="md_dont_show" scope="row"><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $loop->iteration }}</a></th>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->title }}</a></td>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->created_at }}</a></td>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->type }}</a></td>
                  </tr>
                  @endforeach
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table  -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-xl-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <!-- Table  -->
              <table class="table table-hover">
                <!-- Table head -->
                <thead class="blue lighten-4">
                  <tr>
                    <th class="md_dont_show">Numeris#</th>
                    <th>Pavadinimas</th>
                    <th>Data</th>
                    <th>Kategorija</th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  @foreach ($lastThreePosts as $post)
                  <tr class="cursor_pointer" onclick="window.location='{{ route('post.review_id', $post->id) }}'">
                    <th class="md_dont_show" scope="row"><a href="{{route('post.review_id', $post->id)}}">{{ $loop->iteration }}</a></th>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->title }}</a></td>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->created_at }}</a></td>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->type }}</a></td>
                  </tr>
                  @endforeach
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table  -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-12 col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header">Paskutinės operacijos</div>
            <!--Card content-->
            <div class="card-body">
              <table class="table table-hover overflow_scroll">
                <!-- Table head -->
                <thead class="blue lighten-4">
                  <tr>
                    <th class="md_dont_show">Numeris#</th>
                    <th>Kliento pavadinimas</th>
                    <th>Dokumento nr.</th>
                    <th class="md_dont_show">Mokesčiai %</th>
                    <th class="lg_dont_show">Kategorija</th>
                    <th class="lg_dont_show">Operacija sukurta</th>
                    <th>Suma €</th>
                  </tr>
                </thead>
                <!-- Table head -->
                <!-- Table body -->
                <tbody>
                  @foreach ($operations as $operation)
                  <tr class="cursor_pointer" onclick="window.location='{{ route('budget.operation.show', $operation->id) }}'">
                    <th class="md_dont_show" scope="row"><a href="{{route('budget.operation.show', $operation->id)}}">{{ $loop->iteration }}</a></th>
                    <td><a href="{{route('budget.operation.show', $operation->id)}}">{{ $operation->client_title }}</a></td>
                    <td><a href="{{route('budget.operation.show', $operation->id)}}">{{ $operation->document_nr }}</a></td>
                    <td class="md_dont_show"><a href="{{route('budget.operation.show', $operation->id)}}">{{ $operation->fees }}</a></td>
                    <td class="lg_dont_show"><a href="{{route('budget.operation.show', $operation->id)}}">{{ $operation->category }}</a></td>
                    <td class="lg_dont_show"><a href="{{route('budget.operation.show', $operation->id)}}">{{ $operation->created_at }}</a></td>
                    <td><a href="{{route('budget.operation.show', $operation->id)}}">{{ $operation->sum }}</a></td>
                  </tr>
                  @endforeach
                </tbody>
                <!-- Table body -->
              </table>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>

@include('admin.modals.statistics.lastWeekUploads')
@include('admin.modals.statistics.suspendedUploads')
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="" target="_blank"
        role="button">Atsisiųskite instrukciją
        <i class="fa fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Skaityti instrukciją
        <i class="fa fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2021 Visos teisės saugomos:
      <a href="https://arduinopagalba.lt" target="_blank"> Arduinopagalba.lt </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
</div>

    <!-- jQuery -->
    <script type="text/javascript" src="js/admin/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/admin/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/admin/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/admin/mdb.min.js"></script>
    <!-- Your custom scripts
    <script type="text/javascript" src="js/admin/script.js"></script>-->
    <script type="text/javascript" src="js/admin/charts/main_page_charts.js"></script>
</body>
</html>