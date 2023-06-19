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
            <h1>Semafoare pentru dirijarea circulatiei</h1>
            <p> </p>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_1.php"><img src="semafor1.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_1.php" class="vezi-buton2">vezi detalii</a>
                <p> Semafor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_2.php"><img src="semafor2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_2.php" class="vezi-buton2">vezi detalii</a>
                <p> Semafor cu indicarea direcției de deplasare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_3.php"><img src="semafor3.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_3.php" class="vezi-buton2">vezi detalii</a>
                <p>Semafor combinat cu dispozitiv de cronometrare a timpului aferent culorii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_4.php"><img src="semafor4.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_4.php" class="vezi-buton2">vezi detalii</a>
                <p> Semafor cu panou de contrast</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_5.php"><img src="semafor5.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_5.php" class="vezi-buton2">vezi detalii</a>
                <p>Semafor pentru biciclete</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_6.php"><img src="semafor6.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_6.php" class="vezi-buton2">vezi detalii</a>
                <p> Semafor pentru pietoni</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_7.php"><img src="semafor7.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_7.php" class="vezi-buton2">vezi detalii</a>
                <p> Semafor pentru pietoni combinat cu dispozitiv de cronometrare a timpului aferent culorii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_8.php"><img src="semafor8.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_8.php" class="vezi-buton2">vezi detalii</a>
                <p>Semafor de avertizare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/16_9.php"><img src="semafor9.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/16_9.php" class="vezi-buton2">vezi detalii</a>
                <p> Semafor pentru tramvaie</p>
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