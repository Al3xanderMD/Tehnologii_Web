<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 32;
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
            <h1>Capitolul 8 - partea 1 - Permisul de conducere</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c8_p2.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 20</h2>
            <p>
                <strong>(1) </strong>
                Pentru a conduce pe drumurile publice autovehicule, tramvaie ori tractoare agricole sau forestiere, 
                conducătorii acestora trebuie să posede permis de conducere corespunzător.
            </p>
            <p>
                <strong>(2) </strong>
                Permisele de conducere se eliberează pentru următoarele categorii de vehicule: AM, A1, A2, A, B1, B, BE, 
                C1, C1E, C, CE, D1, D1E, D, DE, Tr, Tb sau Tv.
            </p>
            <p>
                <strong>(3)</strong>
                Descrierea categoriilor de vehicule prevăzute la alin. (2), pentru care se eliberează permise de conducere, 
                este prevăzută &icirc;n anexa nr. 1*).
            </p>
            <p>
                <strong>(4)</strong>
                V&acirc;rsta minimă pentru obţinerea permisului de conducere este de:
            </p>
            <p>
                <strong>a)</strong>
                16 ani &icirc;mpliniţi, pentru categoriile de vehicule AM, A1 şi B1;<br/>
                <strong>b)</strong>
                18 ani &icirc;mpliniţi, pentru categoriile de vehicule A2, B, BE, C1, C1E şi Tr;<br/>
                <strong>c)</strong>
                20 de ani &icirc;mpliniţi, dacă persoana are o experienţă de cel puţin 2 ani de conducere a motocicletelor 
                din categoria A2, sau 24 de ani &icirc;mpliniţi, pentru motocicletele din categoria A;<br/>
                <strong>d)</strong>
                21 de ani pentru categoriile de vehicule C, CE, D1 şi D1E, precum şi pentru triciclurile cu motor din
                 categoria A;<br/>
                <strong>e)</strong>
                24 de ani pentru categoriile de vehicule D, DE, Tb şi Tv.
            </p>
            <p>
                <strong>(5)</strong>
                Prin excepție de la v&acirc;rsta minimă prevăzută la alin. (4) lit. d), permisul de conducere pentru 
                categoriile de vehicule C și CE se eliberează de la v&acirc;rsta de 18 ani cu &icirc;nscrierea &icirc;n acesta 
                a codului național pentru atestarea valabilității categoriei numai &icirc;n cazul conducerii vehiculului pe
                 teritoriul Rom&acirc;niei &icirc;n prezența instructorului auto atestat sau a examinatorului din cadrul 
                 autorității competente &icirc;n timpul desfășurării cursului practic, respectiv a probelor practice pentru 
                 obținerea certificatului de calificare profesională inițială, denumit &icirc;n continuare CPI, astfel cum 
                 acesta este reglementat prin art. 1 alin. (3) din Normele privind pregătirea și atestarea profesională a 
                 anumitor categorii de conducători auto, aprobate prin Ordinul ministrului transporturilor nr. 1.214/2015 
                 pentru aprobarea normelor privind pregătirea și atestarea profesională a personalului de specialitate din 
                 domeniul transporturilor rutiere, cu modificările și completările ulterioare, sau cu &icirc;nscrierea codului 
                 european armonizat privind deținerea unui CPI.
                <u>
                    <em>
                        <strong>
                            (Alineatul (5) a fost adăugat &icirc;n lege și postat &nbsp;pe Școala Rutieră la 02-02-2023)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(6)</strong>
                Prin excepție de la v&acirc;rsta minimă prevăzută la alin. (4) lit. e), permisul de conducere pentru 
                categoriile de vehicule D și DE se eliberează de la v&acirc;rsta de 21 de ani, cu &icirc;nscrierea &icirc;n 
                acesta a codului național pentru atestarea valabilității categoriei numai &icirc;n cazul conducerii vehiculului 
                pe teritoriul Rom&acirc;niei &icirc;n prezența instructorului auto atestat sau a examinatorului din cadrul 
                autorității competente &icirc;n timpul desfășurării cursului practic, respectiv a probelor practice pentru 
                obținerea CPI sau cu &icirc;nscrierea codului european armonizat privind deținerea unui CPI.
                <u>
                    <em>
                        <strong>
                            (Alineatul (6) a fost adăugat &icirc;n lege și postat pe Școala Rutieră la 02-02-2023)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>OUG - Articolul 23</h2>
            <p>
                <strong>(1)</strong>
                Dreptul de a conduce un autovehicul, tractor agricol sau forestier ori tramvai pe drumurile publice 
                &icirc;l are numai persoana care posedă permis de conducere valabil, corespunzător categoriei din care 
                face parte vehiculul respectiv, sau dovada &icirc;nlocuitoare a acestuia cu drept de circulaţie.
            </p>
            <p>
                <strong>(2)</strong>
                Au dreptul de a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie pe drumurile publice, 
                &icirc;n condiţiile stabilite prin regulament, şi persoanele care urmează un curs de pregătire practică, 
                &icirc;n vederea obţinerii permisului de conducere, numai &icirc;n prezenta şi sub supravegherea directă 
                a unui instructor auto atestat &icirc;n acest sens, precum şi a examinatorului din cadrul autorităţii 
                competente &icirc;n timpul desfăşurării probelor practice ale examenului pentru obţinerea permisului 
                de conducere pentru oricare dintre categoriile prevăzute de lege.
            </p>
            <p>
                <strong>(3) </strong>
                Pe parcursul activităţii de pregătire practică sau de examinare &icirc;n vederea obţinerii permisului de 
                conducere, instructorul auto atestat ori, după caz, examinatorul &icirc;mpreună cu persoana pe care o 
                supraveghează sau o examinează răspund pentru &icirc;ncălcarea de către aceasta a regulilor de circulaţie 
                sau, după caz, pentru pagubele produse terţilor ca urmare a producerii unui accident de circulaţie.
            </p>
            <p>
                <strong>(3^1) </strong>
                Pregătirea teoretică şi practică a persoanelor &icirc;n vederea obţinerii permisului de conducere este 
                precedată de o evaluare obligatorie a capacităţilor psihologice solicitate &icirc;n activitatea de conducere 
                a autovehiculelor, tractoarelor agricole sau forestiere ori tramvaielor. Evaluarea psihologică este obligatorie 
                &icirc;n vederea obţinerii certificatului de atestare profesională pentru conducătorii de autovehicule şi de 
                tramvaie stabiliţi prin prezenta ordonanţă de urgenţă.
            </p>
            <p>
                <strong>(3^2) </strong>
                Conducătorii de autovehicule sau de tramvaie, deţinători ai certificatului de atestare profesională, vor fi 
                evaluaţi periodic din punct de vedere al capacităţilor psihologice solicitate &icirc;n activitatea de conducere 
                a autovehiculelor sau tramvaielor, &icirc;n condiţiile stabilite de reglementările &icirc;n vigoare.
            </p>
            <p>
                <strong>(4) </strong>
                Persoanele care solicită prezentarea la examen pentru obţinerea permisului de conducere sau a unor noi categorii 
                ale acestuia trebuie să &icirc;ndeplinească, potrivit legii, condiţiile de v&acirc;rstă, să fie apte din punct 
                de vedere medical şi să facă dovada pregătirii teoretice şi practice prin cursuri organizate de unităţi 
                autorizate, potrivit legii.
            </p>
            <h2>OUG - Articolul 24^1</h2>
            <p>
                <strong>(3)</strong>
                Persoanele care posedă permis de conducere categoria B au dreptul de a conduce ansamblurile de vehicule 
                prevăzute la lit. f) pct. 3 din anexa nr. 1, &icirc;n cazul &icirc;n care ansamblul depăşeşte 3.500 kg, 
                numai dacă fac dovada că au absolvit un curs de formare &icirc;n cadrul unei unităţi autorizate de pregătire 
                a conducătorilor de vehicule.
            </p>  

        </div>
        <div class="progress-container">
            <?php
            $formattedProgress = number_format($progres, 1);
            ?>
            <progress class="progress-bar" value="<?php echo $progres; ?>" max="100"></progress>
            <div class="progress-text"><?php echo $formattedProgress; ?>%</div>
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