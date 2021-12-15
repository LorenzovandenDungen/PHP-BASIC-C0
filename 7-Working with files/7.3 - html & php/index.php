<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="ismeerderjarig">
        <?php
            $leeftijd = 16;
                if($leeftijd < 18){
                    echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
        ?>
    </div>
</body>
</html>