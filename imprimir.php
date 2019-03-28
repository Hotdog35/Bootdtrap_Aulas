<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
				object data {
					  body * {
					    visibility: hidden;
					  }

	</style>
</head>
<body>




<script>
	function imprime(){
	   var conteudo = document.getElementById('print').innerHTML;
	   tela_impressao = window.open('');
	   //tela_impressao = window.Date('');
	   tela_impressao.document.write(conteudo);
	   tela_impressao.window.print();
	   tela_impressao.window.close();
	}
	</script>

	<div id="print" class="conteudo">
	<h1>EXEMPLO</h1>
	</div>

<input type="button" onclick="imprime();" value="Imprimir Div separadamente">
	</div>
		<form>
			<input type="button" name="imprimir" value="imprimir" onclick="imprime()"/>
		</form>
</body>
</html>