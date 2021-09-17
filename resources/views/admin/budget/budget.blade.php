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
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">
  <!-- Card -->
  <div class="row">
    <div class="col-lg-3 col-md-12">
        <div class="card p-2">
          <h5 class="mb-1 text-uppercase">Bendras biudžeto likutis:</h5>
          <h2 class="d-flex flex-row-reverse text-success font-weight-bold">5000<span class="h4"><i class="fas fa-long-arrow-alt-up align-bottom"></i></span></h2>
          <hr class="m-0 p-0">
          <h5 class="mb-1 text-uppercase">Vykdomi projektai:</h5>
          @foreach ($projects as $project)
          <p class="text-uppercase d-flex flex-row-reverse"><span class="font-weight-bold"> {{ $project->title }}</span> Pavadinimas: </p>
          <p class="text-uppercase d-flex flex-row-reverse"><span class="font-weight-bold"> {{ $project->planning_start }}</span> Planuojama pradžia: </p>
          <p class="text-uppercase d-flex flex-row-reverse"><span class="font-weight-bold"> {{ $project->plannig_end }}</span> Planuojama pabaiga: </p>
          <p class="text-uppercase d-flex flex-row-reverse"><span class="font-weight-bold"> {{ $project->info }}</span> Informacija: </p>
          <p class="text-uppercase d-flex flex-row-reverse"><span class="font-weight-bold"> {{ $project->authorized_capital }}</span> Pradinis projekto biudžetas: </p>
          <p class="text-uppercase d-flex flex-row-reverse"><span class="font-weight-bold"> {{ Auth::user()->name }}</span> Atsakingas asmuo: </p>
          <hr class="m-0 p-0">
          @endforeach
        </div>
    </div>
    <div class="col-lg-9 col-md-12">
        <div class="card p-1">
        <div class="row">
        <div class="col">
          <ul class="navbar-nav mr-auto d-inline">
            <li class="nav-item d-inline p-3"><a data-toggle="modal" data-target="#modal_create_new_budget">Kurti naują</a></li>
            <li class="nav-item d-inline p-3"><a data-toggle="modal" data-target="#operations_search">Peržiūrėti</a></li>
            <li class="nav-item d-inline p-3">Apžvalga</li>
          </ul>
          <hr class="m-0 p-0">
          <div class="row pt-2">
            <div class="col">
              <div class="card p-2 m-2">
              <h5 class="text-uppercase">Dešimt paskutinių operacijų</h5>
                        <table class="table table-hover">
            <thead class="blue-grey lighten-4">
              <tr>
                <td class="font-weight-bold">Kliento pavadinimas</td>
                <th class="font-weight-bold">Dokumento numeris</th>
                <th class="font-weight-bold">Dokumento data</th>
                <th class="font-weight-bold">Mokesčiai</th>
                <th class="font-weight-bold">Kategorija</th>
                <th class="font-weight-bold">Dokumentas įkeltas</th>
                <th class="font-weight-bold">Dokumentas atnaujintas</th>
                <th class="font-weight-bold">Suma</th>
              </tr>
            </thead>
            <tbody>
          @foreach ($operations as $operation)
            <tr>   
              <td><a href="{{ route('budget.operation.edit', $operation->id) }}">{{ $operation->client_title }}</a></td>
              <td>{{ $operation->document_nr }}</td>
              <td>{{ $operation->document_date }}</td>
              <td>{{ $operation->fees }}</td>
              <td>{{ $operation->category }}</td>
              <td>{{ $operation->created_at }}</td>
              <td>{{ $operation->updated_at }}</td>
              <td>{{ $operation->sum }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
            </div>
            </div>
          </div>
        </div>
        </div>
        </div>
    </div>
  </div>
  </div>


@include('admin.modals.budget.create_new')
@include('admin.modals.budget.operations.search')
</main>
  <!--Main layout-->



</body>
</html>