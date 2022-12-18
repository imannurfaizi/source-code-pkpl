<?php
include 'function.php';

if (isset($_POST["submit"])){
        if (addTransaksi($_POST) > 0) {
          echo "<script>alert('Data Berhasil ditambahkan. Terima Kasih!');document.location='index.php?page=transaksi'</script>";
        } else {
          echo "<script>alert('Data Gagal ditambahkan!');</script>";
        }
    }
?>

<div class="none">
  <h1 >Catat Transaksi</h1>

  <form action="" method="POST" id="form-daftar">
    <div class="input">
      <label for="tgl">Tanggal</label>
      <input type="date" id="tgl" name="tgl" require/>
    </div>

    <div class="input">
      <label for="id_model">Model</label>
      <select class="ss" id="id_model" name="id_model" placeholder="Masukkan Model.." require>
        <option value="">-Pilih</option>
        <?php
        $sql_model = mysqli_query($koneksi, "SELECT * FROM model");
        while($data_model = mysqli_fetch_assoc($sql_model)){
          echo '<option value="'.$data_model['id_model'].'">'.$data_model['nama_model'].'</option>';
        }
        ?>
      </select>
    </div>

    <div class="input">
      <label for="id_cabang">Cabang</label>
      <select class="ss" id="id_cabang" name="id_cabang" placeholder="Masukkan Cabang.." require>
        <option value="">-Pilih</option>
        <?php
        $sql_cabang = mysqli_query($koneksi, "SELECT * FROM cabang");
        while($data_cabang = mysqli_fetch_assoc($sql_cabang)){
          echo '<option value="'.$data_cabang['id_cabang'].'">'.$data_cabang['nm_cabang'].'</option>';
        }
        ?>
      </select>
    </div>

    <button type="submit" name="submit">Tambahkan</button>
  </form>
</div>