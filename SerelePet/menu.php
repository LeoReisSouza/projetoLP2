<!DOCTYPE html>
<html>
<head>
    
    <title>Menu</title>
    <link rel="icon" href="img/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="menu">
    <div class="user-info dropdown">
        <div class="user-photo">
            <img src="img\testimonial-3_1.jpg" alt="Foto do Usuário">
        </div>
        <div class="user-name">
            <?php
            session_start(); 
            if (isset($_SESSION["usuario"]) && isset($_SESSION["usuario"]["nome"])) {
                echo $_SESSION["usuario"]["nome"];
            }
            ?>
        </div>
        
        <div class="dropdown-content">
            <a class="dropdown-item" href="admin.php">Admin</a>
            <a class="dropdown-item" href="#" onclick="logout()">Sair</a>
        </div>
    </div>
    <button class="logout-button" onclick="logout()">Sair</button>
</div>


    <script>
    function logout() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {

                window.location.href = 'login.php';
            }
        };
        xhr.send('logout=true');
    }

    if (window.location.search.indexOf('logout=true') !== -1) {

    }
    </script>
</body>
</html>
