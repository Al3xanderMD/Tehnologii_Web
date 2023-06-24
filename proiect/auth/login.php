<?php
include "User.php";
?>
<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    User::loginUser();
    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html>
<form method="post">
    <link rel="stylesheet" href="LogIn_Reg.css">
    <div class="container">
     <h1 class="element">Sign In</h1>
     <p class="element">V&#259 rug&#259m s&#259 completa&#355i acest formular pentru autentificare.</p>
        <?php if ($is_invalid): ?>
            <em>Invalid login</em>
        <?php http_response_code(400); endif; ?>
     <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Introduce&#355i adresa de email" name="email" id="email"
             value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" >

      <label for="password"><b>Parola</b></label>
      <input type="password" placeholder="Introduce&#355i parola" name="password" id="password">
     <hr>

      <button type="submit" class="register_log_btn">Autentificare</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form>
</html>