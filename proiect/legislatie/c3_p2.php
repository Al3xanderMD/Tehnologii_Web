<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 5;
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
            <h1>Capitolul 3 - partea 2 - Semnalele polițistului rutier</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/9X573PK-Mi4">
            </iframe>                                   
        </div>
        <div>
            <a href="c3_p3.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 29</h2>
            <p> 
                <strong>(2)</strong>
                Participanții la trafic sunt obligați să respecte și semnalele polițiștilor 
                de frontieră, ale &icirc;ndrumătorilor de circulație ai Ministerului Apărării 
                Naționale, ale personalului echipelor mobile din cadrul Autorității Vamale 
                Rom&acirc;ne, precum și ale organelor fiscale din cadrul Agenției Naționale 
                de Administrare Fiscală, aflate &icirc;n &icirc;ndeplinirea atribuțiilor de 
                serviciu, ale agenților căilor ferate, ale persoanelor desemnate pentru 
                dirijarea circulației pe sectoarele de drum pe care se execută lucrări de 
                reabilitare a acestora, ale membrilor patrulelor școlare de circulație care 
                acționează &icirc;n imediata apropiere a unităților de &icirc;nvățăm&acirc;nt, 
                precum și ale nevăzătorilor, potrivit prevederilor din regulament.
                <u>
                    <em>
                        <strong>
                            (Alineatul (2) a fost modificat și actualizat pe 
                            www.scoalarutiera.ro la 10-12-2021)
                        </strong>
                    </em>
                </u>                      
                

            </p>
                <h2>OUG - Articolul 35</h2>
            <p> 
                <strong>(2)</strong>
                Participanţii la trafic sunt obligaţi ca, la cererea poliţistului rutier, 
                să &icirc;nm &acirc;neze acestuia documentul de identitate sau, după caz, 
                permisul de conducere, documentul de &icirc;nmatriculare ori de 
                &icirc;nregistrare a vehiculului condus, documentele referitoare la bunurile 
                transportate, precum şi alte documente prevăzute de lege.                        
            </p>
            <p> 
                <strong>(3)</strong>
                &Icirc;n exercitarea atribuţiilor care &icirc;i revin, poliţistul rutier 
                are dreptul să verifice vehiculul, precum şi identitatea conducătorului 
                sau a pasagerilor aflaţi &icirc;n interiorul acestuia atunci c&acirc;nd 
                exista indicii despre săv&acirc;rşirea unei fapte de natura contravenţională 
                sau penală.                      
            </p>
            <p> 
              <h2>Regulament - Articolul 88</h2>
            <p>
                <strong>(1)</strong>
                Semnalele poliţistului care dirijează circulaţia au următoarele semnificaţii:
            </p>
            <p>
                <strong>a)</strong>
                braţul ridicat vertical semnifică atenţie, oprire pentru toţi 
                participanţii la trafic care se apropie, cu excepţia conducătorilor de 
                vehicule care nu ar mai putea opri &icirc;n condiţii de siguranţă. Dacă 
                semnalul este dat &icirc;ntr-o intersecţie, aceasta nu impune oprirea 
                conducătorilor de vehicule care se află deja angajaţi &icirc;n traversare;
                                        
            </p>
            <p>
                <strong>b)</strong>
                braţul sau braţele &icirc;ntinse orizontal semnifică oprire pentru toţi 
                participanţii la trafic care, indiferent de sensul lor de mers, circulă 
                din direcţia sau direcţiile intersectate de braţul sau braţele &icirc;ntinse. 
                După ce a dat acest semnal, poliţistul poate cobori braţul sau braţele, 
                poziţia să &icirc;nsemn&acirc;nd, de asemenea, oprire pentru participanţii 
                la trafic care vin din faţă ori din spate;                     
            </p>
            <p>
                <strong>c)</strong>
                balansarea, pe timp de noapte, &icirc;n plan vertical, a unui dispozitiv cu 
                lumină roşie ori a bastonului fluorescent-reflectorizant semnifică oprire 
                pentru participanţii la trafic spre care este &icirc;ndreptat;            
            </p>
            <p>
                <strong>d)</strong>
                balansarea pe verticală a braţului, av&acirc;nd palma orientată către sol, 
                semnifică reducerea vitezei;                   
            </p>
            <p>
                <strong>e)</strong>
                rotirea vioaie a braţului semnifică mărirea vitezei de deplasare a vehiculelor 
                sau grăbirea traversării drumului de către pietoni.                
            </p>
            <p>
                <strong>(2)</strong>
                Poliţistul care dirijează circulaţia poate efectua semnal cu braţul ca 
                vehiculul să avanseze, să depăşească, să treacă prin faţă ori prin spatele 
                sau, să &icirc;l ocolească prin partea să st&acirc;nga sau dreapta, 
                iar pietonii să traverseze drumul ori să se oprească.         
            </p>
            <p>
                <strong>(3)</strong>
                La efectuarea comenzilor prevăzute la alin. (1) şi (2), poliţistul poate 
                folosi şi fluierul.                 
            </p>
               <h2>Regulament - Articolul 89</h2>
            <p>
                <strong>(1)</strong>
                Oprirea participanţilor la trafic este obligatorie şi la semnalele date de:
            </p>
            <p>
                <strong>a)</strong>
                poliţiştii de frontieră;
            </p>
            <p>
                <strong>b)</strong>
                &icirc;ndrumătorii de circulaţie ai Ministerului Apărării;   
            </p>
            <p>
                <strong>c)</strong>
                agenţii de cale ferată, la trecerile la nivel;
            </p>
            <p>
                <strong>d)</strong>
                personalul autorizat din zona lucrărilor pe drumurile publice;
            </p>
            <p>
                <strong>e)</strong>
                membrii patrulelor şcolare de circulaţie, la trecerile pentru pietoni din apropierea unităţilor de 
                &icirc;nvăţăm&acirc;nt;
            </p>
            <p>
                <strong>f)</strong>
                nevăzători, prin ridicarea bastonului alb, atunci c =&acirc;nd aceştia traversează 
                strada.
            </p>
            <p>
                <strong>(2)</strong>
                Persoanele prevăzute la alin. (1) lit. a)-d) pot efectua şi următoarele semnale:
            </p>
            <p>
                <strong>a)</strong>
                balansarea braţului &icirc;n plan vertical, cu palma m &acirc;inii 
                orientată către sol sau cu un mijloc de semnalizare, care semnifică 
                reducerea vitezei;                 
            </p>
            <p>
                <strong>b)</strong>
                rotirea vioaie a braţului, care semnifică mărirea vitezei de deplasare a 
                vehiculelor, inclusiv grăbirea traversării drumului de către pietoni.             
            </p>
                 <h2>Regulament - Articolul 90</h2>
            <p>
                Persoanele prevăzute la art. 88 alin. (1) şi la art. 89 alin. (1) lit. 
                a)-e) care dirijează circulaţia trebuie să fie echipate şi plasate 
                astfel &icirc;nc&acirc;t să poată fi observate şi recunoscute cu uşurinţă 
                de către participanţii la trafic.        
            </p>
                 <h2>Regulament - Articolul 92</h2>
            <p>
                <strong>(1)</strong>
                Poliţistul rutier aflat &icirc;ntr-un autovehicul al poliţiei poate utiliza 
                şi dispozitive luminoase cu mesaje variabile pentru a transmite o dispoziţie 
                sau o indicaţie participanţilor la trafic. Aceste semnale pot fi adresate 
                concomitent cu transmiterea unui apel prin amplificatorul de voce.         
            </p>
            <p>
                <strong>(2)</strong>
                Poliţistul rutier aflat &icirc;ntr-un autovehicul al poliţiei poate executa 
                semnale cu braţul, cu sau fără baston reflectorizant, scos pe partea 
                laterală dreapta a vehiculului. Acest semnal semnifică oprire pentru 
                conducătorii vehiculelor care circulă &icirc;n spatele autovehiculului 
                poliţiei. Acelaşi semnal efectuat pe partea st&acirc;nga a autovehiculului 
                semnifică oprire pentru conducătorii vehiculelor care circulă pe banda din 
                partea st&acirc;nga &icirc;n acelaşi sens de mers ori &icirc;n sens opus 
                celui al autovehiculului poliţiei.        
            </p>
            <h2>Regulament - Articolul 147</h2>
            <p>
                Conducătorul de autovehicul, tractor agricol sau forestier ori tramvai este obligat:&nbsp;
                <u>
                    <em>
                        <strong>(Articolul 147 a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)</strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>4.</strong>
                să permită controlul stării tehnice a vehiculului, precum şi al bunurilor 
                transportate, &icirc;n condiţiile legii;                 
            </p>
            <h2>Regulament - Articolul 182</h2>
            <p>
                <strong>(1)</strong>
                Oprirea vehiculelor pe drumurile publice se realizează prin executarea 
                semnalelor regulamentare de către poliţistul rutier sau, după caz, de 
                către poliţistul de frontieră, atunci c&acirc;nd constată &icirc;ncălcări 
                ale normelor rutiere ori &icirc;n situaţia &icirc;n care există indicii 
                temeinice despre săv&acirc;rşirea unei contravenţii ori a unei fapte de 
                natură penală, pentru identificarea persoanelor care au comis astfel de 
                fapte şi a bunurilor care fac obiectul urmăririi, precum şi pentru verificarea 
                deţinerii de către conducătorii vehiculelor a documentelor prevăzute de lege. 
                Oprirea vehiculelor pe drumurile publice se realizează şi &icirc;n condiţiile 
                producerii unor calamităţi naturale, dezastre sau a altor situaţii care pun 
                &icirc;n pericol siguranţa circulaţiei.
            </p>
            <h2>Regulament - Articolul 183</h2>
            <p>
                <strong>(1)</strong>
                Conducătorul vehiculului oprit la semnalul regulamentar al poliţistului 
                rutier sau, după caz, al poliţistului de frontieră este obligat 
                să răm&acirc;nă &icirc;n vehicul, cu m&acirc;inile pe volan, iar 
                ceilalţi pasageri să nu deschidă portierele, respect&acirc;nd indicaţiile 
                poliţistului.           
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