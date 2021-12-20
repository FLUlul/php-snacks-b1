<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-2</title>
    <!-- ## Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
    <?php
        $name = $_GET["name-user"];
        $mail = $_GET["email-user"];
        $age = $_GET["age-user"];
    ?>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name-user" placeholder="name">
        <input type="text" name="email-user" placeholder="email">
        <input type="text" name="age-user" placeholder="age">
        <button>check</button>
    </form>
    <p>
        <?php
            if (strlen($name) > 3 && str_contains($mail, "@") && str_contains($mail, ".") && is_numeric($age)) {
                echo "Accesso Riuscito";
            } else {
                echo "Accesso Negato";
            }
        ?>
    </p>
</body>
</html>