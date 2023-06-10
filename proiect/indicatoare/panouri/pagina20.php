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
            <h1>Panouri adiționale</h1>
            <p> </p>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare individuale/20_1.html"><img src="panouedit1.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_1.html" class="vezi-buton2">vezi detalii</a>
                <p>Distanța până la locul la care se referă indicatorul de presemnalizare sau informare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_2.html"><img src="panouedit2.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_2.html" class="vezi-buton2">vezi detalii</a>
                <p> Distanța între indicator și începutul locului periculos</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_3.html"><img src="panouedit3.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_3.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția și distanța până la locul la care se referă indicatorul</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_4.html"><img src="panouedit4.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_4.html" class="vezi-buton2">vezi detalii</a>
                <p>Persoane cu handicap</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_5.html"><img src="panouedit5.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_5.html" class="vezi-buton2">vezi detalii</a>
                <p>Intervalele de timp în care acționează indicatorul</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_6.html"><img src="panouedit6.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_6.html" class="vezi-buton2">vezi detalii</a>
                <p>Intervalele de timp în care acționează indicatorul</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_7.html"><img src="panouedit7.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_7.html" class="vezi-buton2">vezi detalii</a>
                <p>Trecere la nivel cu cale ferată industrială completând semnificația indicatorului ,,Alte pericole"</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_8.html"><img src="panouedit8.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_8.html" class="vezi-buton2">vezi detalii</a>
                <p>Lungimea sectorului periculos la care se referă indicatorul</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_9.html"><img src="panouedit9.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_9.html" class="vezi-buton2">vezi detalii</a>
                <p> Începutul și lungimea zonei de acțiune a indicatorului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_10.html"><img src="panouedit10.jpg"alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_10.html" class="vezi-buton2">vezi detalii</a>
                <p>Începutul zonei de acțiune a indicatorului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_11.html"><img src="panouedit11.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_11.html" class="vezi-buton2">vezi detalii</a>
                <p>Confirmarea zonei de acțiune a indicatorului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_12.html"><img src="panouedit12.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_12.html" class="vezi-buton2">vezi detalii</a>
                <p> Sfârșitul zonei de acțiune a indicatorului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_13.html"><img src="panouedit13.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_13.html" class="vezi-buton2">vezi detalii</a>
                <p> Categoria de autovehicule la care se referă indicatorul</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_14.html"><img src="panouedit14.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_14.html" class="vezi-buton2">vezi detalii</a>
                <p>Categoriile de autovehicule care trebuie să respecte semnificația indicatorului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_15.html"><img src="panouedit15.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_15.html" class="vezi-buton2">vezi detalii</a>
                <p>Folosirea luminilor de întâlnire</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_16.html"><img src="panouedit16.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_16.html" class="vezi-buton2">vezi detalii</a>
                <p> Parcare cu plată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_17.html"><img src="panouedit17.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_17.html" class="vezi-buton2">vezi detalii</a>
                <p>Parcare cu plată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_18.html"><img src="panouedit18.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_18.html" class="vezi-buton2">vezi detalii</a>
                <p> Exceptarea unor categorii de vehicule de la semnificația indicatorului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_19.html"><img src="panouedit19.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_19.html" class="vezi-buton2">vezi detalii</a>
                <p>Intervalale de timp cand este permisă staționarea vehiculelor ce efectuează aprovizionarea</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_20.html"><img src="panouedit20.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_20.html" class="vezi-buton2">vezi detalii</a>
                <p>Viteaza recomandată pe un sector de drum cu semafoare sincronizate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_21.html"><img src="panouedit21.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_21.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum inchis circulatiei publice</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_22.html"><img src="panouedit22.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_22.html" class="vezi-buton2">vezi detalii</a>
                <p>Trecere pentru pietoni desființată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_23.html"><img src="panouedit23.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_23.html" class="vezi-buton2">vezi detalii</a>
                <p>Cu excepția riveranilor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_24.html"><img src="panouedit24.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_24.html" class="vezi-buton2">vezi detalii</a>
                <p>Cu excepția autovehiculelor autorizate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_25.html"><img src="panouedit25.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_25.html" class="vezi-buton2">vezi detalii</a>
                <p> Autovehiculul se ridică</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_26.html"><img src="panouedit27.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_26.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția drumului cu prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_27.html"><img src="panouedit28.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_27.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția drumului cu prioritate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_28.html"><img src="panouedit29.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_28.html" class="vezi-buton2">vezi detalii</a>
                <p>Sensul sau sensurile de circulație pentru care este valabilă semnificația semnelor luminoase ale semaforului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_29.html"><img src="panouedit30.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_29.html" class="vezi-buton2">vezi detalii</a>
                <p> Trecerea la nivel cu calea ferată prevazută cu instalație de semnalizare luminoasă automată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_30.html"><img src="panouedit31.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_30.html" class="vezi-buton2">vezi detalii</a>
                <p>Rampă pentru persoane cu handicap locomotor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_31.html"><img src="panou33.png" alt="" style="width:100%;"><img src="panou34.png" alt="" style="width:100%;"><img src="panou35.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_31.html" class="vezi-buton2">vezi detalii</a>
                <p>Modalități în care se execută parcarea</p>
            </div>
                <div class="box2">
                    <a href="../../indicatoare individuale/20_32.html"><img src="panou36.png" alt="" style="width:100%;"><img src="panou37.png" alt="" style="width:100%;"><img src="panou38.png" alt="" style="width:100%;"></a>
                    <a href="../../indicatoare individuale/20_32.html" class="vezi-buton2">vezi detalii</a>
                    <p>Modalități în care se execută parcarea</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_33.html"><img src="panouedit39.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_33.html" class="vezi-buton2">vezi detalii</a>
                <p>Ridicare autovehicule parcate neregulamentar</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_34.html"><img src="panouedit40.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_34.html" class="vezi-buton2">vezi detalii</a>
                <p>Polei, gheață, zăpadă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_35.html"><img src="panouedit41.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_35.html" class="vezi-buton2">vezi detalii</a>
                <p>Duș</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_36.html"><img src="panouedit42.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_36.html" class="vezi-buton2">vezi detalii</a>
                <p>Ploaie, ceață, viscol</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_37.html"><img src="panouedit43.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_37.html" class="vezi-buton2">vezi detalii</a>
                <p>Vehicule care transportă substanțe explozive sau ușor inflamabile</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_38.html"><img src="panouedit44.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_38.html" class="vezi-buton2">vezi detalii</a>
                <p>Vehicule care transportă mărfuri periculoase</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_39.html"><img src="panouedit45.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_39.html" class="vezi-buton2">vezi detalii</a>
                <p>Vehicule care transportă substanțe de natură să polueze apele</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_40.html"><img src="panouedit46.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_40.html" class="vezi-buton2">vezi detalii</a>
                <p>Distanța până la indicatorul "Oprire"</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/20_41.html"><img src="panouedit47.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/20_41.html" class="vezi-buton2">vezi detalii</a>
                <p>Numărul nodului rutier pe autostradă</p>
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