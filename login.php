<html lang="en">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>
		Demo Erp
	</title>

	<meta name="author" content="jonisp1@gmail.com">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Web font -->
	<!--begin::Base Styles -->
	<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->
	<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url(assets/app/media/img//bg/bg-1.jpg);">
			<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
				<div class="m-login__container">
					<div class="m-login__logo">
						<a href="#">
							<img src="img/logo_l.png">
						</a>
					</div>
					<div class="m-login__signin">
						<div class="m-login__head">
							<h3 class="m-login__title">
								Demo Erp
								<br>
								<p style="font-size: 15px;"><br>
									Username : test@demoerp.ga<br>
									Password : test@demoerp.ga<br>
								</p>
							</h3>
						</div>
						<form class="m-login__form m-form" action="backend/SecureLogin/includes/process_login.php" method="POST" name="login_form" onsubmit="return formhash(this, this.password);">
							<div class="form-group m-form__group">
								<input class="form-control m-input" type="text" name="email" id="username" placeholder="Username" required="" autocomplete="off">
							</div>
							<div class="form-group m-form__group">
								<input class="form-control m-input m-login__form-input--last" name="password" id="password" placeholder="Password" required="" type="password">
							</div>

							<div class="form-group m-form__group">
								<div class="m--space-10"></div>

								<div id="login_select_bool">

								</div>

								<div class="m-login__form-action">
									<button id="login_b" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
										Login
									</button>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
	<script src="assets/demo/default/custom/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script>

</body>

</html>