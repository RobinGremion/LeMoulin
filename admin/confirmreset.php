<?php
/**
 * Created by PhpStorm.
 * User: robin
 * Date: 27.05.15
 * Time: 19:09
 */

require('rb.php');
R::setup('mysql:host=localhost;dbname=datalan','admin','');
$code = $_POST['code'];
$user = $_POST['user'];
$pwd = $_POST['pwd'];
//echo $user;
//echo $pwd;




//--------------- Suppression de la BDD -------------------//
if($code == "ultimaker")
{

    R::wipe('joueurs');
    echo('Deleted');
    echo('<br></b><a href="index.php">Return Home</a>');
}
else
{
    $tab = R::getAll('SELECT * FROM admin WHERE username LIKE "'.$user.'" ');
    if($tab[0]['username'] <> '') {


        if ($tab[0]['username'] == $user && $tab[0]['password'] == $pwd) {
            session_start();
            $_SESSION['user'] = 1;
            echo "OK"; //L'utilisateur est connecté
            ?>
            <meta http-equiv="refresh" content="0; url=./index.php"/>
        <?php
        } else
            echo("ERROR");

    }
    else
        echo("Error");







}