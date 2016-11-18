<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title>pertemuan satu oke</title>
        <link href="assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/flat-ui.min.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/vendor/jquery.min.js" type="text/javascript"></script>
         <script src="assets/js/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/flat-ui.min.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" >
            <h2>PERTEMUAN SATU OKE</h2><hr/>	
            <?php
             
            session_start();
            include 'menu.php';
            if (isset($_SESSION["login"])) {
                echo"Welcome";
                echo'<a href="logout.php" class=btn btn-lg btn-danger">logout</a>';
            } else {

                include 'login.php';
            }
            ?>
        </div>
    </body>
</html>
