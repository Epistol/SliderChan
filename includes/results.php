<?php




if(isset($_POST)){

   //var_dump($_POST);

    if(isset($_POST['searched'])){
        $content_url = htmlspecialchars($_POST['searched']);
    }
    elseif (isset($_POST['paged'])){
        $content_url = 'https://boards.4chan.org/'.htmlspecialchars($_POST['thread']).'/'.htmlspecialchars($_POST['paged']);
    }
    else {
        $content_url = 'https://boards.4chan.org/'.htmlspecialchars($_POST['button_send']);
    }


    $explosion =  explode("/", $content_url);
    // IF the url contain an http or http(s)
    if ($explosion[0] == 'http:' OR $explosion[0] == 'https:') {
        // if it's a 4chan board
        if (strpos($explosion[2], 'boards.4chan.org') !== false) {
            // if there is a board
            if (isset($explosion[3])) {
                $cat_thread = $explosion[3];
                // if no page is set, we set on 1
                if(!isset($explosion[4])){
                    $page = 1;
                }
                // if not empty, set on 1
                else if($explosion[4] != '')  {
                    $page = $explosion[4];
                }
                // else, set it on 1 anyway
                else  {
                    $page = 1;
                }


                // -- IF there is a thread in the url
                    // set the url to search on json to a thread url

                if (isset($explosion[5])) {
                    $urlj = 'http://a.4cdn.org/' . $cat_thread . '/thread/'.$explosion[5].'.json';

                }
                // else, set the url to search on a cat_thread
                else {
                    $urlj = 'http://a.4cdn.org/' . $cat_thread . '/'.$page.'.json';

                }



                // loading json content
                $contents = file_get_contents($urlj);
                $contents = utf8_encode($contents);
                $results = json_decode($contents);

                $count = 0;

                // lil test
                $pool_img = array();


                // if it's not a thread url
                if (strpos($urlj, 'thread') == false) {

                    include 'nav_cat.php';


                    echo ' <div  class="my-slider"><ul>';
                    foreach ($results->threads as $thread) {




                        $premiere_img = 0;
                        $j = 1;
                        foreach ($thread->posts as $post) {
                            //var_dump($post);

                            if (isset($post->tim)) {
                                $img = $post->tim . $post->ext;
                                $url_img_thumb = 'https://t.4cdn.org/' . $cat_thread . '/' . $img;
                                $url_img_normal = 'https://i.4cdn.org/' . $cat_thread . '/' . $img;
                                $extension = htmlspecialchars($post->ext);
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


                                include 'result_single_cat.php';




                            }

                        $j++;
                        }



                        $count++;



                    }

                    echo '</ul></div>';


                }
                // if it's a thread URL
                else {


                        $premiere_img = 0;
                        $i = 0;
                        $j = 1;

                    echo ' <div  class="my-slider"><ul>';


                        foreach ($results->posts as $post) {
                            //var_dump($post);

                            if (isset($post->tim)) {
                                $extension = htmlspecialchars($post->ext);
                                $img = $post->tim . $post->ext;
                                $url_img_thumb = 'https://i.4cdn.org/' . $cat_thread . '/' . $img;
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

                    echo '</ul></div>';

                }




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


