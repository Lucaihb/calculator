<html>

<head>
    <title>Taschenrechner</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>


<body>

<?php

$showResult = false;
if(isset($_POST["zahl1"])){
    $showResult = true;
    $zahl1 = $_POST["zahl1"];
    $zahl2 = $_POST["zahl2"];
    $type = $_POST["type"];
    $ergebnis = 0;


    switch($type){

        case "+":
            $ergebnis = $zahl1 + $zahl2;
            break;
        case "-":
            $ergebnis = $zahl1 - $zahl2;
            break;
        case "*":
            $ergebnis = $zahl1 * $zahl2;
            break;
        case "/":
            $ergebnis = $zahl1 / $zahl2;
            break;

    }

    

}

?>

<fieldset id="rechnenfeld" class="rounded">

    <h1>Calculator</h1>
    <hr style="background-color: black; height: 5px;" class="rounded">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

    <div class="form-group">
    <label for="zahl1">Bitte erste Zahl eingeben</label>
        <input type="number" class="form-control" id="zahl1" name="zahl1" step="0.01" size="50">
    </div>

    <label class="container">Addieren
    <input type="radio" name="type" value="+" checked>
    <span class="checkmark"></span>
    </label>

    <label class="container">Subtrahieren
    <input type="radio" name="type" value="-">
    <span class="checkmark"></span>
    </label>

    <label class="container">Multiplizieren
    <input type="radio" name="type" value="*">
    <span class="checkmark"></span>
    </label>

    <label class="container">Dividieren
    <input type="radio" name="type" value="/">
    <span class="checkmark"></span>
    </label>

    <div class="form-group" style="margin-top: 15px;">
        <label for="zahl2">Bitte zweite Zahl eingeben</label>
        <input type="number" class="form-control" id="zahl2" name="zahl2" step="0.01">
    </div>

        <input type="submit" class="btn btn-primary" value="Berechnen">
    </form>

    <?php

    if($showResult){
        ?>
        <div class="alert alert-primary">
         <p>Das Ergebnis lautet: <?php echo "($zahl1"." $type"." $zahl2) = ".$ergebnis; ?></p>
        </div>
        <?php
    }

    ?>
</fieldset>

</body>

</html>