<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

 	<link href="{{ asset('css/headline_menu.css') }}" rel="stylesheet">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="https://kit.fontawesome.com/012ce59742.js" crossorigin="anonymous"></script>
 	 	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




 	


</head>

<div class="topnav" id="nav">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 0px; border-radius: 0px; margin-bottom: 0px;">
	<!-- this is overlay menu -->
	<div class="menu-icon">
		<i onclick="openNav()" style="font-size: 45px; text-align: left;" class="fas fa-list-ul not-wide-display p-2 hover-color"></i>
	</div>
	<div id="myNav" class="overlay">
		<a style="border: none; margin-bottom: 30px;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div id="ovr_con" class="overlay-content">
				<a href="#" class="dr_btn" onclick="LdropFunction()">Mokymai <i class="fas fa-angle-right"></i></a>
				    <div id="lessons" class="drop_content sub">
					    <a href="#" class="dr_btn" onclick="LAdropFunction()">Arduino <i class="fas fa-angle-right"></i></a>
					   	<div id="LA" class="drop_content smaller-font">
							@foreach($lessonA AS $lesson) 
 							<a href="/lesson/{{ $lesson->id }}" >{!!$lesson->title!!}</a> 
							@endforeach
					    </div>
					     <a href="#" class="dr_btn" onclick="LEdropFunction()">Elektronika <i class="fas fa-angle-right"></i></a>
					    <div id="LE" class="drop_content smaller-font">
						   	@foreach($lessonE AS $lesson) 
    						<a href="/lesson/{{ $lesson->id }}"> {!!$lesson->title!!}</a> 
  							@endforeach
					    </div>
					    <a href="#" class="dr_btn" onclick="LAudropFunction()">Automatika <i class="fas fa-angle-right"></i></a>
					    <div id="LAu" class="drop_content smaller-font">
						   	@foreach($lessonAu AS $lesson) 
    						<a href="/lesson/{{ $lesson->id }}"> {!!$lesson->title!!}</a> 
  							@endforeach
					    </div>
					     <a href="#" class="dr_btn" onclick="LRdropFunction()">Robotika <i class="fas fa-angle-right"></i></a>
					    <div id="LR" class="drop_content smaller-font">
						   	@foreach($lessonR AS $lesson) 
    						<a href="/lesson/{{ $lesson->id }}"> {!!$lesson->title!!}</a> 
  							@endforeach
					    </div>
					</div>
				   <a href="#" class="dr_btn" onclick="PdropFunction()">Projektai <i class="fas fa-angle-right"></i></a>
				   <div id="projects" class="drop_content sub">
				    <a href="#" class="dr_btn" onclick="PAdropFunction()">Arduino <i class="fas fa-angle-right"></i></a>
					   	<div id="PA" class="drop_content smaller-font">
						   	@foreach($postA AS $post) 
    						<a href="/post/{{ $post->id }}"> {!!$post->title!!}</a> 
  							@endforeach
					    </div>
					   <a href="#" class="dr_btn" onclick="PEdropFunction()">Elektronika <i class="fas fa-angle-right"></i></a>
					   <div id="PE" class="drop_content smaller-font">
						   	@foreach($postE AS $post) 
    						<a href="/post/{{ $post->id }}"> {!!$post->title!!}</a> 
  							@endforeach
					    </div>
					   <a href="#" class="dr_btn" onclick="PAudropFunction()">Automatika <i class="fas fa-angle-right"></i></a>
					   <div id="PAu" class="drop_content smaller-font">
						   @foreach($postAu AS $post) 
    						<a href="/post/{{ $post->id }}"> {!!$post->title!!}</a> 
  							@endforeach
					    </div>
					   <a href="#" class="dr_btn" onclick="PRdropFunction()">Robotika <i class="fas fa-angle-right"></i></a>
					   <div id="PR" class="drop_content smaller-font">
						   	@foreach($postR AS $post) 
    						<a href="/post/{{ $post->id }}"> {!!$post->title!!}</a> 
  							@endforeach
					    </div>
					</div>
				    <a href="/about">Apie mus</a>	  
				</div>
			
	</div>

			  

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function LdropFunction() {
  document.getElementById("lessons").classList.toggle("show");
}
function PdropFunction() {
  document.getElementById("projects").classList.toggle("show");
}
function LAdropFunction() {
  document.getElementById("LA").classList.toggle("show");
}
function LEdropFunction() {
  document.getElementById("LE").classList.toggle("show");
}
function LAudropFunction() {
  document.getElementById("LAu").classList.toggle("show");
}
function LRdropFunction() {
  document.getElementById("LR").classList.toggle("show");
}
function PAdropFunction() {
  document.getElementById("PA").classList.toggle("show");
}
function PEdropFunction() {
  document.getElementById("PE").classList.toggle("show");
}
function PAudropFunction() {
  document.getElementById("PAu").classList.toggle("show");
}
function PRdropFunction() {
  document.getElementById("PR").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dr_btn')) {
    var dropdowns = document.getElementsByClassName("drop_content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

		<!-- overlay menu script -->
		<script>
			function openNav() {
			  document.getElementById("myNav").style.width = "100%";
			}

			function closeNav() {
			  document.getElementById("myNav").style.width = "0%";
			}
		</script>
		<!-- End of overlay menu -->

		<div class="menu_section">
		<a href="/" class="navbar-brand">
			<i style="font-size: 35px; margin-top: 8px; " class="fas fa-home"></i>
		</a>
		<div class="navbar-nav">
		    <a class="{{ (request()->segment(1) == 'lesson') ? 'active-menu' : '' }} nav-item nav-link" href="/lesson/1">Mokymai</a>
		    <a class="{{ (request()->segment(1) == 'post') ? 'active-menu' : '' }} nav-item nav-link" href="/post/1">Projektai</a>
		    <a class="{{ (request()->segment(1) == 'about') ? 'active-menu' : '' }} nav-item nav-link" href="/about">Apie mus</a>
    </div>
		</div><div class="search-section">
			<a href="javascript:void(0)" class="navbar-brand" style="height: auto; padding: 0px; margin-left:0px; margin-top: 5px;">
				<!--This is a empty space for Search icon or other helpful icons svg code-->
				
			</a>
		</div>
		
	</div>

<!--This is a script for sticky/fixed navbar and couple lines for fixed sidebar-->
<script>
	window.onscroll = function() {myFunction()};
	var side = document.getElementById("side");
	var nav = document.getElementById("nav");
	var sticky = nav.offsetTop;

	function myFunction() {
	  if (window.pageYOffset >= sticky) {
	    nav.classList.add("sticky");
	     document.getElementById("side").style.marginTop='-70px';
	     document.getElementById("side").style.transition='1s';
	   
	  } else {
	    nav.classList.remove("sticky");
	    document.getElementById("side").style.marginTop='0px';
	    document.getElementById("side").style.transition='0s';
	  }
	}
</script>


</nav>
</div>

