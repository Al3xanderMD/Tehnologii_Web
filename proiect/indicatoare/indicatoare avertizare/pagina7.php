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
                <li><a href="../../legislatie/index.html">Legislatie</a></li>
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
                <a href="../../indicatoare individuale/7_1.html"><img src="avertizare1.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_1.html" class="vezi-buton2">vezi detalii</a>
                <p> Curbă la stânga</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_2.html"><img src="avertizare2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_2.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum îngustat pe ambele părți</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_3.html"><img src="avertizare3.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_3.html" class="vezi-buton2">vezi detalii</a>
                <p>Curbă la dreapta</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_4.html"><img src="avertizare4.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_4.html" class="vezi-buton2">vezi detalii</a>
                <p>Curbă dublă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_5.html"><img src="avertizare5.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_5.html" class="vezi-buton2">vezi detalii</a>
                <p>Coborăre periculoasă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_6.html"><img src="avertizare6.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_6.html" class="vezi-buton2">vezi detalii</a>
                <p> Urcare cu înclinare mare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_7.html"><img src="avertizare7.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_7.html" class="vezi-buton2">vezi detalii</a>
                <p> Curbă dublă sau o succesiune de mai mult de două curbe, prima la dreapta</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_8.html"><img src="avertizare8.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_8.html" class="vezi-buton2">vezi detalii</a>
                <p>Curbă deosebit de periculoasă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_9.html"><img src="avertizare9.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_9.html" class="vezi-buton2">vezi detalii</a>
                <p> Panouri succesive pentru curbe deosebit de periculoase</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_10.html"><img src="avertizare10.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_10.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum îngustat pe partea dreaptă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_11.html"><img src="avertizare11.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_11.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum îngustat pe partea stângă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_12.html"><img src="avertizare12.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_12.html" class="vezi-buton2">vezi detalii</a>
                <p> Acostament periculos</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_13.html"><img src="avertizare13.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_13.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum aglomerat</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_14.html"><img src="avertizare14.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_14.html" class="vezi-buton2">vezi detalii</a>
                <p>Tunel</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_15.html"><img src="avertizare15.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_15.html" class="vezi-buton2">vezi detalii</a>
                <p> Pod mobil</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_16.html"><img src="avertizare16.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_16.html" class="vezi-buton2">vezi detalii</a>
                <p>Ieșire spre un chei sau mal abrupt</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_17.html"><img src="avertizare17.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_17.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum cu denivelări</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_18.html"><img src="avertizare18.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_18.html" class="vezi-buton2">vezi detalii</a>
                <p>Denivelare pentru limitarea vitezei</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_19.html"><img src="avertizare19.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_19.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum lunecos</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_20.html"><img src="avertizare20.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_20.html" class="vezi-buton2">vezi detalii</a>
                <p>Împreșcare cu pietriș</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_21.html"><img src="avertizare21.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_21.html" class="vezi-buton2">vezi detalii</a>
                <p>Căderi de pietre</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_22.html"><img src="avertizare22.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_22.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare trecere pietoni</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_23.html"><img src="avertizare23.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_23.html" class="vezi-buton2">vezi detalii</a>
                <p> Copii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_24.html"><img src="avertizare24.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_24.html" class="vezi-buton2">vezi detalii</a>
                <p>Bicicliști</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_25.html"><img src="avertizare25.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_25.html" class="vezi-buton2">vezi detalii</a>
                <p>Animale</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_26.html"><img src="avertizare26.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_26.html" class="vezi-buton2">vezi detalii</a>
                <p>Animale</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_27.html"><img src="avertizare27.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_27.html" class="vezi-buton2">vezi detalii</a>
                <p>Lucrări</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_28.html"><img src="avertizare28.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_28.html" class="vezi-buton2">vezi detalii</a>
                <p> Semafoare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_29.html"><img src="avertizare29.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_29.html" class="vezi-buton2">vezi detalii</a>
                <p>Aeroport</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_30.html"><img src="avertizare30.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_30.html" class="vezi-buton2">vezi detalii</a>
                <p>Vânt lateral</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_31.html"><img src="avertizare31.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_31.html" class="vezi-buton2">vezi detalii</a>
                <p>Circulație în ambele sensuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_32.html"><img src="avertizare32.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_32.html" class="vezi-buton2">vezi detalii</a>
                <p>Alte pericole</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_33.html"><img src="avertizare33.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_33.html" class="vezi-buton2">vezi detalii</a>
                <p>Accident</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_34.html"><img src="avertizare34.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_34.html" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție de drumuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_35.html"><img src="avertizare35.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_35.html" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție cu drum fără prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_36.html"><img src="avertizare36.png"alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_36.html" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție cu drum fără prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_37.html"><img src="avertizare37.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_37.html" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție cu drum fără prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_38.html"><img src="avertizare38.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_38.html" class="vezi-buton2">vezi detalii</a>
                <p>Intersecție cu drum fără prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_39.html"><img src="avertizare39.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_39.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare intersecție cu sens giratoriu</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_40.html"><img src="avertizare40.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_40.html" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu cale ferată cu bariere sau semibariere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_41.html"><img src="avertizare41.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_41.html" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu o cale ferată fără bariere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_42.html"><img src="avertizare42.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_42.html" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu linii de tramvai</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_43.html"><img src="avertizare43.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_43.html" class="vezi-buton2">vezi detalii</a>
                <p>Mașini și utilaje agricole</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_44.html"><img src="avertizare44.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_44.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea unei amenajări rutiere care permite întoarcerea vehiculului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_45.html"><img src="avertizare45.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_45.html" class="vezi-buton2">vezi detalii</a>
                <p>Baliză direcțională care indică ocolirea obstacolului prin partea stângă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_46.html"><img src="avertizare46.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_46.html" class="vezi-buton2">vezi detalii</a>
                <p>Baliză direcțională care indică ocolirea obstacolului prin partea dreaptă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_47.html"><img src="avertizare47.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_47.html" class="vezi-buton2">vezi detalii</a>
                <p>Baliză bidirecțională</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_48.html"><img src="avertizare48.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_48.html" class="vezi-buton2">vezi detalii</a>
                <p>Panouri suplimentare pentru trecerea la nivel cu cale ferată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_49.html"><img src="avertizare49.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_49.html" class="vezi-buton2">vezi detalii</a>
                <p>Panouri suplimentare la nodurile rutiere de pe autostrăzi</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_50.html"><img src="avertizare50.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_50.html" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu o cale ferată, fără bariere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_51.html"><img src="avertizare51.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_51.html" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu cale ferată dublă, fără bariere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/7_52.html"><img src="avertizare52.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/7_52.html" class="vezi-buton2">vezi detalii</a>
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