<html lang="pl">
    <head>
        <title>Kalkulator</title>
        <link rel="Stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <div>
            <div class="calculate">
        <p>Podaj wartości wyrażone w centymetrach:</p>
       <div class="flex"> <form method="POST" action="valid.php">
            <div><span class="input_description">wysokość:</span></div> <div> <input type="number" name="height" required><br></div>
            <div><span class="input_description">szerokość:</span></div><div> <input type="number" name="width" required><br></div>
            <div><span class="input_description">długość:</span></div><div> <input type="number" name="length" required><br></div>
            <div><input class="button" type="submit"></div>
        </form></div></div>
    </body>
</html>