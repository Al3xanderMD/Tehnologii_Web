<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 58;
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
            <h1>Capitolul 10 - partea 10 - Contravenții - clasa 3</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p11.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 101</h2>
            <p>
                <strong>(1) </strong>
                Constituie contravenţii şi se sancţionează cu amenda prevăzută &icirc;n clasa a III-a de sancţiuni următoarele 
                fapte săv&acirc;rşite de persoane fizice:
            </p>
            <p>
                <strong>1.</strong>
                conducerea unui autovehicul şi tractor agricol sau forestier cu permis de conducere a cărui valabilitate a 
                expirat;<br/>
                <strong>2.</strong>
                abrogat.<br/>
                <strong>3.</strong>
                <s>conducerea unui autovehicul de către o persoană cu domiciliul &icirc;n Rom &acirc;nia care nu a preschimbat 
                    permisul de conducere obţinut &icirc;n alt stat, &icirc;n termenul prevăzut de lege;</s>
                <br/>
                <strong>4. </strong>
                ne&icirc;ndeplinirea obligaţiilor de preschimbare a certificatului de &icirc;nmatriculare sau de 
                &icirc;nregistrare a autovehiculului şi tractorului agricol sau forestier ori remorcii &icirc;n cazurile 
                prevăzute de lege;<br/>
                <strong>5.</strong>
                nepăstrarea distantei laterale suficiente faţă de vehiculul care circulă din sens opus;<br/>
                <strong>6. </strong>
                nerespectarea de către conducătorul de vehicul a semnificaţiei indicatoarelor şi marcajelor de interzicere 
                sau restricţie ori a celor temporare, cu excepţia celor care interzic accesul sau depăşirea care se 
                &icirc;ncadrează &icirc;n altă clasă de sancţiuni;<br/>
                <strong>7.</strong>
                nerespectarea obligaţiei de a permite părăsirea intersecţiei conducătorului vehiculului rămas &icirc;n 
                interiorul acesteia;<br/>
                <strong>8.</strong>
                conducerea unei biciclete sau a unei trotinete electrice pe drumurile publice fără mijloace de iluminare 
                și dispozitive reflectorizant-fluorescente &icirc;n stare de funcționare pe timp de noapte ori fără 
                &icirc;ndeplinirea condițiilor tehnice minime stabilite prin regulament, conducerea unei biciclete sau 
                a unei trotinete electrice pe autostradă, nerespectarea de către conducătorul unei biciclete sau trotinete 
                electrice a interdicției de trecere la culoarea roșie a semaforului, a semnalelor agentului de cale ferată, 
                la trecerea la nivel cu o cale ferată industrială, semnalizată corespunzător ori a semnalelor, indicațiilor 
                ori dispozițiilor polițistului rutier, nerespectarea de către conducătorul unei biciclete sau trotinete 
                electrice a interdicției privind circulația sub influența alcoolului, a produselor ori substanțelor stupefiante 
                ori a medicamentelor cu efecte similare acestora, a interdicției privind interacțiunea motrică directă cu un 
                alt vehicul aflat &icirc;n mers ori cu persoane aflate &icirc;n acesta ori a interdicției privind circulația 
                &icirc;n interiorul sau &icirc;n afara localităților fără a purta &icirc;mbrăcăminte cu elemente 
                fluorescent-reflectorizante, stabilite prin regulament, sau nerespectarea de către conducătorul unei biciclete 
                sau trotinete electrice a obligației de a circula cu viteză redusă, a obligației de a se asigura că nu se apropie 
                un vehicul feroviar sau a obligației de a opri la trecerea la nivel cu calea ferată, stabilite prin regulament;
                <br/>
                <strong>9.</strong>
                nereducerea vitezei &icirc;n cazurile prevăzute de regulament;<br/>
                <strong>10.</strong>
                montarea la autovehicul şi tractor agricol sau forestier, remorcă sau tramvai a luminilor de altă culoare 
                sau intensitate, a altor lumini ori dispozitive de avertizare sonoră sau accesorii ori modificări neomologate;<br/>
                <strong>11. </strong>
                conducerea unui autovehicul, tractor agricol sau forestier, remorcă sau tramvai cu deficiențe majore la 
                sistemul de fr&acirc;nare sau mecanismul de direcție, la sistemul de iluminare sau de avertizare sonoră 
                ori c&acirc;nd acestea lipsesc;<br/>
                <strong>12.</strong>
                nerespectarea regulilor &icirc;n cazul imobilizării involuntare &icirc;n pasaje subterane şi tuneluri;<br/>
                <strong>13.</strong>
                nerespectarea regulilor privind transportul persoanelor şi al obiectelor &icirc;n sau pe vehicule;<br/>
                <strong>14. </strong>
                pornirea de pe loc a autovehiculului sau tramvaiului cu uşile deschise, circulaţia cu uşile deschise ori 
                deschiderea acestora &icirc;n timpul mersului; deschiderea uşilor autovehiculului atunci c&acirc;nd acesta 
                este oprit sau staţionat, fără asigurarea că nu se pune &icirc;n pericol siguranţa deplasării celorlalţi 
                participanţi la trafic;<br/>
                <strong>15.</strong>
                oprirea autovehiculelor destinate transportului public de persoane &icirc;n alte locuri dec&acirc;t &icirc;n 
                staţiile semnalizate ca atare;<br/>
                <strong>16.</strong>
                nerespectarea regulilor privind circulaţia pe benzi;<br/>
                <strong>17.</strong>
                conducerea pe drumurile publice a vehiculelor cu două roţi, fără a se asigura contactul cu partea carosabilă 
                pe ambele roţi.<br/>
                <strong>18.</strong>
                nerespectarea obligaţiei conducătorului de vehicul de a avea asupra să documentele prevăzute la art. 35 alin. (2).<br/>
                <strong>19.</strong>
                folosirea telefoanelor mobile atunci c&acirc;nd conducătorii de vehicule se află &icirc;n timpul deplasării 
                pe drumurile publice, cu excepția celor prevăzute cu dispozitive tip &laquo;m&acirc;ini libere&raquo;;<br/>
                <strong>20.</strong>
                conducerea pe drumurile publice a altor vehicule dec&acirc;t cele care trebuie &icirc;nmatriculate 
                sau &icirc;nregistrate, vehiculele trase sau &icirc;mpinse cu m&acirc;na, bicicletele și trotinetele electrice;<br/>
                <strong>21.</strong>
                nerespectarea obligației de a menține permanent curate parbrizul, luneta și geamurile laterale ale 
                autovehiculului, tractorului agricol sau forestier, dacă prin aceasta se restr &acirc;nge sau se estompează 
                vizibilitatea &icirc;n timpul mersului.
            </p>
            <p>
                <strong>(2) </strong>
                Amenda contravenţională prevăzută la alin. (1) se aplică şi conducătorului de autovehicul, tractor agricol 
                sau forestier ori tramvai care săv&acirc;rşeşte o faptă pentru care se aplică 4 puncte de penalizare, 
                conform art. 108 alin. (1) lit. c).
            </p>         
            <p>
                <strong>(3)</strong>
                Constituie contravenţie şi se sancţionează cu amenda prevăzută &icirc;n clasa a III-a de sancţiuni şi cu 
                aplicarea sancţiunii contravenţionale complementare a suspendării dreptului de a conduce pentru o perioada 
                de 60 de zile săv&acirc;rşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori 
                tramvai a următoarelor fapte:
            </p>
            <p>
                <strong>a)</strong>
                nerespectarea regulilor privind trecerea la culoarea roșie a semaforului, dacă prin aceasta s-a produs un 
                accident de circulație din care a/au rezultat numai avarierea unui vehicul sau alte pagube materiale;<br/>
                <strong>b)</strong>
                nerespectarea interdicţiei temporare de circulaţie instituite pe un anumit segment de drum public;<br/>
                <strong>c)</strong>
                nerespectarea regulilor de circulaţie la trecerea unei coloane oficiale sau intercalarea &icirc;ntr-o astfel 
                de coloana;<br/>
                <strong>d)</strong>
                circulaţia pe sens opus, cu excepţia cazurilor &icirc;n care se efectuează regulamentar manevra de depăşire;<br/>
                <strong>e)</strong>
                neacordarea priorității de trecere pietonilor angajați &icirc;n traversarea regulamentară a drumului public 
                prin locurile special amenajate și semnalizate, aflați pe sensul de deplasare a autovehiculului, tractorului 
                agricol sau forestier ori tramvaiului;<br/>
                <strong>f) </strong>
                neacordarea priorității de trecere vehiculelor care au acest drept;<br/>
                <strong>g)</strong>
                nerespectarea regulilor privind depășirea;<br/>
                <strong>h)</strong>
                adoptarea unui comportament agresiv &icirc;n conducerea vehiculelor pe drumurile publice, dacă prin 
                aceasta s-a produs un accident de circulație din care au rezultat avarierea unui vehicul sau alte pagube materiale.
            </p>
            <h2>OUG - Articolul 108</h2>
            <p>
                <strong>(1) </strong>
                Săv&acirc;rşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a uneia sau 
                mai multor contravenţii atrage, pe l&acirc;ngă sancţiunea amenzii, şi aplicarea unui număr de puncte de penalizare, 
                după cum urmează:
            </p>
            <p>
                <strong>c)</strong>
                4 puncte de penalizare pentru săv&acirc;rşirea următoarelor fapte:
            </p>
            <p>
                <strong>1.</strong>
                nerespectarea obligaţiilor care &icirc;i revin &icirc;n cazul vehiculelor ramase &icirc;n pană sau avariate;<br/>
                <strong>2.</strong>
                refuzul &icirc;nm&acirc;nării actului de identitate, permisului de conducere, certificatului de 
                &icirc;nmatriculare sau de &icirc;nregistrare, a celorlalte documente prevăzute de lege, la cererea poliţistului 
                rutier, precum şi refuzul de a permite verificarea vehiculului;<br/>
                <strong>3.</strong>
                depăşirea cu 31-40 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face 
                parte autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;<br/>
                <strong>4.</strong>
                circulaţia &icirc;n timpul nopţii sau ziua, pe timp de ceaţă, ninsoare abundentă sau ploaie torenţială, cu un 
                autovehicul şi tractor agricol sau forestier fără lumini sau fără semnalizare corespunzătoare;<br/>
                <strong>5.</strong>
                conducerea unui autovehicul și tractor agricol sau forestier sau tractarea unei remorci atunci c&acirc;nd 
                circulația acestora pe drumurile publice este interzisă potrivit art. 15 alin. (5), cu excepția cazurilor &icirc;n 
                care vehiculul, &icirc;nmatriculat sau &icirc;nregistrat, nu are montate plăcuțe cu numărul de &icirc;nmatriculare 
                sau de &icirc;nregistrare atribuite de autoritatea competentă ori dacă acestea nu sunt conforme cu standardele 
                &icirc;n vigoare;<br/>
                <strong>6.</strong>
                folosirea telefoanelor mobile atunci c &acirc;nd conducătorii de vehicule se află &icirc;n timpul deplasării 
                pe drumurile publice, cu excepția celor prevăzute cu dispozitive tip &laquo;m &acirc;ini libere&raquo;.
            </p>
            <h2>OUG - Articolul 111</h2>
            <p>
                <strong>(1)</strong>
                Permisul de conducere sau dovada &icirc;nlocuitoare a acestuia se reţine &icirc;n următoarele cazuri:
            </p>
            <p>
                <strong>c)</strong>
                la săv &acirc;rșirea uneia dintre contravențiile prevăzute la art. 100 alin. (3), art. 101 alin. (3), art. 
                102 alin. (3) și (4) și &icirc;n situația prevăzută la art. 115 alin. (1);
            </p>
            <p>
                <strong>(5)</strong>
                &Icirc;n situațiile prevăzute la alin. (1) lit. e) și g), la art. 100 alin. (3), la art. 101 alin. (3), la art. 
                102 alin. (3) lit. b), e) și f) din prezenta ordonanță de urgență, precum și la art. 334 alin. (1) și (3) din 
                Codul penal, dovada &icirc;nlocuitoare a permisului de conducere se eliberează cu drept de circulație pentru o 
                perioadă de 15 zile.
            </p>
            <h2>OUG - Articolul 103</h2>
            <p>
                <strong>(2)</strong>
                &Icirc;n cazul &icirc;n care conducătorul de autovehicul, tractor agricol sau forestier ori tramvai 
                săv&acirc;rșește, &icirc;ntr-un interval de șase luni de la data restituirii permisului de conducere, 
                o nouă faptă prevăzută la art. 100 alin. (3), art. 101 alin. (3), art. 102 alin. (3) sau art. 102 alin (4), 
                perioada de suspendare a exercitării dreptului de a conduce aplicată pentru săv&acirc;rșirea faptei se 
                majorează de drept cu &icirc;ncă 30 de zile. Perioada de suspendare majorată se comunică &icirc;n termen de 
                15 zile de la data aplicării sancțiunii contravenționale complementare a suspendării exercitării dreptului 
                de a conduce.
            </p>
            <p>
                <strong>(9)</strong>
                Perioada de suspendare a exercitării dreptului de a conduce pe un drum public aplicată pentru săv&acirc;rșirea 
                contravențiilor prevăzute la art. 101 alin. (3) lit. d), art. 102 alin. (3) lit. a) sau art. 102 alin. (4) lit. 
                c) se majorează de drept cu 30 de zile, dacă prin aceasta s-a produs un accident de circulație din care au rezultat 
                numai avarierea unui vehicul sau alte pagube materiale.
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