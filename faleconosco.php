<!-- 
Empresa: ACR Soluções em TI
Autor: @MarceilleSantos - Estagiária
Data: 20/01/2017 (início desse layout)
-->
<?php
	$msg=0;
	//Colocando arroba para não mostrar msg de erro - variável está vazia 
	@$msg=$_POST["msg"];
?>
<!DOCTYPE html>   <!--Informa que o site foi elaborado em HTML 5-->
<html lang="pt-br">  <!--Define o idioma que o código está sendo escrito-->

<head>   <!--Configurações comportamentais do site--> 	
	<meta charset="UTF-8"/>   <!--TAG que define o conjunto de caracteres latino: UTF-8 (acentuação)-->
	<title> Fale Conosco - ACR </title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>  <!-- Chama a página de estilos CSS -->
	<link rel="stylesheet" type="text/css" href="_css/form.css"/>  <!-- Chama a página de formatação do formulário-->
	<link rel="shortcut icon" href="_imagens/icone.ico" type="image/x-icon">  <!-- icone na aba do navegador-->
</head>

<body>
	<!-- Criando áreas de divisão (DIVs)  -->
	
	<!-- REDES SOCIAIS-->
	<div id="redes-sociais">
        <ul>
			<!--Após inserir o link, há um comando target="_blank" que faz abrir o link numa nova aba no navegador-->
            <li><a href="https://www.facebook.com/ACR-Solu%C3%A7%C3%B5es-em-TI-661919510527031/?fref=ts" target="_blank"><img src="_imagens/facebook.png"></a></li>
			
			<li><a href="https://plus.google.com/105330117104248244929" target="_blank"><img src="_imagens/gmail.png"></a></li>
			
			<li><a href="https://br.linkedin.com/in/robson-silva-297a5145" target="_blank"><img src="_imagens/linkedin.png"></a></li>
        </ul>
    </div> 
	
	<p id="frase-empresa"> Somos a solução para a sua empresa!<br/> Contato: (35)9 9108-3257</p>
	
	<!-- INTERFACE-->
	<div id="interface">
	
		<!-- CABEÇALHO -->
		<header id="cabecalho">
			<!-- CONTAINER de navegação - MENU-->
			<nav id="menu">
				<h2> Menu Principal</h2>
				<ul> <!--lista não ordenada-->
					<li><a href="index.html">Home</a></li>
					<li><a href="servicos.html">Serviços</a></li>
					<li><a href="parceiros.html">Parceiros</a></li>
					<li><a href="faleconosco.php">Fale conosco</a></li>
				</ul>
			</nav> <!-- fim MENU-->
		</header>  <!-- fim CABEÇALHO -->

		<!-- CONTEÚDO -->
		<section id="corpo-texto">
			<h2>FALE CONOSCO</h2>
			
			<section id="contato">
                <h3>Contatos</h3>
                <address>
					Email: <a href="faleconosco.html">suporte@acrsolucoesemti.com.br</a> <br> 
					Celular:(35)9 9108-3257 <br>  
                </address>
				
                <h3>Endereço</h3>
                <address>
                Rua Vinte e Quatro de Maio, nº92 <br> 
                Centro, <br> 
                Brazópolis - MG <br>  
                </address>
			
				<!-- Mapa do Google-->
				<iframe id="mapa-google" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1511.06487845137!2d-45.6111272!3d-22.4735823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cb821d6cfb3709%3A0xaefef0f01eeea42!2sR.+Vinte+e+Quatro+de+Maio%2C+Bras%C3%B3polis+-+MG%2C+37530-000!5e1!3m2!1spt-BR!2sbr!4v1485960207230" allowfullscreen>
				</iframe>
			</section> <!-- fim CONTATO -->	
				
			<!-- Lateral - Formulário de Contato-->
			<aside id="f-contato">
				<h3> Formulário </h3>
				
				<?php 
					if($msg==enviado): 
					header("location:_php/enviarForm.php?msg");
					else: 
				?>
				
				<!--FORMULÁRIO-->
				<fieldset id="dados-form">
					<form method="post" id="form-contato" target="_blank" action="_php/enviarForm.php">
					
						<label for="txtNome">Nome Completo: <br/> 
							<input type="text" name="nome" size="30" maxlength="30" placeholder="Nome" required/> 
						</label><br/><br/>
						
						<label for="txtEmail">Email: <br/> 
							<input type="email" name="email" size="30" maxlength="30" placeholder="Email" required/>
						</label><br/><br/>
						
						<label for="txtTel">Telefone: <br/> 
							<input type="text" name="tel" size="11" maxlength="11" placeholder="(00)123456789"/>
						</label><br/><br/>
						
						<label for="txtCidade">Cidade:<br/> 
							<input type="text" name="cidade" size="30" maxlength="30" placeholder="Cidade"/> 
						</label><br/><br/>
						
						<label for="txtAssunto">Assunto:<br/> 
							<select name="assuntoMsg">
								<option> Solicitação de Serviços </option>
								<option> Orçamento </option>
								<option> Visita Técnica </option>
								<option> Estágio </option>
								<option> Outros </option>
							</select>
						</label><br/><br/>
					
						<label for="txtMensagem">Mensagem:<br/>
							<textarea name="mensagem" cols="70" rows="10"> </textarea>
						</label><br/><br/>
						
						<input type="submit" value="Enviar"> 
						<input type="reset" value="Limpar Formulário">
					
					</form>
				</fieldset>
				<?php endif; ?>
				
			</aside> <!-- fim FORM-CONTATO -->
		</section><!-- fim CORPO DO TEXTO-->
		<!--
		<footer id="rodape">
			<p>Copyright &copy; 2017 - by ACR Soluções em TI</p>
		</footer>
		-->
	</div> <!-- fim INTERFACE-->
</body>
</html>