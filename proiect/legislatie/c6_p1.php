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
            <h1>Capitolul 6 - partea 1 - manevre - depășirea</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/OnwzAiNEgUA">
            </iframe>                                   
        </div>
        <div>
            <a href="c6_p2.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 45</h2>
            <p>
                <strong>(1)</strong>
                Depăşirea este manevra prin care un vehicul trece &icirc;naintea altui vehicul ori pe l&acirc;ngă un 
                obstacol, aflat pe acelaşi sens de circulaţie, prin schimbarea direcţiei de mers şi ieşirea de pe banda de 
                circulaţie sau din şirul de vehicule &icirc;n care s-a aflat iniţial.
            </p>
            <p>
                <strong>(2)</strong>
                Conducătorul vehiculului care se angajează &icirc;n depăşire trebuie să se asigure că vehiculul care 
                circulă &icirc;n faţa sau &icirc;n spatele lui nu a iniţiat o asemenea manevră.
            </p>
            <p>
                <strong>(3)</strong>
                Atunci c&acirc;nd prin manevra de depăşire se trece peste axa care separa sensurile de circulaţie, 
                conducătorii de vehicule trebuie să se asigure că din sens opus nu se apropie un vehicul şi că dispun 
                de spaţiu suficient pentru a reintra pe banda iniţială, unde au obligaţia să revină după efectuarea manevrei 
                de depăşire.
            </p>
            <p>
                <strong>(4)</strong>
                Nu constituie depăşire, &icirc;n sensul alin. (1), situaţia &icirc;n care un vehicul circulă mai repede 
                pe una dintre benzi dec &acirc;t vehiculele care circulă pe altă bandă &icirc;n acelaşi sens de circulaţie.
            </p>
            <p>
                <strong>(5)</strong>
                Depăşirea se efectuează numai pe partea st&acirc;ngă a vehiculului depăşit. Tramvaiul sau vehiculul al 
                cărui conducător a semnalizat intenţia şi s-a &icirc;ncadrat corespunzător părăsirii sensului de mers 
                spre st&acirc;nga se depăşeşte prin partea dreapta.
            </p>
            <p>
                <strong>(6)</strong>
                Tramvaiul aflat &icirc;n mers poate fi depăşit şi pe partea st&acirc;ngă atunci c&acirc;nd drumul este 
                cu sens unic sau c&acirc;nd &icirc;ntre şina din dreapta şi marginea trotuarului nu există spaţiu suficient.
            </p>
            <h2>OUG - Articolul 54</h2>
            <p>
                <strong>(1)</strong>
                Conducătorul de vehicul care executa o manevra de schimbare a direcţiei de mers, de ieşire dintr-un r&acirc;nd 
                de vehicule staţionate sau de intrare &icirc;ntr-un asemenea r&acirc;nd, de trecere pe o altă bandă de 
                circulaţie sau de virare spre dreapta ori spre st&acirc;nga sau care urmează să efectueze o &icirc;ntoarcere 
                ori să meargă cu spatele este obligat să semnalizeze din timp şi să se asigure că o poate face fără să perturbe 
                circulaţia sau să pună &icirc;n pericol siguranţa celorlalţi participanţi la trafic.
            </p>
            <p>
                <strong>(2)</strong>
                Semnalizarea schimbării direcţiei de mers trebuie să fie menţinută pe &icirc;ntreaga durată a manevrei.
            </p>
            <p></p>
            <h2>Regulament - Articolul 107</h2>
            <p>
                <strong>(4)</strong>
                &Icirc;n cazul &icirc;n care tramvaiul este oprit &icirc;ntr-o staţie fără refugiu pentru pietoni, 
                vehiculele trebuie să oprească &icirc;n ordinea sosirii, &icirc;n spatele acestuia, şi să &icirc;şi 
                reia deplasarea numai după ce uşile tramvaiului au fost &icirc;nchise şi s-au asigurat că nu pun &icirc;n 
                pericol siguranţa pietonilor angajaţi &icirc;n traversarea drumului public.
            </p>
            <h2>Regulament - Articolul 116</h2>
            <p>
                <strong>(1)</strong>
                Conducătorii de vehicule sunt obligaţi să semnalizeze schimbarea direcţiei de deplasare, depăşirea, oprirea 
                şi punerea &icirc;n mişcare.
            </p>
            <p>
                <strong>(2)</strong>
                Intenția conducătorilor de autovehicule, tractoare agricole sau forestiere și tramvaie de a schimba direcția 
                de mers, de a ieși dintr-un r&acirc;nd de vehicule staționate ori de a intra &icirc;ntr-un asemenea 
                r&acirc;nd, de a trece pe o altă bandă de circulație sau de a vira spre dreapta ori spre st&acirc;nga 
                sau a celor care urmează să efectueze &icirc;ntoarcere, depășire ori oprire se semnalizează prin punerea 
                &icirc;n funcțiune a luminilor indicatoare de direcție cu cel puțin 50 m &icirc;n localități și 100 m &icirc;n 
                afara localităților &icirc;nainte de &icirc;nceperea efectuării manevrelor.
                <u>
                    <em>
                        <strong>
                            (Alineatul (2) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>Regulament - Articolul 118</h2>
            <p>
                <strong>(1)</strong>
                Conducătorul de vehicul care efectuează depăşirea este obligat:
            </p>
            <p>
                <strong>a)</strong>
                să se asigure că acela care &icirc;l urmează sau &icirc;l precedă nu a semnalizat intenţia &icirc;nceperii 
                unei manevre similare şi că poate depăşi fără a pune &icirc;n pericol sau fără a st &acirc;njeni circulaţia 
                din sens opus;<br/>
                <strong>b)</strong>
                să semnalizeze intenţia de efectuare a depăşirii;<br/>
                <strong>c)</strong>
                să păstreze &icirc;n timpul depăşirii o distanţă laterală suficienta faţă de vehiculul depăşit;<br/>
                <strong>d)</strong>
                să reintre pe banda sau &icirc;n şirul de circulaţie iniţial după ce a semnalizat şi s-a asigurat că poate 
                efectua această manevră &icirc;n condiţii de siguranţă pentru vehiculul depăşit şi pentru ceilalţi participanţi 
                la trafic.
            </p>
            <p>
                <strong>(2)</strong>
                Pentru asigurarea distanței laterale de siguranță, la depășirea unei biciclete sau a unei trotinete 
                electrice conducătorii de autovehicule, altele dec&acirc;t cele care se deplasează pe două roți, 
                realizează această manevră prin trecerea peste marcajul longitudinal de separare a sensurilor de circulație 
                ori de separare a benzilor pe același sens, cu cel puțin jumătate din lățimea autovehiculului atunci 
                c&acirc;nd viteza acestuia de deplasare este mai mare de 50 km/h, sau cel puțin prin &icirc;ncălcarea 
                acestor marcaje atunci c&acirc;nd viteza de deplasare este de cel mult 50 km/h.
                <u>
                    <em>
                        <strong>
                            (Alineatul (2) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>Regulament - Articolul 119</h2>
            <p>Conducătorul de vehicul care urmează să fie depăşit este obligat:</p>
            <p>
                <strong>a)</strong>
                să nu mărească viteza de deplasare;<br/>
                <strong>b)</strong>
                să circule c&acirc;t mai aproape de marginea din dreapta a părţii carosabile sau a benzii pe care se deplasează.
            </p>
            <h2>Regulament - Articolul 120</h2>
            <p>
                <strong>(1)</strong>
                Se interzice depăşirea vehiculelor:
            </p>
            <p>
                <strong>a)</strong>
                &icirc;n intersecţii cu circulaţia nedirijată;<br/>
                <strong>b)</strong>
                &icirc;n apropierea v&acirc;rfurilor de rampa, c&acirc;nd vizibilitatea este redusă sub 50 m;<br/>
                <strong>c)</strong>
                &icirc;n curbe şi &icirc;n orice alte locuri unde vizibilitatea este redusă sub 50 m;<br/>
                <strong>d)</strong>
                pe pasaje denivelate, pe poduri, sub poduri și &icirc;n tuneluri. Prin excepție, pot fi depășite &icirc;n aceste 
                locuri vehiculele cu tracțiune animală, motocicletele fără ataș, mopedele, bicicletele și trotinetele electrice, 
                dacă vizibilitatea asupra drumului este asigurată pe o distanță mai mare de 20 m, iar lățimea drumului este de 
                cel puțin 7 m;
                <em>
                    <u>
                        <strong>
                            (Litera d) din Alineatul (1) a fost modificată și actualizată pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
                <br/>
                <strong>e)</strong>
                pe trecerile pentru pietoni semnalizate prin indicatoare şi marcaje;<br/>
                <strong>f)</strong>
                pe trecerile la nivel cu calea ferată curentă şi la mai puţin de 50 m &icirc;nainte de acestea;<br/>
                <strong>g)</strong>
                &icirc;n dreptul staţiei pentru tramvai, atunci c&acirc;nd acesta este oprit, iar staţia nu este prevăzută 
                cu refugiu pentru pietoni;<br/>
                <strong>h)</strong>
                &icirc;n zona de acţiune a indicatorului &quot;Depăşirea interzisă;<br/>
                <strong>i)</strong>
                c&acirc;nd pentru efectuarea manevrei se &icirc;ncalcă marcajul continuu, simplu sau dublu, care desparte 
                sensurile de mers, iar autovehiculul circulă, chiar şi parţial, pe sensul opus, ori se &icirc;ncalcă marcajul 
                care delimitează spaţiul de interzicere;<br/>
                <strong>j)</strong>
                c&acirc;nd din sens opus se apropie un alt vehicul, iar conducătorul acestuia este obligat să efectueze manevre 
                de evitare a coliziunii;<br/>
                <strong>k)</strong>
                pe sectorul de drum unde s-a format o coloana de vehicule &icirc;n aşteptare, dacă prin aceasta se intră pe sensul 
                opus de circulaţie.
            </p>
            <p>
                <strong>(2)</strong>
                Se interzice depăşirea coloanei oficiale.
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