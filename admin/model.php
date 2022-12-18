<?php
     include "function.php";
     $model = view("SELECT * FROM model")
?>
<div class="none">
     <h1 >Model Potongan Rambut</h1>

     <a href="index.php?page=addModel">Tambah Data</a>
     
     <table border="1" cellpadding="10" cellspacing="0">
          <tr>
               <th>No.</th>
               <th>Nama</th>
               <th>Tarif</th>
               <th>Gambar</th>
               <th>Aksi</th>
          </tr>
          <?php $i = 1; ?>  
          <?php foreach($model as $row) : ?>
          <tr>
               <td><?php echo $i; ?></td>
               <td><?php echo $row["nama_model"]; ?></td>
               <td><?php echo $row["tarif"]; ?></td>
               <td><img src="../img/<?php echo $row["img_model"]; ?>" height="100"></td>
               <td>
                    <a href="index.php?page=updateModel&id=<?= $row["id_model"];?>">Ubah</a> || <a href="index.php?page=deleteModel&id=<?= $row["id_model"];?>">Hapus</a> 
               </td>
          </tr>
          <?php $i++; ?>  
          <?php endforeach; ?>
     </table>
</div>