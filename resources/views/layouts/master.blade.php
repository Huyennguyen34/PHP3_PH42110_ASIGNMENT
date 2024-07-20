<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/minberi-mag/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2024 13:10:00 GMT -->
<head>
	<title>MinberiMAG</title>
    @include('layouts.partials.head')

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			@include('layouts.partials.header')
			@include('layouts.partials.nav')
			
		</header>
		<!-- End Header -->

		<!-- wide-news-heading
			================================================== -->
		<!-- End wide-news-heading -->

		<!-- content-section 
			================================================== -->
           @yield('content')
		<!-- End content section -->

		<!-- footer 
			================================================== -->
		<footer>
			@include('layouts.partials.footer')
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<!-- Login Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	        <div class="title-section">
	        	<h1>Login</h1>
	        </div>
			<form id="login-form">
				<p>Welcome! Login to your account.</p>
				<label for="username">Username or Email Address*</label>
				<input id="username" name="username" type="text">
				<label for="password">Password*</label>
				<input id="password" name="password" type="password">
				<button type="submit" id="submit-register">
					<i class="fa fa-paper-plane"></i> Login
				</button>
			</form>
	      	<p>Don't have account? <a href="register.html">Register Here</a></p>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- End Login Modal -->

	@include('layouts.partials.js')
	
</body>

<!-- Mirrored from nunforest.com/minberi-mag/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2024 13:12:09 GMT -->
</html>