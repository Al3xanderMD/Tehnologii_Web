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
            <h1>Capitolul 10 - partea 16 - Consumul de alcool și procedura de recoltare probe</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p15.php" class="vezi-buton">Lectia precedentă</a>
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
            <h2>OUG - Articolul 22^1</h2>
            <p>
                <strong>(1)</strong>
                Retragerea permisului de conducere se dispune de către poliția rutieră și &icirc;n cazul &icirc;n care titularul acestuia 
                nu a putut fi supus testării &icirc;n vederea stabilirii concentrației de alcool pur &icirc;n aerul expirat sau testării 
                preliminare a prezenței &icirc;n organism a unor substanțe psihoactive, iar &icirc;n urma efectuării examinării medicale 
                s-au constatat elemente clinice sugestive consecutive consumului recent de băuturi alcoolice sau de substanțe psihoactive, 
                cu ocazia procedurii de recoltare a mostrelor biologice &icirc;n vederea stabilirii alcoolemiei ori a consumului de substanțe 
                psihoactive, eliber &acirc;ndu-se o dovadă &icirc;nlocuitoare a permisului de conducere fără drept de circulație.
            </p>
            <p>
                <strong>(2)</strong>
                Retragerea permisului de conducere se dispune p&acirc;nă la ora 8.00 a zilei următoare, dar nu mai puțin de 12 ore.
            </p>
            <h2>OUG - Articolul 38</h2>
            <p>Conducătorii vehiculelor, cu excepţia celor trase sau &icirc;mpinse cu m &acirc;na, instructorii auto atestaţi să efectueze 
                instruirea practică a persoanelor pentru obţinerea permisului de conducere, precum şi examinatorul autorităţii competente, 
                &icirc;n timpul desfăşurării probelor practice ale examenului pentru obţinerea permisului de conducere, sunt obligaţi să se 
                supună testării aerului expirat şi/sau recoltării probelor biologice &icirc;n vederea stabilirii alcoolemiei ori a consumului 
                de substanţe psihoactive, la solicitarea poliţistului rutier.</p>
            <h2>OUG - Articolul 88</h2>
            <p>
                <strong>(1)</strong>
                Recoltarea mostrelor biologice se face numai &icirc;n prezenţa unui poliţist rutier, &icirc;n condiţiile art. 190 alin. (8) 
                din Codul de procedură penală, &icirc;n următoarele spaţii ale instituţiilor medicale:
            </p>
            <p>
                <strong>a)</strong>
                &icirc;n interiorul unităţilor de asistenţă medicală autorizate;<br/>
                <strong>b) </strong>
                &icirc;n ambulanţe av &acirc;nd echipaj cu medic ori autospeciale cu această funcţie aparţin &acirc;nd Serviciului mobil 
                de urgenţă, reanimare şi descarcerare;<br/>
                <strong>c) </strong>
                &icirc;n interiorul unităţilor medico-legale.
            </p>
            <p>
                <strong>(3)</strong>
                Stabilirea prezenţei alcoolului &icirc;n aerul expirat sau testarea preliminară a prezenţei &icirc;n organism a unor substanţe 
                psihoactive se face de către poliţia rutieră, cu ajutorul unor mijloace tehnice certificate.
            </p>
            <p>
                <strong>(4)</strong>
                Stabilirea concentraţiei de alcool &icirc;n aerul expirat se face de către poliţia rutieră, cu ajutorul unui mijloc tehnic omologat 
                şi verificat metrologic.
            </p>
            <p>
                <strong>(5)</strong>
                Persoana care conduce pe drumurile publice un vehicul pentru care legea prevede obligativitatea deţinerii permisului de conducere, 
                testată de poliţistul rutier cu un mijloc tehnic omologat şi verificat metrologic şi depistată ca av&acirc;nd o concentraţie de 
                p&acirc;nă la 0,40 mg/l alcool pur &icirc;n aerul expirat, &icirc;i poate solicita acestuia să i se recolteze mostre biologice 
                &icirc;n cadrul unităţilor sau instituţiilor medicale prevăzute la alin. (1), &icirc;n vederea stabilirii &icirc;mbibaţiei de 
                alcool &icirc;n s &acirc;nge.
            </p>
            <p>
                <strong>(6) </strong>
                Persoana care conduce pe drumurile publice un vehicul pentru care legea prevede obligativitatea deţinerii permisului de conducere, 
                testată cu un mijloc tehnic omologat şi verificat metrologic şi depistată ca av &acirc;nd o concentraţie de peste 0,40 mg/l alcool 
                pur &icirc;n aerul expirat, este obligată să se supună recoltării mostrelor biologice, &icirc;n vederea stabilirii &icirc;mbibaţiei 
                de alcool &icirc;n s &acirc;nge.
            </p>
            <p>
                <strong>(7)</strong>
                Conducătorilor de vehicule pentru care legea prevede obligativitatea deţinerii permisului de conducere, testaţi &icirc;n trafic cu 
                un mijloc certificat care indică prezenţa &icirc;n organism a unor substanţe psihoactive, li se recoltează obligatoriu mostre biologice.
            </p>
            <h2>Regulament - Articolul 185</h2>
            <p>
                <strong>(1)</strong>
                Constatarea contravenției de conducere a unui autovehicul, tractor agricol sau forestier ori tramvai de către o persoana care se 
                află sub influența alcoolului se face prin testarea aerului expirat de aceasta cu un mijloc tehnic certificat sau cu un mijloc 
                tehnic omologat și verificat metrologic.
            </p>
            <p>
                <strong>(2) </strong>
                Conducătorilor de autovehicule, tractoare agricole sau forestiere ori tramvaie li se recoltează obligatoriu mostre biologice 
                &icirc;n vederea stabilirii alcoolemiei atunci c &acirc;nd:
            </p>
            <p>
                <strong>a)</strong>
                rezultatul testării arată o concentraţie mai mare de 0,40 mg/l alcool pur &icirc;n aerul expirat;<br/>
                <strong>b)</strong>
                &icirc;n eveniment este implicat un vehicul care transporta mărfuri sau produse periculoase.
            </p>
            <p>
                <strong>(3)</strong>
                Conducătorilor de vehicule li se recoltează obligatoriu mostre biologice atunci c&acirc;nd rezultatul testării preliminare 
                cu ajutorul unor mijloace tehnice certificate indică prezența &icirc;n organism a substanțelor psihoactive.
            </p>
            <h2>Regulament - Articolul 191</h2>
            <p>
                <strong>(1)</strong>
                &Icirc;n situația &icirc;n care contravenientul a săv&acirc;rșit fapta pe raza de competență a altui județ dec&acirc;t 
                cel care &icirc;l are &icirc;n evidență, permisul de conducere se păstrează la serviciul poliției rutiere pe teritoriul căruia a 
                fost constatată contravenția p&acirc;nă la expirarea termenului prevăzut de lege pentru introducerea pl &acirc;ngerii &icirc;mpotriva 
                procesului-verbal de constatare a contravenției, după care se trimite serviciului poliției rutiere al județului care &icirc;l are 
                &icirc;n evidență.
            </p>
            <p>
                <strong>(2)</strong>
                Permisul de conducere se păstrează la serviciul poliţiei rutiere din judeţul care are &icirc;n evidenta titularul, p&acirc;nă la 
                restituire sau, după caz, p&acirc;nă la anularea documentului.
            </p>
            <h2>Regulament - Articolul 192</h2>
            <p>
                <strong>(1)</strong>
                Conducătorului de autovehicul, tractor agricol sau forestier ori tramvai, testat cu un mijloc tehnic certificat sau cu un mijloc 
                tehnic omologat și verificat metrologic, i se reține permisul de conducere dacă valoarea concentrației este de cel mult 0,40 mg/l 
                alcool pur &icirc;n aerul expirat, eliber &acirc;ndu-se dovada &icirc;nlocuitoare fără drept de circulație, dacă nu dorește recoltarea 
                mostrelor biologice &icirc;n vederea stabilirii alcoolemiei, &icirc;n condițiile stabilite la art. 194.
            </p>
            <p>
                <strong>(2)</strong>
                C &acirc;nd conducătorul vehiculului solicita recoltarea mostrelor biologice &icirc;n vederea stabilirii alcoolemiei, acesta va 
                fi &icirc;nsoțit de polițistul rutier la cea mai apropiată instituție medicală autorizata sau instituție medico-legala, iar după 
                recoltare i se va elibera o dovadă &icirc;nlocuitoare cu drept de circulație pentru cel mult 15 zile, a carei valabilitate intra 
                &icirc;n vigoare la 24 de ore de la cea de-a două recoltare de mostre biologice.
            </p>
            <h2>Regulament - Articolul 193</h2>
            <p>
                <strong>(1) </strong>
                Conducătorul de autovehicul, tractor agricol sau forestier ori tramvai trebuie &icirc;nsoțit de polițistul rutier sau, după caz, 
                de polițistul de frontieră, imediat, la cea mai apropiată instituție medicală autorizata sau instituție medico-legala pentru a i 
                se recolta mostre biologice &icirc;n vederea stabilirii alcoolemiei, dacă prin testarea cu un mijloc tehnic certificat sau cu un 
                mijloc tehnic omologat și verificat metrologic s-a constatat că valoarea concentrației de alcool este mai mare de 0,40 mg/l alcool 
                pur &icirc;n aerul expirat.
            </p>
            <p>
                <strong>(2)</strong>
                După recoltarea mostrelor biologice, polițistul rutier retine permisul de conducere și eliberează dovada &icirc;nlocuitoare fără 
                drept de circulație.
            </p>
            <h2>Regulament - Articolul 194</h2>
            <p>
                <strong>(1) </strong>
                Pentru stabilirea alcoolemiei se recoltează două mostre biologice la interval de o oră &icirc;ntre prelevări.
            </p>
            <p>
                <s>
                    <strong>(2) </strong>
                    Refuzul persoanei examinate de a i se recolta cea de-a două proba biologică se consemnează &icirc;n procesul-verbal de prelevare.
                </s>
            </p>
            <h2>Regulament - Articolul 195</h2>
            <p>
                Conducătorului de autovehicul, tractor agricol sau forestier ori tramvai, testat preliminar cu ajutorul unui mijloc tehnic certificat 
                care a relevat prezența &icirc;n organism a substanțelor psihoactive, i se aplică procedura prevăzută la art. 192.
            </p>
            <h2>Codul penal - Articolul 336</h2>
            <p>Conducerea unui vehicul sub influenţa alcoolului sau a altor substanţe</p>
            <p>
                <strong>(1)</strong>
                Conducerea pe drumurile publice a unui vehicul pentru care legea prevede obligativitatea deţinerii permisului de conducere de către 
                o persoană care are o &icirc;mbibaţie alcoolică de peste 0,80 g/l alcool pur &icirc;n s &acirc;nge se pedepseşte cu &icirc;nchisoare 
                de la unu la 5 ani sau cu amendă.
            </p>
            <p>
                <strong>(2)</strong>
                Cu aceeaşi pedeapsă se sancţionează şi persoana, aflată sub influenţa unor substanţe psihoactive, care conduce un vehicul pentru care 
                legea prevede obligativitatea deţinerii permisului de conducere.
            </p>
            <p>
                <strong>(3)</strong>
                Dacă persoana aflată &icirc;n una dintre situaţiile prevăzute &icirc;n alin. (1) şi alin. (2) efectuează transport public de persoane, 
                transport de substanţe sau produse periculoase ori se află &icirc;n procesul de instruire practică a unor persoane pentru obţinerea 
                permisului de conducere sau &icirc;n timpul desfăşurării probelor practice ale examenului pentru obţinerea permisului de conducere, 
                pedeapsa este &icirc;nchisoarea de la 2 la 7 ani.
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