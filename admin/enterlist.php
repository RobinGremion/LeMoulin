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
    <title>Ae2tml LAN</title>

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
<?php
/**
 * Created by PhpStorm.
 * User: robin
 * Date: 23.05.15
 * Time: 00:56
 */
$nbjoueurs = $_GET['nbjoueurs'];

$i=0;
?>
<div class="container theme-showcase" role="main">
    <div class="jumbotron"><div class="centerthis"><span style="font-size:2em;font-weight:bold;">Ae2tml LAN</span></div></div>


<form <?php echo('action=addlan.php?nbjoueurs='.$nbjoueurs.''); ?> method="POST">
    <div class="table-responsive">
        <table class="table">

            <th>Numéro (indic)</th><th>Nom</th><th>Prénom</th>
            <?php
            for($i=0;$i<$nbjoueurs;$i++)
            {
                $y = $i+1;
                echo('<tr><td>'.$y.'</td><td><input type="text" name="nom'.$i.'"></td><td><input type="text" name="prenom'.$i.'"></td></tr>');
            }
            ?>

            </table>
            </div4>





    </div>
    <input type="submit" value="valider" class="btn btn-info">
</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>