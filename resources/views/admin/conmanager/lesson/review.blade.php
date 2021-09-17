
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Pamokų paieška</title>
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
    <link rel="stylesheet" href="/css/admin/changes.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
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
    <!--Success message-->
    @include('admin.modals.alerts.success')
    
    <div class="card">
        <div class="row p-3">
            <!--Data from darabase-->
            <div class="col-md-12  col-xl-6 ">
                <h4 class="text-uppercase">Pamokos informacija:</h4>
                <hr>
                <p><span class="font-weight-bold">Pavadinimas:</span> {{ $lessonq->title }}</p>
                <hr>
                <p><span class="font-weight-bold">Sukūrimo data ir laikas:</span> {{ $lessonq->created_at }}</p>
                <hr>
                <p><span class="font-weight-bold">Paskutinio atnaujinimo laikas:</span> {{ $lessonq->updated_at }}</p>
                <hr>
                <p><span class="font-weight-bold">Autorius:</span> {{ $lessonq->author }}</p>
                <hr>
                <p><span class="font-weight-bold">Kategorija:</span> {{ $lessonq->type }}</p>
                <hr>
                <p><span class="font-weight-bold">Statusas:</span> {{ $lessonq->status }}</p>
            </div>
            <!--Data from darabase-->
            <!--Iframe-->
            <div class="col-md-12  col-xl-6 ">
                <!--need to change url from subdomain to domain -->
                <h4 class="text-uppercase">Gyva peržiūra</h4>
                <iframe class="live_review" style="width: 100%; height: 25vw;" src="https://www.test.arduinopagalba.lt/lesson/{{ $lessonq->id }}" title="{{ $lessonq->title }}">
                </iframe>
            </div>
            <!--Iframe-->
        </div>
        <!--Record management-->
        <div class="row p-3">
            <div class="col col-md-12">
                <button  data-toggle="modal" data-target="#modal_suspend_lesson" type="button" class="btn btn-light w-100" data-mdb-ripple-color="dark">
                    @if($lessonq->status == 'active')
                        Sustabdyti rodymą
                    @elseif($lessonq->status == 'suspended')
                        Atnaujinti rodymą
                    @endif   
                </button>
            </div>
            <div class="col col-md-12">
                <a href="{{ route('lesson.show', $lessonq->id) }}" target="_blank"><button type="button" class="btn btn-light w-100" data-mdb-ripple-color="dark">Peržiūrėti</button></a>
            </div>
            <div class="col col-md-12">
                <a href="{{ route('lesson.edit', $lessonq->id) }}"><button type="button" class="btn btn-outline-success w-100">Redaguoti</button></a>
            </div>
            <div class="col col-md-12">
                <button data-toggle="modal" data-target="#modal_delete_lesson" type="button" class="btn btn-outline-danger w-100">Ištrinti</button>
            </div>
        </div>
        <!--Record management-->
  </div>
</main>
<!--Main layout-->

<!--Modal for record suspend confirmation-->
@include('admin.modals.conmanager.lesson.suspend')
<!--Modal for record suspend confirmation-->
<!--Modal for record delete confirmation-->
@include('admin.modals.conmanager.lesson.delete_lesson')
<!--Modal for record delete confirmation-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/admin/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/admin/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/admin/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/admin/mdb.min.js"></script>
    <!-- Your custom scripts -->
    <script type="text/javascript" src="js/admin/script.js"></script>
</body>
</html>

</body>
</html>