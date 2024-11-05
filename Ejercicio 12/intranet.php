<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Intranet</title>
</head>

<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <a href="index.php">Home</a>
    <a href="logout.php">Logout</a>
</body>

</html>