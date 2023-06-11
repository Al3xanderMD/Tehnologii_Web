<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 55;
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
    $conectat=0;
}
else { $conectat=1;
    $user_id=$_SESSION['user_id'];
    $query = "SELECT lectii_completate FROM user WHERE id = $user_id";
    $rezultat = $mysqli->query($query) or die($mysqli->error . __LINE__);
    $rand = mysqli_fetch_assoc($rezultat);
    $lectii_completate = $rand['lectii_completate'];

    $query = "SELECT progres FROM user WHERE id = $user_id";
    $rezultat=$mysqli->query($query) or die($mysqli->error . __LINE__);
    $rand = mysqli_fetch_assoc($rezultat);
    $progres = $rand['progres'];

// Verifică dacă lectia curenta a fost deja completată
    if ($lectii_completate[$lectie_curenta ] == '0') {
        // Actualizează progresul doar dacă lectia curenta nu a fost completată anterior
        $query = "UPDATE user SET progres = progres + 1.5384615385 WHERE id = $user_id";
        $mysqli->query($query) or die($mysqli->error . __LINE__);

        // Actualizează starea de completare a lectiilor
        $lectii_completate[$lectie_curenta] = '1';
        $query = "UPDATE user SET lectii_completate = '$lectii_completate' WHERE id= $user_id";
        $mysqli->query($query) or die($mysqli->error . __LINE__);
    }}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title> Proiect </title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="../indicatoare/style3.css">
    <script src="https://kit.fontawesome.com/0070301605.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="header">
        <div class="header1">
            <nav>
                <a href="../home/index.php"><img src="../images/logo2.png" alt="Logo"></a>
                <div class="header1-links">
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
                        <li><a href="index.php">Legislatie</a></li>
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
        <script type="text/javascript">
            function handleSelect(elm) {
                window.location = elm.value + ".html";
            }
        </script>

        <div class="titlu">
            <h1>Capitolul 10 - partea 7 - Contravenții - introducere</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p8.php" class="vezi-buton">Lectia urmatoare</a>
        </div>
        </div>
        <div class="box1">
            <h1>Articole</h1>
            <p>
               <strong> OUG = ORDONANŢĂ DE URGENŢĂ nr. 195 din 12 decembrie 2002 (Codul rutier) </strong>
            </p>
            <p>
              <strong> Regulament = REGULAMENT de aplicare a OUG 195/2002 (Regulamentul codului rutier) </strong>
            </p>
            <h2>OUG - Articolul 95</h2>
            <p>
                <strong>(1)</strong>
                &Icirc;ncălcarea dispoziţiilor prezentei ordonanţe de urgenţă, altele dec&acirc;t cele care 
                &icirc;ntrunesc elementele constitutive ale unei infracţiuni, constituie contravenţie şi se sancţionează 
                cu avertisment ori cu amenda ca sancţiune principală şi, după caz, cu una dintre sancţiunile contravenţionale 
                complementare prevăzute la art. 96 alin. (2).
            </p>
            <p>
                <strong>(2)</strong>
                Avertismentul consta &icirc;n atenţionarea verbală sau scrisă a contravenientului, &icirc;nsoţită de recomandarea 
                de a respecta dispoziţiile legale.
            </p>
            <h2>OUG - Articolul 96</h2>
            <p>
                <strong>(1)</strong>
                Sancţiunile contravenţionale complementare au ca scop &icirc;nlăturarea unei stări de pericol şi pre 
                &icirc;nt&acirc;mpinarea săv&acirc;rşirii altor fapte interzise de lege şi se aplică prin acelaşi 
                proces-verbal prin care se aplică şi sancţiunea principală a amenzii sau avertismentului.
            </p>
            <p>
                <strong>(2)</strong>
                Sancţiunile contravenţionale complementare sunt următoarele:
            </p>
            <p>
                <strong>a)</strong>
                aplicarea punctelor de penalizare;<br/>
                <strong>b)</strong>
                suspendarea exercitării dreptului de a conduce, pe timp limitat;<br/>
                <strong>c)</strong>
                confiscarea bunurilor destinate săv&acirc;rşirii contravenţiilor prevăzute &icirc;n prezenta ordonanţă 
                de urgenţă ori folosite &icirc;n acest scop;<br/>
                <strong>d)</strong>
                imobilizarea vehiculului;<br/>
                <strong>e)</strong>
                radierea din oficiu a &icirc;nmatriculării sau &icirc;nregistrării vehiculului, &icirc;n cazurile prevăzute 
                la art. 17 alin. (4);<br/>
                <strong>f)</strong>
                abrogată;
            </p>
            <h2>OUG - Articolul 97</h2>
            <p>
                <strong>(1)</strong>
                &Icirc;n cazurile prevăzute &icirc;n prezenta ordonanţă de urgenţă, poliţistul rutier dispune şi una 
                dintre următoarele măsuri tehnico-administrative:
            </p>
            <p>
                <strong>a)</strong>
                reţinerea permisului de conducere şi/sau a certificatului de &icirc;nmatriculare ori de &icirc;nregistrare 
                sau, după caz, a dovezii &icirc;nlocuitoare a acestora;<br/>
                <strong>b)</strong>
                retragerea permisului de conducere, a certificatului de &icirc;nmatriculare sau &icirc;nregistrare ori a 
                plăcuţelor cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare;<br/>
                <strong>c)</strong>
                anularea permisului de conducere eliberat de autoritățile rom&acirc;ne;
                <u>
                    <em>
                        <strong>
                            (Litera a) a alinealului (1) a fost modificată &icirc;n lege și actualizată și pe Școala Rutieră 
                            la 31-01-2022)
                        </strong>
                    </em>
                </u>
                <br/>
                <strong>d)</strong>
                ridicarea vehiculelor staţionate neregulamentar;<br/>
                <strong>e)</strong>
                interdicția de a conduce autovehicule pe teritoriul Rom&acirc;niei pentru titularii permiselor de conducere 
                eliberate de o autoritate străină.
                <u>
                    <em>
                        <strong>
                            (Litera e) a alinealului (1) a fost adăugată &icirc;n lege și actualizată și pe Școala Rutieră 
                            la 31-01-2022)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>OUG - Articolul 98</h2>
            <p>
                <strong>(1)</strong>
                Amenzile contravenţionale se stabilesc &icirc;n cuantumul determinat de valoarea numărului punctelor-amendă aplicate.
            </p>
            <p>
                <strong>(2)</strong>
                Un punct-amendă reprezintă valoric 10% din salariul minim brut pe economie, stabilit prin hotăr&acirc;re a Guvernului.
            </p>
            <p>
                <strong>(2^1) </strong>
                Prin excepție de la prevederile alin. (2), &icirc;n perioada 1 ianuarie-31 decembrie 2018 un punct-amendă este 145 lei.
            </p>
            <p>
                <strong>(2^2) </strong>
                Prin excepție de la prevederile alin. (2), &icirc;n perioada 1 ianuarie-31 decembrie 2019 un punct-amendă este 145 lei.
            </p>
            <p>
                <strong>(2^3)</strong>
                Prin excepție de la prevederile alin. (2), &icirc;n perioada ianuarie - 31 decembrie 2020 un punct-amendă este 145 lei.
            </p>
            <p>
                <strong>(2^4)</strong>
                Prin excepție de la prevederile alin. (2), &icirc;n perioada 1 ianuarie-31 decembrie 2021 un punct-amendă este 145 lei.
            </p>
            <p>
                <strong>(2^5)</strong>
                Prin excepție de la prevederile alin. (2), &icirc;n perioada 1 ianuarie - 31 decembrie 2022 un punct-amendă este 145 lei.
                <em>
                    <strong>
                        <u>
                            (Alineatul (2^5) a fost adăugat &icirc;n lege și actualizat și pe Școala Rutieră la 31-01-2022)
                        </u>
                    </strong>
                </em>
            </p>
            <p>
                <strong>(2^6)</strong>
                Prin excepție de la prevederile alin. (2), &icirc;n perioada 1 ianuarie-31 decembrie 2023 un punct-amendă este 145 lei.
                <em>
                    <strong>
                        <u>
                            (Alineatul (2^5) a fost adăugat &icirc;n lege și actualizat și pe Școala Rutieră la 01-01-2023)
                        </u>
                    </strong>
                </em>
            </p>
            <p>
                <strong>(3)</strong>
                Contravenţiilor prevăzute &icirc;n prezenta ordonanţă de urgenţă li se stabilesc clase de sancţiuni 
                cărora le corespunde un număr de puncte-amenda, &icirc;n funcţie de gravitatea faptelor şi de pericolul 
                social pe care acestea &icirc;l prezintă.
            </p>
            <p>
                <strong>(4)</strong>
                Clasele de sancţiuni sunt următoarele:
            </p>
            <p>
                <strong>a)</strong>
                clasa I - 2 sau 3 puncte-amendă;<br/>
                <strong>b)</strong>
                clasa a II-a - 4 sau 5 puncte-amendă;<br/>
                <strong>c)</strong>
                clasa a III-a - de la 6 la 8 puncte-amendă;<br/>
                <strong>d)</strong>
                clasa a IV-a - de la 9 la 20 puncte-amendă;<br/>
                <strong>e)</strong>
                clasa a V-a - de la 21 la 100 puncte-amendă.
            </p>
            <p>
                <strong>(5)</strong>
                Contravenţiile prevăzute la clasa a V-a de sancţiuni se aplică persoanelor juridice.
            </p>
            
        </div>
        <div class="dropdown">
            <label for="lectii">Lectii: </label>
            <select name="" id="lectii" onchange="javascript:handleSelect(this)">
                <div class="dropdown-options">
                    <option value="">...</option>
                    <option value="c1_p1">Capitolul 1 - partea 1 - Drumul public</option>
                    <option value="c1_p2">Capitolul 1 - partea 2 - Sensul și banda de circulație</option>
                    <option value="c2_p1">Capitolul 2 - partea 1 - Deplasarea vehiculelor pe drumul public</option>
                    <option value="c2_p2">Capitolul 2 - partea 2 - Circulația în intersecții</option>
                    <option value="c3_p1">Capitolul 3 - partea 1 - Semnalizarea rutieră și ordinea de prioritate</option>
                    <option value="c3_p2">Capitolul 3 - partea 2 - Semnalele polițistului rutier</option>
                    <option value="c3_p3">Capitolul 3 - partea 3 - Semnalele speciale de avertizare</option>
                    <option value="c3_p4">Capitolul 3 - partea 4 - Semnalizarea temporară</option>
                    <option value="c3_p5">Capitolul 3 - partea 5 - Semnalele luminoase sau sonore</option>
                    <option value="c3_p6">Capitolul 3 - partea 6 - Indicatoare rutiere</option>
                    <option value="c3_p7">Capitolul 3 - partea 7 - Marcaje rutiere</option>
                    <option value="c4_p1">Capitolul 4 - partea 1 - Drumul cu sens unic</option>
                    <option value="c4_p2">Capitolul 4 - partea 2 - Intersecția cu sens giratoriu</option>
                    <option value="c4_p3">Capitolul 4 - partea 3 - Autostrada</option>
                    <option value="c4_p4">Capitolul 4 - partea 4 - Zona rezidenţială şi pietonală</option>
                    <option value="c5_p1">Capitolul 5 - partea 1 - Prioritatea și acordarea priorității</option>
                    <option value="c5_p2">Capitolul 5 - partea 2 - Prioritatea de trecere - acordată prin indicatoare</option>
                    <option value="c5_p3">Capitolul 5 - partea 3 - Prioritatea de trecere - acordata prin lege</option>
                    <option value="c5_p4">Capitolul 5 - partea 4 - acordarea priorității</option>
                    <option value="c5_p5">Capitolul 5 - partea 5 - alte cazuri de acordare de prioritate</option>
                    <option value="c6_p1">Capitolul 6 - partea 1 - manevre - depășirea</option>
                    <option value="c6_p2">Capitolul 6 - partea 2 - manevre - oprirea și staționarea</option>
                    <option value="c6_p3">Capitolul 6 - partea 3 - manevre - oprirea interzisă</option>
                    <option value="c6_p4">Capitolul 6 - partea 4 - manevre - staționarea interzisă și parcarea</option>
                    <option value="c6_p5">Capitolul 6 - partea 5 - manevre - întoarcerea</option>
                    <option value="c6_p6">Capitolul 6 - partea 6 - manevre - mersul înapoi</option>
                    <option value="c7_p1">Capitolul 7 - partea 1 - locuri și situații speciale - trecerea la nivel cu calea ferată</option>
                    <option value="c7_p2">Capitolul 7 - partea 2 - trecerea la nivel cu calea ferată fără bariere</option>
                    <option value="c7_p3">Capitolul 7 - partea 3 - trecerea la nivel cu calea ferată cu bariere</option>
                    <option value="c7_p4">Capitolul 7 - partea 4 - trecerea pentru pietoni</option>
                    <option value="c7_p5">Capitolul 7 - partea 5 - drumul în curbă</option>
                    <option value="c7_p6">Capitolul 7 - partea 6 - drumul în rampă și în pantă</option>
                    <option value="c8_p1">Capitolul 8 - partea 1 - Permisul de conducere</option>
                    <option value="c8_p2">Capitolul 8 - partea 2 - Condiții obținere permis și echivalări</option>
                    <option value="c8_p3">Capitolul 8 - partea 3 - Viteza de deplasare</option>
                    <option value="c8_p4">Capitolul 8 - partea 4 - Starea tehnică a vehiculelor</option>
                    <option value="c8_p5">Capitolul 8 - partea 5 - Sistemul de iluminare și semnalizare luminoasă</option>
                    <option value="c9_p1">Capitolul 9 - partea 1 - Obligațiile conducătorilor auto la plecarea la traseu</option>
                    <option value="c9_p2">Capitolul 9 - partea 2 - Obligațiile și interdicțiile conducătorilor de vehicule în timpul deplasării</option>
                    <option value="c9_p3">Capitolul 9 - partea 3 - Obligațiile conducătorilor auto la transportul copiilor</option>
                    <option value="c9_p4">Capitolul 9 - partea 4 - Obligațiile conducătorilor auto în caz de accident</option>
                    <option value="c9_p5">Capitolul 9 - partea 5 - Obligațiile conducătorilor auto în caz de defecțiune tehnică</option>
                    <option value="c9_p6">Capitolul 9 - partea 6 - Obligațiile conducătorilor auto cu vechime mai mică de un an</option>
                    <option value="c9_p7">Capitolul 9 - partea 7 - Obligațiile conducătorilor auto de transport public de persoane</option>
                    <option value="c9_p8">Capitolul 9 - partea 8 - Obligațiile conducătorilor auto de transport de mărfuri</option>
                    <option value="c9_p9">Capitolul 9 - partea 9 - Obligațiile proprietarilor sau deținătorilor de vehicule</option>
                    <option value="c9_p10">Capitolul 9 - partea 10 - Obligațiile conducătorilor auto la remorcarea vehiculelor</option>
                    <option value="c9_p11">Capitolul 9 - partea 11 - Obligațiile conducătorilor de mopede, biciclete și trotinete electrice</option>
                    <option value="c9_p12">Capitolul 9 - partea 12 - Obligații și interziceri pietoni</option>
                    <option value="c10_p1">Capitolul 10 - partea 1 - Contravenții și infracțiuni</option>
                    <option value="c10_p2">Capitolul 10 - partea 2 - Infracțiuni - Conducerea unui vehicul neînmatriculat</option>
                    <option value="c10_p3">Capitolul 10 - partea 3 - Infracțiuni - Conducerea unui vehicul fără permis deconducere</option>
                    <option value="c10_p4">Capitolul 10 - partea 4 - Infracțiuni - Conducerea unui vehicul sub influenţa alcoolului sau a altor substanţe</option>
                    <option value="c10_p5">Capitolul 10 - partea 5 - Infracțiuni - Părăsirea locului accidentului orimodificarea sau ştergerea urmelor acestuia</option>
                    <option value="c10_p6">Capitolul 10 - partea 6 - Infracțiuni - diverse</option>
                    <option value="c10_p7">Capitolul 10 - partea 7 - Contravenții - introducere</option>
                    <option value="c10_p8">Capitolul 10 - partea 8 - Contravenții - clasa 1</option>
                    <option value="c10_p9">Capitolul 10 - partea 9 - Contravenții - clasa 2</option>
                    <option value="c10_p10">Capitolul 10 - partea 10 - Contravenții - clasa 3</option>
                    <option value="c10_p11">Capitolul 10 - partea 11 - Contravenții - clasa 4</option>
                    <option value="c10_p12">Capitolul 10 - partea 12 - Contravenții - clasa 5 (doar pentru persoane juridice)</option>
                    <option value="c10_p13">Capitolul 10 - partea 13 - Alte sancțiuni (punctele de penalizare, interdicția de aconduce pe teritoriul României și reținerea / retragerea / suspendarea / anularea permisului de conducere)</option>
                    <option value="c10_p14">Capitolul 10 - partea 14 - Reținerea certificatului de înmatriculare sau înregistrare</option>
                    <option value="c10_p15">Capitolul 10 - partea 15 - Confiscarea, imobilizarea și radierea din oficiu</option>
                    <option value="c10_p16">Capitolul 10 - partea 16 - Consumul de alcool și procedura de recoltare probe</option>
                </div>
            </select>
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
                <li><a href="../termeni/termeni.php">Termeni</a></li>
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
            <a href="" target="_blank"><i class="fa fa-facebook" ></i></a>
            <i class="fa fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </div>

</body>

</html>