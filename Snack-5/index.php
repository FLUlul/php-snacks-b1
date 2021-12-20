<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-5</title>
    <!-- ## Snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
    <?php
        $para = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur sint temporibus cumque velit totam doloremque pariatur iusto doloribus facere sequi. Natus consequatur dolores sequi sapiente commodi minima esse quod? Laudantium, eveniet. Explicabo maxime, esse tenetur perferendis quidem autem placeat vel neque quis. Cum magni quam fugiat itaque, fugit tempora beatae placeat, dolore blanditiis deleniti soluta reiciendis id? Laborum vero dignissimos voluptates expedita perferendis voluptatum odit temporibus? Earum deleniti numquam voluptates corporis, quisquam pariatur. Labore fuga neque, quibusdam magni earum, aut sed unde veniam possimus laudantium id itaque exercitationem aliquam ab voluptates reprehenderit deserunt, dolores architecto sequi odio in dolorum modi.";
        $pieces = explode(".", $para);
    ?>
</head>
<body>
    <?php
        for ($i=0; $i < count($pieces) ; $i++) { 
            echo $pieces[$i] . "<br>"; 
        }
    ?>
</body>
</html>