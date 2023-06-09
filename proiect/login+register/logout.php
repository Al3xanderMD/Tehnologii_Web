<?php
//de adaugat referinta la acest php in index.php sau index.php
//ex: <p><a href="logout.php">LOG OUT</a></p>
session_start();

session_destroy();

header("Location: ../home/index.php");
exit;