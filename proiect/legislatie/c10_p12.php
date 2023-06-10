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
            <h1>Capitolul 10 - partea 12 - Contravenții - clasa 5 (doar pentru persoane juridice)</h1>
        </div>
        <div class="lectie">
        <div class="video">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/">
            </iframe>                                   
        </div>
        <div>
            <a href="c10_p13.php" class="vezi-buton">Lectia urmatoare</a>
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
            <h2>OUG - Articolul 105</h2>
            <p>
                <strong>
                    Constituie contravenţii şi se sancţionează cu amenda prevăzută &icirc;n clasa a V-a de sancţiuni următoarele fapte 
                    săv&acirc;rşite de către persoane juridice:
                </strong>
            </p>
            <p>
                <strong>1.</strong>
                nesemnalizarea sau semnalizarea necorespunzătoare a drumului public sau a trecerilor la nivel cu calea ferată, conform 
                standardelor &icirc;n vigoare; ne &icirc;nlăturarea obstacolelor care &icirc;mpiedică vizibilitatea conducătorilor de 
                vehicule la trecerile la nivel cu calea ferată;<br/>
                <strong>2.</strong>
                ne &icirc;ndeplinirea obligaţiilor de instalare a mijloacelor de semnalizare rutieră, precum şi a dispozitivelor speciale 
                de acest fel;<br/>
                <strong>3.</strong>
                nesemnalizarea sau semnalizarea necorespunzătoare, conform standardelor &icirc;n vigoare, a obstacolelor sau lucrărilor 
                aflate &icirc;n zona drumului public;<br/>
                <strong>4.</strong>
                neasigurarea stării de viabilitate a părţii carosabile potrivit standardelor &icirc;n vigoare, precum şi neluarea măsurilor 
                de &icirc;nlăturare a obstacolelor aflate pe partea carosabilă;<br/>
                <strong>5.</strong>
                amplasarea &icirc;n zona drumului public de dispozitive care pot fi confundate cu indicatoarele ori instalaţiile care servesc 
                la semnalizarea rutieră ori realizarea de construcţii sau instalaţii ori crearea de alte obstacole de natura să le limiteze 
                vizibilitatea sau eficacitatea;<br/>
                <strong>6.</strong>
                instituirea de restricţii de circulaţie pe drumurile publice fără autorizaţia administratorului drumului şi avizul poliţiei 
                rutiere;<br/>
                <strong>7.</strong>
                nerespectarea termenelor şi condiţiilor stabilite de administratorul drumului public şi de poliţia rutieră privind amplasarea 
                şi executarea de lucrări &icirc;n zona drumului public;<br/>
                <strong>8.</strong>
                nerespectarea obligaţiilor de către executant sau, după caz, beneficiar ca, după terminarea lucrărilor &icirc;n partea 
                carosabilă, acostament sau trotuar, să readucă drumul public cel puţin la starea iniţială;<br/>
                <strong>9.</strong>
                ne &icirc;ndeplinirea obligaţiilor ce le revin, potrivit normelor legale, &icirc;n legatură cu vehiculele şi conducătorii 
                acestora;<br/>
                <strong>10.</strong>
                nerespectarea obligației de a comunica, &icirc;n termenul indicat &icirc;n cuprinsul solicitării poliției rutiere sau poliției 
                locale, datele de identificare ale persoanei căreia i-a &icirc;ncredințat vehiculul pentru a-l conduce pe drumurile publice, 
                prevăzute la art. 39;
            </p>
            <p>
                <strong>11.</strong>
                lipsa dotărilor specifice obligatorii pentru admiterea şi menţinerea &icirc;n circulaţie a vehiculelor;<br/>
                <strong>12.</strong>
                neasigurarea &icirc;nsoţirii deplasării vehiculelor care efectuează transport de mărfuri sau produse periculoase, precum şi 
                a celor cu mase sau gabarite depăşite;<br/>
                <strong>13. </strong>
                nerespectarea obligaţiei de a echipa personalul de execuţie a lucrărilor &icirc;n zona drumului public cu echipamente de 
                protecţie-avertizare fluorescent-reflectorizant;<br/>
                <strong>14. </strong>
                amplasarea staţiilor mijloacelor de transport public de persoane fără avizul poliţiei rutiere;<br/>
                <strong>15. </strong>
                nerespectarea obligaţiilor de a efectua orele de educaţie rutieră &icirc;n unităţile de &icirc;nvătăm&acirc;nt;<br/>
                <strong>16. </strong>
                practicarea actelor de comerţ pe trotuar, pe acostament sau pe partea carosabilă, iar &icirc;n afara localităţilor, &icirc;n zona 
                de siguranţă a drumului public;<br/>
                <strong>17.</strong>
                <strong></strong>
                refuzul nejustificat de a &icirc;nmatricula sau de a &icirc;nregistra un vehicul ori de a elibera plăcuţele cu numărul de 
                &icirc;nmatriculare sau de &icirc;nregistrare ori de a menţiona &icirc;n certificatul de &icirc;nmatriculare datele de identificare 
                a utilizatorului;<br/>
                <strong>18.</strong>
                ne&icirc;ndeplinirea, de către proprietarul sau deţinătorul mandatat al vehiculului, a obligaţiei de a solicita autorităţii 
                competente &icirc;nscrierea &icirc;n certificatul de &icirc;nmatriculare sau de &icirc;nregistrare a datelor de identificare a 
                utilizatorului;<br/>
                <strong>19.</strong>
                ne&icirc;ndeplinirea obligaţiilor ce revin organizatorilor &icirc;ntrecerilor autorizate de a lua toate măsurile necesare pentru 
                desfăşurarea &icirc;n siguranţă a acestora, precum şi pentru protecţia celorlalţi participanţi la trafic;<br/>
                <strong>20. </strong>
                ne&icirc;ndeplinirea obligaţiei, de către autorităţile publice locale, de a efectua amenajări rutiere destinate circulaţiei pietonilor, 
                bicicliştilor, vehiculelor cu tracţiune animală şi calmării traficului, precum şi nesemnalizarea sau semnalizarea necorespunzătoare a 
                acestora;<br/>
                <strong>21. </strong>
                &icirc;ncredinţarea unui vehicul destinat transportului public de persoane sau de mărfuri pentru a fi condus pe drumurile publice de 
                către un conducător de autovehicul sau tramvai care nu are atestat profesional;<br/>
                <strong>22. </strong>
                dispunerea efectuării transportului de mărfuri şi produse periculoase sau a vehiculelor cu masa şi/sau gabaritul depăşit fără 
                autorizaţie specială emisă &icirc;n condiţiile legii ori pe alte trasee dec&acirc;t cele stabilite de autoritatea competentă;<br/>
                <strong>23.</strong>
                ne &icirc;ndeplinirea obligaţiei de &icirc;nştiinţare a poliţiei rutiere de pe a cărei rază de competenţă pleacă transportul de 
                mărfuri sau produse periculoase cu privire la traseul stabilit şi localitatea de destinaţie;<br/>
                <strong>24.</strong>
                ne &icirc;ndeplinirea obligaţiei de către autorităţile administraţiei publice locale de a amenaja drumuri laterale &icirc;n condiţiile 
                art. 71 alin. (2);<br/>
                <strong>25. </strong>
                nerespectarea obligaţiei administratorului drumului public sau autorităţii publice locale de a executa sau, după caz, de a desfiinţa 
                amenajările rutiere, &icirc;n termenul stabilit &icirc;mpreună cu poliţia rutieră;<br/>
                <strong>26. </strong>
                punerea &icirc;n aplicare a planurilor de urbanism generale, zonale sau de detaliu, fără ca acestea să fie avizate &icirc;n prealabil 
                de către administratorul drumului public şi poliţia rutieră;<br/>
                <strong>27.</strong>
                &icirc;ncălcarea dispoziţiilor legale privind efectuarea de modificări şi completări &icirc;n certificatul de &icirc;nmatriculare sau 
                de &icirc;nregistrare ori &icirc;n cartea de identitate a vehiculului, precum şi verificarea tehnică periodică a acestuia fără 
                solicitarea prezentării de către proprietar a dovezii existentei asigurării de răspundere civilă pentru pagube produse terţilor 
                prin accidente de autovehicule;<br/>
                <strong>28. </strong>
                ne&icirc;ndeplinirea obligaţiei de &icirc;ntreţinere a drumului public pe timp de iarna, potrivit reglementarilor &icirc;n vigoare.<br/>
                <strong>29.</strong>
                nerespectarea obligaţiei de comunicare prevăzute la art. 80^1 şi la art. 81 alin. (3) sau comunicarea de date inexacte ori incomplete.<br/>
                <strong>30. </strong>
                ne &icirc;ndeplinirea de către unitatea medicală autorizată a obligației de a comunica &icirc;n termenul prevăzut la art. 22 
                alin. (6^1) faptul că persoana este inaptă medical pentru a conduce un autovehicul, tractor agricol sau forestier ori tramvai 
                poliției rutiere pe a cărei rază teritorială &icirc;și desfășoară activitatea, precum și medicului trimițător.
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