
    <li>
        <div class="ui grid stackable three column grid">
            <div class="column">
                <p><?=$url_thread?>: Post N°<?=$j?></p>
                <a href="<?=$url_img_normal?>" data-lightbox="image-<?=$j?>" data-title="<?=$doubleslash?>">
                    <img src="<?= $url_img_thumb?>" style="max-height:500px;max-width:500px;">
                </a>
            </div>
            <?php if(isset($post->com)){
                echo '
            
            <div class="column">
                <p>'.$post->com.'</p>
            </div>';
            }
            else {
                echo '<div class="column empty"></div>';
            }?>
        </div>
    </li>

