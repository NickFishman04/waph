<?php
session_set_cookie_params([
    'lifetime' => 0,
    'path'     => '/',
    'secure'   => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);
session_start();

function checklogin($username, $password) {
    $account = array("admin", "1234");
    if (($username == $account[0]) and ($password == $account[1]))
        return TRUE;
    else return FALSE;
}

function checklogin_mysql($username, $password) {
    $con = mysqli_connect("localhost", "fishmane", "password1!", "waph_lab3");
    if (mysqli_connect_errno()) {
        echo "DB connection failed: " . mysqli_connect_error();
        return FALSE;
    }
    $stmt = mysqli_prepare($con, "SELECT * FROM Users WHERE username=?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if (password_verify($password, $row['password'])) {
            mysqli_close($con);
            return TRUE;
        }
    }
    mysqli_close($con);
    return FALSE;
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if (checklogin_mysql($user, $pass)) {
        $_SESSION['authenticated'] = TRUE;
        $_SESSION['username'] = $user;
    } else {
        echo "<script>alert('Login failed for user: "
             . htmlspecialchars($user) . "');</script>";
    }
}

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === TRUE) {
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</h2>";
    echo "<p>You are authenticated via session.</p>";
    echo "<p>Session ID: " . session_id() . "</p>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "<script>alert('Access denied. Please log in.');</script>";
?>
    <h2>Login</h2>
    <form method="post" action="index.php">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
<?php
}
?>
