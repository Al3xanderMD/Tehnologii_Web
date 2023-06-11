<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 47;
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
            <h1>Capitolul 9 - partea 11 - Obligațiile conducătorilor de mopede, biciclete și trotinete electrice</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c9_p12.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 6</h2>
            <p>
                <strong>10. bicicletă</strong>
                - vehiculul prevăzut cu două roți, propulsat prin forța musculară, cu ajutorul pedalelor ori manivelelor. 
                Sunt asimilate bicicletei vehiculele cu pedale cu pedalare asistată echipate cu un motor electric auxiliar 
                cu puterea nominală continuă mai mică sau egală cu 250 W, a cărui asistare este &icirc;ntreruptă atunci 
                c&acirc;nd ciclistul &icirc;ncetează să pedaleze sau este redusă progresiv pe măsură ce viteza vehiculului 
                crește, fiind &icirc;ntreruptă complet &icirc;nainte ca viteza vehiculului să atingă 25 km/h, precum și 
                bicicletele cu motor, astfel cum sunt prevăzute &icirc;n Regulamentul (UE) nr. 168/2013 al Parlamentului 
                European și al Consiliului din 15 ianuarie 2013 privind omologarea și supravegherea pieței pentru vehiculele 
                cu două sau trei roți și pentru cvadricicluri;
                <u>
                    <em>
                        <strong>
                            (Punctul 10 a fost modificat și actualizat pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>10^1. trotineta electrică</strong>
                - vehiculul cu două sau trei roți și ghidon, utilizat pentru transportul unei singure persoane, care 
                nu este prevăzut cu loc șez&acirc;nd sau care este echipat cu un loc șez &acirc;nd pentru conducător, 
                al cărui punct de ședere de referință se află la o &icirc;nălțime mai mică sau egală cu 540 mm &icirc;n 
                cazul celor cu două roți, respectiv la o &icirc;nălțime mai mică sau egală cu 400 mm &icirc;n cazul celor 
                cu trei roți, a cărui viteză maximă prin construcție este mai mare de 6 km/h, dar nu depășește 25 km/h și 
                care este echipat cu motor electric; punctul de ședere de referință are &icirc;nțelesul prevăzut &icirc;n 
                Regulamentul (UE) nr. 168/2013 al Parlamentului European și al Consiliului din 15 ianuarie 2013;
                <u>
                    <em>
                        <strong>
                            (Punctul 10^1 a fost adăugat și postat și pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>14^1. drum pentru cicliști</strong>
                - sunt căi de comunicație terestră proiectate și construite special pentru circulația cicliștilor;
                <u>
                    <em>
                        <strong>
                            (Punctul 14^1 a fost adăugat și postat și pe www.scoalarutiera.ro la 16-04-2022)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>21. moped</strong>
                - autovehicul care face parte din categoria mopedelor potrivit Regulamentului (UE) nr. 168/2013 al 
                Parlamentului European și al Consiliului din 15 ianuarie 2013. Este asimilat mopedului cvadriciclul ușor, 
                astfel cum este prevăzut &icirc;n Regulamentul (UE) nr. 168/2013 al Parlamentului European și al Consiliului 
                din 15 ianuarie 2013;
                <u>
                    <em>
                        <strong>
                            (Punctul 21 a fost modificat și actualizat pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>25. pistă pentru biciclete</strong>
                - pistă pentru biciclete - subdiviziunea părții carosabile, a trotuarului ori a acostamentului, special 
                amenajată, semnalizată și marcată corespunzător;
                <u>
                    <em>
                        <strong>
                            (Punctul 25 a fost modificat și actualizat pe www.scoalarutiera.ro la 16-04-2022)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>OUG - Articolul 12</h2>
            <p>
                <strong>(1) </strong>
                Vehiculele care circulă pe drumurile publice trebuie să fie &icirc;nmatriculate sau &icirc;nregistrate, 
                după caz, cu excepția următoarelor categorii de vehicule:
            </p>
            <p>
                <strong>a) </strong>
                vehiculele trase sau &icirc;mpinse cu m&acirc;na;<br/>
                <strong>b) </strong>
                bicicletele;<br/>
                <strong>c) </strong>
                trotinetele electrice.
            </p>
            <h2>OUG - Articolul 14</h2>
            <p>
                Tramvaiele, troleibuzele, mopedele, tractoarele agricole sau forestiere, altele dec&acirc;t cele prevăzute 
                la art. 13 alin. (3), inclusiv remorcile destinate a fi tractate de acestea, vehiculele lente, precum și 
                vehiculele cu tracțiune animală se &icirc;nregistrează la nivelul primarilor comunelor, ai orașelor, ai 
                municipiilor și ai sectoarelor municipiului București, care, prin compartimentele de specialitate, țin 
                și evidența acestora.
                <u>
                    <em>
                        <strong>
                            (Articolul 14 a fost modificat și actualizat pe www.scoalarutiera.ro 02-02-2023)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>OUG - Articolul 41</h2>
            <p>
                <strong>(3)</strong>
                Dacă un drum este prevăzut cu o pistă pentru biciclete, bicicletele și trotinetele electrice vor fi 
                conduse numai pe pista respectivă. &Icirc;n lipsa acestei piste, circulația trotinetelor electrice 
                este permisă numai pe sectoarele de drum unde viteza maximă admisă pentru circulația vehiculelor 
                este de 50 km/h.
                <u>
                    <em>
                        <strong>
                            (Alineatul (3) a fost modificat și actualizat pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>OUG - Articolul 72</h2>
            <p>
                <strong>(5)</strong>
                Sunt asimilate pietonilor persoanele care conduc un scaun rulant de construcție specială, cele care conduc 
                vehicule destinate exclusiv tragerii sau &icirc;mpingerii cu m&acirc;na, cele care se deplasează pe patine
                 sau dispozitive cu role fără mijloace de autopropulsie, precum și cele care conduc vehicule a căror 
                 viteză maximă prin construcție nu depășește 6 km/h și sunt echipate cu un motor electric.
            </p>
            <h2>OUG - Articolul 70</h2>
            <p>
                <strong>(1)</strong>
                Pentru a conduce un moped pe drumurile publice, conducătorul acestuia trebuie să aibă v&acirc;rsta de cel 
                puţin 16 ani.
            </p>
            <p>
                <strong>(2) </strong>
                Pentru a conduce o bicicletă sau o trotinetă electrică pe drumurile publice, conducătorul acesteia trebuie 
                să aibă v&acirc;rsta de cel puțin 14 ani.
                <u>
                    <em>
                        <strong>
                            (Alineatul (2) a fost modificat și actualizat pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(3)</strong>
                Bicicletele, mopedele și trotinetele electrice care circulă pe drumurile publice trebuie să fie echipate 
                cu mijloace de iluminare și dispozitive reflectorizant-fluorescente. Este interzisă circulația acestora 
                pe timp de noapte fără aceste mijloace și dispozitive &icirc;n stare de funcționare.
                <u>
                    <em>
                        <strong>
                            (Alineatul (3) a fost modificat și actualizat pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(4) </strong>
                Casca de protecție este obligatorie pentru conducătorii de biciclete și trotinete electrice a căror 
                v&acirc;rstă este sub 16 ani, atunci c&acirc;nd se deplasează pe partea carosabilă.
                <u>
                    <em>
                        <strong>
                            (Alineatul (4) a fost adăugat și postat și pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(5) </strong>
                Se interzice transportul pasagerilor pe trotinete electrice.
                <u>
                    <em>
                        <strong>
                            (Alineatul (5) a fost adăugat și postat și pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>OUG - Articolul 74</h2>
            <p>
                <strong>(1)</strong>
                Pe autostrăzi este interzisă circulația pietonilor, a autovehiculelor cu gabarite sau mase depășite, fără 
                autorizație specială de transport eliberată de administratorul drumului public, conform reglementărilor 
                &icirc;n vigoare, a vehiculelor cu tracțiune animală, a animalelor, a vehiculelor trase sau &icirc;mpinse cu 
                m&acirc;na, a bicicletelor, trotinetelor electrice și mopedelor, a tractoarelor agricole sau forestiere și 
                a mașinilor autopropulsate pentru lucrări agricole, precum și a vehiculelor care, prin construcție sau din 
                alte cauze, nu pot depăși viteza de 50 km/h.
                <u>
                    <em>
                        <strong>
                            (Alineatul (1) a fost modificat și actualizat pe www.scoalarutiera.ro la 11-02-2020)
                        </strong>
                    </em>
                </u>
            </p>
            <h2></h2>
            <h2>Regulament - Articolul 14</h2>
            <p>
                &Icirc;n circulația pe drumurile publice bicicleta sau trotineta electrică, după caz, trebuie să fie:
                <em>
                    <u>
                        <strong>
                            (Partea introductivă a articolului 14 a fost modificată și actualizată pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
            </p>
            <p>
                <strong>a) </strong>
                prevăzută cu dispozitiv de fr&acirc;nare eficace;<br/>
                <strong>b)</strong>
                prevăzută cu un sistem adecvat, funcţional, de direcţie;<br/>
                <strong>c)</strong>
                dotată cu sistem de avertizare sonoră;<br/>
                <strong>d) </strong>
                echipată, pe timp de noapte sau c&acirc;nd vizibilitatea este redusă, &icirc;n faţă, cu lumina de culoare albă 
                sau galbenă, iar &icirc;n spate, cu lumină de culoare roşie şi cu cel puţin un dispozitiv fluorescent-reflectorizant, 
                vizibil, de aceeaşi culoare;<br/>
                <strong>e)</strong>
                echipată cu elemente sau dispozitive fluorescent-reflectorizante, amplasate pe roţi, care, &icirc;n mişcare, 
                formează un cerc continuu.
            </p>
            <h2>Regulament - Articolul 15</h2>
            <p>
                Remorca ataşată unei biciclete trebuie să fie echipată, &icirc;n partea din spate, cu un dispozitiv 
                fluorescent-reflectorizant de culoare roşie, iar dacă lumina din spate a bicicletei este obturată de 
                remorcă, aceasta trebuie să fie echipată şi cu o lumină de culoare roşie.
            </p>
            <h2>Regulament - Articolul 16</h2>
            <p>
                <strong>(1)</strong>
                &Icirc;n circulaţia pe drumurile publice mopedul trebuie să fie echipat cu:
            </p>
            <p>
                <strong>a)</strong>
                instalaţie de fr &acirc;nare eficace;<br/>
                <strong>b)</strong>
                sistem de avertizare sonoră;<br/>
                <strong>c) </strong>
                instalaţie de evacuare a gazelor de ardere care să respecte normele de poluare fonică şi de protecţie a mediului;<br/>
                <strong>d) </strong>
                lumină de culoare albă &icirc;n faţă, respectiv lumina şi dispozitiv fluorescent-reflectorizant de 
                culoare roşie &icirc;n spate;<br/>
                <strong>e)</strong>
                lumini de culoare galbenă pentru semnalizarea schimbării direcţiei de mers, &icirc;n faţă şi &icirc;n spate;<br/>
                <strong>f)</strong>
                plăcuţă cu numărul de &icirc;nregistrare, amplasată la partea din spate a mopedului fără a obtura vizibilitatea 
                sistemului de iluminare şi semnalizare.
            </p>
            <p>
                <strong>(2)</strong>
                Se interzice montarea la moped a luminilor de altă culoare sau intensitate, a altor lumini, dispozitive 
                ori accesorii de avertizare dec&acirc;t cele omologate.
            </p>
            <h2>Regulament - Articolul 98</h2>
            <p>
                <strong>(1)</strong>
                Se interzice transportul pe motociclete şi pe mopede a mai multe persoane dec&acirc;t locurile stabilite 
                prin construcţie, precum şi al obiectelor voluminoase.
            </p>
            <p>
                <strong>(2) </strong>
                Copiii &icirc;n v&acirc;rsta de p&acirc;nă la 7 ani, dacă sunt ținuți &icirc;n brațe, precum și cei de 
                p&acirc;nă la 14 ani se transporta numai &icirc;n atașul motocicletelor.
            </p>
            <h2>Regulament - Articolul 100</h2>
            <p>
                <strong>(1) </strong>
                Vehiculele trebuie conduse numai pe drumurile, părţile carosabile, benzile sau pistele stabilite pentru 
                categoria din care fac parte. &Icirc;n cazul &icirc;n care pe drumurile publice nu sunt amenajate benzi 
                sau piste speciale pentru biciclete şi celelalte vehicule fără motor, acestea pot fi conduse şi pe 
                acostament &icirc;n sensul de mers, dacă circulaţia se poate face fără pericol.
            </p>
            <p>
                <strong>(2)</strong>
                Vehiculele din categoria AM, A1, A2 şi A, atunci c&acirc;nd circulă pe drumul public, trebuie conduse 
                numai pe un singur r&acirc;nd.
            </p>
            <h2>Regulament - Articolul 110</h2>
            <p>
                <strong>(4) </strong>
                Trotinetele electrice se conduc numai &icirc;n aliniament pe drumurile publice. Schimbarea direcției de 
                mers &icirc;n cazul trotinetelor electrice se face prin deplasarea conducătorilor pe l&acirc;ngă acestea, 
                cu respectarea regulilor privind circulația vehiculelor trase sau &icirc;mpinse cu m&acirc;na.
                <u>
                    <em>
                        <strong>
                            (Alineatul (4) a fost adăugat și postat și pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>Regulament - Articolul 117</h2>
            <p>
                <strong>(1) </strong>
                Conducătorii vehiculelor cu două roti, precum și ai celor cu tracțiune animală ori ai celor trase sau &icirc;mpinse 
                cu m&acirc;na sunt obligați să efectueze următoarele semnale:
            </p>
            <p>
                <strong>a)</strong>
                brațul st &acirc;ng &icirc;ntins orizontal atunci c &acirc;nd intenționează să schimbe direcția de mers 
                spre st&acirc;nga sau de a depăși;<br/>
                <strong>b) </strong>
                brațul drept &icirc;ntins orizontal atunci c&acirc;nd intenționează să schimbe direcția de mers spre dreapta;<br/>
                <strong>c)</strong>
                brațul drept &icirc;ntins orizontal balansat &icirc;n plan vertical atunci c&acirc;nd intenționează să oprească.
            </p>
            <p>
                <strong>(2)</strong>
                Semnalele prevăzute la alin. (1) trebuie efectuate cu cel puțin 25 m &icirc;nainte de efectuarea manevrelor.
            </p>
            <h2>Regulament - Articolul 160</h2>
            <p>
                <strong>(1) </strong>
                Bicicletele și trotinetele electrice, atunci c&acirc;nd circulă pe drumul public, trebuie conduse numai 
                pe un singur r&acirc;nd.
                <em>
                    <u>
                        <strong>
                            (Alineatul (1) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
            </p>
            <p>
                <strong>(2)</strong>
                Dacă pe direcția de deplasare există o pistă pentru biciclete, semnalizată ca atare, conducătorii vehiculelor 
                prevăzute la alin. (1) sunt obligați să circule numai pe această pistă. Se interzice circulația altor participanți 
                la trafic pe pista pentru biciclete.
                <em>
                    <u>
                        <strong>
                            (Alineatul (2) a fost modificat iar alineatele (3) și (4) au fost eliminate toate fiind actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
            </p>
            <h2>Regulament - Articolul 161</h2>
            <p>
                <em>
                    <u>
                        <strong>
                            (Articolul 161 a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
            </p>
            <p>
                <strong>(1)</strong>
                Se interzice conducătorului de bicicletă sau trotinetă electrică, după caz:
            </p>
            <p>
                <strong>a)</strong>
                să circule pe sectoarele de drum semnalizate cu indicatorul av&acirc;nd semnificația &laquo;Accesul interzis 
                bicicletelor&raquo;;<br/>
                <strong>b)</strong>
                să &icirc;nvețe să conducă biciclete sau trotinete electrice, după caz, pe drumurile intens circulate;<br/>
                <strong>c)</strong>
                să circule pe trotuare, cu excepția cazului c&acirc;nd pe acestea sunt amenajate piste pentru biciclete;<br/>
                <strong>d)</strong>
                să circule &icirc;n paralel, cu excepția situațiilor c &acirc;nd participă la competiții sportive organizate;<br/>
                <strong>e)</strong>
                să circule &icirc;n timp ce se află sub influența alcoolului ori a substanțelor psihoactive;<br/>
                <strong>f)</strong>
                să se țină de un vehicul aflat &icirc;n mers ori să fie remorcat de un alt vehicul sau &icirc;mpins ori tras de 
                o persoană aflată &icirc;ntr-un vehicul;<br/>
                <strong>g)</strong>
                să circule pe partea carosabilă &icirc;n aceeași direcție de mers, dacă există acostament practicabil;<br/>
                <strong>h)</strong>
                să transporte sau să tragă orice fel de obiecte care, prin volumul ori greutatea lor, st&acirc;njenesc sau 
                periclitează conducerea vehiculului ori circulația celorlalți participanți la trafic;<br/>
                <strong>i)</strong>
                să circule pe aleile din parcuri sau din grădini publice, cu excepția cazurilor c&acirc;nd nu st&acirc;njenesc 
                circulația pietonilor;<br/>
                <strong>j)</strong>
                să circule fără &icirc;ndeplinirea obligațiilor prevăzute la art. 14 și 15;<br/>
                <strong>k)</strong>
                să circule atunci c&acirc;nd partea carosabilă este acoperită cu polei, gheață sau zăpadă;<br/>
                <strong>l)</strong>
                să circule cu deficiențe tehnice la sistemele de fr &acirc;nare sau cu un vehicul care nu este prevăzut 
                cu avertizor sonor;<br/>
                <strong>m)</strong>
                să traverseze drumurile publice, pe trecerile destinate pietonilor, &icirc;n timp ce se deplasează pe bicicletă 
                sau trotinetă electrică, după caz;<br/>
                <strong>n)</strong>
                să circule pe alte benzi dec &acirc;t cea de l&acirc;ngă bordură sau acostament, cu excepția cazurilor &icirc;n 
                care conducătorii de bicicletă, &icirc;nainte de intersecție, trebuie să se &icirc;ncadreze regulamentar &icirc;n 
                funcție de direcția de deplasare;<br/>
                <strong>o)</strong>
                să circule &icirc;n interiorul localităților &icirc;n care nu funcționează iluminatul public, precum și 
                &icirc;n afara localităților fără a purta &icirc;mbrăcăminte cu elemente fluorescent-reflectorizante, de 
                la lăsarea serii p&acirc;nă &icirc;n zorii zilei sau atunci c&acirc;nd vizibilitatea este redusă;<br/>
                <strong>p)</strong>
                să conducă vehiculul fără a menține contactul roților cu solul;<br/>
                <strong>q)</strong>
                să circule fără a ține cel puțin o m&acirc;nă pe ghidon și ambele picioare pe pedale, &icirc;n cazul conducătorului 
                de bicicletă, respectiv fără a ține ambele m&acirc;ini pe ghidon, &icirc;n cazul conducătorului de trotinetă electrică.
            </p>
            <p>
                <strong>(2)</strong>
                Se interzice conducătorului de bicicletă să transporte o altă persoană, cu excepția copilului &icirc;n v&acirc;rstă 
                de p&acirc;nă la 7 ani, care poate fi transportat pe bicicletă, de către un adult, numai dacă vehiculul este 
                prevăzut din construcție cu un suport special sau dacă are montat un dispozitiv omologat.
            </p>
            <p>
                <strong>(3) </strong>
                Pe timpul circulației pe drumurile publice, conducătorul de bicicletă sau de trotinetă electrică, după caz, este 
                obligat să aibă asupra sa actul de identitate.
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