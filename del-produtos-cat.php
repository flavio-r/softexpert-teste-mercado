<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

header("Content-Type: text/html; charset=utf-8",true);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Deletar - Categoria - Produtos</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="col-md-4">
	 	<?php
		// BUSCA REGISTRO NA TABELA
		$id = $_GET[id];
		include 'models/mypublic.php';
		include 'models/get/produtos-cat.php';
		?>
	 	<form role="form" action="models/del/produtos-cat.php" method="post">
	 	<input type="hidden" name="idcat" value="<?=$dados_cat[idcat];?>">
	  	<div class="form-group">
	    	<label for="categoria">Você tem certeza que deseja deletar essa categoria?</label>
	  	</div>
	  	<button type="button" class="btn" onclick="javascript:history.go(-1);">Retornar</button>
	  	<button type="submit" class="btn btn-success">Sim</button>
		</form>
	</div>
</body>
</html>