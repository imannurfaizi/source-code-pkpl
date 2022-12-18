<?php
include "function.php";

$id = $_GET["id"];
$query = "DELETE FROM transaksi WHERE id_transaksi = $id";

if(delete($query) > 0) { 
     echo "<script>alert('Data Berhasil dihapus. Terima Kasih!');document.location='index.php?page=transaksi'</script>";
} else {
     echo "<script>alert('Data Gagal dihapus!');</script>";
}
?>