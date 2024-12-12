<html lang="pt-br">
    <form method="POST" action="contact-form.php">
        <div>
            <input type="text" placeholder="Nome" name="name" id="name-id" value="Gabriel">
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
    <a href="https://localhost/properties-input.php">Ir para página</a>
</html>


<?php

function process_form(): void
{
    foreach ($_POST as $label => $value) {
        echo "<strong>".$label . ": </strong>" . $value . "<br>";
    }
}

if($_SERVER['REQUEST_METHOD']=='POST') {
    process_form();
}
