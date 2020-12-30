<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <!--Custom CSS-->
        <link rel="stylesheet" href="css/style.css">
        <title>SW - Timeline</title>
        <!-- Bootstrap4 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link rel="icon" type="image/png" href="media/Fulcrum.png">
</head>
<body background="media/background.jpg">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img src="media/Fulcrum.png" alt="icon" height="50">Star Wars Saga Timeline</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu"><span class="navbar-toggler-icon"></span></button>
        <div id="navbarMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="Register.html">Register</a></li>
            </ul>
        </div>
    </nav>
    <?php
    //falta crear constructor sentencia
    $sel_query="SELECT * FROM  Contenido WHERE IDcontenido = 1;";
    $result = mysqli_query($con,$sel_query);
    while($row = mysqli_fetch_assoc($result)) { 
    ?>

    <div id="contenedor" class="container-fluid main-wrapper"
        <!--Columna Portada-->
        <div class="row no-gutters">
            <div class="col-md-3 col-xs-2">
                <img src="media/Fulcrum.png" alt="icon" style="max-height:700px">
            </div> 
            
            <!--Columna Informacion-->
            <div class="col">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-9">
                        <h1 class="title" style="color:#FFE81F";><?php echo utf8_decode($row["Name"]); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <h3 style="color:#FFE81F; font-size:20px; ">aurebesh translation</h3>
                        <h3 style="color:#fdfbec; font-size:15px; "><?php echo $row["Release"]; ?></h3>
                        <h3 style="color:#fdfbec; font-size:15px; "><?php echo $row["Type"]; ?> - Plataformas </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 style="color:azure; font-size:20px; text-align:justify"><?php echo $row["Info"]; ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-offset-1"><iframe src="<?php echo $row["trailer"]; ?>"></iframe></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="push"></div>
    <footer class="footer">
        <hr><br><center><div class="container"><span class="text-muted">Copyright disclaimer: all rigths belong to Lucasfilm and associates.</span></div></center>
    </footer>
    <?php }?>
    <!--Bootstrap4 JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>