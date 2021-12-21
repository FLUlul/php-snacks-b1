<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-6</title>
    <!-- ## Snack 6
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
    <?php
 
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ],
                [
                    'name' => 'Mario',
                    'lastname' => 'Mariottide'
                ],
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ],
                [
                    'name' => 'Valerio',
                    'lastname' => 'Massi'
                ],
                [
                    'name' => 'Luca',
                    'lastname' => 'Mariottide'
                ],
            ]
        ];
        
        $myDivClass = '';
        foreach ($db as $key => $tab) {
            
            echo "<h4>" . $key . "</h4>";
            $tab = $db[$key];
            
            foreach ($tab as $student) {

                if ($key == 'teachers') {
                    $myDivClass = 'border-grey';
                } else {
                    $myDivClass = 'border-green';
                }

               echo "<div class= $myDivClass >" . $student["name"] . " " . $student["lastname"] . "</div>";
            }
        }
    ?>
</head>
<body>
    <style>
        .border-grey {
            border: solid 5px grey;
            border-radius: 10px;
        }
        .border-green {
            border: solid 5px green;
            border-radius: 10px;
        }
    </style>
</body>
</html>