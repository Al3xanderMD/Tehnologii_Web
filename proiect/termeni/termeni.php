<?php
session_start();
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
    $conectat=0;
}
else $conectat=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoT</title>
    <link rel="stylesheet" href="../home/index.css">
    <script src="https://kit.fontawesome.com/0070301605.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <nav>
        <a href="../home/index.php"><img src="../images/logo2.png" alt="Logo"></a>
        <div class="header-links">
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
                <li><a href="../legislatie/index.php">Legislatie</a></li>
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
    <div class="termeni-conditii">
        <h1>Termeni, conditii si politica de confidentialitate</h1>
        <h3>Politica de confidentialitate</h3>
        <p>Prin utilizarea aplicației web/mobile <a href="../home/index.php">www.RoT.ro</a>/ RoT, se consideră că ați acceptat Termenii și Condițiile precum și Politica de Confidențialitate din prezenta pagină. inainte de a ne oferi date cu caracter personal (nume, prenume și adresă de e-mail) prin intermediul aplicației web/mobile, RoT, la crearea unui cont de utilizator, vi se va solicita in mod expres să acceptați acești termeni și condiții precum și această politică de confidențialitate. Ne rezervăm dreptul de a schimba și actualiza in orice moment conținutul aplicației web/mobile, precum și Termenii și Condițiile / Politica de confidențialitate fără nici un fel de notificare prealabilă. De aceea, vă rugăm să vizitați periodic această secțiune pentru a verifica Termenii și Condițiile precum și Politica de Confidențialitate pe care ați agreat să le respectați.</p>
        <h3>Date cu caracter personal</h3>
        <p>Puteți accesa aplicația web/mobile <a href="../home/index.php">www.RoT.ro</a>&nbsp;/ RoT fără să vă creați un cont de utilizator, caz in care nu este necesar să vă dezvăluiți identitatea (nume, prenume și adresă de e-mail). Dar pentru a vă memora statistica, evoluția dumneavoastră și altele, vă puteți crea un cont de utilizator, gratuit. Administratorul aplicației web/mobile  RoT se angajează să păstreze caracterul confidențial al informației furnizate de către dumneavoastră la accesarea și completarea formularului electronic de creare cont.</p>
        <h3>Prelucrarea datelor cu caracter personal</h3>
        <p>Categoriile de date personale solicitate pe aplicația web/mobile <a href="../home/index.php">www.RoT.ro</a>RoT sunt: nume, prenume și adresă de email. Datele prelucrate sunt confidențiale, scopul colectării acestora fiind exclusiv pentru crearea contului de utilizator, pentru a va putea exprima prin comentarii de tip text și pentru trimiterea de către noi, ocazional, pe respectivele adrese de email notificări și informații ce au strictă legătură cu domeniul de activitate a aplicației web/mobile RoT</p>
        <h3>Solicitare si stergere date personale</h3>
        <p>Scopul acestei aplicații web/mobile, este unul educațional, iar noile reguli europene de protecție a datelor cu caracter personal (GDPR) fac parte din acest context. Prin urmare, &icirc;ți putem pune la dispoziție toate datele personale pe care le avem despre tine, c&acirc;t și opțiunea de a solicita ștergerea acestor date.</p>
        <h3>Drepturile tale in contextul GDPR</h3>
        <p>Iată care sunt drepturile tale &icirc;n contextul colectării și prelucrării datelor:</p>
        <ul>
	        <li>Dreptul de a fi informat cu privire la cum sunt colectate și folosite datele tale personale declarate;</li>
	        <li>Dreptul de a accesa datele pe care le avem despre tine;</li>
	        <li>Dreptul de a cere rectificarea datelor pe care le avem despre tine;</li>
	        <li>Dreptul de a solicita ștergerea datelor pe care le avem despre tine;</li>
	        <li>Dreptul de a solicita oprirea trimiterii de mesaje de marketing către tine;</li>
	        <li>Dreptul de a solicita trimiterea datelor tale personale către tine sau către un alt operator;</li>
	        <li>Dreptul de a depune o plangere, cu referire la folosirea datelor tale, către organele abilitate.</li>
        </ul>
    </div>
    <footer class="footer">
        <div class="footer-details">
        <h4>Despre noi</h4>
        <p>RoT (Romanian Traffic Signs Tutor) este o aplicatie web utila pentru cei ce vor sa invete eficient pentru examenul auto.<br>Aici gasesti tot ce ai nevoie pentru a te pregati
            si pentru a lua examenul din prima.
        </p>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="termeni.php">Termeni</a></li>
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
    </footer>
    </body>
    </html>

