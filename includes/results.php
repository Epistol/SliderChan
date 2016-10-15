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
                var_dump($urlj);

                $contents = file_get_contents($urlj);
                $contents = utf8_encode($contents);
                $results = json_decode($contents);

                $count = 0;

                $pool_img = array();
                echo ' <div  class="my-slider"><ul>';
                if (strpos($urlj, 'thread') == false) {
                    foreach ($results->threads as $thread) {


                        $premiere_img = 0;
                        $j = 1;
                        foreach ($thread->posts as $post) {
                            //var_dump($post);

                            if (isset($post->tim)) {
                                $img = $post->tim . $post->ext;
                                $url_img_thumb = 'https://t.4cdn.org/' . $cat_thread . '/' . $img;
                                $url_img_normal = 'https://i.4cdn.org/' . $cat_thread . '/' . $img;
                                $pool_img[$count] = $url_img_thumb;
                                if(isset($post->semantic_url)){
                                    $url_thread = 'http://boards.4chan.org/'.$cat_thread.'/thread/'.$post->no.'/'.$post->semantic_url;
                                }
                                else {
                                    break;
                                }

                                if(isset($post->com)){
                                    $doubleslash = htmlspecialchars($post->com);
                                }
                                else {
                                    $doubleslash = '';
                                }


                                echo '<li>
<p>Thread : <a href="'.$url_thread.'">'.$url_thread.'</a></p>
<a href="'.$url_img_normal.'" data-lightbox="image-'.$j.'" data-title="'.$doubleslash.'">
                                <img src="' . $url_img_thumb . '" style="max-height:500px;max-width:500px;"></a></li>';


                            }

                        $j++;
                        }

                        $count++;
                    }
                }
                else {


                        $premiere_img = 0;
                        $i = 0;
                        $j = 1;
                        foreach ($results->posts as $post) {
                            //var_dump($post);

                            if (isset($post->tim)) {
                                $img = $post->tim . $post->ext;
                                $url_img_thumb = 'https://t.4cdn.org/' . $cat_thread . '/' . $img;
                                $url_img_normal = 'https://i.4cdn.org/' . $cat_thread . '/' . $img;
                                $pool_img[$count] = $url_img_thumb;

                                if($j == 1){

                                    $url_thread = 'http://boards.4chan.org/'.$cat_thread.'/thread/'.$post->no.'/'.$post->semantic_url;
                                    $url_thread_encours = $post->semantic_url;
                                }
                                else {

                                    $url_thread = 'http://boards.4chan.org/'.$cat_thread.'/thread/'.$post->resto.'/'.$url_thread_encours;
                                }

                                if(isset($post->com)){
                                    $doubleslash = htmlspecialchars($post->com);
                                }
                                else {
                                    $doubleslash = '';
                                }

                                if(isset($post->no)){
                                    $url_post = $url_thread.'#p'.$post->no;
                                }


                                require 'view_result.php';


                                if (strpos($urlj, 'thread') == false) {
                                    if (++$i == 1) break;
                                }


                            }

                        $j++;
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


