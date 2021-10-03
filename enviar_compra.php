<?php 

/* Enviar E-mail com Resposta Automática
* Desenvolvido por: Gabriel Pinheiro
* Data: 04/12/2007
*/


// Recebendo os dados passados pela página "form_contato.php"

$recebenome = $_POST['Nome'];
$recebemail = $_POST['email'];
$recebefone  = $_POST['fone'];
$recebeend  = $_POST['end'];
$recebecidade  = $_POST['cidade'];
$recebenomeprod  = $_POST['produto'];
$recebevalor  = $_POST['codigo'];
$recebecaracproduto  = $_POST['mensagem'];



// Definindo os cabeçalhos do e-mail
$headers = "Content-type:text/html; charset=utf-8";

// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE

$para = "wmidiamix@gmail.com";

// Definindo o aspecto da mensagem
$mensagem   = "<h4>compras</h4> ";
$mensagem   = "<h3>Nome:</h3> ";
$mensagem  .= $recebenome; 
$mensagem  .= "<h3>email:</h3> ";
$mensagem  .= $recebemail;
$mensagem  .= "<h3>Fone para Contato:</h3> ";
$mensagem  .= $recebefone;
$mensagem  .= "<h3>Endeço:</h3> ";
$mensagem  .= $recebeend;
$mensagem  .= "<h3>Cidade:</h3> ";
$mensagem  .= $recebecidade;
$mensagem  .= "<h3>Nome do Produto:</h3> ";
$mensagem  .= $recebenomeprod;
$mensagem  .= "<h3>Código do Produto:</h3> ";
$mensagem  .= $recebevalor;
$mensagem  .= "<h3>Minha Proposta de Negócios:</h3> ";
$mensagem  .= $recebecaracproduto;


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
