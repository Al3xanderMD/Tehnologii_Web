<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 39;
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
            <h1>Capitolul 9 - partea 3 - Obligațiile conducătorilor auto la transportul copiilor</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c9_p4.php" class="vezi-buton">Lectia urmatoare</a>
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
                <strong>(1^3)</strong>
                Conducătorilor de autovehicule le este interzis să transporte copii &icirc;n v&acirc;rstă de p&acirc;nă 
                la 3 ani &icirc;n autovehicule care nu sunt echipate cu sisteme de siguranţă, cu excepţia celor destinate 
                transportului public de persoane, precum şi a taxiurilor dacă &icirc;n acestea din urmă ocupă orice alt 
                loc dec&acirc;t cel de pe scaunul din faţă, &icirc;n condiţiile prevăzute &icirc;n regulament. Copiii cu 
                v&acirc;rsta de peste 3 ani, av&acirc;nd o &icirc;nălţime de p &acirc;nă la 150 cm, pot fi transportaţi 
                &icirc;n autovehicule care nu sunt echipate cu sisteme de siguranţă doar dacă ocupă, pe timpul transportului, 
                orice alt loc dec &acirc;t cel de pe scaunul din faţă.
            </p>
            <p>&nbsp;</p>
            <h2>Regulament - Articolul 97</h2>
            <p>
                <strong>(1)</strong>
                Copiii cu o &icirc;nălţime de p&acirc;nă la 135 cm pot fi transportaţi &icirc;n autovehicule echipate 
                cu sisteme de siguranţă pentru conducător şi pasageri, denumite &icirc;n continuare sisteme de siguranţă, 
                doar dacă sunt fixaţi sau prinşi cu ajutorul unui dispozitiv de fixare &icirc;n scaun pentru copii instalat 
                &icirc;n autovehicul.
            </p>
            <p>
                <strong>(1^1)</strong>
                Dispoziţiile alin. (1) nu se aplică &icirc;n cazul transportului &icirc;n autovehicule destinate 
                transportului public de persoane, precum şi &icirc;n taxi, dacă &icirc;n acesta din urmă copilul 
                ocupă orice alt loc dec&acirc;t cel de pe scaunul din faţă. Transportul copilului &icirc;n v&acirc;rstă de 
                p&acirc;nă la 3 ani, &icirc;n acest caz, se realizează sub supravegherea unei persoane, alta dec&acirc;t 
                conducătorul de autovehicul.
            </p>
            <p>
                <strong>(1^2)</strong>
                Copiii cu o &icirc;nălţime de peste 135 cm pot fi transportaţi &icirc;n autovehicule echipate cu sisteme 
                de siguranţă doar dacă poartă centuri de siguranţă pentru adulţi, reglate astfel &icirc;nc&acirc;t să nu 
                treacă peste zona g&acirc;tului sau feţei, ori dacă sunt fixaţi sau prinşi cu ajutorul unui dispozitiv de 
                fixare &icirc;n scaun pentru copii instalat &icirc;n autovehicul.
            </p>
            <p>
                <strong>(1^3)</strong>
                Prin dispozitiv de fixare &icirc;n scaun pentru copii, &icirc;n sensul prezentului articol, se &icirc;nţelege 
                un ansamblu de componente capabil să fixeze un copil &icirc;n poziţia şezut sau culcat, care poate cuprinde 
                o combinaţie de chingi ori elemente flexibile cu o cataramă de fixare, dispozitive de reglare, elemente de 
                prindere şi, &icirc;n unele cazuri, un scaun suplimentar şi/sau un scut pentru impact, ce poate fi ancorat 
                la un autovehicul, ori un sistem constituit dintr-un dispozitiv parţial de fixare &icirc;n scaun utilizat 
                &icirc;mpreună cu centura de siguranţă cu rol de prindere a copilului sau de fixare a dispozitivului, cum 
                ar fi, fără a se limita la acestea, scaun de siguranţă pentru copii, pernă de &icirc;nălţare, care poate 
                fi folosită &icirc;mpreună cu o centură de siguranţă pentru adulţi, portbebe-coşuleţ pentru sugari, scaun 
                pentru sugari, chingă de ghidare, precum şi centură şi sisteme de centuri pentru copii.
            </p>
            <p>
                <strong>(1^4)</strong>
                Dispozitivul de fixare &icirc;n scaun pentru copii prevăzut la alin. (1) şi (1^2) trebuie să fie omologat 
                şi adecvat pentru caracteristicile fizice ale copiilor. Clasificarea, reglementările privind standardele de 
                omologare şi utilizarea acestor dispozitive &icirc;n funcţie de grupele de masă şi componenţa sistemelor sunt 
                prevăzute &icirc;n anexa nr. 1F.
            </p>
            <p>
                <strong>(1^5)</strong>
                Dispozitivul de fixare &icirc;n scaun pentru copii se instalează pe locurile din spate ale autovehiculului, 
                &icirc;n conformitate cu instrucţiunile de montare furnizate de către producătorul acestuia, cum ar fi manual, 
                prospect sau publicaţia electronică cu instrucţiuni care indică &icirc;n ce mod şi &icirc;n care tipuri de 
                autovehicule poate fi folosit sistemul &icirc;n condiţii de siguranţă.
            </p>
            <p>
                <strong>(1^6) </strong>
                Prin excepţie de la prevederile alin. (1^5), tipurile de dispozitiv de fixare &icirc;n scaun pentru copii care, 
                potrivit instrucţiunilor producătorului, pot fi montate inclusiv pe locul din faţă destinat pasagerilor prin 
                orientarea cu faţa spre direcţia opusă direcţiei normale de deplasare a autovehiculului se instalează pe acest 
                loc doar &icirc;n situaţia &icirc;n care conducătorul dezactivează airbagul frontal corespunzător locului, 
                chiar şi &icirc;n cazul autovehiculului prevăzut cu un mecanism care detectează &icirc;n mod automat prezenţa 
                dispozitivului instalat şi blochează declanşarea airbagului frontal corespunzător locului, sau dacă autovehiculul 
                nu este echipat cu airbag frontal corespunzător locului.
            </p>
            <p>
                <strong>(1^7)</strong>
                Dispoziţiile prevăzute la alin. (1^6) se aplică &icirc;n mod corespunzător şi &icirc;n cazul tipurilor de 
                dispozitiv de fixare &icirc;n scaun pentru copii care, potrivit instrucţiunilor producătorului, pot fi 
                montate inclusiv pe locul din faţă destinat pasagerilor prin orientarea cu faţa spre direcţia normală de 
                deplasare a autovehiculului.
            </p>
            <p>
                <strong>(1^8)</strong>
                Se exceptează de la obligaţia de a fi fixat sau prins cu ajutorul unui dispozitiv de fixare &icirc;n scaun 
                pentru copii ori de a purta centura de siguranţă pe timpul transportului copilul pentru care este eliberat 
                un certificat medical de scutire pe motiv medical grav &icirc;n care să fie menţionată afecţiunea care 
                contraindică purtarea acestor sisteme de siguranţă.
            </p>
            <p>
                <strong>(1^9)</strong>
                Transportul copilului &icirc;n condiţiile prevăzute la alin. (1^8) se realizează pe locurile din spate 
                ale autovehiculului. &Icirc;n cazul copilului &icirc;n v&acirc;rstă de p&acirc;nă la 3 ani, transportul 
                se realizează sub supravegherea unei persoane, alta dec&acirc;t conducătorul de autovehicul.
            </p>
            <p>
                <strong>(1^10)</strong>
                Conducătorul de autovehicul care transportă un copil &icirc;n condiţiile prevăzute la alin. (1^8) are 
                obligaţia să aibă asupra sa certificatul medical, &icirc;n conţinutul căruia trebuie să fie menţionată 
                durata de valabilitate a acestuia. Dispoziţiile prevăzute la alin. (6) se aplică &icirc;n mod corespunzător.
            </p>
            <p>
                <strong>(2)</strong>
                Copiii &icirc;n v &acirc;rstă de p &acirc;nă la 3 ani nu pot fi transportaţi &icirc;n autovehicule care 
                nu sunt echipate cu sisteme de siguranţă.
            </p>
            <p>
                <strong>(2^1)</strong>
                Prin excepţie de la prevederile alin. (2), copiii &icirc;n v&acirc;rstă de p&acirc;nă la 3 ani pot fi 
                transportaţi sub supravegherea unei persoane, alta dec &acirc;t conducătorul de autovehicul, &icirc;n 
                autovehicule destinate transportului public de persoane, precum şi &icirc;n taxi dacă &icirc;n acesta 
                din urmă ocupă orice alt loc dec &acirc;t cel de pe scaunul din faţă.
            </p>
            <p>
                <strong>(2^2)</strong>
                Prin excepţie de la prevederile alin. (2), copiii &icirc;n v&acirc;rstă de p&acirc;nă la 3 ani pentru 
                care este eliberat certificatul medical prevăzut la alin. (1^8) sunt transportaţi &icirc;n autovehicule 
                care nu sunt echipate cu sisteme de siguranţă pe locurile din spate ale acestuia, sub supravegherea unei 
                persoane, alta dec&acirc;t conducătorul de autovehicul. Dispoziţiile prevăzute la alin. (1^10) se aplică 
                &icirc;n mod corespunzător.
            </p>
            <p>
                <strong>(2^3)</strong>
                Copiii cu v&acirc;rsta de peste 3 ani, av&acirc;nd o &icirc;nălţime de p&acirc;nă la 150 cm, pot fi 
                transportaţi &icirc;n autovehicule care nu sunt echipate cu sisteme de siguranţă doar dacă ocupă, pe timpul 
                transportului, orice alt loc dec&acirc;t cel de pe scaunele din faţă.
            </p>
            <h2>Regulament - Articolul 98</h2>
            <p>
                <strong>(2)</strong>
                Copiii &icirc;n v&acirc;rsta de p&acirc;nă la 7 ani, dacă sunt ţinuţi &icirc;n braţe, precum şi cei de 
                p&acirc;nă la 14 ani se transporta numai &icirc;n ataşul motocicletelor.
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