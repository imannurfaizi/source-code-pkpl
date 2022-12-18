<?php
include "function.php";

$id = $_GET["id"];
$query = "DELETE FROM cabang WHERE id_cabang = $id";

if(delete($query) > 0) { 
     echo "<script>alert('Data Berhasil dihapus. Terima Kasih!');document.location='index.php?page=cabang'</script>";
} else {
     echo "<script>alert('Data Gagal dihapus!');document.location='index.php?page=cabang'</script>";
}
?>