<html>
<body>
    <h1>Php program to find Area of Rectangle.</h1><br>
    <form method="post">
        Enter Width:
        <input type="text" name="width">
        <br>
        Enter Length:
        <input type="text" name="length">
        <br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $width = $_POST['width'];
        $length = $_POST['length'];

        echo "Width = $width<br>";
        echo "Length = $length<br>";
        echo "<br>";

        $perimeter = 2 * ($width + $length);
        $area = ($width * $length);
        
        echo "Perimeter = 2 * (width + length)<br>";
        echo "Perimeter of Rectangle is ".$perimeter;
        echo "<br><br>";
        echo "Area = (width x length)<br>";
        echo "Area of Rectangle is ".$area;
    }

?>