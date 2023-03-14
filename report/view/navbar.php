<?php

$user = $_SESSION["user"] ?? "";

?>

<nav class="navbar">
    <ul>
        <li><a href="me.php">Me</a></li>
        <li><a href="report.php">Report</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="time.php">Time</a></li>
        <li><a href="today.php">Today</a></li>
        <li><a href="play.php">Play</a></li>
        <li><a href="friday.php">Friday</a></li>
        <li><a href="month.php">Month</a></li>
        <li><a href="datastructure.php">Datastructure</a></li>
        <li><a href="session.php">Session Info</a></li>
        <li><a href="photocal.php">Fotokalender</a></li>
        <li><a href="guessname.php">Gissningsspel</a></li>
        <li><a href="search.php">Search</a></li>
        <li><a href="users.php">All users</a></li>
        <?php if ($user) : ?>
            <p style="font-size: 0.6em;">Logged in as '<?= $user ?> '</p>
            <li><a class="navbar-user-left" href="profile.php?user=<?php echo $_SESSION['user'] ?>">Profile</a></li>
            <li><a class="navbar-user-right" href="logout_process.php">Logout</a></li>
        <?php else : ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
