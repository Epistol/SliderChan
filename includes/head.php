<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SliderChan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="/css/unslider.css">
    <link rel="stylesheet" href="/css/unslider-dots.css">


    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/main.css">
    <!-- Latest compiled and minified CSS -->


    <script language="javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
    <script src="/semantic/dist/semantic.min.js"></script>


    <script src="/bower_components/classie/classie.js"></script>

 <link href="/css/lightbox.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-green.min.css" />
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>



<script src="//stephband.info/jquery.event.move/js/jquery.event.move.js"></script>
<script src="//stephband.info/jquery.event.swipe/js/jquery.event.swipe.js"></script>
<script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js" async></script>





<script
    src="/js/unslider-min.js"
    crossorigin="anonymous"></script>

<script>
    jQuery(document).ready(function($) {
        $('.my-slider').unslider(
            { autoplay: true,
                delay: 4000,
                keys: {
                    prev: 37,
                    next: 39,
                    stop: 27 //  Example: pause when the Esc key is hit
                },
                arrows: {
                    //  Unslider default behaviour
                    prev: '<a class="unslider-arrow prev"><i class="material-icons">navigate_before</i></a>',
                    next: '<a class="unslider-arrow next"><i class="material-icons">navigate_next</i></a>',

                    //  Example: generate buttons to start/stop the slider autoplaying
                    stop: '<a class="unslider-pause"><i class="material-icons">stop</i></a>',
                    start: '<a class="unslider-play"><i class="material-icons">play_circle_outline</i></a>'
                }
            }
            );
    });
</script>


