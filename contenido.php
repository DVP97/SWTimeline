<?php
require('db.php');
$con->set_charset('utf8');
session_start();
//get contenido actual
$contID = $_GET["actual"];
$sel_query="SELECT * FROM  Contenido WHERE IDcontenido = $contID;";
$result = mysqli_query($con,$sel_query);



$insert_query="INSERT INTO users_Contenido(ID_Contenido,ID_user) VALUES ($contID,$userID);";
while($row = mysqli_fetch_assoc($result)) { 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>SW - Timeline</title>
        <!-- Bootstrap4 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <!--textStyle CSS-->
        <link rel="stylesheet" href="css/textStyle.css">
        <!--Custom CSS-->
        <link rel="stylesheet" href="css/style.css">
        <!--Tab icon-->
        <link rel="icon" type="image/png" href="media/Fulcrum.png">
    </head>
    <body background="media/background.jpg">
    

        <div id="contenedor" class="container-fluid main-wrapper">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <a class="navbar-brand" href="index.php"><img src="media/Fulcrum.png" alt="icon" height="50">Star Wars Saga Timeline</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu"><span class="navbar-toggler-icon"></span></button>
                <div id="navbarMenu" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION["username"])):?>
                        <!--mostrar icono usuario con link a profile.php y botón de Logout-->
                        <li class="nav-item"><img src="media/user_def.jpg" width="60vw" ></img></li>
                        <li class="nav-item"><br><a class="nav-link" href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
                        <li class="nav-item"><br><a class="nav-link" href="logout.php">Logout</a></li>
                    <?php else:?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <?php endif;?>
                    </ul>
                </div>
            </nav>
            <!--Marco info contenido-->
            <div class="row no-gutters">
                <!--Columna Portada-->
                <div class="col-12 col-lg-6">
                    <!--cambiar src por variable que incluya la ruta relativa a la portada-->
                    <img src="media/Fulcrum.png" alt="icon" style="max-height:600px">
                </div> 
                
                <!--Columna Informacion-->
                <div class="col-lg-6">
                    <!--Campo título-->
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-9">
                            <h1 class="title" style="color:#FFE81F"><?php echo $row["Name"]; ?></h1>
                        </div>
                    </div>
                    <!--Campo info-->
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <h3 style="color:#fdfbec; font-size:15px; "><?php echo $row["Release"]; ?></h3>
                            <h3 style="color:#fdfbec; font-size:15px; "><?php echo $row["Type"]; ?> <!--Plataformas if $row["Type"]=Juego--> </h3>
                        </div>
                    </div>
                    <!--Sinopsis-->
                    <div class="row">
                        <div class="col-xs-6">
                            <h3 style="color:azure; font-size:20px; text-align:justify"><?php echo $row["Info"]; ?></h3>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <!--Link trailer-->   
                        <div class="col-offset-1"><iframe src="<?php echo $row["trailer"]; ?>"></iframe></div>
                         <!--Toogle boton manejar lista-->
                         
                    </div>
                </div>
                <!--Footer-->
                <div class="navbar navbar-default navbar-fixed-bottom">
                    <div class="container"><p class="text-muted text-center">Copyright disclaimer: all rights from the Star Wars franchise belong to Lucasfilm and associates.</p></div>
                </div>
            </div>
        </div>

        <?php }?>

        <!--Bootstrap4 JS-->
        <!--
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        -->
    </body>
</html>