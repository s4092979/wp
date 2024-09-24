<?php
    $array1 = array(1,2,3,4,5,6,7,8,9);
    print "$array1[1]<br>";
    print "$array1[3]<br>";
    print "$array1[5]<br>";
    print "$array1[8]<br>";
    print "$array1[9]<br>";

    $array2 = array("Allison" => 20, "Roxi" => 37, "Pippin" => 43);
    print "<p>Pippin's age is $array2[Pippin]</p>";

    foreach ($array2 as $name => $age) {
        print "$name's age is $age<br>";
    }