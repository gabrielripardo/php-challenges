<html lang="pt-br">
<form method="POST" action="cookies.php">
    <div>
        <input type="text" placeholder="Nome" name="name" id="name-id" value="<?= isset($_COOKIE["name"]) ? $_COOKIE["name"] : ""; ?>">
    </div>
    <div>
        <input type="email" name="email" id="email-id" value="gts.senna@gmail.com">
    </div>

    <div>
        <input type="tel" name="tel" id="tel-id" value="999560149">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
</html>


<?php

function process_form(): void
{
    foreach ($_POST as $label => $value) {
        setcookie($label, $value);
    }

}

if($_SERVER['REQUEST_METHOD']=='POST') {
    process_form();
}
