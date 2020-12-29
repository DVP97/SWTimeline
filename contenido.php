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
    <tbody>
        <?php
        $sel_query="SELECT * FROM  Contenido;";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Release"]; ?></td>
            <td><?php echo $row["Type"]; ?></td>
            <td><?php echo $row["Info"]; ?></td>
        </tr>
       <?php }?>
    </tbody>
</body>
</html>