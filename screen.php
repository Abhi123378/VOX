<?php
    $sum = 0;
    $price = 200;
    $seatarr = array();
    if(isset($_POST['submit']))
    {
        echo "You have selected the following seats";
        foreach($_POST['seat'] as $s)
        {
            echo "<br>" . $s;
            array_push($seatarr, $s);
            $count = sizeof($seatarr);
        }
        $sum = ($count * $price);
        echo "<br>";
        echo "The bill amount you have to pay: ";
        echo $sum;
    }
?>