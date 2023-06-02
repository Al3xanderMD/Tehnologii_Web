<?php session_start(); ?>
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
    <div class = "container">
       <h2>You're done!</h2>
        <p>You failed</p>
        <p>Final Score: <?php echo $_SESSION['score']; ?> </p>
        <a href="question.php?n=1" class ="start">Take again</a>
    </div>
</main>
