<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet" />
		<link href="css/inscricao.css" rel="stylesheet" />
		<title>Signin</title>
		<link rel = "stylesheet" type="text/css" href="css/hover.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
			<nav>
			<a href="Servico.html"><button class="servico">SERVIÇO</button></a>
			<a href="About.html"><button class="sobre">SOBRE</button></a>
			<a href="Index.html"><button class="home">HOME</button></a>
			<div class="logo"></div>
			<a href="Login.html"><button class="entrar">ENTRAR</button></a>
		</nav>
		<div class="rodape">
			<a href="politica.html"><button class="rodape_txt">Políticas de privacidade</button></a>
			<a href="termos.html"><button class="rodape_txt_1">Termos de uso &nbsp;|</button></a>
		</div>
		<div class="colab">
				<span class="colab_head">QUER SE TORNAR UM COLABORADOR?</span>
				<a href="Cadastroemp.html"><button class="clique">CLIQUE AQUI</button></a>
			</div>
			<div class="inscrever">
				<div class="inscrever_body">
					<a href="#" class="inscrever_facebook"></a>
					<a href="#" class="inscrever_google"></a>
					<a href="#" class="inscrever_linkedin"></a>
					<span class="inscrever_head">CRIAR CONTA</span>
					<span class="inscrever_txt">ou use seu e-mail:</span>
					<form id="inscricao" >
					  <input id="email" class="inscrever_email" type="email" name="email" placeholder="exemplo@email.com" required>
						<input if="nome" class="inscrever_nome" type="text" name="nome" placeholder="nome" required>
					  <input id="senha" class="inscrever_senha" type="password" name="senha" placeholder="senha" required>
					<input class="inscrever_button" type="submit" value="INSCREVER" form="inscricao">
					<input class="inscrever_termos_button" type="checkbox" name="termos" required>
					</form>
					<span class="inscrever_termos_button_1">Concordo com os <a href="termos.html">termos de uso</a>.</span>
					</div>
			</div>
			<div class="login">
				<div class="login_body">
					<span class="login_head">JÁ POSSUI CONTA?<br><br>BEM-VINDO DE VOLTA!</span>
					<a href="Login.html"><button class="login_button">LOGIN</button></a>
				</div>
			</div>
	</body>
</html>
