<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 2;
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
                window.location = elm.value + ".php";
            }
        </script>

        <div class="titlu">
            <h1>Capitolul 2 - partea 1 - Deplasarea vehiculelor pe drumul public</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <video width="800" height="500" controls> <source src="Curs de legislație rutieră - Capitolul 2 Partea 1 - Deplasarea vehiculelor pe drumul public.mp4" type="video/mp4"></video>                             
        </div>
        <div>
            <a href="c2_p2.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 36</h2>
            <p> 
                <strong>(1)</strong>
                Conducătorii de autovehicule şi tractoare agricole sau forestiere şi persoanele 
                care ocupă locuri prevăzute prin construcţie cu centuri sau dispozitive de 
                siguranţă omologate trebuie să le poarte &icirc;n timpul circulaţiei pe drumurile 
                publice, cu excepţia cazurilor prevăzute &icirc;n regulament.             
            </p>
            <p> 
              <h2>OUG - Articolul 41</h2>
            <p>
                <strong>(1)</strong>
                Vehiculele şi animalele, atunci c &acirc;nd circulă pe drumurile publice pe 
                care le este permis accesul, trebuie conduse pe partea din dreapta a drumului 
                public, &icirc;n sensul de circulaţie, c&acirc;t mai aproape de marginea părţii 
                carosabile, cu respectarea semnificaţiei semnalizării rutiere şi a regulilor de 
                circulaţie.      
            </p>
            <p>
                <strong>(3)</strong>
                Dacă un drum este prevăzut cu o pistă pentru biciclete, bicicletele și trotinetele 
                electrice vor fi conduse numai pe pista respectivă. &Icirc;n lipsa acestei piste,
                 circulația trotinetelor electrice este permisă numai pe sectoarele de drum unde 
                 viteza maximă admisă pentru circulația vehiculelor este de 50 km/h. 
                 <u>
                    <em>
                        <strong>(Alineatul (3) a fost modificat și actualizat pe www.scoalarutiera.ro la 11-02-2020)</strong>
                    </em>
                </u>                   
            </p>
                <h2>OUG - Articolul 43</h2>
            <p> 
                <strong>(1) </strong>
                Dacă un drum este prevăzut cu o bandă destinată vehiculelor lente sau transportului 
                public de persoane, semnalizată ca atare, acestea vor circula numai pe banda respectiva.                 
            </p>
            <h2>OUG - Articolul 47</h2>
            <p> 
                Conducătorii vehiculelor care circulă din sensuri opuse trebuie să păstreze 
                &icirc;ntre vehicule o distanţă laterală suficientă şi să circule c &acirc;t 
                mai aproape de marginea din dreapta a benzii de circulaţie respective.                  
            </p>
            <h2>OUG - Articolul 51</h2>
            <p> 
                Conducătorul unui vehicul care circulă &icirc;n spatele altuia are obligaţia de 
                a păstra o distanţă suficientă faţă de acesta, pentru evitarea coliziunii.                                   
            </p>
            <h2>OUG - Articolul 54</h2>
            <p> 
                <strong>(1) </strong>
                Conducătorul de vehicul care executa o manevra de schimbare a direcţiei de mers, 
                de ieşire dintr-un r &acirc;nd de vehicule staţionate sau de intrare &icirc;ntr-un 
                asemenea r&acirc;nd, de trecere pe o altă bandă de circulaţie sau de virare spre 
                dreapta ori spre st &acirc;nga sau care urmează să efectueze o &icirc;ntoarcere 
                ori să meargă cu spatele este obligat să semnalizeze din timp şi să se asigure că 
                o poate face fără să perturbe circulaţia sau să pună &icirc;n pericol siguranţa 
                celorlalţi participanţi la trafic.                                  
            </p>
            <p> 
                <strong>(2) </strong>
                Semnalizarea schimbării direcţiei de mers trebuie să fie menţinută pe &icirc;ntreaga
                durată a manevrei.          
            </p>
            <h2>Regulament - Articolul 101</h2>
            <p> 
                C&acirc;nd drumul are două sau mai multe benzi pe sensul de mers, vehiculele 
                se conduc pe banda situată l &acirc;ngă acostament sau bordura. Celelalte benzi 
                pot fi folosite succesiv, de la dreapta spre st &acirc;nga, dacă banda de 
                circulaţie utilizată este ocupată, cu obligaţia de a reveni pe banda din dreapta 
                atunci c&acirc;nd acest lucru este posibil.                
            </p>
            <h2>Regulament - Articolul 102</h2>
            <p> 
                Vehiculele grele, lente sau cu mase ori gabarite depăşite sau cele care se 
                deplasează cu viteza redusă trebuie conduse numai pe banda de l&acirc;ngă 
                acostament sau bordura, dacă &icirc;n sensul de mers nu este amenajată o 
                bandă destinată acestora.             
            </p>
            <h2>Regulament - Articolul 103</h2>
            <p> 
                Pe drumul public cu cel mult două benzi pe sens şi cu o a treia bandă pe care 
                este amplasată linia tramvaiului l&acirc;ngă axa drumului, conducătorii de 
                vehicule pot folosi această bandă, cu obligaţia să lase liberă calea tramvaiului,
                 la apropierea acestuia.                   
            </p>
            <h2>Regulament - Articolul 114</h2>
            <p> 
                <strong>(1)</strong>
                &nbsp;Conducătorii de autovehicule, tractoare agricole sau forestiere și 
                tramvaie sunt obligați să folosească instalațiile de iluminare și/sau 
                semnalizare a acestora, după cum urmează:           
            </p>
            <p> 
                <strong>g)</strong>
                luminile indicatoare de direcţie pentru semnalizarea schimbării direcţiei de mers, 
                inclusiv la punerea &icirc;n mişcare a vehiculului de pe loc.             
            </p>
            <h2>Regulament - Articolul 135</h2>
            <p> 
                Conducătorul de vehicul este obligat să acorde prioritate de trecere şi 
                &icirc;n următoarele situaţii:                      
            </p>
            <p> 
                <strong>f)</strong>
                c&acirc;nd se pune &icirc;n mişcare sau la pătrunderea pe drumul public 
                venind de pe o proprietate alăturată acestuia faţă de vehiculul care circulă 
                pe drumul public, indiferent de direcţia de deplasare;                
            </p>
            <h2>Regulament - Articolul 148</h2>
            <p> 
                Se interzice conducătorului de autovehicul, tractor agricol sau forestier 
                ori tramvai:                    
            </p>
            <p> 
                <strong>6.</strong>
                să deschidă ușile vehiculului sau tramvaiului &icirc;n timpul mersului, 
                să pornească de pe loc cu ușile deschise;
                <em>
                    <u>
                        <strong>(Articolul 148 a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)</strong>
                    </u>
                </em>
            </p>
            
        </div>
            <div class="progress-container">
                <?php if ($conectat == 1)
                    $formattedProgress = number_format($progres, 1);?>
                <?php if ($conectat == 1): ?>
                    <progress class="progress-bar" value="<?php echo $progres; ?>" max="100"></progress>
                    <div class="progress-text"><?php echo $formattedProgress; ?>%</div>
                <?php endif; ?>
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