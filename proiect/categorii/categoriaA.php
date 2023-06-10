<?php
session_start();
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
    $conectat=0;
}
else $conectat=1;
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoT</title>
    <link rel="stylesheet" href="../home/index.css">
    <link rel="stylesheet" href="categorii_style.css">
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
                            <a href="categoriaA.php">Categoria A</a>
                            <a href="categoriaB.php">Categoria B</a>
                        </div>
                    </div>
                </li>
                <li><a href="../chestionare/index.php">Chestionare</a></li>
            </ul>
        </div>
    </nav>
</div>
    <div class="categorii--detalii">
        <h1>Permis de conducere categoria A (A,A1,A2,AM)</h1>
        <ul><h2>Categoria A</h2>
        <li>motociclete cu sau fara atas si tricicluri cu motor cu puterea de peste 15kW</li>
        <li>varsta minima 20 de ani impliniti, daca persoana are o experienta de cel putin 2 ani de conducere a motocicletelor din categoria A2, sau 24 de ani impliniti pentru motocicletele din categoria A</li>
        </ul>
        <ul><h2>Categoria A2</h2>
        <li>motociclete  cu puturea maxima de 35kW, cu un raport putere/greutate care nu depaseste 0.2 kW/kg si care nu sunt derivate dintr-un vehicul avand mai mult de dublul puterii sale</li>
        <li>varsta minima 18 ani impliniti</li>
        </ul>
        <ul><h2>Categoria A1</h2>
            <li>motociclete cu cilindree maxima de 125cm, cu putere maxima de 11kW si cu un raport putere/greutate de cel mult 0.1 kW/kg</li>
            <li>tricicluri cu motor cu puterea maxima de 15 kW</li>
            <li>varsta minima 16 ani impliniti</li>
        </ul>
        <ul><h2>Categoria AM</h2>
            <li>Mopede a caror viteza maxima prin constructie este mai mare de 25 km/h, dar nu depaseste 45km/h</li>
            <li>varsta minima 16 impliniti</li>
        </ul>
        <div>
            <a href="../legislatie/index.php" class="intra-si-invata-buton">Intra si invata</a>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-details">
        <h4>Despre noi</h4>
        <p>RoT (Romanian Traffic Signs Tutor) este o aplicatie web utila pentru cei ce vor sa invete eficient pentru examenul auto.<br>Aici gasesti tot ce ai nevoie pentru a te pregati
            si pentru a lua examenul din prima.
        </p>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="../termeni/termeni.php">Termeni</a></li>
                <li><a href="">Link-uri utile</a></li>
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