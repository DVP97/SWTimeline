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
		<title> Timeline Old Republic </title>
		
		<!-- Hojas de estilo -->
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/timeline.min.css" /> 
		
		<!-- JavaScript --> 
		<script src="scripts/jquery.js"></script>
        <script src="scripts/timeline.min.js"></script>		

	</head>

	<body>
		<center>
        <div class="panel panel-default">
				<div class="panel-heading">
                    <h3 class="panel-title">La Antigua República</h3>
                </div>
    
				<div class="timeline">
					<div class="timeline__wrap">
						<div class="timeline__items">
							<?php
							foreach($result as $row){
							?>
								<div class="timeline__item">
									<div class="timeline__content">
									<h1><?php echo $row["Name"]; ?></h1>
                                    <h2> <?php echo $row["Date"], ' ABY'; ?></h2>
									<p><?php echo $row["Info"]; ?></p>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
        </div>

		</center>
	</body>
	
</html>

<script>
		$(document).ready(function(){
			jQuery('.timeline').timeline({
				mode: 'horizontal', visibleItems: 2
			});
		});
</script>