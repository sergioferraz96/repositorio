<html>
  
  <head>
	   
      <link rel="stylesheet" type="text/css" href="style3.css">
      
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="javascriptpersonalizado.js"></script>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    
      
    
      <script type="text/javascript">
  
          $(document).ready(function(){
            $("input[name='nome']").blur(function(){
      
          var $telefone = $("input[name='telefone']");
          var $email = $("input[name='email']");
          var $morada = $("input[name='morada']");

          $telefone.val('');
          $email.val('');
          $morada.val('');

          $.getJSON(
          'function.php',
          { nome: $( this ).val() },
          function( json )
              {
                $telefone.val( json.telefone );
                $email.val( json.email );
                $morada.val( json.morada );
              }
            );
        });
        });
      </script>
      
  </head>
<body>

<div class="container">  
  <form id="contact" action="alteracao2.php" method="post">
    
    <center><h3>Cliente</h3></center><br>
    
    <ul class="resultado"></ul>
    
    <fieldset>
        <input placeholder="Nome" type="text" id="pesquisa"  name="nome">
    </fieldset>
    
    <fieldset>
        <input placeholder="Telefone" type="text"  name="telefone">
    </fieldset>
    
    <fieldset>
        <input placeholder="Email" type="text"  name="email">
    </fieldset>
    
    <fieldset>
        <input placeholder="Morada" type="text" name="morada">
    </fieldset>

    
    <br><center><h3>Registo de Equipamento</h3></center><br>
    
    <fieldset>
      Entrada: <input placeholder="Entrada" type="date"  name="entrada">
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
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Registar</button>
    </fieldset>
   
  </form>
</div>

</body>
</html>