<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>Dashkote - Bootstrap5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">

		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-xl-7 mx-auto">
                        <div class="card border-top border-0 border-4 border-dark">
                            <div class="card-body p-5">
                                <div class="card-title text-center"><i class="bx bxs-user-circle text-dark font-50"></i>
                                    <h5 class="mb-5 mt-2 h1 text-dark">User Login</h5>
                                </div>
                                <!-- Session Status -->
                                <h1 class="mb-4" :status="session('status')" ></h1>
                                <!-- Validation Errors -->
                                <h1 class="mb-4" :errors="$errors"> </h1>
                                <div>
                                Don't have an account?   <a href="{{ route('register') }}">  Sign Up</a>
                                </div>

                                <hr>
                                <form class="row g-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputLastEnterUsername" class="form-label">Enter Email</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                            <input type="email" name="email" :value="old('email')" required autofocus class="form-control border-start-0" id="inputLastEnterUsername" placeholder="Enter Username" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputLastEnterPassword" class="form-label">Enter Password</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open'></i></span>
                                            <input type="password" name="password" required autocomplete="current-password" class="form-control border-start-0" id="inputLastEnterPassword" placeholder="Enter Password" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck3" name="remember">
                                            <label class="form-check-label" for="gridCheck3">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                    @endif


                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-dark btn-lg px-5"><i class='bx bxs-lock-open'></i>Login</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="col-12 text-center">
                                        <p class="mb-0">or Sign in with:</p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
			</div>
		</div>

	</div>

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>
