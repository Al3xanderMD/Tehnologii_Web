<?php
include "User.php";
?>
<?php
// Handle POST request for registration
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    User::registerUser();
}
?>
<!DOCTYPE html>
<html>
<form action="register.php" method="post">
    <link rel="stylesheet" href="LogIn_Reg.css">
    <div class="container">
        <h1 class="element">&#xCEnregistrare</h1>
        <p class="element">V&#259 rug&#259m s&#259 completa&#355i acest formular pentru a v&#259 crea un cont.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Introduce&#355i adresa de email" name="email" id="email" required>

        <label for="phone"><b>Num&#x103r de telefon</b></label>
        <input type="text" placeholder="Introduce&#355i num&#x103rul de telefon" name="phone" id="phone" required>

        <label for="username"><b>Nume de utilizator</b></label>
        <input type="text" placeholder="Introduce&#355i numele de utilizator" name="username" id="username" required>

        <label for="password"><b>Parola</b></label>
        <input type="password" placeholder="Introduce&#355i parola" name="password" id="password" required>

        <label for="password_repeat"><b>Repeta&#355i parola</b></label>
        <input type="password" placeholder="Repeta&#355i parola" name="password_repeat" id="password_repeat" required>
        <hr>

        <button type="submit" class="register_log_btn">&#xCEnregistrare</button>
    </div>

    <div class="container">
        <p>Ai deja un cont? <a href="login.php">Sign in</a>.</p>
    </div>
</form>
</html>
