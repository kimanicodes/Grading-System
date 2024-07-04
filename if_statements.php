<form method="post">
    Enter your marks: <input type="number" name="marks" required><br><br>
    <input type="submit" value="Submit">
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST["marks"];
    
    echo "Your grade is: ";

    if ($marks >= 80) {
        echo "A";
    } 
    elseif ($marks >= 70) {
        echo "B";
    } 
    elseif ($marks >= 60) {
        echo "C";
    } 
    elseif ($marks >= 50) {
        echo "D";
    } 
    elseif ($marks >= 40) {
        echo "E";
    } 
    else {
        echo "FAIL";
    }

}
?>