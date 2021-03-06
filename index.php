<?php
//include auth.php file on all secure pages
session_start();
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
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <!--textStyle CSS-->
        <link rel="stylesheet" href="css/textStyle.css">
        <!--Tab icon-->
        <link rel="icon" type="image/png" href="media/Fulcrum.png">
        <!-- CSS que sobreescribe los 'por defecto' para que se vea el timeline bien -->
        <link rel="stylesheet" href="css/timeline_custom_style.css">
    </head>

    <body background="media/background.jpg">
        <div class="container" style="height:70vh;">
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
            <!--vista que se actualiza sin necesidad de cambiar de página-->
            <div class="container" id="vista">
                <h1 class="title text-center" style="color: cyan;" >hace mucho tiempo, en una galaxia muy muy lejana...</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4"><button class="btn-block epoca1" id="btnOldRep"><div class="text-center">Antigua República</div></button></div>
                        <div class="col-12 col-lg-4"><button class="btn-block epoca2" id="btnGalactRep"><div class="text-center">República Galáctica</div></button></div>
                        <div class="col-12 col-lg-4"><button class="btn-block epoca3" id="btnCW"><div class="text-center">Guerra Civil</div></button></div> 
                    </div>
                </div>
                <div class="navbar navbar-default navbar-fixed-bottom">
                    <div class="container"><p class="text-muted text-center">Copyright disclaimer: all rights from the Star Wars franchise belong to Lucasfilm and associates.</p></div>
                </div>
            </div>
        </div>
        
        <!--Bootstrap4 JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
        <!--loader JS-->
        <script src="scripts/loader.js"></script>
    </body>

</html>