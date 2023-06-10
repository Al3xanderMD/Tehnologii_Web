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
            <h1>Capitolul 3 - partea 3 - Semnalele speciale de avertizare</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/8g6-GErg3Hw">
            </iframe>                                   
        </div>
        <div>
            <a href="c3_p4.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 32</h2>
            <p> 
                <strong>(1)</strong>
                Semnalele speciale de avertizare luminoase sunt emise intermitent de dispozitivele de iluminare montate pe 
                autovehicule şi au următoarele semnificaţii:              
            </p>
            <p>
                <strong>a)</strong>
                lumina roşie obligă participanţii la trafic să oprească &icirc;n direcţia de mers c&acirc;t mai aproape de 
                marginea drumului;                      
            </p>
            <p>
                <strong>b)</strong>
                lumina albastră obligă participanţii la trafic să acorde prioritate de trecere;
            </p>
            <p>
                <strong>c)</strong>
                lumina galbenă obligă participanţii la trafic să circule cu atenţie.
            </p>
            <p> 
                <strong>(2)</strong>
                Sunt autorizate să utilizeze semnale speciale de avertizare luminoase:
            </p>
            <p>
                <strong>a)</strong>
                pentru lumina roşie - autovehiculele aparţin &acirc;nd poliţiei şi pompierilor;
            </p>
            <p>
                <strong>b)</strong>
                pentru lumina albastră - autovehiculele aparțin &acirc;nd poliției, jandarmeriei, poliției de frontieră, 
                Autorității Vamale Rom&acirc;ne, Agenției Naționale de Administrare Fiscală, serviciului de ambulanță sau 
                medicină legală, protecției civile, serviciilor publice Salvamont și Salvaspeo organizate de consiliile județene 
                și consiliile locale, Ministerului Apărării Naționale care &icirc;nsoțesc coloane militare, unităților speciale
                ale Serviciului Rom&acirc;n de Informații și ale Serviciului de Protecție și Pază, Administrației Naționale a 
                Penitenciarelor din cadrul Ministerului Justiției, precum și autovehiculele de serviciu ale procurorilor din Ministerul 
                Public, atunci c &acirc;nd se deplasează &icirc;n acțiuni de intervenție sau &icirc;n misiuni care au caracter de 
                urgență;    
                 <u>
                    <em>
                        <strong>(Litera b) din Alineatul (2) a fost modificată și actualizată pe www.scoalarutiera.ro la 06-01-2023)</strong>
                    </em>
                </u>               
            </p>
            <p>
                <strong>c)</strong>
                pentru lumina galbenă - autovehiculele cu mase şi/sau dimensiuni de gabarit depăşite ori care &icirc;nsoţesc 
                asemenea vehicule, cele care transportă anumite mărfuri sau substanţe periculoase, cele destinate &icirc;ntreţinerii, 
                reparării ori verificării unor lucrări efectuate &icirc;n partea carosabilă sau executării unor lucrări de drumuri, 
                curăţeniei străzilor, deszăpezirii sau tractării, transportului şi depanării autovehiculelor ramase &icirc;n pană 
                sau avariate, precum şi tractoarele care tractează utilajele agricole şi tehnologice cu dimensiuni de gabarit depăşite.         
            </p>
            <p> 
                <strong>(3)</strong>
                Autovehiculele prevăzute la alin. (2) lit. a) şi b) trebuie să fie echipate şi cu mijloace speciale sonore de avertizare.
            </p>
            <p> 
                <strong>(4)</strong>
                Pe autovehiculele aparţin &acirc;nd poliţiei şi pe cele prevăzute la alin. (2) lit. c) pot fi instalate şi 
                dispozitive luminoase cu mesaje variabile, destinate participanţilor la trafic.
            </p>
            <p> 
                <strong>(4^1)</strong>
                Pe autovehiculele Autorității Vamale Rom&acirc;ne, precum și ale Agenției Naționale de Administrare Fiscală, 
                inscripționate vizibil cu denumirea și sigla instituției din care fac parte, pot fi instalate dispozitive luminoase 
                cu mesaje variabile, de care se poate face uz pentru oprirea &icirc;n trafic a autovehiculelor &icirc;n scopul 
                exercitării atribuțiilor de control specifice, potrivit legii.    
                <u>
                    <em>
                        <strong>(Alineatul (4^1) a fost modificat și actualizat pe www.scoalarutiera.ro la 10-12-2021)</strong>
                    </em>
                </u>         
            </p>

                <h2>OUG - Articolul 37</h2>
            <p> 
                <strong>(1)</strong>
                Conducătorii de vehicule sunt obligaţi să oprească imediat, pe acostament sau, 
                &icirc;n lipsa acestuia, c&acirc;t mai aproape de marginea drumului sau bordura 
                trotuarului, &icirc;n sensul de deplasare, la apropierea şi la trecerea autovehiculelor 
                cu regim de circulaţie prioritară care au &icirc;n funcţiune mijloacele speciale de 
                avertizare luminoasă de culoare roşie şi sonore.           
            </p>
            <p> 
                <strong>(2)</strong>
                Conducătorii de vehicule sunt obligaţi să reducă viteza, să circule c&acirc;t mai 
                aproape de marginea drumului &icirc;n sensul de deplasare şi să acorde prioritate 
                la trecerea autovehiculelor cu regim de circulaţie prioritară care au &icirc;n funcţiune 
                mijloacele speciale de avertizare luminoasă de culoare albastră şi sonore.           
            </p>
            <p> 
                <strong>(3)</strong>
                &Icirc;n situaţiile prevăzute la alin. (1) şi (2), pietonilor le sunt interzise 
                traversarea şi circulaţia pe carosabil p&acirc;nă la trecerea vehiculelor respective.        
            </p>

                <h2>OUG - Articolul 61</h2>
            <p> 
                <strong>(1)</strong>
                Au regim de circulaţie prioritară numai autovehiculele prevăzute la art. 32 alin. (2) 
                lit. a) şi b), atunci c &acirc;nd se deplasează &icirc;n acţiuni de intervenţie sau 
                &icirc;n misiuni care au caracter de urgenţă. Pentru a avea prioritate de trecere, 
                aceste autovehicule trebuie să aibă &icirc;n funcţiune semnalele luminoase şi sonore.             
            </p>
            <p> 
                <strong>(2)</strong>
                Conducătorii autovehiculelor aparţin &acirc;nd instituţiilor prevăzute la art. 32 
                alin. (2) lit. a) şi b) pot &icirc;ncălca regimul legal de viteză sau alte reguli 
                de circulaţie, cu excepţia celor care reglementează trecerea la nivel cu calea ferată, 
                atunci c&acirc;nd se deplasează &icirc;n acţiuni de intervenţie sau &icirc;n misiuni 
                care au caracter de urgenţă.   
            </p>
            <p> 
                <strong>(3)</strong>
                C&acirc;nd pe drumul public circulaţia este dirijată de un poliţist rutier, conducătorii 
                autovehiculelor prevăzute la alin. (1) trebuie să respecte semnalele, indicaţiile şi 
                dispoziţiile acestuia.
            </p>
                <h2>Regulament - Articolul 91</h2>
            <p> 
                <strong>(1)</strong>
                Semnalele mijloacelor speciale de avertizare, luminoase şi sonore, se folosesc de 
                către conducătorii autovehiculelor prevăzute la art. 32 alin. (2) lit. a) şi b) din 
                Ordonanţa de urgenţă a Guvernului nr. 195/2002, republicată, cu modificările şi 
                completările ulterioare, numai dacă intervenţia sau misiunea impune urgenţă.               
            </p>
            <p> 
                <strong>(2)</strong>
                Semnalele mijloacelor de avertizare luminoasă pot fi folosite şi fără a fi &icirc;nsoţite 
                de cele sonore, &icirc;n funcţie de natura misiunii ori de condiţiile de trafic, situaţie 
                &icirc;n care autovehiculul respectiv nu are regim de circulaţie prioritară.          
            </p>
            <p> 
                <strong>(3)</strong>
                Se interzice utilizarea semnalelor mijloacelor de avertizare sonoră separat de cele luminoase.
            </p> 
                <h2>Regulament - Articolul 130</h2>
            <p> 
                Conducătorul de vehicul care se apropie de intrarea &icirc;ntr-o intersecţie, simultan cu 
                un autovehicul cu regim de circulaţie prioritară care are &icirc;n funcţiune semnalele 
                luminoase şi sonore, are obligaţia să &icirc;i acorde prioritate de trecere.                   
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