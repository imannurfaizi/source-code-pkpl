<?php
include "function.php";

$id = $_GET["id"];
$query = "DELETE FROM model WHERE id_model = $id";

if(delete($query) > 0) { 
     echo "<script>alert('Data Berhasil dihapus. Terima Kasih!');document.location='index.php?page=model'</script>";
} else {
     echo "<script>alert('Data Gagal dihapus!');</script>";
}
?>