<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-3</title>
    <!-- 
    ## Snack 3
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
    -->
    <?php

        $posts = [

            '10-01-2021' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Nicola Perosa',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Lorenzo Bini',
                    'text' => 'Testo post 2'
                ],
            ],
            '05-02-2021' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Simone Barandoni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15-05-2021' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Poggi',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Francesco Caponero',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Lorenzo Lapiana',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
    ?>
</head>
<body>
    <style>
        .post-container {
            border: solid black 5px ;
            border-radius: 10px;
            text-align: center;
            margin: 20px 0;
        }
    </style>
    <?php
        $keys = array_keys($posts);
        for ($i=0; $i < count($posts); $i++) { 
            $key = $keys[$i];
            echo "<div class='post-container'>";
                echo "<h1>" . $key . "</h1>";
                $day = $posts[$key];
                    for ($j=0; $j < count($posts[$key]) ; $j++) {
                        $post = $day[$j];
                        echo "<h2>" . $post["title"] . "</h2>";
                        echo "<h4>" . $post["author"] . "</h4>";
                        echo "<p>" . $post["text"] . "</p>";
                    }
            echo "</div>";
        }
    ?>
</body>
</html>