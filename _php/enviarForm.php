<!-- 
Empresa: ACR Solu��es em TI
Autor: @MarceilleSantos - Estagi�ria
Data: 20/01/2017 (in�cio desse layout)
-->

<!-- PHP PARA ENVIAR O CONTE�DO DO FORMUL�RIO DE CONTATO PARA O EMAIL OFICIAL DA EMPRESA -->
<?php 
	//Os dados ser�o enviados para um email 
	$destino="suporte@acrsolucoesemti.com.br, marceillesantos@gmail.com";
	$assunto="Contato atrav�s do SITE ACR";
	
	//Receber todos os dados enviados pelo formul�rio
	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$telefone=$_POST["tel"];
	$cidade=$_POST["cidade"];
	$assuntoMsg=$_POST["assuntoMsg"];
	//$assunto=$_POST["assunto"]."- Site ACR";
	$mensagem=$_POST["mensagem"];
	
	/*Teste
	echo $nome."<br/>".$email."<br/>".$telefone."<br/>".$cidade."<br/>".$assunto."<br/>".$mensagem."<br/>";*/
	
	//Concatenando os dados em apenas uma vari�vel para envio
	//<strong> quest�o de sem�ntica - html5 entende a import�ncia do destaque 
	$corpo = '<b> CONTATO PELO SITE DA EMPRESA ACR </b><br/><br/>';
	$corpo .= 'Nome: $nome <br/>';
	$corpo .= "<strong> Email: </strong> $email <br/>";
	$corpo .= "<strong> Telefone: </strong> $telefone <br/>";
	$corpo .= "<strong> Cidade: </strong> $cidade <br/><br/>";
	$corpo .= "<strong> Assunto: </strong> $assuntoMsg <br/>";
	$corpo .= "<strong> Mensagem: </strong> $mensagem <br/>";
	
	//Cabe�alho do email - configura��o para enviar os dados corretamente para o destino 
	$header .= "Content-Type: text/html;   charset=utf-8\n";
	$header = "From: $email  Reply-to: $email\n";
	
	//Fun��o do PHP para trabalhar com emails
	mail($destino, $assunto, $corpo, $header);
	
	//Indica onde a p�gina vai ser direcionada ap�s o envio - cria vari�vel e ela recebe um par�metro de URL
	header("location:faleconosco.php?msg=enviado");
	
	echo "<center><img src='../_imagens/mensagem_enviada.png'/>";	
?>