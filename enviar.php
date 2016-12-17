<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Isaac Uchôa</title>
</head>
<body bgcolor="#efefef">

<?php

// Variaveis originadas no email_form.php
$nome 			= $_POST['nome'];
$email  		= $_POST['email'];
$mensagem 		= $_POST['mensagem'];

// adicionei a captura do ip do remetente 
$ip = $_SERVER['REMOTE_ADDR'];

//Seu email, para onde irao as informações do formulário
$mail_destino = "web@isaacuchoa.com";


//Mensagem para o email de resposta
$msg_reply = "Prezado(a) $nome - Recebemos o seu email!\n\n a Fiax agradece o seu contato e responderemos em breve.\n\n";

// assunto do e-mail
$assunto_form = "Site Isaac Uchôa";

//Proprietario do site
    $prop ="Isaac Uchôa";
	$msg.="Mensagem enviada do site: $prop"."\n";
	$msg.="$mail_header"."\n";
	$msg.="Nome: $nome"."\n";
	$msg.="E-mail: $email"."\n";
	$msg.="mensagem: $mensagem"."\n\n\n";
	$msg.="Ip da origem: $ip"."\n";
	$msg.="\n\n";
	
	@mail($mail_destino, "$assunto_form", $msg, "From:$nome<$email>");

if($email != ""){
	@mail($email, "Re: $assunto_form $prop", $msg_reply);
}

?>
<script>
	alert("Sua mensagem foi enviada com sucesso!");
	this.location = "index.php";
</script>

</body>
</html>