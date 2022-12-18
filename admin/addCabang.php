<?php
include 'function.php';

if (isset($_POST["submit"])) {
  if (addCabang($_POST) > 0) {
    echo "<script>alert('Data Berhasil ditambahkan. Terima Kasih!');document.location='index.php?page=cabang'</script>";
  } else {
    echo "<script>alert('Data Gagal ditambahkan!');</script>";
  }
}
?>

<div class="none">
  <h1>Cabang BARBERSHOP</h1>

  <form action="" method="POST" id="form-daftar">
    
    <div class="input">
      <label for="nm_cabang">Cabang</label>
      <input type="text" id="nm_cabang" name="nm_cabang" placeholder="Masukkan Cabang.." require />
    </div>

    <div class="input">
      <label for="jam_op">Jam Operasional</label>
      <input type="text" id="jam_op" name="jam_op" placeholder="Masukkan Jam Operasional.." require />
    </div>

    <div class="input">
      <label for="no_telp">No Telepon</label>
      <input type="text" id="no_telp" name="no_telp" placeholder="Masukkan No Telepon.." require />
    </div>

    <div class="input">
      <label for="alamat">Alamat</label>
      <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat.." require />
    </div>

    <button type="submit" name="submit">Tambahkan</button>
  </form>
</div>