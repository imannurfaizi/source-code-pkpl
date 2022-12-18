<?php
include 'function.php';

$id = $_GET["id"];

$row = view("SELECT * FROM cabang WHERE id_cabang = $id")[0];

if (isset($_POST["submit"])) {
  if (updateCabang($_POST, $id) > 0) {
    echo "<script>alert('Data Berhasil diubah. Terima Kasih!');document.location='index.php?page=cabang'</script>";
  } else {
    echo "<script>alert('Data Gagal diubah!');</script>";
  }
}
?>

<div class="none">
  <h1>Cabang BARBERSHOP</h1>

  <form action="" method="POST" id="form-daftar">
    
    <div class="input">
      <label for="nm_cabang">Cabang</label>
      <input type="text" id="nm_cabang" name="nm_cabang" placeholder="Masukkan Cabang.." require value="<?php echo $row["nm_cabang"] ?>" />
    </div>

    <div class="input">
      <label for="jam_op">Jam Operasional</label>
      <input type="text" id="jam_op" name="jam_op" placeholder="Masukkan Jam Operasional.." require value="<?php echo $row["jam_op"] ?>" />
    </div>

    <div class="input">
      <label for="no_telp">No Telepon</label>
      <input type="text" id="no_telp" name="no_telp" placeholder="Masukkan No Telepon.." require value="<?php echo $row["no_telp"] ?>" />
    </div>

    <div class="input">
      <label for="alamat">Alamat</label>
      <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat.." require value="<?php echo $row["alamat"] ?>" />
    </div>

    <button type="submit" name="submit">Ubah Data</button>
  </form>
</div>