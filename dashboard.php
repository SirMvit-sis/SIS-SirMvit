<?php
session_start ();

/*if (! (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) ) {

	header ( 'location:login.php' );
} 
   
    include('libs/dbfunction.php');
*/?>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>

<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"></script>
     <link rel="stylesheet" href="css/dd.css">
<scrip src="dd.js"></script>
<script type="text/javascript">
$(document).ready(function() {
		$('a[href*=#]').bind('click', function(e) {
				e.preventDefault(); // prevent hard jump, the default behavior

				var target = $(this).attr("href"); // Set the target as variable

				// perform animated scrolling by getting top-position of target-element and set it as scroll target
				$('html, body').stop().animate({
						scrollTop: $(target).offset().top
				}, 600, function() {
						location.hash = target; //attach the hash (#jumptarget) to the pageurl
				});

				return false;
		});
});

$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();

		// Show/hide menu on scroll
		//if (scrollDistance >= 850) {
		//		$('nav').fadeIn("fast");
		//} else {
		//		$('nav').fadeOut("fast");
		//}
	
		// Assign active class to nav links while scolling
		$('.page-section').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
						$('.navigation a.active').removeClass('active');
						$('.navigation a').eq(i).addClass('active');
				}
		});
}).scroll();
</script>
       
     <!--      <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>User Name</h3>  
                </div>
			<li id="profile">
				  <figure class="profile-userpic">
				    <img src="kvd.jpg" class="img-responsive" alt="Profile Picture">
				  </figure>
		<!--	<div class="profile-usertitle">
		            <div class="profile-usertitle-name">That Person</div>	
			    <div class="profile-usertitle-title">Administrator</div>
        		</div>  
                        </li>



                <ul id="list" class="list-unstyled components">
                  <!--  <p>Dummy Heading</p>
                      <li>
                        <a href="#1">Intro</a>
                    </li>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#2">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#3">About</a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#4">Page 1</a></li>
                            <li><a href="#5">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#6">Portfolio</a>
                    </li>
                    <li>
                        <a href="#7contact">Contact</a>
                    </li>
                </ul>

              <!--  <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul>
            </nav>
-->
<nav class="navigation" id="mainNav">
			  <h3><?php echo strtoupper(htmlentities($_SESSION['username']));?></h3>  
				<li id="profile">
				  <figure class="profile-userpic">
				    <img src="kvd.jpg" class="img-responsive" alt="Profile Picture">
				  </figure>
				</li>
                         <ul class="list-unstyled components">
			<li><a class="navigation__link" href="#1">Section 1</a></li>
			<li><a class="navigation__link" href="#2">Section 2</a></li>
			<li><a class="navigation__link" href="#3">Section 3</a></li>
			<li><a class="navigation__link" href="#4">Section 4</a></li>
				<li><a class="navigation__link" href="#5">Section 5</a></li>
				<li><a class="navigation__link" href="#6">Section 6</a></li>
				<li><a class="navigation__link" href="#7">Section 7</a></li>
                        </ul>
</nav>

<div class="page-section hero" id="1">
			<h1>Smooth scroll, fixed jump menu with active class</h1>
</div>
<div class="page-section" id="2">
			<h1>Section Two</h1>
</div>
<div class="page-section" id="3">
			<h1>Section Three</h1>
</div>
<div class="page-section" id="4">
			<h1>Section Four</h1>
</div>
<div class="page-section" id="5">
			<h1>Section Five</h1>
</div>
<div class="page-section" id="6">
			<h1>Section Six</h1>
</div>
<div class="page-section" id="7">
			<h1>Section Seven</h1>
</div>

</body>
</head>


