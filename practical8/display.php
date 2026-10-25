<?php

include "db.php";

$sql = "SELECT id, name, address, email, phone FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>All Users</title>
</head>

<body>

<h2>All Registered Users</h2>

<table border="1" cellpadding="8">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['address']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";

        echo "</tr>";
    }

} else {

    echo "<tr><td colspan='5'>No users found.</td></tr>";

}

?>

</table>

<br>

<a href="registration.php">Back to Registration</a>

</body>
</html>