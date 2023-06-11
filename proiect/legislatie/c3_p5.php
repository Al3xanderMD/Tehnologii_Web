<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 8;
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
            <h1>Capitolul 3 - partea 5 - Semnalele luminoase sau sonore</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/2qAKhuZX_zM">
            </iframe>                                   
        </div>
        <div>
            <a href="c3_p6.php" class="vezi-buton">Lectia urmatoare</a>
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
              <h2>OUG - Articolul 59</h2>
            <p> 
                <strong>(4)</strong>
                C&acirc;nd un semafor cu trei culori are o lumina verde intermitentă suplimentara, 
                montată la acelaşi nivel cu lumina verde normală a semaforului, sub forma unei săgeţi 
                verzi pe fond negru, cu v&acirc;rful spre dreapta, aprinderea acesteia semnifica 
                permisiunea pentru vehicule de a-şi continua drumul &icirc;n direcţia indicată de săgeata, 
                indiferent de culoarea semaforului electric, cu condiţia acordării priorităţii de trecere 
                vehiculelor şi pietonilor care au drept de circulaţie.           
            </p>
              <h2>Regulament - Articolul 47</h2>
            <p> 
                <strong>(1)</strong>
                Semnalele luminoase sunt lumini albe sau colorate diferit, emise succesiv, continuu 
                sau intermitent, de unul sau mai multe corpuri de iluminat care compun un semafor.       
            </p>
            <p> 
                <strong>(2)</strong>
                După numărul corpurilor de iluminat, semafoarele sunt:
            </p>
            <p> 
                <strong>a)</strong>
                cu un corp de iluminat, cu lumina intermitentă de avertizare;               
            </p>
            <p> 
                <strong>b)</strong>
                cu două corpuri de iluminat, pentru pietoni și conducători de biciclete sau trotinete 
                electrice;
                <u>
                    <em>
                        <strong>
                            (Litera b) din Alineatul (2) a fost modificată și actualizată pe 
                            www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>                        
            </p>
            <p> 
                <strong>c)</strong>
                cu trei corpuri de iluminat, pentru vehicule;
            </p>
            <p> 
                <strong>d)</strong>
                cu patru sau mai multe corpuri de iluminat, pentru tramvaie. 
            </p>
            <p> 
                <strong>(3))</strong>
                Semafoarele se montează &icirc;n axul vertical al st&acirc;lpului sau pe consolă, 
                pe portal ori suspendate pe cabluri, succesiunea culorilor lentilelor, de sus &icirc;n jos, 
                fiind următoarea:                 
            </p>
            <p> 
                <strong>a)</strong>
                la semaforul cu trei culori ordinea semnalelor este: rosu, galben, verde;                       
            </p>
            <p> 
                <strong>b)</strong>
                la semaforul cu două culori ordinea semnalelor este: rosu, verde;
            </p>
            <p> 
                <strong>c)</strong>
                la semaforul pentru tramvaie sunt dispuse trei pe orizontala la partea superioară şi 
                unul la partea inferioară, toate cu lumină albă.           
            </p>
            <h2>Regulament - Articolul 48</h2>
            <p> 
                <strong>(1)</strong>
                Semafoarele care emit semnale luminoase pentru dirijarea circulaţiei &icirc;n intersecţii s
                e instalează obligatoriu &icirc;nainte de intersecţie, astfel &icirc;nc &acirc;t să fie 
                vizibile de la o distanţă de cel puţin 50 m. Acestea pot fi repetate &icirc;n mijlocul, 
                deasupra ori de cealaltă parte a intersecţiei.             
            </p>
            <p> 
                <strong>(2)</strong>
                Semnificaţia semnalelor luminoase pentru dirijarea circulaţiei vehiculelor este valabilă 
                pe &icirc;ntreaga lăţime a părţii carosabile deschise circulaţiei conducătorilor cărora 
                li se adresează. Pe drumurile cu două sau mai multe benzi pe sens, pentru direcţii diferite, 
                delimitate prin marcaje longitudinale, semafoarele se pot instala deasupra uneia sau unora 
                dintre benzi, caz &icirc;n care semnificaţia semnalelor luminoase se limitează la banda 
                sau benzile astfel semnalizate.          
            </p>
            <h2>Regulament - Articolul 49</h2>
            <p> 
                Pe lămpile de culoare roşie sau verde ale semafoarelor pot fi aplicate săgeţi de culoare 
                neagră care indică direcţiile de deplasare corespunzătoare acestora. &Icirc;n acest caz 
                interdicţia sau permisiunea de trecere impusă de semnalul luminos este limitată la 
                direcţia sau direcţiile indicate prin aceste săgeţi. Aceeaşi semnificaţie o au şi săgeţile 
                aplicate pe panourile adiţionale ce &icirc;nsoţesc, la partea inferioară, semafoarele. 
                Săgeata pentru mersul &icirc;nainte are v&acirc;rful &icirc;n sus.        
            </p>
            <h2>Regulament - Articolul 50</h2>
            <p> 
                <strong>(1)</strong>
                Semafoarele pentru tramvaie au forma de caseta cu patru corpuri de iluminat de culoare 
                albă, dintre care trei sunt poziţionate orizontal şi unul sub cel din mijloc, &icirc;nsoţite 
                de panouri cu semne adiţionale.             
            </p>
            <p> 
                <strong>(2)</strong>
                Semnalul de liberă trecere pentru tramvaie este dat de combinaţia luminoasă a lămpii 
                inferioare cu una dintre cele trei lămpi situate la partea superioară pentru indicarea 
                direcţiei.           
            </p>
            <p> 
                <strong>(3)</strong>
                Semnalul de interzicere a trecerii tramvaiului este dat de iluminarea concomitentă a 
                celor trei lumini din partea superioară a casetei.        
            </p>
            <h2>Regulament - Articolul 51</h2>
            <p> 
                <strong>(1)</strong>
                Semnalul de culoare verde permite trecerea.
            </p>
            <p> 
                <strong>(2)</strong>
                C&acirc;nd semaforul este &icirc;nsoţit de una sau mai multe lămpi care emit lumină 
                intermitentă de culoare verde sub forma uneia sau unor săgeţi pe fond negru către 
                dreapta, acestea permit trecerea numai &icirc;n direcţia indicată, oricare ar 
                fi &icirc;n acel moment semnalul &icirc;n funcţiune al semaforului.
            </p>

            <h2>Regulament - Articolul 52</h2>
            <p> 
                <strong>(1)</strong>
                Semnalul de culoare roşie interzice trecerea.
            </p>
            <p> 
                <strong>(2)</strong>
                La semnalul de culoare roşie vehiculul trebuie oprit &icirc;naintea marcajului pentru 
                oprire sau, după caz, pentru trecerea pietonilor, iar &icirc;n lipsa acestuia, &icirc;n 
                dreptul semaforului. Dacă semaforul este instalat deasupra ori de cealaltă parte a 
                intersecţiei, &icirc;n lipsa marcajului pentru oprire sau pentru trecerea pietonilor, 
                vehiculul trebuie oprit &icirc;nainte de marginea părţii carosabile a drumului ce urmează 
                a fi intersectat.                  
            </p>
            <p> 
                <strong>(3)</strong>
                Atunci c&acirc;nd semnalul de culoare roşie funcţionează concomitent cu cel de 
                culoare galbenă, acesta anunţă apariţia semnalului de culoare verde.       
            </p>
            <h2>Regulament - Articolul 54</h2>
            <p> 
                &Icirc;n intersecţii dirijarea circulaţiei tramvaielor se poate realiza şi prin 
                semafoare av&acirc;nd semnale luminoase de culoare albă, corelate cu semnalele 
                luminoase pentru dirijarea circulaţiei celorlalte vehicule.          
            </p>
            <h2>Regulament - Articolul 55</h2>
            <p> 
                <strong>(1)</strong>
                Semnalul luminos destinat dirijării circulației bicicletelor are &icirc;n c&acirc;mpul 
                său imaginea unei biciclete de culoare roșie, respectiv verde pe fond negru. Aceeași 
                destinație o are și semnalul luminos al unui semafor &icirc;nsoțit de un panou adițional 
                pe care figurează o bicicletă.
                <em>
                    <u>
                        <strong>(Articolul 55 a fost modificat și actualizat pe www.scoalarutiera.ro 
                            la 06-10-2021)</strong>
                    </u>
                </em>
            </p>
            <p> 
                <strong>(2)</strong>
                Semnalele luminoase prevăzute la alin. (1) dirijează și circulația trotinetelor 
                electrice pe drumurile publice.
                    <em>
                        <u>
                            <strong>
                                (Articolul 55 a fost modificat și atcualizat pe www.scoalarutiera.ro 
                                la 06-10-2021)
                            </strong>
                        </u>
                    </em>
            </p>
            <h2>Regulament - Articolul 56</h2>
            <p> 
                <strong>(1)</strong>
                C&acirc;nd deasupra benzilor de circulaţie sunt instalate dispozitive care emit semnale 
                roşii şi verzi, acestea sunt destinate semnalizării benzilor cu circulaţie reversibilă. 
                Semnalul rosu, av &acirc;nd forma a două bare &icirc;ncrucişate, interzice accesul 
                vehiculelor pe banda deasupra căreia se găseşte, iar semnalul verde, de forma unei 
                săgeţi cu v&acirc;rful &icirc;n jos, permite intrarea vehiculelor şi circulaţia pe 
                acea bandă.         
            </p>
            <p> 
                <strong>(2)</strong>
                Semnalul luminos intermediar care are forma unei sau unor săgeţi de culoare galbenă 
                ori albă cu v&acirc;rful orientat către dreapta sau st&acirc;nga jos anunţă 
                schimbarea semnalului verde, &icirc;n cazul benzilor cu circulaţie reversibilă, 
                ori faptul că banda deasupra căreia se află este pe punctul de a fi &icirc;nchisă 
                circulaţiei conducătorilor cărora li se adresează, aceştia fiind obligaţi să se 
                deplaseze pe banda sau benzile indicate de săgeţi.            
            </p>
            <h2>Regulament - Articolul 57</h2>
            <p> 
                Conducătorul vehiculului care intra &icirc;ntr-o intersecţie la culoarea verde a 
                semaforului este obligat să respecte şi semnificaţia indicatoarelor instalate &icirc;n 
                interiorul acesteia.        
            </p>
            <h2>Regulament - Articolul 58</h2>
            <p> 
                <strong>(1)</strong>
                Semnalele luminoase pentru pietoni sunt de culoare verde şi roşie. Acestea funcţionează 
                corelat cu semnalele pentru dirijarea circulaţiei vehiculelor.
            </p>
            <p> 
                <strong>(2)</strong>
                Semnalul de culoare verde poate avea &icirc;n c&acirc;mpul sau imaginea unui 
                pieton &icirc;n mers, iar cel rosu, imaginea unui pieton oprit.       
            </p>
            <p> 
                <strong>(3)</strong>
                Semnalele luminoase pentru pietoni pot fi &icirc;nsoţite de semnale acustice 
                pentru a asigura traversarea drumului de către nevăzători.          
            </p>
            <p> 
                <strong>(4)</strong>
                Pe sectoarele de drum unde valorile de trafic permit, administratorul drumului 
                public, cu avizul poliţiei, poate amplasa &icirc;n zona marcajului trecerii pentru 
                pietoni semafoare sau panouri speciale cu comandă manuală a cererii de verde, care 
                se poate face direct de către pietoni.
            </p>
            <h2>Regulament - Articolul 59</h2>
            <p> 
                <strong>(1)</strong>
                Semnalul de culoare verde permite trecerea.
            </p>
            <p> 
                <strong>(2)</strong>
                C&acirc;nd semnalul de culoare verde &icirc;ncepe să funcţioneze intermitent &icirc;nseamnă 
                că timpul afectat traversării drumului este &icirc;n curs de epuizare şi urmează semnalul 
                rosu. &Icirc;n acest caz pietonul surprins &icirc;n traversarea drumului trebuie să 
                grăbească trecerea, iar dacă drumul este prevăzut cu un refugiu sau spaţiu interzis 
                circulaţiei vehiculelor, să aştepte pe acesta apariţia semnalului de culoare verde.                   
            </p>
            <h2>Regulament - Articolul 60</h2>
            <p>
                Semnalul de culoare verde intermitent şi semnalul de culoare roşie interzic 
                pietonilor să se angajeze &icirc;n traversare pe partea carosabilă.
            </p>
            <h2>Regulament - Articolul 61</h2>
            <p>
                &Icirc;n cazul semaforizării corelate, &icirc;n lungul unui traseu pot fi instalate 
                dispozitive de cronometrare a timpului aferent culorii, precum şi dispozitive luminoase
                 care să arate participanţilor la trafic timpii stabiliţi prin programul de semaforizare, 
                 iar pentru conducătorii de autovehicule, şi viteza de deplasare.           
            </p>
            <h2>Regulament - Articolul 62</h2>
            <p>
                Semaforul de avertizare se instalează la ieşirea din intersecţie şi este constituit 
                dintr-un corp de iluminat cu lumină galbenă intermitentă. Acesta poate 
                avea &icirc;n c&acirc;mpul sau imaginea unui pieton &icirc;n mişcare, de culoare 
                galbenă pe fond negru.            
            </p>
            <h2>Regulament - Articolul 63</h2>
            <p>
                Pentru semnalizarea şi dirijarea circulaţiei pe sectoarele de drumuri unde se execută 
                lucrări pe partea carosabilă, cu excepţia autostrăzilor, se pot instala temporar semafoare 
                mobile, cu obligaţia presemnalizării acestora.            
            </p>
            <h2>Regulament - Articolul 69</h2>
            <p>
                <strong>(2)</strong>
                La trecerea la nivel cu calea ferată curentă prevăzută cu instalaţii de semnalizare 
                automată fără bariere, interzicerea circulaţiei rutiere se realizează, optic, prin 
                funcţionarea dispozitivelor cu lumini intermitent-alternative roşii şi stingerea 
                semnalizării de control reprezentate de lumină intermitentă albă şi, acustic, prin 
                emiterea de semnale sonore intermitente.        
            </p>
            <h2>Regulament - Articolul 71</h2>
            <p>
                <strong>(1)</strong>
                Semnalizarea de interzicere a circulaţiei rutiere se considera realizata chiar şi 
                numai &icirc;n una din următoarele situaţii:          
            </p>
            <p>
                <strong>a)</strong>
                prin aprinderea unei singure unităţi luminoase a dispozitivului cu lumină 
                intermitent-alternativa roşie;              
            </p>
            <p>
                <strong>b)</strong>
                prin funcţionarea sistemului sonor;
            </p>
            <p>
                <strong>c)</strong>
                prin poziţia orizontala a unei singure semibariere.
            </p>
            <p>
                <strong>(2)</strong>
                Circulaţia rutieră se considera de asemenea interzisă şi &icirc;n situaţia &icirc;n 
                care barierele sau semibarierele sunt &icirc;n curs de cobor &acirc;re sau de ridicare.           
            </p>
            <h2>Regulament - Articolul 105</h2>
            <p>
                Se interzice intrarea &icirc;ntr-o intersecţie chiar dacă semnalul luminos ori un 
                indicator de prioritate permite, dacă din cauza aglomerării circulaţiei conducătorul
                 de vehicul risca să răm&acirc;nă imobilizat, st&acirc;njenind sau &icirc;mpiedic 
                 &acirc;nd desfăşurarea traficului.     
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