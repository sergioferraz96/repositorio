<h1 style="
    text-align: center;
    height: 7;
    margin-top: 150;
"> Consulta de turmas </h1>
<?php
//Conexão e consulta ao Mysql
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('db_formacao') or die(mysql_error());
$qry = mysql_query("select * from turmas");

//Pegando os nomes dos campos
$num_fields = mysql_num_fields($qry);//Obtém o número de campos do resultado

for($i = 0;$i<$num_fields; $i++){//Pega o nome dos campos
    $fields[] = mysql_field_name($qry,$i);
}

//Montando o cabeçalho da tabela
$table = '<table class="table table-hover table-inverse" style="margin-top:80;background-color: #37444a; color:lightgrey;"> <thead><tr>';

for($i = 0;$i < $num_fields; $i++){
    $table .= '<th>'.$fields[$i].'</th>';
}
$table .= '<td>Ação</td></thead>';

//Montando o corpo da tabela
$table .= '<tbody style="
    background-color: #86979e;
    color: #37444a;    
">';
while($r = mysql_fetch_array($qry)){
    $table .= '<tr>';
    for($i = 0;$i < $num_fields; $i++){
        $table .= '<td>'.$r[$fields[$i]].'</td>';
    }

    // Adicionando botão de exclusão
    $table .= '<td><a href="tabela1.html?id=xxx">Excluir</a></td>';

    $table .= '</tr>';
}

//Finalizando a tabela
$table .= '</tbody></table>';

//Imprimindo a tabela
echo $table;

?>