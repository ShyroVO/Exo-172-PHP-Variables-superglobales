<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <div id="contenue">
        <!-- Exercice 1: -->
        Exercice 1:<br>
        <?php
        echo $_SERVER['HTTP_USER_AGENT'] ."<br>". $_SERVER['REMOTE_ADDR'] ."<br>". $_SERVER['SERVER_NAME']
        ."<br><hr>";
        ?>
        <!-- Exercice 2: -->
        Exercice 2:<br>
        <?php
        $_SESSION['nom'] = "Nomnom";
        $_SESSION['prenom'] = "Prenomprenom";
        $_SESSION['age'] = 99;
        echo "<a href='session.php'>Click</a><br><hr>";
        ?>
        <!-- Exercice 3 / 4 if your enter log en pw / 5 if you click on click: -->
        Exercice 3/4/5:<br>
        <form action="index.php" method="get">
            <label>
                Login: <input type="text" required name="login" minlength="6" maxlength="20"><br>
                PassW: <input type="password" required name="pw" minlength="6" maxlength="20"><br>
                <input type="submit" value="Submit login" ><br>
            </label>
        </form>
        <?php
            if (isset($_GET['login']) && isset($_GET['pw'])) {
                $login = trim($_GET['login']);
                $pw = trim($_GET['pw']);
                setcookie('login', $login);
                setcookie('pw', $pw);
                echo "<a href='login.php'>Click</a>(exercice 4/5)";
            }
        ?>

    </div>
</body>
</html>