<?php
// login.php - Handles user login

// Start the session to track logged-in users
session_start();

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

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Ensure both fields are filled
    if (empty($_POST['username_email']) || empty($_POST['password'])) {
        echo "Please enter both username/email and password.";
        exit;
    }

    // Trim whitespace and get form values
    $username_email = trim($_POST['username_email']);
    $password = $_POST['password'];

    // Prepare SQL query to find user by username OR email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username_email, $username_email]);
    
    // Fetch user record from database
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // If user exists, verify the entered password against hashed password
        if (password_verify($password, $user['password_hash'])) {
            // Password is correct → login success

            // Store user information in session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Regenerate session ID to prevent session fixation attacks
            session_regenerate_id(true);

            // Redirect user to dashboard page
            header("Location: dashboard.php");
            exit;
        } else {
            // Password does not match
            echo "Incorrect password.";
        }
    } else {
        // User with this username/email not found
        echo "Username or email not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - KellyCal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include './components/header_kc.php'; ?>
<h2>Login</h2>
<form action="login.php" method="POST">
    <input type="text" name="username_email" placeholder="Username or Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Log In</button>
</form>

<p class="align-left">Don't have an account? <a href="register.php">Register here</a>.</p>

<?php include './components/footer_kc.php'; ?>

</body>
</html>
