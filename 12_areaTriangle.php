<html>
<body>
    <h1>Php program to find Area of Triangle.</h1><br>
    <form method="post">
        Enter Base:
        <input type="text" name="base">
        <br>
        Enter Height:
        <input type="text" name="height">
        <br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $base = $_POST['base'];
        $height = $_POST['height'];

        echo "Base = $base<br>";
        echo "Height = $height<br>";
        $area = ($base * $height) / 2;
        echo "Area of Triangle is ".$area;
    }

?>