<head>
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/control_panel.css') }}">

</head>

@include('layouts.app')


<div class="row">
	<div style="margin-top: -45px; border-right: 5px solid #BA2F11;" class="col-12">
    	<div class="control_panel_headline">
    		
    			<a href="#"><img style="width: 35px; height: 35px;" src="/svg/delete-white.svg" alt="My SVG Icon">
    		Are you sure you want to delete this item?</a>
        </div>
          <div class="create_options d-flex">
            <div class="col-sm for_options">
              <a href="/lesson/{{ $lessonq->id }}/delete/confirm"><img style="width: 30px; height: 30px;" src="/svg/ok-white.svg" alt="My SVG Icon">Delete</a> 
            </div>
            <div class="col-sm for_options">
              <a href="/admin"><img style="width: 30px; height: 30px;" src="/svg/no-white.svg" alt="My SVG Icon">Return</a> </div>
            <div class="col-sm for_options"></div>
          </div>

