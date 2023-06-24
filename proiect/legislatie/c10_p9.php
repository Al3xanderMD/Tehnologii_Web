<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 57;
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
            <h1>Capitolul 10 - partea 9 - Contravenții - clasa 2</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p10.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 100</h2>
            <p>
                <strong>(1) </strong>
                Constituie contravenţii şi se sancţionează cu amenda prevăzută &icirc;n clasa a II-a de sancţiuni următoarele 
                fapte săv&acirc;rşite de persoane fizice:
            </p>
            <p>
                <strong>1.</strong>
                nerespectarea semnalelor polițiștilor de frontieră &icirc;n punctele de trecere a frontierei de stat a 
                Rom&acirc;niei, ale &icirc;ndrumătorilor de circulație ai Ministerului Apărării Naționale, ale personalului 
                echipelor mobile din cadrul Autorității Vamale Rom&acirc;ne, precum și ale organelor fiscale din cadrul 
                Agenției Naționale de Administrare Fiscală, ale agenților de cale ferată, ale persoanelor desemnate pentru 
                dirijarea circulației, pe sectoarele de drum pe care se execută lucrări de reabilitare a acestora, precum și 
                cele ale patrulelor școlare de circulație și ale nevăzătorilor;
                <u>
                    <em>
                        <strong>
                            (Punctul 1 din Alineatul (1) a fost modificat &icirc;n lege și actualizat și pe Școala Rutieră la 10-12-2021)
                        </strong>
                    </em>
                </u>
                <br/>
                <strong>2. </strong>
                nerespectarea regulilor de utilizare a mijloacelor de avertizare sonoră de către conducătorii de vehicule, 
                cu excepţia celor care conduc autovehicule prevăzute la art. 32 alin. (2) lit. a) şi b);<br/>
                <strong>3.</strong>
                nerespectarea semnificaţiei indicatoarelor şi marcajelor de obligare;<br/>
                <strong>4.</strong>
                ne&icirc;ndeplinirea obligaţiei de a solicita autorităţii competente, &icirc;n termenul prevăzut de lege, 
                eliberarea unui nou permis de conducere sau certificat de &icirc;nmatriculare ori de &icirc;nregistrare, 
                &icirc;n cazul &icirc;n care acestea au fost declarate furate, pierdute, deteriorate sau nu mai corespund 
                din punctul de vedere al formei şi conţinutului celor &icirc;n vigoare;<br/>
                <strong>5.</strong>
                lipsa dotărilor specifice la autovehiculele şi tractoarele agricole sau forestiere destinate &icirc;nvăţării 
                conducerii auto, prevăzute &icirc;n reglementările &icirc;n vigoare;<br/>
                <strong>6. </strong>
                conducerea unui autovehicul și tractor agricol sau forestier care are montate anvelope cu alte dimensiuni sau 
                caracteristici dec&acirc;t cele pentru care au fost omologate ori sunt uzate peste limita admisă;
                <u>
                    <em>
                        <strong>
                            (Punctul 6 din Alineatul (1) a fost modificat &icirc;n lege și actualizat și pe Școala Rutieră la 27-02-2022)
                        </strong>
                    </em>
                </u>
                <br/>
                <strong>7. </strong>
                conducerea unui autovehicul şi tractor agricol sau forestier care, &icirc;n mers sau staţionare, poluează fonic sau emană noxe peste limita legal admisă;<br/>
                <strong>8.</strong>
                nerespectarea traseelor stabilite de poliţia rutieră pentru pregătirea practică sau susţinerea examenului pentru obţinerea permisului de conducere;<br/>
                <strong>9.</strong>
                nerespectarea obligației de către conducătorul vehiculului, cu excepția conducătorului de autovehicul destinat transportului public de persoane prin servicii regulate, de a circula pe un singur șir, indiferent de direcția de deplasare, &icirc;ntro intersecție &icirc;n care circulă și tramvaie și de a lăsa liber traseul tramvaiului atunci c &acirc;nd spațiul dintre șina din dreapta și trotuar nu permite circulația pe două șiruri;
                <em>
                    <u>
                        <strong>
                            (Punctul 9 a fost modificat &icirc;n lege și actualizat și pe Școala Rutieră la 09-04-2020)
                        </strong>
                    </u>
                </em>
                <br/>
                <strong>10. </strong>
                efectuarea de către conducătorul unui vehicul a unor activităţi de natura a-i distrage atenţia de la conducere 
                ori folosirea instalaţiilor de sonorizare la un nivel de zgomot care afectează deplasarea &icirc;n siguranţă a 
                lui şi a celorlalţi participanţi la trafic;<br/>
                <strong>11.</strong>
                nerespectarea obligaţiei ce revine conducătorului de motocicletă sau moped de a avea &icirc;n funcţiune, &icirc;n 
                timpul zilei, luminile de &icirc;nt&acirc;lnire &icirc;n circulaţia pe drumurile publice;<br/>
                <strong>12.</strong>
                neutilizarea echipamentului de protecţie-avertizare fluorescent-reflectorizant de către persoana care execută 
                lucrări &icirc;n zona drumului public sau de către agentul de cale ferată care asigură trecerea la nivel;<br/>
                <strong>13.</strong>
                conducerea unui autovehicul, tractor agricol sau forestier ori tramvai care nu este dotat cu trusă medicală, 
                două triunghiuri reflectorizante și stingător pentru incendii, omologate.
                <u>
                    <em>
                        <strong>
                            (Punctul 13 din Alineatul (1) a fost modificat &icirc;n lege și actualizat și pe Școala Rutieră la 27-02-2022)
                        </strong>
                    </em>
                </u>
                <br/>
                <strong>14.</strong>
                nerespectarea normelor privind circulația bicicletelor sau a trotinetelor electrice, cu excepția cazurilor 
                prevăzute la art. 101 alin. (1) pct. 8.
                <u>
                    <strong>
                        <em>
                            (Punctul 14 a fost modificat a fost modificat &icirc;n lege și actualizat și pe Școala Rutieră la 12-03-2020)
                        </em>
                    </strong>
                </u>
            </p>
            <p>
                <strong>(2)</strong>
                Amenda contravenţională prevăzută la alin. (1) se aplică şi conducătorului de autovehicul, tractor agricol sau 
                forestier ori tramvai care săv&acirc;rşeşte o faptă pentru care se aplică 3 puncte de penalizare, conform art. 
                108 alin. (1) lit. b).
            </p>
            <p>
                <strong>(3)</strong>
                Constituie contravenţie şi se sancţionează cu amenda prevăzută &icirc;n clasa a II-a de sancţiuni şi cu aplicarea 
                sancţiunii contravenţionale complementare a suspendării exercitării dreptului de a conduce pentru o perioadă de 30 
                de zile săv&acirc;rşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a 
                următoarelor fapte:
            </p>
            <p>
                <strong>a)</strong>
                depăşirea coloanelor de vehicule oprite la culoarea roşie a semaforului sau la trecerile la nivel cu calea ferată;<br/>
                <strong>b)</strong>
                abrogată (neacordarea priorităţii de trecere pietonilor angajaţi &icirc;n traversarea regulamentară a 
                drumului public prin locurile special amenajate şi semnalizate, aflaţi pe sensul de deplasare a 
                autovehiculului, tractorului agricol sau forestier ori tramvaiului);
                <em>
                    <u>
                        <strong>
                            (Litera b) a fost abrogată &icirc;n lege și eliminată și de pe Școala Rutieră la 27-02-2022)
                            (la 27-02-2022 a fost mutată la clasa a 3-a de sancțiuni - Articolul 101 alineatul (3) litera e))
                        </strong>
                    </u>
                </em>
                <br/>
                <strong>c)</strong>
                abrogată (neacordarea priorităţii de trecere vehiculelor care au acest drept);
                <em>
                    <u>
                        <strong>
                            (Litera c) a fost abrogată &icirc;n lege și eliminată și de pe Școala Rutieră la 27-02-2022)
                            (la 27-02-2022 a fost mutată la clasa a 3-a de sancțiuni - Articolul 101 alineatul (3) litera f))
                        </strong>
                    </u>
                </em>
                <br/>
                <strong>d)</strong>
                nerespectarea semnificaţiei culorii roşii a semaforului;<br/>
                <strong>e) </strong>
                abrogată (<s>nerespectarea regulilor privind depăşirea</s>
                );
                <em>
                    <u>
                        <strong>(Litera e) a fost abrogată &icirc;n lege și eliminată și de pe Ș</strong>
                    </u>
                </em>
                <u>
                    <em>
                        <strong>coala Rutieră la </strong>
                    </em>
                </u>
                <em>
                    <u>
                        <strong>27-02-2022)</strong>
                        (la 27-02-2022 a fost mutată la clasa a 3-a de sancțiuni - Articolul 101 alineatul (3) litera g))
                    </u>
                </em>
                <br/>
                <strong>f) </strong>
                nerespectarea semnalelor, indicaţiilor şi dispoziţiilor poliţistului rutier aflat &icirc;n exercitarea 
                atribuţiilor de serviciu;<br/>
                <strong>g)</strong>
                neprezentarea la unitatea de poliţie competentă pe raza căreia s-a produs un accident de circulaţie din 
                care au rezultat numai pagube materiale, cu excepţia cazurilor prevăzute la art. 79 alin. (2);<br/>
                <strong>h)</strong>
                folosirea telefoanelor mobile atunci c&acirc;nd conducătorii de vehicule se află &icirc;n timpul deplasării 
                pe drumurile publice, cu excepția celor prevăzute cu dispozitive tip &laquo;m&acirc;ini libere&raquo;, 
                concomitent cu &icirc;ncălcarea unei reguli pentru circulația vehiculelor;
                <u>
                    <em>
                        <strong>
                            (Litera h) a fost modificată &icirc;n lege și actualizată și pe Școala Rutieră la 09-04-2020)
                        </strong>
                    </em>
                </u>
                <br/>
                <strong>i)</strong>
                adoptarea unui comportament agresiv &icirc;n conducerea vehiculelor pe drumurile publice.
                <em>
                    <u>
                        <strong>
                            (Litera i) a fost modificată &icirc;n lege și actualizată și pe Școala Rutieră la 27-02-2022)
                        </strong>
                    </u>
                </em>
            </p>
            <h2>OUG - Articolul 108</h2>
            <p>
                <strong>(1)</strong>
                Săv&acirc;rşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a 
                uneia sau mai multor contravenţii atrage, pe l &acirc;ngă sancţiunea amenzii, şi aplicarea unui număr 
                de puncte de penalizare, după cum urmează:
            </p>
            <p>
                <strong>b)</strong>
                3 puncte de penalizare pentru săv &acirc;rşirea următoarelor fapte:
            </p>
            <p>
                <strong>1.</strong>
                oprirea nejustificată pe banda de urgență a autostrăzilor ori oprirea pe partea carosabilă a drumurilor 
                expres sau a drumurilor naționale europene (E);
                <em>
                    <u>
                        <strong>
                            (Punctul 1 a fost a fost modificată &icirc;n lege și actualizată și pe Școala Rutieră la 27-02-2022)
                        </strong>
                    </u>
                </em>
                <br/>
                <strong>2.</strong>
                depăşirea cu 21-30 km/h a vitezei maxime admise pe sectorul de drum respectiv pentru categoria din care face 
                parte autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;<br/>
                <strong>3.</strong>
                nerespectarea regulilor privind manevra de &icirc;ntoarcere, mersul &icirc;napoi, schimbarea benzii de circulaţie 
                sau a direcţiei de mers, dacă prin aceasta s-a produs un accident din care au rezultat avarierea unui vehicul sau 
                alte pagube materiale;<br/>
                <strong>4.</strong>
                nepăstrarea unei distante corespunzătoare faţă de vehiculul care &icirc;l precede, dacă prin aceasta s-a produs 
                un accident din care au rezultat avarierea unui vehicul sau alte pagube materiale;<br/>
                <strong>5. </strong>
                nerespectarea semnificației indicatorului &bdquo;ocolire&ldquo;, instalat pe refugiul stațiilor de tramvai, 
                cu excepția conducătorului de autovehicul destinat transportului public de persoane prin servicii regulate, 
                &icirc;n cazul &icirc;n care stațiile celor două mijloace de transport călători coincid;
                <u>
                    <strong>
                        <em>
                            (Punctul 4 a fost modificată &icirc;n lege și actualizată și pe Școala Rutieră la 09-04-2020)
                        </em>
                    </strong>
                </u>
                <br/>
                <strong>6.</strong>
                pătrunderea &icirc;ntr-o intersecţie atunci c &acirc;nd circulaţia &icirc;n interiorul acesteia este blocată;<br/>
                <strong>7. </strong>
                staţionarea neregulamentară;<br/>
                <strong>8.</strong>
                folosirea luminilor de ceaţă &icirc;n alte condiţii dec &acirc;t pe timp de ceaţă;<br/>
                <strong>9.</strong>
                nerespectarea obligaţiei conducătorului de autovehicul de se asigura că persoanele minore poartă centuri 
                de siguranţă sau sunt transportate &icirc;n dispozitive de fixare &icirc;n scaune pentru copii omologate, 
                &icirc;n condiţiile prevăzute de regulament;<br/>
                <strong>10. </strong>
                nerespectarea dispoziţiilor art. 36 alin. (1^3) sau a condiţiilor prevăzute de regulament privind transportul 
                copiilor &icirc;n autovehicule care nu sunt echipate cu sisteme de siguranţă;<br/>
                <strong>11.</strong>
                nerespectarea obligației de a acționa fr &acirc;na de ajutor, de a opri funcționarea motorului și de a cupla 
                &icirc;ntr-o treaptă de viteză inferioară sau &icirc;n cea de parcare dacă autovehiculul are transmisie automată, 
                atunci c &acirc;nd conducătorul vehiculului imobilizat pe drum public se &icirc;ndepărtează de acesta.
                <em>
                    <u>
                        <strong>
                            (Punctul 11 a fost modificată &icirc;n lege și actualizată și pe Școala Rutieră la 27-02-2022)
                        </strong>
                    </u>
                </em>
            </p>
            <h2>OUG - Articolul 111</h2>
            <p>
                <strong>(1) </strong>
                Permisul de conducere sau dovada &icirc;nlocuitoare a acestuia se reţine &icirc;n următoarele cazuri:
            </p>
            <p>
                <strong>c)</strong>
                la săv&acirc;rșirea uneia dintre contravențiile prevăzute la art. 100 alin. (3), art. 101 alin. (3), art. 102 
                alin. (3) și (4) și &icirc;n situația prevăzută la art. 115 alin. (1);
                <em>
                    <u>
                        <strong>
                            (Litera c) a fost modificată &icirc;n lege și actualizată și pe Școala Rutieră la 31-01-2022)
                        </strong>
                    </u>
                </em>
            </p>
            <p>
                <strong>(5) </strong>
                &Icirc;n situațiile prevăzute la alin. (1) lit. e) și g), la art. 100 alin. (3), la art. 101 alin. (3), la 
                art. 102 alin. (3) lit. b), e) și f) din prezenta ordonanță de urgență, precum și la art. 334 alin. (1) și (3) 
                din Codul penal, dovada &icirc;nlocuitoare a permisului de conducere se eliberează cu drept de circulație pentru 
                o perioadă de 15 zile.
                <u>
                    <em>
                        <strong>
                            (Alineatul (5) a fost modificat &icirc;n lege și actualizat și pe Școala Rutieră la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>OUG - Articolul 103</h2>
            <p>
                <strong>(2)</strong>
                &Icirc;n cazul &icirc;n care conducătorul de autovehicul, tractor agricol sau forestier ori tramvai 
                săv&acirc;rșește, &icirc;ntr-un interval de șase luni de la data restituirii permisului de conducere, 
                o nouă faptă prevăzută la art. 100 alin. (3), art. 101 alin. (3), art. 102 alin. (3) sau art. 102 alin (4), 
                perioada de suspendare a exercitării dreptului de a conduce aplicată pentru săv&acirc;rșirea faptei se 
                majorează de drept cu &icirc;ncă 30 de zile. Perioada de suspendare majorată se comunică &icirc;n termen 
                de 15 zile de la data aplicării sancțiunii contravenționale complementare a suspendării exercitării dreptului 
                de a conduce.
                <u>
                    <em>
                        <strong>
                            (Alineatul (2) a fost modificat &icirc;n lege și actualizat și pe Școala Rutieră la 31-01-2022) 
                        </strong>
                    </em>
                </u>
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