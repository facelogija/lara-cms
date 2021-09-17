
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Projektų paieška</title>
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
            <div class="col-6 ">
                <h3>Projekto informacija:</h3>
                <h5>Pavadinimas: {{ $postq->title }};</h5>
                <h5>ID: {{ $postq->id }};</h5>
                <h5>Sukūrimo data ir laikas: {{ $postq->created_at }};</h5>
                <h5>Paskutinio atnaujinimo laikas: {{ $postq->updated_at }};</h5>
                <h5>Autorius: {{ $postq->author }};</h5>
                <h5>Kategorija: {{ $postq->type }};</h5>
                <h5>Statusas: {{ $postq->status }}.</h5>
            </div>
            <div class="col-6">
                <!--need to change url from subdomain to domain -->
                <h3>Gyva peržiūra</h3>
                <iframe class="live_review" style="width: 100%; height: 25vw;" src="https://www.test.arduinopagalba.lt/post/{{ $postq->id }}" title="{{ $postq->title }}">
                </iframe>
            </div>
        </div>
        <div class="row p-3">
            <div class="col">
                <button  data-toggle="modal" data-target="#modal_suspend_post" type="button" class="btn btn-light w-100" data-mdb-ripple-color="dark">
                    @if($postq->status == 'active')
                        Sustabdyti rodymą
                    @elseif($postq->status == 'suspended')
                        Atnaujinti rodymą
                    @endif   
                </button>
            </div>
            <div class="col">
                 <a href="{{ route('post.show', $postq->id) }}" target="_blank"><button type="button" class="btn btn-light w-100" data-mdb-ripple-color="dark">Peržiūrėti</button></a>
            </div>
            <div class="col">
                 <a href="{{ route('post.edit', $postq->id) }}"><button type="button" class="btn btn-outline-success w-100">Redaguoti</button></a>
            </div>
            <div class="col">
                <button data-toggle="modal" data-target="#modal_delete_post" type="button" class="btn btn-outline-danger w-100">Ištrinti</button>
            </div>
        </div>
  </div>
</main>
  <!--Main layout-->

@include('admin.modals.conmanager.post.suspend')
@include('admin.modals.conmanager.post.delete_post')

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