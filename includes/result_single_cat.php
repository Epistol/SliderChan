<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 18/10/2016
 * Time: 21:14
 */


if(isset($explosion[4])){

    $thread_url = $explosion[0].'/'.$explosion[1].'/'.$explosion[2].'/'.$explosion[3].'/'.$explosion[4];
}
else {

    $thread_url = $explosion[0].'/'.$explosion[1].'/'.$explosion[2].'/'.$explosion[3];
}

$urlto = $explosion[0].'/'.$explosion[1].'/'.$explosion[2].'/'.$explosion[3];

?>


<li>
    <div class="ui grid">

<div class="sixteen wide column nobg">

            <p style="float: left;">Thread :

            <form class="ui form" role="search" method="post" style="
    float: left;

">
                <button type="submit" class="ui basic button" value="<?= $url_thread ?>" name="searched"><?=$url_thread?></button>

            </form>
            </p>

</div>

    </div>



    <div class="ui grid stackable grid">

        <div class="column"></div>
        <div class="column" style="background-color: transparent;">
            <a href="<?=$url_img_normal?>" data-lightbox="image-<?=$j?>" data-title="<?=$doubleslash?>">

                <?php if ($extension != '.webm'){
                    echo '  <img src="'.$url_img_thumb.'" style="max-height:500px;max-width:500px;"></a>';
                }
                else {
                    echo '  <video controls src="'.$url_img_thumb.'" style="max-height:500px;max-width:500px;"></video></a>';
                }

                ?>

        </div>
    </div>



</li>

