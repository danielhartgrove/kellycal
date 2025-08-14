<?php
// add_food.php - Handles logging food to the database.

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
<h2>What have you eaten?</h2>
<form action="add_food.php" method="POST">
    <label for="food_name">Food Name:</label>
    <input type="text" id="food_name" name="food_name" required>

    <label for="calories">Calories:</label>
    <input type="number" id="calories" name="calories" step="1" min="0" required>

    <label for="protein_g">Protein (g):</label>
    <input type="number" id="protein_g" name="protein_g" step="0.01" min="0" required>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" step="0.01" min="0" value="1.00" required>

    <button type="submit">Add Food</button>
</form>

<?php include './components/footer_kc.php'; ?>

</body>
</html>
