<?php

include('test.php');
include('pdotest.php');


$page_no = $_GET['page'];

$sql3 = <<<EOD
select id from object where name ='$page_no';
EOD;
$stmt3 = $db->prepare($sql3);
$stmt3->execute();
$res3 = $stmt3->fetchAll();
$datatext3 = $res3[0]['id'];
$datatext3 += -3;
?>

<main class="main">
<div class="two-col-layout">
    <article class="article">
    
    <h2 style="text-align:center"><?=$datatext2[0]['title']?></h2>
    <p style="text-align:center"><?=$datatext2[0]['gps']?></p>
    <figure class ="figure center">
    
        <img src="img/orig/<?=$datatext2[0]['image1']?>" alt="something went wrong">
            <figcaption>
                <p><?=$datatext2[0]['image1Text']?></p>
            </figcaption>
    </figure>
    <p><?=$datatext2[0]['data']?></p>
    <figure class ="figure center">
    
    <?php if ($datatext2[0]['image2']) :?> 
        <img src="img/orig/<?=$datatext2[0]['image2']?>" alt="img/orig/<?=$datatext2[0]['image2Alt']?>">
    <?php endif; ?>
        <figcaption>
            <p><?=$datatext2[0]['image2Text']?></p>
        </figcaption>
    </figure>

    
        
        

        
        <header>
            <?php


            $prevpage = $datatext3 - 1;
            $nextpage = $datatext3 + 1;


            ?>


        
        <?php if ($datatext3 > 0) : ?>
        <a class="page2" href="objektview.php?page=<?= $datatext[$prevpage]['name'] ?>">&#8592;<?=$datatext[$prevpage]['title']?></a>                               
        <?php endif; ?>

        <?php if ($datatext3 < 13) : ?>
        <a class="page" href="objektview.php?page=<?= $datatext[$nextpage]['name'] ?>"><?=$datatext[$nextpage]['title']?>&#8594;</a>
        <?php endif; ?>

        
        



        </header>
    </article>
</div>

</main>
