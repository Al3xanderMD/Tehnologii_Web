<?php global $mysqli;
include 'database.php';?>
<?php
$number = (int) $_GET['n'];

$query = "SELECT * FROM `questions`";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

$query = "SELECT * FROM `questions` WHERE question_number =$number";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$question = $results->fetch_assoc();

$query="SELECT * FROM `choices`  WHERE question_number= $number";
$choices= $mysqli->query($query) or die ($mysqli->error.__LINE__);

?>
<?php
session_start();
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
    $conectat=0;
}
else $conectat=1;
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8" />
    <title>Chestionare</title>
    <link rel="stylesheet" href="style_quiz.css" type="text/css" />
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
    <div class="header3">
        <h1>Chestionare</h1>
    </div>
<main>
    <div class = "container3">
        <div class="current">Intrebare <?php if($question['question_number']%5==0) echo "5" ; else echo  $question['question_number']%5; ?> din <?php echo "5"  ?></div>
        <p class ="question">
         <?php echo $question['text'];  ?>
        </p>
        <form method="post" action="process.php">
              <ul class="choices">
                  <?php while($row=$choices->fetch_assoc()):?>
                      <li><input name = "choices[]" type="checkbox" value="<?php echo $row['id']; ?>" /> <?php echo $row['text']; ?></li>
                  <?php endwhile; ?>
              </ul>
        <input type="submit" value="Submit"/>
        <input type="hidden" name ="number" value ="<?php echo $number; ?>"/>
        </form>
    </div>
</main>
<footer class="footer">
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
</footer>
</body>
</html>