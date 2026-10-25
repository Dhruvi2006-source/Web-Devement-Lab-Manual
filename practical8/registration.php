<?php
include "db.php";

if (isset($_POST['submit'])) {
 
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, address, email, phone)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $address, $email, $phone);

    if ($stmt->execute()) {
        echo "<p>User registered successfully.</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
} 
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
</head>

<body>

<h2>User Registration Form</h2>

<form method="post" action="registration.php">

    <label>Name:</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Address:</label>
    <textarea name="address" required></textarea>

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>

    <br><br>

    <label>Phone:</label>
    <input type="text" name="phone" required>

    <br><br>

    <input type="submit" name="submit" value="Register">
</form>
<br>
<a href="display.php">View All Users</a>
</body>
</html>