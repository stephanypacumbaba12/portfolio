<!doctype html>
<html lang="en">
  <head>
  	<title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="{{asset('page/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('page/css/style.css')}}">
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
	  		<h1><a href="/admin" class="logo">Profile System</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Add_UserAccount</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-user mr-3"></span> Add_Admin</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3"></span> Show_Account_Login</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Settings</a>
          </li>
          <li>
              <a href="{{ route('admin_logout')}}"><span class="fa fa-user mr-3"></span> Logout</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">HELLO ADMIN</h2>
        <p>{{_('This Website is for Admin Only!!')}}</p>
      </div>
		</div>

    <script src="{{asset('page/js/jquery.min.js')}}"></script>
    <script src="{{asset('page/js/popper.js')}}"></script>
    <script src="{{asset('page/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('page/js/main.js')}}"></script>
  </body>
</html>