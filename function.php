<?php
  /**
   * função que devolve em formato JSON os dados do cliente
   */
  function retorna( $nome, $db )
  {
    $sql2 = "SELECT `id`, `nome`, `telefone`, `email`, `morada`
      FROM `suites` WHERE `nome` = '{$nome}' ";

    $query = $db->query( $sql2 );

    $arr = Array();
    if( $query->num_rows )
    {
      while( $dados = $query->fetch_object() )
      {
        
        $arr['telefone'] = $dados->telefone;
        $arr['email'] = $dados->email;
        $arr['morada'] = $dados->morada;
      }
    }
   

    return json_encode( $arr );
  

  }


/* só se for enviado o parâmetro, que devolve os dados */
if( isset($_GET['nome']) )
{
  $db = new mysqli('localhost', 'root', '', 'database3');
  echo retorna( filter ( $_GET['nome'] ), $db );
}

function filter( $var ){
  return $var;//a implementação desta, fica a cargo do leitor
}