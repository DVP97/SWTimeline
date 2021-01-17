<?php
require('db.php');
$con->set_charset('utf8');
?>
<?php
//falta crear constructor sentencia
$sel_query="SELECT Contenido.Name
            FROM Contenido 
            JOIN user_Contenido ON Contenido.IDcontenido = users_Contenido.ID_Contenido 
            JOIN users ON users_Contenido.ID_user = users.IDuser
            WHERE users.IDuser EQUALS 1";
$result = mysqli_query($con,$sel_query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SW - Timeline</title>
        <!--Custom CSS-->
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap4 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <!--textStyle CSS-->
        <link rel="stylesheet" href="css/textStyle.css">
        
        <!--Tab icon-->
        <link rel="icon" type="image/png" href="media/Fulcrum.png">
    </head>

    <body background="media/background.jpg">

        <nav class="navbar navbar-expand-sm navbar-dark">
            <a class="navbar-brand" href="index.html"><img src="media/Fulcrum.png" alt="icon" height="50">Star Wars Saga Timeline</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarMenu" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Log out</a></li>
                </ul>
            </div>
        </nav>
        <div class="container" style="height:80vh;">
            <div class="row">
                <div class="col-sm-3">
                    <!--Icono usuario-->
                    <img src="media/user_def.jpg" width="100vw" ></img>
                </div>
                <div class="col-md-9">
                    <!--Nombre de usuario-->
                    <h1>CT-5555</h1>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <!--Menu opciones usuario-->
                </div>
                
                <div class="col-md-9">
                    <!--Lista contenido del usuario-->
                    <ol>
                        <?php
                        foreach($result as $row){
                        ?>
                        <li><?php echo $row["Name"]; ?></li>
                        <?php }?>
                    </ol>
                </div>
            </div>
        </div>      
        <footer class="footer" >
            <hr><br><center><div class="container"><span class="text-muted">Copyright disclaimer: all rights from the Star Wars franchise belong to Lucasfilm and associates.</span></div></center>
        </footer>
        <!--Bootstrap4 JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>