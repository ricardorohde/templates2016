<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.css" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<title>Cupom</title>
</head>

<body>
<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	$conect = mysql_connect("mysql02.restaurantepaladino.com.br","restaurantepal1","r3st2ur2nt3") or die ("N�o foi possivel conectar ao BD ".mysql_error());
	$db = mysql_select_db("restaurantepal1",$conect) or die("N�o foi possivel escolher o banco de dados ".mysql_error());
?>
<form action="cadastra.php" method="post" enctype="multipart/form-data" target="_blank" data-toggle="validator">
	<div class="">
		<div class="col-md-12">
			<div class="form-group">
		    	Nome <br />
		        <input type="text" name="nome" class="form-control" required data-error="Campo obrigat�rio" />
		        <div class="help-block with-errors"></div>
		    </div>
	    </div>
    </div>

	<div class="">
		<div class="col-md-12">
		    <div class="form-group">
		    	Email <br />
		        <input type="email" name="email" class="form-control" required data-error="Campo obrigat�rio" />
		        <div class="help-block with-errors"></div>
		    </div>
		</div>
	</div>
	<div class="">
		<div class="col-md-12">
		    <div class="form-group">
		    	Bairro <br />
		        <input type="text" name="bairro" class="form-control" required />
		    </div>
		</div>
	</div>

	<div class="">
		<div class="" style="width: 50%;    float: left;    padding-left: 15px;    padding-right: 15px;">
			<div class="form-group">
				Dia Escolhido <br />
				<select name="dia_escolhido" id="" class="form-control" required data-error="Campo obrigat�rio">
					<option></option>
			            <?php
						$sql_confere_dia1 = "SELECT count(*) contador FROM promocao where dia_escolhido = 'Quarta'";
						$result_confere_dia1 = mysql_query($sql_confere_dia1,$conect);
						$linha_confere_dia1 = mysql_fetch_array($result_confere_dia1);
						if($linha_confere_dia1['contador'] < 100){

						?>
			            <option disabled>Quarta 04/05 - ESGOTADO</option>
			            <?php
						} else {
							echo "<option disabled>Quarta 04/05 - ESGOTADO</option>";
						}
						$sql_confere_dia2 = "SELECT count(*) contador FROM promocao where dia_escolhido = 'Quinta'";
						$result_confere_dia2 = mysql_query($sql_confere_dia2,$conect);
						$linha_confere_dia2 = mysql_fetch_array($result_confere_dia2);
						if($linha_confere_dia2['contador'] < 100){
						?>
			           <option disabled>Quinta 05/05 - ESGOTADO</option>
			            <?php
						} else {
							echo "<option disabled>Quinta 05/05 - ESGOTADO</option>";
						}
						?>
				</select>
			    <div class="help-block with-errors"></div>
		    </div>
		    <div class="clearfix"></div>
		</div>
		<!--<div class="" style="width: 50%;    float: left;    padding-left: 15px;    padding-right: 15px;">
			<div class="form-group">
				Qual o estilo de cerveja de sua prefer�ncia? <br />
				<select name="estilo_cerva" id="" class="form-control" required data-error="Campo obrigat�rio">
					<option value=""></option>
				    <option>Amber Lager</option>
					<option>American Cream Ale</option>
					<option>American IPA</option>
					<option>American IPA / Witbier</option>
					<option>American Lager</option>
					<option>American Pale Ale</option>
					<option>American Wheat</option>
					<option>Belgian Pale Ale</option>
					<option>Belgian Strong Ale</option>
					<option>Blond Ale</option>
					<option>Bohemian Pilsener</option>
					<option>Brown Porter</option>
					<option>Cream Ale</option>
					<option>Czech Lager</option>
					<option>Doble Ipa</option>
					<option>Dry Stout</option>
					<option>Extra Special Bitter</option>
					<option>Fruit Beer - Frutas Vermelhas</option>
					<option>Hefe Weissbier</option>
					<option>Herb Beer</option>
					<option>India Pale Ale (IPA)</option>
					<option>Irish Red Ale</option>
					<option>Lager</option>
					<option>Munchner Hefeweiss</option>
					<option>Pale Ale</option>
					<option>Pale Lager</option>
					<option>Pilsen</option>
					<option>Porter com Framboesas</option>
					<option>Rauchbier</option>
					<option>Red Ale - Fruit Beer</option>
					<option>Schwarzbier</option>
					<option>Sem alcool - Pilsen</option>
					<option>Sem �lcool - Weissbier</option>
					<option>Sem gl�ten - Lager</option>
					<option>Sour - Fruit Beer</option>
					<option>Sour Ale - Fruit Beer</option>
					<option>Strong Ale</option>
					<option>Strong Dark Ale Trapista</option>
					<option>Trigo Clara Ale</option>
					<option>Viena lager</option>
					<option>Weiss</option>
					<option>Weissbier</option>
					<option>Witbier</option>
				</select>
			    <div class="help-block with-errors"></div>
		    </div>
		    <div class="clearfix"></div>
		</div>-->
		<div class="clearfix"></div>
	</div>

	<div class="">
		<div class="col-md-12">
		    <div class="form-group">
		        <button type="submit" class="btn btn-danger" >Cadastrar</button>
		        <div style="clear:both"></div>
		    </div>
	    </div>
    </div>
</form>

<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/validator.js"></script>

</body>
</html>
