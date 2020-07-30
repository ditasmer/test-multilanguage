<?php
//array de idiomas permitidos
$array_idiomas = ['es', 'ca'];

	//definir un idioma por defecto
	$idioma = 'es';

	//idioma por navegador
	//print_r($_SERVER);
	//echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$idioma_nav = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	//echo $idioma_nav;
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