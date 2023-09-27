<?php

include('../config/config.php');

include('test.php');
$title = 'Objekt';
include('../view/header.php');

?>

<main class="main">
    <div class="two-col-layout">
        <article class="article">
        <h2>Objekts</h2>
            <table>
            <tr>
                <th>Objekt</th>
                <th>Minibild</th>
                <th>Kort beskrivning</th>
            </tr>

            <?php foreach ($datatext as $row) : ?>
                <tr>
                <td style="text-align: center;font-size:25px"><a href="objektview.php?page=<?= $row['name']?>"><?=$row['title']?></a></td>
                    <td><img src="img/150x150/<?=$row['image1']?>" alt="me"></td>
                    <td style="width:50px"><?=$row['image1Text']?></td>
                    <?php ?>
                </tr>
            <?php endforeach; ?>
            </table>

        </article>
        
    </div>
    
</main>
<?php

include('../view/footer.php') ?>
