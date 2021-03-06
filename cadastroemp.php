<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
		<link href="css/cadastroemp.css" rel="stylesheet" />
		<title>Cadastro</title>
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
		<form class="info_txt" id="cademp" >
			<span class="info_head">CADASTRO DE EMPRESA</span>
			
			<span class="info_0">(*) PREENCHIMENTO OBRIGATÓRIO.</span>
			
			<span class="info_1">RAZÃO SOCIAL*:</span>
			<input class="razao_social" type="text" name="razao_social" placeholder="RAZÃO SOCIAL" required>
			
			<span class="info_2">NOME FANTASIA:</span>
			<input class="fantasia" type="text" name="fantasia" placeholder="NOME FANTASIA">
			
			<span class="info_3">CNPJ*:</span>
			<input class="cnpj" type="text" name="cnpj" placeholder="**.***.***/****-**" required>
			
			<span class="info_4">I.M.*:</span>
			<input class="im" type="text" name="im" placeholder="INSCRIÇÃO MUNICIPAL" required>
			
			<span class="info_5">TELEFONE:</span>
			<input class="telefone" type="tel" name="telefone" placeholder="(**) 1234 - 5678">
			
			<span class="info_6">CELULAR*:</span>
			<input class="celular" type="tel" name="celular" placeholder="(**) 91234 - 5678" required>
			
			<span class="info_7">RUA*:</span>
			<input class="endereco" type="text" name="endereco" placeholder="RUA" required>
			
			<span class="info_8">COMPLEMENTO:</span>
			<input class="endereco_comp" type="text" name="endereco_comp" placeholder="COMPLEMENTO">
			
			<span class="info_9">NÚMERO*:</span>
			<input class="endereco_num" type="text" name="endereco_num" placeholder="NÚMERO" required>
			
			<span class="info_10">BAIRRO*:</span>
			<input class="endereco_bairro" type="text" name= "endereco_bairro" placeholder="BAIRRO" required>
			
			<span class="info_11">CIDADE*:</span>
			<input class="endereco_cid" type="text" name="endereco_cid" placeholder="CIDADE" required>
			
			<span class="info_12">CEP*:</span>
			<input class="endereco_cep" type="text" name="endereco_cep" placeholder="12345-123" required>
			
			<span class="info_13">E-MAIL*:</span>
			<input class="email" type="email" name="email" placeholder="exemplo@mail.com" required>
			
			<span class="info_14">SENHA*:</span>
			<input class="senha" type="password" name="senha" placeholder="SENHA" required>
			
			<span class="info_15">CONFIRME A SENHA*:</span>
			<input class="senha_conf" type="password" name="senha_check" placeholder="CONFIRME A SENHA" required>
			
			<input class="declaro" type="checkbox" name="declaro" required><span class="declaro_txt">Declaro que todas as informações acima são verdadeiras.</span>
			
			<input class="concordo" type="checkbox" name="concordo" required>
			<span class="concordo_txt"></span>
			<a href="termos.php"><button class="concordo_termos">Concordo com os <u>termos de uso</u>.</button></a>
			
			<input class="cadastrar" type="submit" value="CADASTRAR" form="cademp">
		</form>
</body>
</html>
