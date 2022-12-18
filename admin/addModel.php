<?php
include 'function.php';

if (isset($_POST["submit"])){
        if (addModel($_POST) > 0) {
          echo "<script>alert('Data Berhasil ditambahkan. Terima Kasih!');document.location='index.php?page=model'</script>";
        } else {
          echo "<script>alert('Data Gagal ditambahkan!');</script>";
        }
    }
?>

<div class="none">
  <h1 >Model Potongan Rambut</h1>

  <form action="" method="POST" id="form-daftar">
    <div class="input">
      <label for="nama">Nama Model Potongan Rambut</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan Nama.." require/>
    </div>

    <div class="input">
      <label for="tarif">Tarif</label>
      <input type="number" id="tarif" name="tarif" placeholder="Masukkan Tarif.." require/>
    </div>

    <div class="input">
      <label for="gambar">Gambar</label>
      <input type="text" id="gambar" name="gambar" placeholder="Masukkan Gambar.." require/>
    </div>

    <button type="submit" name="submit">Tambahkan</button>
  </form>
</div>