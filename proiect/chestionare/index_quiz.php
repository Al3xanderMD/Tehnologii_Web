<?php global $mysqli;
include 'database.php';?>
<?php
$query = "SELECT * FROM questions";
$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $results->num_rows;
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8" />
    <title>Chestionare</title>
    <link rel="stylesheet" href="style_quiz.css" type="text/css" />
</head>
<body>
<header>
    <div class="container">
        <h1>Chestionare</h1>
    </div>
</header>
<main>
    <div class="container">
        <h2>Teste auto</h2>
        <p>Acestea sunt teste cu alegere multipla</p>
        <ul>
            <li><strong>Numar de intrebari: </strong><?php echo $total; ?></li>
            <li><strong>Tip: </strong>alegere multipla</li>
            <li><strong>Timp estimativ: </strong><?php  echo $total* 5;?> minute</li>
        </ul>
        <a href="question.php?n=1" class="start">Start chestionar</a>
    </div>
</main>
<footer>
    <div class="container">
        Copyright RoT
    </div>
</footer>
</body>
</html>