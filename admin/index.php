

<!DOCTYPE html>
<html lang="en">

<head>
     <title>ADMIN BARBERSHOP</title>
     <link rel="stylesheet" href="../css/style.css">
</head>

<body>
     <div class="container">
          <header>
               <h1>BARBERSHOP</h1>
               <h3>Tempat Cukur Rambut</h3>
               <nav>
                    <h3>Halaman Admin</h3>
                    <ul>
                         <li><a href="../index.php?page=home">HOME</a></li>
                         <li><a href="../index.php?page=cabang">CABANG</a></li>
                         <li><a href="../index.php">LOGOUT</a></li>
                    </ul>
               </nav>
          </header>
          <main id="main">
               <article>
                    <?php
                    if (isset($_GET['page'])) {
                         $page = $_GET['page'];

                         switch ($page) {
                              case 'dashboard':
                                   include "dashboard.php";
                                   break;
                              case 'model':
                                   include "model.php";
                                   break;
                              case 'addModel':
                                   include "addModel.php";
                                   break;
                              case 'updateModel':
                                   include "updateModel.php";
                                   break;
                              case 'deleteModel':
                                   include "deleteModel.php";
                                   break;
                              case 'cabang':
                                   include "cabang.php";
                                   break;
                              case 'addCabang':
                                   include "addCabang.php";
                                   break;
                              case 'updateCabang':
                                   include "updateCabang.php";
                                   break;
                              case 'deleteCabang':
                                   include "deleteCabang.php";
                                   break;
                              case 'transaksi':
                                   include "transaksi.php";
                                   break;
                              case 'addTransaksi':
                                   include "addTransaksi.php";
                                   break;
                              case 'updateTransaksi':
                                   include "updateTransaksi.php";
                                   break;
                              case 'deleteTransaksi':
                                   include "deleteTransaksi.php";
                                   break;
                              
                              default:
                                   echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                   break;
                         }
                    } else {
                         include "dashboard.php";
                    }
                    ?>
               </article>
               <aside>
                    <div style="margin: 24px 0;">
                         <ul class="none">
                              <li><a href="index.php?page=dashboard" class="none title">Dashboard</a></li>
                              <li><a href="index.php?page=model" class="none title">Model Potongan Rambut</a></li>
                              <li><a href="index.php?page=cabang" class="none title">Cabang</a></li>
                              <li><a href="index.php?page=transaksi"" class="none title">Catat Transaksi</a></li>
                         </ul>
                    </div>
               </aside>
          </main>
          <footer>
               <p>Copyright © 2022 by BARBERSHOP</p>
          </footer>
     </div>
</body>

</html>