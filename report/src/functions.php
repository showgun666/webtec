<?php

/**
 * Various functions for improved code structure.
 */

/**
 * Destroy the session
 */
function destroySession(): void
{
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}

/**
 * Get the flash message and return it, if any.
 *
 * @return string with flash message, empty string of no message exists-
 */
function getFlashMessage(): string
{
    $flashMessage = $_SESSION["flash-message"] ?? "";
    unset($_SESSION["flash-message"]);

    return $flashMessage;
}

/**
 * Set the flash message according to type.
 *
 * @return void
 */
function setFlashMessage(string $type, string $message): void
{
    $flashMessage = <<<EOD
    <div class="$type">
        <p>$message</p>
    </div>
    EOD;
    $_SESSION["flash-message"] = $flashMessage;
}

/**
 * Exception handler to print out a HTML message with details on the exception,
 * useful to deal with uncaught exceptions.
 *
 * @return object as the database connection object.
 */
function connectToDatabase(string $dsn): object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>'$dsn'<br>";
        throw $e;
    }

    return $db;
}

/**
 * Create DSN
 *
 * @return string the DSN
 */
function createDSN(string $adress): string
{
    // Create a DSN for the database using its filename
    $fileName = "$adress";
    $dsn = "sqlite:$fileName";

    return $dsn;
}

/**
 * Get filename
 *
 * @return string the filename
 */
function getFilename(string $adress): string
{
    // Selects file location depending on
    $fileName = "../db/$adress";
    if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
        $fileName = "C:\db\\$adress";
    }

    return $fileName;
}

/**
 * Get result from SQL statement
 *
 * @return array the result
 */
function prepareExecuteFetchOne(string $sql, PDO $db, string $query)
{
    // Prepare the first SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the first SQL statement towards the database
    $arg = ["$query"];
    $stmt->execute($arg);
    $res = $stmt->fetch();
    return $res;
}

/**
 * Get result from SQL statement
 *
 * @return array the result
 */
function prepareExecuteFetchAll(string $sql, PDO $db, string $query)
{
    // Prepare the first SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the first SQL statement towards the database
    $arg = ["$query"];
    $stmt->execute($arg);
    $res = $stmt->fetchAll();
    return $res;
}
