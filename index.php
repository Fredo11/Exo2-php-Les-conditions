<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Exo_php_condition</title>
  </head>

  <body>
		<?php
            //=============exo 1 ==================================
            $age = 53;
    				if ($age >= 18){
    				echo "Vous êtes majeur.";
            }
            else echo "Vous êtes mineur.";

            echo "<br>";  ##=============retour a la ligne ========

            //=============exo 2 ==================================
            $age = 53;
            $genre = "Homme";
            if ($age >= 18){
            echo ($genre == "femme") ? "Vous êtes une femme majeure." : "vous êtes un homme majeur.";
            }
            else{
            echo ($genre == "femme") ? "Vous êtes une femme mineur." : "vous êtes un homme mineur.";
            }

            echo "<br>";  ##=============retour a la ligne ========

            //=============exo 3 ==================================
            $maVariable = "Homme";
            if ($maVariable != "Homme"){
            echo "C'est une développeuse !!!";    ##"C'est une développeuse !!!"
            }
            else {
            echo "C'est un développeur !!!";
            }

            echo "<br>";  ##=============retour a la ligne ========

            //=============exo 4 ==================================
            $monAge = 13;
            if ($monAge >= 18){
            echo 'Tu es majeur.';
            }
            else {
            echo 'Tu n\'es pas majeur.';           ##'Tu n\'es pas majeur'
            }

            echo "<br>";  ##=============retour a la ligne ========

            //=============exo 5 ==================================
            // echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
            $maVariable == false;
            if ($maVariable == false){
              echo "C'est pas bon !!!";
            }
            else {
              echo 'C\'est ok !!!';
            }

            echo "<br>";  ##=============retour a la ligne ========

            //=============exo 6 ==================================
              // echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
              $maVariable == true;
              if ($maVariable == true){
                echo "C'est ok !!";
              }
              else {
                echo "C'est pas bon !!!";
              }
    ?>

  </body>
</html>
