<?php
    
   function getNewnumbersarray($array, $a, $b){
    $newArray = [];

        if($a < $b && $b <= count($array)){
            for($i = $a - 1; $i < $b; $i++){
                $newArray[] = $array[$i];
            }
        }
        return $newArray;
   }

   $originalArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $a = 2;
    $b = 6;
    $newArray = getNewNumbersArray($originalArray, $a, $b);
    var_dump($newArray);

?>