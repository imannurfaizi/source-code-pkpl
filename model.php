<?php
     include "admin/function.php";
     $model = view("SELECT * FROM model")
?>

<hr>
<?php foreach($model as $row) : ?>
<div class="item">
    <div class="thumb">
        <a href=""><img src="img/<?php echo $row["img_model"]; ?>" width="200" alt="<?php echo $row["nama_model"]; ?>"></a>
    </div>
    <div class="inf">
        <div class="headline">
            <a href=""><?php echo $row["nama_model"]; ?></a>
        </div>
        <div class="cont">
            <p>Tarif : <?php echo $row["tarif"]; ?></p>
        </div>
    </div>
</div>
<?php endforeach; ?>