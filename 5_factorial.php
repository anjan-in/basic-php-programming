<html>
<body>
    <h1>Php program to print factorial of a number.</h1><br>
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

        $fact = 1;

        for ($x=$number; $x >= 1; $x--)
        {
            $fact = $fact * $x;
        }
        echo "Factorial of ".$number." is ".$fact;
    }

?>