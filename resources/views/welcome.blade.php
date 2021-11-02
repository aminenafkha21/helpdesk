<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Helpdesk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('assets/css/welcome/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/welcome/animate.css')}}">
    


    <link rel="stylesheet" href="{{URL::asset('assets/css/welcome/ionicons.min.css')}}">	
    
    <link rel="stylesheet" href="{{URL::asset('assets/css/welcome/style.css')}}">
  </head>
  <body>
		
  <div class="main-section">

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Helpdesk.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"> Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"> Documentation</a></li>
                    <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"> Contact</a></li>


	        </ul>
            @if (Route::has('login'))

	        <ul class="navbar-nav ml-auto">
               @auth



                        <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link icon d-flex align-items-center" data-toggle="dropdown">
						{{Auth::user()->name}}
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a href="{{ url('/home') }}" class="dropdown-item"> Dashboard</a>
                            <a href="{{ route('logout') }}" class="dropdown-item"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                        </div>
                        </li>	    
                        
            @else    

                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link icon d-flex align-items-center"> Log in</a></li>

            
	        </ul>
            @endauth
            @endif

	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

  	<section class="hero-wrap js-fullheight img" style="  background-image: url('{{asset('assets/images/bg_3.jpg')}}'); ">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row description js-fullheight align-items-center justify-content-center">
  				<div class="col-md-8 text-center">
  					<div class="text">
  						<h1>Helpdesk System.</h1>
  						<h4 class="mb-5">Ticketing System</h4>
  						<p><a href="#" class="btn btn-primary px-4 py-3"><i class="ion-ios-cloud-download mr-2"></i>Log in</a></p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>




	  <section class="ftco-section" id="notifications">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="heading-section mb-4">Notifications</h2>
						<div class="alert alert-info">
			        <div class="container">
			        	<div class="d-flex">
				          <div class="alert-icon">
				            <i class="ion-ios-information-circle-outline"></i>
				          </div>
				          <p class="mb-0 ml-2"><b>Info alert:</b> You&apos;ve got some friends nearby, stop looking at your phone and find them...</p>
				        </div>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
			          </button>
			        </div>
			      </div>
			      <div class="alert alert-success">
			        <div class="container">
			        	<div class="d-flex">
				          <div class="alert-icon">
				            <i class="ion-ios-checkmark-circle"></i>
				          </div>
				          <p class="mb-0 ml-2"><b>Success Alert:</b> Yuhuuu! You&apos;ve got your $11.99 album from The Weeknd</p>
				        </div>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
			          </button>
			        </div>
			      </div>
			      <div class="alert alert-warning">
			        <div class="container">
								<div class="d-flex">
				          <div class="alert-icon">
				            <i class="ion-ios-warning"></i>
				          </div>
				          <p class="mb-0 ml-2"><b>Warning Alert:</b> Hey, it looks like you still have the &quot;copyright &#xA9; 2015&quot; in your footer. Please update it!</p>
				        </div>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
			          </button>
			        </div>
			      </div>
			      <div class="alert alert-danger">
			        <div class="container">
			        	<div class="d-flex">
				          <div class="alert-icon">
				            <i class="ion-ios-information-circle-outline"></i>
				          </div>
				          <p class="mb-0 ml-2"><b>Error Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...</p>
			          </div>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
			          </button>
			        </div>
			      </div>
					</div>
				</div>
			</div>
	  </section>
	  <!-- - - - - -end- - - - -  -->


	  <section class="ftco-section" id="images">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="heading-section mb-4">TEAM</h2>
						<div class="row">
							<div class="col-md-3 text-center">
								<h2 class="heading-section mb-4">
									<small>Rounded Image</small>
								</h2>
								<img src="images/avatar.jpg" alt="Round Image" class="rounded img-fluid image">
							</div>
							<div class="col-md-3 text-center">
								<h2 class="heading-section mb-4">
									<small>Circle Image</small>
								</h2>
								<img src="images/avatar.jpg" alt="Circle Image" class="rounded-circle img-fluid image">
							</div>
							<div class="col-md-3 text-center">
								<h2 class="heading-section mb-4">
									<small>Rounded Raised</small>
								</h2>
								<img src="images/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded img-fluid image">
							</div>

							<div class="col-md-3 text-center">
								<h2 class="heading-section mb-4">
									<small>Circle Raised</small>
								</h2>
								<img src="images/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle thumbnail img-fluid image">
							</div>
						</div>
					</div>
				</div>
			</div>
	  </section>
	  <!-- - - - - -end- - - - -  -->




    <!-- - - - - -end- - - - -  -->
		

	  <footer class="ftco-section ftco-section-2">
	  	<div class="col-md-12 text-center">
          <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());

            </script> All rights reserved | This System is made with MasterMind Team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
	  </footer>

  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/aos.js')}}"></script>
  <script src="{{URL::asset('assets/js/main.js')}}"></script>
    
  </body>
</html>