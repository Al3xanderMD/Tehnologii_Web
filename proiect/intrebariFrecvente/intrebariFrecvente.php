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
    <title>Intrebari Frecvente</title>
    <link rel="stylesheet" href="../home/index.css">
    <script src="https://kit.fontawesome.com/0070301605.js" crossorigin="anonymous"></script>
</head>
<body class="container">
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
                <li><a href="../legislatie/index.html">Legislatie</a></li>
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
        <main class="content">
            <h1 class="faq-heading">Intrebari Frecvente</h1>
            <div class="faq-container">
                <div>
                    <!-- faq question -->
                    <h1 class="faq-question">Intrebarile de pe site sunt chiar cele de la examenul oficial DRPCIV?</h1>
                    <!-- faq answer -->
                    <div class="faq-answer">
                        <p>Da, sunt aceleasi intrebari ca cele de la examen.
                        </p>
                </div>
                </div>
                <hr class="hr-line">
                <div>
                    <!-- faq question -->
                    <h1 class="faq-question">Este obligatorie crearea unui cont de utilizator?</h1>
                    <!-- faq answer -->
                    <div class="faq-answer">
                        <p>Nu este obligatorie crearea unui cont de utilizator, puteti parcurge  legislatia si indicatoarele si rezolva chestionarele fara a fi inregistrati pe site.
                            Insa, daca aveti un cont de utilizator veti putea urmari progresul dumneavostra si avansa in clasamentul celor mai sarguinciosi utilizatori.
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div>
                    <!-- faq question -->
                    <h1 class="faq-question">Ce trebuie sa fac pentru a invata eficient si a lua permisul din prima incercare?</h1>
                    <!-- faq answer -->
                    <div class="faq-answer">
                        <p>
                            Pentru a invata eficient recomandam sa parcurgeti cursul de legislatie cu explicatiile video , urmat de cel de indicatoare si marcaje rutiere.
                            Dupa ce ati parcurs aceste cursuri puteti sa va testati cunostintele acumulate rezolvand chestionare. Pentru a avea succes din prima este important sa parcurgeti cursurile cu mare atentie si sa insistanti pe lucrurile care nu va sunt clare.

                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div>
                    <!-- faq question -->
                    <h1 class="faq-question">Ce fac dupa examenul teoretic?</h1>
                    <!-- faq answer -->
                    <div class="faq-answer">
                        <p>Daca ati fost declarat admis va puteti programa pentru sustinerea examenului practic (traseul) chiar de pe calculatorul pe care ati dat examenul teoretic, alegand o data disponibila de pe ecran
                            , sau puteti merge sa va programati direct la ghiseu.<br>
                            Daca ati fost declarat respins trebuie sa asteptati 15 zile calendaristice , dupa aceea puteti merge oricand sa va programati din nou pentru examenul teoretic.

                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div>
                    <!-- faq question -->
                    <h1 class="faq-question">Ce fac dupa examenul practic?</h1>
                    <!-- faq answer -->
                    <div class="faq-answer">
                        <p>
                         Daca ati fost declarat admis, felicitari! Sunteti detinatorul unui permis de conducere. Permisele de conducere emise de SPRCIV, ca urmare
                         a obtinerii prin examen se transmit numai prin posta la domiciliul titularilor.<br>
                         Daca ati fost declarat respins , trebuie sa efectuati 3 sedinte de pregatire practica pentru a putea solicita o noua programare la traseu
                         si sa asteptati 15 zile calendaristice pentru a va reprograma. Dupa cele 3 sedinte vi se va elibera o adeverinta in baza careia veti face noua programare pentru traseu.
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div>
                    <!-- faq question -->
                    <h1 class="faq-question">Unde se sustine examenul teoretic pentru obtinerea permisului de conducere?</h1>
                    <!-- faq answer -->
                    <div class="faq-answer">
                        <p>
                          Fiecare elev va sustine examenul in judetul de care apartin.Sunati si intrebati la SPCRPCIV din judetul dumneavoastra.
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div>
                    <!-- faq question -->
                    <h1 class="faq-question">Examinarea practica cu politia se sustine pe masina pe care am facut scoala de soferi?</h1>
                    <!-- faq answer -->
                    <div class="faq-answer">
                        <p>
                          Da,examinarea practica se sustine pe masina pe care ati facut scolarizarea.Pentru aceasta, scolile de soferi si/sau instructorii auto cer achitarea unei sume de bani care difera in functie de categoria respectivului  autovehicul.
                        </p>
                    </div>
                </div>
            </div>
    </main>
    <footer class="footer">
        <h4>Despre noi</h4>
        <p>RoT (Romanian Traffic Signs Tutor) este o aplicatie web utila pentru cei ce vor sa invete eficient pentru examenul auto.<br>Aici gasesti tot ce ai nevoie pentru a te pregati
            si pentru a lua examenul din prima.
        </p>
        <div class="footer-links">
            <ul>
                <li><a href="../termeni/termeni.php">Termeni</a></li>
                <li><a href="">Link-uri utile</a></li>
                <li><a href="../contact/contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="useful-links">
            <ul>
                <li><a href="intrebariFrecvente.php">Intrebari frecvente</a></li>
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
    <script src="intrebariFrecvente.js"></script>
</body>
</html>