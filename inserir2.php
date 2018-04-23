
<?php

// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("localhost","root","","database3");

// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql="INSERT INTO suites (nome, telefone, email, morada) VALUES ('$_POST[nome]','$_POST[telefone]','$_POST[email]','$_POST[morada]')";

// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
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