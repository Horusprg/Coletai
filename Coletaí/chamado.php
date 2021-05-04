<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type="text/css" href="css/chamado.css"/>
		<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet" />
		<link rel = "stylesheet" type="text/css" href="css/hover.css"/>
		<title>Enviar_chamado</title>
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
		<form id= "lixo_info" class="lixo">
			<label class="lixo_head">PEDIR COLETA</label>
			<label  class="tipo">TIPO DE ENTULHO:<br>
				<label for="alvenaria">Alvenaria
					<input id="alvenaria" type="checkbox" name="alvenaria">
				</label>
				
				<label for="concreto">Concreto
					<input id="concreto" type="checkbox" name="concreto">
				</label>
				
				<label for="argamassa">Argamassa
					<input id="argamassa" type="checkbox" name="argamassa">
				</label>
				
				<label for="terra">Terra
					<input id="terra" type="checkbox" name="terra">
				</label>
				
				<label for="madeira">Madeira
					<input id="madeira" type="checkbox" name="madeira">
				</label>
				
				<label for="metal">Metal
					<input id="metal" type="checkbox" name="metal">
				</label>
				
				<label for="plastico">Plástico
					<input id="plastico" type="checkbox" name="plastico">
				</label>
				
				
				<label for="papel">Papel
					<input id="papel" type="checkbox" name="papel">
				</label>
				
				<label for="gesso">Gesso
					<input id="gesso" type="checkbox" name="gesso">
				</label>
				
				<label for="vidro">Vidro
					<input id="vidro" type="checkbox" name="vidro">
				</label>
			</label>
		  <label class="tamanho" for="tamanho">TAMANHO: &nbsp;
				<input type="text" id="tamanho" placeholder="M³">
			</label>
			<label class="endereco_cep" for="endereco_cep">CEP: &nbsp;
				<input type="text" id="endereco_cep" placeholder="12345-678">
			</label>
			<label class="endereco" for="endereco">ENDEREÇO: &nbsp;
				<input type="text" id="endereco">
			</label>
			<label class="endereco_num" for="endereco_num">NÚMERO: &nbsp;
				<input type="text" id="endereco_num">
			</label>
			<label class="imagem" for="imagem">IMAGEM:
				<br><br><input type="file" id="imagem" accept="image/png, image/jpeg" name="imagem" multiple>
			</label>
			<input class="enviar" type="submit" value="ENVIAR">
	</form>
	</body>
</html>
	