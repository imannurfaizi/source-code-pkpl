<!DOCTYPE html>
<html lang="en">
<head>
    <title>BARBERSHOP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <header>
        <h1>BARBERSHOP</h1>
        <h3>Tempat Cukur Rambut</h3>
        <nav>
            <h3>BARBERSHOP</h3>
            <ul>
                <li><a href="index.php?page=home">HOME</a></li>
                <li><a href="index.php?page=cabang">CABANG</a></li>
                <li><a href="login.php">ADMIN</a></li>
            </ul>
        </nav>
    </header>
    <main id="main">
        <article>
            <?php 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
        
                switch ($page) {
                    case 'home':
                        include "home.php";
                        break;
                    case 'cabang':
                        include "cabang.php";
                        break;
                    case 'admin':
                        include "admin.php";
                        break;		
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }else{
                include "home.php";
            }
            ?>
        </article>
    </main>
    <footer>
        <p>Copyright © 2022 by BARBERSHOP</p> 
    </footer>
    </div>
</body>
</html>