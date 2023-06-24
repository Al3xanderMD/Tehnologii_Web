<?php
global $mysqli;
include '../chestionare/database.php';
?>
<?php
session_start();
if (!isset($_SESSION['user_id']) || session_status() === PHP_SESSION_NONE) {
    $conectat=0;
}
else $conectat=1;
?>
<?php
//Check to see if score is set_error_handler
if (!isset($_SESSION['score']) || session_status() === PHP_SESSION_NONE) {
    $_SESSION['score'] = 0;
}?>
<?php
class ControllerChestionare
{
    private $id;
    private $requestMethod;

    /**
     * @param $id
     * @param $requestMethod
     */
    public function __construct($id, $requestMethod)
    {
        $this->id = $id;
        $this->requestMethod = $requestMethod;
    }
    public function processRequest()
    {
        switch($this->requestMethod){
            case 'GET':
             $response=$this->getIntrebare($this->id);
                if($response['body']){
                    echo "<script>console.log('Request:', " . json_encode($response['body']) . ", " . json_encode($response['status_code_header']) . ");</script>";
                }
               break;
            case 'POST':
               $response1=$this->updateScor($this->id);
                $_SESSION['response1'] = $response1;
                if($response1['body']){
                    echo "<script>console.log('Request:', " . json_encode($response1['body']) . ", " . json_encode($response1['status_code_header']) . ");</script>";
                }
                break;
            default:
                $response=$this->notFoundResponse();
                echo "<script>console.log('Request:', " . json_encode($response['body']) . ", " . json_encode($response['status_code_header']) . ");</script>";
                break;
        }
    }
    private function notFoundResponse()
    {
        $response['status_code_header']='HTTP/1.1 404 Not Found';
        $response['body']=null;
        return $response;
    }
    private function getIntrebare($id){
      //echo $_SESSION['score'];
        global $mysqli;
        $query = "SELECT * FROM `questions` WHERE question_number =$id";
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $_SESSION['question'] = $results->fetch_assoc();
        $response['status_code_header']='HTTP/1.1 200 OK';
        $response['body']=json_encode($_SESSION['question']);
        return $response;
    }
    public function updateScor($id){
        global $mysqli;
        $selected_choices = $_POST['choices'];
        $query = "SELECT * FROM `choices`WHERE question_number = $id AND is_correct = 1";
        $result = $mysqli->query($query) or die($mysqli->error . __LINE__);

        $correct_choices = array(); // Array pentru a stoca opțiunile corecte

        while ($row = $result->fetch_assoc()) {
            $correct_choices[] = $row['id']; // Adăugați opțiunile corecte în array
        }
        $is_correct = true;
        if(!isset($selected_choices)){
            $is_correct = false;
        }
else {
    foreach ($selected_choices as $selected_choice) {
        if (!in_array($selected_choice, $correct_choices)) {
            $is_correct = false;
            break;
        }
    }
}
        if ($is_correct) {
            $_SESSION['score']++;
        }

        $response['body']=json_encode($_SESSION['score']);
        $response['status_code_header']='HTTP/1.1 201 OK';
        return $response;

    }
}