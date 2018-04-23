<html>

	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
		<link rel="stylesheet" type="text/css" href="button.css">
     
      	<script>
			function myFunction0() {
    			var myWindow = window.open("http://localhost:4343/registar%20cliente2/Base%20de%20Dados/REGISTAR%20CLIENTE%20E%20EQUIPAMENTO.php", "_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=40,left=850,width=500,height=550");
			}				
		</script>

		<script>
			function myFunction1() {
    			var myWindow = window.open("http://localhost:4343/registar%20cliente2/Base%20de%20Dados/MODIFICAR%20CLIENTE.php", "_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=40,left=850,width=500,height=550");
			}				
		</script>

		<script>
			function myFunction2() {
    			var myWindow = window.open("http://localhost:4343/registar%20cliente2/Base%20de%20Dados/ELIMINAR%20CLIENTE.PHP", "_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=850,width=500,height=300");
			}				
		</script>

		<script>
			function myFunction3() {
    			var myWindow = window.open("http://localhost:4343/registar%20cliente2/Base%20de%20Dados/REGISTAR%20EQUIPAMENTO.php", "_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=40,left=850,width=500,height=550");
			}				
		</script>

		<script>
			function myFunction4() {
    			var myWindow = window.open("http://localhost:4343/registar%20cliente2/Base%20de%20Dados/MODIFICAR%20EQUIPAMENTO.php", "_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=40,left=850,width=500,height=550");
			}				
		</script>

		<script>
			function myFunction5() {
    			var myWindow = window.open("http://localhost:4343/registar%20cliente2/Base%20de%20Dados/ELIMINAR%20EQUIPAMENTO.PHP", "_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=40,left=850,width=500,height=300");
			}				
		</script>

		

		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript" src="ajax2.js"></script>
		
		
	
	</head>

<body>
<div class=login-page>

<div id="Pesquisar">
	<input type="text" placeholder="Nome do Cliente" name="txtnome" id="txtnome"/> 
    <input type="button" name="btnPesquisar" value="Pesquisar" onclick="getDados(), getDados2();" />
	<a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>

	<button class="css3button2" onclick="myFunction0()">Registar<br> Cliente</button>
	<button class="css3button2" onclick="myFunction1()">Modificar<br> Cliente</button>
	<button class="css3button2" onclick="myFunction2()">Eliminar<br> Cliente</button>
	<button class="css3button2" onclick="myFunction3()">Registar<br> Equipamento</button>
	<button class="css3button2" onclick="myFunction4()">Modificar <br> Equipamento</button>
	<button class="css3button2" onclick="myFunction5()">Eliminar <br> Equipamento</button>


<br></br>
    
</div>

<div id="Resultado"></div>
  <br>
<div id="Resultado2"></div>

</div>

</body>
</html>