<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /*
            Scrivi una funzione che accetti tre argomenti:
            un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).
            La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
            tra "a" e "b"
            */

            $a = subArray([1, 2, 3, 4, 5], 1, 3);
            var_dump($a);

            function subArray (array $the_array, int $starting_point, int $ending_point) {
                if( 
                $starting_point >= $ending_point ||
                $ending_point >= count($the_array) ||
                count($the_array) <= 1) {
                    echo "Parametri non validi";
                } else {
                    $sub_array = [];
                    for ($i = $starting_point; $i < $ending_point; $i++) {
                        $sub_array[] = $the_array[$i];
                        return $sub_array;
                    }
                }
            }
        ?>
    </body>
</html>