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
        <?php include './components/header_kc.php'; ?>
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>Your tasks:</p>

        <?php

            global $user_id;
            // Connect to the database
            $pdo = new PDO('mysql:host=localhost;dbname=tracker', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            // Prepare query to check if a user's stats exist
            $stmt = $pdo->prepare("SELECT * FROM user_stats WHERE user_id = ?");
            $stmt->execute([$user_id]);
            $stats = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stats) {
                // Stats exist
                echo "<p>User stats exist.</p>";
            } else {
                // Stats do not exist
                echo "<p>No stats for user. <a href=\"user_stats.php\">Create Stats</a></p>";
            }

            // Prepare query to check if a daily log exists for today
            $stmt = $pdo->prepare("SELECT log_id FROM daily_logs WHERE user_id = ? AND log_date = CURDATE()");
            $stmt->execute([$user_id]);
            $log = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($log) {
                // Log exists
                $logId = $log['log_id'];
                echo "<p>Today's log exists. Log ID: $logId</p>";
            } else {
                // Log does not exist
                echo "<p>No food added today :(. <a href=\"add_food.php\">Add Food</a></p>";
            }
            ?>

            <p> Ready to check in? <a href="check_in.php">Check In</a></p>

        <form action="logout.php" method="post">
            <button type="submit">Log Out</button>
        </form>

        <?php include './components/footer_kc.php'; ?>
    </body>
</html>
