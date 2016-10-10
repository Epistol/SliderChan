<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 08/10/2016
 * Time: 21:59
 */



if(isset($_POST['searched'])){

    $content_url = htmlspecialchars($_POST['searched']);

    $explosion =  explode("/", $content_url);

    if ($explosion[0] == 'http:' OR $explosion[0] == 'https:') {
        if (strpos($explosion[2], 'boards.4chan.org') !== false) {
            if (isset($explosion[3])) {
                $cat_thread = $explosion[3];

                if(!isset($explosion[4])){
                    $page = 1;
                }
                else if($explosion[4] != '')  {
                    $page = $explosion[4];
                }
                else  {
                    $page = 1;
                }

                if (isset($explosion[5])) {
                    $urlj = 'http://a.4cdn.org/' . $cat_thread . '/thread/'.$explosion[5].'.json';

                }
                else {
                    $urlj = 'http://a.4cdn.org/' . $cat_thread . '/'.$page.'.json';

                }

                $contents = file_get_contents($urlj);
                $contents = utf8_encode($contents);
                $results = json_decode($contents);

                $count = 0;

                $pool_img = array();
                echo ' <div  class="my-slider"><ul>';
                if (strpos($urlj, 'thread') == false) {
                    foreach ($results->threads as $thread) {


                        $premiere_img = 0;
                        foreach ($thread->posts as $post) {
                            //var_dump($post);

                            if (isset($post->tim)) {
                                $img = $post->tim . $post->ext;
                                $url_img_thumb = 'https://t.4cdn.org/' . $cat_thread . '/' . $img;
                                $url_img_normal = 'https://i.4cdn.org/' . $cat_thread . '/' . $img;
                                $pool_img[$count] = $url_img_thumb;


                                echo '<li><a href="'.$url_img_normal.'" data-lightbox="image-1" data-title="My caption">
                                <img src="' . $url_img_thumb . '" style="max-height:500px;max-width:500px;"></a></li>';


                            }


                        }

                        $count++;
                    }
                }
                else {


                        $premiere_img = 0;
                        $i = 0;
                        foreach ($results->posts as $post) {
                            //var_dump($post);

                            if (isset($post->tim)) {
                                $img = $post->tim . $post->ext;
                                $url_img_thumb = 'https://t.4cdn.org/' . $cat_thread . '/' . $img;
                                $url_img_normal = 'https://i.4cdn.org/' . $cat_thread . '/' . $img;
                                $pool_img[$count] = $url_img_thumb;


                                echo '<li><a href="'.$url_img_normal.'" data-lightbox="image-1" data-title="My caption">
                                <img src="' . $url_img_thumb . '" style="max-height:500px;max-width:500px;"></a></li>';


                                if (strpos($urlj, 'thread') == false) {
                                    if (++$i == 1) break;
                                }


                            }


                        }

                        $count++;

                }

                echo '</ul></div>';


                /* $chaine = implode(";",$pool_img);*/
            }






        }
        elseif (strpos($explosion[2], '4chan.org') !== false){
            echo 'Please paste a 4chan url or select a thread below : ';

        }
        else {
            echo 'Please define a board : ';
        }
    }


}


?>


