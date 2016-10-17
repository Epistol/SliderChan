</div>
<footer>

</footer>
</main>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39203770-6', 'auto');
    ga('send', 'pageview');


</script>



<!--
<script>
    /**
     * Request data from the server, add it to the graph and set a timeout
     * to request again
     */
    function requestData($urlj) {
        $.ajax({
            url: '$urlj',
            success: function(point) {
                var series = chart.series[0],
                    shift = series.data.length > 20; // shift if the series is
                                                     // longer than 20

                // add the point
                chart.series[0].addPoint(point, true, shift);

                // call it again after one second
                setTimeout(requestData, 1000);
            },
            cache: false
        });
    }
</script>
-->
<script src="/js/lightbox.js"></script>
<script src="/js/menu.js"></script>



</body>
</html>
