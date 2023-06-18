<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 62;
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
                window.location = elm.value + ".php";
            }
        </script>

        <div class="titlu">
            <h1>Capitolul 10 - partea 14 - Reținerea certificatului de înmatriculare sau înregistrare</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p15.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 76</h2>
            <p>
                <strong>(1)</strong>
                Vehiculele &icirc;nmatriculate sau &icirc;nregistrate, cu excepţia celor cu tracţiune animala, care circulă pe drumurile publice, 
                trebuie să aibă asigurare obligatorie pentru răspundere civilă &icirc;n caz de pagube produse terţilor prin accidente de circulaţie, 
                conform legii.
            </p>
            <p>
                <strong>(2)</strong>
                Poliţia rutieră dispune măsura reţinerii certificatului de &icirc;nmatriculare sau &icirc;nregistrare şi retragerea plăcuţelor cu 
                numărul de &icirc;nmatriculare sau de &icirc;nregistrare a vehiculelor neasigurate, aflate &icirc;n trafic, eliber &acirc;nd dovada 
                fără drept de circulaţie.
            </p>
            <p>
                <strong>(3)</strong>
                Dacă deţinătorul vehiculului nu face dovada asigurării acestuia, după 30 de zile de la data aplicării măsurii prevăzute la 
                alin. (2), poliţia rutieră dispune radierea din evidenţă a vehiculului.
            </p>
            <h2>OUG - Articolul 112</h2>
            <p>
                <strong>(1)</strong>
                Certificatul de &icirc;nmatriculare sau de &icirc;nregistrare ori dovada &icirc;nlocuitoare a acestuia se reţine de către 
                poliţia rutieră &icirc;n următoarele cazuri:
            </p>
            <p>
                <strong>a)</strong>
                vehiculul &icirc;nregistrat nu are efectuată inspecția tehnică periodică valabilă ori aceasta este anulată;<br/>
                <strong>b)</strong>
                nu sunt respectate normele tehnice constructive referitoare la transportul produselor periculoase;<br/>
                <strong>c)</strong>
                vehiculul circulă noaptea fără faruri sau lămpi de semnalizare, dispozitivele de iluminare şi semnalizare luminoase, 
                mijloacele fluorescent-reflectorizante, prevăzute &icirc;n normele tehnice &icirc;n vigoare;<br/>
                <strong>d)</strong>
                vehiculul circulă cu deficiențe majore sau periculoase la sistemele de iluminare-semnalizare sau cu alte dispozitive 
                dec&acirc;t cele omologate;<br/>
                <strong>e)</strong>
                sistemul de fr&acirc;nare de serviciu prezintă deficiențe majore sau periculoase;<br/>
                <strong>f)</strong>
                sistemul de fr&acirc;nare de securitate sau de staționare prezintă deficiențe majore sau periculoase;<br/>
                <strong>g)</strong>
                mecanismul de direcție prezintă deficiențe majore sau periculoase;<br/>
                <strong>h)</strong>
                anvelopele au alte dimensiuni sau caracteristici dec&acirc;t cele prevăzute &icirc;n cartea de identitate a vehiculului, 
                prezintă tăieturi sau rupturi ale cordului ori sunt uzate peste limita legal admisă;<br/>
                <strong>h^1) </strong>
                autovehiculul nu este dotat, la circulaţia pe drumurile publice acoperite cu zăpadă, gheaţă sau polei, cu anvelope de iarnă, 
                iar autovehiculul de transport marfă cu o masă totală maximă autorizată mai mare de 3,5 tone şi autovehiculul de transport 
                persoane cu mai mult de 9 locuri pe scaune, inclusiv cel al conducătorului auto, nu sunt echipate cu anvelope de iarnă pe 
                roţile axei/axelor de tracţiune ori nu au montate pe aceste roţi lanţuri sau alte echipamente antiderapante certificate;<br/>
                <strong>i)</strong>
                zgomotul &icirc;n mers sau staţionare depăşeşte limita legal admisă pentru tipul respectiv de vehicul;<br/>
                <strong>j) </strong>
                motorul emite noxe poluante peste limitele legal admise;<br/>
                <strong>k)</strong>
                elementele dispozitivului de cuplare pentru remorcare prezintă uzuri pronunţate ori nu sunt compatibile, fiind de natura să 
                provoace desprinderea remorcii sau dezechilibrarea ansamblului;<br/>
                <strong>l)</strong>
                autovehiculul, tractorul agricol sau forestier ori tramvaiul are aplicate pe parbriz, lunetă sau geamurile laterale afişe sau 
                reclame publicitare, folii neomologate şi/sau nemarcate corespunzător ori accesorii care restr &acirc;ng sau estompează vizibilitatea 
                &icirc;n timpul mersului, at&acirc;t din interior, c&acirc;t şi din exterior;<br/>
                <strong>m)</strong>
                autovehiculul şi tractorul agricol sau forestier are aplicat pe partea frontală şi/sau posterioară a acestuia afişe, &icirc;nscrisuri 
                sau reclame care diminuează eficacitatea dispozitivelor de iluminare şi semnalizare luminoasă ori citirea numărului 
                de &icirc;nmatriculare;<br/>
                <strong>n)</strong>
                autovehiculul şi tractorul agricol sau forestier prezintă scurgeri semnificative de carburant sau lubrifiant;<br/>
                <strong>o)</strong>
                plăcuţele cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare nu sunt conforme cu standardul ori au aplicate dispozitive 
                de iluminare, altele dec&acirc;t cele omologate;<br/>
                <strong>p)</strong>
                datele din certificatul de &icirc;nmatriculare sau de &icirc;nregistrare nu concordă cu caracteristicile tehnice ale vehiculului;<br/>
                <strong>r) </strong>
                vehiculul nu a fost radiat din circulaţie &icirc;n cazurile prevăzute &icirc;n prezenta ordonanţă de urgenţă;<br/>
                <strong>s)</strong>
                vehiculul nu este asigurat de răspundere civilă &icirc;n caz de pagube produse terţilor prin accidente de circulaţie, conform legii;<br/>
                <strong>t) </strong>
                deţinătorul vehiculului nu a preschimbat certificatul de &icirc;nmatriculare sau de &icirc;nregistrare, &icirc;n conformitate 
                cu prevederile legale;<br/>
                <strong>u)</strong>
                vehiculul nu are montată una dintre plăcuţele cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare;<br/>
                <strong>v)</strong>
                vehiculul are lipsa elemente ale caroseriei ori aceasta este &icirc;ntr-o stare avansată de degradare;<br/>
                <strong>x)</strong>
                lipsa dotărilor obligatorii pe autovehicule şi tractoare agricole sau forestiere destinate &icirc;nvăţării conducerii 
                autovehiculelor şi tractoarelor agricole sau forestiere &icirc;n procesul instruirii persoanelor &icirc;n vederea obţinerii 
                permisului de conducere, prevăzute de reglementările &icirc;n vigoare;<br/>
                <strong>y)</strong>
                &icirc;nmatricularea vehiculului este suspendată, &icirc;n condițiile legii.
            </p>
            <p>
                <strong>(2)</strong>
                &Icirc;n situațiile prevăzute la alin. (1) lit. b), c), e), g), h^1), k), o), p), r), s) la reținerea certificatului 
                de &icirc;nmatriculare sau de &icirc;nregistrare, polițistul rutier eliberează conducătorului de vehicul o dovadă 
                &icirc;nlocuitoare fără drept de circulație, iar &icirc;n cazurile prevăzute la alin. (1) lit. a), d), f), h), i), j), 
                l), m), n), t), u), v), x) și y) o dovadă &icirc;nlocuitoare cu drept de circulație pentru 15 zile.
            </p>
            <p>
                <strong>(3)</strong>
                &Icirc;n situațiile prevăzute la alin. (1) lit. b), o), p), r) și s), odată cu reținerea certificatului de &icirc;nmatriculare 
                polițistul rutier retrage și plăcuțele cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare.
            </p>
            <p>
                <strong>(4)</strong>
                Certificatul de &icirc;nmatriculare sau de &icirc;nregistrare și plăcuțele cu numărul de &icirc;nmatriculare sau de 
                &icirc;nregistrare, cu excepția celor care nu corespund standardelor, se restituie proprietarului sau utilizatorului 
                vehiculului de către poliția rutieră, la prezentarea de către acesta a dovezii &icirc;ncetării motivului pentru care 
                documentul a fost reținut, &icirc;n condițiile prevăzute &icirc;n regulament, precum și la &icirc;ncetarea suspendării 
                &icirc;nmatriculării vehiculului.
            </p>
            <p>
                <strong>(5)</strong>
                &Icirc;n cazul &icirc;n care certificatul de &icirc;nmatriculare sau de &icirc;nregistrare a fost reținut ca urmare a săv&acirc;rșirii 
                unei contravenții privind conducerea pe drumurile publice a unui vehicul cu deficiențe majore sau periculoase, acesta se restituie 
                proprietarului sau utilizatorului de către poliția rutieră la prezentarea dovezii eliberate de către Registrul Auto Rom &acirc;n 
                din care rezultă că deficiența a fost remediată.
            </p>
            <h2>Regulament - Articolul 200</h2>
            <p>
                <strong>(1)</strong>
                &Icirc;n cazurile &icirc;n care legea prevede aplicarea măsurii tehnico-administrative a retragerii plăcuţelor cu numărul de 
                &icirc;nmatriculare sau de &icirc;nregistrare, conducătorul vehiculului este obligat să demonteze şi să predea plăcuţele agentului 
                constatator care a dispus măsura.
            </p>
            <p>
                <strong>(2) </strong>
                C&acirc;nd conducătorul vehiculului refuza să predea plăcuţele, agentul constatator demontează el &icirc;nsuşi plăcuţele 
                cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare, &icirc;n prezenţa unui martor asistent, consemn &acirc;nd 
                despre aceasta &icirc;n procesul-verbal de constatare a contravenţiei.
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