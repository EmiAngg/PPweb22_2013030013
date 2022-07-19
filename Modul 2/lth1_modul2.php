<?php
    class Rumus{
        public function volume_balok($panjang,$lebar,$tinggi){
            $volume = $panjang*$lebar*$tinggi;
            return $volume;
        }
        public function luas_balok($panjang,$lebar,$tinggi){
            $luas = 2 * ($panjang*$lebar + $panjang*$tinggi + $lebar*$tinggi); 
            return $luas;  
        }
    } 
    $obj = new Rumus(); 
    $volume = $obj->volume_balok(20,10,3);  
    $luas = $obj->luas_balok(12,9,6);  

    echo "Menghitung volume dan luas balok<br>";
    echo "Volume balok = ".$volume."<br>";
    echo "Luas balok = ".$luas;     
?> 
