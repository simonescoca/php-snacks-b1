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

            if (strlen($name) > 3 && str_contains($email, ".") && str_contains($email, "@") && is_numeric($age)) {
                echo "Accesso eseguito!";
            } else {
                echo "Accesso negato!";
            }
        ?>
    </body>
</html>