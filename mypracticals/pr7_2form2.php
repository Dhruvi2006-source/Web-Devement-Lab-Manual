<!DOCTYPE html>
<html>
<head>
    <title>Form 2</title>
</head>
<body>
<h2>Details from Form 1</h2>
<?php
$username = $_POST['username'];
$city = $_POST['city'];
?>
<form>
    <label>Name:</label>
    <input type="text" value="<?php echo htmlspecialchars($username); ?>" readonly>
    <br><br>
    <label>City:</label>
    <input type="text" value="<?php echo htmlspecialchars($city); ?>" readonly>
</form>
</body>
</html>