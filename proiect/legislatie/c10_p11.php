<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 59;
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
            <h1>Capitolul 10 - partea 11 - Contravenții - clasa 4</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p12.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 102</h2>
            <p>
                <strong>(1) </strong>
                Constituie contravenţii şi se sancţionează cu amenda prevăzută &icirc;n clasa a IV-a de sancţiuni următoarele 
                fapte săv&acirc;rşite de persoane fizice:
            </p>
            <p>
                <strong>1.</strong>
                conducerea pe drumurile publice a unui vehicul care prezintă deficiențe periculoase sau al cărui termen de 
                valabilitate a inspecției tehnice periodice a expirat;<br/>
                <strong>2. </strong>
                abrogat (<s>conducerea pe drumurile publice a unui vehicul fără a avea montată una dintre plăcuţele 
                cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare ori dacă plăcuţele cu numărul de 
                &icirc;nmatriculare sau de &icirc;nregistrare nu sunt fixate &icirc;n locurile special destinate</s>;);<br/>
                <strong>3.</strong>
                conducerea unui vehicul cu tracţiune animală ne &icirc;nregistrat;<br/>
                <strong>4. </strong>
                neefectuarea radierii vehiculelor din evidenta, &icirc;n cazurile şi termenele prevăzute de lege;<br/>
                <strong>5.</strong>
                conducerea unui autovehicul destinat transportului public de persoane sau de mărfuri fără a deţine atestatul 
                profesional;<br/>
                <strong>6.</strong>
                neefectuarea verificării medicale periodice;<br/>
                <strong>7.</strong>
                abrogat (<s>ne &icirc;ndeplinirea de către medicul de familie a obligaţiilor prevăzute la art. 22 alin. 
                    (5)*) &icirc;n cazul implicării, cu vinovăţie, a conducătorului de vehicul aflat &icirc;n evidenţa 
                    sa&icirc;ntr-un accident de circulaţie &icirc;n urma căruia au rezultat numai pagube materiale</s>
                ;);<br/>
                <strong>8.</strong>
                deţinerea simultană a două permise de conducere naţionale, dintre care unul eliberat de o autoritate competentă străină;<br/>
                <strong>9. </strong>
                lipirea de afişe, inscripţii sau &icirc;nscrisuri pe indicatoarele sau dispozitivele ce servesc la semnalizarea rutieră, 
                inclusiv pe suporturile acestora;<br/>
                <strong>10.</strong>
                abrogat (<s>deţinerea, montarea sau folosirea &icirc;n circulaţia pe drumurile publice a mijloacelor speciale de avertizare 
                    sonoră sau luminoasă pe vehiculele care nu au acest drept</s>
                );<br/>
                <strong>11.</strong>
                deţinerea, montarea sau folosirea &icirc;n circulaţia pe drumurile publice a dispozitivelor care perturbă funcţionarea 
                normală a dispozitivelor de măsurare a vitezei;<br/>
                <strong>12. </strong>
                folosirea nejustificată a mijloacelor speciale de avertizare luminoase sau sonore de către conducătorii autovehiculelor 
                care au regim de circulaţie prioritară;<br/>
                <strong>13. </strong>
                abrogat (<s>nerespectarea semnalelor regulamentare ale agenţilor de cale ferată la trecerea la nivel</s>
                ;);<br/>
                <strong>14.</strong>
                nerespectarea de către proprietarul sau deținătorul mandatat al unui vehicul a obligației de a comunica, &icirc;n termenul 
                indicat &icirc;n cuprinsul solicitării poliției rutiere sau poliției locale, după caz, datele de identificare ale persoanei 
                căreia i-a &icirc;ncredințat vehiculul pentru a-l conduce pe drumurile publice, prevăzute la art. 39;<br/>
                <strong>15.</strong>
                ne&icirc;ndeplinirea obligaţiilor ce &icirc;i revin conducătorului de vehicule care efectuează transport public de 
                persoane sau de mărfuri;<br/>
                <strong>16.</strong>
                nerespectarea obligaţiilor ce revin conducătorilor de vehicule cu tracţiune animala;<br/>
                <strong>17.</strong>
                nerespectarea dispoziţiilor art. 74 privind circulaţia pe autostrăzi;<br/>
                <strong>18.</strong>
                abrogat (<s>ne&icirc;ndeplinirea obligaţiilor prevăzute la art. 79 alin. (2) &icirc;n cazul implicării conducătorului de 
                    autovehicul &icirc;ntr-un accident de circulaţie din care au rezultat numai pagube materiale</s>
                ;);.<br/>
                <strong>19.</strong>
                efectuarea transportului de mărfuri sau persoane cu autovehicule şi tractoare agricole sau forestiere şi remorci care 
                circulă &icirc;n baza autorizaţiei pentru probe;<br/>
                <strong>20.</strong>
                conducerea, punerea &icirc;n circulație sau tractarea unui vehicul supus &icirc;nmatriculării, &icirc;n baza autorizației 
                pentru probe eliberate &icirc;n condițiile art. 13 alin. (7), &icirc;n afara județului sau a municipiului București &icirc;n 
                raza căruia &icirc;și are sediul titularul autorizației;<br/>
                <strong>21.</strong>
                nerespectarea semnificaţiei luminii roşii a dispozitivelor instalate pentru semnalizarea benzilor cu circulaţie reversibilă;<br/>
                <strong>22.</strong>
                săv &acirc;rşirea de către conducătorii de vehicule sau pasagerii acestora de gesturi obscene, proferarea de injurii, 
                adresarea de expresii jignitoare sau vulgare participanţilor la trafic;<br/>
                <strong>23.</strong>
                aruncarea, lăsarea ori abandonarea pe drumul public de obiecte, materiale, substanţe sau vehicule, după caz;<br/>
                <strong>24. </strong>
                nerespectarea regulilor privind remorcarea vehiculelor;<br/>
                <strong>25.</strong>
                neprezentarea, &icirc;n mod nejustificat, &icirc;n termenul stabilit la unitatea de poliţie rutieră la care au fost invitate 
                pentru soluţionarea oricărei probleme legate de calitatea de participant la trafic sau de proprietar ori utilizator de vehicul;<br/>
                <strong>26.</strong>
                pătrunderea pe drumurile publice modernizate cu un vehicul care are pe roţi sau pe caroserie noroi ce se depune pe partea 
                carosabilă ori din care cad sau se scurg produse, substanţe sau materiale ce pun &icirc;n pericol siguranţa circulaţiei;<br/>
                <strong>27.</strong>
                transportul animalelor pe locurile din faţă ale vehiculelor;<br/>
                <strong>28.</strong>
                conducerea autovehiculului pe drumurile publice acoperite cu zăpadă, gheaţă sau polei, fără ca acesta să fie dotat cu anvelope 
                de iarnă, iar &icirc;n cazul autovehiculului de transport marfă cu o masă totală maximă autorizată mai mare de 3,5 tone şi al 
                autovehiculului de transport persoane cu mai mult de 9 locuri pe scaune, inclusiv cel al conducătorului auto, fără ca acestea 
                să fie echipate cu anvelope de iarnă pe roţile axei/axelor de tracţiune sau fără a avea montate pe aceste roţi lanţuri sau 
                alte echipamente antiderapante certificate;<br/>
                <strong>29.</strong>
                neaplicarea, &icirc;n partea din spate a unui autovehicul şi tractor agricol sau forestier &icirc;nmatriculat &icirc;ntr-un 
                stat care nu este semnatar al Convenţiei asupra circulaţiei rutiere, a semnului distinctiv al statului care a efectuat 
                &icirc;nmatricularea;<br/>
                <strong>30.</strong>
                abrogat (<s>staţionarea neregulamentară pe drumurile publice &icirc;n condiţii de vizibilitate redusă</s>
                ;);<br/>
                <strong>31.</strong>
                lovirea, deteriorarea sau ocolirea porţilor de gabarit instalate &icirc;naintea trecerii la nivel cu calea ferată;<br/>
                <strong>32.</strong>
                lovirea şi/sau deteriorarea pasajelor superioare de pe drumurile publice, prin nerespectarea gabaritului de liberă trecere 
                semnalizat corespunzător;<br/>
                <strong>33.</strong>
                montarea pe autovehicul a unui sistem antifurt sonor a cărui durată a semnalului depăşeşte mai mult de un minut consecutiv, 
                iar intensitatea semnalului depăşeşte pragul fonic prevăzut de lege;<br/>
                <strong>34.</strong>
                neaplicarea, &icirc;n partea din spate a vehiculului care efectuează transport public de persoane sau de mărfuri, a 
                indicatorului cu limitele de viteză admise pentru categoria din care face parte vehiculul condus;<br/>
                <strong>35. </strong>
                aplicarea tratamentelor chimice sau a foliilor pe parbriz, luneta sau pe geamurile laterale, cu excepţia celor omologate 
                şi/sau certificate de către autoritatea competentă şi care sunt marcate corespunzător;<br/>
                <strong>36.</strong>
                aplicarea de afişe, reclame publicitare, &icirc;nscrisuri sau accesorii pe parbriz, lunetă sau geamurile laterale care 
                restr&acirc;ng sau estompează vizibilitatea sub limita legal admisă ori &icirc;mpiedică sau diminuează eficacitatea 
                dispozitivelor de iluminare şi semnalizare luminoasă ori citirea numărului de &icirc;nmatriculare;<br/>
                <strong>37.</strong>
                &icirc;ncălcarea obligaţiilor referitoare la circulaţia pe drumurile publice a vehiculelor care transportă produse sau 
                mărfuri periculoase ori a vehiculelor cu masa şi/sau gabaritul depăşit.<br/>
                <strong>38.</strong>
                nerespectarea obligaţiei de comunicare prevăzute la art. 80^1 şi la art. 81 alin. (3) sau comunicarea de date inexacte 
                ori incomplete;<br/>
                <strong>39.</strong>
                conducerea unui vehicul a cărui &icirc;nmatriculare este suspendată.<br/>
                <strong>40.</strong>
                ne&icirc;ndeplinirea de către medic a obligației prevăzute la art. 22 alin. (6) și alin. (6^2).
            </p>
            <p>
                <strong>(2)</strong>
                Amenda contravenţională prevăzută la alin. (1) se aplică şi conducătorului de autovehicul, tractor agricol sau 
                forestier ori tramvai care săv&acirc;rşeşte o faptă pentru care se aplică 6 puncte de penalizare, conform art. 
                108 alin. (1) lit. d).
            </p>
            <p>
                <strong>(3) </strong>
                Constituie contravenţie şi se sancţionează cu amenda prevăzută &icirc;n clasa a IV-a de sancţiuni şi cu aplicarea sancţiunii 
                complementare a suspendării exercitării dreptului de a conduce pentru o perioada de 90 de zile săv&acirc;rşirea de către conducătorul 
                de autovehicul, tractor agricol sau forestier ori tramvai a următoarelor fapte:
            </p>
            <p>
                <strong>a)</strong>
                conducerea sub influenta băuturilor alcoolice, dacă fapta nu constituie, potrivit legii, infracţiune;<br/>
                <strong>b)</strong>
                conducerea vehiculului cu deficiențe periculoase la sistemul de fr&acirc;nare sau la mecanismul de direcție;<br/>
                <strong>c)</strong>
                abrogat (<s>neoprirea la trecerea la nivel cu calea ferată c &acirc;nd barierele sau semibarierele sunt cobor&acirc;te ori &icirc;n curs 
                    de cobor&acirc;re sau c &acirc;nd semnalele cu lumini roşii şi/sau sonore sunt &icirc;n funcţiune</s>
                );<br/>
                <strong>d)</strong>
                abrogat (<s>nerespectarea dispoziţiilor prevăzute la art. 35 alin. (3)</s>
                );<br/>
                <strong>e)</strong>
                depăşirea cu mai mult de 50 km/h a vitezei maxime admise pe sectorul de drum respectiv şi pentru categoria din care face parte 
                autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate şi verificate metrologic;<br/>
                <strong>f)</strong>
                deținerea, montarea sau folosirea &icirc;n circulația pe drumurile publice a mijloacelor speciale de avertizare sonoră sau luminoasă 
                pe vehiculele care nu au acest drept;<br/>
                <strong>g)</strong>
                nerespectarea regulilor privind prioritatea de trecere sau depășirea, dacă prin aceasta s-a produs un accident de circulație din care 
                au rezultat numai avarierea unui vehicul sau alte pagube materiale;<br/>
                <strong>h)</strong>
                circulația nejustificată a autovehiculelor pe banda de urgență a autostrăzilor.
            </p>
            <p>
                <strong>(4) </strong>
                Constituie contravenție și se sancționează cu amenda prevăzută &icirc;n clasa a IV-a de sancțiuni și cu aplicarea sancțiunii 
                complementare a suspendării exercitării dreptului de a conduce pentru o perioadă de 120 de zile săv&acirc;rșirea de către 
                conducătorul de autovehicul ori de tractor agricol sau forestier a următoarelor fapte:
            </p>
            <p>
                <strong>a) </strong>
                depășirea cu mai mult de 70 km/h a vitezei maxime admise pe sectorul de drum respectiv și pentru categoria din care face parte 
                autovehiculul condus, constatată, potrivit legii, cu mijloace tehnice omologate și verificate metrologic;<br/>
                <strong>b) </strong>
                neoprirea la trecerea la nivel cu calea ferată c&acirc;nd barierele sau semibarierele sunt cobor&acirc;te ori &icirc;n curs de 
                cobor &acirc;re sau c&acirc;nd semnalele cu lumini roșii și/sau sonore sunt &icirc;n funcțiune;<br/>
                <strong>c) </strong>
                efectuarea, de către conducătorul de autovehicul, pe autostradă sau pe drumul expres, a manevrei de &icirc;ntoarcere sau de mers 
                &icirc;napoi, a circulației &icirc;n sens contrar sensului de circulație, a circulației sau traversării de pe un sens de circulație 
                pe celălalt prin zonele interzise, respectiv prin zona mediană sau racordurile dintre cele două părți carosabile.
            </p>
            <h2>OUG - Articolul 108</h2>
            <p>
                <strong>(1)</strong>
                Săv&acirc;rşirea de către conducătorul de autovehicul, tractor agricol sau forestier ori tramvai a uneia sau mai multor contravenţii 
                atrage, pe l&acirc;ngă sancţiunea amenzii, şi aplicarea unui număr de puncte de penalizare, după cum urmează:
            </p>
            <p>
                <strong>d)</strong>
                6 puncte de penalizare pentru săv&acirc;rşirea următoarelor fapte:
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
                conducerea pe drumurile publice a unui vehicul fără a avea montată una dintre plăcuţele cu numărul de &icirc;nmatriculare sau de 
                &icirc;nregistrare ori dacă plăcuţele cu numărul de &icirc;nmatriculare ori de &icirc;nregistrare nu sunt fixate &icirc;n locurile 
                special destinate;<br/>
                <strong>5.</strong>
                circulația sau staționarea pe spațiul interzis care separă sensurile de circulație pe autostradă sau pe drumul expres;<br/>
                <strong>6.</strong>
                staționarea ori parcarea autovehiculelor pe autostradă sau pe drumul expres &icirc;n alte locuri dec&acirc;t cele special amenajate 
                și semnalizate;<br/>
                <strong>7.</strong>
                abrogat <s>executarea pe autostrada a manevrei de &icirc;ntoarcere sau de mers &icirc;napoi, circulaţia sau traversarea de pe un 
                    sens de circulaţie pe celălalt prin zonele interzise, respectiv prin zona mediană sau racordurile dintre cele două părţi carosabile</s>
                ;
                <br/>
                <strong>8.</strong>
                nerespectarea semnificaţiei indicatoarelor Trecere la nivel cu o cale ferată simplă, fără bariere; Trecere la nivel cu o cale ferată 
                dubla, fără bariere sau Oprire, instalate la trecerea la nivel cu o cale ferată;<br/>
                <strong>9.</strong>
                schimbarea direcţiei de mers prin viraj spre st &acirc;nga, dacă prin aceasta se &icirc;ncalcă marcajul longitudinal continuu care 
                separa sensurile de circulaţie;<br/>
                <strong>10.</strong>
                pătrunderea &icirc;ntr-o intersecţie dirijată prin semafoare, dacă prin aceasta se produce blocarea circulaţiei &icirc;n interiorul 
                intersecţiei.
            </p>
            <h2>OUG - Articolul 111</h2>
            <p>
                <strong>(1) </strong>
                Permisul de conducere sau dovada &icirc;nlocuitoare a acestuia se reţine &icirc;n următoarele cazuri:
            </p>
            <p>
                <strong>b)</strong>
                c&acirc;nd titularul acestuia a săv &acirc;rşit una dintre infracţiunile prevăzute la art. 334, art. 335 alin. (2), art. 336, 337, 
                art. 338 alin. (1) şi la art. 339 alin. (2), (3) şi (4) din Codul penal;<br/>
                <strong>c)</strong>
                la săv&acirc;rșirea uneia dintre contravențiile prevăzute la art. 100 alin. (3), art. 101 alin. (3), art. 102 alin. (3) și (4) și 
                &icirc;n situația prevăzută la art. 115 alin. (1);
            </p>
            <p>
                <strong>(3)</strong>
                &Icirc;n situațiile prevăzute la alin. (1) lit. a) și d), la art. 102 alin. (3) lit. a) și la art. 102 alin. (4) din prezenta 
                ordonanță de urgență, precum și &icirc;n cele menționate la art. 334 alin. (2) și (4), art. 335 alin. (2), art. 336, 337,art. 
                338 alin. (1), art. 339 alin. (2), (3) și (4) din Codul penal, dovada &icirc;nlocuitoare a permisului de conducere se eliberează 
                fără drept de circulație.
            </p>
            <p>
                <strong>(5)</strong>
                &Icirc;n situațiile prevăzute la alin. (1) lit. e) și g), la art. 100 alin. (3), la art. 101 alin. (3), la art. 102 alin. 
                (3) lit. b), e) și f) din prezenta ordonanță de urgență, precum și la art. 334 alin. (1) și (3) din Codul penal, dovada 
                &icirc;nlocuitoare a permisului de conducere se eliberează cu drept de circulație pentru o perioadă de 15 zile.
            </p>
            <h2>OUG - Articolul 103</h2>
            <p>
                <strong>(2)</strong>
                &Icirc;n cazul &icirc;n care conducătorul de autovehicul, tractor agricol sau forestier ori tramvai săv &acirc;rșește, 
                &icirc;ntr-un interval de șase luni de la data restituirii permisului de conducere, o nouă faptă prevăzută la art. 100 alin. 
                (3), art. 101 alin. (3), art. 102 alin. (3) sau art. 102 alin (4), perioada de suspendare a exercitării dreptului de a conduce 
                aplicată pentru săv&acirc;rșirea faptei se majorează de drept cu &icirc;ncă 30 de zile. Perioada de suspendare majorată se 
                comunică &icirc;n termen de 15 zile de la data aplicării sancțiunii contravenționale complementare a suspendării exercitării 
                dreptului de a conduce.
            </p>
            <p>
                <strong>(9)</strong>
                Perioada de suspendare a exercitării dreptului de a conduce pe un drum public aplicată pentru săv &acirc;rșirea contravențiilor 
                prevăzute la art. 101 alin. (3) lit. d), art. 102 alin. (3) lit. a) sau art. 102 alin. (4) lit. c) se majorează de drept cu 30 
                de zile, dacă prin aceasta s-a produs un accident de circulație din care au rezultat numai avarierea unui vehicul sau alte pagube 
                materiale.
            </p>
            <h2>Regulament - Articolul 190</h2>
            <p>
                <strong>(1^1)</strong>
                &Icirc;n situațiile prevăzute la art. 102 alin. (3) lit. g) și h) din Ordonanța de urgență a Guvernului nr. 195/2002, republicată, 
                cu modificările și completările ulterioare, dovada &icirc;nlocuitoare a permisului de conducere se eliberează cu drept de circulație 
                pentru o perioadă de 15 zile.
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