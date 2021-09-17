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
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
           <div class="col-8 align-middle">SVETAINĖS LANKOMUMAS PER PASTARASIAS PASTARUOSIUS METUS</div>
          <div class="col-4"><button data-toggle="modal" data-target="#modal_select_stats_period" class="btn btn-secondary btn-sm btn-outline-dark float-right mb-0 ml-3">Pasirinkite ataskaitos laikotarpį</button></div>
        </div>
        <hr>
          <div class="row mb-3">
            <div class="col-lg-12 col-md-12 mb-3">
              <!--Card_SVETAINĖS LANKOMUMAS-->
              <div class="card">
              <!-- Card header -->
                <div class="card-header text-center">
                  SVETAINĖS LAKOMUMAS
                </div>
                <!--Card content-->
                <div class="card-body">
                  <canvas id="SessionsViewsCompareChart"></canvas>
                </div>
              </div>
              <!--SVETAINĖS LAKOMUMAS-->
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
                    <div class="table-content not-display" id="referresLastYear_table">
                    @foreach ($visitorsByReferresLastYear as $referreLastYear)
                      <div class="row">
                        <div class="col-sm-1 col-1">{{ $loop->iteration }}</div>
                        <div class="col-sm-6 col-5 text-capitalize">
                        @if ($referreLastYear['url'] == '(direct)')
                        Tiesiogiai
                        @else
                        {{$referreLastYear['url']}}
                        @endif
                        </div>
                        <div class="col-sm-5 col-4 text-capitalize">{{ $referreLastYear['pageViews'] }}</div>
                      </div>
                      <hr>
                    @endforeach
                    </div>
                    <div id="open_referresLastYear_table" class="row text-center d-flex justify-content-center">
                      <i id="open_referresLastYear_table_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                  </div>
                  <script>
                  $(document).ready(function(){
                    $("#open_referresLastYear_table").click(function(){
                      $("#referresLastYear_table").slideToggle("slow");
                      $("#open_referresLastYear_table_arrow").toggleClass('flip');
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
                    <div class="table-content not-display" id="pageViewsLastYear_table">
                    @foreach ($viewsOfPagesLastYear as $viewsOfPageLastYear)
                      <div class="row">
                        <div class="col-sm-1 col-1">{{ $loop->iteration }}</div>
                        <div class="col-sm-6 col-5">{{ $viewsOfPageLastYear['url'] }}</div>
                        <div class="col-sm-5 col-4">{{ $viewsOfPageLastYear['pageViews'] }}</div>
                      </div>
                      <hr>
                    @endforeach
                    </div>
                    <div id="open_pageViewsLastYear_table" class="row text-center d-flex justify-content-center">
                      <i id="open_pageViewsLastYear_table_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                  </div>
                 <script>
                  $(document).ready(function(){
                    $("#open_pageViewsLastYear_table").click(function(){
                      $("#pageViewsLastYear_table").slideToggle("slow");
                      $("#open_pageViewsLastYear_table_arrow").toggleClass('flip');
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
              <div class="col-lg-6 mb-3">
                <div class="card">
                <!-- Card header -->
                  <div class="card-header text-center">
                    LANKYTOJŲ NAUDOJAMA ĮRANGA
                  </div>
                  <!--Card content-->
                  <div class="card-body padding_bottom_0">
                    <canvas id="lastYearDevicesChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="lastYear_device_content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5">Įernginio tipas</div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">Lankytojai</div>
                      </div>
                        @foreach ($devicesLastYear as $deviceLastYear)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5">{{ $deviceLastYear['0'] }}</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">{{ $deviceLastYear['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_lastYear_device" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="open_lastYear_device_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_lastYear_device").click(function(){
                            $("#lastYear_device_content").slideToggle("slow");
                            $("#open_lastYear_device_arrow").toggleClass('flip');
                          });
                        });
                      </script>
                    <!--Card dropdow content-->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-3">
                <div class="card">
                <!-- Card header -->
                  <div class="card-header text-center">
                    SVETAINĖS LANKYTOJAI PAGAL VALSTYBĘ
                  </div>
                  <!--Card content-->
                  <div class="card-body padding_bottom_0">
                    <canvas id="lastYearVisitorsCountrysChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="LastYear_Visitors_Countrys_Content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($lastYearLocations as $lastYearLocation)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-5">{{ $lastYearLocation['0'] }}</div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-4">{{ $lastYearLocation['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_LastYear_Visitors_Countrys" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="open_LastYear_Visitors_Countrys_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_LastYear_Visitors_Countrys").click(function(){
                            $("#LastYear_Visitors_Countrys_Content").slideToggle("slow");
                            $("#open_LastYear_Visitors_Countrys_arrow").toggleClass('flip');
                          });
                        });
                      </script>
                    <!--Card dropdow content-->
                  </div>
                </div>
              </div>
            </div>
            <div class="row wow fadeIn mb-3">
              <div class="col-lg-6 ">
                <div class="card">
                <!-- Card header -->
                  <div class="card-header text-center">
                    SVETAINĖS LANKYTOJAI PAGAL MIESTĄ
                  </div>
                  <!--Card content-->
                  <div class="card-body padding_bottom_0">
                    <canvas id="lastYearVisitorsCitysChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="lastYear_Visitors_Citys_Content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($allclearedLastYearCitys as $allclearedLastYearCity)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-5">{{ $allclearedLastYearCity['0'] }}</div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-4">{{ $allclearedLastYearCity['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_LastYear_Visitors_Citys" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="lastYear_Visitors_City_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_LastYear_Visitors_Citys").click(function(){
                            $("#lastYear_Visitors_Citys_Content").slideToggle("slow");
                            $("#lastYear_Visitors_City_arrow").toggleClass('flip');
                          });
                        });
                      </script>
                    <!--Card dropdow content-->
                  </div>
                </div>
              </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header text-center">
                      SVETAINĖS LANKYTOJAI PAGAL NARŠYKLES
                    </div>
                    <div class="card-body padding_bottom_0">
                      <canvas id="lastYearBrowserChart"></canvas>
                    <div id="lastYear_Visitors_Browser_Content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($analyticsLastYearBrowsers as $analyticsLastYearBrowser)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-5">{{ $analyticsLastYearBrowser['browser'] }}</div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-4">{{ $analyticsLastYearBrowser['sessions'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_LastYear_Visitors_Browser" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="lastYear_Visitors_Browser_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_LastYear_Visitors_Browser").click(function(){
                            $("#lastYear_Visitors_Browser_Content").slideToggle("slow");
                            $("#lastYear_Visitors_Browser_arrow").toggleClass('flip');
                          });
                        });
                      </script>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row wow fadeIn mb-3">
              <div class="col-xl col-lg col-md col-sm col">
                <div class="card mb-3">
                  <div class="card-header text-center">
                    30 DIENŲ SUVESTINĖ
                  </div>
                  <div class="card-body">
                    <div class="row pl-3 mb-3">
                      <div class="col-xl col-lg col-md col-sm-5 stats-card-light-green mr-3 p-3 mb-2 over-hidden">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-users responsive-text-4 icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Svetainės lankytojų sesijos per pastaruosius metus" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                              <strong>{{ $sessionsLastYearSum }}</strong>
                            <br>
                            <span class="responsive-text-1">SESIJOS</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-red">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-file-upload responsive-text-4 icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Puslapių peržiūros per pastaruosius metus" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                              <strong>{{ $lastYearPageViewsSum }}</strong>
                            <br>
                            <span class="responsive-text-1">PERŽIŪROS</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-blue">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-user-clock responsive-text-4 icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Vidutinė sesijos trukmė per pastaruosius metus" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                              <strong>{{ $sessionsDurationLastYearAvg }}min</strong>
                            <br>
                            <span class="responsive-text-1">LAIKAS</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-purple">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-route responsive-text-4 easy-icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Per pastaruosius metus svetainę lankytojai pasiekė iš {{ $visitorsByReferresLastYear->count() }} skirtingų šaltinių" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                            <strong>{{ $visitorsByReferresLastYear->count() }}</strong>
                            <br>
                            <span class="responsive-text-1">ŠALTINIAI</span></p>
                          </div>
                        </div>
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


  </div>
  <!--Container-->
</main>
<!--Main-->



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
    <script type="text/javascript" src="/js/admin/charts/lastYearCharts.js"></script>
</body>
</html>