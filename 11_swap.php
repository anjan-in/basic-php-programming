<html>
<body>
    <h1>Php program to Swap two numbers.</h1><br>
    <form method="post">
        Enter a 1st number:
        <input type="text" name="num1">
        <br>
        Enter a 2nd number:
        <input type="text" name="num2">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if ($_POST){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "Before Swapping: <br>";
        echo "1st number = ".$num1;
        echo "<br>";
        echo "2nd number = ".$num2;
        echo "<br><br>";

        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

        echo "After Swapping: <br>";
        echo "1st number = ".$num1;
        echo "<br>";
        echo "2nd number = ".$num2;
    }

?>