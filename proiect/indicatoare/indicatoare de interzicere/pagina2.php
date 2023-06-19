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
            <h1>Indicatoare de interzicere sau restrictie</h1>
            <p> </p>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_1.php"><img src="acces.png" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_1.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_2.php"><img src="circulatie-interzisa.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_2.php" class="vezi-buton2">vezi detalii</a>
                <p> Circulația interzisă în ambele sensuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_3.php"><img src="acces-interzis.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_3.php" class="vezi-buton2">vezi detalii</a>
                <p>Accesul interzis autovehiculelor cu excepția motocicletelor fără ataș</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_4.php"><img src="motor.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_4.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis motocicletelor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_5.php"><img src="bicicleta.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_5.php" class="vezi-buton2">vezi detalii</a>
                <p>Accesul interzis bicicletelor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_6.php"><img src="mopede.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_6.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis mopedelor (ciclometrelor)</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_7.php"><img src="marfa.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_7.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis vehiculelor destinate transportului de mărfuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_8.php"><img src="osie.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_8.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis autovehiculelor cu remorcă, cu excepția celor cu semiremorcă sau cu remorcă cu o osie</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_9.php"><img src="autobuz.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_9.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis autobuzelor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_10.php"><img src="pieton.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_10.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis pietonilor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_11.php"><img src="tractiune.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_11.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis vehiculelor cu tracțiune animală</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_12.php"><img src="impinse.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_12.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis vehiculelor împinse sau trase cu mâna</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_13.php"><img src="tractoare.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_13.php" class="vezi-buton2">vezi detalii</a>
                <p>Accesul interzis tractoarelor și mașinilor autopropulsate pentru lucrări</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_14.php"><img src="autoveh.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_14.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis autovehiculelor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_15.php"><img src="autoveh+animala.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_15.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis autovehiculelor și vehiculelor cu tracțiune animală</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_16.php"><img src="2.30.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_16.php" class="vezi-buton2">vezi detalii</a>
                <p>Accesul interzis vehiculelor cu lățimea mai mare de ... m</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_17.php"><img src="3.50.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_17.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis vehiculelor cu înălțimea mai mare de .. m</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_18.php"><img src="7.0.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_18.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis vehiculelor cu masă mai mare de .. t</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_19.php"><img src="masa.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_19.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis vehiculelor cu masă mai mare de ... t pe osia simplă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_20.php"><img src="masa-osie.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_20.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis vehiculelor cu masă pe osia dublă mai mare de ... t</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_21.php"><img src="osietripla.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_21.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis vehiculelor cu masa pe osia tripla mai mare de ... t</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_22.php"><img src="lungime.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_22.php" class="vezi-buton2">vezi detalii</a>
                <p> Accesul interzis autovehiculelor sau ansamblurilor de vehicule cu lungimea mai mare de ... m</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_23.php"><img src="70m.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_23.php" class="vezi-buton2">vezi detalii</a>
                <p> Interzis autovehiculelor de a circula fără a menține între ele un interval de cel puțin ... m</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_24.php"><img src="stanga.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_24.php" class="vezi-buton2">vezi detalii</a>
                <p> Interzis a vira la stânga</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_25.php"><img src="dreapta.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_25.php" class="vezi-buton2">vezi detalii</a>
                <p> Interzis a vira la dreapta</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_26.php"><img src="intoarcere.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_26.php" class="vezi-buton2">vezi detalii</a>
                <p> Întoarcerea interzisă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_27.php"><img src="depasire.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_27.php" class="vezi-buton2">vezi detalii</a>
                <p> Depășirea autovehiculelor, cu excepția motocicletelor fără ataș, interzisă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_28.php"><img src="depasire-marfa.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_28.php" class="vezi-buton2">vezi detalii</a>
                <p>Depășirea interzisă autovehiculelor destinate transportului de mărfuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_29.php"><img src="limitare.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_29.php" class="vezi-buton2">vezi detalii</a>
                <p>Limitare de viteză</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_30.php"><img src="limitare-categ.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_30.php" class="vezi-buton2">vezi detalii</a>
                <p>Limitare de viteză diferențiată pe categorii de autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_31.php"><img src="claxonare.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_31.php" class="vezi-buton2">vezi detalii</a>
                <p>Claxonarea interzisă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_32.php"><img src="vama.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_32.php" class="vezi-buton2">vezi detalii</a>
                <p>Vamă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_33.php"><img src="taxa.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_33.php" class="vezi-buton2">vezi detalii</a>
                <p>Taxă de trecere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_34.php"><img src="sfrestrictrii.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_34.php" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșitul tuturor restricțiilor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_35.php"><img src="sflimitare.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_35.php" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșitul limitării de viteză</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_36.php"><img src="sfdepasire.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_36.php" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșitul interzicerii de a depăși</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_37.php"><img src="stationare.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_37.php" class="vezi-buton2">vezi detalii</a>
                <p>Staționare interzisă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_38.php"><img src="oprire.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_38.php" class="vezi-buton2">vezi detalii</a>
                <p>Oprire interzisă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_39.php"><img src="stationare-alt.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_39.php" class="vezi-buton2">vezi detalii</a>
                <p>Staționarea alternată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_40.php"><img src="stationare-alt2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_40.php" class="vezi-buton2">vezi detalii</a>
                <p>Staționare alternată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_41.php"><img src="zona-stat.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_41.php" class="vezi-buton2">vezi detalii</a>
                <p>Zonă de staționare cu durată limitată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_42.php"><img src="sfstat.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_42.php" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșitul zonei cu staționare cu durată limitată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_43.php"><img src="zona-limitare.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_43.php" class="vezi-buton2">vezi detalii</a>
                <p>Zonă cu limitare de viteză la 30 km/h</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_44.php"><img src="sflimitarezona.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_44.php" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșitul zonei de viteză limitată la 30 km/h</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_45.php"><img src="exploziv.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_45.php" class="vezi-buton2">vezi detalii</a>
                <p>Accesul interzis autovehiculelor care transportă substanțe explozive sau ușor inflamabile</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_46.php"><img src="pericol.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_46.php" class="vezi-buton2">vezi detalii</a>
                <p>Accesul interzis vehiculelor care transportă mărfuri periculoase</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/2_47.php"><img src="poluare.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/2_47.php" class="vezi-buton2">vezi detalii</a>
                <p>Accesul interzis autovehiculelor care transportă substanțe de natură să polueze apele</p>
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