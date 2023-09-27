<?php

include('Articlesload.php');
include('ArticlePageLoad.php');
$page_no = $_GET['page'];

$sql3 = <<<EOD
select id from article where name ='$page_no';
EOD;
$stmt3 = $db->prepare($sql3);
$stmt3->execute();
$res3 = $stmt3->fetchAll();
$datatext3 = $res3[0]['id'];

$sql0 = <<<EOD
select id from article
EOD;
$stmt0 = $db->prepare($sql0);
$stmt0->execute();
$res0 = $stmt0->fetchAll();
$datatext0 = $res0;


$count = count($res0, 0) - 1;



for ($i = 0; $i <= $count; $i++) {
    if ($res0[$i]['id'] == $datatext3) {
            #print_r(' | ');
            #print_r($i);
            #print_r(' | ');
            $navi = $i;
            $prevload = $navi - 1;
            $nextload = $navi + 1;
    }
}








?>



<main class="main">
<div class="two-col-layout">
    <article class="article">
    
    <h2 style="text-align:center"><?=$datatext5[0]['title']?></h2>
    <p style="text-align:center"><?=$datatext5[0]['gps']?></p>
    <figure class ="figure center">
    
        <img src="img/orig/<?=$datatext5[0]['image1']?>" alt="">
            <figcaption>
                <p><?=$datatext5[0]['image1Text']?></p>
            </figcaption>
    </figure>
    <p><?=$datatext5[0]['data']?></p>
    <figure class ="figure center">
    
    <?php if ($datatext5[0]['image2']) :?> 
        <img src="img/orig/<?=$datatext5[0]['image2']?>" alt="img/orig/<?=$datatext5[0]['image2Alt']?>">
    <?php endif; ?>
        <figcaption>
            <p><?=$datatext5[0]['image2Text']?></p>
        </figcaption>
    </figure>
        <header>
            <?php



            ?>





        </header>
    </article>
    </div>
</main>
