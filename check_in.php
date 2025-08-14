<?php
// check_in.php - Handles user check-in for updating user_stats.

try {
    // Connect to the MySQL database using PDO
    $pdo = new PDO('mysql:host=localhost;dbname=tracker', 'root', '', [
        // Throw exceptions on DB errors
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    // Stop execution if database connection fails and show error message
    die("Database connection failed: " . $e->getMessage());
}

// Check if the registration form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - KellyCal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include './components/header_kc.php'; ?>
<h2>What's changed?</h2>
<form action="check_in.php" method="POST">
    
</form>

<?php include './components/footer_kc.php'; ?>

</body>
</html>
