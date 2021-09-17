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
           <div class="col-8 align-middle">SVETAINĖS LANKOMUMAS PER PASTARASIAS 30 DIENŲ</div>
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
                  <canvas id="visitorsLastMonthChart"></canvas>
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
                    <div class="table-content not-display" id="referresLastMonth_table">
                    @foreach ($visitorsByReferresLastMonth as $referreLastMonth)
                      <div class="row">
                        <div class="col-sm-1 col-1">{{ $loop->iteration }}</div>
                        <div class="col-sm-6 col-5 text-capitalize">
                        @if ($referreLastMonth['url'] == '(direct)')
                        Tiesiogiai
                        @else
                        {{$referreLastMonth['url']}}
                        @endif
                        </div>
                        <div class="col-sm-5 col-4 text-capitalize">{{ $referreLastMonth['pageViews'] }}</div>
                      </div>
                      <hr>
                    @endforeach
                    </div>
                    <div id="open_referresLastMonth_table" class="row text-center d-flex justify-content-center">
                      <i id="open_referresLastMonth_table_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                  </div>
                  <script>
                  $(document).ready(function(){
                    $("#open_referresLastMonth_table").click(function(){
                      $("#referresLastMonth_table").slideToggle("slow");
                      $("#open_referresLastMonth_table_arrow").toggleClass('flip');
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
                    <div class="table-content not-display" id="pageViewsLastMonth_table">
                    @foreach ($pageViewsLastMonth as $pageViewLastMonth)
                      <div class="row">
                        <div class="col-sm-1 col-1">{{ $loop->iteration }}</div>
                        <div class="col-sm-6 col-5">{{$pageViewLastMonth['url']}}</div>
                        <div class="col-sm-5 col-4">{{ $pageViewLastMonth['pageViews'] }}</div>
                      </div>
                      <hr>
                    @endforeach
                    </div>
                    <div id="open_pageViewsLastMonth_table" class="row text-center d-flex justify-content-center">
                      <i id="open_pageViewsLastMonth_table_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                  </div>
                 <script>
                  $(document).ready(function(){
                    $("#open_pageViewsLastMonth_table").click(function(){
                      $("#pageViewsLastMonth_table").slideToggle("slow");
                      $("#open_pageViewsLastMonth_table_arrow").toggleClass('flip');
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
                    <canvas id="lastMonthDevicesChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="lastMonth_device_content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5">Įernginio tipas</div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">Lankytojai</div>
                      </div>
                        @foreach ($devicesLastMonth as $deviceLastMonth)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5">{{ $deviceLastMonth['0'] }}</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">{{ $deviceLastMonth['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_lastMonth_device" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="open_lastMonth_device_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_lastMonth_device").click(function(){
                            $("#lastMonth_device_content").slideToggle("slow");
                            $("#open_lastMonth_device_arrow").toggleClass('flip');
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
                    <canvas id="lastMonthVisitorsCountrysChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="LastMonth_Visitors_Countrys_Content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($lastMonthLocations as $lastMonthLocation)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-5">{{ $lastMonthLocation['0'] }}</div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-4">{{ $lastMonthLocation['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_LastMonth_Visitors_Countrys" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="open_LastMonth_Visitors_Countrys_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_LastMonth_Visitors_Countrys").click(function(){
                            $("#LastMonth_Visitors_Countrys_Content").slideToggle("slow");
                            $("#open_LastMonth_Visitors_Countrys_arrow").toggleClass('flip');
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
                    <canvas id="lastMonthVisitorsCitysChart"></canvas>
                    <!--Card dropdow content-->
                    <div id="lastMonth_Visitors_Citys_Content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($allclearedLastMonthCitys as $allclearedLastMonthCity)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-5">{{ $allclearedLastMonthCity['0'] }}</div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-4">{{ $allclearedLastMonthCity['1'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_LastMonth_Visitors_Citys" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="lastMonth_Visitors_City_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_LastMonth_Visitors_Citys").click(function(){
                            $("#lastMonth_Visitors_Citys_Content").slideToggle("slow");
                            $("#lastMonth_Visitors_City_arrow").toggleClass('flip');
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
                      <canvas id="lastMonthBrowserChart"></canvas>
                    <div id="lastMonth_Visitors_Browser_Content" class="not-display">
                      <hr>
                      <div class="row font-weight-bold pl-1 pr-1">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">#</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-5">Įernginio tipas</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-4">Lankytojai</div>
                      </div>
                        @foreach ($analyticsLastMonthBrowsers as $analyticsLastMonthBrowser)
                          <hr>
                          <div class="row text-capitalize pl-1 pr-1">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">{{ $loop->iteration }}</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-5">{{ $analyticsLastMonthBrowser['browser'] }}</div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-4">{{ $analyticsLastMonthBrowser['sessions'] }}</div>
                          </div>
                        @endforeach
                      <hr>
                    </div>
                    <div id="open_LastMonth_Visitors_Browser" class="row text-center d-flex justify-content-center mb-1 mt-1">
                      <i id="lastMonth_Visitors_Browser_arrow" class="fas fa-chevron-down text-center menu_arrow font-3"></i>
                    </div>
                      <script>
                        $(document).ready(function(){
                          $("#open_LastMonth_Visitors_Browser").click(function(){
                            $("#lastMonth_Visitors_Browser_Content").slideToggle("slow");
                            $("#lastMonth_Visitors_Browser_arrow").toggleClass('flip');
                          });
                        });
                      </script>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row wow fadeIn mb-3">
              <div class="col-lg-12 col-md-12 mb-3">
                <div class="card">
                  <div class="card-header text-center">
                    LANKYTOJŲ AKTYVUMAS SKIRTINGOMIS VALANDOMIS
                  </div>
                  <div class="card-body">
                        <canvas id="lastMonthActivityByHoursChart"></canvas>
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
                          <div data-toggle="tooltip" data-placement="top" title="Svetainės unikalus lankytojai per pastarasias 30 dienų" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                              <strong>{{ $lastMonthVisitorsSum }}</strong>
                            <br>
                            <span class="responsive-text-1">VIZITAI</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-red">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-file-upload responsive-text-4 icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Puslapių peržiūros per pastarasias 30 dienų" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                              <strong>{{ $pagesViewsLastMonthSum }}</strong>
                            <br>
                            <span class="responsive-text-1">PERŽIŪROS</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-blue">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-user-clock responsive-text-4 icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Vidutinė sesijos trukmė per pastarasias 30 dienų" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                              <strong>{{ $sessionsDurationLastMonthAvg }}min</strong>
                            <br>
                            <span class="responsive-text-1">LAIKAS</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-lg col-md col-sm-5 mr-3 p-3 mb-2 stats-card-light-purple">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end"><i class="fas fa-route responsive-text-4 easy-icon-transform text-white"></i></div>
                          <div data-toggle="tooltip" data-placement="top" title="Per paskutines 30 dienų svetainę lankytojai pasiekė iš // skirtingų šaltinių" class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8"><p class="float-right responsive-text-2 text-white">
                            <strong>{{ $visitorsByReferresLastMonth->count() }}</strong>
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
    <script type="text/javascript" src="/js/admin/charts/lastMonthCharts.js"></script>
</body>
</html>



