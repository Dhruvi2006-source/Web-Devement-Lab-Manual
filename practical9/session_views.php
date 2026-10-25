<?php

session_start();

if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {
    $_SESSION['page_views']++;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Page View Counter</title>
</head>

<body>

    <h2>PHP Session Page View Counter</h2>

    <p>
        You have viewed this page
        <strong><?php echo $_SESSION['page_views']; ?></strong>
        time(s).
    </p>

    <p>Refresh the page to increase the count.</p>

</body>

</html>