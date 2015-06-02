<?php
session_start();
if($_SESSION['user'] == 1)
{
?>
<?php
require('rb.php');
R::setup('mysql:host=localhost;dbname=datalan','admin','');
$tab = R::getAll('SELECT * FROM joueurs')
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
<div class="container theme-showcase" role="main">
    <div class="jumbotron"><div class="centerthis"><span style="font-size:2em;font-weight:bold;">Ae2tml LAN</span></div></div>



    <div class="table-responsive">
        <table class="table">

            <th>ID</th><th>Nom</th><th>Prénom</th><th>IP</th><th>Connected</th><th>Code</th><th>Connect</th>

            <?php
            for($i = 0;$i<count($tab);$i++) {
                ?>
                <tr>
                    <td><?php echo($tab[$i]['id']) ?></td>
                    <td><?php echo($tab[$i]['nom']) ?></td>
                    <td><?php echo($tab[$i]['prenom']) ?></td>
                    <td><?php echo($tab[$i]['ip']) ?></td>
                    <td><?php echo($tab[$i]['connected']) ?></td>
                    <td><?php echo($tab[$i]['code']) ?></td>
                    <td>
                        <button class="btn">Connect</button>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
        </div4>
        <?php R::close() ?>





    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<? } ?>