<?php
$tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);

switch ($tbr_host) {
    case "policies-tbr-edu":
        $site_ga = "UA-38033554-6";
        break;
    case "executivesearch-tbr-edu":
        $site_ga = "UA-38033554-7";
        break;
}
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $site_ga; ?>', 'tbr.edu');
  ga('send', 'pageview');

</script>
<!-- /analytics-script --> 
