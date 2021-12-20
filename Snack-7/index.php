<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-7</title>
    <!-- ## Snack 7
    Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    <?php
        $classRoom = [
            [
                "name" => "Valerio",
                "lastname" => "Massi",
                "votes" => [
                    8, 9, 8, 7, 9
                ]
            ],
            [
                "name" => "Francesco",
                "lastname" => "Capo",
                "votes" => [
                    6, 5, 6, 6, 4
                ]
            ],
            [
                "name" => "Lorenzo",
                "lastname" => "Lapo",
                "votes" => [
                    7, 7, 10, 7, 9
                ]
            ],
            [
                "name" => "Simone",
                "lastname" => "Bara",
                "votes" => [
                    2, 2, 1, 2, 0
                ]
            ],
        ];

        foreach ($classRoom as $student) {
            echo "<h4>" . $student["name"] . " " . $student["lastname"] . "</h4>";
            foreach ($student["votes"] as $vote) {
                $sum += $vote;
                $avarage = $sum / count($student["votes"]);
            }
            echo "Avarage Vote: " . $avarage;
            $sum = 0;
        }
    ?>
</head>
<body>
    
</body>
</html>