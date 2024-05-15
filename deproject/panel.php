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
        <?php if (isset($_SESSION['user_id']) and $_SESSION['status'] === 'user'): ?>
        <div class = "name">
            <h2><a href = "order.php">Заказы</h2>
            <h2><a href = "neworder.php">Оформить заказ</a></h2>
        </div>
        
    </main>
    <footer class = "footer">
    <div class="footer-docs">
            © 2023 «Avoska». All Rights Reserved.  Phone Number: +7 (926)-(818)-39-59. e-mail: collegetsarytsino@come.ru
        </div>
    </footer>
</body>
        <?php elseif (isset($_SESSION['user_id']) and $_SESSION['status'] === 'admin'): ?>
            <h1>Панель администратора</h1>
            <div class = "order">
        </div>
        <script src = "method/scriptadmin.js"></script>
            <?php endif; ?>  
</body>

</html>