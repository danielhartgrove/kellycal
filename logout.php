<?php
// Start the session to access session variables
session_start();

// Check if user is logged in (optional)
if (!isset($_SESSION['user_id'])) {
    // If not logged in, just redirect to login
    header("Location: login.html");
    exit;
}

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: login.html");
exit;
?>
