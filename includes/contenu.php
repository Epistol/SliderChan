
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<header class="menu_h">
    <!-- Title -->
    <div style="display:flex;justify-content:center;align-items:center;">
        <div><img src="/img/sliderchan.png" alt="SliderChan" style="
    height: 65px;
" /></div>

    </div>
    <!-- Add spacer, to align navigation to the right -->
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation. We hide it in small screens. -->

        <form class="ui form" role="search" method="post">

            <div class="ui fluid action left icon input">
                <i class="search icon"></i>
                <input type="text" placeholder="Url of the thread" name="searched">
                <button class="ui teal button" type="submit">Search</div>
            </div>




        </form>




    </div>



    <!--Partie visible-->
    <div class="menu_choose">

        <form class="ui form" role="search" method="post" style="
    padding: 0px;
    width: auto;
    margin: 0px;
    margin-top: 0.5rem;
    float: left;

">


        <?php $alphabet = array("a","b","c","d","e","f","g","gif","h","hr","k","m","o","p","r","s","t","u","v","vg","vr","w","wg","i","ic","r9k","s4s","vip","cm","hm",
            "lgbt","y","3","aco","adv","an","asp","biz","cgl","ck","co","diy","fa","fit","gd","hc","his","int","jp","lit","mlp","mu","n","news","out","po","pol","qst",
            "sci","soc","sp","tg","toy","trv","tv","vp","wsg","wsr","x");
        foreach ($alphabet as $a){
            echo '
                
                   <div class="ui icon input" style="
    margin-bottom: 0.5rem;
">
                    <button type="submit" class="ui basic button" value="'.$a.'" name="button_send">'.$a.'</button>
                    </div>
                ';

        }

        ?>

        </form>


    </div>



</header>
<main class="mdl-layout__content">


    <div class="page-content">


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //require_once 'share.php';
    require_once 'results.php';
}
else {
    echo '<p>Welcome to SliderChan, the first slider for browsing picture of board at 4chan.com</p>';
}
