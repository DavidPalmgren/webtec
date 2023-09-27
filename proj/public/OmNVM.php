<?php

include('../config/config.php');


$title = 'Objekt';
include('../view/header.php');
include('connectUser.php');

$db = connectToDatabase($dsn);
$sql = <<<EOD
select * from article where name="nattraby-vagmuseum";
EOD;

$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
$datatext = $res;

?>

<main class="main">
<div class="two-col-layout">
    <article class="article">
    
    <h2 style="text-align:center"><?=$datatext[0]['title']?></h2>
    <p style="text-align:center"><?=$datatext[0]['gps']?></p>
    <p><a href="doc.php">dokumentation</a></p>
    <figure class ="figure center">
        <img src="img/orig/<?=$datatext[0]['image1']?>" alt="">
            <figcaption>
                <p><?=$datatext[0]['image1Text']?></p>
            </figcaption>
    </figure>
    <?=$datatext[0]['data']?>
    <figure class ="figure center">
    
    <?php if ($datatext[0]['image2']) :?> 
        <img src="img/orig/<?=$datatext[0]['image2']?>" alt="img/orig/<?=$datatext[0]['image2Alt']?>">
    <?php endif; ?>
        <figcaption>
            <p><?=$datatext[0]['image2Text']?></p>
        </figcaption>
    </figure>
    </article>
    </div>
        </main>
<?php

include('../view/footer.php') ?>
