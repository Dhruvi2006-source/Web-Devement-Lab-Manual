<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $storedData = file("users.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $loginSuccess = false;

    foreach ($storedData as $line) {

        list($storedUsername, $storedPassword) = explode(",", $line);

        if ($username == $storedUsername && $password == $storedPassword) {
            $loginSuccess = true;
            break;
        }
    }

    if ($loginSuccess) {
        echo "<h2>Login Successful</h2>";
        echo "<p>Welcome, " . htmlspecialchars($username) . "!</p>";
    } else {
        echo "<h2>Login Failed</h2>";
        echo "<p>Invalid username or password.</p>";
    }

}

?>