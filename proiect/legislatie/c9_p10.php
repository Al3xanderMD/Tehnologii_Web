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
            <h1>Capitolul 9 - partea 10 - Obligațiile conducătorilor auto la remorcarea vehiculelor</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c9_p11.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 50</h2>
            <p>
                <strong>(2) </strong>
                Viteza maximă admisă &icirc;n afara localităţilor pentru autovehiculele care tractează remorci sau 
                semiremorci este cu 10 km/h mai mică dec&acirc;t viteza maximă admisă pentru categoria din care 
                face parte autovehiculul trăgător.
            </p>
            <h2>Regulament - Articolul 114</h2>
            <p>
                <strong>(1) </strong>
                Conducătorii de autovehicule, tractoare agricole sau forestiere și tramvaie sunt obligați să folosească 
                instalațiile de iluminare și/sau semnalizare a acestora, după cum urmează:
                <em>
                    <u>
                        <strong>
                            (Partea introductivă a alin. (1) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
            </p>
            <p>
                <strong>d)</strong>
                luminile de &icirc;nt&acirc;lnire ale autovehiculelor care &icirc;nsoţesc coloane militare sau cortegii, 
                transporta grupuri organizate de persoane şi cele care tractează alte vehicule sau care transporta mărfuri 
                ori produse periculoase, &icirc;n timpul zilei;
            </p>
            <p>
                <strong>(5)</strong>
                Luminile de avarie se folosesc &icirc;n următoarele situaţii:
            </p>
            <p>
                <strong>c) </strong>
                c&acirc;nd autovehiculul, tractorul agricol sau forestier ori tramvaiul este remorcat.
                <u>
                    <em>
                        <strong>
                            (Litera c) a Alineatului (5) a fost modificată și actualizată pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>Regulament - Articolul 153</h2>
            <p>
                <strong>(1)</strong>
                Un autovehicul poate tracta pe drumul public o singură remorcă. Se exceptează tractorul agricol sau forestier 
                care poate tracta două remorci, precum și autovehiculele amenajate pentru formarea unui autotren de transport 
                persoane &icirc;n localitățile turistice, cu condiția ca acesta să nu fie mai lung de 25 m și să nu circule cu 
                viteza mai mare de 25 km/h.
                <u>
                    <em>
                        <strong>
                            (Alineatul (1) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(2) </strong>
                Motocicleta fără ataş, precum şi bicicletă pot tracta o remorcă uşoară av&acirc;nd o singură axa.
            </p>
            <h2>Regulament - Articolul 154</h2>
            <p>
                Cuplarea unui vehicul cu una sau două remorci, pentru formarea unui ansamblu de vehicule, se poate efectua 
                numai dacă:
            </p>
            <p>
                <strong>a)</strong>
                elementele care compun dispozitivul de cuplare sunt omologate şi compatibile;<br/>
                <strong>b)</strong>
                ansamblul de vehicule poate realiza raza minima de virare a autovehiculului trăgător;<br/>
                <strong>c)</strong>
                dimensiunile ansamblului de vehicule nu depăşesc limitele prevăzute de lege;<br/>
                <strong>d)</strong>
                elementele de cuplare ale echipamentelor de fr&acirc;nare, de iluminare şi semnalizare luminoasă sunt 
                compatibile;<br/>
                <strong>e) </strong>
                vehiculele care compun ansamblul nu se ating la trecerea peste denivelări, la efectuarea virajelor sau 
                la schimbarea direcţiei de mers.
            </p>
            <h2>Regulament - Articolul 157</h2>
            <p>
                <strong>(1) </strong>
                Remorcarea unui autovehicul, tractor agricol sau forestier se face cu respectarea următoarelor reguli:
                <em>
                    <u>
                        <strong>
                            (Partea introductivă a alin. (1) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </u>
                </em>
            </p>
            <p>
                <strong>a)</strong>
                conducătorii autovehiculelor, tractoarelor agricole sau forestiere trăgător și, respectiv, remorcat trebuie 
                să posede permise de conducere valabile pentru categoriile din care face parte fiecare dintre autovehicule, 
                tractoare agricole sau forestiere;
                <u>
                    <em>
                        <strong>
                            (Litera a) a fost modificată și actualizată pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
                <br/>
                <strong>b) </strong>
                autovehiculul, tractorul agricol sau forestier trăgător să nu remorcheze un autovehicul, tractor agricol sau 
                forestier mai greu dec&acirc;t masa lui proprie, cu excepția cazului c&acirc;nd remorcarea se efectuează de 
                către un autovehicul, tractor agricol sau forestier destinat special depanării;
                <u>
                    <em>
                        <strong>
                            (Litera b) a fost modificată și actualizată pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
                <br/>
                <strong>c)</strong>
                remorcarea trebuie să se realizeze prin intermediul unei bare metalice &icirc;n lungime de cel mult 4 m. 
                Autoturismul ale cărui mecanism de direcţie şi sistem de fr&acirc;nare nu sunt defecte poate fi remorcat 
                cu o legătură flexibilă omologată, &icirc;n lungime de 3-5 m. Bara sau legătură flexibilă trebuie fixată 
                la elementele de remorcare cu care sunt prevăzute autovehiculele;<br/>
                <strong>d)</strong>
                conducătorul autovehiculului, tractorului agricol sau forestier remorcat este obligat să semnalizeze 
                corespunzător semnalelor efectuate de conducătorul autovehiculului, tractorului agricol sau forestier 
                trăgător. Atunci c&acirc;nd sistemul de iluminare și semnalizare nu funcționează, este interzisă remorcarea 
                acestuia pe timpul nopții și &icirc;n condiții de vizibilitate redusă, iar ziua poate fi remorcat dacă pe 
                partea din spate are aplicate inscripția Fără semnalizare , precum și indicatorul Alte 
                pericole .
                <u>
                    <em>
                        <strong>
                            (Litera d) a fost modificată și actualizată pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(2)</strong>
                Dacă remorcarea se realizează prin suspendarea cu o macara sau sprijinirea pe o platforma de remorcare a 
                părții din față a autovehiculului, tractorului agricol sau forestier remorcat, atunci &icirc;n acesta nu 
                trebuie să se afle nicio persoană.
                <u>
                    <em>
                        <strong>
                            (Alineatul (2) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(3)</strong>
                Se interzice remorcarea unui autovehicul cu două roti, cu sau fără ataș, a autovehiculului, tractorului 
                agricol sau forestier al cărui sistem de direcție nu funcționează sau care nu este &icirc;nmatriculat ori 
                &icirc;nregistrat sau c&acirc;nd drumul este acoperit cu polei, gheață ori zăpadă. Se interzice și remorcarea 
                a două sau mai multe autovehicule, tractoare agricole sau forestiere, a căruțelor, a vehiculelor care &icirc;n 
                mod normal sunt trase sau &icirc;mpinse cu m&acirc;na ori a utilajelor agricole.
                <u>
                    <em>
                        <strong>
                            (Alineatul (3) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(4)</strong>
                Prin excepție de la prevederile alin. (3), se permite remorcarea unui autovehicul, tractor agricol sau 
                forestier al cărui sistem de direcție nu funcționează numai &icirc;n cazul c&acirc;nd remorcarea se realizează 
                prin suspendarea roților directoare ale autovehiculului, tractorului agricol sau forestier remorcat cu o macara 
                sau sprijinirea roților directoare ale autovehiculului, tractorului agricol sau forestier remorcat pe o platforma 
                de remorcare.
                <u>
                    <em>
                        <strong>
                            (Alineatul (4) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <p>
                <strong>(5)</strong>
                Conducătorul poate &icirc;mpinge sau tracta, cu propriul autovehicul, tractor agricol sau forestier, &icirc;n 
                situații deosebite, pe distante scurte, un alt autovehicul, tractor agricol sau forestier pentru a-i pune motorul 
                &icirc;n funcțiune sau pentru a efectua scurte manevre, fără a pune &icirc;n pericol siguranța deplasării 
                celorlalți participanți la trafic.
                <u>
                    <em>
                        <strong>
                            (Alineatul (5) a fost modificat și actualizat pe www.scoalarutiera.ro la 06-10-2021)
                        </strong>
                    </em>
                </u>
            </p>
            <h2>Regulament - Articolul 176</h2>
            <p>
                Se interzice conducătorului de autovehicul care transporta mărfuri sau produse periculoase:
            </p>
            <p>
                <strong>d) </strong>
                să remorcheze un vehicul rămas &icirc;n pană;
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