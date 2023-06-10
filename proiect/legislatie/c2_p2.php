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
            <h1>Capitolul 2 - partea 2 - Circulația în intersecții</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/xJaiU2kw1X4">
            </iframe>                                   
        </div>
        <div>
            <a href="c3_p1.php" class="vezi-buton">Lectia urmatoare</a>
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
                <strong>16.</strong>
                intersecţie - orice &icirc;ncrucişare, joncţiune sau bifurcare de drumuri la nivel, 
                inclusiv spaţiile formate de acestea;          
            </p>
            <p> 
              <h2>OUG - Articolul 55</h2>
            <p>
                Intersecţiile sunt:
            </p>
            <p>
                <strong>a)</strong>
                cu circulaţie nedirijată;
            </p>
            <p>
                <strong>b)</strong>
                cu circulaţie dirijată. &Icirc;n aceasta categorie sunt incluse şi intersecţiile
                 &icirc;n care circulaţia se desfăşoară &icirc;n sens giratoriu.                    
            </p>
                <h2>OUG - Articolul 56</h2>
            <p> 
                La apropierea de o intersecţie conducătorul de vehicul trebuie să circule cu 
                o viteză care să &icirc;i permită oprirea, pentru a acorda prioritate de trecere
                 participanţilor la trafic care au acest drept.                  
            </p>
                 <h2>OUG - Articolul 57</h2>
            <p> 
                <strong>(2)</strong>      
                La intersecţiile cu circulaţie dirijată, conducătorul de vehicul este obligat 
                să respecte semnificaţia indicatoarelor, culoarea semaforului sau indicaţiile 
                ori semnalele poliţistului rutier.                   
            </p>
            <p> 
                <strong>(3)</strong>      
                Pătrunderea unui vehicul &icirc;ntr-o intersecţie este interzisă dacă prin 
                aceasta se produce blocarea intersecţiei.          
            </p>
                 <h2>Regulament - Articolul 107</h2>
            <p> 
                <strong>(1)</strong>      
                La intersecţiile prevăzute cu indicatoare şi/sau cu marcaje pentru semnalizarea 
                direcţiei de mers, conducătorii de vehicule trebuie să se &icirc;ncadreze pe 
                benzile corespunzătoare direcţiei de mers voite cu cel puţin 50 m &icirc;nainte 
                de intersecţie şi sunt obligaţi să respecte semnificaţia indicatoarelor şi 
                marcajelor.                     
            </p>
            <p> 
                <strong>(2)</strong>      
                La intersecţiile fără marcaje de delimitare a benzilor, conducătorii vehiculelor 
                ocupa &icirc;n mers, cu cel puţin 50 m &icirc;nainte de intersecţie, următoarele 
                poziţii:                  
            </p>
            <p> 
                <strong>a)</strong>      
                r&acirc;ndul de l&acirc;ngă bordura sau acostament, cei care vor să schimbe 
                direcţia de mers spre dreapta;                   
            </p>
            <p> 
                <strong>b)</strong>      
                r&acirc;ndul de l&acirc;ngă axa drumului sau de l &acirc;ngă marcajul de 
                separare a sensurilor, cei care vor să schimbe direcţia de mers spre st&acirc;nga.
                C&acirc;nd circulaţia se desfăşoară pe drumuri cu sens unic, conducătorii 
                de vehicule care intenţionează să vireze la st &acirc;nga sunt obligaţi să 
                ocupe r &acirc;ndul de l &acirc;ngă bordura sau acostamentul din partea 
                st&acirc;nga;                                    
             </p>
             <p> 
                <strong>c)</strong>      
                oricare dintre r&acirc;nduri, cei care vor să meargă &icirc;nainte.                    
            </p>
            <p> 
                <strong>(3)</strong>      
                Dacă &icirc;n intersecţie circulă şi tramvaie, iar spaţiul dintre şina din 
                dreapta şi trotuar nu permite circulaţia pe două sau mai multe r&acirc;nduri, 
                toţi conducătorii de vehicule, indiferent de direcţia de deplasare, 
                vor circula pe un singur r &acirc;nd, lăs &acirc;nd liber traseul tramvaiului.          
            </p>
                 <h2>Regulament - Articolul 108</h2>
            <p> 
                Schimbarea direcţiei de mers prin virare la dreapta sau la st&acirc;nga 
                este interzisă &icirc;n locurile unde sunt instalate indicatoare cu această 
                semnificaţie.                                  
            </p>
                  <h2>Regulament - Articolul 109</h2>
            <p> 
                Dacă &icirc;n apropierea unei intersecţii este instalat un indicator sau 
                aplicat un marcaj care obliga să se circule &icirc;ntr-o anumită direcţie, 
                vehiculele trebuie să fie conduse numai &icirc;n direcţia sau direcţiile 
                indicate.                   
            </p>
                 <h2>Regulament - Articolul 110</h2>
            <p> 
                <strong>(1)</strong>      
                &Icirc;n situaţiile &icirc;n care există benzi speciale pentru executarea manevrei,
                 schimbarea direcţiei de deplasare se face prin st &acirc;nga centrului imaginar 
                 al intersecţiei, iar dacă există un marcaj de ghidare, cu respectarea semnificaţiei
                 acestuia.                   
            </p>
            <p> 
                <strong>(2)</strong>      
                Schimbarea direcţiei de mers spre st&acirc;nga, &icirc;n cazul vehiculelor care 
                intra &icirc;ntr-o intersecţie circul &acirc;nd pe acelaşi drum &icirc;n aliniament,
                dar din sensuri opuse, se efectuează prin st&acirc;nga centrului intersecţiei, 
                fără intersectarea traiectoriei acestora.                 
            </p>
            <p> 
                <strong>(3)</strong>      
                Amenajările rutiere sau obstacolele din zona mediană a părţii carosabile se ocolesc 
                prin partea dreaptă.                 
            </p>
            <p> 
                <strong>(4)</strong>  
                Trotinetele electrice se conduc numai &icirc;n aliniament pe drumurile publice. 
                Schimbarea direcției de mers &icirc;n cazul trotinetelor electrice se face prin 
                deplasarea conducătorilor pe l&acirc;ngă acestea, cu respectarea regulilor 
                privind circulația vehiculelor trase sau &icirc;mpinse cu m&acirc;na.
                <em>
                    <u>
                        <strong>(Alineatul (4) a fost introdus și adaugat și pe www.scoalarutiera.ro la 06-10-2021)</strong>
                    </u>
                </em>
             </p>
                <h2>Regulament - Articolul 123</h2>
            <p> 
                Conducătorul de vehicul este obligat să circule cu o viteza care să nu depăşească 
                30 km/h &icirc;n localităţi sau 50 km/h &icirc;n afara localităţilor, &icirc;n 
                următoarele situaţii:
            </p>
            <p> 
                <strong>a)</strong>
                la trecerea prin intersecţiile cu circulaţie nedirijată;                 
            </p>
            <p> 
                <strong>i)</strong>
                la schimbarea direcţiei de mers prin viraje;         
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