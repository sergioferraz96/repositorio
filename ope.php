
<?php
	
// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("localhost","root","","login");

// VERIFICA SE A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())

{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$login = $_POST['login'];
    $senha = $_POST['senha'];
	
	
	$result = mysqli_query("SELECT * FROM `utlizador` WHERE `nome` = '$login' AND `pass`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:MENU.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index1.php');
     
    }


mysqli_close($con);
?>
