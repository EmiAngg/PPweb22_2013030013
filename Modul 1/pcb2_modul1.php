<html>
<head>
<title>List / Menu Pilihan</title>
</head>
<body>
<form id="forml" name="forml" method="post" action="">
    <select name="pilihan[]" size="4" multiple="multiple" id="pilihan[]">
        <?php for ($i=1; $i < 5; $i++) { ?> <option value="<?php echo $i; ?>">
            List Menu <?php echo $i; ?>
        </option><?php } ?>
    </select> 
    <br>
    <input type="submit" name="button" id="button" value="submit">
    <hr/>
    <?php 
    if (is_array($_POST["pilihan"])) {
        foreach ($_POST["pilihan"] as $value) {
            echo $value ."<br/>";
        }
    }else{
        if (isset($_POST["button"])){
            echo "maaf!, anda harus";
            echo "memilih salah satu item";
        }
    }
    ?>

</form>
</body>
</html> 