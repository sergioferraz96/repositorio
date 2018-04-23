<?php
  /**
   * função que devolve em formato JSON os dados do cliente
   */
  function retorna( $id, $db )
  {
    $sql2 = "SELECT `id`, `entrada`, `pronto`, `saida`, `marca`, `modelo`, `operadora`, `seria`, `desbloqueio`, `acessorios`, `reclamacao`, `nome`
      FROM `suites2` WHERE `id` = '{$id}' ";

    $query = $db->query( $sql2 );

    $arr = Array();
    if( $query->num_rows )
    {
      while( $dados = $query->fetch_object() )
      {
        
        $arr['entrada'] = $dados->entrada;
        $arr['pronto'] = $dados->pronto;
        $arr['saida'] = $dados->saida;
        $arr['marca'] = $dados->marca;
        $arr['modelo'] = $dados->modelo;
        $arr['operadora'] = $dados->operadora;
        $arr['seria'] = $dados->seria;
        $arr['desbloqueio'] = $dados->desbloqueio;
        $arr['acessorios'] = $dados->acessorios;
        $arr['reclamacao'] = $dados->reclamacao;
        $arr['nome'] = $dados->nome;
      }
    }
   

    return json_encode( $arr );
  

  }


/* só se for enviado o parâmetro, que devolve os dados */
if( isset($_GET['id']) )
{
  $db = new mysqli('localhost', 'root', '', 'database3');
  echo retorna( filter ( $_GET['id'] ), $db );
}

function filter( $var ){
  return $var;//a implementação desta, fica a cargo do leitor
}