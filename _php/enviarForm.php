<!-- 
Empresa: ACR Soluções em TI
Autor: @MarceilleSantos - Estagiária
Data: 20/01/2017 (início desse layout)
-->

<!-- PHP PARA ENVIAR O CONTEÚDO DO FORMULÁRIO DE CONTATO PARA O EMAIL OFICIAL DA EMPRESA -->
<?php 
	//Os dados serão enviados para um email 
	$destino="suporte@acrsolucoesemti.com.br, marceillesantos@gmail.com";
	$assunto="Contato através do SITE ACR";
	
	//Receber todos os dados enviados pelo formulário
	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$telefone=$_POST["tel"];
	$cidade=$_POST["cidade"];
	$assuntoMsg=$_POST["assuntoMsg"];
	//$assunto=$_POST["assunto"]."- Site ACR";
	$mensagem=$_POST["mensagem"];
	
	/*Teste
	echo $nome."<br/>".$email."<br/>".$telefone."<br/>".$cidade."<br/>".$assunto."<br/>".$mensagem."<br/>";*/
	
	//Concatenando os dados em apenas uma variável para envio
	//<strong> questão de semântica - html5 entende a importância do destaque 
	$corpo = '<b> CONTATO PELO SITE DA EMPRESA ACR </b><br/><br/>';
	$corpo .= 'Nome: $nome <br/>';
	$corpo .= "<strong> Email: </strong> $email <br/>";
	$corpo .= "<strong> Telefone: </strong> $telefone <br/>";
	$corpo .= "<strong> Cidade: </strong> $cidade <br/><br/>";
	$corpo .= "<strong> Assunto: </strong> $assuntoMsg <br/>";
	$corpo .= "<strong> Mensagem: </strong> $mensagem <br/>";
	
	//Cabeçalho do email - configuração para enviar os dados corretamente para o destino 
	$header .= "Content-Type: text/html;   charset=utf-8\n";
	$header = "From: $email  Reply-to: $email\n";
	
	//Função do PHP para trabalhar com emails
	mail($destino, $assunto, $corpo, $header);
	
	//Indica onde a página vai ser direcionada após o envio - cria variável e ela recebe um parâmetro de URL
	header("location:faleconosco.php?msg=enviado");
	
	echo "<center><img src='../_imagens/mensagem_enviada.png'/>";	
?>