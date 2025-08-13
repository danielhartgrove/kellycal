<?php
// Start the session to access logged-in user info
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // User is not logged in → redirect to login page
    header("Location: login.html");
    exit;
}

// Get user info from session
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Dashboard - KellyCal</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: auto; padding: 20px; }
        input, button { width: 100%; padding: 10px; margin: 8px 0; }
        button { background: #28a745; color: white; border: none; cursor: pointer; }
        button:hover { background: #218838; }
    </style>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
<p>You're successfully logged in.</p>

<!-- Example: simple logout button -->
<form action="logout.php" method="post">
    <button type="submit">Log Out</button>
</form>

</body>
</html>
