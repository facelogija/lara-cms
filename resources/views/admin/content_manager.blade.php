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
    <link href="{{ asset('/css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('/css/admin/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('/css/admin/style.css') }}" rel="stylesheet">



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
  <!-- Heading -->
    @include('admin.modals.alerts.success')
    @include('admin.layouts.heading')
  <!-- Heading -->
      <div class="card mt-3">
        <!--Card content-->
        <div class="card-body">
          <div class="row">
            <h5 class="ml-1">Jūsų patalpinti projektai:</h5>
            <table class="table cursor_pointer">
              <thead>
                 <tr>
                  <th scope="col">#</th>
                  <th scope="col">Pavadinimas</th>
                  <th scope="col">Įkėlimo data</th>
                  <th class="md_dont_show" scope="col">Atnaujinimo data</th>
                  <th scope="col">Autorius</th>
                </tr>
              </thead>
              <tbody>
                @if (!empty($con_by_author))
                @foreach ($con_by_author as $post)
                  <tr id="post" class="cursor_pointer" onclick="window.location='{{ route('post.review_id', $post->id) }}'">
                    <th scope="row"><a href="{{route('post.review_id', $post->id)}}">{{ $loop->iteration }}</a></th>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->title }}</a></td>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->created_at }}</a></td>
                    <td class="md_dont_show"><a href="{{route('post.review_id', $post->id)}}">{{ $post->updated_at }}</a></td>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->author }}</a></td>
                  </tr>
                @endforeach
                @else
                <table><tbody><tr><td class="alert alert-warning">Kolkas nesate patalpinęs jokių projektų.</td></tr></tbody></table>
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
          <div class="card mt-5 mb-3">
        <!--Card content-->
        <div class="card-body">
          <div class="row">
            <h5 class="ml-1">10 paskutiniujų patalpinimų</h5>
            <table class="table cursor_pointer">
              <thead>
                 <tr>
                  <th scope="col">#</th>
                  <th scope="col">Pavadinimas</th>
                  <th scope="col">Įkėlimo data</th>
                  <th scope="col">Atnaujinimo data</th>
                  <th class="md_dont_show" scope="col">Autorius</th>
                </tr>
              </thead>
              <tbody>
                @if (!empty($con_last_ten))
                @foreach ($con_last_ten as $lesson)
                  <tr id="post" class="cursor_pointer" onclick="window.location='{{ route('lesson.review_id', $lesson->id) }}'">
                    <th scope="row"><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $loop->iteration }}</a></th>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->title }}</a></td>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->created_at }}</a></td>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->updated_at }}</a></td>
                    <td class="md_dont_show"><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->author }}</a></td>
                  </tr>
                @endforeach
                @else
                <table><tbody><tr><td class="alert alert-warning">Vartotojas nėra patalpinęs jokių projektų.</td></tr></tbody></table>
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</main>
  <!--Main layout-->

@include('admin.modals.conmanager.create_new')
@include('admin.modals.conmanager.review_by_id')
@include('admin.modals.conmanager.search_lists')


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
