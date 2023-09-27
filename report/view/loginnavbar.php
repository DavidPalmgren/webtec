<?php

$user = $_SESSION["user"] ?? null;

?>


<nav class="navbar">
<p>KMOM06</p>
    <a href="me.php">&#8592; Report sidan</a>
    <a href="users.php">All users</a>
<?php if ($user) : ?>
    <a href="user.php">Logged in as: <?= $user ?></a>
    <a href="logout_process.php">Logout</a>
<?php else : ?>
    <a href="login.php">Login</a>
<?php endif; ?>
</nav>