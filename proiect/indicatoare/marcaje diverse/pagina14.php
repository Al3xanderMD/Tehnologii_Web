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
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style3.css">
    <script src="https://kit.fontawesome.com/0070301605.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="header1">
    <nav>
        <a href="../../home/index.php"><img src="../../images/logo2.png" alt="Logo"></a>
        <div class="header1-links">
            <ul>
                <li><a href="../../auth/register.php"> Inregistrare </a></li>
                <li>
                    <?php if ($conectat == 0): ?>
                        <a href="../../auth/login.php">Conectare</a>
                    <?php else: ?>
                        <a href="../../auth/logout.php">Deconectare</a>
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
                <li><a href="../../legislatie/index.php">Legislatie</a></li>
                <li><a href="../indicatoare-index/index.php">Indicatoare</a></li>
                <li>
                    <div class="dropdown">
                        <a href="">Categorii</a>
                        <i class="fa fa-caret-down"></i>
                        <div class="dropdown-content">
                            <a href="../../categorii/categoriaA.php">Categoria A</a>
                            <a href="../../categorii/categoriaB.php">Categoria B</a>
                        </div>
                    </div>
                </li>
                <li><a href="../../chestionare/index.php">Chestionare</a></li>
            </ul>
        </div>
    </nav>
</div>
    <section class="header">
        <div class="titlu">
            <h1>Marcaje diverse</h1>
            <p> </p>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_1.php"><img src="divers1.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_1.php" class="vezi-buton2">vezi detalii</a>
                <p> Marcaj de ghidare la traversarea unei intersecții</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_2.php"><img src="divers2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_2.php" class="vezi-buton2">vezi detalii</a>
                <p> Marcaj de ghidare în intersecție</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_3.php"><img src="divers3.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_3.php" class="vezi-buton2">vezi detalii</a>
                <p>Marcaj pentru spații înguste</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_4.php"><img src="divers4.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_4.php" class="vezi-buton2">vezi detalii</a>
                <p> Marcaj la îngustarea drumului cu o bandă de sens</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_5.php"><img src="divers5.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_5.php" class="vezi-buton2">vezi detalii</a>
                <p>Marcaj pe drum cu trei benzi pentru alocarea alternativă a două benzi pentru unul sau celălat sens de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_6.php"><img src="divers6.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_6.php" class="vezi-buton2">vezi detalii</a>
                <p> Spații închise circulației</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_7.php"><img src="divers7.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_7.php" class="vezi-buton2">vezi detalii</a>
                <p> Interzicerea staționării</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_8.php"><img src="divers8.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_8.php" class="vezi-buton2">vezi detalii</a>
                <p>Marcajul benzii rezervate circulației autovehiculelor de transport persoane</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_9.php"><img src="divers9.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_9.php" class="vezi-buton2">vezi detalii</a>
                <p> Stație autovehicule de transport în comun</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_10.php"><img src="divers10.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_10.php" class="vezi-buton2">vezi detalii</a>
                <p> Locuri de parcare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/13_11.php"><img src="divers11.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/13_11.php" class="vezi-buton2">vezi detalii</a>
                <p> Locuri de parcare</p>
            </div>
        </div>

    </section>
    <div class="footer">
        <div class="footer-details">
        <h4>Despre noi</h4>
        <p>RoT (Romanian Traffic Signs Tutor) este o aplicatie web utila pentru cei ce vor sa invete eficient pentru examenul auto.<br>Aici gasesti tot ce ai nevoie pentru a te pregati
            si pentru a lua examenul din prima.
        </p>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="../../termeni/termeni.php">Termeni</a></li>
                <li><a href="">Link-uri utile</a></li>
                <li><a href="../../contact/contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="useful-links">
            <ul>
                <li><a href="../../intrebariFrecvente/intrebariFrecvente.php">Intrebari frecvente</a></li>
                <li><a href="../../topScoliAuto/topScoliAuto.php">Top scoli auto</a></li>
                <li><a href="../../topUseri/topUseri.php">Top utilizatori</a></li>
                <li><a href="../../home/index.php">Acasa</a></li>
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
    </div>

</body>

</html>