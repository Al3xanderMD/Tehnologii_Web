<?php
session_start();
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
 $conectat=0;
}
else $conectat=1;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title> Proiect </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../indicatoare/style3.css">
        <script src="https://kit.fontawesome.com/0070301605.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="header1">
        <nav>
            <a href="../home/index.php"><img src="../images/logo2.png" alt="Logo"></a>
            <div class="header1-links">
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
        <div class="container1">
               <div class="panel">
              <div class="panel-heading text-centre">
              <strong>Trecere la nivel cu o cale ferată fără bariere</strong>
              </div>
             <div class="panel-body">
              <div class="row1"> 
                <div class="column" style="max-width: 10%;"></div>
                  <div class="column">
                      <img src="../indicatoare/indicatoare-index/11.jpg" alt="" style="width:90%;">
                  </div>
                  <div class="text">
                <p> 
                    Indicatorul se amplasează la 50 de metri (în oraș) / 150 de metri (în afara localităților) înainte de trecerea la nivel cu o cale ferată fără bariere.
                </p>
                <p>
                    La întâlnirea acestui indicator, conducătorul auto este obligat să oprească, înainte de a traversa calea ferată, pentru a se asigura că în acel moment nu circulă vreun vehicul feroviar. Atenție, oprirea este obligatorie indiferent dacă în acel moment circulă sau nu vreun vehicul feroviar.
                </p>
                <p>
                    Oprirea se va face în dreptul marcajului de oprire sau în lipsa acestuia în dreptul indicatorului ''Trecere la nivel cu cale ferată simplă / dublă, fără bariere'', fără a depăși indicatorul.
                </p>
                <p>
                    Dacă trecerea la nivel este prevăzută cu semnale luminoase de avertizare a apropierii trenurilor, indicatorul va fi însoțit de panoul adițional ''Trecere la nivel cu calea ferată prevăzută cu instalație de semnalizare luminoasă automată''.
                </p>
                  </div>
              </div>
              <div class="row1">
                <div class="column"></div>
                <div class="column" style="max-width: 100%;">
                <img src="../indicatoare/indicatoare avertizare/avertizare41.png" alt="" style="width:70%; vertical-align: middle;">
              </div>
              <div>
              </div>
           </div>
              </div>
              <div class="panel-footer">
                <div class="row1">
                    <div class="column" style="max-width: 50%;">
                        <a href="7_40.php" class="btn" style="float: left;">Previous</a>
                    </div>
                    <div class="column" style="max-width: 50%;">
                        <a href="7_42.php" class="btn" style="float: right;">Urmator</a>
                    </div>
                </div>
              </div>
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