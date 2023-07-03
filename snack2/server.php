<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server</title>
    </head>
    <body>
        <?php
            $name = $_GET["name"];
            $email = $_GET["email"];
            $age = $_GET["age"];

            $caratteriEmail = ".@";

            // if (strlen($name) > 3 && str_contains($email, $caratteriEmail) && is_numeric($age)) {
            //     echo "Accesso eseguito!";
            // } else {
            //     echo "Accesso negato!";
            // }

            var_dump(strlen($name) > 3);
            var_dump(str_contains($email, $caratter1Email));
            var_dump(is_numeric($age));
        ?>
    </body>
</html>