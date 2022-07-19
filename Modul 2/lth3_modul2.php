<?php
    class Konversi{
        public function volume_bola($jari){
            $volume = (4/3*$this->phi)*($jari*$jari*$jari);
            return $volume;
        }
        function luas_bola($jari){ 
            $luas = (4*$this->phi)*($jari*$jari); 
            return $luas;  
        }
    } 
    $obj = new Rumus(); 
    $volume = $obj->volume_bola(21); 
    $luas = $obj->luas_bola(21); 

    echo "Menghitung volume dan luas bola<br>";
    echo "Volume bola = ".$volume."<br>";
    echo "Luas bola = ".$luas;       
?> 
