<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-4</title>
    <!-- ## Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
</head>
<body>
    <?php
        $arrayNums = [];

        while (count($arrayNums) < 15) {
            $randNum = rand(1, 20);
            if (!in_array($randNum, $arrayNums)) {
                $arrayNums[] = $randNum;
                echo "<div>";
                    echo $randNum;
                echo "</div>";
            }
        }
        var_dump($arrayNums);
    ?>
</body>
</html>