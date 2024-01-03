<?php 
//check if form was accessed through post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //grab data from the form in a secure way (prevent code injection)
    $amountToConvert = htmlspecialchars($_POST["amount"]);

    $yenToEuro = 1/156;

    $amountConverted = $amountToConvert * $yenToEuro;

    echo $amountToConvert . " yen" . " equals" . $amountConverted . " euros";

    //empty field
    if (empty($amountToConvert)) {
        exit();
        header ("Location: ../index.php");
    }

    //if not accessed through proper link
} else {
    header ("Location: ../index.php");
}