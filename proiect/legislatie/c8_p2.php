<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 33;
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
            <h1>Capitolul 8 - partea 2 - Condiții obținere permis și echivalări</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c8_p3.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 24</h2>
            <p>
                <strong>(5) </strong>
                Valabilitatea administrativă a permiselor de conducere, pe categorii de vehicule, este următoarea:
            </p>
            <p>
                <strong>a)</strong>
                5 ani pentru permisele de conducere eliberate pentru vehiculele din categoriile C1, C1E, C, CE, D1, D1E, 
                D, DE, Tr, Tb şi Tv*);<br/>
                <strong>b) </strong>
                10 ani pentru permisele de conducere eliberate pentru vehiculele din categoriile AM, A1, A2, A, B, Bl şi BE.
            </p>
            <p>
                <strong>(5^1)</strong>
                &Icirc;n cazul pierderii, furtului sau al deteriorării permiselor de conducere ori al schimbării numelui 
                titularului, autorităţile competente eliberează, după caz, un duplicat a cărui valabilitate nu poate depăşi 
                valabilitatea administrativă a documentului &icirc;nlocuit sau alt permis de conducere.
            </p>
            <p>
                <strong>(5^2)</strong>
                Eliberarea unui nou permis de conducere cu o nouă valabilitate administrativă se realizează numai după 
                efectuarea examinării medicale prevăzute la art. 22.
            </p>
            <p>
                <strong>(5^3)</strong>
                &Icirc;n cazurile prevăzute la alin. (5^1) și (5^2), eliberarea permiselor de conducere respective se 
                realizează fără susținerea unui nou examen, la cererea persoanelor care au domiciliul sau reședința 
                &icirc;n Rom&acirc;nia &icirc;n sensul art. 23^1 alin. (2) ori care dovedesc că se află la studii &icirc;n 
                Rom&acirc;nia de cel puțin 6 luni și care dețin permis de conducere eliberat de autoritățile competente 
                rom&acirc;ne, &icirc;n condițiile stabilite prin ordin al ministrului afacerilor interne, care se 
                publică &icirc;n Monitorul Oficial al Rom&acirc;niei, Partea I.
            </p>
            <p>
                <strong>(5^4) </strong>
                La cererea titularului permisului de conducere, autoritatea competentă eliberează, pentru situațiile 
                prevăzute la alin. (5^1) și (5^2), o dovadă &icirc;nlocuitoare a acestuia, valabilă p&acirc;nă la emiterea 
                permisului de conducere, dar nu mai mult de 30 de zile.
                <u>
                    <em>
                        <strong>
                            (Alineatul (5^4) a fost adăugat &icirc;n lege și postat și pe Școala Rutieră la 02-03-2023)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(6)</strong>
                Persoana care nu deține permis de conducere și a fost condamnată, prin hotăr&acirc;re judecătorească 
                rămasă definitivă, pentru oricare dintre infracțiunile prevăzute la art. 334, art. 335 alin. (1), art. 
                336, art. 337, art. 338 alin. (1) și art. 339 alin. (2)-(4) din Codul penal sau pentru o infracțiune care 
                a avut ca rezultat uciderea sau vătămarea corporală a unei persoane, săv&acirc;rșită ca urmare a nerespectării 
                regulilor de circulație, precum și persoana al cărei permis de conducere a fost anulat &icirc;n condițiile art. 
                114 alin. (1) lit. a)-d) sau ale art. 115 alin. (1) au dreptul de a se prezenta la examen pentru obținerea 
                permisului de conducere, respectiv pentru obținerea unui nou permis de conducere, după caz, dacă a intervenit 
                una dintre situațiile următoare:
                <u>
                    <em>
                        <strong>
                            (Alineatul (6) a fost modificat &icirc;n lege și actualizat și pe Școala rutieră la 02-03-2023)
                        </strong>
                    </em>
                </u>
                <br/>
                <strong>a)</strong>
                au trecut 6 luni de la data executării pedepsei amenzii sau a pedepsei &icirc;n regim de privare de libertate;<br/>
                <strong>b)</strong>
                a trecut un an de la data grațierii totale ori a restului de pedeapsă, de la data răm&acirc;nerii 
                definitive a hotăr&acirc;rii judecătorești prin care s-a dispus suspendarea executării pedepsei 
                sub supraveghere sau de la data &icirc;mplinirii termenului de prescripție a executării pedepsei;<br/>
                <strong>c)</strong>
                a intervenit amnistia;<br/>
                <strong>d)</strong>
                interzicerea dreptului de a conduce anumite categorii de vehicule stabilite de instanță, prevăzută 
                la art. 66 alin. (1) lit. i) din Codul penal, a fost executată integral ori executarea acesteia a 
                &icirc;ncetat &icirc;n alt mod prevăzut de lege;<br/>
                <strong>e)</strong>
                a intervenit reabilitarea.
            </p>
            <p>
                <strong>(6^1)</strong>
                Pentru prezentarea la examen &icirc;n vederea obținerii unui nou permis de conducere, pentru 
                categoriile avute anterior, persoana al cărei permis de conducere a fost anulat, aflată &icirc;n 
                una dintre situațiile prevăzute la alin. (6), trebuie să facă dovada că este aptă din punct de 
                vedere medical.
                <u>
                    <em>
                        <strong>
                            (Alineatul (6^1) a fost adăugat &icirc;n lege și postat și pe Școala Rutieră la 02-03-2023)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(6^2)</strong>
                Persoana căreia i-a fost anulat permisul de conducere, ca urmare a condamnării pentru o infracțiune care 
                a fost dezincriminată, &icirc;n condițiile art. 4 din Codul penal, se poate prezenta la autoritatea competentă 
                pe raza căreia &icirc;și are domiciliul sau reședința pentru eliberarea unui nou permis de conducere, &icirc;n 
                condițiile ordinului ministrului afacerilor interne prevăzut la alin. (5^3), fără a mai susține examen și 
                cu prezentarea documentului care atestă o astfel de situație.
                <u>
                    <em>
                        <strong>
                            (Alineatul (6^2) a fost adăugat &icirc;n lege și postat și pe Școala Rutieră la 02-03-2023)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(6^3)</strong>
                &Icirc;n situația &icirc;n care anularea permisului de conducere nu a fost dispusă p&acirc;nă la depunerea 
                cererii de restituire de către titularul permisului de conducere, condamnat definitiv pentru o infracțiune 
                care a fost dezincriminată, &icirc;n condițiile art. 4 din Codul penal, șeful serviciului rutier competent 
                dispune restituirea acestuia, &icirc;n baza documentului care atestă o astfel de situație.
                <u>
                    <em>
                        <strong>
                            (Alineatul (6^3) a fost adăugat &icirc;n lege și postat și pe Școala Rutieră la 02-03-2023)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>OUG - Articolul 24^1</h2>
            <p>
                <strong>(1)</strong>
                Permisele de conducere se eliberează după cum urmează:
            </p>
            <p>
                <strong>a) </strong>
                pentru categoriile C1, C, D1 şi D - conducătorilor auto care deţin permis de conducere categoria 
                B şi care au promovat examenul corespunzător categoriei solicitate;<br/>
                <strong>b) </strong>
                pentru categoriile BE, C1E, CE, D1E şi DE - conducătorilor auto care deţin permis de conducere 
                pentru categoriile B, C1, C, D1, respectiv D şi care au promovat examenul corespunzător categoriei solicitate.
            </p>
            <p>
                <strong>(2)</strong>
                Permisele de conducere dau dreptul de a conduce vehicule pe drumurile publice, după cum urmează:
            </p>
            <p>
                <strong>a)</strong>
                permisele de conducere eliberate pentru categoriile C1E, CE, D1E sau DE sunt valabile pentru 
                ansamblurile de vehicule din categoria BE;<br/>
                <strong>b) </strong>
                permisele de conducere eliberate pentru categoria CE sunt valabile pentru categoria DE, dacă 
                titularii deţin permis de conducere pentru categoria D;<br/>
                <strong>c) </strong>
                permisele de conducere eliberate pentru categoria CE, respectiv categoria DE sunt valabile 
                pentru ansamblurile de vehicule din categoria C1E, respectiv categoria D1E;<br/>
                <strong>d)</strong>
                permisele de conducere eliberate pentru orice categorie sunt valabile pentru vehiculele din 
                categoria AM;<br/>
                <strong>e) </strong>
                permisele de conducere eliberate pentru categoria A2 sunt valabile şi pentru categoria A1;<br/>
                <strong>f) </strong>
                permisele de conducere eliberate pentru categoria A sunt valabile şi pentru categoriile A1 şi 
                A2, cele eliberate pentru categoria B sunt valabile şi pentru categoria B1, cele eliberate 
                pentru categoria C sunt valabile şi pentru categoria C1, iar cele eliberate pentru categoria 
                D sunt valabile şi pentru categoria D1;<br/>
                <strong>g)</strong>
                permisele de conducere eliberate pentru categoria B sunt valabile pentru triciclurile cu 
                motor av&acirc;nd o putere de peste 15 kW, cu condiţia ca deţinătorii permiselor să aibă v&acirc;rsta 
                de 21 de ani &icirc;mpliniţi.<br/>
                <strong>h)</strong>
                permisele de conducere eliberate pentru una dintre categoriile B, BE, C sau CE sunt valabile şi 
                pentru categoria Tr, &icirc;n anumite cazuri specifice;<br/>
                <strong>i)</strong>
                permisele de conducere eliberate numai pentru categoria Tr sunt valabile şi pentru ansamblul format 
                dintr-un vehicul din categoria Tr şi una sau două remorci;<br/>
                <strong>j)</strong>
                permisele de conducere eliberate pentru categoriile D sau DE sunt valabile şi pentru vehiculele 
                din categoria Tb.
            </p>
            <p>
                <strong>(2^1)</strong>
                Cazurile specifice pentru care se consideră &icirc;ndeplinită condiţia prevăzută la alin. (2) 
                lit. h) pentru a da dreptul de a conduce vehicule pe drumurile publice sunt următoarele:
            </p>
            <p>
                <strong>a)</strong>
                permisul de conducere pentru categoria B este valabil pentru vehicule din categoria Tr cu masa totală 
                maximă autorizată de p&acirc;nă la 3.500 kg, la care se poate ataşa o remorcă a cărei masă totală maximă 
                autorizată să fie mai mică de 750 kg;<br/>
                <strong>b)</strong>
                permisul de conducere pentru categoria BE este valabil pentru vehicule din categoria Tr cu masa totală 
                maximă autorizată de p&acirc;nă la 3.500 kg, la care se poate ataşa o remorcă a cărei masă totală maximă 
                autorizată să fie mai mică de 3.500 kg;<br/>
                <strong>c) </strong>
                permisul de conducere pentru categoria C este valabil pentru vehicule din categoria Tr cu masa totală 
                maximă autorizată mai mare de 3.500 kg, la care se poate ataşa o remorcă a cărei masă totală maximă 
                autorizată să fie mai mică de 750 kg;<br/>
                <strong>d) </strong>
                permisul de conducere pentru categoria CE este valabil pentru vehicule din categoria Tr cu masa totală 
                maximă autorizată mai mare de 3.500 kg, la care se poate ataşa o remorcă a cărei masă totală maximă 
                autorizată să fie mai mare de 750 kg.
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