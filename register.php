<?php
// register.php - Handles user registration

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

    // Get and trim input values from the form
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Basic validation
    if (strlen($username) < 3 || strlen($password) < 6) {
        // Username must be at least 3 chars and password at least 6
        die("Username must be at least 3 characters and password at least 6.");
    }

    // Check if the username or email already exists in the database
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username, $email]);
    
    if ($stmt->fetch()) {
        // Found an existing user → cannot register with same username/email
        die("Username or email already taken.");
    }

    // Hash the password securely before storing in database
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the users table
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $passwordHash]);

    // Redirect the user to the login page after successful registration
    header("Location: login.html");
    exit;
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
<h2>Create Your Account</h2>
<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required minlength="6">
    <button type="submit">Register</button>
</form>

<p class="align-left">Already have an account? <a href="login.html">Log in here</a>.</p>

</body>
</html>
