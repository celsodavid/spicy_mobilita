<?php
$data = $_POST['info'];
parse_str($data);

$msgDecode = utf8_decode($mensagem);

//$destinatario = "contato@mobilitapatriani.com.br";
$destinatario = $nome - $email;
$assunto = "Contato via site [ http://www.mobilitapatriani.com.br ]";
$corpo = "$msgDecode";
$headers = "From: $nome - $email\n"; // From: Xux� <xuxe@criarweb.com>
$headers .= "Reply-To: $email\n"; // Reply-To: mariano@desarrolloweb.com
//$headers .= "Cc: recepcao1@viananegocios.com.br,vendas@fernandezmera.com.br\n"; //Cc: vinnie@criarweb.com,joao@criarweb.com
$headers .= "Cc: celunico43@gmail.com\n"; //Cc: vinnie@criarweb.com,joao@criarweb.com
//$headers .= "contato@mobilitapatriani.com.br"; //Bcc: vinnie@criarweb.com,joao@criarweb.com

mail($destinatario,$assunto,$corpo,$headers);

echo "Email enviado com sucesso";
?>