<?php
     include "function.php";
     $model = view("SELECT * FROM cabang")
?>
<div class="none">
     <h1 >Cabang BARBERSHOP</h1>

     <a href="index.php?page=addCabang">Tambah Data</a>
     
     <table border="1" cellpadding="10" cellspacing="0">
          <tr>
               <th>No.</th>
               <th>Cabang</th>
               <th>Jam Operasional</th>
               <th>No Telepon</th>
               <th>Alamat</th>
               <th>Aksi</th>
          </tr>
          <?php $i = 1; ?>  
          <?php foreach($model as $row) : ?>
          <tr>
               <td><?php echo $i; ?></td>
               <td>BARBERSHOP <?php echo $row["nm_cabang"]; ?></td>
               <td><?php echo $row["jam_op"]; ?></td>
               <td><?php echo $row["no_telp"]; ?></td>
               <td><?php echo $row["alamat"]; ?></td>
               <td>
                    <a href="index.php?page=updateCabang&id=<?= $row["id_cabang"];?>">Ubah</a> || <a href="index.php?page=deleteCabang&id=<?= $row["id_cabang"];?>">Hapus</a> 
               </td>
          </tr>
          <?php $i++; ?>  
          <?php endforeach; ?>
     </table>
</div>