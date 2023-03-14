<?php
include('../config/config.php');

$title = 'Loginsida';

include('../view/header.php');
include('../view/navbar.php');
?>
<main class="main">
    <h1>Login</h1>
    <?= getFlashMessage() ?>
    <form method="post" action="login_process.php">
        <fieldset>
            <legend>Login</legend>

            <p>
                <label>Acronym:
                    <input type="text" name="acronym" placeholder="Enter your acronym">
                </label>
            </p>

            <p>
                <label>Password:
                    <input type="password" name="password" placeholder="Enter the password">
                </label>
            </p>

            <p>
                <input type="submit" name="login" value="Login">
            </p>
            <a href="create_user.php">Skapa nytt konto</a>
        </fieldset>
    </form>
</main>
<?php include('../view/footer.php') ?>
