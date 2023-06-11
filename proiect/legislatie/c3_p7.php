
<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 10;
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
            <h1>Capitolul 3 - partea 7 - Marcaje rutiere</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/TC6V87gfsRQ">
            </iframe>                                   
        </div>
        <div>
            <a href="c4_p1.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>Regulament - Articolul 75</h2>
            <p>
                <strong>(1)</strong>
                Marcajele servesc la organizarea circulaţiei, avertizarea sau &icirc;ndrumarea participanţilor 
                la trafic. Acestea pot fi folosite singure sau &icirc;mpreună cu alte mijloace de semnalizare 
                rutieră pe care le completează sau le precizează semnificaţia.
            </p>
            <h2>Regulament - Articolul 77</h2>
            <p>
                <strong>(2)</strong>
                Marcajul longitudinal format dintr-o linie continuă simplă sau dublă interzice &icirc;ncălcarea 
                acestuia.
            </p>
            <p>
                <strong>(3)</strong>
                Marcajul format dintr-o linie continuă aplicată pe bordura trotuarului sau la marginea părţii 
                carosabile interzice staţionarea vehiculelor pe acea parte a drumului. C&acirc;nd o asemenea 
                linie &icirc;nsoţeşte un indicator de interzicere a staţionării, aceasta precizează lungimea 
                sectorului de drum pe care este valabilă interzicerea.
            </p>
            <p>
                <strong>(4)</strong>
                Marcajul longitudinal format din linii continue care delimitează banda pe care este aplicat 
                şi un marcaj simboliz &acirc;nd o anumită categorie sau anumite categorii de vehicule semnifică 
                faptul că banda este rezervată circulaţiei acelei sau acelor categorii de vehicule.
            </p>
            <h2>Regulament - Articolul 78</h2>
            <p>
                Marcajul longitudinal format dintr-o linie discontinuă simplă sau dublă permite trecerea 
                peste acesta, dacă manevra sau reglementările instituite impun acest lucru.
            </p>
            <h2>Regulament - Articolul 79</h2>
            <p>
                <strong>(1)</strong>
                Marcajul cu linie discontinuă poate fi simplu sau dublu şi se foloseşte &icirc;n următoarele 
                situaţii:
            </p>
            <p>
                <strong>a)</strong>
                marcajul cu linie discontinuă simplă:
            </p>
            <p>
                <strong>1.</strong>
                pentru separarea sensurilor de circulaţie, pe drumurile cu două benzi şi circulaţie &icirc;n 
                ambele sensuri;<br/>
                <strong>2.</strong>
                pentru separarea benzilor de circulaţie pe acelaşi sens, pe drumurile cu cel puţin două benzi 
                pe sens;<br/>
                <strong>3.</strong>
                pentru marcarea trecerii de la o linie discontinuă la una continuă. &Icirc;n localităţi acest 
                marcaj nu este obligatoriu;<br/>
                <strong>4.</strong>
                pentru a separa, pe autostrăzi, benzile de accelerare sau de decelerare de benzile curente de 
                circulaţie;<br/>
                <strong>5.</strong>
                pentru marcaje de ghidare &icirc;n intersecţii;
            </p>
            <p>
                <strong>b)</strong>
                marcajul cu linie discontinuă dublă, pentru delimitarea benzilor reversibile. Pe asemenea 
                benzi marcajul este &icirc;nsoţit de dispozitive luminoase speciale prevăzute la art. 56.
            </p>
            <p>
                <strong>(2)</strong>
                Linia continuă se foloseşte &icirc;n următoarele situaţii:
            </p>
            <p>
                <strong>a)</strong>
                linia continuă simplă, pentru separarea sensurilor de circulaţie, a benzilor de acelaşi sens 
                la apropierea de intersecţii şi &icirc;n zone periculoase;<br/>
                <strong>b)</strong>
                linia continuă dublă, pentru separarea sensurilor de circulaţie cu minimum două benzi pe 
                fiecare sens, precum şi la drumuri cu o bandă pe sens sau &icirc;n alte situaţii stabilite 
                de administratorul drumului respectiv, cu acordul poliţiei rutiere.
            </p>
            <p>
                <strong>(3)</strong>
                &Icirc;n cazul marcajului longitudinal format dintr-o linie continuă şi una discontinuă 
                alăturate, conducătorul de vehicul trebuie să respecte semnificaţia liniei celei mai apropiate 
                &icirc;n sensul de mers.
            </p>
            <h2>Regulament - Articolul 80</h2>
            <p>
                <strong>(1)</strong>
                Marcajele de delimitare a părţii carosabile sunt amplasate &icirc;n lungul drumului, se execută 
                la limita din dreapta a părţii carosabile &icirc;n sensul de mers, cu excepţia autostrăzilor 
                şi a drumurilor expres, unde marcajul se aplică şi pe partea st &acirc;nga, l &acirc;ngă mijlocul 
                fizic de separare a sensurilor de circulaţie. Aceste marcaje pot fi cu linie continuă sau 
                discontinuă simplă.
            </p>
            <p>
                <strong>(3)</strong>
                Marcajele pentru interzicerea staţionării se pot realiza:
            </p>
            <p>
                <strong>a)</strong>
                prin linie continuă galbenă aplicată pe bordura trotuarului sau pe banda de consolidare a 
                acostamentului, dubl &acirc;nd marcajul de delimitare a părţii carosabile spre exteriorul 
                platformei drumului;<br/>
                <strong>b)</strong>
                printr-o linie &icirc;n zig-zag la marginea părţii carosabile.
            </p>
            <p>
                <strong>(4)</strong>
                Marcajele prin săgeţi sunt folosite pentru:
            </p>
            <p>
                <strong>a)</strong>
                selectarea pe benzi;<br/>
                <strong>b)</strong>
                schimbarea benzii (banda de accelerare, banda suplimentară pentru vehicule lente, banda care 
                se suprimă prin &icirc;ngustarea părţii carosabile);<br/>
                <strong>c)</strong>
                repliere, numai &icirc;n afara localităţilor pe drumuri cu o bandă pe sens şi dublu sens de 
                circulaţie.
            </p>
            <h2>Regulament - Articolul 81</h2>
            <p>
                <strong>(1)</strong>
                Marcajul transversal const &acirc;nd dintr-o linie continuă, aplicată pe lăţimea uneia sau 
                mai multor benzi, indică linia &icirc;naintea căreia vehiculul trebuie oprit la &icirc;nt 
                &acirc;lnirea indicatorului Oprire. Un asemenea marcaj poate fi folosit pentru 
                a indică linia de oprire impusă printr-un semnal luminos, printr-o comandă a agentului care 
                dirijează circulaţia, de prezenţa unei treceri la nivel cu o cale ferată, cu o linie de tramvai 
                sau a unei treceri pentru pietoni. &Icirc;naintea marcajului ce &icirc;nsoţeşte indicatorul 
                Oprire se poate aplica pe partea carosabilă inscripţia Stop.
            </p>
            <p>
                <strong>(2)</strong>
                Marcajul transversal const &acirc;nd dintr-o linie discontinuă, aplicată pe lăţimea uneia sau
                 mai multor benzi, indică linia care nu trebuie depăşită atunci c&acirc;nd se impune cedarea
                  trecerii. &Icirc;naintea unei asemenea linii se poate aplica pe partea carosabilă un marcaj
                   sub forma de triunghi av &acirc;nd o latura paralela cu linia discontinuă, iar v&acirc;rful 
                   &icirc;ndreptat spre vehiculul care se apropie.
            </p>
            <p>
                <strong>(3)</strong>
                Marcajul transversal const&acirc;nd din linii paralele cu axul drumului indică locul pe unde
                 pietonii trebuie să traverseze drumul. Aceste linii au lăţimea mai mare dec&acirc;t a oricăror 
                 alte marcaje.
            </p>
            <p>
                <strong>(4)</strong>
                Marcajul transversal const&acirc;nd din linii discontinue paralele, aplicate perpendicular 
                sau oblic față de axul drumului, indică locul destinat traversării părții carosabile de către 
                conducători de biciclete sau trotinete electrice.
                <u>
                    <em>
                        <strong>
                            (Alineatul (4) din Articolul 81 a fost modificat și actualizat pe 
                            www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>Regulament - Articolul 82</h2>
            <p>
                <strong>(2)</strong>
                Pe autostrăzi, pe drumurile expres şi pe drumuri naţionale deschise traficului 
                internaţional (E), la extremităţile părţii carosabile se aplică marcaje rezonatoare 
                pentru avertizarea conducătorilor de autovehicule la ieşirea de pe partea carosabilă.
            </p>
            <h2>Regulament - Articolul 83</h2>
            <p>
                <strong>(2)</strong>
                Marcajul sub forma unei sau unor săgeţi, aplicat pe banda ori pe benzile delimitate 
                prin linii continue, obliga la urmarea direcţiei sau direcţiilor astfel indicate. Săgeata 
                de repliere care este oblică faţă de axul drumului, aplicată pe o bandă sau intercalată 
                &icirc;ntr-un marcaj longitudinal format din linii discontinue, semnalizează obligaţia ca 
                vehiculul care nu se află pe bandă indicată de săgeata să fie condus pe acea bandă.
            </p>
            <p>
                <strong>(3)</strong>
                Marcajul format dintr-o linie &icirc;n zigzag semnifică interzicerea staționării vehiculelor 
                pe partea drumului pe care este aplicat. O astfel de linie completată cu &icirc;nscrisul 
                &laquo;Bus&raquo;, &laquo;Taxi&raquo; sau &laquo;Tram&raquo; poate fi folosită pentru 
                semnalizarea stațiilor de autobuze, troleibuze, taximetre, respectiv a stațiilor de tramvaie 
                care nu sunt prevăzute cu refugiu pentru pietoni.
                <u>
                    <em>
                        <strong>
                            (Alineatul (3) a fost modificat și actualizat și pe Școala Rutieră la 17-02-2023)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(4)</strong>
                Marcajul aplicat &icirc;n afara benzilor, format din linii paralele, &icirc;nconjurate sau nu 
                cu o linie de contur, delimitează spaţiul interzis circulaţiei.
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