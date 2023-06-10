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
        <link rel="stylesheet" href="style.css">
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
        <div class="titlu">
            <h1>Curs de legisla&#539ie rutier&#259</h1>
        </div>
        <div class="text-box">
            <div class="box1"> 
                <a href="c1_p1.php"><img src="c1_p1.jpg" style="width:100%;"></a>
                <a href="c1_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 1 - partea 1 - Drumul public</p></div>
            <div class="box1"> 
                <a href="c1_p2.php"><img src="c1_p2.jpg" style="width:100%;"></a>
                <a href="c1_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 1 - partea 2 - Sensul si banda de circula&#539ie</p></div>
            <div class="box1"> 
                <a href="c2_p1.php"><img src="c2_p1.jpg" style="width:100%;"></a>
                <a href="c2_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p>Capitol 2 - partea 1 - Deplasarea vehiculelor pe drumul public -</p></div>
            <div class="box1"> 
                <a href="c2_p2.php"><img src="c2_p2.jpg" style="width:100%;"></a>
                <a href="c2_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 2 - partea 2 - Circula&#539ia &#238n intersec&#539ii</p></div>
            <div class="box1"> 
                <a href="c3_p1.php"><img src="c3_p1.jpg" style="width:100%;"></a>
                <a href="c3_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 3 - partea 1 - Semnalizarea rutier&#259 &#351i ordinea de prioritate</p></div>
            <div class="box1"> 
                <a href="c3_p2.php"><img src="c3_p2.jpg" style="width:100%;"></a>
                <a href="c3_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 3 - partea 2 - Semnalele poli&#539istului</div>
            <div class="box1"> 
                <a href="c3_p3.php"><img src="c3_p3.jpg" style="width:100%;"></a>
                <a href="c3_p3.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 3 - partea 3 - Semnalele speciale de avertizare </p></div>
            <div class="box1"> 
                <a href="c3_p4.php"><img src="c3_p4.jpg" style="width:100%;"></a>
                <a href="c3_p4.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 3 - partea 4 - Semnalizarea temporar&#259</p></div>
            <div class="box1"> 
                <a href="c3_p5.php"><img src="c3_p5.jpg" style="width:100%;"></a>
                <a href="c3_p5.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 3 - partea 5 - Semnalele luminoase sau sonore</p></div>
            <div class="box1"> 
                <a href="c3_p6.php"><img src="c3_p6.jpg" style="width:100%;"></a>
               <a href="c3_p6.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 3 - partea 6 - Indicatoare rutiere</p></div>
            <div class="box1"> 
                <a href="c3_p7.php"><img src="c3_p7.jpg" style="width:100%;"></a>
                <a href="c3_p7.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 3 - partea 7 - Marcaje rutiere</p></div>
            <div class="box1"> 
                <a href="c4_p1.php"><img src="c4_p1.jpg" style="width:100%;"></a>
                <a href="c4_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 4 - partea 1 - Drumul cu sens unic</p></div>
            <div class="box1">
                <a href="c4_p2.php"><img src="c4_p2.jpg" style="width:100%;"></a>
               <a href="c4_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 4 - partea 2 - Intersec&#539ia cu sens giratoriu</p></div>
            <div class="box1">
                <a href="c4_p3.php"><img src="c4_p3.jpg" style="width:100%;"></a>
               <a href="c4_p3.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 4 - partea 3 - Autostrad&#259</p></div>
            <div class="box1"> 
                <a href="c4_p4.php"><img src="c4_p4.jpg" style="width:100%;"></a>
               <a href="c4_p4.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 4 - partea 4 - Zona reziden&#539ial&#259 &#351i pietonal&#259</p></div>
            <div class="box1"> 
                <a href="c5_p1.php"><img src="c5_p1.jpg" style="width:100%;"></a>
               <a href="c5_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 5 - partea 1 - Prioritatea &#351i acordarea priorit&#259&#539ii</p></div>
            <div class="box1"> 
                <a href="c5_p2.php"><img src="c5_p2.jpg" style="width:100%;"></a>
                <a href="c5_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 5 - partea 2 - Prioritatea de trecere acordat&#259 prin indicatoare</p></div>
            <div class="box1"> 
                <a href="c5_p3.php"><img src="c5_p3.jpg" style="width:100%;"></a>
                <a href="c5_p3.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 5 - partea 3 - Prioritatea de trecere acordat&#259 prin lege</p></div>
            <div class="box1"> 
                <a href="c5_p4.php"><img src="c5_p4.jpg" style="width:100%;"></a>
                <a href="c5_p4.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 5 - partea 4 - Acordarea priorita&#539ii</p></div>
            <div class="box1"> 
                <a href="c5_p5.php"><img src="c5_p5.jpg" style="width:100%;"></a>
                <a href="c5_p5.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 5 - partea 5 - Alte cazuri de acordare de prioritate</p></div>
            <div class="box1"> 
                <a href="c6_p1.php"><img src="c6_p1.jpg" style="width:100%;"></a>
                <a href="c6_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 6 - partea 1 - Manevre de dep&#259&#351ire</p></div>
            <div class="box1"> 
                <a href="c6_p2.php"><img src="c6_p2.jpg" style="width:100%;"></a>
                <a href="c6_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 6 - partea 2 - Manevre de oprire &#351i sta&#539ionare</p></div>
            <div class="box1"> 
                <a href="c6_p3.php"><img src="c6_p3.jpg" style="width:100%;"></a>
                <a href="c6_p3.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 6 - partea 3 - Manevre de oprire interzis&#259</p></div>
            <div class="box1"> 
                <a href="c6_p4.php"><img src="c6_p4.jpg" style="width:100%;"></a>
                <a href="c6_p4.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 6 - partea 4 - Parcarea &#351i manevre de sta&#539ionare interzis&#259</p></div>
            <div class="box1"> 
                <a href="c6_p5.php"><img src="c6_p5.jpg" style="width:100%;"></a>
                <a href="c6_p5.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 6 - partea 5 - Manevre de &#238ntoarcere</p></div>
            <div class="box1"> 
                <a href="c6_p6.php"><img src="c6_p6.jpg" style="width:100%;"></a>
                <a href="c6_p6.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 6 - partea 6 - Manevre de mers &#238;napoi</p></div>
            <div class="box1"> 
                <a href="c7_p1.php"><img src="c7_p1.jpg" style="width:100%;"></a>
                <a href="c7_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 7 - partea 1 - Locuri &#351i situa&#539ii speciale la trecerea la nivel cu calea ferat&#259</p></div>
            <div class="box1"> 
                <a href="c7_p2.php"><img src="c7_p2.jpg" style="width:100%;"></a>
                <a href="c7_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 7 - partea 2 - Trecerea la nivel cu calea ferat&#259 f&#259r&#259 bariere</p></div>
            <div class="box1"> 
                <a href="c7_p3.php"><img src="c7_p3.jpg" style="width:100%;"></a>
                <a href="c7_p3.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 7 - partea 3 - Trecerea la nivel cu calea ferat&#259 cu bariere</p></div>
            <div class="box1"> 
                <a href="c7_p4.php"><img src="c7_p4.jpg" style="width:100%;"></a>
                <a href="c7_p4.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 7 - partea 4 - Trecerea pentru pietoni</p></div>
            <div class="box1"> 
                <a href="c7_p5.php"><img src="c7_p5.jpg" style="width:100%;"></a>
                <a href="c7_p5.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 7 - partea 5 -  Drumul &#238n curb&#259</p></div>       
            <div class="box1"> 
                <a href="c7_p6.php"><img src="c7_p6.jpg" style="width:100%;"></a>
                <a href="c7_p6.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 7 - partea 6 - Drumul &#238n ramp&#259 &#351i &#238n pant&#259</p></div>       
            <div class="box1"> 
                <a href="c8_p1.php"><img src="c8_p1.jpg" style="width:100%;"></a>
                <a href="c8_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 8 - partea 1 - Permisul de conducere</p></div>
            <div class="box1"> 
                <a href="c8_p2.php"><img src="c8_p2.jpg" style="width:100%;"></a>
                <a href="c8_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 8 - partea 2 - Condi&#539ii ob&#539inere permis &#351i echival&#259ri</p></div>
            <div class="box1"> 
                <a href="c8_p3.php"><img src="c8_p3.jpg" style="width:100%;"></a>
                <a href="c8_p3.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 8 - partea 3 - Viteza de deplasare</p></div>
            <div class="box1"> 
                <a href="c8_p4.php"><img src="c8_p4.jpg" style="width:100%;"></a>
                <a href="c8_p4.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 8 - partea 4 - Starea tehnic&#259 a vehiculelor</p></div>
            <div class="box1"> 
                <a href="c8_p5.php"><img src="c8_p5.jpg" style="width:100%;"></a>
                <a href="c8_p5.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 8 - partea 5 - Sistemul de iluminare &#351i semnalizare luminoas&#259</p></div>
            <div class="box1"> 
                <a href="c9_p1.php"><img src="c9_p1.jpg" style="width:100%;"></a>
                <a href="c9_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 1 - Obliga&#539iile conduc&#259torilor auto la plecarea la traseu</p></div>
            <div class="box1"> 
                <a href="c9_p2.php"><img src="c9_p2.jpg" style="width:100%;"></a>
                <a href="c9_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 2 - Obliga&#539iile &#351i interdic&#539iile conduc&#259torilor de vehicule &#238n timpul deplas&#259rii</p></div>
            <div class="box1"> 
                <a href="c9_p3.php"><img src="c9_p3.jpg" style="width:100%;"></a>
                <a href="c9_p3.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 3 - Obliga&#539iile conduc&#259torilor auto la transportul copiilor</p></div>
            <div class="box1"> 
                <a href="c9_p4.php"><img src="c9_p4.jpg" style="width:100%;"></a>
                <a href="c9_p4.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 4 - Obliga&#539iile conduc&#259torilor auto &#238n caz de accident</p></div>
            <div class="box1"> 
                <a href="c9_p5.php"><img src="c9_p5.jpg" style="width:100%;"></a>
                <a href="c9_p5.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 5 - Obliga&#539iile conduc&#259torilor auto &#238n caz de defec&#539iune tehnic&#259</p></div>
            <div class="box1"> 
                <a href="c9_p6.php"><img src="c9_p6.jpg" style="width:100%;"></a>
                <a href="c9_p6.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 6 - Obliga&#539iile conduc&#259torilor auto cu vechime mai mic&#259 de un an</p></div>
            <div class="box1"> 
                <a href="c9_p7.php"><img src="c9_p7.jpg" style="width:100%;"></a>
                <a href="c9_p7.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 7 - Obliga&#539iile conduc&#259torilor auto de transport</p></div>
            <div class="box1"> 
                <a href="c9_p8.php"><img src="c9_p8.jpg" style="width:100%;"></a>
                <a href="c9_p8.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 8 - Obliga&#539iile conduc&#259torilor auto de transport de m&#259rfuri</p></div>
            <div class="box1"> 
                <a href="c9_p9.php"><img src="c9_p9.jpg" style="width:100%;"></a>
                <a href="c9_p9.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 9 - Obliga&#539iile proprietarilor sau de&#539in&#259torilor de vehicule</p></div>
            <div class="box1"> 
                <a href="c9_p10.php"><img src="c9_p10.jpg" style="width:100%;"></a>
                <a href="c9_p10.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 10 - Obliga&#539iile conduc&#259torilor auto la remorcarea vehiculelor</p></div>
            <div class="box1"> 
                <a href="c9_p11.php"><img src="c9_p11.jpg" style="width:100%;"></a>
                <a href="c9_p11.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 11 - Obliga&#539iile conduc&#259torilor de mopede, biciclete si trotinete electrice</p></div>
            <div class="box1"> 
                <a href="c9_p12.php"><img src="c9_p12.jpg" style="width:100%;"></a>
                <a href="c9_p12.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 9 - partea 12 - Obliga&#539ii &#351i interziceri pietoni</p></div>
            <div class="box1"> 
                <a href="c10_p1.php"><img src="c10_p1.jpg" style="width:100%;"></a>
                <a href="c10_p1.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 1 - Contraven&#539ii &#351i infrac&#539iuni</p></div>
            <div class="box1"> 
                <a href="c10_p2.php"><img src="c10_p2.jpg" style="width:100%;"></a>
                <a href="c10_p2.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 2 - Infrac&#539iuni - Conducerea unui vehicul ne&#238nmatriculat</p></div>
            <div class="box1"> 
                <a href="c10_p3.php"><img src="c10_p3.jpg" style="width:100%;"></a>
                <a href="c10_p3.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 3 - Infrac&#539iuni - Conducerea unui vehicul f&#259r&#259 permis de conducere</p></div>
            <div class="box1"> 
                <a href="c10_p4.php"><img src="c10_p4.jpg" style="width:100%;"></a>
                <a href="c10_p4.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 4 - Infrac&#539iuni - Conducerea unui vehicul sub influen&#539a alcoolului</p></div>
            <div class="box1"> 
                <a href="c10_p5.php"><img src="c10_p5.jpg" style="width:100%;"></a>
                <a href="c10_p5.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 5 - Infrac&#539iuni - P&#259r&#259sirea locului accidentului sau &#351tergerea urmelor acestuia</p></div>
            <div class="box1"> 
                <a href="c10_p6.php"><img src="c10_p6.jpg" style="width:100%;"></a>
                <a href="c10_p6.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 6 - Infrac&#539iuni - diverse</p></div>
            <div class="box1"> 
                <a href="c10_p7.php"><img src="c10_p7.jpg" style="width:100%;"></a>
                <a href="c10_p7.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 7 - Contraven&#539ii - introducere</p></div>
            <div class="box1"> 
                <a href="c10_p8.php"><img src="c10_p8.jpg" style="width:100%;"></a>
                <a href="c10_p8.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 8 - Contraventii - clasa 1</p></div>
            <div class="box1"> 
                <a href="c10_p9.php"><img src="c10_p9.jpg" style="width:100%;"></a>
                <a href="c10_p9.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 9 - Contraven&#539ii - clasa 2</p></div>
            <div class="box1"> 
                <a href="c10_p10.php"><img src="c10_p10.jpg" style="width:100%;"></a>
                <a href="c10_p10.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 10 - Contraven&#539ii - clasa 3</p></div>
            <div class="box1"> 
                <a href="c10_p11.php"><img src="c10_p11.jpg" style="width:100%;"></a>
                <a href="c10_p11.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 11 - Contraven&#539ii - clasa 4</p></div>
            <div class="box1"> 
                <a href="c10_p12.php"><img src="c10_p12.jpg" style="width:100%;"></a>
                <a href="c10_p12.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 12 - Contraven&#539ii - clasa 5 - persoane juridice</p></div>
            <div class="box1"> 
                <a href="c10_p13.php"><img src="c10_p13.jpg" style="width:100%;"></a>
                <a href="c10_p13.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 13 - Alte sanc&#539iuni</p></div>
            <div class="box1"> 
                <a href="c10_p14.php"><img src="c10_p14.jpg" style="width:100%;"></a>
                <a href="c10_p14.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 14 - Re&#539inerea certificatului de &#238nmatriculare sau &#238nregistrare</p></div>
            <div class="box1"> 
                <a href="c10_p15.php"><img src="c10_p15.jpg" style="width:100%;"></a>
                <a href="c10_p15.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 15 - Confiscarea, imobilizarea &#351i radierea din oficiu</p></div>
            <div class="box1"> 
                <a href="c10_p16.php"><img src="c10_p16.jpg" style="width:100%;"></a>
                <a href="c10_p16.php" class="vezi-buton">Intr&#259 &#351i &#238nva&#539&#259</a>
                <p> Capitol 10 - partea 16 - Consumul de alcool &#351i procedura de recoltare probe</p></div>
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