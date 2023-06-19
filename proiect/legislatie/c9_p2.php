<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 38;
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
            <h1>Capitolul 9 - partea 2 - Obligațiile și interdicțiile conducătorilor de vehicule în timpul deplasării</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c9_p3.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 35</h2>
            <p>
                <strong>(1) </strong>
                Participanţii la trafic trebuie să aibă un comportament care să nu afecteze fluenţa şi siguranţa circulaţiei, 
                să nu pună &icirc;n pericol viaţa sau integritatea corporala a persoanelor şi să nu aducă prejudicii proprietăţii 
                publice ori private.
            </p>
            <h2>OUG - Articolul 36</h2>
            <p>
                <strong>(1)</strong>
                Conducătorii de autovehicule şi tractoare agricole sau forestiere şi persoanele care ocupă locuri prevăzute 
                prin construcţie cu centuri sau dispozitive de siguranţă omologate trebuie să le poarte &icirc;n timpul 
                circulaţiei pe drumurile publice, cu excepţia cazurilor prevăzute &icirc;n regulament.
            </p>
            <p>
                <strong>(1^1) </strong>
                Conducătorii de autovehicule av&acirc;nd locuri prevăzute prin construcţie cu centuri de siguranţă trebuie 
                să informeze pasagerii cu privire la obligaţia legală de a le purta &icirc;n timpul circulaţiei pe drumurile 
                publice.
            </p>
            <p>
                <strong>(1^2)</strong>
                Conducătorii de autovehicule av&acirc;nd locuri prevăzute prin construcţie cu centuri de siguranţă au 
                obligaţia să se asigure că, pe timpul conducerii vehiculului, minorii poartă centurile de siguranţă sau 
                sunt transportaţi numai &icirc;n dispozitive de fixare &icirc;n scaune pentru copii omologate, &icirc;n 
                condiţiile prevăzute de regulament.
            </p>
            <p>
                <strong>(2)</strong>
                Pe timpul deplasării pe drumurile publice, conducătorii motocicletelor, mopedelor şi persoanele transportate 
                pe acestea au obligaţia să poarte casca de protecţie omologată.
            </p>
            <p>
                <strong>(3)</strong>
                Conducătorilor de vehicule le este interzisă folosirea telefoanelor mobile atunci c &acirc;nd aceștia 
                se află &icirc;n timpul deplasării pe drumurile publice, cu excepția celor prevăzute cu dispozitive tip 
                &laquo;m&acirc;ini libere &raquo;.
                <em>
                    <u>
                        <strong>
                            (Alineatul (3) a fost modificat &icirc;n lege și actualizat și pe Școala Rutieră la la 09-04-2020)
                        </strong>
                    </u>
                </em>
            </p>
            <h2>OUG - Articolul 44</h2>
            <p>
                <strong>(4)</strong>
                &Icirc;n circulaţia pe drumurile publice se interzice deţinerea la vedere, montarea şi folosirea mijloacelor 
                speciale de avertizare sonoră şi luminoasă pe şi &icirc;n alte autovehicule dec&acirc;t cele prevăzute la 
                art. 32 alin. (2), precum şi deţinerea, montarea sau folosirea pe autovehicule a sistemelor care perturbă 
                buna funcţionare a dispozitivelor de supraveghere a traficului.
            </p>
            <p>
                <strong>(5)</strong>
                Conducătorii de autovehicule pot fi avertizaţi de poliţia rutieră &icirc;n legatură cu prezenţa &icirc;n 
                trafic a dispozitivelor de măsurare a vitezei, prin mass-media sau panouri de avertizare. Conducătorii de 
                autovehicule pot folosi mijloace proprii de detectare a dispozitivelor de măsurare a vitezei.
            </p>
            <h2>OUG - Articolul 54^1</h2>
            <p>
                <em>
                    <u>
                        <strong>
                            (Articolul 54^1 a fost introdus &icirc;n lege și postat și pe Școala Rutieră la 31-01-2022)
                        </strong>
                    </u>
                </em>
            </p>
            <p>
                <strong>(1)</strong>
                Se interzice conducătorilor de vehicule să adopte un comportament agresiv &icirc;n conducerea acestora pe 
                drumurile publice.<br/>
                <strong>(2)</strong>
                Prin comportament agresiv se &icirc;nțelege efectuarea, pe drumul public, de către conducătorul de vehicul, 
                a uneia dintre următoarele manevre:<br/>
                <strong>a)</strong>
                deplasarea succesivă de pe o bandă de circulație pe alta sau de pe un r&acirc;nd pe altul, altern&acirc;nd 
                din st&acirc;nga &icirc;n dreapta, &icirc;n scopul depășirii unui șir de vehicule care circulă &icirc;n 
                același sens;<br/>
                <strong>b)</strong>
                &icirc;ntoarcerea vehiculului prin folosirea fr&acirc;nei de ajutor;<br/>
                <strong>c)</strong>
                pornirea vehiculului de pe loc prin patinarea excesivă, &icirc;n gol, a roților motoare;<br/>
                <strong>d)</strong>
                circulația cu vehiculul la o distanță foarte redusă față de un alt vehicul, &icirc;naintea sau &icirc;n 
                spatele acestuia, c&acirc;t și &icirc;n lateral, ori reducerea bruscă a vitezei de deplasare fără 
                motiv &icirc;ntemeiat, de natură a intimida conducătorul acestuia;<br/>
                <strong>e)</strong>
                folosirea repetată a semnalelor sonore și/sau luminoase de natură a obliga nejustificat conducătorul 
                de vehicul care circulă &icirc;n fața sa să elibereze banda de circulație;<br/>
                <strong>f)</strong>
                conducerea mopedului sau motocicletei av&acirc;nd &icirc;n contact cu partea carosabilă numai 
                una dintre roți;<br/>
                <strong>g)</strong>
                mersul cu spatele cu vehiculul &icirc;n scopul intimidării celorlalți participanți la trafic care 
                circulă &icirc;n spatele acestuia;<br/>
                <strong>h)</strong>
                realizarea intenționată a unui derapaj controlat al vehiculului &icirc;n vederea &icirc;ntoarcerii sau 
                rotirii acestuia;<br/>
                <strong>i)</strong>
                conducerea intenționată a unui vehicul prin accelerarea repetată a motorului, de natură a st&acirc;njeni 
                persoanele aflate &icirc;n zona drumului public.
            </p>
            <p></p>
            <h2>Regulament - Articolul 96</h2>
            <p>
                <strong>(1) </strong>
                Participanţii la trafic sunt obligaţi să anunţe administratorul drumului public ori cel mai apropiat 
                poliţist atunci c&acirc;nd au cunoştinţă despre existenţa pe drum a unui obstacol sau a oricărei altei 
                situaţii periculoase pentru fluenţa şi siguranţa circulaţiei.
            </p>
            <p>
                <strong>(2) </strong>
                Se interzice oricărei persoane să arunce, să lase sau să abandoneze obiecte, materiale ori substanţe sau 
                să creeze obstacole pe drumul public. Persoana care nu a putut evita crearea unui obstacol pe drumul public 
                este obligată să &icirc;l &icirc;nlăture şi, dacă nu este posibil, să &icirc;i semnalizeze prezenţa şi să 
                anunţe imediat administratorul drumului public şi cea mai apropiată unitate de poliţie.
            </p>
            <h2>Regulament - Articolul 97</h2>
            <p>
                <strong>(3)</strong>
                Se interzice conducătorilor de autovehicule, tractoare agricole sau forestiere, precum și persoanelor 
                care ocupa scaunul din față să tina &icirc;n brațe animale &icirc;n timpul deplasării pe drumurile publice.
                <u>
                    <em>
                        <strong>
                            (Alineatul (3) a fost modificat n lege și actualizat și pe Școala Rutieră la 06-10-2021) 
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(4)</strong>
                Se exceptează de la obligaţia de a purta centura de siguranţă:
            </p>
            <p>
                <strong>a)</strong>
                conducătorii de autoturisme pe timpul executării manevrei de mers &icirc;napoi sau care staţionează;<br/>
                <strong>b)</strong>
                femeile &icirc;n stare vizibilă de graviditate;<br/>
                <strong>c)</strong>
                conducătorii de autoturisme care executa servicii de transport public de persoane, &icirc;n regim de 
                taxi, c&acirc;nd transporta pasageri;<br/>
                <strong>d)</strong>
                persoanele care au certificat medical &icirc;n care să fie menţionată afecţiunea care contraindică 
                purtarea centurii de siguranţă;<br/>
                <strong>e)</strong>
                instructorii auto, pe timpul pregătirii practice a persoanelor care &icirc;nvăţa să conducă un autovehicul 
                pe drumurile publice sau examinatorul din cadrul autorităţii competente &icirc;n timpul desfăşurării probelor 
                practice ale examenului pentru obţinerea permisului de conducere.
            </p>
            <p>
                <strong>(5)</strong>
                Persoanele prevăzute la alin. (4) lit. d) sunt obligate să aibă asupra lor certificatul medical, &icirc;n 
                conţinutul căruia trebuie să fie menţionată durata de valabilitate a acestuia.
            </p>
            <h2>Regulament - Articolul 113</h2>
            <p>
                <strong>(1)</strong>
                Mijloacele de avertizare sonoră trebuie folosite de la o distanţă de cel puţin 25 m faţă de cei cărora li 
                se adresează, pe o durata de timp care să asigure perceperea semnalului şi fără să &icirc;i determine 
                pe aceştia la manevre ce pot pune &icirc;n pericol siguranţa circulaţiei.
            </p>
            <p>
                <strong>(2) </strong>
                Semnalizarea cu mijloacele de avertizare sonoră nu poate fi folosită &icirc;n zonele de acţiune a 
                indicatorului Claxonarea interzisă.
            </p>
            <p>
                <strong>(3)</strong>
                Se exceptează de la prevederile alin. (2):
            </p>
            <p>
                <strong>a)</strong>
                conducătorii autovehiculelor cu regim de circulaţie prioritară c&acirc;nd se deplasează &icirc;n acţiuni 
                de intervenţii sau &icirc;n misiuni care au caracter de urgenţă;<br/>
                <strong>b)</strong>
                conducătorii autovehiculelor care folosesc acest semnal pentru evitarea unui pericol imediat.
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