
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<header>
    <img src="/img/sliderchan.png" alt="SliderChan" />
</header>




<form class="navbar-form navbar-left" role="search" method="post">
    <div class="form-group">
        <input type="search" class="form-control" placeholder="Paste the url of the thread" name="searched">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>





<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'results.php';
}
else {
    echo '<p>Welcome to SliderChan, the first slider for browsing picture of board at 4chan.com</p>';
}
