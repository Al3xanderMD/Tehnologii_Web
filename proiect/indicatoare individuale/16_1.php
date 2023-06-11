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
              <strong>Semafor</strong>
              </div>
             <div class="panel-body">
              <div class="row1"> 
                <div class="column" style="max-width: 10%;"></div>
                  <div class="column">
                      <img src="../indicatoare/indicatoare-index/13.jpg" alt="" style="width:90%;">
                  </div>
                  <div class="text">
                  <p>
                    Semnalele luminoase sunt lumini albe sau colorate diferit, emise succesiv, continuu sau intermitent, de unul sau mai multe corpuri de iluminat care compun un semafor. Semafoarele care emit semnale luminoase pentru dirijarea circulaţiei în intersecţii se instalează obligatoriu înainte de intersecţie, astfel încât să fie vizibile de la o distanţă de cel puţin 50 m. Acestea pot fi repetate în mijlocul, deasupra ori de cealaltă parte a intersecţiei.
                  </p>
                 <h3>Semnalul de culoare roșie interzice trecerea.</h3>
                 <p>La semnalul roșu, vehiculul trebuie oprit fără a depăși semaforul, marcajul de oprire, trecerea de pietoni sau colțul intersecției dacă semaforul este suspendat.
                 </p>
                 <p>
                    Atunci când semnalul roșu funcționează deodată cu cel galben, acesta anunță că urmează semnalul verde.
                 </p>
                 <p>
                    Atunci când semnalul de culoare galbenă urmează după semnalul de culoare verde îți poți continua deplasarea doar dacă nu poți opri în siguranță sau dacă ești surprins în intersecție.
                 </p>
                 <h3>Semnalul de culoare verde permite trecerea.</h3>
                 <p>
                    De obicei când virăm la dreapta, pietonii au și ei verde la semafor și trebuie să le acordăm prioritate.
                 </p>
                 <p>
                    Dacă semaforul întâlnit este unul singur pentru toate direcțiile (stânga, înainte, dreapta), atunci când virăm la stânga, trebuie să acordăm prioritate vehiculelor care vin din sens opus și pietonilor care trec pe trecerea de pietoni aflată pe drumul din stânga pe care intrăm.
                 </p>
                 <p>Se interzice intrarea în intersecție la semnalul verde dacă, din cauza aglomerației, există riscul imobilizării și blocării traficului.</p>
                  </div>
              </div>
              <div class="row1">
                <div class="column"></div>
                <div class="column" style="max-width: 100%;">
                <img src="../indicatoare/semafor/semafor1.png" alt="" style="width:70%; vertical-align: middle;">
              </div>
              <div>

              </div>
           </div>

              </div>
              <div class="panel-footer">
                <div class="row1">
                    <div class="column" style="max-width: 50%;">
                        <a href="15_1.php" class="btn" style="float: left;">Previous</a>
                    </div>
                    <div class="column" style="max-width: 50%;">
                        <a href="16_2.php" class="btn" style="float: right;">Urmator</a>
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