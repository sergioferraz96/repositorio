
<?php
	
// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("localhost","root","","database3");

// VERIFICA SE A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())

{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$nome_cliente = $_POST['nome'];
	$telefone_cliente = $_POST['telefone'];
	$email_cliente = $_POST['email'];
	$morada_cliente = $_POST['morada'];
	


//"if" ASSIM CASO O CAMPO FIQUE VAZIO, NÃO ALTERA O CAMPO EM CAUSA
if ($nome_cliente != null){	
	$result_usuario = "UPDATE suites SET nome = '$nome_cliente' WHERE nome = '$nome_cliente'";
	$resultado_usuario = mysqli_query($con, $result_usuario);
}
	
if ($telefone_cliente != null){
	$result_usuario2 = "UPDATE suites SET telefone = '$telefone_cliente' WHERE nome = '$nome_cliente'";
	$resultado_usuario2 = mysqli_query($con, $result_usuario2);
}

if ($email_cliente != null){
	$result_usuario3 = "UPDATE suites SET email = '$email_cliente' WHERE nome = '$nome_cliente'";
	$resultado_usuario3 = mysqli_query($con, $result_usuario3);
}
if ($morada_cliente != null){
	$result_usuario4 = "UPDATE suites SET morada = '$morada_cliente' WHERE nome = '$nome_cliente'";
	$resultado_usuario4 = mysqli_query($con, $result_usuario4);
}


// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql2="INSERT INTO suites2 (entrada, marca, modelo, operadora, seria, desbloqueio, acessorios, reclamacao, nome) VALUES ('$_POST[entrada]','$_POST[marca]','$_POST[modelo]','$_POST[operadora]','$_POST[seria]','$_POST[desbloqueio]','$_POST[acessorios]','$_POST[reclamacao]','$_POST[nome]')";

// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql2))
{
    die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>

<script> window.close(); </script>