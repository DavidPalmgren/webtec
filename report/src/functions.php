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
    echo 'something';
}


function setFlashMessage(
    string $type,
    string $message
): void {
    $flashmessage = <<<EOD
    <div class="$type">
    <p>$message</p>
    </div>
    EOD;
    $_SESSION["flash-message"] = $flashmessage;
}

function getFlashMessage(): string
{
    $flashmessage = $_SESSION["flash-message"] ?? "";
    unset($_SESSION["flash-message"]);

    return $flashmessage;
}

function checkIfUserLoggedInOrRedirectToLogin(): string
{
    $user = $_SESSION["user"] ?? null;
    if (!$user) {
        setFlashMessage("warning", "Only a logged in user can access the page user.php!");
        header("Location: login.php");
        exit();
    }
    return $user;
}

function checkIfUserLoggedIn(): string
{
    $user = $_SESSION["user"] ?? "";
    return $user;
}

function redirectTo(string $url): void
{
    header("Location: $url");
    exit();
}
