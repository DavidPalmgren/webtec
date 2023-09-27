<?php

include('../config/config.php');

 include('test.php');
 $title = 'Galleri';
 include('../view/header.php');


$index = 0;


?>

<main class="main">
    <div class="two-col-layout">
        <article class="article">
       <?php include('../view/GalleriView.php'); ?>
            <table>
            <tr>

            </tr>

            <?php if ($imagenum) { ?>
                <?php for ($x = $index; $x <= $imagenum; $x += 1) { ?>
                    <?php $index += 1
                    ?>
                <tr>

                    <td><img src="img/150x150/<?=$datatext[$x]['image1']?>" alt="me"></td>
                
                </tr>
            
                <?php }
            } ?>
                    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
          
        <input type="submit" name="button2"
                class="button" value="Button2" />
    </form>


            </table>
        </article>
    </div>
</main>
<?php

include('../view/footer.php'); ?>
