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
            <h1>Capitolul 9 - partea 8 - Obligațiile conducătorilor auto de transport de mărfuri</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c9_p9.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 66</h2>
            <p>
                <strong>(1)</strong>
                Atestatul profesional este obligatoriu pentru conducătorul autovehiculului care efectuează transport 
                de mărfuri periculoase, transport public de persoane, transport &icirc;n cont propriu de persoane cu 
                microbuze şi autobuze, transporturi agabaritice, precum şi pentru autovehiculele de transport marfă 
                cu masa maximă autorizată mai mare de 3,5 tone, care circulă &icirc;n trafic intern şi internaţional.
            </p>
            <p>
                <strong>(4)</strong>
                Certificatul de atestare profesională care conferă titularului dreptul de a efectua activitatea 
                pentru care a fost eliberat este valabil numai &icirc;nsoţit de permisul de conducere corespunzător 
                categoriei din care face parte vehiculul condus.
            </p>
            <h2>OUG - Articolul 67</h2>
            <p>
                Se interzice transportul pe drumurile publice al mărfurilor şi produselor periculoase &icirc;n vehicule 
                care nu au dotările şi echipamentele necesare sau care nu &icirc;ndeplinesc condiţiile tehnice şi de 
                agreere prevăzute &icirc;n Acordul european referitor la transportul rutier internaţional al mărfurilor 
                periculoase (A.D.R.), &icirc;ncheiat la Geneva la 30 septembrie 1957, la care Rom&acirc;nia a aderat 
                prin Legea nr. 31/1994, ori pentru care conducătorul vehiculului nu deţine certificat A.D.R. corespunzător.
            </p>
            <h2>OUG - Articolul 68</h2>
            <p>
                <strong>(2)</strong>
                Vehiculele care, prin construcţie sau datorită &icirc;ncărcăturii transportate, depăşesc masa şi/sau 
                gabaritul prevăzute de normele legale pot circula pe drumul public numai pe traseele stabilite de 
                administratorul drumului public sau, după caz, de autorităţile administraţiei publice locale, cu respectarea 
                prevederilor legale &icirc;n vigoare.
            </p>
            <h2>OUG - Articolul 69</h2>
            <p>
                Autovehiculele cu mase şi/sau gabarite depăşite, cele care transportă mărfuri sau produse periculoase, 
                precum şi cele de &icirc;nsoţire trebuie să aibă montate semnalele speciale de avertizare cu lumina galbenă, 
                prevăzute la art. 32 alin. (1) lit. c), iar conducătorii acestora trebuie să le menţină &icirc;n funcţiune pe 
                toată perioada deplasării pe drumul public.
            </p>
            <h2>Regulament - Articolul 12</h2>
            <p>Autovehiculele care depăşesc masa şi/sau gabaritul trebuie echipate cu următoarele dispozitive suplimentare 
                de semnalizare:</p>
            <p>
                <strong>a)</strong>
                o plăcuţă de identificare fluorescent-reflectorizantă, av&acirc;nd fondul alb şi chenarul rosu, 
                montată la partea din st &acirc;nga faţă;<br/>
                <strong>b)</strong>
                marcaje fluorescent-reflectorizante aplicate la partea din spate a autovehiculului sau &icirc;ncărcăturii, 
                c&acirc;t mai aproape de marginile laterale, formate din benzi alternanţe albe şi roşii, descendente către 
                exterior, dacă lăţimea autovehiculului depăşeşte 2,5 m;<br/>
                <strong>c)</strong>
                unul sau mai multe dispozitive speciale de avertizare luminoasă de culoare galbenă, montate astfel 
                &icirc;nc&acirc;t lumina emisă de acestea să fie vizibilă din faţă, din spate şi din ambele părţi laterale, 
                precum şi dispozitive fluorescent-reflectorizante de culoare galbenă montate pe părţile laterale la distanţă 
                de 1,5 m intre ele;<br/>
                <strong>d)</strong>
                lumini montate pe părţile laterale ale &icirc;ncărcăturii ori vehiculului care depăşeşte lăţimea de 2,5 m, 
                care trebuie să funcţioneze concomitent cu luminile de poziţie, precum şi un dispozitiv fluorescent-reflectorizant.
            </p>
            <h2>Regulament - Articolul 150</h2>
            <p>
                <strong>(1) </strong>
                &Icirc;ncărcătura unui vehicul trebuie să fie aşezată şi, la nevoie, fixată astfel &icirc;nc&acirc;t:
            </p>
            <p>
                <strong>a)</strong>
                să nu pună &icirc;n pericol persoane ori să nu cauzeze daune proprietăţii publice sau private;<br/>
                <strong>b)</strong>
                să nu st &acirc;njenească vizibilitatea conducătorului şi să nu pericliteze stabilitatea ori conducerea 
                vehiculului;<br/>
                <strong>c)</strong>
                să nu fie t&acirc;r&acirc;tă, să nu se scurgă şi să nu cadă pe drum;<br/>
                <strong>d)</strong>
                să nu mascheze dispozitivele de semnalizare, catadioptrii şi plăcuţele cu numărul de &icirc;nmatriculare 
                sau de &icirc;nregistrare ori provizoriu, iar &icirc;n cazul vehiculelor fără motor, semnalele făcute cu 
                braţele de conducătorul acestora;<br/>
                <strong>e)</strong>
                să nu provoace zgomot care să jeneze conducătorul, participanţii la trafic ori să sperie animalele şi să 
                nu producă praf sau mirosuri pestilenţiale.
            </p>
            <p>
                <strong>(2)</strong>
                Lanţurile, cablurile, prelatele şi alte accesorii ce servesc la asigurarea sau protecţia &icirc;ncărcăturii 
                trebuie să o fixeze c&acirc;t mai bine de vehicul şi să nu constituie ele &icirc;nsele un pericol pentru 
                siguranţa circulaţiei.
            </p>
            <p>
                <strong>(3) </strong>
                &Icirc;ncărcătura care consta &icirc;n materiale sau produse ce se pot &icirc;mprăştia &icirc;n timpul 
                mersului trebuie acoperită cu o prelată. C&acirc;nd &icirc;ncărcătura consta &icirc;n obiecte mari ori 
                grele, aceasta trebuie fixată pentru a nu se deplasa &icirc;n timpul transportului şi a nu depăşi gabaritul 
                vehiculului.
            </p>
            <h2>Regulament - Articolul 171</h2>
            <p>
                Autovehiculul sau ansamblul de vehicule care, prin construcţie sau datorită &icirc;ncărcăturii transportate, 
                depăşeşte masa totala de 80 tone şi/sau lungimea de 40 m ori lăţimea de 5 m sau &icirc;nălţimea de 5 m poate 
                circula pe drumul public numai &icirc;n baza autorizaţiei speciale emise de administratorul acestuia şi cu 
                avizul poliţiei rutiere.
            </p>
            <h2>Regulament - Articolul 172</h2>
            <p>
                <strong>(1) </strong>
                &Icirc;n circulaţia pe drumurile publice, autovehiculul sau ansamblul de vehicule care, cu sau fără 
                &icirc;ncărcătura, are o lăţime intre 3,2 m şi 4,5 m inclusiv sau o lungime mai mare de 25 m trebuie 
                să fie precedat de un autovehicul de &icirc;nsoţire, iar cel cu lăţimea mai mare de 4,5 m sau lungimea 
                mai mare de 30 m trebuie să fie &icirc;nsoţit de două autovehicule care să circule unul &icirc;n faţă 
                şi celălalt &icirc;n spate.
            </p>
            <p>
                <strong>(2) </strong>
                Pe autostrăzi autovehiculul care, cu sau fără &icirc;ncărcătura, depăşeşte lăţimea de 3,2 m trebuie să fie 
                urmat de un autovehicul de &icirc;nsoţire.
            </p>
            <p>
                <strong>(3)</strong>
                Autovehiculul de &icirc;nsoţire trebuie să fie echipat cu un dispozitiv special de avertizare cu lumină 
                galbenă şi să aibă montată, &icirc;n funcţie de locul ocupat la &icirc;nsoţire, la partea st &acirc;nga 
                din faţă sau din spate, plăcuţă de identificare reflectorizantă, av &acirc;nd fondul alb şi chenarul rosu.
            </p>
            <p>
                <strong>(4) </strong>
                Conducătorul autovehiculului cu masa şi/sau dimensiuni de gabarit depăşite, precum şi conducătorii 
                autovehiculelor de &icirc;nsoţire sunt obligaţi să pună şi să menţină &icirc;n funcţiune semnalele 
                speciale de avertizare cu lumină galbenă, prevăzute la art. 32 alin. (1) lit. c) din Ordonanţa de urgenţă 
                a Guvernului nr. 195/2002, republicată, cu modificările şi completările ulterioare, pe toată perioadă 
                deplasării pe drumul public.
            </p>
            <h2>Regulament - Articolul 173</h2>
            <p>
                Este interzisă circulaţia autovehiculelor cu mase şi/sau gabarite depăşite:<br/>
                <strong>a)</strong>
                pe sectoarele de drum unde sunt instalate indicatoare de interzicere, restricţie sau limitare a accesului 
                acestora, dacă vehiculul sau ansamblul de vehicule atinge ori depăşeşte lăţimea, &icirc;nălţimea, lungimea 
                sau masele pe axe ori masa totala maxima admisă;
            </p>
            <p>
                <strong>b)</strong>
                c&acirc;nd vizibilitatea este redusă sau partea carosabilă este acoperită cu polei, gheaţă sau zăpadă.
            </p>
            <h2>Regulament - Articolul 174</h2>
            <p>
                <strong>(1)</strong>
                Transportul mărfurilor sau produselor periculoase se efectuează numai dacă sunt &icirc;ndeplinite următoarele 
                condiţii:
            </p>
            <p>
                <strong>a)</strong>
                vehiculul &icirc;ndeplineşte condiţiile tehnice şi de agreere, prevăzute &icirc;n Acordul european referitor 
                la transportul rutier internaţional al mărfurilor periculoase (A.D.R.), &icirc;ncheiat la Geneva la 30 septembrie 
                1957, la care Rom&acirc;nia a aderat prin Legea nr. 31/1994, cu modificările ulterioare;<br/>
                <strong>b)</strong>
                vehiculul are dotările şi echipamentele necesare prevăzute &icirc;n reglementările &icirc;n vigoare;<br/>
                <strong>c) </strong>
                conducătorul vehiculului deţine certificat ADR corespunzător.
            </p>
            <p>
                <strong>(2)</strong>
                Administratorul drumului public stabileşte, cu avizul poliţiei rutiere, traseele interzise accesului vehiculelor 
                care efectuează transport de mărfuri sau produse periculoase, cu indicarea rutelor ocolitoare sau alternative 
                şi a semnalizării corespunzătoare acestora.
            </p>
            <h2>Regulament - Articolul 175</h2>
            <p>
                <strong>(1)</strong>
                Conducătorul vehiculului care efectuează transport de mărfuri sau produse periculoase trebuie să aibă asupra 
                să documentele de transport prevăzute de lege, să cunoască normele referitoare la transportul şi la manipularea 
                &icirc;ncărcăturii, put&acirc;nd fi &icirc;nsoţit de persoane care să cunoască bine caracteristicile acestora.
            </p>
            <p>
                <strong>(2)</strong>
                &Icirc;n cabina autovehiculului care transporta mărfuri sau produse periculoase se pot află numai membrii 
                echipajului.
            </p>
            <p>
                <strong>(3)</strong>
                Dacă din cauza deteriorării ambalajului sau din alte cauze marfa ori produsul periculos se &icirc;mprăştie 
                pe drum, conducătorul este obligat să oprească imediat, să ia măsuri de avertizare a celorlalţi conducători 
                care circulă pe drumul public şi a persoanelor din jur, să semnalizeze pericolul cu mijloacele pe care le 
                are la &icirc;ndem&acirc;nă şi să anunţe administratorul drumului sau cea mai apropiată unitate de poliţie.
            </p>
            <h2>Regulament - Articolul 176</h2>
            <p>Se interzice conducătorului de autovehicul care transporta mărfuri sau produse periculoase:</p>
            <p>
                <strong>a) </strong>
                să provoace şocuri autovehiculului &icirc;n mers;<br/>
                <strong>b)</strong>
                să fumeze &icirc;n timpul mersului ori să aprindă foc la oprire sau staţionare, la o distanţă mai mica de 50 m 
                de autovehicul;<br/>
                <strong>c)</strong>
                să lase autovehiculul şi &icirc;ncărcătura fără supravegherea să, a &icirc;nsoţitorului ori a unei alte persoane 
                calificate;<br/>
                <strong>d)</strong>
                să remorcheze un vehicul rămas &icirc;n pană;<br/>
                <strong>e)</strong>
                să urmeze alte trasee sau să staţioneze &icirc;n alte locuri dec &acirc;t cele stabilite, precum şi pe partea 
                carosabilă a drumului pe timp de noapte;<br/>
                <strong>f) </strong>
                să transporte alte &icirc;ncărcături care, prin natura lor, ar putea determina o sporire a pericolului;<br/>
                <strong>g) </strong>
                să permită prezenţa &icirc;n autovehicul a altor persoane, cu excepţia celuilalt conducător, a &icirc;nsoţitorilor 
                sau a celor care &icirc;ncarcă ori descarcă mărfurile sau produsele transportate;<br/>
                <strong>h)</strong>
                să intre pe sectoarele de drum pe care &icirc;i este interzis accesul;<br/>
                <strong>i) </strong>
                să păstreze &icirc;n autovehicul rezerve de combustibil &icirc;n ambalaje care nu sunt special confecţionate 
                &icirc;n acest scop.
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