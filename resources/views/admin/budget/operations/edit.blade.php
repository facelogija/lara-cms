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
    <div class="card p-3">
        @include('admin.modals.alerts.success')
        <h4>OPERACIJA</h4>
        <hr class="m-0 p-0">
        <form class="text-center" style="color: #757575;" action="{{ route('budget.operation.update', $operation->id) }}" enctype="multipart/form-data" method="post" >
              @csrf
              @method('PATCH')
            <div class="form-row">
                <div class="col col-md-12">
                    <!-- Title -->
                    <div class="md-form">
                        <input type="text" id="client_title" name="client_title" class="form-control" value="{{ old('client_title') ?? $operation->client_title }}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-6 md-form">
                    <input class="form-control" id="document_nr" name="document_nr" value="{{ old('document_nr') ?? $operation->document_nr }}">
                </div>
                <div class="col col-md-6">
                    <!-- Project end -->
                    <label>Dokumento data</label>
                    <input class="form-control" type="date" value="{{ old('document_date') ?? $operation->document_date }}" id="document_date" name="document_date">
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-6 md-form">
                <input class="form-control" id="fees" name="fees" value="{{ old('fees') ?? $operation->fees }}">
                </div>
                <div class="col col-md-6 md-form">
                <input class="form-control" id="category" name="category" value="{{ old('category') ?? $operation->category }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-6 md-form">
                <input class="form-control" id="sum" name="sum" value="{{ old('sum') ?? $operation->sum }}">
                </div>
            <div class="col col-md-6 md-form">
                <input placeholder="Projektas" class="form-control" name="project_id" id="project_id" value="{{ old('project_id') ?? $operation->project_id }}">
                </div>
            </div>
            <!-- Sent data to controller -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">Išsaugoti</button>
        </form>
        <!-- Form -->
    </div>
  </div>



</main>
  <!--Main layout-->



</body>
</html>