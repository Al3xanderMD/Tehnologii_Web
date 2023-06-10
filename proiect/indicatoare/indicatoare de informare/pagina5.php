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
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style3.css">
</head>

<body>
<div class="header1">
    <nav>
        <a href="../../home/index.php"><img src="../../images/logo2.png" alt="Logo"></a>
        <div class="header1-links">
            <ul>
                <li><a href="../../login+register/register.html"> Inregistrare </a></li>
                <li>
                    <?php if ($conectat == 0): ?>
                        <a href="../../login+register/login.php">Conectare</a>
                    <?php else: ?>
                        <a href="../../login+register/logout.php">Deconectare</a>
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
                <li><a href="../../legislatie/index.php">Legislatie</a></li>
                <li><a href="../indicatoare-index/index.php">Indicatoare</a></li>
                <li>
                    <div class="dropdown">
                        <a href="">Categorii</a>
                        <i class="fa fa-caret-down"></i>
                        <div class="dropdown-content">
                            <a href="../../categorii/categoriaA.php">Categoria A</a>
                            <a href="../../categorii/categoriaB.php">Categoria B</a>
                        </div>
                    </div>
                </li>
                <li><a href="../../chestionare/index.php">Chestionare</a></li>
            </ul>
        </div>
    </nav>
</div>
    <div class="header">
        <div class="titlu">
            <h1>Indicatoare de informare</h1>
        </div>
        <div class="text-box2">
            <div class="box2">
                <a href="../../indicatoare individuale/5_1.html"><img src="info1.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_1.html" class="vezi-buton2">vezi detalii</a>
                <p> Direcția și distanța până la telefonul pentru apel de urgență</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_2.html"><img src="info2.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_2.html" class="vezi-buton2">vezi detalii</a>
                <p> Rovignietă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_3.html"><img src="info3.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_3.html" class="vezi-buton2">vezi detalii</a>
                <p>Trecere de pietoni</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_4.html"><img src="info4.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_4.html" class="vezi-buton2">vezi detalii</a>
                <p> Trecere pentru pietoni</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_5.html"><img src="info5.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_5.html" class="vezi-buton2">vezi detalii</a>
                <p>Limite generale de viteză</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_6.html"><img src="info6.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_6.html" class="vezi-buton2">vezi detalii</a>
                <p> Sens unic</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_7.html"><img src="info7.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_7.html" class="vezi-buton2">vezi detalii</a>
                <p> Sens unic</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_8.html"><img src="info8.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_8.html" class="vezi-buton2">vezi detalii</a>
                <p>Autostradă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_9.html"><img src="info9.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_9.html" class="vezi-buton2">vezi detalii</a>
                <p> Sfârșit de autostradă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_10.html"><img src="info10.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_10.html" class="vezi-buton2">vezi detalii</a>
                <p> Limite maxime de viteză pe autostradă, ân funcție de condițiile meteorologice</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_11.html"><img src="info11.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_11.html" class="vezi-buton2">vezi detalii</a>
                <p> Spital</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_12.html"><img src="info12.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_12.html" class="vezi-buton2">vezi detalii</a>
                <p> Poliția</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_13.html"><img src="info13.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_13.html" class="vezi-buton2">vezi detalii</a>
                <p> Post prim-ajutor</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_14.html"><img src="info14.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_14.html" class="vezi-buton2">vezi detalii</a>
                <p>Pasarelă pentru pietoni</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_15.html"><img src="info15.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_15.html" class="vezi-buton2">vezi detalii</a>
                <p>Pasaj subteran pentru pietoni</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_16.html"><img src="info16.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_16.html" class="vezi-buton2">vezi detalii</a>
                <p> Stație de autobuz</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_17.html"><img src="info17.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_17.html" class="vezi-buton2">vezi detalii</a>
                <p>Stație de tramvai</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_18.html"><img src="info18.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_18.html" class="vezi-buton2">vezi detalii</a>
                <p> Stație de taximetre</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_19.html"><img src="info19.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_19.html" class="vezi-buton2">vezi detalii</a>
                <p>Drum pentru autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_20.html"><img src="info20.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_20.html" class="vezi-buton2">vezi detalii</a>
                <p> Sfârșitul drumului pentru autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_21.html"><img src="info21.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_21.html" class="vezi-buton2">vezi detalii</a>
                <p>Vulcanizare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_22.html"><img src="info22.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_22.html" class="vezi-buton2">vezi detalii</a>
                <p>Telefon</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_23.html"><img src="info23.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_23.html" class="vezi-buton2">vezi detalii</a>
                <p> Stație alimentare cu carburant</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_24.html"><img src="info24.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_24.html" class="vezi-buton2">vezi detalii</a>
                <p> Stație pentru alimentare cu carburant, inclusiv benzină fără plumb</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_25.html"><img src="info25.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_25.html" class="vezi-buton2">vezi detalii</a>
                <p>Stație de alimentare cu carburanți inclusiv benzină fără plumb și gaz petrolier lichefiat</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_26.html"><img src="info26.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_26.html" class="vezi-buton2">vezi detalii</a>
                <p>Hotel sau motel</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_27.html"><img src="info27.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_27.html" class="vezi-buton2">vezi detalii</a>
                <p>Restaurant</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_28.html"><img src="info28.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_28.html" class="vezi-buton2">vezi detalii</a>
                <p>Bufet sau cofetărie</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_29.html"><img src="info29.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_29.html" class="vezi-buton2">vezi detalii</a>
                <p> Teren pentru camping (tabără turistică)</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_30.html"><img src="info30.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_30.html" class="vezi-buton2">vezi detalii</a>
                <p>Teren pentru caravane (tabără turistică)</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_31.html"><img src="info31.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_31.html" class="vezi-buton2">vezi detalii</a>
                <p>Teren pentru caravane și camping</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_32.html"><img src="info32.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_32.html" class="vezi-buton2">vezi detalii</a>
                <p>Loc pentru popas</p>
            </div>
            <div class="box2"> 
                <a href="../../indicatoare individuale/5_33.html"><img src="info33.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_33.html" class="vezi-buton2">vezi detalii</a>
                <p>Cabană pentru turiști</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_34.html"><img src="info34.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_34.html" class="vezi-buton2">vezi detalii</a>
                <p>WC public</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_35.html"><img src="info35.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_35.html" class="vezi-buton2">vezi detalii</a>
                <p>Service auto</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_36.html"><img src="info36.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_36.html" class="vezi-buton2">vezi detalii</a>
                <p>Parcare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_37.html"><img src="info37.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_37.html" class="vezi-buton2">vezi detalii</a>
                <p>Parcare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_38.html"><img src="info38.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_38.html" class="vezi-buton2">vezi detalii</a>
                <p>Parcare subterană sau în clădire</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_39.html"><img src="info39.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_39.html" class="vezi-buton2">vezi detalii</a>
                <p>Complex de servicii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_40.html"><img src="info40.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_40.html" class="vezi-buton2">vezi detalii</a>
                <p>Zona rezidențială</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_41.html"><img src="info41.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_41.html" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșitul zonei rezidențiale</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_42.html"><img src="info42.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_42.html" class="vezi-buton2">vezi detalii</a>
                <p>Zonă cu viteză recomandată de 30 km/h</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_43.html"><img src="info43.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_43.html" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșitul zonei cu viteză recomandată de 30 km/h</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_44.html"><img src="info44.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_44.html" class="vezi-buton2">vezi detalii</a>
                <p>Zonă pietonală</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_45.html"><img src="info45.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_45.html" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșitul zonei pietonale</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_46.html"><img src="info46.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_46.html" class="vezi-buton2">vezi detalii</a>
                <p>Tunel</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_47.html"><img src="info47.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_47.html" class="vezi-buton2">vezi detalii</a>
                <p>Sfârșit de tunel</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_48.html"><img src="info48.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_48.html" class="vezi-buton2">vezi detalii</a>
                <p>Îmbarcare pe vagoane platformă de cale ferată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_49.html"><img src="info49.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_49.html" class="vezi-buton2">vezi detalii</a>
                <p>Îmbarcare pe ferry-boat</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_50.html"><img src="info50.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_50.html" class="vezi-buton2">vezi detalii</a>
                <p>Port</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_51.html"><img src="info51.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_51.html" class="vezi-buton2">vezi detalii</a>
                <p>Gară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_52.html"><img src="info52.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_52.html" class="vezi-buton2">vezi detalii</a>
                <p>Autogară</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_53.html"><img src="info53.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_53.html" class="vezi-buton2">vezi detalii</a>
                <p>Închirieri auto</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_54.html"><img src="info54.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_54.html" class="vezi-buton2">vezi detalii</a>
                <p>Plajă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_55.html"><img src="info55.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_55.html" class="vezi-buton2">vezi detalii</a>
                <p>Zonă de vânătoare</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_56.html"><img src="info56.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_56.html" class="vezi-buton2">vezi detalii</a>
                <p>Zonă de pescuit</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_57.html"><img src="info57.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_57.html" class="vezi-buton2">vezi detalii</a>
                <p>Centru viticol</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_58.html"><img src="info58.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_58.html" class="vezi-buton2">vezi detalii</a>
                <p>Zona industrială</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_59.html"><img src="info59.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_59.html" class="vezi-buton2">vezi detalii</a>
                <p>Poșta</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_60.html"><img src="info60.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_60.html" class="vezi-buton2">vezi detalii</a>
                <p>Apă potabilă</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_61.html"><img src="info61.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_61.html" class="vezi-buton2">vezi detalii</a>
                <p>Loc de joacă pentru copii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_62.html"><img src="info62.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_62.html" class="vezi-buton2">vezi detalii</a>
                <p>Stadion</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_63.html"><img src="info63.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_63.html" class="vezi-buton2">vezi detalii</a>
                <p>Supermarket</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_64.html"><img src="info64.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_64.html" class="vezi-buton2">vezi detalii</a>
                <p>Acces internet</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_65.html"><img src="info65.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_65.html" class="vezi-buton2">vezi detalii</a>
                <p>Teatru</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_66.html"><img src="info66.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_66.html" class="vezi-buton2">vezi detalii</a>
                <p>Muzeu</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_67.html"><img src="info67.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_67.html" class="vezi-buton2">vezi detalii</a>
                <p>Cântar pentru autovehicule</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_68.html"><img src="info68.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_68.html" class="vezi-buton2">vezi detalii</a>
                <p>Control radar</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_69.html"><img src="info69.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_69.html" class="vezi-buton2">vezi detalii</a>
                <p>Informații rutiere</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_70.html"><img src="info70.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_70.html" class="vezi-buton2">vezi detalii</a>
                <p>Viteză recomandată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_71.html"><img src="info71.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_71.html" class="vezi-buton2">vezi detalii</a>
                <p>Punct de informare turistică</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_72.html"><img src="info72.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_72.html" class="vezi-buton2">vezi detalii</a>
                <p>Denumirea străzii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_73.html"><img src="info73.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_73.html" class="vezi-buton2">vezi detalii</a>
                <p>Intrare stradă indicată</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_74.html"><img src="info74.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_74.html" class="vezi-buton2">vezi detalii</a>
                <p>Numărul imobilului</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_75.html"><img src="info75.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_75.html" class="vezi-buton2">vezi detalii</a>
                <p>Monitorizare trafic</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_76.html"><img src="info76.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_76.html" class="vezi-buton2">vezi detalii</a>
                <p>Refugiu rezervat depanării</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_77.html"><img src="info77.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_77.html" class="vezi-buton2">vezi detalii</a>
                <p>Presemnalizarea sediului Poliției autostrăzii</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_78.html"><img src="info78.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_78.html" class="vezi-buton2">vezi detalii</a>
                <p>Distanța de siguranță între vehiculele pentru viteze de cel mult 60 km/h</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_79.html"><img src="info79.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_79.html" class="vezi-buton2">vezi detalii</a>
                <p>Distanța de siguranță între vehiculele pentru viteze mai maride 90 km/h</p>
            </div>
            <div class="box2">
                <a href="../../indicatoare individuale/5_80.html"><img src="info80.png" alt="" style="width:100%;"></a>
                <a href="../../indicatoare individuale/5_80.html" class="vezi-buton2">vezi detalii</a>
                <p>Acces pe bază de tichet</p>
            </div>
        </div>
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
                <li><a href="../../termeni/termeni.php">Termeni</a></li>
                <li><a href="">Link-uri utile</a></li>
                <li><a href="../../contact/contact.php">Contact</a></li>
                <script src="https://kit.fontawesome.com/0070301605.js" crossorigin="anonymous"></script>
            </ul>
        </div>
        <div class="useful-links">
            <ul>
                <li><a href="../../intrebariFrecvente/intrebariFrecvente.php">Intrebari frecvente</a></li>
                <li><a href="../../topScoliAuto/topScoliAuto.php">Top scoli auto</a></li>
                <li><a href="../../topUseri/topUseri.php">Top utilizatori</a></li>
                <li><a href="../../home/index.php">Acasa</a></li>
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