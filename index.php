<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="res/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="res/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/css/util.css">
	<link rel="stylesheet" type="text/css" href="res/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Bem-Vindo
					</span>
					<span class="login100-form-title p-b-48">
						<img src="logo.png" alt="logo" width="100px" height="50%" class="foto">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<span class="login100-form p-b-26">
							Email:
						</span>
						<input class="email1 input100" type="text" name="email">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">	
						<span class="login100-form p-b-26">
							Senha:
						</span>
						<input class="senha input100" type="password" name="pass">
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="btn-entrar login100-form-btn">
								Entrar
							</button>
						</div>
					</div>
				</form>
				<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="cadastro.php" class="login100-form-btn">
								Criar Conta
							</a>
						</div>
					</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="res/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/bootstrap/js/popper.js"></script>
	<script src="res/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/daterangepicker/moment.min.js"></script>
	<script src="res/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="res/js/main.js"></script>

</body>

<script>

	$(".btn-entrar").click(function(e){
		e.preventDefault();
        $.ajax({
            url: 'backend/login.php',
            data: {email: $('.email1').val(), senha: $('.senha').val()},
            method: 'POST',
            type: 'POST',
            success: function(data){
               if(data == "admin"){
					alert("Admin logado com sucesso!");
					$(location).prop('href', 'admin/produtos.php')
			   }else if(data == "Logado com sucesso!"){
					alert(data);
					$(location).prop('href', 'home.php')
			   }else if(data == "Email ou Senha incorretos!"){
					alert(data);
			   }else{
				   alert("Erro!");
			   }
            }
        });
    })

</script>

</html>