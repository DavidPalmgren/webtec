<?php


?>
<style>
table, th, td {
    border: 1px solid black;
}






</style>

<table>
    <tr>
        <th>rowId</th>
        <th>acronym</th>
        <th>name</th>
        <th>role</th>
        <th>avatar</th>
        <th>signature</th>
    </tr>

<?php foreach ($res as $row) : ?>
    <tr>
        <td><?= $row['rowid'] ?></td>
        <td><?= $row['acronym'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['role'] ?></td>
        <td><?= $row['avatar'] ?></td>
        <td><?= $row['signature'] ?></td>
    </tr>
<?php endforeach;


?>
