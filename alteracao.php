
<?php
	
// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("localhost","root","","database3");

// VERIFICA SE A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())

{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$id_cliente = $_POST['id_cliente'];
	$nome_cliente = $_POST['nome_cliente'];
	$telefone_cliente = $_POST['telefone_cliente'];
	$email_cliente = $_POST['email_cliente'];
	$morada_cliente = $_POST['morada_cliente'];
	


//"if" ASSIM CASO O CAMPO FIQUE VAZIO, NÃO ALTERA O CAMPO EM CAUSA
if ($nome_cliente != null){	
	$result_usuario = "UPDATE suites SET nome = '$nome_cliente' WHERE id = '$id_cliente'";
	$resultado_usuario = mysqli_query($con, $result_usuario);
}
	
if ($telefone_cliente != null){
	$result_usuario2 = "UPDATE suites SET telefone = '$telefone_cliente' WHERE id = '$id_cliente'";
	$resultado_usuario2 = mysqli_query($con, $result_usuario2);
}

if ($email_cliente != null){
	$result_usuario3 = "UPDATE suites SET email = '$email_cliente' WHERE id = '$id_cliente'";
	$resultado_usuario3 = mysqli_query($con, $result_usuario3);
}
if ($morada_cliente != null){
	$result_usuario4 = "UPDATE suites SET morada = '$morada_cliente' WHERE id = '$id_cliente'";
	$resultado_usuario4 = mysqli_query($con, $result_usuario4);
}

mysqli_close($con);
?>

<script> window.close(); </script>