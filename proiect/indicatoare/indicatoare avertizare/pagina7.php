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
            <h1>Indicatoare de avertizare</h1>
            <p> </p>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_1.php"><img src="avertizare1.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_1.php" class="vezi-buton2">vezi detalii</a>
                <p> Curbă la stânga</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_2.php"><img src="avertizare2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_2.php" class="vezi-buton2">vezi detalii</a>
                <p> Drum îngustat pe ambele părți</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_3.php"><img src="avertizare3.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_3.php" class="vezi-buton2">vezi detalii</a>
                <p>Curbă la dreapta</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_4.php"><img src="avertizare4.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_4.php" class="vezi-buton2">vezi detalii</a>
                <p>Curbă dublă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_5.php"><img src="avertizare5.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_5.php" class="vezi-buton2">vezi detalii</a>
                <p>Coborăre periculoasă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_6.php"><img src="avertizare6.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_6.php" class="vezi-buton2">vezi detalii</a>
                <p> Urcare cu înclinare mare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_7.php"><img src="avertizare7.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_7.php" class="vezi-buton2">vezi detalii</a>
                <p> Curbă dublă sau o succesiune de mai mult de două curbe, prima la dreapta</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_8.php"><img src="avertizare8.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_8.php" class="vezi-buton2">vezi detalii</a>
                <p>Curbă deosebit de periculoasă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_9.php"><img src="avertizare9.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_9.php" class="vezi-buton2">vezi detalii</a>
                <p> Panouri succesive pentru curbe deosebit de periculoase</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_10.php"><img src="avertizare10.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_10.php" class="vezi-buton2">vezi detalii</a>
                <p> Drum îngustat pe partea dreaptă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_11.php"><img src="avertizare11.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_11.php" class="vezi-buton2">vezi detalii</a>
                <p> Drum îngustat pe partea stângă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_12.php"><img src="avertizare12.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_12.php" class="vezi-buton2">vezi detalii</a>
                <p> Acostament periculos</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_13.php"><img src="avertizare13.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_13.php" class="vezi-buton2">vezi detalii</a>
                <p> Drum aglomerat</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_14.php"><img src="avertizare14.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_14.php" class="vezi-buton2">vezi detalii</a>
                <p>Tunel</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_15.php"><img src="avertizare15.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_15.php" class="vezi-buton2">vezi detalii</a>
                <p> Pod mobil</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_16.php"><img src="avertizare16.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_16.php" class="vezi-buton2">vezi detalii</a>
                <p>Ieșire spre un chei sau mal abrupt</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_17.php"><img src="avertizare17.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_17.php" class="vezi-buton2">vezi detalii</a>
                <p> Drum cu denivelări</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_18.php"><img src="avertizare18.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_18.php" class="vezi-buton2">vezi detalii</a>
                <p>Denivelare pentru limitarea vitezei</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_19.php"><img src="avertizare19.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_19.php" class="vezi-buton2">vezi detalii</a>
                <p> Drum lunecos</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_20.php"><img src="avertizare20.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_20.php" class="vezi-buton2">vezi detalii</a>
                <p>Împreșcare cu pietriș</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_21.php"><img src="avertizare21.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_21.php" class="vezi-buton2">vezi detalii</a>
                <p>Căderi de pietre</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_22.php"><img src="avertizare22.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_22.php" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare trecere pietoni</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_23.php"><img src="avertizare23.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_23.php" class="vezi-buton2">vezi detalii</a>
                <p> Copii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_24.php"><img src="avertizare24.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_24.php" class="vezi-buton2">vezi detalii</a>
                <p>Bicicliști</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_25.php"><img src="avertizare25.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_25.php" class="vezi-buton2">vezi detalii</a>
                <p>Animale</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_26.php"><img src="avertizare26.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_26.php" class="vezi-buton2">vezi detalii</a>
                <p>Animale</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_27.php"><img src="avertizare27.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_27.php" class="vezi-buton2">vezi detalii</a>
                <p>Lucrări</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_28.php"><img src="avertizare28.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_28.php" class="vezi-buton2">vezi detalii</a>
                <p> Semafoare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_29.php"><img src="avertizare29.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_29.php" class="vezi-buton2">vezi detalii</a>
                <p>Aeroport</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_30.php"><img src="avertizare30.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_30.php" class="vezi-buton2">vezi detalii</a>
                <p>Vânt lateral</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_31.php"><img src="avertizare31.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_31.php" class="vezi-buton2">vezi detalii</a>
                <p>Circulație în ambele sensuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_32.php"><img src="avertizare32.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_32.php" class="vezi-buton2">vezi detalii</a>
                <p>Alte pericole</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_33.php"><img src="avertizare33.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_33.php" class="vezi-buton2">vezi detalii</a>
                <p>Accident</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_34.php"><img src="avertizare34.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_34.php" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție de drumuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_35.php"><img src="avertizare35.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_35.php" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție cu drum fără prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_36.php"><img src="avertizare36.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_36.php" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție cu drum fără prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_37.php"><img src="avertizare37.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_37.php" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție cu drum fără prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_38.php"><img src="avertizare38.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_38.php" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție cu drum fără prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_39.php"><img src="avertizare39.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_39.php" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare intersecție cu sens giratoriu</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_40.php"><img src="avertizare40.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_40.php" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu cale ferată cu bariere sau semibariere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_41.php"><img src="avertizare41.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_41.php" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu o cale ferată fără bariere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_42.php"><img src="avertizare42.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_42.php" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu linii de tramvai</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_43.php"><img src="avertizare43.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_43.php" class="vezi-buton2">vezi detalii</a>
                <p>Mașini și utilaje agricole</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_44.php"><img src="avertizare44.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_44.php" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea unei amenajări rutiere care permite întoarcerea vehiculului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_45.php"><img src="avertizare45.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_45.php" class="vezi-buton2">vezi detalii</a>
                <p>Baliză direcțională care indică ocolirea obstacolului prin partea stângă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_46.php"><img src="avertizare46.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_46.php" class="vezi-buton2">vezi detalii</a>
                <p>Baliză direcțională care indică ocolirea obstacolului prin partea dreaptă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_47.php"><img src="avertizare47.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_47.php" class="vezi-buton2">vezi detalii</a>
                <p>Baliză bidirecțională</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_48.php"><img src="avertizare48.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_48.php" class="vezi-buton2">vezi detalii</a>
                <p>Panouri suplimentare pentru trecerea la nivel cu cale ferată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_49.php"><img src="avertizare49.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_49.php" class="vezi-buton2">vezi detalii</a>
                <p>Panouri suplimentare la nodurile rutiere de pe autostrăzi</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_50.php"><img src="avertizare50.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_50.php" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu o cale ferată, fără bariere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_51.php"><img src="avertizare51.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_51.php" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu cale ferată dublă, fără bariere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/7_52.php"><img src="avertizare52.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/7_52.php" class="vezi-buton2">vezi detalii</a>
                <p>Zona cu risc ridicat de accidente</p>
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