<!DOCTYPE html>
<html>
<head>
    <title>PHP File Upload</title>
</head>
<body>
<h2>Upload a File</h2>
<form action="practical7_1.php" method="post" enctype="multipart/form-data">
    <label>Select File:</label>
    <input type="file" name="myfile" required>
    <br><br>
    <input type="submit" name="upload" value="Upload File">
</form>
<?php

if (isset($_POST['upload'])) {
    $fileName = $_FILES['myfile']['name'];
    $tempName = $_FILES['myfile']['tmp_name'];
    $uploadFolder = "uploads/";

    $destination = $uploadFolder . basename($fileName);

    if (move_uploaded_file($tempName, $destination)) {

        echo "<p>File uploaded successfully.</p>";
        echo "<p>File Name: " . htmlspecialchars($fileName) . "</p>";

    } else {
        echo "<p>File upload failed.</p>";
    }
}
?>
</body>
</html>