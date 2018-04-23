<html>
<head>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>

<div class="container">  
  <form id="contact" action="alteracao.php" method="post">
    <center><h3>Alteração</h3></center><br>
    
    <fieldset>
      <input placeholder="ID do cliente que pretende editar" type="text"  name="id_cliente">
    </fieldset>
    <fieldset>
      <input placeholder="Nome" type="text"  name="nome_cliente">
    </fieldset>
    <fieldset>
      <input placeholder="Telefone" type="text"  name="telefone_cliente">
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="text"  name="email_cliente">
    </fieldset>
    <fieldset>
      <input placeholder="Morada" type="text" name="morada_cliente">
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Editar</button>
    </fieldset>
   
  </form>
</div>



</body>
</html>