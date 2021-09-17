<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/admin/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="/css/admin/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="/css/admin/style.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body>
  <!-- Navbar -->
    @include('admin.layouts.navbar') 
  <!-- Navbar -->
  <!-- Sidebar -->
    @include('admin.layouts.left_menu')
  <!-- Sidebar -->
  <!--Main layout-->
@include('footerview')
<!--Main-->
<main class="pt-5 mx-lg-5">
  <!--Container-->
  <div class="container-fluid mt-5">
    <!--Card_SVETAINĖS TURINYS PAGAL KATEGORIJAS-->
    <div class="card mb-3">
      <div class="card-body">
        <div class="row"><div class="col">SVETAINĖS TURINYS PAGAL KATEGORIJAS</div></div>
        <hr>
        <div class="row mb-3">
          <div class="col-md-6">
            <canvas id="lessonsByCategoryChart"></canvas>
          </div>
          <div class="col-md-6">
            <canvas id="postsByCategoryChart"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!--Card_SVETAINĖS TURINYS PAGAL KATEGORIJAS-->
    <!--Card_SVETAINĖS TURINYS PAGAL PAGAL PATALPINIMO LAIKĄ-->
    <div class="card mb-3">
      <div class="card-body">
        <div class="row"><div class="col">SVETAINĖS TURINYS PAGAL PAGAL PATALPINIMO LAIKĄ</div></div>
        <hr>
        <div class="row">
          <div class="col-md-8 mt-5">
            <canvas id="contentByMonthChart"></canvas>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col">
                <div class="card mb-4">
                    <!--Card content-->
                    <div class="card-body">
                      <div class="row"><div class="col">PASTARŲJŲ 30 DIENŲ STATISTIKA</div></div>
                      <hr>
                      <!-- List group links -->
                      <div class="list-group list-group-flush">
                        <a data-toggle="modal" data-target="#modal_lastMonthUploads" class="list-group-item list-group-item-action waves-effect">Įkeltas turinys
                          <span class="badge badge-success badge-pill pull-right">{{ $upploadsInMonth }}
                            <i class="fa fa-arrow-up ml-1"></i>

                          </span>
                        </a>
                        <a data-toggle="modal" data-target="#modal_suspendedUploads" class="list-group-item list-group-item-action waves-effect">Suspenduotas turinys
                          <span class="badge badge-danger badge-pill pull-right">{{ $inactiveNow }}
                            <i class="fa fa-arrow-down ml-1"></i>
                          </span>
                        </a>
                      </div>
                      <!-- List group links -->
                    </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-md">
                <div class="card mb-4">
                    <!--Card content-->
                    <div class="card-body">
                      <div class="row"><div class="col">PASTARŲJŲ 7 DIENŲ STATISTIKA</div></div>
                      <hr>
                      <!-- List group links -->
                      <div class="list-group list-group-flush">
                        <a data-toggle="modal" data-target="#modal_lastWeekUploads" class="list-group-item list-group-item-action waves-effect">Įkeltas turinys
                          <span class="badge badge-success badge-pill pull-right">{{ $upploadsInWeek }}
                            <i class="fa fa-arrow-up ml-1"></i>

                          </span>
                        </a>
                        <a data-toggle="modal" data-target="#modal_suspendedUploads" class="list-group-item list-group-item-action waves-effect">Suspenduotas turinys
                          <span class="badge badge-danger badge-pill pull-right">{{ $inactiveNow }}
                            <i class="fa fa-arrow-down ml-1"></i>
                          </span>
                        </a>
                      </div>
                      <!-- List group links -->
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Card_SVETAINĖS TURINYS PAGAL PAGAL PATALPINIMO LAIKĄ-->
    <!--Card_SVETAINĖS LANKOMUMAS PER PASTARASIAS 7 DIENAS-->
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-8 align-middle">SVETAINĖS LANKOMUMAS PER PASTARASIAS 7 DIENAS</div>
          <div class="col-4"><button data-toggle="modal" data-target="#modal_select_stats_period" class="btn btn-secondary btn-sm btn-outline-dark float-right mb-0 ml-3">Pasirinkite ataskaitos laikotarpį</button></div>
        </div>
        <hr>
          <div class="row mb-3">
          <div class="col-lg-6 col-md-6 mb-3">
            <!--Card_SVETAINĖS LANKOMUMAS-->
            <div class="card">
            <!-- Card header -->
              <div class="card-header text-center">
                SVETAINĖS LAKOMUMAS
              </div>
              <!--Card content-->
              <div class="card-body">
                <canvas id="visitorsSevenDaysChart"></canvas>
              </div>
            </div>
            <!--SVETAINĖS LAKOMUMAS-->
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="card">
            <!-- Card header -->
              <div class="card-header text-center">
                SVETAINĖS LANKYTOJAI PAGAL NARŠYKLES
              </div>
              <!--Card content-->
              <div class="card-body">
                <canvas id="usedBrowserChart"></canvas>
              </div>
            </div>
          </div>
        </div>
          <!--Grid row-->
          <div class="row wow fadeIn">
            <!--Grid column-->
            <div class="col-md-6 mb-4">
              <!--Card-->
              <div class="card">
                <div class="card-header text-center">
                PERŽIŪROS PAGAL ŠALTINĮ
                </div>
                <!--Card content-->
                <div class="card-body">
                  <!-- Table  -->
                  <div class="table pl-1 pr-1">
                    <div class="row light-grey-table-header pt-3 pb-3 mb-3">
                      <div class="col-sm-1 col-1">#</div>
                      <div class="col-sm-6 col-5">Šaltinis</div>
                      <div class="col-sm-5 col-4">Peržiūrų sk.</div>
                    </div>
                    <div class="table-content not-display" id="visitorsByReferres_table">
                    @foreach ($visitorsByReferres as $referre)
                      <div class="row">
                        <div class="col-sm-1 col-1">{{ $loop->iteration }}</div>
                        <div class="col-sm-6 col-5 text-capitalize">
                        @if ($referre['url'] == '(direct)')
                        Tiesiogiai
                        @else
                        {{$referre['url']}}
                        @endif
                        </div>
                        <div class="col-sm-5 col-4 text-capitalize">{{ $referre['pageViews'] }}</div>
                      </div>
                      <hr>
                    @endforeach
                    </div>
                    <div id="open_visitorsByReferres_table" class="row text-center d-flex justify-content-center">
                      <i id="open_visitorsByReferres_table_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                  </div>
                  <script>
                  $(document).ready(function(){
                    $("#open_visitorsByReferres_table").click(function(){
                      $("#visitorsByReferres_table").slideToggle("slow");
                      $("#open_visitorsByReferres_table_arrow").toggleClass('flip');
                    });
                  });
                </script>
                  <!-- Table  -->
                  </div>
                </div>
              </div>
              <!--/.Card-->
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-6 mb-4">
              <!--Card-->
              <div class="card">
              <!-- Card header -->
              <div class="card-header text-center">
                PERŽIŪRŲ SKAIČIUS PAGAL PUSLAPIUS
              </div>
                <!--Card content-->
                <div class="card-body">
                  <!-- Table  -->
                  <div class="table pl-1 pr-1">
                    <div class="row light-grey-table-header pt-3 pb-3 mb-3">
                      <div class="col-sm-1 col-1">#</div>
                      <div class="col-sm-6 col-5">Pavadinimas</div>
                      <div class="col-sm-5 col-4">Peržiūrų sk.</div>
                    </div>
                    <div class="table-content not-display" id="pageViews_table">
                    @foreach ($pageViews as $page)
                      <div class="row">
                        <div class="col-sm-1 col-1">{{ $loop->iteration }}</div>
                        <div class="col-sm-6 col-5">{{$page['url']}}</div>
                        <div class="col-sm-5 col-4">{{ $page['pageViews'] }}</div>
                      </div>
                      <hr>
                    @endforeach
                    </div>
                    <div id="open_pageViews_table" class="row text-center d-flex justify-content-center">
                      <i id="open_pageViews_table_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                  </div>
                 <script>
                  $(document).ready(function(){
                    $("#open_pageViews_table").click(function(){
                      $("#pageViews_table").slideToggle("slow");
                      $("#open_pageViews_table_arrow").toggleClass('flip');
                    });
                  });
                </script>
              </div>
                  <!-- Table  -->
                </div>
              </div>
              <!--/.Card-->
            </div>
            <!--Grid column-->
            <div class="row wow fadeIn mb-3">
              <div class="col-lg-4 mb-3">
                <div class="card">
                <!-- Card header -->
                  <div class="card-header text-center">
                    LANKYTOJŲ NAUDOJAMA ĮRANGA
                  </div>
                  <!--Card content-->
                  <div class="card-body padding_bottom_0">
                    <canvas id="visitorsDevicesChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="open_visitors_device_content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($device as $deviceWithUsers)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-5">{{ $deviceWithUsers['0'] }}</div>
                            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-4">{{ $deviceWithUsers['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_visitors_device" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="open_visitors_device_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_visitors_device").click(function(){
                            $("#open_visitors_device_content").slideToggle("slow");
                            $("#open_visitors_device_arrow").toggleClass('flip');
                          });
                        });
                      </script>
                    <!--Card dropdow content-->
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3">
                <div class="card">
                <!-- Card header -->
                  <div class="card-header text-center">
                    SVETAINĖS LANKYTOJAI PAGAL VALSTYBĘ
                  </div>
                  <!--Card content-->
                  <div class="card-body padding_bottom_0">
                    <canvas id="visitorsCountrysChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="open_visitors_countrys_content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($locations as $location)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-5">{{ $location['0'] }}</div>
                            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-4">{{ $location['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_visitors_countrys" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="open_visitors_countrys_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_visitors_countrys").click(function(){
                            $("#open_visitors_countrys_content").slideToggle("slow");
                            $("#open_visitors_countrys_arrow").toggleClass('flip');
                          });
                        });
                      </script>
                    <!--Card dropdow content-->
                  </div>
                </div>
              </div>
              <div class="col-lg-4 ">
                <div class="card">
                <!-- Card header -->
                  <div class="card-header text-center">
                    SVETAINĖS LANKYTOJAI PAGAL MIESTĄ
                  </div>
                  <!--Card content-->
                  <div class="card-body padding_bottom_0">
                    <canvas id="usersFromCitysChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="open_visitors_citys_content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($allclearedCitys as $allcity)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-5">{{ $allcity['0'] }}</div>
                            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-4">{{ $allcity['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_visitors_citys" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="open_visitors_citys_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_visitors_citys").click(function(){
                            $("#open_visitors_citys_content").slideToggle("slow");
                            $("#open_visitors_citys_arrow").toggleClass('flip');
                          });
                        });
                      </script>
                    <!--Card dropdow content-->
                  </div>
                </div>
              </div>
            </div>
            <div class="row wow fadeIn mb-3">
              <div class="col-lg-8 mb-3">
                <div class="card">
                  <div class="card-header text-center">
                    LANKYTOJŲ AKTYVUMAS SKIRTINGOMIS VALANDOMIS
                  </div>
                  <div class="card-body">
                        <canvas id="usersActivityByHoursChart"></canvas>
                  </div>
                </div>
              </div>
               <div class="col-lg-4">
                <div class="card mb-3">
                  <div class="card-header text-center">
                    LANKYTOJŲ AKTYVUMAS SKIRTINGOMIS SAVAITĖS DIENOMIS
                  </div>
                  <div class="card-body">
                        <canvas id="usersActivityByDaysChart"></canvas>
                  </div>
                 </div>
                <div class="col-lg-4">  
                </div>
                  <div class="card mb-4">
                    <!--Card content-->
                    <div class="card-body">
                      <div class="row"><div class="col">LANKYTOJAI PAGAL KATEGORIJAS</div></div>
                      <hr>
                      <!-- List group links -->
                      <div class="list-group list-group-flush">
                        @foreach ($userTypesArr as $userTypes)
                          @foreach ($userTypes as $userTypeKey => $userTypeValue)
                          <a data-toggle="modal" data-target="#modal_usersTypesChart" class="list-group-item list-group-item-action waves-effect">
                              @if ($userTypeKey == 'New Visitor')
                              Nauji apsilankymai
                              <span class="badge badge-info badge-pill pull-right">{{ $userTypeValue }}
                                <i class="fa fa-arrow-up ml-1"></i>
                              </span>
                              @elseif ($userTypeKey == 'Returning Visitor')
                              Sugrįžtantys apsilankymai
                              <span class="badge badge-success badge-pill pull-right">{{ $userTypeValue }}
                                <i class="fa fa-arrow-up ml-1"></i>
                              </span>
                              @else 
                              Nenustatyta
                              <span class="badge badge-success badge-pill pull-right">{{ $userTypeValue }}
                                <i class="fa fa-arrow-alert ml-1"></i>
                              </span>
                              @endif
                              </a>
                          @endforeach
                        @endforeach
                      </div>
                      <!-- List group links -->
                    </div>
                  </div>
              </div>
            </div>
            <div class="row wow fadeIn mb-3">
              <div class="col-xl col-lg col-md col-sm col">
                <div class="card mb-3">
                  <div class="card-header text-center">
                    7 DIENŲ SUVESTINĖ
                  </div>
                  <div class="card-body">
                    <div class="row pl-3 mb-3">
                      <div class="col-xl col-lg col-md col-sm-5 stats-card-light-green mr-3 p-3 mb-2 over-hidden">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-users responsive-text-4 icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Svetainės unikalus lankytojai per pastarasias 7 dienas" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                              @if ($usersByDaySumSevenDays >= $lastWeekVisitorsSum)
                              <i class="fa fa-arrow-up responsive-text-1-1 text-dark-green"></i>
                              @else
                              <i class="fa fa-arrow-down responsive-text-1-1 text-dark-red"></i>
                              @endif
                              <strong>{{ $usersByDaySumSevenDays }}</strong>
                            <br>
                            <span class="responsive-text-1">VIZITAI</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-red">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-file-upload responsive-text-4 icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Puslapių peržiūros per pastarasias 7 dienas" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                              @if ($pageViewsSevenDaysSum > $pagesViewsLastWeekSum)
                              <i class="fa fa-arrow-up ml-1 responsive-text-1-1 text-dark-green"></i>
                              @else
                              <i class="fa fa-arrow-down ml-1 responsive-text-1-1 text-dark-red"></i>
                              @endif
                              <strong>{{ $pageViewsSevenDaysSum }}</strong>
                            <br>
                            <span class="responsive-text-1">PERŽIŪROS</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-blue">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-user-clock responsive-text-4 icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Vidutinė sesijos trukmė per pastarasias 7 dienas" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                             @if ($sessionsDurationAverage > $sessionsDurationLastWeekAvg)
                              <i class="fa fa-arrow-up ml-1 responsive-text-1-1 text-dark-green"></i>
                              @else
                              <i class="fa fa-arrow-down ml-1 responsive-text-1-1 text-dark-red"></i>
                              @endif
                              <strong>{{ $sessionsDurationAverage }}min</strong>
                            <br>
                            <span class="responsive-text-1">LAIKAS</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-purple">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-route responsive-text-4 easy-icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Per paskutines 7 dienas svetainę lankytojai pasiekė iš {{ $visitorsByReferres->count() }} skirtingų šaltinių" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                            @if ($visitorsByReferres->count() >= $visitorsByReferresLastWeek->count())
                            <i class="fa fa-arrow-up ml-1 responsive-text-1-1 text-dark-green"></i>
                            @else
                            <i class="fa fa-arrow-down ml-1 responsive-text-1-1 text-dark-red"></i>
                            @endif
                            <strong>{{ $visitorsByReferres->count() }}</strong>
                            <br>
                            <span class="responsive-text-1">ŠALTINIAI</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <canvas id="visitsCompareChart"></canvas>
                      </div>
                      <div class="col-md-6">
                        <canvas id="viewsCompareChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        <script>
          $(function () {
            $('[data-toggle="tooltip"]').tooltip()
          })
        </script>
          <!--Grid row-->
      </div>
      <!--Card_SVETAINĖS LANKOMUMAS PER PASTARASIAS 7 DIENAS-->


  <!--Container-->
</main>
<!--Main-->

@include('admin.modals.statistics.lastMothUploads')
@include('admin.modals.statistics.lastWeekUploads')
@include('admin.modals.statistics.suspendedUploads')
@include('admin.modals.statistics.userTypesModalChart')
@include('admin.modals.statistics.statisticsPeriod')
  <!--Main layout-->


    <script type="text/javascript" src="/js/admin/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/admin/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/admin/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/admin/mdb.min.js"></script>
    <!-- Your custom scripts --> 
    <script type="text/javascript" src="/js/admin/charts/verticalChart_data_byCategory.js"></script>
</body>
</html>

