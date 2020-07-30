<!--DOCUMENTO 1 con el section del Doc1-->
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
	
	<section><h2><?=$titulo_imagen?></h2><img src="http://www.lorempixel.com/250/250/nature"></section>

		
	<!--footer-->
	<?php include('includes/footer.html');
	;?>

</body>
</html>