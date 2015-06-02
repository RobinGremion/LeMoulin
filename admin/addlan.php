<?php
session_start();
if($_SESSION['user'] == 1) {
    ?>
    <?php
    require 'rb.php';
    R::setup('mysql:host=localhost;dbname=datalan', 'admin', '');
    /**
     * Created by PhpStorm.
     * User: robin
     * Date: 23.05.15
     * Time: 01:08
     */
    function charcode($number)
    {
        switch ($number) {
            case 1:
                return 'a';
            case 2:
                return 'b';
            case 3:
                return 'c';
            case 4:
                return 'd';
            case 5:
                return 'e';
            case 6:
                return 'f';
            case 7:
                return 'g';
            case 8:
                return 'h';
            case 9:
                return 'i';
            case 10:
                return 'j';
            case 11:
                return 'k';
            case 12:
                return 'l';
            case 13:
                return 'm';
            case 14:
                return 'n';
            case 15:
                return 'o';
            case 16:
                return 'p';
            case 17:
                return 'q';
            case 18:
                return 'r';
            case 19:
                return 's';
            case 20:
                return 't';
            case 21:
                return 'u';
            case 22:
                return 'v';
            case 23:
                return 'w';
            case 24:
                return 'x';
            case 25:
                return 'y';
            case 26:
                return 'z';

        }
    }

    $nbjoueurs = $_GET['nbjoueurs'];


    for ($i = 0; $i < $nbjoueurs; $i++) {
        $code = '';

        $joueurs = R::dispense('joueurs');
        $nom = $_POST['nom' . $i . ''];
        $joueurs->nom = $nom;
        $prenom = $_POST['prenom' . $i . ''];
        $joueurs->prenom = $prenom;
        $joueurs->connected = "no";
        $joueurs->ip = "XXX.XXX.XXX.XXX";
        echo $nom;
        echo(" ");
        echo($prenom);
        echo("<br>");
        for ($x = 0; $x < 8; $x++) {
            $lettrecode = rand(1, 24);
            $lettrecode = charcode($lettrecode);
            $code = $code . '' . $lettrecode;
        }
        $joueurs->code = $code;
        echo $code;
        $id = R::store($joueurs);

    }
    R::close();
}