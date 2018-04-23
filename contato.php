<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados
    $server = "localhost";
    $user = "root";
    $senha = "";
    $base = "database3";
    //$conexao = mysql_connect($server,$user,$senha) or die("Erro na conexão!");
    $conexao = new mysqli($server, $user, $senha, $base) or die("Erro na conexão!"); 
    //mysql_select_db($base);
    
    // Caso algo tenha dado errado, exibe uma mensagem de erro
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM suites";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM suites WHERE nome like '$nome'";
    }
    sleep(1);
    
    //$result = mysql_query($sql);
    $result = $conexao->query($sql); 

    //$cont = mysql_affected_rows($mysql);
    $cont = mysqli_affected_rows($conexao); 
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "
        <html>
        <head>
            <style>
table, td, th, tfoot {border:solid 1px #000; padding:5px;}
th {background-color:#999;}
a {
    font-size: 17px;
    font-weight: 900;
}
            </style>
        </head>
            <body>
            <a><br></br> </a>
                <a>Clientes</a>
                
               
                <table border='1'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Telefone</th>                           
                            <th>Email</th>
                            <th>Morada</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
            </body>
        </html>"
        ;
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        //while ($linha = mysql_fetch_array($result)) {
            while ($linha = mysqli_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["id"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["nome"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["telefone"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["email"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["morada"]) . "</td>";
            
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
}
?>