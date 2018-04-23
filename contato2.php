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
        $sql = "SELECT * FROM suites2";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM suites2 WHERE nome like '$nome'";
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

        <a>Equipamentos</a>
        <table border='1'>
                    <thead>
                        <tr>
                            <th>Id</th>                            
                            <th>Entrada</th>                           
                            <th>Pronto</th>
                            <th>Saida</th> 
                            <th>Marca</th>
                            <th>Modelo</th>                           
                            <th>Operadora</th>
                            <th>Serial/Emai</th> 
                            <th>Cod. desbloqueio</th>                           
                            <th>Acessórios</th>
                            <th>Relamação</th> 
                           
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        //while ($linha = mysql_fetch_array($result)) {
            while ($linha = mysqli_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["id"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["entrada"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["saida"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["pronto"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["marca"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["modelo"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["operadora"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["seria"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["desbloqueio"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["acessorios"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["reclamacao"]) . "</td>";
           
         
            
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
}
?>