<?php


?>
<main class ="main">
<table>
    <tr><th> Boogle search</th></tr>
    <tr>
        <th>Id</th>
        <th>Namn</th>
        <th>Datum</th>
        <th>Namnlängd</th>
    </tr>

<?php foreach ($res as $row) : ?>
    <tr class="none">
        <td class="none"><?= $row['rowid'] ?></td>
        <td class="none"><a href="name.php?name=<?= $row['namn'] ?>"><?=$row['namn']?></a></td>
        <td class="none"><?= $row['datum'] ?></td>
        <td class="none"><?= $row['namnlangd'] ?></td>
    </tr>
</main>
<?php endforeach; ?>
