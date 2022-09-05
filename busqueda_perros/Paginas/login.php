<!DOCTYPE html>
<html lang="es">

	<head>  
    	<title>PATITAS CORDOBA</title>
    	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    	<!------ Include the above in your HEAD tag ---------->

    	<!-- All the files that are required -->
    	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	</head>

	<body>

		<style>

			body {
  				background: #efefef;
  				padding: 10px;
  				font-family: 'Varela Round';
			}
			/*=== 2. Anchor Link ===*/
			a {
  				color: #aaaaaa;
  				transition: all ease-in-out 200ms;
			}			
			a:hover {
  				color: #333333;
  				text-decoration: none;
			}
			/*=== 3. Text Outside the Box ===*/
			.etc-login-form {
  				color: #919191;
  				padding: 10px 20px;
			}
			.etc-login-form p {
  				margin-bottom: 5px;
			}		
			/*=== 4. Main Form ===*/
			.login-form-1 {
  				max-width: 300px;
  				border-radius: 5px;
  				display: inline-block;
			}
			.main-login-form {
  				position: relative;
			}
			.login-form-1 .form-control {
  				border: 0;
  				box-shadow: 0 0 0;
  				border-radius: 0;
  				background: transparent;
  				color: #555555;
  				padding: 7px 0;
  				font-weight: bold;
  				height:auto;
			}
			.login-form-1 .form-control::-webkit-input-placeholder {
  				color: #999999;
			}
			.login-form-1 .form-control:-moz-placeholder,
			.login-form-1 .form-control::-moz-placeholder,
			.login-form-1 .form-control:-ms-input-placeholder {
  				color: #999999;
			}
			.login-form-1 .form-group {
  				margin-bottom: 0;
  				border-bottom: 2px solid #efefef;
  				padding-right: 20px;
  				position: relative;
			}
			.login-form-1 .form-group:last-child {
  				border-bottom: 0;
			}
			.login-group {
  				background: #ffffff;
  				color: #999999;
  				border-radius: 8px;
 				padding: 10px 20px;
			}
			.login-group-checkbox {
  				padding: 5px 0;
			}
			/*=== 5. Login Button ===*/
			.login-form-1 .login-button {
				position: absolute;
				right: -25px;
				top: 50%;
				background: #ffffff;
				color: #999999;
				padding: 11px 0;
				width: 50px;
				height: 50px;
				margin-top: -25px;
				border: 5px solid #efefef;
				border-radius: 50%;
				transition: all ease-in-out 500ms;
			}
			.login-form-1 .login-button:hover {
				color: #555555;
				transform: rotate(450deg);
			}
			.login-form-1 .login-button.clicked {
  				color: #555555;
			}
			.login-form-1 .login-button.clicked:hover {
  				transform: none;
			}
			.login-form-1 .login-button.clicked.success {
  				color: #2ecc71;
			}
			.login-form-1 .login-button.clicked.error {
 				color: #e74c3c;
			}

		</style>

		<div class="text-center" style="padding:50px 0">
		<div class="logo">login</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left" action="../modelos/acceder.php" method="POST">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Mail</label>
							<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="Mail" required>
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Contraseña</label>
							<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="Contraseña" required>
						</div>
					</div>
					<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
				<div class="etc-login-form">
					<p>Nuevo Usuario? <a href="./Registro.php">Crear nueva cuenta</a></p>
				</div>
			</form>
		</div>
		<!-- end:Main Form -->
		</div>
	</body>
</html>