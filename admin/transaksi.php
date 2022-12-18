<?php
     include "function.php";
     $model = view("SELECT * FROM transaksi 
                    INNER JOIN cabang ON transaksi.id_cabang = cabang.id_cabang
                    INNER JOIN model ON transaksi.id_model = model.id_model");
?>
<div class="none">
     <h1 >Catat Transaksi</h1>

     <a href="index.php?page=addTransaksi">Tambah Data</a>
     
     <table border="1" cellpadding="10" cellspacing="0">
          <tr>
               <th>No.</th>
               <th>Tanggal</th>
               <th>Model Rambut</th>
               <th>Tarif</th>
               <th>Cabang</th>
               <th>Aksi</th>
          </tr>
          <?php $i = 1; ?>  
          <?php foreach($model as $row) : ?>
          <tr>
               <td><?php echo $i; ?></td>
               <td><?php echo $row["tgl"]; ?></td>
               <td><?php echo $row["nama_model"]; ?></td>
               <td><?php echo $row["tarif"]; ?></td>
               <td>BARBERSHOP <?php echo $row["nm_cabang"]; ?></td>
               <td>
                    <a href="index.php?page=deleteTransaksi&id=<?= $row["id_transaksi"];?>">Hapus</a> 
               </td>
          </tr>
          <?php $i++; ?>  
          <?php endforeach; ?>
     </table>
</div>