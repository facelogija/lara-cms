<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link href="ckeditor/plugins/codesnippet/lib/highlight/styles/default.css" rel="stylesheet">
        <script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
        <link href="{{ asset('public/css/admin/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('public/css/admin/mdb.min.css') }}" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="{{ asset('public/css/admin/style.css') }}" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <div style="height:70px;">@include('layouts.headline')</div>

<div style="width: 80%; margin-left: 10%; margin-bottom: 50px;">
<form id="forma" action="/lesson" enctype="multipart/form-data" method="post">
    @csrf
  <div class="row">
    <div class="col-8 offset-2">
      <div style="margin-bottom: 25px;" class="row">
      <h1>Add new lesson</h1>
      </div>
        <div style="margin-bottom: 25px;" class="row">
            <label style="font-size: 17px;">Lesson title</label>
            <input type="text" class="form-control" id="title"  name="title">
        </div>

        <!-- instruction  -->
        <div style="margin-bottom: 25px;" class="row">
            <label style="font-size: 17px;">Instruction</label>
            <textarea class="form-control" id="instruction"  name="instruction"></textarea>

            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
                CKEDITOR.replace( 'instruction', {
                  filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                  filebrowserUploadMethod: 'form'
                }

                 );
            </script>
        </div>
        <!-- instruction end  -->

        <div style="margin-bottom: 25px;" class="row">
            <label for="video_url" class="col-md-4 col-form-label ">Video URL</label>
              <input  type="text" class="form-control" id="video_url" name="video_url">
        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label for="type" class="col-md-4 col-form-label ">Select lesson type:</label>
              <select style="width: 150px;" id="type" name="type">
                  <option value="electronics">Electronics</option>
                  <option value="arduino">Arduino</option>
                  <option value="robotics">Robotics</option>
                  <option value="automatics">Automatic</option>
              </select>
        </div>

            <div style="margin-bottom: 25px;" class="row pt-3">
              <button class="btn btn-primary">Add new lesson</button>
            </div>
          </div>
      </div>
    </form>

</div>



    </body>
</html>
