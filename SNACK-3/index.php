<?php 
    

    function getArr() {
        $letter = ['a','b','c','d','e'];
        $number = [1,2,3,4,5];
        return [$letter, $number];
      }

    $newArray = getArr();
    var_dump($newArray);  

?>