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
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
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
    @include('admin.modals.alerts.success')
    @include('admin.modals.alerts.error')
    <div class="card">
        <!--Card content-->
        <div class="card-body">
          <div class="row">
            <div class="col-3"> <img style="width: 100%; height: 17vw;" src="{{ $user->userImage() }}" class="img-fluid" alt="">
            </div>
            <div class="col-9">
              <div class="row">
                <div class="col">
                  <p class="h4">Vartotojo informacija:</p>
                  <p class="h6 font-weight-normal">Vardas: {{ $user->name }}</p>
                  <p class="h6 font-weight-normal">Slapyvardis: {{ $user->username }}</p>
                  <p class="h6 font-weight-normal">El. paštas: {{ $user->email }}</p>
                  <p class="h6 font-weight-normal">Registracijos data: {{ $user->created_at }}</p>
                  <p class="h6 font-weight-normal">Gimimo data: {{ $user->b_date }}</p>
                </div>
                <div class="col">
                  <p class="h4"> </p>
                  <p class="h6 font-weight-normal">Tel. nr.: {{ $user->phone_number }}</p>
                  <p class="h6 font-weight-normal">Asmeninis tel. nr.: {{ $user->personal_phone_number }}</p>
                  <p class="h6 font-weight-normal">Adresas: {{ $user->address }}</p>
                  <p class="h6 font-weight-normal">Profilis atnaujintas: {{ $user->updated_at }}</p>
                  <p class="h6 font-weight-normal">Slaptažodis atnaujintas: {{ $user->password_updated_at }}</p>
                  @if (\Carbon\Carbon::now()->subDays(182) > $user->password_updated_at)
                  <p class="h6 font-weight-normal alert alert-danger">Būtinas slaptažodžio keitimas!</p>
                  @elseif (\Carbon\Carbon::now()->subDays(172) > $user->password_updated_at)
                  <p class="h6 font-weight-normal alert alert-warning">Rekomenduojame pakeisti slaptažodį</p>
                  @else
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button type="button" data-toggle="modal" data-target="#modal_changePassword" class="float-right btn btn-secondary btn-sm btn-outline-dark">Keisti slaptažodį</button>
              <button type="button" data-toggle="modal" data-target="#edit_profile_modal" class="float-right btn btn-secondary btn-sm btn-outline-dark">Redaguoti duomenis</button>
              <button type="button" data-toggle="modal" data-target="#modal_upload_image" class="float-right btn btn-secondary btn-sm btn-outline-dark">Keisti profilio nuotrauką</button>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- User posts -->
    <div class="container-fluid mt-5">
    <div class="card">
        <!--Card content-->
        <div class="card-body">
          <div class="row">
            <h5 class="ml-1">Vartotojo patalpinti projektai:</h5>
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
                @if (!empty($posts))
                @foreach ($posts as $post)
                  <tr id="post" class="cursor_pointer" onclick="window.location='{{ route('post.review_id', $post->id) }}'">
                    <th scope="row"><a href="{{route('post.review_id', $post->id)}}">{{ $loop->iteration }}</a></th>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->title }}</a></td>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->created_at }}</a></td>
                    <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->updated_at }}</a></td>
                    <td class="md_dont_show"><a href="{{route('post.review_id', $post->id)}}">{{ $post->author }}</a></td>
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
  <!-- User lessons -->
    <div class="container-fluid mt-5 mb-5">
    <div class="card">
        <!--Card content-->
        <div class="card-body">
          <div class="row">
            <h5 class="ml-1">Vartotojo patalpintos pamokos:</h5>
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
                @if (!empty($lessons))
                @foreach ($lessons as $lesson)
                  <tr id="lesson" class="cursor_pointer" onclick="window.location='{{ route('lesson.review_id', $lesson->id) }}'">
                    <th scope="row"><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $loop->iteration }}</a></th>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->title }}</a></td>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->created_at }}</a></td>
                    <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->updated_at }}</a></td>
                    <td class="md_dont_show"><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->author }}</a></td>
                  </tr>
                @endforeach
                @else
                <table><tbody><tr><td class="alert alert-warning">Vartotojas nėra patalpinęs jokių pamokų.</td></tr></tbody></table>
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</main>

@include('admin.modals.profile.edit_profile')
@include('admin.modals.profile.upload_image')
@include('admin.modals.profile.changePassword')
  <!--Main layout-->

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
