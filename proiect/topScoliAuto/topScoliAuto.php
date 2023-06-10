<?php
session_start();
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
    $conectat=0;
}
else $conectat=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopScoliAuto</title>
    <link rel="stylesheet" href="../home/index.css">
    <script src="https://kit.fontawesome.com/0070301605.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <nav>
        <a href="../home/index.php"><img src="../images/logo2.png" alt="Logo"></a>
        <div class="header-links">
            <ul>
                <li><a href="../login+register/register.html"> Inregistrare </a></li>
                <li>
                    <?php if ($conectat == 0): ?>
                    <a href="../login+register/login.php">Conectare</a>
                    <?php else: ?>
                    <a href="../login+register/logout.php">Deconectare</a>
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
                <li><a href="../legislatie/index.html">Legislatie</a></li>
                <li><a href="../indicatoare/indicatoare-index/index.php">Indicatoare</a></li>
                <li>
                    <div class="dropdown">
                        <a href="">Categorii</a>
                        <i class="fa fa-caret-down"></i>
                        <div class="dropdown-content">
                            <a href="../categorii/categoriaA.php">Categoria A</a>
                            <a href="../categorii/categoriaB.php">Categoria B</a>
                        </div>
                    </div>
                </li>
                <li><a href="../chestionare/index.php">Chestionare</a></li>
            </ul>
        </div>
    </nav>
</div>
        <div class="titlu-topScoliAuto">
            <h1>TOP 5 SCOLI AUTO PE JUDET</h1>
            <h3>In functie de rata de promovabilitate</h3>
         </div>
        <h1 class="judet">IASI</h1>
        <table>
            <tr>
              <th>Scoala</th>
              <th>Promovare</th>
              <th>Admisi</th>
              <th>Examinati</th>
            </tr>
            <tr>
              <td>AUTO CRISS DRIVER SRL</td>
              <td>58%</td>
              <td>170</td>
              <td>291</td>
            </tr>
            <tr>
                <td>AUTO TODYFAMILY TVL SRL</td>
                <td>44%</td>
                <td>121</td>
                <td>270</td>
            </tr>
            <tr>
                <td>TITI BAS SRL</td>
                <td>41%</td>
                <td>184</td>
                <td>447</td>
            </tr>
            <tr>
                <td>VIOVAS SRL</td>
                <td>40%</td>
                <td>261</td>
                <td>642</td>
            </tr>
            <tr>
                <td>AMOSERV AUTO BEST SRL</td>
                <td>38%</td>
                <td>121</td>
                <td>318</td>
            </tr>
          </table>
          <h1 class="judet">Bucuresti</h1>
        <table>
            <tr>
              <th>Scoala</th>
              <th>Promovare</th>
              <th>Admisi</th>
              <th>Examinati</th>
            </tr>
            <tr>
              <td>SC MOTORRAD SRL</td>
              <td>89%</td>
              <td>330</td>
              <td>369</td>
            </tr>
            <tr>
                <td>SC AUTOSPORT DRIVING CENTER SRL</td>
                <td>88%</td>
                <td>22</td>
                <td>25</td>
            </tr>
            <tr>
                <td>SC ENERGIA MOTO SRL</td>
                <td>82%</td>
                <td>295</td>
                <td>359</td>
            </tr>
            <tr>
                <td>SC TOP INSTRUCTOR AMI SRL</td>
                <td>81%</td>
                <td>321</td>
                <td>393</td>
            </tr>
            <tr>
                <td>SOCIETATEA DE TRANSPORT BUCURESTI STB SA</td>
                <td>78%</td>
                <td>151</td>
                <td>192</td>
            </tr>
          </table>
          <h1 class="judet">Sibiu</h1>
          <table>
              <tr>
                <th>Scoala</th>
                <th>Promovare</th>
                <th>Admisi</th>
                <th>Examinati</th>
              </tr>
              <tr>
                <td>UNITATEA MILITARA 01512 SIBIU</td>
                <td>44%</td>
                <td>51</td>
                <td>115</td>
              </tr>
              <tr>
                  <td>PRIMA TRANS SRL</td>
                  <td>41%</td>
                  <td>275</td>
                  <td>659</td>
              </tr>
              <tr>
                  <td>PERFORMER SRL</td>
                  <td>38%</td>
                  <td>65</td>
                  <td>168</td>
              </tr>
              <tr>
                  <td>AUTOPREST</td>
                  <td>36%</td>
                  <td>317</td>
                  <td>867</td>
              </tr>
              <tr>
                  <td>TRANS GROUP AGAPIA SRL</td>
                  <td>35%</td>
                  <td>214</td>
                  <td>604</td>
              </tr>
            </table>
            <h1 class="judet">Cluj</h1>
            <table>
                <tr>
                  <th>Scoala</th>
                  <th>Promovare</th>
                  <th>Admisi</th>
                  <th>Examinati</th>
                </tr>
                <tr>
                  <td>POPA RAZVAN SILVIU PFA</td>
                  <td>84%</td>
                  <td>157</td>
                  <td>186</td>
                </tr>
                <tr>
                    <td>LUCUTA ASOCIATII SRL</td>
                    <td>71%</td>
                    <td>189</td>
                    <td>263</td>
                </tr>
                <tr>
                    <td>VASROM MOTO SPORT SRL</td>
                    <td>68%</td>
                    <td>80</td>
                    <td>117</td>
                </tr>
                <tr>
                    <td>CP INTRAS SRL</td>
                    <td>64%</td>
                    <td>109</td>
                    <td>170</td>
                </tr>
                <tr>
                    <td>SAROM IMPEX SRL</td>
                    <td>63%</td>
                    <td>69</td>
                    <td>109</td>
                </tr>
              </table>
    <footer class="footer">
        <h4>Despre noi</h4>
        <p>RoT (Romanian Traffic Signs Tutor) este o aplicatie web utila pentru cei ce vor sa invete eficient pentru examenul auto.<br>Aici gasesti tot ce ai nevoie pentru a te pregati
                si pentru a lua examenul din prima.
            </p>
            <div class="footer-links">
                <ul>
                    <li><a href="../termeni/termeni.php">Termeni</a></li>
                    <li>Link-uri utile</li>
                    <li><a href="../contact/contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="useful-links">
                <ul>
                    <li><a href="../intrebariFrecvente/intrebariFrecvente.php">Intrebari frecvente</a></li>
                    <li><a href="topScoliAuto.php">Top scoli auto</a></li>
                    <li><a href="../topUseri/topUseri.php">Top utilizatori</a></li>
                    <li><a href="../home/index.php">Acasa</a></li>
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
        </footer>
    </body>
    </html>