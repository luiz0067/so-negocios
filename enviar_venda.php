<?php 

/* Enviar E-mail com Resposta Automática
* Desenvolvido por: Gabriel Pinheiro
* Data: 04/12/2007
*/


// Recebendo os dados passados pela página "form_contato.php"

$recebenome = $_POST['Nome'];
$recebende = $_POST['Endereco'];
$recebefone  = $_POST['fonefax'];
$recebemens  = $_POST['mensagem'];
$recebemail  = $_POST['email'];



// Definindo os cabeçalhos do e-mail
$headers = "Content-type:text/html; charset=utf-8";

// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE

$para = "wmidiamix@gmail.com";

// Definindo o aspecto da mensagem
$mensagem   = "<h4>Venda</h4> ";
$mensagem   = "<h3>Nome:</h3> ";
$mensagem  .= $recebenome; 
$mensagem  .= "<h3>fonefax:</h3> ";
$mensagem  .= $recebefone;
$mensagem  .= "<h3>email:</h3> ";
$mensagem  .= $recebemail; 
$mensagem  .= "<h3>mensagem:</h3> ";
$mensagem  .= $recebemens;


// Enviando a mensagem para o destinatário

$envia =  mail($para,"E-mail do Site",$mensagem,$headers);
  
// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.

$mensagem2  = "<p>Olá <strong>" . $recebenome . "</strong>. Agradeçemos sua visita e a oportunidade 
de recebermos o seu contato.</p>";
$mensagem2 .= "<p>Observação - Não é necessário responder esta mensagem.</p>";

$envia =  mail($recebemail,"Sua mensagem foi recebida!",$mensagem2,$headers);


// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a página de contato.
  
echo "Mensagens Recebidas com Sucesso!";
echo "<meta http-equiv='refresh' content='2;URL=compra_venda.php'>";


?>
