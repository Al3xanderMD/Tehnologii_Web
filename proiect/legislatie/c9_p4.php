<?php
session_start();
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
    $conectat=0;
}
else $conectat=1;
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
            <h1>Capitolul 9 - partea 4 - Obligațiile conducătorilor auto în caz de accident</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c9_p5.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 75</h2>
            <p>
                Accidentul de circulaţie este evenimentul care &icirc;ntruneşte cumulativ următoarele condiţii:
            </p>
            <p>
                <strong>a) </strong>
                s-a produs pe un drum deschis circulaţiei publice ori şi-a avut originea &icirc;ntr-un asemenea loc;<br/>
                <strong>b) </strong>
                a avut ca urmare decesul, rănirea uneia sau a mai multor persoane ori avarierea a cel puţin unui vehicul 
                sau alte pagube materiale;<br/>
                <strong>c)</strong>
                &icirc;n eveniment a fost implicat cel puţin un vehicul &icirc;n mişcare;<br/>
                <strong>d)</strong>
                abrogată;
            </p>
            <h2>OUG - Articolul 77</h2>
            <p>
                <strong>(1) </strong>
                Conducătorul unui vehicul implicat &icirc;ntr-un accident de circulaţie &icirc;n urma căruia a rezultat 
                moartea sau vătămarea integrităţii corporale ori a sănătăţii unei persoane este obligat să ia măsuri de 
                anunţare imediată a poliţiei, să nu modifice sau să şteargă urmele accidentului şi să nu părăsească locul 
                faptei.
            </p>
            <p>
                <strong>(2) </strong>
                Orice persoană care este implicată sau are cunoştinţă de producerea unui accident de circulaţie &icirc;n 
                urma căruia a rezultat moartea sau vătămarea integrităţii corporale ori a sănătăţii uneia sau a mai multor 
                persoane, precum şi &icirc;n situaţia &icirc;n care &icirc;n eveniment este implicat un vehicul care 
                transportă mărfuri periculoase este obligată să anunţe de &icirc;ndată poliţia şi să apeleze numărul 
                naţional unic pentru apeluri de urgenţă 112, existent &icirc;n reţelele de telefonie din Rom &acirc;nia.
            </p>
            <p>
                <strong>(3) </strong>
                Este interzis oricărei persoane să schimbe poziţia vehiculului implicat &icirc;ntr-un accident de 
                circulaţie &icirc;n urma căruia a rezultat moartea sau vătămarea integrităţii corporale ori a sănătăţii 
                uneia sau a mai multor persoane, să modifice starea locului sau să şteargă urmele accidentului fără 
                &icirc;ncuviinţarea poliţiei care cercetează accidentul.
            </p>
            <h2>OUG - Articolul 78</h2>
            <p>
                <strong>(1) </strong>
                Conducătorului de autovehicul, tractor agricol sau forestier ori tramvai, instructorului auto atestat 
                care se află &icirc;n procesul de instruire practică a unei persoane pentru obţinerea permisului de 
                conducere, precum şi examinatorului autorităţii competente &icirc;n timpul desfăşurării probelor practice 
                ale examenului pentru obţinerea permisului de conducere sau pentru oricare dintre categoriile acestuia, 
                implicaţi &icirc;ntr-un accident de circulaţie, le este interzis consumul de alcool sau de substanţe 
                psihoactive după producerea evenimentului şi p&acirc;nă la testarea concentraţiei alcoolului &icirc;n 
                aerul expirat sau recoltarea probelor biologice.
            </p>
            <p>
                <strong>(2)</strong>
                &Icirc;n situaţia &icirc;n care nu sunt respectate dispoziţiile alin. (1), se consideră că rezultatele 
                testului sau ale analizei probelor biologice recoltate reflecta starea conducătorului, a instructorului 
                auto sau a examinatorului respectiv &icirc;n momentul producerii accidentului.
            </p>
            <h2>OUG - Articolul 79</h2>
            <p>
                <strong>(1)</strong>
                Conducătorii de vehicule implicaţi &icirc;ntr-un accident de circulaţie &icirc;n urma căruia au rezultat 
                numai avarierea vehiculelor şi/sau alte pagube materiale sunt obligaţi:
            </p>
            <p>
                <strong>a)</strong>
                să scoată imediat vehiculele &icirc;n afara părţii carosabile ori, dacă starea vehiculelor nu permite acest 
                lucru, să le deplaseze c&acirc;t mai aproape de bordură sau acostament, semnaliz &acirc;ndu-le prezenţa;<br/>
                <strong>b)</strong>
                să se prezinte la unitatea de poliţie competentă pe raza căreia s-a produs accidentul &icirc;n termen de cel 
                mult 24 de ore de la producerea evenimentului pentru &icirc;ntocmirea documentelor de constatare.
            </p>
            <p>
                <strong>(2)</strong>
                Se exceptează de la obligaţiile prevăzute la alin. (1) lit. b)*):
            </p>
            <p>
                <strong>a) </strong>
                conducătorii vehiculelor care &icirc;ncheie o constatare amiabilă de accident, &icirc;n condiţiile legii;<br/>
                <strong>b) </strong>
                conducătorul de vehicul care deţine o asigurare facultativă de avarii auto, iar accidentul de circulaţie 
                a avut ca rezultat numai avarierea propriului vehicul.
            </p>
            <h2>OUG - Articolul 80</h2>
            <p>
                <strong>(1)</strong>
                Proprietarul, deţinătorul mandatat sau conducătorul auto al cărui autovehicul şi tractor agricol sau forestier, 
                remorcă ori tramvai a fost avariat &icirc;n alte &icirc;mprejurări dec &acirc;t &icirc;ntr-un accident de 
                circulaţie este obligat să se prezinte &icirc;n 24 de ore de la constatare la unitatea de poliţie pe raza 
                căreia s-a produs evenimentul, pentru &icirc;ntocmirea documentelor de constatare.
            </p>
            <p>
                <strong>(2) </strong>
                Persoanele prevăzute la alin. (1) sunt exceptate de la obligaţia prezentării la unitatea de poliţie dacă e
                xistă o asigurare facultativă &icirc;n baza căreia pot fi despăgubite pentru avarierea vehiculelor respective.*)
            </p>
            <h2>OUG - Articolul 80^1</h2>
            <p>
                &Icirc;n situaţiile prevăzute la art. 79 şi 80, repararea vehiculelor se face pe baza documentului de constatare 
                eliberat de unitatea de poliţie sau, după caz, de societăţile din domeniul asigurărilor*).
            </p>
            <h2>Regulament - Articolul 186</h2>
            <p>
                &Icirc;n cazul accidentelor de circulație din care au rezultat numai pagube materiale, conducătorii vehiculelor 
                sunt obligați să se supună testării aerului expirat &icirc;n vederea stabilirii alcoolemiei ori a consumului de 
                substanțe psihoactive. Dacă rezultatul testării arată o concentrație mai mare de 0,40 mg/l alcool pur &icirc;n 
                aerul expirat sau indică prezența &icirc;n organism a substanțelor psihoactive, conducătorii de vehicule sunt 
                obligați să se supună recoltării mostrelor biologice.
                <em>
                    <u>
                        <strong>
                            (Articolul 186 a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
            </p>
            <h2>Regulament - Articolul 187</h2>
            <p>
                Conducătorii de vehicule sau de animale implicați &icirc;n accidente de circulație din care a rezultat moartea 
                sau vătămarea integrității corporale ori a sănătății uneia sau mai multor persoane sunt obligați să se supună 
                recoltării mostrelor biologice &icirc;n vederea stabilirii alcoolemiei sau, după caz, a consumului de substanțe 
                psihoactive.
                <em>
                    <u>
                        <strong>
                            (Articolul 187 a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
            </p>
            <h2>Regulament - Articolul 188</h2>
            <p>
                &Icirc;n toate cazurile &icirc;n care se recoltează mostre biologice &icirc;n vederea stabilirii alcoolemiei 
                sau a prezentei &icirc;n organism a substanțelor psihoactive este obligatorie și examinarea clinica.
                <em>
                    <u>
                        <strong>
                            (Articolul 188 a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
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