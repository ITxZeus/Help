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
        <h2>Регистрация</h2>
        <form id = "myForm">
            <label for = "login">Логин:</label><input type = "text" id="login" name = "login" required placeholder="...">
            <label for = "login">Пароль:</label><input type = "password" id="pass" name = "pass" required placeholder="...">
            <label for = "login">ФИО:</label><input type = "text" name = "fio" id="fio" required placeholder="...">
            <label for = "login">Номер Телефона:</label><input type = "tel" name = "tel" id="tel" required placeholder="..." >
            <label for = "login">Почта:</label><input type = "email" name = "email" id="email" required placeholder="...">
            <button class = "sub" onclick = "submitForm(event)">Зарегистрироваться</button>
            <span class = "error"></span>
        </form>
    </main>
    
    <footer class = "footer">
    <div class="footer-docs">
            © 2023 «Avoska». All Rights Reserved.  Phone Number: +7 (926)-(818)-39-59. e-mail: collegetsarytsino@come.ru
        </div>
    </footer>
</body>
    <script src = "method/reg.js"></script>
</html>