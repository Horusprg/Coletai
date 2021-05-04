<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet" />
		<link href="css/login.css" rel="stylesheet" />
		<title>Login</title>
		<link rel = "stylesheet" type="text/css" href="css/hover.css"/>
	</head>
	<body>
		<nav>
			<a href="servico.php"><button class="servico">SERVIÇO</button></a>
			<a href="about.php"><button class="sobre">SOBRE</button></a>
			<a href="index.php"><button class="home">HOME</button></a>
			<div class="logo"></div>
			<a href="login.php"><button class="entrar">ENTRAR</button></a>
		</nav>
		<div class="rodape">
			<a href="politica.php"><button class="rodape_txt">Políticas de privacidade</button></a>
			<a href="termos.php"><button class="rodape_txt_1">Termos de uso &nbsp;|</button></a>
		</div>
			<div class="colab">
				<span class="colab_head">QUER SE TORNAR UM COLABORADOR?</span>
				<a href="cadastroemp.php"><button class="clique">CLIQUE AQUI</button></a>
			</div>
			<div class="inscrevase">
					<span class="inscrevase_head">NÃO TEM CONTA?<br>INSCREVA-SE! </span>
				<a href="inscricao.php"><button class="inscrevase_button">INSCREVER</button></a>
			</div>
			<div class="login">
				<div class="login_body">
					<a href="#" class="login_facebook"></a>
					<a href="#" class="login_google"></a>
					<a href="#" class="login_linkedin"></a>
					<span class="login_head">ENTRE NO COLETAÍ</span>
					<span class="login_txt">ou insira o e-mail da sua conta:</span>
					<form id="login" action="includes/login.inc.php" method="post">
					  <input class="login_email" type="email" name="nome" placeholder="exemplo@email.com" required>
					  <input class="login_senha" type="password" name="senha" placeholder="senha" required>
						<button class="login_button" type="submit" name="login">LOGIN</button>
					</form>
					<?php
					if (isset($_GET["error"])) {
						if ($_GET["error"] == "emptyinput")  {
							echo "<p> Preencha todos os campos! </p>";
						}
						else 	if ($_GET["error"] == "wronglogin")  {
							echo "<p> Informações de login incorretas!</p>";
						}
				}
					 ?>
					<a href="#"><button class="login_esqueci">Esqueci minha senha</button></a>
					<div class="v247_188">
						<span class="v247_86"></span>
					</div>
				</div>
			</div>
	</body>
</html>
