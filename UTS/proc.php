<?php
include "koneksi.php"; 

if (isset($_POST['proses']) and $_POST['proses'] == 'SIMPAN'){
    $id = $_POST['id'];
    $nama = $_POST['nama']; 
    $item_grp_id = $_POST['item_grp_id'];
    $satuan_id = $_POST['satuan_id']; 
    $hpp = $_POST['hpp'];
	$suplayer = $_POST['suplayer'];

    $sql = "INSERT INTO item (id, nama, item_grp_id, satuan_id, hpp, suplayer)
            VALUES ('$id', '$nama', '$item_grp_id', '$satuan_id', '$hpp', '$suplayer')";
    if (!$res = $koneksi->query($sql))
        echo $sql;
    else 
        header("Location: laporan.php");
}

if(isset($_POST['proses']) && $_POST['proses']=='PERBAHARUI'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$item_grp_id = $_POST['item_grp_id'];
	$satuan_id = $_POST['satuan_id'];
	$hpp = $_POST['hpp'];
	$suplayer = $_POST['suplayer'];
	

	$sql = "UPDATE item
			SET nama='$nama', item_grp_id='$item_grp_id',
			satuan_id='$satuan_id',hpp='$hpp', suplayer='$suplayer'
		WHERE id='$id'";
	if(!$res = $koneksi->query($sql))
		echo $sql;
	else
		header("Location: laporan.php");
}

if(isset($_POST['proses']) && $_POST['proses']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$sql = "DELETE FROM item   
			WHERE id='$id'"; 
	if(!$res = $koneksi->query($sql))
		echo $sql;
	else
		header("Location: laporan.php");
}

?>