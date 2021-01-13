<?php
require('db.php');
$con->set_charset('utf8');
//falta crear constructor sentencia
$sel_query="SELECT * FROM  Contenido WHERE IDepoca = 1;";
$result = mysqli_query($con,$sel_query);
?>
<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="UTF-8">
		<title> Timeline Sequence V1 </title>
		
		<!-- Hojas de estilo -->
		<!-- De aquí salen los simbolitos de los círculos (hoja, gorro, casa) -->
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
		<link rel="stylesheet" href="css/timeline.min.css">
		
		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>
		<script src="scripts/timeline.js"></script>
	</head>

	<body background="media/background.jpg">
		<center>

				<div class="timeline">
					<div class="timeline_wrap">
						<div class="timeline_items">
							<?php
							foreach($result as $row){
							?>
								<div class="timeline_item">
									<div class="timeline_content">
									<h1><?php echo $row["Name"]; ?></h1>
									<p><?php echo $row["Info"]; ?></p>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>

		</center>
	</body>
	<script>
		$(document).ready(function()){
			jQuery('.timeline').timeline({
				mode: 'horizontal'
			});
		});
	</script>
</html>