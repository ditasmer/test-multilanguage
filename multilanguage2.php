<!--DOCUMENTO 2 copia exacta del 1 pero con el section diferente doc2-->
<?php
//gestion del idioma
require('multiidioma/language.php');
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
	<script type="text/javascript">
		function validar(){
			//recoge comentarios sin espacios por delante y detrás
			let comentario_usuario = document.querySelector('#comentarios').value.trim()

			if(comentario_usuario == ''){
				alert('<?=$error;?>');
				return;
			}
			alert('ok');
		}
	</script>
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
	<textarea id='comentarios'></textarea>
	<br>
	<!-- simulamos que si fuera un formulario real valide contenido-->
	<input type='button' onclick='validar()' value='Enviar'></input>
	</section>

		
	<!--footer-->
	<?php include('includes/footer.html');
	;?>

</body>
</html>





