<html>
<body>
    <h1>Php program to find fiboancci series.</h1><br>
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

        echo "<h2>Fiboancci Series: </h2>";

        // Recursive function for fiboancci series
        function series($num){
            if ($num == 0){
                return 0;
            }
            else if ($num == 1){
                return 1;
            }
            else {
                return (series($num - 1) + series($num - 2));
            }
        }
        // call function
        for ($i=0; $i < $num; $i++){
            echo series($i);
            echo "&nbsp;";
        }
    }

?>