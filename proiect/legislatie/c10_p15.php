<?php global $mysqli;
include '../chestionare/database.php';?>
<?php
session_start();
$lectie_curenta = 63;
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
            <h1>Capitolul 10 - partea 15 - Confiscarea, imobilizarea și radierea din oficiu</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p16.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 17</h2>
            <p>
                <strong>(4)</strong>
                Vehiculele declarate, potrivit legii, prin dispoziţie a autorităţii administraţiei publice locale, fără stăp &acirc;n sau 
                abandonate se radiază din oficiu &icirc;n termen de 30 de zile de la primirea dispoziţiei respective.
            </p>
            <h2>OUG - Articolul 96</h2>
            <p>
                <strong>(5) </strong>
                Confiscarea se dispune de către poliţia rutieră prin procesul-verbal de constatare a contravenţiei, odată cu aplicarea 
                sancţiunii amenzii.
            </p>
            <p>
                <strong>(6) </strong>
                Sunt supuse confiscării:
            </p>
            <p>
                <strong>a)</strong>
                mijloacele speciale de avertizare luminoase şi sonore deţinute, montate şi folosite pe alte autovehicule dec&acirc;t cele 
                prevăzute la art. 32 alin. (2) şi (3);
            </p>
            <p>
                <strong>b) </strong>
                dispozitivele care perturbă funcţionarea mijloacelor tehnice de supraveghere a traficului;<br/>
                <strong>c) </strong>
                plăcuţele cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare care nu corespund standardelor &icirc;n vigoare şi care 
                sunt montate pe vehicule;<br/>
                <strong>d)</strong>
                vehiculele cu tracţiune animala, c &acirc;nd circulă pe drumurile publice pe care le este interzis accesul ori pe alte trasee 
                dec&acirc;t cele stabilite de autorităţile publice locale*).
            </p>
            <p>
                <strong>(7) </strong>
                Imobilizarea unui vehicul consta &icirc;n scoaterea acestuia &icirc;n afara părţii carosabile, pe acostament sau c&acirc;t 
                mai aproape de marginea drumului, şi punerea lui &icirc;n imposibilitate de mişcare prin folosirea unor dispozitive tehnice 
                sau a altor mijloace de blocare.
            </p>
            <h2>OUG - Articolul 117</h2>
            <p>
                <strong>(1)</strong>
                Imobilizarea unui vehicul se dispune de către poliţistul rutier &icirc;n cazul săv&acirc;rşirii de către conducătorul acestuia 
                a uneia dintre următoarele fapte:
            </p>
            <p>
                <strong>a)</strong>
                conducerea unui vehicul ne&icirc;nmatriculat sau ne&icirc;nregistrat ori cu număr de &icirc;nmatriculare sau de &icirc;nregistrare 
                fals ori fără a avea montate plăcuţele cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare;<br/>
                <strong>b)</strong>
                conducerea unui vehicul care deteriorează drumul public sau afectează mediul ori care prezintă deficiențe periculoase la sistemul 
                de fr&acirc;nare sau la mecanismul de direcție;<br/>
                <strong>c) </strong>
                conducerea unui vehicul cu &icirc;ncălcarea regulilor referitoare la transportul mărfurilor periculoase ori cu gabarite şi/sau 
                mase depăşite;<br/>
                <strong>d)</strong>
                conducerea unui vehicul despre care exista date sau indicii că face obiectul unei fapte de natura penală;<br/>
                <strong>e)</strong>
                refuză să se legitimeze;<br/>
                <strong>f)</strong>
                se află sub influenţa băuturilor alcoolice, a substanţelor psihoactive, iar conducerea vehiculului nu poate fi asigurată de o 
                altă persoană;<br/>
                <strong>g)</strong>
                nu respectă timpii de conducere şi de odihna prevăzuţi de lege.
            </p>
            <p>
                <strong>(2)</strong>
                Imobilizarea unui vehicul se dispune şi &icirc;n cazul &icirc;n care conducătorul acestuia ori unul dintre pasageri 
                săv&acirc;rşeşte o faptă de natură penală sau este urmărit pentru săv &acirc;rşirea unei infracţiuni.
            </p>
            <h2>Regulament - Articolul 215</h2>
            <p>
                <strong>(1) </strong>
                Mijloacele speciale de avertizare luminoase şi sonore, precum şi dispozitivele care perturba funcţionarea mijloacelor 
                tehnice de supraveghere a traficului confiscate, &icirc;n condiţiile legii, se predau la serviciul poliţiei rutiere pe 
                raza căreia a fost constatată fapta.
            </p>
            <p>
                <strong>(2)</strong>
                Plăcuţele cu numărul de &icirc;nmatriculare sau de &icirc;nregistrare confiscate &icirc;n condiţiile legii se predau la 
                serviciul poliţiei rutiere pe raza căruia a fost constatată fapta pentru a fi trimise autorităţii competente care le-a eliberat.
            </p>
            <p>
                <strong>(3) </strong>
                Vehiculele cu tracţiune animală confiscate &icirc;n condiţiile legii se predau autorităţilor administraţiei publice 
                locale, pe baza de proces-verbal, &icirc;n vederea transmiterii acestora spre valorificare, potrivit dispoziţiilor 
                Ordonanţei Guvernului nr. 128/1998 pentru reglementarea modului şi condiţiilor de valorificare a bunurilor confiscate 
                sau intrate, potrivit legii, &icirc;n proprietatea privată a statului, aprobata cu modificări şi completări prin Legea 
                nr. 98/1999, republicată.
            </p>
            <h2>Regulament - Articolul 218</h2>
            <p>Revocarea imobilizării se dispune:</p>
            <p>
                <strong>a) </strong>
                de către poliţistul rutier care a dispus-o, dacă este prezent, iar motivele pentru care a fost dispusă au &icirc;ncetat;<br/>
                <strong>b) </strong>
                de către şeful serviciului poliţiei rutiere din care face parte agentul constatator, dacă motivele pentru care a fost 
                dispusă măsura au &icirc;ncetat;<br/>
                <strong>c) </strong>
                de către procuror sau de instanţa de judecata, atunci c&acirc;nd vehiculul a făcut obiectul unei infracţiuni.
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