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
    <?php echo "<title>" . htmlspecialchars($username) . "'s Dashboard - KellyCal</title>"; ?>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
<p>You've successfully logged in.</p>

<!-- Example: simple logout button -->
<form action="logout.php" method="post">
    <button type="submit">Log Out</button>
</form>

</body>
</html>
