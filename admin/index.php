<?php
session_start();
if($_SESSION['user'] == 1)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Ae2tml LAN Admin</title>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron"><div class="centerthis"><span style="font-size:2em;font-weight:bold;">Lan Control</span></div></div>
        <div class="centerthis">
            <a href="liste.php"><button class="btn btn-primary btn-lg" style="margin-left:0%;margin-right:10%;width:400px;margin-bottom: 10px;">Liste</button></a><br>
            <a href="createlan.php"><button class="btn btn-primary btn-lg" style="margin-left:0%;margin-right:10%;width:400px;margin-bottom: 10px;">Ajouter des joueurs</button></a><br>
            <a href="alllist.php"><button class="btn btn-primary btn-lg" style="margin-left:0%;margin-right:10%;width:400px;margin-bottom: 10px;">Liste complète</button></a><br>
            <a href="reset.php"><button class="btn btn-primary btn-lg" style="margin-left:0%;margin-right:10%;width:400px;margin-bottom: 10px;">RESET LAN</button></a><br>
            <a href="restart.php"><button class="btn btn-primary btn-lg" style="margin-left:0%;margin-right:10%;width:400px;margin-bottom: 10px;">Restart Server</button></a><br>
            <a href="../"><button class="btn btn-primary btn-lg" style="margin-left:0%;margin-right:10%;width:400px;margin-bottom: 10px;">Accueil</button></a><br>

        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <a href="destroy.php">Se déconnecter</a>
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
<?php
}
else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin - Ae2tml lan</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container theme-showcase" role="main">
    <div class="jumbotron"><div class="centerthis"><span style="font-size:2em;font-weight:bold;">Moulin Admin</span></div></div>
    <div class="centerthis">
        <form action="confirmreset.php" method="post">
            <p>User<input type="text" name="user"></p>
            <p>Mdp<input type="password" name="pwd"></p>
            <br><input class="btn btn-primary btn-lg" type="submit" style="background-color:#2fff00;padding-top:20px;padding-bottom:20px;padding-left:100px;padding-right:100px;margin-top: 20px;margin-left:5%;font-size:0.8em;" value="OK">


        </form>
    </div>
</div>
<p>Créé par Robin Gremion</p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>


