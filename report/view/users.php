<?php

?><h1 style=color:white>All users</h1>

<?= getFlashMessage() ?>

<p style=color:white>Your resultset contains <?= count($res) ?> rows.</p>
<table class="two">
    <tr>
        <th>Id</th>
        <th>Acronym</th>
        <th>Name</th>
        <th>Role</th>
        <th>Avatar</th>
        <th>Signature</th>
    </tr>

<?php foreach ($res as $row) :
    $userEncoded = urlencode($row['acronym']);
    $urlToProfile = "profile.php?user=" . htmlentities($userEncoded);
    ?>
    <tr>
        <td><?= htmlentities($row['rowid']) ?></td>
        <td>
            <a href="<?= $urlToProfile ?>"><?= htmlentities($row['acronym']) ?></a>
        </td>
        <td><?= htmlentities($row['name'] ?? "") ?></td>
        <td><?= htmlentities($row['role']) ?></td>
        <td><?= htmlentities($row['avatar'] ?? "") ?></td>
        <td><?= htmlentities($row['signature'] ?? "") ?></td>
        </td>
    </tr>
<?php endforeach ?><?php
