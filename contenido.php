<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>SW - Timeline</title>
    <link rel="icon" type="image/png" href="media/Fulcrum.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body background="media/background.jpg">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html"><img src="media/Fulcrum.png" alt="icon" height="50"></a>
            <a class="navbar-brand" href="#">Star Wars Saga Timeline</a>
            <a class="button" href="login.html">Login</a>
            <a class="button" href="Register.html">Register</a>
        </nav>
    </header>
    <?php
    $sel_query="SELECT * FROM  Contenido WHERE IDcontenido = 1;";
    $result = mysqli_query($con,$sel_query);
    while($row = mysqli_fetch_assoc($result)) { 
    ?>
    <!--falta añadir portada-->
    <div class="container">
        <div class="row">
            <div class="col"><!--portada--><img src="media/Fulcrum.png" alt="icon" height="300px"></div>
            <div class="col">
                <div class="row">
                    <div class="col-md-7"><?php echo $row["Name"]; ?></div>
                    <div class="col-md-3">aurebesh translation</div>
                </div>
                <div class="row">
                    <div class="col-md-3"><?php echo $row["Release"]; ?></div>
                    <div class="col-md-2"><?php echo $row["Type"]; ?></div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-7"><?php echo $row["Info"]; ?></div>
                    <div class="col">Insertar trailer</div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

</body>
</html>