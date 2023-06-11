<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 12;
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

<body class="container">
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
        <main class="content">
        <script type="text/javascript">
            function handleSelect(elm) {
                window.location = elm.value + ".html";
            }
        </script>

        <div class="titlu">
            <h1>Capitolul 4 - partea 2 - Intersecția cu sens giratoriu</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/gE1ynAi2rHg">
            </iframe>                                   
        </div>
        <div>
            <a href="c4_p3.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 54</h2>
            <p>
                <strong>(1)</strong>
                Conducătorul de vehicul care executa o manevra de schimbare a direcţiei de mers, 
                de ieşire dintr-un r&acirc;nd de vehicule staţionate sau de intrare &icirc;ntr-un 
                asemenea r&acirc;nd, de trecere pe o altă bandă de circulaţie sau de virare spre 
                dreapta ori spre st&acirc;nga sau care urmează să efectueze o &icirc;ntoarcere ori 
                să meargă cu spatele este obligat să semnalizeze din timp şi să se asigure că o poate 
                face fără să perturbe circulaţia sau să pună &icirc;n pericol siguranţa celorlalţi 
                participanţi la trafic.
            </p>
            <p>
                <strong>(2)</strong>
                Semnalizarea schimbării direcţiei de mers trebuie să fie menţinută pe &icirc;ntreaga 
                durată a manevrei.
            </p>
            <h2>OUG - Articolul 57</h2>
            <p>
                <strong>(4)</strong>
                &Icirc;n intersecţiile cu sens giratoriu, semnalizate ca atare, vehiculele care 
                circulă &icirc;n interiorul acestora au prioritate faţă de cele care urmează să 
                pătrundă &icirc;n intersecţie.
            </p>
            <p></p>
            <h2>Regulament - Articolul 2</h2>
            <p>&Icirc;n sensul prezentului regulament, termenii și expresiile de mai jos au următoarea 
                semnificație:</p>
            <p>
                <strong>4^1.</strong>
                intersecție cu sens giratoriu - intersecție dirijată, semnalizată ca atare, 
                prevăzută cu una sau mai multe benzi de circulație, &icirc;n care circulația se 
                desfășoară &icirc;ntr-o singură direcție &icirc;n jurul unei zone centrale;
                <em>
                    <u>
                      <strong>
                            (Punctul 4^1 a fost adăugat &icirc;n lege și postat și pe Școala Rutieră 
                            la 17-02-2023)
                      </strong>
                    </u>
                </em>
            </p>
            <h2>Regulament - Articolul 107</h2>
            <p>
                <strong>(1)</strong>
                La intersecţiile prevăzute cu indicatoare şi/sau cu marcaje pentru semnalizarea 
                direcţiei de mers, conducătorii de vehicule trebuie să se &icirc;ncadreze pe benzile 
                corespunzătoare direcţiei de mers voite cu cel puţin 50 m &icirc;nainte de intersecţie 
                şi sunt obligaţi să respecte semnificaţia indicatoarelor şi marcajelor.
            </p>
            <p>
                <strong>(1^1)</strong>
                &Icirc;n cazul intersecțiilor cu sens giratoriu, conducătorii de vehicule trebuie 
                să respecte regulile privind circulația pe benzi, av&acirc;nd obligația să semnalizeze 
                din timp părăsirea intersecției și să se asigure că o pot face fără să perturbe circulația 
                sau să pună &icirc;n pericol siguranța celorlalți participanți la trafic.
                    <u>
                        <em>
                            <strong>
                                (Alineatul (1^1) a fost adăugat &icirc;n lege și postat și pe Școala Rutieră 
                                la 17-02-2023)
                            </strong>
                        </em>
                    </u>
            </p>
            <p>
                <strong>(2)</strong>
                La intersecţiile fără marcaje de delimitare a benzilor, conducătorii vehiculelor 
                ocupa &icirc;n mers, cu cel puţin 50 m &icirc;nainte de intersecţie, următoarele poziţii:
            </p>
            <p>
                <strong>a)</strong>
                r&acirc;ndul de l&acirc;ngă bordura sau acostament, cei care vor să schimbe 
                direcţia de mers spre dreapta;<br/>
                <strong>b)</strong>
                r&acirc;ndul de l&acirc;ngă axa drumului sau de l&acirc;ngă marcajul de 
                separare a sensurilor, cei care vor să schimbe direcţia de mers spre st&acirc;nga. 
                C&acirc;nd circulaţia se desfăşoară pe drumuri cu sens unic, conducătorii de vehicule 
                care intenţionează să vireze la st &acirc;nga sunt obligaţi să ocupe r&acirc;ndul de 
                l&acirc;ngă bordura sau acostamentul din partea st &acirc;nga;<br/>
                <strong>c)</strong>
                oricare dintre r&acirc;nduri, cei care vor să meargă &icirc;nainte.
            </p>
            <h2>Regulament - Articolul 114</h2>
            <p>
                <strong>(1)</strong>
                Conducătorii de autovehicule, tractoare agricole sau forestiere și tramvaie sunt 
                obligați să folosească instalațiile de iluminare și/sau semnalizare a acestora, după cum 
                urmează
                    <u>
                        <em>
                            <strong>
                                (Partea introductivă a alin. (1) al art. 114 a fost modificată 
                                și actualizată pe www.scoalarutiera.ro la 06-10-2021)
                            </strong>
                        </em>
                    </u>
            </p>
            <p>
                <strong>g)</strong>
                luminile indicatoare de direcţie pentru semnalizarea schimbării direcţiei de mers, 
                inclusiv la punerea &icirc;n mişcare a vehiculului de pe loc.
            </p>
            <h2>Regulament - Articolul 116</h2>
            <p>
                <strong>(1)</strong>
                Conducătorii de vehicule sunt obligați să semnalizeze schimbarea direcției 
                de deplasare, depășirea, oprirea și punerea &icirc;n mișcare.<br/>
                <strong>(2)</strong>
                Intenția conducătorilor de autovehicule, tractoare agricole sau forestiere și 
                tramvaie de a schimba direcția de mers, de a ieși dintr-un r&acirc;nd de vehicule 
                staționate ori de a intra &icirc;ntr-un asemenea r&acirc;nd, de a trece pe o altă 
                bandă de circulație sau de a vira spre dreapta ori spre st&acirc;nga sau a celor 
                care urmează să efectueze &icirc;ntoarcere, depășire ori oprire se semnalizează 
                prin punerea &icirc;n funcțiune a luminilor indicatoare de direcție cu cel puțin 
                50 m &icirc;n localități și 100 m &icirc;n afara localităților &icirc;nainte de 
                &icirc;nceperea efectuării manevrelor.
            </p>
            <h2>Regulament - Articolul 135</h2>
            <p>Conducătorul de vehicul este obligat să acorde prioritate de trecere şi &icirc;n 
                următoarele situaţii:</p>
            <p>
                <strong>d)</strong>
                c&acirc;nd urmează să pătrundă &icirc;ntr-o intersecţie cu circulaţie 
                &icirc;n sens giratoriu faţă de cel care circulă &icirc;n interiorul acesteia;
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
                    <option value="c7_p1">Capitolul 7 - partea 1 - locuri și situații speciale - trecerea la nivel cu caleaferată</option>
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
                    <option value="c9_p6">Capitolul 9 - partea 6 - Obligațiile conducătorilor auto cu vechime mai mică de unan</option>
                    <option value="c9_p7">Capitolul 9 - partea 7 - Obligațiile conducătorilor auto de transport public depersoane</option>
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
        </main>
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