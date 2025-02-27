<html>
<body>
    <h1>Php program to check a number is even or odd.</h1><br>
    <form method="post">
        Enter a number:
        <input type="text" name="number">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if ($_POST){
        $number = $_POST['number'];

        // divide entered number by 2
        // if the remainder is 0 then the number is even otherwise the number is odd

        if (($number % 2) == 0){
            echo "$number is an even number";
        }
        else {
            echo "$number is an odd number";
        }
    }

?>