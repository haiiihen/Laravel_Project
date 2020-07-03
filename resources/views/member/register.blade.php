<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | El Samara</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('klorofil/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('klorofil/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('klorofil/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('klorofil/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('klorofil/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<style>
		body {
			background-image: url('klorofil/assets/img/bg-login.jpg');
			/* background-color: black; */
		}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<p class="lead">Register your new account</p>
							</div>
							<form class="form-auth-small" action="/" method="POST">
								<!-- session has expired pake csrf  -->
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="control-label"></label>
								</div>
								<div class="form-group">
									<label for="signin-nama-depan" class="control-label sr-only">Nama Depan</label>
									<input name="nama_depan" type="text" class="form-control" id="signin-nama-depan" placeholder="Nama Depan">
								</div>
								<div class="form-group">
									<label for="signin-nama-belakang" class="control-label sr-only">Nama Belakang</label>
									<input name="nama_belakang" type="text" class="form-control" id="sifnin-nama-belakang" placeholder="Nama Belakang">
								</div>
								<div class="form-group">
									<label for="signin-no-handphone" class="control-label sr-only">No Handphone</label>
									<input name="noHandphone" type="text" class="form-control" id="signin-no-handphone" placeholder="No Handphone">
								</div>
								<div class="form-group">
									<label for="signin-instagram" class="control-label sr-only">Instagram</label>
									<input name="instagram" type="text" class="form-control" id="signin-instagram" placeholder="Instagram">
								</div>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span></br>
									<span class="helper-text"><i class=""></i><a href="/member/register">Register</a></a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>