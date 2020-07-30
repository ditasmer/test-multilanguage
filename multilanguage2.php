<!--DOCUMENTO 2 copia exacta del 1 pero con el section diferente doc2-->
<?php
	include('multiidioma/contenido_es.php');
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
		a {
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
	
	<section><h2>FORMULARIO</h2>
	<textarea></textarea>
	</section>

		
	<!--footer-->
	<?php include('includes/footer.html');
	;?>

</body>
</html>





