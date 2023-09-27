<?php

?>

<h1>Galleri</h1>

<?= getFlashMessage() ?>

<form method="post" action="">
    <fieldset>
        <legend>Galleri</legend>
        <p>
            <label>How many images at a time:<br>
                <input type="text" name="imagenum" placeholder="Enter here">
            </label>
        </p>

        <p>
            <input type="submit" name="doit" value="Submit">
        </p>
    </fieldset>
</form>
<?php
$imagenum = $_POST["imagenum"] ?? 0;
$imagenum = $imagenum - 1;
