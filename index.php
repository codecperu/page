<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.js"></script>
	<script src="js/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>

</head>
<body>

		<nav class="clearfix">
			<ul class="clearfix ">
				<div id="espaciologo">
					<div id="fondologo"></div>
				</div>	
				<li><a href="home.php">Inicio</a></li>
				<li><a href="include/nosotros.php">Nosotros</a></li>
				<li><a href="include/productos.php">Productos</a></li>
				<li><a href="include/servicios.php">Servicios</a></li>
				<li><a href="include/contactenos.php">Contáctenos</a></li>
			</ul>
			<a href="#" id="pull">CodeC</a>
		</nav>

<div class="doby"></div>		

</table>
</body>
</html>