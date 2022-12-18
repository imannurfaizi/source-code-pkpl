<div class="content cnt">
     <div class="head-artikel">
          <h4>Cabang</h4>
     </div>
     <?php
     include "admin/function.php";
     $model = view("SELECT * FROM cabang")
     ?>

     <hr>
     <?php foreach ($model as $row) : ?>
          <div class="item">
               <div class="inf">
                    <div class="headline">
                         <a href="">BARBERSHOP <?php echo $row["nm_cabang"]; ?></a>
                    </div>
                    <div class="cont">
                         <p>Jam Operasional : <?php echo $row["jam_op"]; ?></p>
                    </div>
                    <div class="cont">
                         <p>No Telepon : <?php echo $row["no_telp"]; ?></p>
                    </div>
                    <div class="cont">
                         <p>Alamat : <?php echo $row["alamat"]; ?></p>
                    </div>
               </div>
          </div>
     <?php endforeach; ?>
</div>