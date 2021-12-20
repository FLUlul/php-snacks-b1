<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-1</title>
   <!--  ## Snack 1
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->
    <?php 
        $matches = [
            [
                "team-1" => "Roma",
                "team-2" => "Lazio",
                "score-team-1" => 50,
                "score-team-2" => 60
            ],
            [
                "team-1" => "Chicago Bulls",
                "team-2" => "Legnano",
                "score-team-1" => 60,
                "score-team-2" => 1
            ],
            [
                "team-1" => "Milano",
                "team-2" => "Russia",
                "score-team-1" => 20,
                "score-team-2" => 11
            ],
            [
                "team-1" => "LOOL",
                "team-2" => "ROFL",
                "score-team-1" => 60,
                "score-team-2" => 22
            ]
        ]
    ?>
</head>
<body>
    <p>
        <?php 
            for ($i=0; $i < count($matches); $i++) { 
                echo $matches[$i]["team-1"] . " - " . $matches[$i]["team-2"] . " | " . $matches[$i]["score-team-1"] . " - " . $matches[$i]["score-team-2"] . "<br>";
            }
        ?>
    </p>
</body>
</html>