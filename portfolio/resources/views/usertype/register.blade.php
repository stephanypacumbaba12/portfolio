<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('usertype/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url(usertype/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Dont have an account?</h3>
                  <form action="{{ route('register_validate') }}" method="POST" class="signin-form">
                    @csrf
		      		<div class="form-group">
		      			<input type="text" name="name" class="form-control" placeholder="Username">
                          @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
		      		</div>
                      <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
	            </div>
                <div class="form-group">
                    <select name="user_type" class="form-control">
                      <option value="user">User</option>
                      <option value="employer">Employer</option>
                    </select>
                  </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign up</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
              <p class="w-100 text-center">&mdash;<a href="login">Login</a> &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('usertype/js/jquery.min.js')}}"></script>
  <script src="{{asset('usertype/js/popper.js')}}"></script>
  <script src="{{asset('usertype/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('usertype/js/main.js')}}"></script>

	</body>
</html>

