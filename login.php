<?php
session_start();
// See your login and password
echo "Your login: " . $_COOKIE['login'] . "<br>" . "Your password: " . $_COOKIE['pw'] . "<br>";
echo "<br><hr>";
echo "Change login and password:";
?>
    <form action="login.php" method="get">
        <label>
            New login: <input type="text" required name="newlogin" minlength="6" maxlength="20"><br>
            New passW: <input type="password" required name="newpw" minlength="6" maxlength="20"><br>
            <input type="submit" value="Submit login" ><br>
        </label>
    </form>
<?php
// Change login and password
    if (isset($_GET['newlogin']) && isset($_GET['newpw'])) {
        $newlogin = trim($_GET['newlogin']);
        $newpw = trim($_GET['newpw']);
        setcookie('login', $newlogin);
        setcookie('pw', $newpw);
    }
?>