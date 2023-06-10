
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
    <title>RoT</title>
    <link rel="stylesheet" href="index.css">
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
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../images/masina.jpg" alt="imagine1">
        </div>
        <div class="text">
            <ul>
               <li>Curs Legislatie</li>
               <li>Chestionare oficiale DRPCIV</li>
               <li>Indicatoare si marcaje rutiere explicate</li>
            </ul>
        </div>
        <div class="mySlides fade">
            <img src="../images/indicatoare.jpg" alt="imagine2">
        </div>
        <div class="text">
            <ul>
                <li>Diferente dintre Romania si alte tari europene</li>
               <li>Creeaza un cont si inregistreaza-ti progresul</li>
               <li>Avanseaza in clasament</li>
            </ul>
        </div>
        <!-- Next and previous buttons -->
         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
    <div class="row">
        <a href="../categorii/categoriaA.php">
        <div class="box" >
            <i class="fa-solid fa-motorcycle"></i>
            <h1>Categoria A</h1>
        </div>
        </a>
        <a href="../categorii/categoriaB.php">
        <div class="box">
            <i class="fa-solid fa-car"></i>
            <h1>Categoria B</h1>
        </div>
        </a>
        <a href="../comparatii/comparatii.php">
        <div class="box">
            <i class="fa-solid fa-earth-europe"></i>
             <h1>Comparatie</h1>
        </div>
        </a>
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
<script src="index.js"></script>
</body>
</html>