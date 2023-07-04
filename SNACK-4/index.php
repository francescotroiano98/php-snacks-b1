<?php
    
   function getNewnumbersarray($array, $minIndex, $maxIndex){
    $newArray = [];

        if($minIndex < $maxIndex && $maxIndex <= count($array)){
            for($i = $minIndex - 1; $i < $maxIndex; $i++){
                $newArray[] = $array[$i];
            }
        }
        return $newArray;
   }

   $originalArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $minIndex = 2;
    $maxIndex = 6;
    $newArray = getNewNumbersArray($originalArray, $minIndex, $maxIndex);
    var_dump($newArray);

?>