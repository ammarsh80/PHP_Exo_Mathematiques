<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exo - Mathématiques</title>
</head>

<body>
    <main>

        <!-- Partie 1
Affichage des carrés de tous les nombres entre 1 et 30.
1) Créer une page PHP permettant d’afficher, sous forme de liste non ordonnée, les carrés des nombres de 1 à 30 selon le format : -->
        <?php
        echo "<ul>";
        for ($i = 1; $i <= 30; $i++) {
            echo "<li>$i<sup>2</sup> = " . pow($i, 2) . "</li>";
        }
        echo "</ul>";


        // 2) Créer ensuite une fonction prenant en paramètre un nombre n et retournant la chaîne de caractères n2 = m. Utiliser cette fonction pour produire la même page Web.
        function carre($n)
        {
            return "$n<sup>2</sup> = " . pow($n, 2);
        }

        echo "<ul>";
        for ($i = 1; $i <= 30; $i++) {
            echo "<li>" . carre($i) . "</li>";
        }
        echo "</ul>";
        ?>
<!-- Partie 2
Table de multiplication
Créer un script PHP permettant d’afficher la table de multiplication donnée par la figure 3.3. -->
        <?php
        $tableau = array();

        for ($i = 1; $i <= 9; $i++) {
            $tableau[$i] = array();

            for ($j = 1; $j <= 9; $j++) {
                $tableau[$i][$j] = $i * $j;
            }
        }

        echo '<table border="3">';

        echo '<tr>';
        echo '<th> &nbsp; </th>';

        for ($i = 1; $i <= 9; $i++) {
            echo '<th>' . $i . '</th>';
        }

        echo '</tr>';

        for ($i = 1; $i <= 9; $i++) {
            echo '<tr>';
            echo '<th>' . $i . '</th>';

            for ($j = 1; $j <= 9; $j++) {
                echo '<td>' . $tableau[$i][$j] . '</td>';
            }
        }
        ?>
        <hr>


    </main>
</body>

</html>