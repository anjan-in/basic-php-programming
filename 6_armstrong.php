<html>
<body>
    <h1>Php program to print Armstrong number.</h1><br>
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

        $total = 0;
        $x = $number;

        while ($x != 0)
        {
            $rem = $x % 10;
            $total = $total + $rem * $rem * $rem;
            $x = $x / 10;
        }
        if ($number == $total)
        {
            echo "Yes, ".$number." it is an Armstrong number";
        }
        else
        {
            echo "No, ".$number." it is not an Armstrong number";
        }
    }

?>