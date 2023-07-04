/*
Scrivi una funzione che fonde due array (aventi lo stesso numero di elementi) prendendo in maniera alternata gli elementi da uno e dall'altro
es. [a,b,c,d,e], [1,2,3,4,5] → [a,1,b,2,c,3,d,4,e,5].
*/

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fusioneee</title>
    </head>
    <body>
        <?php
            $array1 = ["a", "b", "c", "d", "e"];
            $array2 = [1, 2, 3, 4, 5];

            $array3 = fusioneee ($array1, $array2);
            var_dump ($array3);

            function fusioneee ($primo_array, $secondo_array) {
                $array_fusione = [];
                for ($i = 0 ; $i < 5; $i++) {
                    $array_fusione[] = $primo_array[$i];
                    $array_fusione[] = $secondo_array[$i];
                }
                return $array_fusione;
            }
        ?>
    </body>
</html>