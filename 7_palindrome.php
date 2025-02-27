<html>
<body>
    <h1>Php program to find the number is palindrome or not.</h1><br>
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

        $reverse = strrev($num);

        if ($num == $reverse){
            echo "The number $num is Palindrome.";
        }
        else{
            echo "The number $num is not a Palindrome";
        }
    }

?>