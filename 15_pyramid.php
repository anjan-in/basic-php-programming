<html>
<body>
    <h1>Php program to print a pyramid.</h1><br>
    <form method="post">
        Enter the size of row of pyramid:
        <input type="text" name="size">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

    if ($_POST){
        $size = $_POST['size'];

        /*
            1
            2 2
            3 3 3
            4 4 4 4
        */

        $k = 1;
        for ($i=1; $i <= $size; $i++)
        {
            for ($j=1; $j <= $i; $j++)
            {
                echo $i." ";
                $k++;
            }
            echo "<br>";
        }

        echo "<br>";

        /*
            54321
            4321
            321
            21
            1
        */
        
        for($i=0; $i <= $size; $i++)
        {
            for($j=$size-$i; $j>=1; $j--){  
                echo $j." ";
            }
            echo "<br>";
        }

        echo "<br>";

        /*
            *
            * *
            * * *
            * * * *
            * * * * *
            * * * *
            * * *
            * *
            *
        */

        for ($i=1; $i <= $size; $i++)
        {
            for ($j=1; $j <= $i; $j++){
                echo "* ";
            }
            echo "<br>";
        }

        for ($i=$size-1; $i >= 1; $i--)
        {
            for ($j=1; $j <= $i; $j++){
                echo "* ";
            }
            echo "<br>";
        }

        echo "<br>";

        /*
            AAAA
            BBB
            CC
            D
        */

        $k=1;
        foreach(range('A','Z') as $char)
        {
            for ($i=$size; $i >= $k; $i--)
            {
                echo $char." ";
            }
            echo "<br>";
            $k=$k+1;
        }
    }

?>