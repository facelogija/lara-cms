<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body>
        <div style="height:70px;">@include('layouts.headline')</div>

<div style="width: 80%; margin-left: 10%; margin-bottom: 50px;">

<form id="forma" action="/post" enctype="multipart/form-data" method="post">
    @csrf
  <div class="row">
    <div class="col-8 offset-2">
      <div style="margin-bottom: 25px;" class="row">
        <h1>Add New Post</h1>
      </div>
        <div style="margin-bottom: 25px;" class="row">
            <label style="font-size: 17px;">Post title</label>
            <textarea class="form-control" id="title"  name="title"></textarea>
        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label>Project instruction</label>
              <textarea id="instruction"  name="instruction"></textarea>

            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
                CKEDITOR.replace( 'instruction', {
                  filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                  filebrowserUploadMethod: 'form'
                } );
            </script>
        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_1" class="col-md-4 col-form-label ">Post_photo_1 URL</label>
              <textarea style="height: 50px;"  class="form-control" id="post_photo_1" name="post_photo_1"></textarea> 
        </div>
        
        <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_2" class="col-md-4 col-form-label ">Post_photo_2 URL</label>
              <textarea style="height: 50px;"  class="form-control" id="post_photo_2" name="post_photo_2"></textarea> 
        </div>
        
         <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_3" class="col-md-4 col-form-label ">Post_photo_3 URL</label>
              <textarea style="height: 50px;"  class="form-control" id="post_photo_3" name="post_photo_3"></textarea> 
        </div>
        
         <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_4" class="col-md-4 col-form-label ">Post_photo_4 URL</label>
              <textarea style="height: 50px;"  class="form-control" id="post_photo_4" name="post_photo_4"></textarea> 
        </div>
        
         <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_5" class="col-md-4 col-form-label ">Post_photo_5 URL</label>
              <textarea style="height: 50px;"  class="form-control" id="post_photo_5" name="post_photo_5"></textarea> 
        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label for="video_url" class="col-md-4 col-form-label ">Video URL</label>
              <input  type="text" class="form-control" id="video_url" name="video_url"> 
        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label for="type" class="col-md-4 col-form-label ">Select project type:</label>
              <select style="width: 150px;" id="type" name="type">
                  <option value="electronics">Electronics</option>
                  <option value="arduino">Arduino</option>
                  <option value="robotics">Robotics</option>
                  <option value="automatics">Automatic</option>
              </select> 
        </div>


            <div style="margin-bottom: 25px;" class="row pt-3">
              <button class="btn btn-primary">Add new post</button>
            </div>
          </div>
      </div>
    </form>

</div>


        
    </body>
</html>
