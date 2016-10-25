
<li>

    <div class="ui grid">
        <div class="column nobg">
            <div class="ui tiny header"><a href="<?=  $url_thread ?>"><?=  $url_thread ?></a></div>
        </div>
    </div>
    <div class="ui hidden divider"></div>


    <div class="ui grid stackable three column grid">
        <div class="column">


            <a href="<?=$url_img_normal?>" data-lightbox="image-<?=$j?>" data-title="<?=$doubleslash?>">
                <?php if ($extension != '.webm'){
                    echo '  <img src="'.$url_img_thumb.'" style="max-height:500px;max-width:500px;"></a>';
                }
                else {
                    echo '  <video controls src="'.$url_img_thumb.'" style="max-height:500px;max-width:500px;"></video></a>';
                }

                ?>

            </a>
        </div>
        <?php if(isset($post->com)){
            echo '
            <div class="column">
             <p>Post N°'.$j.'</p>
                <p>'.$post->com.'</p>
            </div>';
        }
        else {
            echo '<div class="column empty"></div>' . $url_thread;
        }?>
    </div>


</li>

