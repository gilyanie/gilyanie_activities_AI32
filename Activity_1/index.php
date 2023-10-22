<?php
$username = $email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
    echo "<script>";
    echo "var userData = { username: '$username', email: '$email', password: '$password' };";
    echo "localStorage.setItem('userData', JSON.stringify(userData));";
    echo "alert('Registration data stored in local storage.');";
    echo "</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css"> <!-- Create a separate CSS file for styling -->
</head>
<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    text-align: center;
    margin: 0;
    padding: 0;
}

.container {
    background-image: linear-gradient(to top, #fe0019, #ff4748, #ff6c6f, #ff8d93, #fbacb3);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.title {
    color: #FE0019;
    font-size: 24px;
    margin-bottom: 20px;
}

.registration-form {
    background-color: #F2B9DE;
    padding: 20px;
    border-radius: 8px;
    width: 300px;
    text-align: left;
}

.form-group {
    margin: 10px 0;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.submit-button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.submit-button:hover {
    background-color: #0056b3;
}
</style>

<body>
    <div class="container">
        <h2 class="title">User Registration</h2>
        <form class="registration-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="submit-button">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
