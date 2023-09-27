
<?php

include('../config/config.php');
include('Articlesload.php');
$title = 'Article';
include('../view/header.php');

?>

<main class="main">
    <div class="two-col-layout">
        <article class="article">
            <h2>Articles</h2>
            <table>
            <tr>
                <th style="text-align: left">Objekt</th>
                <th style="text-align: left">Författare</th>
            </tr>

            <?php foreach ($datatext4 as $row) : ?>
                <tr>
                <td><a href="Articleview.php?page=<?= $row['name']?>"><?=$row['title']?></a></td>
                <td><?=$row['author']?></td>

                </tr>
            <?php endforeach;?>
            </table>
        </article>
    </div>
</main>
<?php

include('../view/footer.php') ?>
