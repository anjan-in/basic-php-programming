<html>
<body>
    <h1>Php program to print table of a number.</h1><br>
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

        for ($i=1; $i <= 10; $i++)
        {
            echo $number ." X ". $i ." = ". $i*$number;
            echo "<br>";
        }
        
    }

?>