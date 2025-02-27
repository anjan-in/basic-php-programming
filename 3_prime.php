<html>
<body>
    <h1>Php program to check a number is prime or composite.</h1><br>
    <form method="post">
        Enter a number:
        <input type="text" name="input">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if ($_POST)
    {
        $input = $_POST['input'];

        for ($i=2; $i <= $input - 1; $i++){
            if ($input % $i == 0){
                $value = true;
            }
        }

        if (isset($value) && $value){
            echo 'The Number '.$input.' is composite, i.e it is not a prime number';
        }
        else{
            echo 'The Number '.$input.' is prime';
        }
    }


?>