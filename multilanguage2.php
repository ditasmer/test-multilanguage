<!--DOCUMENTO 2 copia exacta del 1 pero con el section diferente doc2-->
<?php
//array de idiomas permitidos
$array_idiomas = ['es', 'ca'];

	//definir un idioma por defecto
	$idioma = 'es';

	//idioma por navegador
	//print_r($_SERVER);
	//echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$idioma_nav = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	echo $idioma_nav;
	//verifica que el idioma del navegador es permitido
	if(in_array($idioma_nav, $array_idiomas)){
		$idioma = $idioma_nav;
	}

	//comprobar si existe cookie de idioma
	//&& que es un idioma permitido
	if(isset($_COOKIE['idioma']) && (in_array($_COOKIE['idioma'], $array_idiomas))){
			$idioma = $_COOKIE['idioma'];
	}

	//definir el idioma por seleccion del usuario
	//peticiones que llegan por URL son GET SIEMPRE
	if(isset($_GET['idioma'])){
		//verifica que es idioma permitido, si no existe deja el idioma por defecto = es
		//busca contenido "x" en array escalar 
		if(in_array($_GET['idioma'], $array_idiomas)){
			$idioma = $_GET['idioma'];	
			//guarda idioma en cookie, podemos consultarlo por Dev tools/Aplication/cookies
			setcookie('idioma', $idioma, time()+3600*24*30*12, '/');
		}
		
	}

	//include de idioma seleccionado entre ""
	include("multiidioma/contenido_$idioma.php");
?>

<html>
<head>
	<title>visibilidad</title>
	<meta charset='UTF-8'>
	<style type="text/css">
		header, footer {
			width: 800px;
			height: 80px;
			border: 5px ridge gold;
			background-color: gold;
			border-radius: 15px;
			text-align: center;
			margin: auto;
			box-sizing:border-box;
		}
		header {
			height: 120px;
		}
		nav {
			width: 800px;
			height: 40px;
			border: 5px ridge gold;
			background-color: gold;
			border-radius: 15px;
			text-align: center;
			margin: 5px auto;
			padding-top:5px;
			box-sizing:border-box; 
		}
		nav a {
			display: inline-block;
			width: 100px;
			height: 20px;
			border: 1px solid blue;
			text-decoration: none;
			line-height: 20px;
		}
		section {
			width: 800px;
			height: 400px;
			border: 5px ridge gold;
			background-color: green;
			border-radius: 15px;
			text-align: justify;
			margin: auto;
			box-sizing:border-box;
			padding: 20px;
		}
	</style>
</head>
<body>
	
	<!--header-->
	<?php include('includes/header.html');
	;?>
	<!--navbar-->
	<?php include('includes/navbar.html');
	;?>
	
	<section><h2><?=$titulo_form;?></h2>
		<label><?=$label;?></label>
		<br><br>
	<textarea></textarea>
	</section>

		
	<!--footer-->
	<?php include('includes/footer.html');
	;?>

</body>
</html>





