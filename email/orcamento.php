<?php ob_start(); ?>
<?php 


$para = "eltonknoxville@hotmail.com"; 
$empresas = $_POST['empresa']; 
$pacotes = $_POST['pacotes']; 
$mensagem = "<strong>Empresa: </strong>".$empresa; 
$mensagem .= "<br> <strong>Email: </strong>".$_POST['email']; 
$mensagem .= "<br> <strong>Telefone: </strong>".$_POST['numTel']; 
$mensagem .= "<br> <strong>Numero de Pessoas: </strong>".$_POST['numPessoas'];
$mensagem .= "<br> <strong>Pacote: </strong>".$pacotes;
$mensagem .= "<br> <strong>Forma de Pagamento: </strong>".$_POST['formPag'];
$mensagem .= "<br> <strong>data: </strong>".$_POST['data'];
$mensagem .= "<br> <strong>Horario: </strong>".$_POST['hora'];








$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: eltonknoxville@hotmail.com\r\n"; // remetente
$headers .= "Return-Path: eltonknoxville@hotmail.com\r\n"; // return-path
$envio = mail($para, $pacotes, $mensagem, $headers);
 
if($envio){

		$msg = "Enviado com sucesso";	
		header("Location:form.php?msg=".$msg);
   
}else{

   echo "A mensagem não pode ser enviada";
 }
?>