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
                <li><a href="../../login+register/register.html"> Inregistrare </a></li>
                <li>
                    <?php if ($conectat == 0): ?>
                        <a href="../../login+register/login.php">Conectare</a>
                    <?php else: ?>
                        <a href="../../login+register/logout.php">Deconectare</a>
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
            <h1>Indicatoare rutiere și marcaje temporare</h1>
            <p> </p>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare individuale/8_1.html"><img src="lucru1.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_1.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum îngustat în ambele sensuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_2.html"><img src="lucru2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_2.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum îngustat în ambele sensuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_3.html"><img src="lucru3.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_3.html" class="vezi-buton2">vezi detalii</a>
                <p>Drum îngustat pe partea dreaptă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_4.html"><img src="lucru4.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_4.html" class="vezi-buton2">vezi detalii</a>
                <p> Acostament periculos</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_5.html"><img src="lucru5.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_5.html" class="vezi-buton2">vezi detalii</a>
                <p>Drum cu denivelări</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_6.html"><img src="lucru6.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_6.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum lunecos</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_7.html"><img src="lucru7.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_7.html" class="vezi-buton2">vezi detalii</a>
                <p> Împroșcare cu pietriș</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_8.html"><img src="lucru8.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_8.html" class="vezi-buton2">vezi detalii</a>
                <p> Lucrări</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_9.html"><img src="lucru9.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_9.html" class="vezi-buton2">vezi detalii</a>
                <p> Semafoare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_10.html"><img src="lucru10.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_10.html" class="vezi-buton2">vezi detalii</a>
                <p> Circulație în ambele sensuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_11.html"><img src="lucru11.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_11.html" class="vezi-buton2">vezi detalii</a>
                <p> Alte pericole</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_12.html"><img src="lucru12.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_12.html" class="vezi-buton2">vezi detalii</a>
                <p>Prioritate pentru circulația din sens invers</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_13.html"><img src="lucru13.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_13.html" class="vezi-buton2">vezi detalii</a>
                <p>Limitare de viteză</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_14.html"><img src="lucru14.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_14.html" class="vezi-buton2">vezi detalii</a>
                <p> Sfârșitul tuturor restricțiilor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_15.html"><img src="lucru15.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_15.html" class="vezi-buton2">vezi detalii</a>
                <p> Sfârșitul interdicției de a depăși</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_16.html"><img src="lucru16.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_16.html" class="vezi-buton2">vezi detalii</a>
                <p>Deviere termporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_17.html"><img src="lucru17.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_17.html" class="vezi-buton2">vezi detalii</a>
                <p> Deviere temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_18.html"><img src="lucru18.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_18.html" class="vezi-buton2">vezi detalii</a>
                <p> Deviere temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_19.html"><img src="lucru19.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_19.html" class="vezi-buton2">vezi detalii</a>
                <p> Deviere temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_20.html"><img src="lucru20.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_20.html" class="vezi-buton2">vezi detalii</a>
                <p> Denivelare față de banda anterioară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_21.html"><img src="lucru21.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_21.html" class="vezi-buton2">vezi detalii</a>
                <p> Îngustare temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_22.html"><img src="lucru22.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_22.html" class="vezi-buton2">vezi detalii</a>
                <p> Îngustare temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_23.html"><img src="lucru23.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_23.html" class="vezi-buton2">vezi detalii</a>
                <p> Abatere temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_24.html"><img src="lucru24.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_24.html" class="vezi-buton2">vezi detalii</a>
                <p> Abatere temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_25.html"><img src="lucru25.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_25.html" class="vezi-buton2">vezi detalii</a>
                <p> Abatere temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_26.html"><img src="lucru26.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_26.html" class="vezi-buton2">vezi detalii</a>
                <p> Terminarea abaterii temporare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_27.html"><img src="lucru27.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_27.html" class="vezi-buton2">vezi detalii</a>
                <p> Îngustarea temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_28.html"><img src="lucru28.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_28.html" class="vezi-buton2">vezi detalii</a>
                <p>Îngustarea temporară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_29.html"><img src="lucru29.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_29.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea rutei ocolitoare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_30.html"><img src="lucru30.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_30.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea rutei ocolitoare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_31.html"><img src="lucru31.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_31.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea rutei ocolitoare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_32.html"><img src="lucru32.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_32.html" class="vezi-buton2">vezi detalii</a>
                <p>Marcaje rutiere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_33.html"><img src="lucru33.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_33.html" class="vezi-buton2">vezi detalii</a>
                <p>Semnalizarea unui rulaj care se deplasează rulând</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_34.html"><img src="lucru34.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_34.html" class="vezi-buton2">vezi detalii</a>
                <p>Succesiune de puncte de lucru</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_35.html"><img src="lucru35.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_35.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea unui sector cu circulație alternantă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_36.html"><img src="lucru36.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_36.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea unui sector cu circulație alternantă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_37.html"><img src="lucru37.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_37.html" class="vezi-buton2">vezi detalii</a>
                <p>Lucrări de tratamente a suprafeței părții carosabile</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_38.html"><img src="lucru38.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_38.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare lucrări pe străzi</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/8_39.html"><img src="lucru39.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/8_39.html" class="vezi-buton2">vezi detalii</a>
                <p>Marcaje temporare pentru semnalizarea lucrărilor în zona drumului public</p>
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
                <li><a href="../../termeni/">Termeni</a></li>
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