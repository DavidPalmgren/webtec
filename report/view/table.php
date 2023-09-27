<?php


?>
<style>
table, th, td {
    border: 1px solid black;
}






</style>

<table>
    <tr>
        <th>Id</th>
        <th>Namn</th>
        <th>Datum</th>
        <th>Namnlängd</th>
        <th>Betydelse</th>
    </tr>

<?php foreach ($res as $row) : ?>
    <tr>
        <td><?= $row['rowid'] ?></td>
        <td><a href="?name=<?= $row['namn'] ?>"><?=$row['namn']?></a></td>
        <td><?= $row['datum'] ?></td>
        <td><?= $row['namnlangd'] ?></td>

        <?php if (!$res2) {
            echo '<td><p>ingen information om namnet kunde hittas</p></td>';
        }
        ?>

        <?php foreach ($res2 as $row2) : ?>
            <td><?= $row2['betydelse']?>
            </td> 
            </tr>
        <?php endforeach; ?>
<?php endforeach;


?>
