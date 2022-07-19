<!DOCTYPE html>
<html>
<head>
    <!--load file CSS Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <?php
    $angka1=null;
    $angka2=null;
    if (isset($_GET['angka1'])) {
        $angka1=$_GET['angka1'];
        $angka2=$_GET['angka2'];
        $hasil=0;
        $operasi=$_GET['operasi'];
        switch ($operasi) {
            case '+':
                $hasil = $angka1+$angka2;
                break;
            case '-':
                $hasil = $angka1-$angka2;
                break;
            case '*':
                $hasil = $angka1*$angka2;
                break;
            case '/':
                $hasil = $angka1/$angka2;
                break;
            case '%':
                $hasil = $angka1%$angka2;
                break;
        }  
    }
    ?>
    <div class="rows">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <h2>Kalkulator</h2>
        <h4>Input angka</h4> 
        <div class="form-group">
            <label></label>  
            <input type="text" name="angka1" class="form-control" value="<?php echo $angka1; ?>" required>
        </div> 
        <div class="form-group">
            <label></label>
            <input type="text" name="angka2" class="form-control" value="<?php echo $angka2; ?>" required>
        </div>
        <div>
            <select class="form-control" name="operasi">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
                <option value="%">Mod</option>
            </select>
        </div>
        <button type="submit" class="btn-primary">=</button>
        </form>
        <br>
        <?php
        if (isset($_GET['angka1'])){
            echo "<h1>$hasil</h2>";
        }
        ?>
    </div>
</div>
</body>
</html> 
