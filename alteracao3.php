
<?php
	
// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("localhost","root","","database3");

// VERIFICA SE A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())

{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$id = $_POST['id'];
	$entrada = $_POST['entrada'];
	$pronto = $_POST['pronto'];
	$saida = $_POST['saida'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$operadora = $_POST['operadora'];
	$seria = $_POST['seria'];
	$desbloqueio = $_POST['desbloqueio'];
	$acessorios = $_POST['acessorios'];
	$reclamacao = $_POST['reclamacao'];
	
	


//"if" ASSIM CASO O CAMPO FIQUE VAZIO, NÃO ALTERA O CAMPO EM CAUSA

if ($id != null){	
	$result_usuario0 = "UPDATE suites2 SET id = '$id' WHERE id = '$id'";
	$resultado_usuario0 = mysqli_query($con, $result_usuario0);
}

if ($entrada != null){	
	$result_usuario = "UPDATE suites2 SET entrada = '$entrada' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($con, $result_usuario);
}
	
if ($pronto != null){
	$result_usuario2 = "UPDATE suites2 SET pronto = '$pronto' WHERE id = '$id'";
	$resultado_usuario2 = mysqli_query($con, $result_usuario2);
}

if ($saida != null){
	$result_usuario3 = "UPDATE suites2 SET saida = '$saida' WHERE id = '$id'";
	$resultado_usuario3 = mysqli_query($con, $result_usuario3);
}
if ($marca != null){
	$result_usuario4 = "UPDATE suites2 SET marca = '$marca' WHERE id = '$id'";
	$resultado_usuario4 = mysqli_query($con, $result_usuario4);
}
if ($modelo != null){
	$result_usuario5 = "UPDATE suites2 SET modelo = '$modelo' WHERE id = '$id'";
	$resultado_usuario5 = mysqli_query($con, $result_usuario5);
}

if ($operadora != null){
	$result_usuario6 = "UPDATE suites2 SET saida = '$operadora' WHERE id = '$id'";
	$resultado_usuario6 = mysqli_query($con, $result_usuario6);
}
if ($seria != null){
	$result_usuario7 = "UPDATE suites2 SET seria = '$seria' WHERE id = '$id'";
	$resultado_usuario7 = mysqli_query($con, $result_usuario7);
}
if ($desbloqueio != null){
	$result_usuario8 = "UPDATE suites2 SET desbloqueio = '$desbloqueio' WHERE id = '$id'";
	$resultado_usuario8 = mysqli_query($con, $result_usuario8);
}

if ($acessorios != null){
	$result_usuario9 = "UPDATE suites2 SET acessorios = '$acessorios' WHERE id = '$id'";
	$resultado_usuario9 = mysqli_query($con, $result_usuario9);
}
if ($reclamacao != null){
	$result_usuario10 = "UPDATE suites2 SET reclamacao = '$reclamacao' WHERE id = '$id'";
	$resultado_usuario10 = mysqli_query($con, $result_usuario10);
}

mysqli_close($con);

?>

<script> window.close(); </script>