<?php 

    function arrayOfString($strings){
        $len = count($strings);

        for($i=0; $i<$len; $i++){
            printf("Original String: %s, ",$strings[$i]);

            $str = $strings[$i];
            $len2 = strlen($str);
            $count = 0;
            
            for($j=0; $j<$len2; $j++){
                if($str[$j] == 'a' || $str[$j] == 'A' || $str[$j] == 'e' || $str[$j] == 'E' || $str[$j] == 'i' || $str[$j] == 'I' || $str[$j] == 'o' || $str[$j] == 'O' || $str[$j] == 'u' || $str[$j] == 'U'){
                    $count++;
                }
            }

            printf("Vowel Count: %d, ",$count);

            printf("Reversed String: %s\n",strrev($strings[$i]));
        }
    }

    $strings = ["Hello", "World", "PHP", "Programming"];

    arrayOfString($strings);


?>