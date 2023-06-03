<?php global $mysqli;
include 'database.php'; ?>
<?php session_destroy(); session_start(); ?>
<?php
    //Check to see if score is set_error_handler
if (!isset($_SESSION['score']) || session_status() === PHP_SESSION_NONE) {
    $_SESSION['score'] = 0;
}
//if (!isset($_SESSION['count']) || session_status() === PHP_SESSION_NONE) {
//    $_SESSION['count'] = 0;
//}

if ($_POST) {
    $number = $_POST['number'];
    $selected_choices = $_POST['choices'];
   $next = $number + 1;
   //$number++;
   //$next=mt_rand(1, 6);

    /*
    * Get total questions
    */

    $query = "SELECT * FROM `questions`";
    //Get result
    $results = $mysqli->query($query) or die($mysqli->error . __LINE__);
    $total = $results->num_rows;

    /*
     * Get correct choices
     */

    $query = "SELECT * FROM `choices`
                WHERE question_number = $number AND is_correct = 1";

    //Get result
    $result = $mysqli->query($query) or die($mysqli->error . __LINE__);

    $correct_choices = array(); // Array pentru a stoca opțiunile corecte

    while ($row = $result->fetch_assoc()) {
        $correct_choices[] = $row['id']; // Adăugați opțiunile corecte în array
    }

    // Compare selected choices with correct choices
    $is_correct = true;

    foreach ($selected_choices as $selected_choice) {
        if (!in_array($selected_choice, $correct_choices)) {
            $is_correct = false;
            break;
        }
    }

    // Increase score if the answer is correct
    if ($is_correct) {
        $_SESSION['score']++;
    }

    // Check if last question
    if ($number == 5) {
        header("Location: final.php");
        exit();
    } else {
        header("Location: question.php?n=" . $next);
    }
}?>
