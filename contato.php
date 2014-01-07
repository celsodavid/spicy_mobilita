<?php
$data = $_POST['info'];
parse_str($data);


$valor = array("recepcao1@viananegocios.com.br","vendas@fernandezmera.com.br");
$valor[] = shuffle($valor);


$to      = 'contato@mobilitapatriani.com.br';
$subject = 'Contato via site [ http://www.mobilitapatriani.com.br ]';
$message = 'De: ' . $nome . "\r\n" .
           'Telefone: ' . $phone . "\r\n" .
		   utf8_decode($mensagem);
$headers = 'From: '.$nome.'-'.$email."\r\n" .
		   'Reply-To:'.$email."\r\n" .
		   'Cc: celso_constantiny02@hotmail.com, '.$valor[0] . '';

mail($to, $subject, $message, $headers);

echo "Email enviado com sucesso";
?>