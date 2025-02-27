<html>
<body>
    <h1>Php program to Reverse a number.</h1><br>
    <form method="post">
        Enter a number:
        <input type="text" name="num">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if ($_POST){

        $num = $_POST['num'];
        $revnum = 0;
        echo "Original number is $num";
        echo "<br><br>";

        while ($num > 1){
            $rem = $num % 10;
            $revnum = ($revnum * 10) + $rem;
            $num = ($num / 10);
        }
        echo "Reverse number is $revnum";
    }

?>