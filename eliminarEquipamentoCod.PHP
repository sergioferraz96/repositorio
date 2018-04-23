
<?php
	// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("localhost","root","","database3");

// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$id_equipamento = $_POST['id_equipamento'];
	
		
	$result_usuario = "DELETE FROM suites2 WHERE id = '$id_equipamento'";
	$resultado_usuario = mysqli_query($con, $result_usuario);

mysqli_close($con);
?>

<script> window.close(); </script>
