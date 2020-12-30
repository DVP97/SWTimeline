<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/textStyle.css">
    <!--titulo-->
    <title>SW - Timeline</title>
    <!--logo tab navegador-->
    <link rel="icon" type="image/png" href="media/Fulcrum.png">
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
    //falta crear constructor sentencia
    $sel_query="SELECT * FROM  Contenido WHERE IDcontenido = 1;";
    $result = mysqli_query($con,$sel_query);
    while($row = mysqli_fetch_assoc($result)) { 
    ?>

    <div id="contenedor" class="container-fluid main-wrapper"
        <!--Columna Portada-->
        <div class="row no-gutters">
            <div class="col">
                <img src="media/Fulcrum.png" alt="icon" style="height:80vh">
            </div> 
            
            <!--Columna Informacion-->
            <div class="col">
                <div class="row">
                    <div class="col-xs-6 col-md-9">
                        <h1 class="title" style="color:#FFE81F";><?php echo utf8_decode($row["Name"]); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <h3 style="color:#FFE81F; font-size:20px; ">aurebesh translation</h3>
                        <h3 style="color:#fdfbec; font-size:15px; "><?php echo $row["Release"]; ?></h3>
                        <h3 style="color:#fdfbec; font-size:15px; "><?php echo $row["Type"]; ?> - Plataformas </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h3 style="color:azure; font-size:20px; text-align:justify"><?php echo $row["Info"]; ?></h3>
                    </div>
                    <div class="col-md-6">
                    <iframe src="<?php echo $row["trailer"]; ?>" style="width:50vh"></iframe> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

</body>
</html>