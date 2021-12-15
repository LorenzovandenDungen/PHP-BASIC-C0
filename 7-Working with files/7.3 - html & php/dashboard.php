<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?> <!-- Op deze regel wordt een menu ingevoegd -->
    </div>

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 16 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
        ?>
    </div>

</body>
</html>