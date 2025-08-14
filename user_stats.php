<?php
// user_stats.php - Handles user statistics for first time usage.

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
<h2>Let's hear about you...</h2>
<form action="user_stats.php" method="POST">
    <label for="sex">Sex:</label>
    <select id="sex" name="sex" required>
        <option value="">Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    
    <label for="height_cm">Height (cm):</label>
    <input type="number" id="height_cm" name="height_cm" step="0.01" min="0" required>

    <label for="weight_kg">Weight (kg):</label>
    <input type="number" id="weight_kg" name="weight_kg" step="0.01" min="0" required>

    <label for="goal_weight_kg">Goal Weight (kg):</label>
    <input type="number" id="goal_weight_kg" name="goal_weight_kg" step="0.01" min="0" required>

    <label for="daily_calories">Daily Calories (kcal):</label>
    <input type="number" id="daily_calories" name="daily_calories" step="1" min="0" required>

    <label for="daily_protein_g">Daily Protein (g):</label>
    <input type="number" id="daily_protein_g" name="daily_protein_g" step="0.01" min="0" required>

    <button type="submit">Save Profile</button>
</form>

<?php include './components/footer_kc.php'; ?>

</body>
</html>
