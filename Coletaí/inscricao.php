<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet" />
		<link href="css/inscricao.css" rel="stylesheet" />
		<title>Inscreva-se</title>
		<link rel = "stylesheet" type="text/css" href="css/hover.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			<div class="inscrever">
				<div class="inscrever_body">
					<a href="#" class="inscrever_facebook"></a>
					<a href="#" class="inscrever_google"></a>
					<a href="#" class="inscrever_linkedin"></a>
					<span class="inscrever_head">CRIAR CONTA</span>
					<span class="inscrever_txt">ou use seu e-mail:</span>
					<form id="inscricao" action="includes/signup.inc.php" method="post" >
					  <input id="email" class="inscrever_email" type="email" name="email" placeholder="exemplo@email.com" required>
						<input id="nome" class="inscrever_nome" type="text" name="nome" placeholder="nome de usuário" required>
					  <input id="senha" class="inscrever_senha" type="password" name="senha" placeholder="senha" required>
					<button class="inscrever_button" type="submit" name="submit">INSCREVER</button>
					<input class="inscrever_termos_button" type="checkbox" name="termos" required>
					</form>
					<?php
					if (isset($_GET["error"])) {
						if ($_GET["error"] == "emptyinput")  {
							echo "<p> Preencha todos os campos! </p>";
						}
						else 	if ($_GET["error"] == "invalidName")  {
								echo "<p> Escolha um nome válido! </p>";
						}
						else 	if ($_GET["error"] == "invalidEmail")  {
									echo "<p> Escolha um e-mail válido! </p>";
						}
						else 	if ($_GET["error"] == "stmtfailed")  {
										echo "<p> Alguma coisa deu errado, tente de novo!</p>";
						}
						else 	if ($_GET["error"] == "NomeExiste")  {
										echo "<p> Nome já registrado, tente outro!</p>";
						}
						else 	if ($_GET["error"] == "none")  {
										echo "<p> Usuário registrado!</p>";
						}
				}
					 ?>
					<span class="inscrever_termos_button_1">Concordo com os <a href="termos.php">termos de uso</a>.</span>
					</div>
			</div>
			<div class="login">
				<div class="login_body">
					<span class="login_head">JÁ POSSUI CONTA?<br><br>BEM-VINDO DE VOLTA!</span>
					<a href="login.php"><button class="login_button">LOGIN</button></a>
				</div>
			</div>
	</body>
</html>
