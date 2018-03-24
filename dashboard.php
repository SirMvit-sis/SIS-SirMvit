<?php
session_start ();
include ('header.php');
/*if (! (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) ) {

	header ( 'location:login.php' );
}

    include('libs/dbfunction.php');
*/?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<!--- Include the above in your HEAD tag ---------->
    <link href="css/dd.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	/*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });


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
<div id="headerwrapper">
<?php  include ('header.php'); ?>
    <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <nav id="spy">
                    <ul class="sidebar-nav nav">
                        <li class="sidebar-brand">
                            <a href="#home"><span class="fa fa-home solo">Home</span></a>
                        </li>
                        <li>
                            <a href="#anch1" data-scroll>
                                <span class="fa fa-anchor solo">Anchor 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch2" data-scroll>
                                <span class="fa fa-anchor solo">Anchor 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch3" data-scroll>
                                <span class="fa fa-anchor solo">Anchor 3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch4" data-scroll>
                                <span class="fa fa-anchor solo">Anchor 4</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="content-header">
                    <h1 id="home">
                        <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                        Sidebar Navigation Template
                    </h1>
                </div>

                <div class="page-content inset" data-spy="scroll" data-target="#spy">
                    <div class="row">

                            <div class="jumbotron text-center" >
                                <h1>Hello Beautiful!</h1>
                                <p>This is a sidebar navigation responsive template built off of Bootstrap 3.0 and simple sidebar template. It includes anchors, scroll spy, smooth scroll, and Awesome icon fonts.</p>
                                <p><a class="btn btn-default">Click On Me!</a>
                                <a class="btn btn-info">Tweet Me!</a></p>
                            </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 well">
                            <legend id="anch1">Anchor 1</legend>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
                            <p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
                        </div>
                        <div class="col-md-12 well">
                            <legend id="anch2">Anchor 2</legend>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
                            <p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
                        </div>
                        <div class="col-md-12 well">
                            <legend id="anch3">Anchor 3</legend>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
                            <p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
                        </div>
                        <div class="col-md-12 well">
                            <legend id="anch4">Anchor 4</legend>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
                            <p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
                        </div>
                    </div>

                    <div class="navbar navbar-default navbar-static-bottom">
                        <p class="navbar-text pull-left">
                            Built by <a href="http://mvnguyen.com" target="_blank">Michael V Nguyen
                        </p>
                    </div>
                </div>

            </div>

        </div>
</div>
