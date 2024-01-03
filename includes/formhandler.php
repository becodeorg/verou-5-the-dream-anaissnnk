<?php 
//check if form was accessed through post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //grab data from the form in a secure way (prevent code injection)
    $amountToConvert = htmlspecialchars($_POST["amount"]);

    echo "This is what the user submitted";

}