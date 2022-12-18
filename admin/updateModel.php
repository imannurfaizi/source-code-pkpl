<?php
include 'function.php';

$id = $_GET["id"];

$row = view("SELECT * FROM model WHERE id_model = $id")[0];

if (isset($_POST["submit"])){
        if (updateModel($_POST, $id) > 0) {
          echo "<script>alert('Data Berhasil diubah. Terima Kasih!');document.location='index.php?page=model'</script>";
        } else {
          echo "<script>alert('Data Gagal diubah!');</script>";
        }
    }
?>

<div class="none">
  <h1 >Model Potongan Rambut</h1>

  <form action="" method="POST" id="form-daftar">
    <div class="input">
      <label for="nama">Nama Model Potongan Rambut</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan Nama.." require value="<?php echo $row["nama_model"]?>" />
    </div>

    <div class="input">
      <label for="tarif">Tarif</label>
      <input type="number" id="tarif" name="tarif" placeholder="Masukkan Tarif.." require value="<?php echo $row["tarif"]?>"/>
    </div>

    <div class="input">
      <label for="gambar">Gambar</label>
      <input type="text" id="gambar" name="gambar" placeholder="Masukkan Gambar.." require value="<?php echo $row["img_model"]?>"/>
    </div>

    <button type="submit" name="submit">Ubah Data</button>
  </form>
</div>