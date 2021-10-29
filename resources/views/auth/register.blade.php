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

						<hr/>
						<div class="card border-top border-0 border-4">
							<div class="card-body p-5">
								<div class="card-title d-flex ">
									<div><i class="bx bxs-user me-1  font-50 text-danger"></i>
									</div>
									<h5 class="mb-0 mt-3  mx-auto h1 text-danger "> Registration</h5>
								</div>
                                <div>
                                Have an account?   <a href="{{ route('login') }}">  Sign In</a>
                                </div>
								<hr>
                               <h1 text-danger> <x-auth-validation-errors class="mb-4" :errors="$errors" /></h1>
								<form class="row g-3" method="POST" action="{{ route('register') }}">
                                    @csrf
									<div class="col-12">
										<label for="inputLastName1" class="form-label">Full  Name</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" name="name" :value="old('name')" required />
										</div>
									</div>
									<div class="col-12">
										<label for="inputEmailAddress" class="form-label">Email Address</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
											<input type="email" class="form-control border-start-0" id="inputEmailAddress" placeholder="Email Address" name="email" :value="old('email')" required />
										</div>
									</div>
									<div class="col-12">
										<label for="inputChoosePassword" class="form-label">Choose Password</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
											<input class="form-control border-start-0" id="inputChoosePassword" placeholder="Choose Password" type="password"  name="password" required autocomplete="new-password"/>
										</div>
									</div>
									
									<div class="col-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck2">
											<label class="form-check-label" for="gridCheck2">Check me out</label>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-danger px-5">Register</button>
									</div>
								</form>
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





