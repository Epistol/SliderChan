<div class="ui pagination menu">

        <?php
            if(!isset($explosion[4])){
                $page_thread = 1;
                $previous = 1;
                $next = 2;
            }
            else {
                $page_thread =  $explosion[4];

                $previous = $page_thread - 1 ;
                $next = $page_thread + 1;
            }

            if($previous == $page_thread){
                echo ' <button class="active item" value="'.$next.'" name="">< Page ' . $page_thread . ' ></button> 
            <form class="ui form" role="search" method="post" style="
    float: left;

">
<input type="hidden" value="'.$cat_thread.'" name="thread" />
<button type="submit" class="item" value="'.$next.'" name="paged">'.$next.'</button>
            
            </form>' ;
            }
            else {
                echo '<form class="ui form" role="search" method="post" style="
    float: left;

">
<input type="hidden" value="'.$cat_thread.'" name="thread" />
<button type="submit" class="item" value="'.$previous.'" name="paged">'.$previous.'</button>
</form>'  .


                    ' <button class="active item" value="'.$next.'" name="">< Page ' . $page_thread . ' ></button>  ' . '<form class="ui form" role="search" method="post" style="
    float: left;

">
<input type="hidden" value="'.$cat_thread.'" name="thread" />
<button type="submit" class="item" value="'.$next.'" name="paged">'.$next.'</button>
</form>';
            }





            ?>

</div>
