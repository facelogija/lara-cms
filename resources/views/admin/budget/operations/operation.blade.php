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
      <div class="col">
        <div class="card p-1">
          <h5>OPERACIJOS INFORMACIJA</h5>
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
          @foreach ($by_document_nr as $operation)
            <tr>   
              <td>{{ $operation->client_title }}</td>
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


@include('admin.modals.budget.create_new')
@include('admin.modals.budget.operations.search')
</main>
  <!--Main layout-->



</body>
</html>