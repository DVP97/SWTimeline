<?php
require('db.php');
$con->set_charset('utf8');
//falta crear constructor sentencia
$sel_query="SELECT * FROM  Contenido WHERE IDepoca = 1;";
$result = mysqli_query($con,$sel_query);
?>

<!DOCTYPE html>
<html>  
    <head>  
        <title> Línea de tiempo </title>
        
        <!-- Hojas de estilo -->
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/timeline.min.css" />
		<link rel="stylesheet" href="css/timeline_custom_style.css" /> 
		
		<!-- JavaScript --> 
		<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
        <script src="scripts/jquery.js"></script>
        <script src="scripts/timeline.min.js"></script>		
		
    </head>  
    <body>  
        <div class="container">
			<br />
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">
                    <h3 class="panel-title">Línea de tiempo</h3>
                </div>
                <div class="panel-body">                	
                    <div class="timeline">
                        <div class="timeline__wrap">
                            <div class="timeline__items">
                            <?php
                            foreach($result as $row)
                            {
                            ?>
                            	<div class="timeline__item">
                                    <div class="timeline__content">
                                            <h1><?php echo $row["Name"]; ?></h1>
											<h2> <?php echo $row["Date"], ' ABY'; ?></h2>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </body>  
</html>

<script>
    $(document).ready(function(){
        jQuery('.timeline').timeline({
            mode: 'horizontal', visibleItems: 1 /*Si no no enseña las flechas*/
        });
    });
</script>