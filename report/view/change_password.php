<h1 style=color:white>User profile for: <?= $user ?></h1>

<?= getFlashMessage() ?>
<a style=color:white href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
<form method="post" action="change_password_process.php">
    <fieldset>
        <legend>Change your password <?= $user ?></legend>
        <p>
            <label>Password (new):<br>
                <input type="password" name="newpassword1" placeholder="type your new password">
            </label>
        </p>

        <p>
            <label>Password (new again):<br>
                <input type="password" name="newpassword2" placeholder="Repeat the passowrd">
            </label>
        </p>

        <p>
            <input type="submit" name="doit" value="Update password">
        </p>
    </fieldset>
</form>
