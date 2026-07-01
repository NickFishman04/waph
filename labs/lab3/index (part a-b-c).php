<?php
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

    $q = "SELECT * FROM Users WHERE username='$username'";
    $res = mysqli_query($con, $q);

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
    echo "<h2>Welcome, " . $user . "!</h2>";
	} else {
    echo "<h2>Login failed for user: " . $user . "</h2>";
	}
}
?>
