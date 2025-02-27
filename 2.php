<?php

    $marks = array(10,615,710,7);
    $search_value = "100";
    //find the element 10 in the array
    //by default the mmode parameter is set to false

    if (in_array($search_value, $marks))
    {
        //in_array() will return true and the strictness mode is set to false

        echo "The element ".$search_value. " exists in the array.";
    }
    else
    {
        echo "The element ".$search_value." does not exists in the array";
    }

?>