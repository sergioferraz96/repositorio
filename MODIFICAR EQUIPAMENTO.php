<html>
  
  <head>
	   
      <link rel="stylesheet" type="text/css" href="style3.css">
      
      
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="javascriptpersonalizado.js"></script>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    

      
    
      <script type="text/javascript">
  
          $(document).ready(function(){
            $("input[name='id']").blur(function(){
      
          
          var $entrada = $("input[name='entrada']");
          var $pronto = $("input[name='pronto']");
          var $saida = $("input[name='saida']");
          var $marca = $("input[name='marca']");
          var $modelo = $("input[name='modelo']");
          var $operadora = $("input[name='operadora']");
          var $seria = $("input[name='seria']");
          var $desbloqueio = $("input[name='desbloqueio']");
          var $acessorios = $("input[name='acessorios']");
          var $reclamacao = $("input[name='reclamacao']");

          
          $entrada.val('');
          $pronto.val('');
          $saida.val('');
          $marca.val('');
          $modelo.val('');
          $operadora.val('');
          $seria.val('');
          $desbloqueio.val('');
          $acessorios.val('');
          $reclamacao.val('');
          

          $.getJSON(
          'function2.php',
          { id: $( this ).val() },
          function( json )
              {
                
                $entrada.val( json.entrada );
                $pronto.val( json.pronto );
                $saida.val( json.saida );
                $marca.val( json.marca );
                $modelo.val( json.modelo );
                $operadora.val( json.operadora );
                $seria.val( json.seria );
                $desbloqueio.val( json.desbloqueio );
                $acessorios.val( json.acessorios );
                $reclamacao.val( json.reclamacao );

              }
            );
        });
        });
      </script>
      
  </head>
<body>

<div class="container">  
  <form id="contact" action="alteracao3.php" method="post">
    
    <center><h3>Modificar Equipamento</h3></center><br>
    
    <ul class="resultado"></ul>
    
    <fieldset>
        <input placeholder="ID do equipamento que pretende modificar" type="text"  name="id">
    </fieldset>
    <br>

    <fieldset>
        Entrada: <input placeholder="" type="date"  name="entrada">
      <br>
        Pronto:  <input placeholder="" type="date"  name="pronto">
      <br>
      Saida:   <input placeholder="" type="date"  name="saida">
	</fieldset>
    
    <fieldset>
        <input placeholder="Marca" type="text"  name="marca">
    </fieldset>	
    
    <fieldset>
        <input placeholder="Modelo" type="text"  name="modelo">
    </fieldset>
    
    <fieldset>
        <input placeholder="Operadora" type="text"  name="operadora">
    </fieldset>
    
    <fieldset>
        <input placeholder="Serial/Emai" type="text"  name="seria">
    </fieldset>
    
    <fieldset>
        <input placeholder="Código de desbloqueio" type="text"  name="desbloqueio">
    </fieldset>
    
    <fieldset>
        <input placeholder="Acessórios" type="text"  name="acessorios">
    </fieldset>
    
    <fieldset>
        <input placeholder="Reclamação" type="text"  name="reclamacao">
    </fieldset>
    
    <fieldset>
       <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Modificar</button>
    </fieldset>
   
    
    

    
    
   
  </form>
</div>

</body>
</html>