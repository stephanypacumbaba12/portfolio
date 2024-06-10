<!doctype html>
<html lang="en">
  <head>
  	<title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('dash/css/style.css')}}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="/dashboard" class="logo">Portfolio System</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
                @if(Auth::check())
                @if(Auth::user()->user_type === 'user')
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Background Info</a>
                @elseif(Auth::user()->user_type === 'employer')
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profile Info</a>
                @endif
                @endif
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="/background">Show</a>
                </li>
                <li>
                    <a href="#">Add</a>
                </li>
                <li>
                    <a href="#">Edit</a>
                </li>
                <li>
                    <a href="#">Delete</a>
                </li>   
	            </ul>
	          </li>
              @guest
              <li>
                <a href="{{route('login')}}">Login</a>
            </li> 
            <li>
                <a href="{{route('register')}}">Register</a>
            </li>
            @else
            <li>
                <a href="{{route('logout')}}">Logout</a>
            </li>
            @endguest
	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights <i class="icon-heart" aria-hidden="true"></i> reserved Portfolio
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @if(Auth::check())
        @if(Auth::user()->user_type === 'user')
        <div class="alert alert-message">
        <h2 class="mb-4">Hello User</h2>
        <p>Welcome</p>
		</div>
        @elseif(Auth::user()->user_type === 'employer')
        <div class="alert alert-message">
        <h2 class="mb-4">Hello Employer</h2>
        <p>Welcome</p>
        </div>
        @endif
        @endif
    </div>

    <script src="{{asset('dash/js/jquery.min.js')}}"></script>
    <script src="{{asset('dash/js/popper.js')}}"></script>
    <script src="{{asset('dash/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dash/js/main.js')}}"></script>
  </body>
</html>