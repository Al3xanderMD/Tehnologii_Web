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
            <h1>Indicatoare de orientare</h1>
            <p> </p>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_1.php"><img src="orientare1.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_1.php" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea direcțiilor la o intersecție de drumuri din afara localității</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_2.php"><img src="orientare2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_2.php" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea direcțiilor la o intersecție denivelată de drumuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_3.php"><img src="orientare3.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_3.php" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea direcțiilor indicate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_4.php"><img src="orientare4.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_4.php" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea traseului de ocolire a localității</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_5.php"><img src="orientare5.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_5.php" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare direcțiilor într-o intersecție cu sens giratoriu</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_6.php"><img src="orientare6.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_6.php" class="vezi-buton2">vezi detalii</a>
                <p> Drum închis sau deschis circulației publice</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_7.php"><img src="orientare7.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_7.php" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea traseului de urmat în cazul unei restricții de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_8.php"><img src="orientare8.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_8.php" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare pe autostradă pentru parcare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_9.php"><img src="orientare9.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_9.php" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizare pe autostradă pentru spațiu de servicii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_10.php"><img src="orientare10.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_10.php" class="vezi-buton2">vezi detalii</a>
                <p> Confirmarea direcției de mers pe autostradă spre localități mai importante și distanțele până la acestea</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_11.php"><img src="orientare11.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_11.php" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea unui loc periculos, o intersecție sau o restricție pe un drum lateral</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_12.php"><img src="orientare12.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_12.php" class="vezi-buton2">vezi detalii</a>
                <p> Bandă rezervată circulației de transport public de persoane</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_13.php"><img src="orientare13.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_13.php" class="vezi-buton2">vezi detalii</a>
                <p> Drum fără ieșire</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_14.php"><img src="orientare14.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_14.php" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea traseului de urmat în vederea efectuării virajului la stânga</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_15.php"><img src="orientare15.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_15.php" class="vezi-buton2">vezi detalii</a>
                <p>Traseu de urmat pentru anumite categorii de autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_16.php"><img src="orientare16.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_16.php" class="vezi-buton2">vezi detalii</a>
                <p> Traseu de urmat pentru un anumit tip de autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_17.php"><img src="orientare17.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_17.php" class="vezi-buton2">vezi detalii</a>
                <p>Traseu de urmat pentru un anumit tip de autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_18.php"><img src="orientare18.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_18.php" class="vezi-buton2">vezi detalii</a>
                <p> Selectarea circulației pe direcții de mers în apropierea intersecției</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_19.php"><img src="orientare19.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_19.php" class="vezi-buton2">vezi detalii</a>
                <p> Selectarea circulației pe direcții de mers în apropierea intersecției</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_20.php"><img src="orientare20.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_20.php" class="vezi-buton2">vezi detalii</a>
                <p> Selectarea direcției de mers în apropierea intersecției</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_21.php"><img src="orientare21.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_21.php" class="vezi-buton2">vezi detalii</a>
                <p> Bandă destinată circulației vehiculelor lente</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_22.php"><img src="orientare22.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_22.php" class="vezi-buton2">vezi detalii</a>
                <p> Terminarea benzii de circulație din dreapta a părții de carosabil</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_23.php"><img src="orientare23.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_23.php" class="vezi-buton2">vezi detalii</a>
                <p> Terminarea benzii de circulație din stânga părții carosabile</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_24.php"><img src="orientare24.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_24.php" class="vezi-buton2">vezi detalii</a>
                <p> Viteză minimă obligatorie pentru o bandă de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_25.php"><img src="orientare25.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_25.php" class="vezi-buton2">vezi detalii</a>
                <p>Viteză minimă obligatorie pentru diferite benzi de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_26.php"><img src="orientare26.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_26.php" class="vezi-buton2">vezi detalii</a>
                <p>Limitare de viteză pentru diferite benzi de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_27.php"><img src="orientare27.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_27.php" class="vezi-buton2">vezi detalii</a>
                <p> Bandă de circulație rezervată autovehiculelor de transport public de persoane</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_28.php"><img src="orientare28.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_28.php" class="vezi-buton2">vezi detalii</a>
                <p> Direcția spre localitatea indicată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_29.php"><img src="orientare29.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_29.php" class="vezi-buton2">vezi detalii</a>
                <p> Direcția spre localitățile indicate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_30.php"><img src="orientare30.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_30.php" class="vezi-buton2">vezi detalii</a>
                <p>Direcția spre localitatea indicată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_31.php"><img src="orientare31.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_31.php" class="vezi-buton2">vezi detalii</a>
                <p>Direcția de urmat pentru autovehiculele destinate transportului de mărfuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_32.php"><img src="orientare32.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_32.php" class="vezi-buton2">vezi detalii</a>
                <p>Direcția spre obiectivul turistic</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_33.php"><img src="orientare33.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_33.php" class="vezi-buton2">vezi detalii</a>
                <p>Direcția spre obiective locale</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_34.php"><img src="orientare34.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_34.php" class="vezi-buton2">vezi detalii</a>
                <p>Direcția spre aeroport</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_35.php"><img src="orientare35.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_35.php" class="vezi-buton2">vezi detalii</a>
                <p>Direcția de urmat în cazul devierii temporare a circulației</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_36.php"><img src="orientare36.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_36.php" class="vezi-buton2">vezi detalii</a>
                <p>Direcția de urma în cazul devierii temporare a circulației</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_37.php"><img src="orientare37.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_37.php" class="vezi-buton2">vezi detalii</a>
                <p>Drum național</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_38.php"><img src="orientare38.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_38.php" class="vezi-buton2">vezi detalii</a>
                <p>Drum județean</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_39.php"><img src="orientare39.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_39.php" class="vezi-buton2">vezi detalii</a>
                <p>Drum comunal</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_40.php"><img src="orientare40.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_40.php" class="vezi-buton2">vezi detalii</a>
                <p>Drum deschis traficului internațional</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_41.php"><img src="orientare41.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_41.php" class="vezi-buton2">vezi detalii</a>
                <p>Direcția drumului deschis traficului internațional</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_42.php"><img src="orientare42.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_42.php" class="vezi-buton2">vezi detalii</a>
                <p>Traseu de tranzit european</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_43.php"><img src="orientare43.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_43.php" class="vezi-buton2">vezi detalii</a>
                <p>Simbolul și numărul autostrăzii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_44.php"><img src="orientare44.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_44.php" class="vezi-buton2">vezi detalii</a>
                <p>Intrare în localitate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_45.php"><img src="orientare45.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_45.php" class="vezi-buton2">vezi detalii</a>
                <p>Intrare în localitate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare%20individuale/4_46.php"><img src="orientare46.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare%20individuale/4_46.php" class="vezi-buton2">vezi detalii</a>
                <p>Ieșire din localitate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_47.html"><img src="orientare47.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_47.html" class="vezi-buton2">vezi detalii</a>
                <p>Ieșire din localitate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_48.html"><img src="orientare48.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_48.html" class="vezi-buton2">vezi detalii</a>
                <p>Limita de județ</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_49.html"><img src="orientare49.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_49.html" class="vezi-buton2">vezi detalii</a>
                <p>Curs de apă sau viaduct</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_50.html"><img src="orientare50.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_50.html" class="vezi-buton2">vezi detalii</a>
                <p>Confirmarea direcției de mers spre o localitate și distanța până la aceasta</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_51.html"><img src="orientare51.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_51.html" class="vezi-buton2">vezi detalii</a>
                <p>Confirmarea direcției de mers spre localități mai importante și distanțele până la acestea</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_52.html"><img src="orientare52.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_52.html" class="vezi-buton2">vezi detalii</a>
                <p>Organizarea traficului pe benzi de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_53.html"><img src="orientare53.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_53.html" class="vezi-buton2">vezi detalii</a>
                <p>Telefon de urgență (Poliție, Ambulanță, Pompieri, Depanare)</p>
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