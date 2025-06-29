<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);

    // Simulate email/ID lookup and response
    echo "<h2>Reset Link Sent</h2>";
    echo "<p>A password reset link has been sent to <strong>$email</strong>.</p>";
    echo "<a href='login.html'>Back to Login</a>";
} else {
    header("Location: forgot_password.html");
    exit();
}
?>
