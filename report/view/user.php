<?php

$id         = htmlentities($res['rowid'] ?? "");
$acronym    = htmlentities($res['acronym'] ?? "");
$name       = htmlentities($res['name'] ?? "");
$role       = htmlentities($res['role'] ?? "");
$avatar     = htmlentities($res['avatar'] ?? "");
$signature  = htmlentities($res['signature'] ?? "");

?><h1 style=color:white>User profile for: '<?= $acronym ?>'</h1>

<p>
    <a style=color:white href="change_password.php">Change password</a> |
    <a style=color:white href="change_profile.php">Change profile </a> |
    <a style=color:white href="delete_user.php">Delete user</a> |
    <a style=color:white href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
</p>

<?= getFlashMessage() ?>

<form>
    <fieldset>
        <legend>User '<?= $acronym ?>'</legend>

        <p>
            <label>Id:
                <input type="text" name="id" value="<?= $id ?>" readonly="readonly">
            </label>
        </p>


        <p>
            <label>Acronym:
                <input type="text" name="acronym" value="<?= $acronym ?>" readonly="readonly">
            </label>
        </p>

        <p>
            <label>Name:
                <input type="text" name="name" value="<?= $name ?>">
            </label>
        </p>

        <p>
            <label>Role:
                <input type="text" name="role" value="<?= $role ?>" readonly="readonly">
            </label>
        </p>

        <figure class="right">
            <img src="<?= $avatar ?>" alt="Avatar for <?= $acronym ?>">
        </figure>

        <p>
            <label>Avatar:
                <input type="text" name="avatar" value="<?= $avatar ?>">
            </label>
        </p>


        <p>
            <label>Signature:
                <input type="text" name="signature" value="<?= $signature ?>">
            </label>
        </p>
    </fieldset>
</form>
