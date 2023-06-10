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
        <section class="header">
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
                            <li><a href="../../indicatoare/indicatoare-index/index.php">Indicatoare</a></li>
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
        <div class="titlu">
            <h1>Indicatoare si marcaje rutiere</h1>
        </div>
        <div class="text-box">
            <div class="box1"> 
                <a href="../indicatoare%20de%20prioritate/pagina1.php"><img src="20.jpg" alt="" style="width:100%;"></a>
                <a href="../indicatoare%20de%20prioritate/pagina1.php" class="vezi-buton">învață</a>
                <p> Indicatoare de prioritate</p></div>
            <div class="box1"> 
                <a href="../indicatoare%20de%20interzicere/pagina2.php"><img src="19.jpg" alt="" style="width:100%;"></a>
                <a href="../indicatoare%20de%20interzicere/pagina2.php" class="vezi-buton">învață</a>
                <p> Indicatoare de interzicere sau restrictie</p></div>
            <div class="box1"> 
                <a href="../indicatoare%20de%20obligare/pagina3.php"><img src="18.jpg" alt="" style="width:100%;"></a>
                <a href="../indicatoare%20de%20obligare/pagina3.php" class="vezi-buton">învață</a>
                <p>Indicatoare de obligare</p></div>
            <div class="box1"> 
                <a href="../indicatoare%20de%20orientare/pagina4.php"><img src="17.jpg" alt="" style="width:100%;"></a>
                <a href="../indicatoare%20de%20orientare/pagina4.php" class="vezi-buton">învață</a>
                <p> Indicatoare de orientare</p></div>
            <div class="box1"> 
                <a href="../indicatoare%20de%20informare/pagina5.php"><img src="16.jpg" alt="" style="width:100%;"></a>
                <a href="../indicatoare%20de%20informare/pagina5.php" class="vezi-buton">învață</a>
                <p> Indicatoare de informare</p></div>
            <div class="box1"> 
                <a href="../turism/pagina6.php"><img src="15.jpg" style="width:100%;"></a>
                <a href="../turism/pagina6.php" class="vezi-buton">învață</a>
                <p> Indicatoare de informare turistica</p></div>
            <div class="box1"> 
                <a href="../indicatoare%20avertizare/pagina7.php"><img src="11.jpg" alt="" style="width:100%;"></a>
                <a href="../indicatoare%20avertizare/pagina7.php" class="vezi-buton">învață</a>
                <p> Indicatoare de avertizare</p></div>
            <div class="box1"> 
                <a href="../indicatoare%20temporare/pagina8.php"><img src="5.jpg" alt="" style="width:100%;"></a>
                <a href="../indicatoare%20temporare/pagina8.php" class="vezi-buton">învață</a>
                <p> Indicatoare rutiere și marcaje temporare</p></div>
            <div class="box1"> 
                <a href="../indicator%20kilometric/pagina9.php"><img src="3.jpg" alt="" style="width:100%;"></a>
                <a href="../indicator%20kilometric/pagina9.php" class="vezi-buton">învață</a>
                <p> Indicator kilometric</p></div>
            <div class="box1"> 
                <a href="../marcaje%20laterale/pagina10.php"><img src="6.jpg" alt="" style="width:100%;"></a>
               <a href="../marcaje%20laterale/pagina10.php" class="vezi-buton">învață</a>
                <p> Marcaje laterale</p></div>
            <div class="box1"> 
                <a href="../marcaje%20transversale/pagina11.php"><img src="9.jpg" alt="" style="width:100%;"></a>
                <a href="../marcaje%20transversale/pagina11.php" class="vezi-buton">învață</a>
                <p> Marcaje transversale</p></div>
            <div class="box1"> 
                <a href="../marcaje%20longitudinale/pagina12.php"><img src="10.jpg" alt="" style="width:100%;"></a>
                <a href="../marcaje%20longitudinale/pagina12.php" class="vezi-buton">învață</a>
                <p> Marcaje longitudinale </p></div>
            <div class="box1">
                <a href="../marcaje%20diverse/pagina14.php"><img src="8.jpg" alt="" style="width:100%;"></a>
               <a href="../marcaje%20diverse/pagina14.php" class="vezi-buton">învață</a>
                <p> Marcaje diverse</p></div>
            <div class="box1"> 
                <a href="../politia/pagina15.php"><img src="politia_edit.jpg" alt="" style="width:100%;"></a>
                <a href="../politia/pagina15.php" class="vezi-buton">învață</a>
                <p>Semnalele polițistului rutier</p></div>
            <div class="box1"> 
                <a href="../cale%20ferata/pagina16.php"><img src="12.jpg" alt="" style="width:100%;"></a>
               <a href="../cale%20ferata/pagina16.php" class="vezi-buton">învață</a>
                <p> Semnale luminoase la trecerile la nivel cu calea ferata</p></div>
            <div class="box1"> 
                <a href="../semafor/pagina17.php"><img src="13.jpg" alt="" style="width:100%;"></a>
               <a href="../semafor/pagina17.php" class="vezi-buton">învață</a>
                <p> Semafoare pentru dirijarea circulatiei</p></div>
            <div class="box1"> 
                <a href="../dispozitive/pagina18.php"><img src="1.jpg" alt="" style="width:100%;"></a>
                <a href="../dispozitive/pagina18.php" class="vezi-buton">învață</a>
                <p> Dispozitive luminoase pentru dirijarea circulatiei pe benzi</p></div>
            <div class="box1"> 
                <a href="../auxiliare%20lucru/pagina19.php"><img src="4.jpg" alt="" style="width:100%;"></a>
                <a href="../auxiliare%20lucru/pagina19.php" class="vezi-buton">învață</a>
                <p> Mijloace de semnalizare a lucrarilor</p></div>
            <div class="box1"> 
                <a href="../panouri/pagina20.php"><img src="14.jpg" alt="" style="width:100%;"></a>
                <a href="../panouri/pagina20.php" class="vezi-buton">învață</a>
                <p>Panouri aditionale</p></div>
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