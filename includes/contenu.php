
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">  <img src="/img/sliderchan.png" alt="SliderChan" style="
    height: 65px;
" /></span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <form class="navbar-form navbar-left" role="search" method="post">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="Paste the url of the thread" name="searched">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">  <img src="/img/sliderchan.png" alt="SliderChan" style="
    height: 65px;
" /></span>
        <nav class="mdl-navigation">
            <form class="navbar-form navbar-left" role="search" method="post">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Paste the url of the thread" name="searched">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <?php $alphabet = array("a","b","c","d","e","f","g","gif","h","hr","k","m","o","p","r","s","t","u","v","vg","vr","w","wg","i","ic","r9k","s4s","vip","cm","hm",
            "lgbt","y","3","aco","adv","an","asp","biz","cgl","ck","co","diy","fa","fit","gd","hc","his","int","jp","lit","mlp","mu","n","news","out","po","pol","qst",
            "sci","soc","sp","tg","toy","trv","tv","vp","wsg","wsr","x");
            foreach ($alphabet as $a){
                echo '
                <form class="navbar-form navbar-left" role="search" method="post" >
                    <div class="form-group">
                        <input type="hidden" value="http://boards.4chan.org/'.strtolower($a).'/" name="searched">
                    </div>
                    <button type="submit" class="">'.$a.'</button>
                </form>';
            }
            ?>
        </nav>
    </div>
    <main class="mdl-layout__content">

<!--Partie visible-->
        <div class="menu_choose">
            <?php $alphabet = array("a","b","c","d","e","f","g","gif","h","hr","k","m","o","p","r","s","t","u","v","vg","vr","w","wg","i","ic","r9k","s4s","vip","cm","hm",
                "lgbt","y","3","aco","adv","an","asp","biz","cgl","ck","co","diy","fa","fit","gd","hc","his","int","jp","lit","mlp","mu","n","news","out","po","pol","qst",
                "sci","soc","sp","tg","toy","trv","tv","vp","wsg","wsr","x");
            foreach ($alphabet as $a){
                echo '
                <form class="navbar-form navbar-left" role="search" method="post" style="
    padding: 0px;
    width: auto;
    margin: 0px;
    float: left;
">
                    <div class="form-group">
                        <input type="hidden" value="http://boards.4chan.org/'.strtolower($a).'/" name="searched">
                    </div>
                    <button type="submit" class="">'.$a.'</button>
                </form>';
            }
            ?>
        </div>

        <div class="page-content">


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'results.php';
}
else {
    echo '<p>Welcome to SliderChan, the first slider for browsing picture of board at 4chan.com</p>';
}
