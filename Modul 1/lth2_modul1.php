<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>
<?php
function nilai($angka){
    if ($angka >=95 and $angka <=100){$nilai = "A";}
    else if ($angka >=90){
        $nilai = "A-";
    }
    else if ($angka >=85){
        $nilai = "B+";
    }
    else if ($angka >=80){
        $nilai = "B";
    }
    else if ($angka >=75){
        $nilai = "B-";
    }
    else if ($angka >=70){
        $nilai = "C+";
    }
    else if ($angka >=65){
        $nilai = "C";
    }
    else if ($angka >=60){
        $nilai = "C-";
    }
    else if ($angka >=50){
        $nilai = "D";
    }
    else if ($angka >=0 and $angka <50){
        $nilai = "E";
    }
    return $nilai;
}
?>
    <p>Nilai Angka
    <input type="number" name="nilai">
    <input type="submit" name="btn" value="Konversi">
 
    <p>Nilai Huruf
    <input type="text" value="<?php echo $nilai ; ?>" required> 
<?php
    if (isset($_GEt['btn'])){
        echo "Nilai Huruf : ".$_GET['nilai']."(" .nilai ($_GET['nilai']).")";
    }
?>  
</body>
</html>