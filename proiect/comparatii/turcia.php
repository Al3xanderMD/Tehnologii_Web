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
  <title> Rot </title>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="../indicatoare/style3.css">
</head>

<body>
<div class="header1">
  <nav>
      <a href="../home/index.php"><img src="../images/logo2.png" alt="Logo"></a>
    <div class="header1-links">
      <ul>
        <li><a href="../auth/register.php"> Inregistrare </a></li>
        <li>
          <?php if ($conectat == 0): ?>
          <a href="../auth/login.php">Conectare</a>
          <?php else: ?>
          <a href="../auth/logout.php">Deconectare</a>
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
        <li><a href="../legislatie/index.php">Legislatie</a></li>
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
  <section class="header">
    <script type="text/javascript">
      function handleSelect(elm) {
        window.location = elm.value + ".php";
      }
    </script>
    <div class="titlu">
      <h1>Comparații cu alte țări EU - Turcia</h1>
      <div class="dropdown">
        <label for="tari">Alege tara</label>
        <select name="tari" id="tari" onchange="javascript:handleSelect(this)">
          <div class="dropdown-options">
            <option value="turcia">Turcia</option>
            <option value="comparatii">Anglia</option>
          </div>

        </select>
      </div>
    </div>
    <table class="tabel">
      <tr>
        <th>Indicator</th>
        <th>Romania</th>
        <th>Turcia</th>
      </tr>
      <tr>
        <td>Stop</td>
        <td><img src="./stop.png" alt=""></td>
        <td><img src="./t1.png" alt=""></td>
      </tr>
      <tr>
        <td>Cedeaza trecerea</td>
        <td><img src="./cedeaza.png" alt=""></td>
        <td><img src="./t2.png" alt=""></td>
      </tr>
      <tr>
        <td>Drum cu prioritate</td>
        <td><img src="./t3.png" alt=""></td>
        <td></td>
      </tr>
      <tr>
        <td>Sfarșitul drumului cu prioritate</td>
        <td><img src="./t4.png" alt=""></td>
        <td></td>
      </tr>
      <tr>
        <td>Prioritate pentru circulația din sens invers</td>
        <td><img src="./2sensuri.png" alt=""></td>
        <td><img src="./t5.png" alt=""></td>
      </tr>
      <tr>
        <td>Prioritate față de circulația din sens invers</td>
        <td><img src="./2sensuri2.png" alt=""></td>
        <td><img src="./t6.png" alt=""></td>
      </tr>
      <tr>
        <td>Curbă la dreapta</td>
        <td><img src="./rom1.png" alt=""></td>
        <td><img src="./t7.png" alt=""></td>
      </tr>
      <tr>
        <td>Curbă dublă sau o succesiune de mai mult de două curbe, prima la dreapta</td>
        <td><img src="./rom2.png" alt=""></td>
        <td><img src="./t8.png" alt=""></td>
      </tr>
      <tr>
        <td>Intersecție de drumuri</td>
        <td><img src="./rom3.png" alt=""></td>
        <td><img src="./t9.png" alt=""></td>
      </tr>
      <tr>
        <td>Intersecție cu drum fără prioritate</td>
        <td><img src="./rom4.png" alt=""></td>
        <td><img src="./t10.png" alt=""></td>
      </tr>
      <tr>
        <td>Presemnalizare intersecție cu sens giratoriu</td>
        <td><img src="./rom5.png" alt=""></td>
        <td><img src="./t11.png" alt=""></td>
      </tr>
      <tr>
        <td>Semafoare</td>
        <td><img src="./rom6.png" alt=""></td>
        <td><img src="./t12.png" alt=""></td>
      </tr>
      <tr>
        <td>Circulație în ambele sensuri</td>
        <td><img src="./rom7.png" alt=""></td>
        <td><img src="./t13.png" alt=""></td>
      </tr>
      <tr>
        <td>Drum aglomerat</td>
        <td><img src="./rom8.png" alt=""></td>
        <td><img src="./t14.png" alt=""></td>
      </tr>
      <tr>
        <td>Urcare cu înclinare mare</td>
        <td><img src="./rom9.png" alt=""></td>
        <td><img src="./t15.png" alt=""></td>
      </tr>
      <tr>
        <td>Coborâre periculoasă</td>
        <td><img src="./rom10.png" alt=""></td>
        <td><img src="./t16.png" alt=""></td>
      </tr>
      <tr>
        <td>Presemnalizare trecere pietoni</td>
        <td><img src="./rom11.png" alt=""></td>
        <td><img src="./t17.png" alt=""></td>
      </tr>
      <tr>
        <td>Copii</td>
        <td><img src="./rom13.png" alt=""></td>
        <td><img src="./t19.png" alt=""></td>
      </tr>
      <tr>
        <td>Bicicliști</td>
        <td><img src="./rom14.png" alt=""></td>
        <td><img src="./t20.png" alt=""></td>
      </tr>
      <tr>
        <td>Animale</td>
        <td><img src="./rom15.png" alt=""></td>
        <td><img src="./t21.png" alt=""></td>
      </tr>
      <tr>
        <td>Animale</td>
        <td><img src="./rom16.png" alt=""></td>
        <td><img src="./t22.png" alt=""></td>
      </tr>
      <tr>
        <td>Drum îngustat pe ambele părți</td>
        <td><img src="./rom17.png" alt=""></td>
        <td><img src="./t23.png" alt=""></td>
      </tr>
      <tr>
        <td>Drum cu denivelări</td>
        <td><img src="./rom18.png" alt=""></td>
        <td><img src="./t24.png" alt=""></td>
      </tr>
      <tr>
        <td>Denivelare pentru limitarea vitezei</td>
        <td><img src="./rom19.png" alt=""></td>
        <td></td>
      </tr>
      <tr>
        <td>Drum lunecos</td>
        <td><img src="./rom20.png" alt=""></td>
        <td><img src="./t26.png" alt=""></td>
      </tr>
      <tr>
        <td>Împreșcare cu pietriș</td>
        <td><img src="./rom21.png" alt=""></td>
        <td><img src="./t27.png" alt=""></td>
      </tr>
      <tr>
        <td>Acostament periculos</td>
        <td><img src="./rom22.png" alt=""></td>
        <td><img src="./t28.png" alt=""></td>
      </tr>
      <tr>
        <td>Gheață sau zăpadă</td>
        <td><img src="./rom23.png" alt=""><img src="./rom23_2.png" alt=""></td>
        <td><img src="./t29.png" alt=""></td>
      </tr>
      <tr>
        <td>Căderi de pietre</td>
        <td><img src="./rom24.png" alt=""></td>
        <td><img src="./t31.png" alt=""></td>
      </tr>
      <tr>
        <td>Vânt lateral</td>
        <td><img src="./rom25.png" alt=""></td>
        <td><img src="./t32.png" alt=""></td>
      </tr>
      <tr>
        <td>Ieșire spre un chei sau mal abrupt</td>
        <td><img src="./rom26.png" alt=""></td>
        <td><img src="./t33.png" alt=""><img src="./uk26_2.png" alt=""></td>
      </tr>
      <tr>
        <td>Pod mobil</td>
        <td><img src="./rom27.png" alt=""></td>
        <td><img src="./t34.png" alt=""></td>
      </tr>
      <tr>
        <td>Tunel</td>
        <td><img src="./rom28.png" alt=""></td>
        <td><img src="./t35.png" alt=""></td>
      </tr>
      <tr>
        <td>Aeroport</td>
        <td><img src="./rom29.png" alt=""></td>
        <td><img src="./t36.png" alt=""><img src="./uk29_2.png" alt=""></td>
      </tr>
      <tr>
        <td>Trecere la nivel cu linii de tramvai</td>
        <td><img src="./rom30.png" alt=""></td>
        <td><img src="./t37.png" alt=""></td>
      </tr>
      <tr>
        <td>Trecere la nivel cu cale ferată cu bariere sau semibariere</td>
        <td><img src="./rom31.png" alt=""></td>
        <td><img src="./t38.png" alt=""></td>
      </tr>
      <tr>
        <td>Trecere la nivel cu o cale ferată fără bariere</td>
        <td><img src="./rom32.png" alt=""></td>
        <td><img src="./t39.png" alt=""></td>
      </tr>
      <tr>
        <td>Trecere la nivel cu o cale ferată, fără bariere</td>
        <td><img src="./rom33.png" alt=""></td>
        <td><img src="./t40.png" alt=""></td>
      </tr>
      <tr>
        <td>Trecere la nivel cu cale ferată dublă, fără bariere</td>
        <td><img src="./rom34.png" alt=""></td>
        <td><img src="./t41.png" alt=""></td>
      </tr>
      <tr>
        <td>Lucrări</td>
        <td><img src="./rom35.png" alt=""></td>
        <td><img src="./t42.png" alt=""></td>
      </tr>
      <tr>
        <td>Alte pericole</td>
        <td><img src="./rom36.png" alt=""></td>
        <td><img src="./t43.png" alt=""></td>
      </tr>

    </table>
  </section>
  <div class="footer">
    <div class="footer-details">
      <h4>Despre noi</h4>
      <p>RoT (Romanian Traffic Signs Tutor) este o aplicatie web utila pentru cei ce vor sa invete eficient pentru
        examenul auto.<br>Aici gasesti tot ce ai nevoie pentru a te pregati
        si pentru a lua examenul din prima.
      </p>
    </div>
    <div class="footer-links">
      <ul>
        <li><a href="">Ajutor</a></li>
        <li><a href="">Link-uri utile</a></li>
        <li><a href="../contact/contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="useful-links">
      <ul>
        <li><a href="../intrebariFrecvente/intrebariFrecvente.php">Intrebari frecvente</a></li>
        <li><a href="../topScoliAuto/topScoliAuto.php">Top scoli auto</a></li>
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
      <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
      <i class="fa fa-instagram"></i>
      <i class="fa-brands fa-linkedin"></i>
    </div>
  </div>


</body>

</html>