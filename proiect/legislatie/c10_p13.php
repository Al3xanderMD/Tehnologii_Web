<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 61;
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
            <h1>Capitolul 10 - partea 13 - Alte sancțiuni (punctele de penalizare, interdicția de aconduce pe teritoriul României și 
                reținerea / retragerea / suspendarea / anularea permisului de conducere)</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p14.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>
                <strong>OUG - Articolul 103</strong>
            </h2>
            <p>
                <strong>(1)</strong>
                Suspendarea exercitării dreptului de a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie se dispune:
            </p>
            <p>
                <strong>a)</strong>
                pentru o perioada de 30 de zile, dacă titularul permisului de conducere a săv&acirc;rşit contravenţii care cumulează 15 puncte 
                de penalizare;<br/>
                <strong>b)</strong>
                pentru o perioada de 60 de zile, dacă titularul permisului de conducere cumulează din nou cel puţin 15 puncte de penalizare &icirc;n 
                următoarele 12 luni de la data expirării ultimei suspendări a exercitării dreptului de a conduce.<br/>
                <strong>c) </strong>
                pentru o perioadă de 180 de zile c&acirc;nd fapta conducătorului de autovehicul sau tramvai a fost urmărită ca infracțiune contra 
                siguranței circulației pe drumurile publice și procurorul sau instanța de judecată a dispus clasarea &icirc;n condițiile art. 16 alin. 
                (1) lit. b) teza a II-a din Codul de procedură penală, renunțarea la urmărirea penală, renunțarea la aplicarea pedepsei sau 
                am&acirc;narea aplicării pedepsei dacă nu a fost dispusă obligația prevăzută la art. 85 alin. (2) lit. g) din Codul penal;<br/>
                <strong>d)</strong>
                pentru o perioadă de 180 de zile &icirc;n cazul accidentului de circulație din care a rezultat decesul sau vătămarea corporală 
                a unei persoane dacă a fost &icirc;ncălcată o regulă de circulație pentru care prezenta ordonanță de urgență prevede suspendarea 
                exercitării dreptului de a conduce și instanța de judecată sau procurorul a dispus clasarea &icirc;n condițiile art. 16 alin. (1) 
                lit. b), e) și g) din Codul de procedură penală, renunțarea la urmărirea penală, renunțarea la aplicarea pedepsei sau am&acirc;narea 
                aplicării pedepsei dacă nu a fost dispusă obligația prevăzută la art. 85 alin. (2) lit. g) din Codul penal ori &icirc;ncetarea 
                procesului penal &icirc;n condițiile art. 16 alin. (1) lit. e) și g) din Codul de procedură penală;<br/>
                <strong>e)</strong>
                abrogat (
                <s>
                    pentru o perioadă de 180 de zile, c &acirc;nd titularul permisului de conducere a fost condamnat printr-o hotăr&acirc;re 
                    judecătorească rămasă definitivă pentru infracțiunile prevăzute la art. 334 alin. (1) și (3) din Codul penal.
                </s>
            </p>
            <p>
                <strong>(4)</strong>
                Punctele de penalizare se anulează la &icirc;mplinirea termenului de 6 luni de la data constatării contravenției. &Icirc;n 
                situația &icirc;n care a fost depusă pl&acirc;ngere &icirc;mpotriva procesuluiverbal de constatare și sancționare a contravenției 
                prin care au fost aplicate oricare dintre punctele de penalizare care conduc la realizarea cumulului prevăzut la alin. (1) lit. a), 
                curgerea termenului de anulare se suspendă de drept pentru toate punctele de penalizare care &icirc;l alcătuiesc, de la data 
                &icirc;nregistrării acestei pl&acirc;ngeri la instanța de judecată p&acirc;nă la data răm&acirc;nerii definitive a hotăr&acirc;rii 
                judecătorești prin care instanța a respins pl&acirc;ngerea contravențională sau a admis-o &icirc;n parte, mențin&acirc;nd 
                sancțiunea contravențională complementară aplicată.
            </p>
            <p>
                <strong>(5)</strong>
                Suspendarea exercitării dreptului de a conduce prevăzută la alin. (1) lit. a) și b) anulează toate punctele de penalizare 
                acumulate p&acirc;nă &icirc;n acel moment.
            </p>
            <h2>
                <strong>OUG - Articolul 108</strong>
            </h2>
            <p>
                <strong>(1)</strong>
                Săv&acirc;rşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a uneia sau mai multor 
                contravenţii atrage, pe l&acirc;ngă sancţiunea amenzii, şi aplicarea unui număr de puncte de penalizare, după cum urmează:
            </p>
            <p>
                <strong>a) 2 puncte de penalizare pentru săv&acirc;rşirea următoarelor fapte:</strong>
            </p>
            <p>
                <strong>1. </strong>
                folosirea incorectă a luminilor de drum la &icirc;nt&acirc;lnirea cu un autovehicul şi tractor agricol sau forestier care circulă 
                din sens opus;<br/>
                <strong>2. </strong>
                abrogat; la 4 puncte de penalizare <br/>
                <strong>3. </strong>
                nerespectarea obligaţiei de a purta, &icirc;n timpul circulaţiei pe drumurile publice, centura de siguranţă ori căştile de protecţie 
                omologate, după caz;<br/>
                <strong>4.</strong>
                depăşirea cu 10-20 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul 
                condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;<br/>
                <strong>5. </strong>
                circulaţia pe un sector de drum pe care accesul este interzis;<br/>
                <strong>6. </strong>
                nerespectarea regulilor privind manevra de &icirc;ntoarcere, mersul &icirc;napoi, schimbarea benzii de circulaţie sau a direcţiei 
                de mers;<br/>
                <strong>7. </strong>
                nerespectarea obligației de a folosi și pe timpul zilei luminile de &icirc;nt&acirc;lnire sau luminile pentru circulația diurnă, 
                pe autostrăzi, drumuri expres și pe drumuri naționale europene (E);<br/>
                <strong>8. </strong>
                oprirea neregulamentară;<br/>
                <strong>9. </strong>
                folosirea incorectă a luminilor de drum faţă de autovehiculul şi tractorul agricol sau forestier care circulă &icirc;n faţa sa, 
                &icirc;n aceeaşi direcţie de mers.
            </p>
            <p>
                <strong>b) 3 puncte de penalizare pentru săv &acirc;rşirea următoarelor fapte:</strong>
            </p>
            <p>
                <strong>1.</strong>
                oprirea nejustificată pe banda de urgență a autostrăzilor ori oprirea pe partea carosabilă a drumurilor expres sau a drumurilor 
                naționale europene (E);<br/>
                <strong>2. </strong>
                depăşirea cu 21-30 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul 
                condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;<br/>
                <strong>3.</strong>
                nerespectarea regulilor privind manevra de &icirc;ntoarcere, mersul &icirc;napoi, schimbarea benzii de circulaţie sau a direcţiei 
                de mers, dacă prin aceasta s-a produs un accident din care au rezultat avarierea unui vehicul sau alte pagube materiale;<br/>
                <strong>4.</strong>
                nepăstrarea unei distante corespunzătoare faţă de vehiculul care &icirc;l precede, dacă prin aceasta s-a produs un accident din 
                care au rezultat avarierea unui vehicul sau alte pagube materiale;<br/>
                <strong>5. </strong>
                nerespectarea semnificației indicatorului &bdquo;ocolire&ldquo;, instalat pe refugiul stațiilor de tramvai, cu excepția conducătorului 
                de autovehicul destinat transportului public de persoane prin servicii regulate, &icirc;n cazul &icirc;n care stațiile celor două 
                mijloace de transport călători coincid;<br/>
                <strong>6.</strong>
                pătrunderea &icirc;ntr-o intersecţie atunci c&acirc;nd circulaţia &icirc;n interiorul acesteia este blocată;<br/>
                <strong>7. </strong>
                staţionarea neregulamentară;<br/>
                <strong>8.</strong>
                folosirea luminilor de ceaţă &icirc;n alte condiţii dec &acirc;t pe timp de ceaţă;<br/>
                <strong>9.</strong>
                nerespectarea obligaţiei conducătorului de autovehicul de se asigura că persoanele minore poartă centuri de siguranţă sau sunt 
                transportate &icirc;n dispozitive de fixare &icirc;n scaune pentru copii omologate, &icirc;n condiţiile prevăzute de regulament;<br/>
                <strong>10.</strong>
                nerespectarea dispoziţiilor art. 36 alin. (1^3) sau a condiţiilor prevăzute de regulament privind transportul copiilor &icirc;n 
                autovehicule care nu sunt echipate cu sisteme de siguranţă;<br/>
                <strong>11.</strong>
                nerespectarea obligației de a acționa fr&acirc;na de ajutor, de a opri funcționarea motorului și de a cupla &icirc;ntr-o treaptă 
                de viteză inferioară sau &icirc;n cea de parcare dacă autovehiculul are transmisie automată, atunci c&acirc;nd conducătorul 
                vehiculului imobilizat pe drum public se &icirc;ndepărtează de acesta.
            </p>
            <p>
                <strong>c) 4 puncte de penalizare pentru săv&acirc;rşirea următoarelor fapte:</strong>
            </p>
            <p>
                <strong>1.</strong>
                nerespectarea obligaţiilor care &icirc;i revin &icirc;n cazul vehiculelor ramase &icirc;n pană sau avariate;<br/>
                <strong>2.</strong>
                refuzul &icirc;nm&acirc;nării actului de identitate, permisului de conducere, certificatului de &icirc;nmatriculare sau de 
                &icirc;nregistrare, a celorlalte documente prevăzute de lege, la cererea poliţistului rutier, precum şi refuzul de a permite 
                verificarea vehiculului;<br/>
                <strong>3.</strong>
                depăşirea cu 31-40 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul 
                condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;<br/>
                <strong>4. </strong>
                circulaţia &icirc;n timpul nopţii sau ziua, pe timp de ceaţă, ninsoare abundentă sau ploaie torenţială, cu un autovehicul şi 
                tractor agricol sau forestier fără lumini sau fără semnalizare corespunzătoare;<br/>
                <strong>5.</strong>
                conducerea unui autovehicul și tractor agricol sau forestier sau tractarea unei remorci atunci c&acirc;nd circulația acestora 
                pe drumurile publice este interzisă potrivit art. 15 alin. (5), cu excepția cazurilor &icirc;n care vehiculul, &icirc;nmatriculat 
                sau &icirc;nregistrat, nu are montate plăcuțe cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare atribuite de autoritatea 
                competentă ori dacă acestea nu sunt conforme cu standardele &icirc;n vigoare;<br/>
                <strong>6.</strong>
                folosirea telefoanelor mobile atunci c &acirc;nd conducătorii de vehicule se află &icirc;n timpul deplasării pe drumurile publice, 
                cu excepția celor prevăzute cu dispozitive tip &laquo;m&acirc;ini libere&raquo;.
            </p>
            <p>
                <strong>d) 6 puncte de penalizare pentru săv &acirc;rşirea următoarelor fapte:</strong>
            </p>
            <p>
                <strong>1.</strong>
                refuzul de a permite imobilizarea vehiculului sau verificarea tehnică a acestuia;<br/>
                <strong>2.</strong>
                nerespectarea semnificaţiei semnalelor regulamentare ale agenţilor de cale ferată care dirijează circulaţia la trecerile la nivel 
                cu calea ferată;<br/>
                <strong>3.</strong>
                depăşirea cu 41-50 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face parte autovehiculul 
                condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;<br/>
                <strong>4.</strong>
                conducerea pe drumurile publice a unui vehicul fără a avea montată una dintre plăcuţele cu numărul de &icirc;nmatriculare 
                sau de &icirc;nregistrare ori dacă plăcuţele cu numărul de &icirc;nmatriculare ori de &icirc;nregistrare nu sunt fixate &icirc;n 
                locurile special destinate;<br/>
                <strong>5.</strong>
                circulația sau staționarea pe spațiul interzis care separă sensurile de circulație pe autostradă sau pe drumul expres;<br/>
                <strong>6.</strong>
                staționarea ori parcarea autovehiculelor pe autostradă sau pe drumul expres &icirc;n alte locuri dec &acirc;t cele special 
                amenajate și semnalizate;<br/>
                <strong>7.</strong>
                abrogat (<s>executarea pe autostrada a manevrei de &icirc;ntoarcere sau de mers &icirc;napoi, circulaţia sau traversarea de pe un 
                    sens de circulaţie pe celălalt prin zonele interzise, respectiv prin zona mediană sau racordurile dintre cele două părţi carosabile)</s>;<br/>
                <strong>8.</strong>
                nerespectarea semnificaţiei indicatoarelor Trecere la nivel cu o cale ferată simplă, fără bariere; Trecere la nivel cu o cale 
                ferată dubla, fără bariere sau Oprire, instalate la trecerea la nivel cu o cale ferată;<br/>
                <strong>9.</strong>
                schimbarea direcţiei de mers prin viraj spre st&acirc;nga, dacă prin aceasta se &icirc;ncalcă marcajul longitudinal continuu care 
                separa sensurile de circulaţie;<br/>
                <strong>10.</strong>
                pătrunderea &icirc;ntr-o intersecţie dirijată prin semafoare, dacă prin aceasta se produce blocarea circulaţiei &icirc;n interiorul 
                intersecţiei.
            </p>
            <h2>
                <strong>OUG - Articolul 111</strong>
            </h2>
            <p>
                <strong>(1) </strong>
                Permisul de conducere sau dovada &icirc;nlocuitoare a acestuia se reţine &icirc;n următoarele cazuri:
            </p>
            <p>
                <strong>a)</strong>
                la cumularea a cel puţin 15 puncte de penalizare;<br/>
                <strong>b)</strong>
                c&acirc;nd titularul acestuia a săv&acirc;rşit una dintre infracţiunile prevăzute la art. 334, art. 335 alin. (2), art. 336, 
                337, art. 338 alin. (1) şi la art. 339 alin. (2), (3) şi (4) din Codul penal;<br/>
                <strong>c) </strong>
                la săv &acirc;rșirea uneia dintre contravențiile prevăzute la art. 100 alin. (3), art. 101 alin. (3), art. 102 alin. (3) și (4) 
                și &icirc;n situația prevăzută la art. 115 alin. (1);<br/>
                <strong>d)</strong>
                c&acirc;nd titularul acestuia a fost declarat inapt pentru a conduce autovehicule, tractoare agricole sau forestiere ori tramvaie;<br/>
                <strong>e)</strong>
                c&acirc;nd prezintă modificări, ştersături sau adăugări ori este deteriorat;<br/>
                <strong>f) </strong>
                abrogat (<s>c &acirc;nd se află &icirc;n mod nejustificat asupra altei persoane</s>);<br/>
                <strong>g)</strong>
                c&acirc;nd perioada de valabilitate a expirat.
            </p>
            <p>
                <strong>(2)</strong>
                La reţinerea permisului de conducere, &icirc;n cazurile prevăzute la alin. (1), titularului acestuia i se eliberează o dovadă 
                &icirc;nlocuitoare cu sau fără drept de circulaţie.
            </p>
            <p>
                <strong>(3)</strong>
                &Icirc;n situațiile prevăzute la alin. (1) lit. a) și d), la art. 102 alin. (3) lit. a) și la art. 102 alin. (4) din prezenta 
                ordonanță de urgență, precum și &icirc;n cele menționate la art. 334 alin. (2) și (4), art. 335 alin. (2), art. 336, 337,art. 
                338 alin. (1), art. 339 alin. (2), (3) și (4) din Codul penal, dovada &icirc;nlocuitoare a permisului de conducere se eliberează 
                fără drept de circulație.
            </p>
            <p>
                <strong>(4)</strong>
                Permisul de conducere al conducătorului de autovehicul, tractor agricol sau forestier ori tramvai, implicat &icirc;ntr-un accident 
                de circulație din care a rezultat uciderea sau vătămarea corporală a unei persoane, se reține de către poliția rutieră dacă acesta 
                a &icirc;ncălcat o regulă de circulație, eliber&acirc;ndu-se dovada &icirc;nlocuitoare fără drept de circulație, &icirc;n 
                situația &icirc;n care regula de circulație &icirc;ncălcată este una dintre cele prevăzute la art. 102 alin. (3) lit. a) sau 
                la art. 102 alin. (4), sau dovada &icirc;nlocuitoare cu drept de circulație pentru o perioadă de 15 zile, &icirc;n celelalte cazuri.
            </p>
            <p>
                <strong>(5)</strong>
                &Icirc;n situațiile prevăzute la alin. (1) lit. e) și g), la art. 100 alin. (3), la art. 101 alin. (3), la art. 102 alin. 
                (3) lit. b), e) și f) din prezenta ordonanță de urgență, precum și la art. 334 alin. (1) și (3) din Codul penal, dovada 
                &icirc;nlocuitoare a permisului de conducere se eliberează cu drept de circulație pentru o perioadă de 15 zile.
            </p>
            <h2>
                <strong>OUG - Articolul 97</strong>
            </h2>
            <p>
                <strong>(4)</strong>
                Retragerea permisului de conducere se dispune de către poliția rutieră &icirc;n cazurile prevăzute la art. 22 alin. 
                (6^3), (8) și art. 22^1.
            </p>
            <p>
                <strong>(5)</strong>
                Anularea permisului de conducere eliberat de autoritățile rom&acirc;ne se dispune de către poliția rutieră pe a cărei rază 
                de competență s-a produs una dintre faptele prevăzute la art. 114 alin. (1) și (2).
            </p>
            <p>
                <strong>(5^1)</strong>
                Interdicția de a conduce autovehicule pe teritoriul Rom&acirc;niei &icirc;n cazul titularului unui permis de conducere eliberat 
                de o autoritate străină se dispune de către poliția rutieră pe a cărei rază de competență s-a produs una dintre faptele prevăzute 
                la art. 114 alin. (1) lit. a), b) sau d)
            </p>
            <h2>
                <strong>OUG - Articolul 114</strong>
            </h2>
            <p>
                <strong>(1) </strong>
                Anularea permisului de conducere eliberat de autoritatea rom&acirc;nă se dispune &icirc;n următoarele cazuri:
            </p>
            <p>
                <strong>a)</strong>
                titularul permisului de conducere a fost condamnat printr-o hotăr&acirc;re judecătorească rămasă definitivă pentru o infracțiune 
                care a avut ca rezultat uciderea sau vătămarea corporala a unei persoane, săv&acirc;rșită ca urmare a nerespectării regulilor de 
                circulație;<br/>
                <strong>b)</strong>
                titularul permisului de conducere a fost condamnat, printro hotăr&acirc;re judecătorească rămasă definitivă, pentru infracțiunile 
                prevăzute la art. 334, art. 335 alin. (2), art. 336, art. 337, art. 338 alin. (1) și art. 339 alin. (2)-(4) din Codul penal;<br/>
                <strong>c)</strong>
                abrogată;<br/>
                <strong>d)</strong>
                titularului permisului de conducere i s-a aplicat, printr-o hotăr &acirc;re judecătorească rămasă definitivă, pedeapsa complementară 
                a interzicerii dreptului de a conduce anumite categorii de vehicule stabilite de instanță prevăzută la art. 66 alin. (1) lit. i) din 
                Codul penal.<br/>
                <strong>e)</strong>
                permisul de conducere a fost obținut cu &icirc;ncălcarea normelor legale, situație constatată de instanța competentă.<br/>
                <strong>f)</strong>
                permisul de conducere a fost obținut &icirc;n perioada &icirc;n care titularul era cercetat sau judecat &icirc;n cadrul unui 
                proces penal pentru săv&acirc;rșirea uneia dintre infracțiunile prevăzute la art. 334, art. 335 alin. (1) și (2), art. 336, 
                art. 337, art. 338 alin. (1) și art. 339 alin. (2)-(4) din Codul penal sau pentru săv &acirc;rșirea unei infracțiuni care a 
                avut ca rezultat uciderea sau vătămarea corporală a unei persoane, săv &acirc;rșită ca urmare a nerespectării regulilor de 
                circulație, atunci c&acirc;nd acesta a fost condamnat printr-o hotăr &acirc;re judecătorească rămasă definitivă.
            </p>
            <p>
                <strong>(2)</strong>
                Permisul de conducere se anulează şi &icirc;n cazul &icirc;n care titularul acestuia a decedat.
            </p>
            <h2>
                <strong>OUG - Articolul 114^1</strong>
            </h2>
            <p>
                &Icirc;n cazul titularului unui permis de conducere eliberat de o autoritate străină, dacă acesta se află &icirc;n unul dintre 
                cazurile prevăzute la art. 114 alin. (1) lit. a), b) sau d), se dispune interdicția de a conduce autovehicule pe teritoriul 
                Rom&acirc;niei pe o perioadă de 1 an, &icirc;ncep&acirc;nd cu ziua imediat următoare datei răm&acirc;nerii definitive a 
                hotăr&acirc;rii judecătorești, &icirc;n condițiile stabilite prin regulament.
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