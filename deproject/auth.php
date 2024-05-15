<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/Layer_1.svg" type="image/x-icon">

    </head>
<body>
<?php
        include "header.php"
    ?>
    <main class = "container_reg">
        <h2>Авторизация</h2>
        <form id = "formAuth">
            <label for = "login">Логин:</label><input type = "text" name = "login" id = "loginUsername" required placeholder="...">
            <label for = "login">Пароль:</label><input type = "password" name = "pass" id = "loginPassword" required placeholder="...">
            
            <button onclick = "authButton(event)">Войти</button>
            <span id = "error"></span>
        </form>
    </main>
    <footer class = "footer">
    <div class="footer-docs">
            © 2023 «Avoska». All Rights Reserved.  Phone Number: +7 (926)-(818)-39-59. e-mail: collegetsarytsino@come.ru
        </div>
    </footer>
</body>
    <script src = "method/auth.js"></script>
</html>