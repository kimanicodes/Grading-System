<form method="post">
    Enter your marks: <input type="number" name="marks" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST["marks"];
    switch (true) {
        case ($marks >= 80):
            echo "Your grade is A";
            break;
        case ($marks >= 70):
            echo "Your grade is B";
            break;
        case ($marks >= 60):
            echo "Your grade is C";
            break;
        case ($marks >= 50):
            echo "Your grade is D";
            break;
        case ($marks >= 40):
            echo "Your grade is E";
            break;
        default:
            echo "FAIL";
            break;
    }
}
?>