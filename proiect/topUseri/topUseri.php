
<?php global $mysqli;
include '../chestionare/database.php';?>
<?php


$query = "SELECT * FROM `user` order by teste_trecute DESC";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;



?>
<?php
session_start();
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
    $conectat=0;
}
else $conectat=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Utilizatori</title>
    <link rel="stylesheet" href="../home/index.css">
    <script src="https://kit.fontawesome.com/0070301605.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <nav>
        <a href="../home/index.php"><img src="../images/logo2.png" alt="Logo"></a>
        <div class="header-links">
            <ul>
                <li><a href="../login+register/register.html"> Inregistrare </a></li>
                <li>
                    <?php if ($conectat == 0): ?>
                        <a href="../login+register/login.php">Conectare</a>
                    <?php else: ?>
                        <a href="../login+register/logout.php">Deconectare</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="meniu">
    <nav>
        <div class="meniu-links">
            <ul>
                <li><a href="../legislatie/index.php">Legislatie</a></li>
                <li><a href="../indicatoare/indicatoare-index/index.php">Indicatoare</a></li>
                <li>
                    <div class="dropdown">
                        <a href="">Categorii</a>
                        <i class="fa fa-caret-down"></i>
                        <div class="dropdown-content">
                            <a href="../categorii/categoriaA.php">Categoria A</a>
                            <a href="../categorii/categoriaB.php">Categoria B</a>
                        </div>
                    </div>
                </li>
                <li><a href="../chestionare/index.php">Chestionare</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="titlu-topScoliAuto">
    <h1>TOP utilizatori</h1>
    <h3>In functie de rata de promovabilitate la chestionare </h3>
</div>
<h1 class="judet">TOP</h1>
<table>
    <tr>
        <th>Utilizator</th>
        <th>Chestionare trecute</th>
        <th>Chestionare picate</th>
    </tr>
        <?php while($row=$results->fetch_assoc()):?>
        <tr>
            <td><?php echo $row['username']; ?> </td>
            <td><?php echo $row['teste_trecute']; ?></td>
            <td><?php echo $row['teste_picate']; ?></td>
        </tr>
        <?php endwhile; ?>

</table>

<footer class="footer">
    <h4>Despre noi</h4>
    <p>RoT (Romanian Traffic Signs Tutor) este o aplicatie web utila pentru cei ce vor sa invete eficient pentru examenul auto.<br>Aici gasesti tot ce ai nevoie pentru a te pregati
        si pentru a lua examenul din prima.
    </p>
    <div class="footer-links">
        <ul>
            <li><a href="../termeni/termeni.php">Termeni</a></li>
            <li>Link-uri utile</li>
            <li><a href="../contact/contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="useful-links">
        <ul>
            <li><a href="../intrebariFrecvente/intrebariFrecvente.php">Intrebari frecvente</a></li>
            <li><a href="../topScoliAuto/topScoliAuto.php">Top scoli auto</a></li>
            <li><a href="../topUseri/topUseri.php">Top utilizatori</a></li>
            <li><a href="../home/index.php">Acasa</a></li>
        </ul>
    </div>
    <div class="feedback">
        <div class="title">
            <h1>Parerea ta conteaza </h1>
        </div>
        <div class="star-rating">
            <input type="radio" name="stars" id="star-a" value="5"/>
            <label for="star-a"></label>

            <input type="radio" name="stars" id="star-b" value="4"/>
            <label for="star-b"></label>

            <input type="radio" name="stars" id="star-c" value="3"/>
            <label for="star-c"></label>

            <input type="radio" name="stars" id="star-d" value="2"/>
            <label for="star-d"></label>

            <input type="radio" name="stars" id="star-e" value="1"/>
            <label for="star-e"></label>
        </div>
    </div>
    <div class="icons">
        <a href="" target="_blank"><i class="fa fa-facebook" ></i></a>
        <i class="fa fa-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
    </div>
</footer>
</body>
</html>