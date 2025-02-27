<html>
<body>
    <h1>Php program to Reverse a String.</h1><br>
    <form method="post">
        Enter a string:
        <input type="text" name="string">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if ($_POST){

        $string = $_POST['string'];
        echo "Original String is ".$string;
        echo "<br><br>";

        $length = strlen($string);
        echo "Reverse String is ";

        for ($i=($length - 1); $i >= 0; $i--)
        {
            echo $string[$i];
        }
    }

?>