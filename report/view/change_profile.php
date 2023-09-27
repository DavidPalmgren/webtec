<h1 style=color:white>User profile for: <?= $user ?></h1>

<?= getFlashMessage() ?>
<a style=color:white href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
<form method="post" action="change_profile_process.php">
    <fieldset>
        <legend>Change your password <?= $user ?></legend>
        <p>
            <label>Name:<br>
                <input type="name" name="newname" placeholder="type your new name">
            </label>
        </p>
        <p>
            <label>Avatar:<br>
                <input type="avatar" name="newavatar" placeholder="change your image">
            </label>
        </p>
        <p>
            <label>Signature:<br>
                <input type="signature" name="newsignature" placeholder="change your signature">
            </label>
        </p>
        <p>
            <input type="submit" name="doit" value="Update profile">
        </p>
    </fieldset>
</form>
