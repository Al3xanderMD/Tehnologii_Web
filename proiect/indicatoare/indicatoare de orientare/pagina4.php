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
            <h1>Indicatoare de orientare</h1>
            <p> </p>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare individuale/4_1.html"><img src="orientare1.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_1.html" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea direcțiilor la o intersecție de drumuri din afara localității</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_2.html"><img src="orientare2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_2.html" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea direcțiilor la o intersecție denivelată de drumuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_3.html"><img src="orientare3.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_3.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea direcțiilor indicate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_4.html"><img src="orientare4.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_4.html" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea traseului de ocolire a localității</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_5.html"><img src="orientare5.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_5.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare direcțiilor într-o intersecție cu sens giratoriu</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_6.html"><img src="orientare6.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_6.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum închis sau deschis circulației publice</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_7.html"><img src="orientare7.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_7.html" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea traseului de urmat în cazul unei restricții de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_8.html"><img src="orientare8.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_8.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizare pe autostradă pentru parcare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_9.html"><img src="orientare9.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_9.html" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizare pe autostradă pentru spațiu de servicii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_10.html"><img src="orientare10.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_10.html" class="vezi-buton2">vezi detalii</a>
                <p> Confirmarea direcției de mers pe autostradă spre localități mai importante și distanțele până la acestea</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_11.html"><img src="orientare11.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_11.html" class="vezi-buton2">vezi detalii</a>
                <p> Presemnalizarea unui loc periculos, o intersecție sau o restricție pe un drum lateral</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_12.html"><img src="orientare12.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_12.html" class="vezi-buton2">vezi detalii</a>
                <p> Bandă rezervată circulației de transport public de persoane</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_13.html"><img src="orientare13.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_13.html" class="vezi-buton2">vezi detalii</a>
                <p> Drum fără ieșire</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_14.html"><img src="orientare14.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_14.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea traseului de urmat în vederea efectuării virajului la stânga</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_15.html"><img src="orientare15.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_15.html" class="vezi-buton2">vezi detalii</a>
                <p>Traseu de urmat pentru anumite categorii de autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_16.html"><img src="orientare16.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_16.html" class="vezi-buton2">vezi detalii</a>
                <p> Traseu de urmat pentru un anumit tip de autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_17.html"><img src="orientare17.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_17.html" class="vezi-buton2">vezi detalii</a>
                <p>Traseu de urmat pentru un anumit tip de autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_18.html"><img src="orientare18.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_18.html" class="vezi-buton2">vezi detalii</a>
                <p> Selectarea circulației pe direcții de mers în apropierea intersecției</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_19.html"><img src="orientare19.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_19.html" class="vezi-buton2">vezi detalii</a>
                <p> Selectarea circulației pe direcții de mers în apropierea intersecției</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_20.html"><img src="orientare20.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_20.html" class="vezi-buton2">vezi detalii</a>
                <p> Selectarea direcției de mers în apropierea intersecției</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_21.html"><img src="orientare21.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_21.html" class="vezi-buton2">vezi detalii</a>
                <p> Bandă destinată circulației vehiculelor lente</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_22.html"><img src="orientare22.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_22.html" class="vezi-buton2">vezi detalii</a>
                <p> Terminarea benzii de circulație din dreapta a părții de carosabil</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_23.html"><img src="orientare23.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_23.html" class="vezi-buton2">vezi detalii</a>
                <p> Terminarea benzii de circulație din stânga părții carosabile</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_24.html"><img src="orientare24.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_24.html" class="vezi-buton2">vezi detalii</a>
                <p> Viteză minimă obligatorie pentru o bandă de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_25.html"><img src="orientare25.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_25.html" class="vezi-buton2">vezi detalii</a>
                <p>Viteză minimă obligatorie pentru diferite benzi de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_26.html"><img src="orientare26.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_26.html" class="vezi-buton2">vezi detalii</a>
                <p>Limitare de viteză pentru diferite benzi de circulație</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_27.html"><img src="orientare27.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_27.html" class="vezi-buton2">vezi detalii</a>
                <p> Bandă de circulație rezervată autovehiculelor de transport public de persoane</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_28.html"><img src="orientare28.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_28.html" class="vezi-buton2">vezi detalii</a>
                <p> Direcția spre localitatea indicată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_29.html"><img src="orientare29.jpg" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_29.html" class="vezi-buton2">vezi detalii</a>
                <p> Direcția spre localitățile indicate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_30.html"><img src="orientare30.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_30.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția spre localitatea indicată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_31.html"><img src="orientare31.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_31.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția de urmat pentru autovehiculele destinate transportului de mărfuri</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_32.html"><img src="orientare32.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_32.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția spre obiectivul turistic</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_33.html"><img src="orientare33.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_33.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția spre obiective locale</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_34.html"><img src="orientare34.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_34.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția spre aeroport</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_35.html"><img src="orientare35.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_35.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția de urmat în cazul devierii temporare a circulației</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_36.html"><img src="orientare36.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_36.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția de urma în cazul devierii temporare a circulației</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_37.html"><img src="orientare37.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_37.html" class="vezi-buton2">vezi detalii</a>
                <p>Drum național</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_38.html"><img src="orientare38.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_38.html" class="vezi-buton2">vezi detalii</a>
                <p>Drum județean</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_39.html"><img src="orientare39.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_39.html" class="vezi-buton2">vezi detalii</a>
                <p>Drum comunal</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_40.html"><img src="orientare40.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_40.html" class="vezi-buton2">vezi detalii</a>
                <p>Drum deschis traficului internațional</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_41.html"><img src="orientare41.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_41.html" class="vezi-buton2">vezi detalii</a>
                <p>Direcția drumului deschis traficului internațional</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_42.html"><img src="orientare42.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_42.html" class="vezi-buton2">vezi detalii</a>
                <p>Traseu de tranzit european</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_43.html"><img src="orientare43.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_43.html" class="vezi-buton2">vezi detalii</a>
                <p>Simbolul și numărul autostrăzii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_44.html"><img src="orientare44.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_44.html" class="vezi-buton2">vezi detalii</a>
                <p>Intrare în localitate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_45.html"><img src="orientare45.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_45.html" class="vezi-buton2">vezi detalii</a>
                <p>Intrare în localitate</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/4_46.html"><img src="orientare46.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/4_46.html" class="vezi-buton2">vezi detalii</a>
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