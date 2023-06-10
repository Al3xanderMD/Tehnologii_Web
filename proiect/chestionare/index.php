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
    <link rel="stylesheet" href="../indicatoare/style.css">
    <link rel="stylesheet" href="../indicatoare/style3.css">
    <link rel="stylesheet" href="style_quiz.css" type="text/css" />
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
    <div class="titlu">
        <h1>Chestionare auto</h1>
    </div>
    <div class="text-box">
        <div class="box1">
            <div class="container4">
               <p style="color:black;font-size:24px;"> <strong> Chestionar 1</strong></p>
                <p style="font-size:16px;padding-bottom: 30px;">Acestea sunt teste cu alegere multipla</p>
                <ul>
                    <li><strong>Numar de intrebari: </strong><?php echo 5; ?></li>
                    <li><strong>Tip: </strong>alegere multipla</li>
                    <li><strong>Timp estimativ: </strong><?php  echo 30;?> minute</li>
                </ul>
                <a href="question.php?n=1" class="buton">Rezolva</a>
            </div>
        </div>
        <div class="box1">
            <div class="container4">
                <p style="color:black;font-size:24px;"> <strong> Chestionar 2</strong></p>
                <p style="font-size:16px;padding-bottom: 30px;">Acestea sunt teste cu alegere multipla</p>
                <ul>
                    <li><strong>Numar de intrebari: </strong><?php echo 5; ?></li>
                    <li><strong>Tip: </strong>alegere multipla</li>
                    <li><strong>Timp estimativ: </strong><?php  echo 30;?> minute</li>
                </ul>
                <a href="question.php?n=6" class="buton">Rezolva</a>
            </div>
        </div>
        <div class="box1">
            <div class="container4">
                <p style="color:black;font-size:24px;"> <strong> Chestionar 3</strong></p>
                <p style="font-size:16px;padding-bottom: 30px;">Acestea sunt teste cu alegere multipla</p>
                <ul>
                    <li><strong>Numar de intrebari: </strong><?php echo 5; ?></li>
                    <li><strong>Tip: </strong>alegere multipla</li>
                    <li><strong>Timp estimativ: </strong><?php  echo 30;?> minute</li>
                </ul>
                <a href="question.php?n=11" class="buton">Rezolva</a>
            </div>
        </div>
        <div class="box1">
            <div class="container4">
                <p style="color:black;font-size:24px;"> <strong> Chestionar 4</strong></p>
                <p style="font-size:16px;padding-bottom: 30px;">Acestea sunt teste cu alegere multipla</p>
                <ul>
                    <li><strong>Numar de intrebari: </strong><?php echo 5; ?></li>
                    <li><strong>Tip: </strong>alegere multipla</li>
                    <li><strong>Timp estimativ: </strong><?php  echo 30;?> minute</li>
                </ul>
                <a href="question.php?n=16" class="buton">Rezolva</a>
            </div>
           </div>
        <div class="box1">
            <div class="container4">
                <p style="color:black;font-size:24px;"> <strong> Chestionar 5</strong></p>
                <p style="font-size:16px;padding-bottom: 30px;">Acestea sunt teste cu alegere multipla</p>
                <ul>
                    <li><strong>Numar de intrebari: </strong><?php echo 5; ?></li>
                    <li><strong>Tip: </strong>alegere multipla</li>
                    <li><strong>Timp estimativ: </strong><?php  echo 30;?> minute</li>
                </ul>
                <a href="question.php?n=21" class="buton">Rezolva</a>
            </div>
        </div>

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
