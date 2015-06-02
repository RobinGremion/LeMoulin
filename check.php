
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Le Moulin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<!---------------------------------------------------------------------------------->
<?php
$code = $_POST['code'];
$ip = $_SERVER["REMOTE_ADDR"];

require('./admin/rb.php');
R::setup('mysql:host=localhost;dbname=datalan','admin','');
$tab = R::getRow('SELECT * FROM joueurs WHERE code like "'.$code.'"');
$selecteur =  $tab['id'];
if($selecteur >= 1 ) {
    $user = R::load('joueurs', $selecteur);
    $user->ip = $ip;
    R::store($user);
}
?>
<!---------------------------------------------------------------------------------->
<div class="container theme-showcase" role="main">
    <div class="jumbotron"><div class="centerthis"><span style="font-size:2em;font-weight:bold;">Le Moulin</span></div></div>
    <div class="centerthis">
        <?php
        if($selecteur >= 1)
        {
            echo('<p>Bienvenue <span style="font-weight: bold">'.$tab['prenom'].'</span></p>');
        }
        else
        {
            echo('<p>Code <span style="font-weight: bold">Invalide</span></p>');
        }
        ?>



    </div>

    <p style="margin-top:30%;">Ce n'est pas votre nom? Dans ce cas, merci de vous annoncer au près des organisateurs</p>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>