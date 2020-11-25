<!DOCTYPE html>
<html>
    <body>

        <?php
            require_once('player.php');

            $playerA = new Player("A", 1700);
            $playerB = new Player("B", 2500);
            $playerC = new Player("C", 1200);
            $playerD = new Player("D", 1800);

            echo  "Probabilité du joueur A face au joueur B: " . $playerA->probaTowin($playerB);
            echo "<br>";
            echo "<br>";

            echo  "Probabilité du joueur B face au joueur A: " . $playerB->probaTowin($playerA);
            echo "<br>";
            echo "<br>";

            echo  "Probabilité du joueur C face au joueur A: " .  $playerC->probaTowin($playerA) ;
            echo "<br>";
            echo "<br>";

            echo  "Probabilité du joueur A face au joueur C: " . $playerA->probaTowin($playerC);
            echo "<br>";
            echo "<br>";

            echo  "Probabilité du joueur D face au joueur A: " . $playerD->probaTowin($playerA);
            echo "<br>";
            echo "<br>";

            echo  "Probabilité du joueur A face au joueur D: " . $playerA->probaTowin($playerD);
            echo "<br>";
            echo "<br>";

            echo "Admettons que A gagne face à B contre toute attente. Il faudrait corriger leurs niveaux respectifs.";
            echo "<br>";echo "<br>";

            $playerA->winAgainst($playerB);
            echo "Le nouveau niveau du joueur A est: 1700 + 32 * (1 - 0.0099009900990099) soit: " . $playerA->getLevel(); echo "<br>"; echo "<br>";

            $playerB->lostAgainst($playerA);
            echo "Le nouveau niveau du joueur B est: 2500 + 32 * (0 - 0.99009900990099) soit: " . $playerB->getLevel(); echo "<br>";

        ?>
    
    </body>
</html>
