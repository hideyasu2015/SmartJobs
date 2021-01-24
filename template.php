<?php
$pagemode = true;
include("config.php");
include("core.php");
if($default_country == 'on')
{
	include("inc/country.php");
}
?>
<!DOCTYPE html>
<html lang="<?php echo $language_code; ?>">
    <head>
    <base href="<?php echo $siteurl; ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
	<meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $sitedescription; ?> - <?php echo $document_title; ?> - <?php echo _text( get_locale() ); ?>"  />
    <title>Page title - <?php echo $sitename; ?> - <?php echo _text( get_locale() ); ?></title>
    <?php if ( isset($theme) ): ?>
    <link id="theme_switcher" href="<?php echo $siteurl; ?>/assets/themes/<?php echo $theme; ?>/bootstrap.min.css" rel="stylesheet">
    <?php else: ?>
    <link id="theme_switcher" href="<?php echo $siteurl; ?>/assets/themes/default/bootstrap.min.css" rel="stylesheet">
    <?php endif; ?>
    <link href="<?php echo $siteurl; ?>/assets/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="<?php echo $siteurl; ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $siteurl; ?>/assets/js/spin.min.js"></script>
    <script type="text/javascript" src="<?php echo $siteurl; ?>/assets/js/iosOverlay.js"></script>
    <script type="text/javascript" src="https://gdc.indeed.com/ads/apiresults.js"></script>
    <!-- Favorite and ios icons -->
    <link rel="shortcut icon" href="<?php echo $siteurl; ?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $siteurl; ?>/assets/ico/icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $siteurl; ?>/assets/ico/icon-72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $siteurl; ?>/assets/ico/icon2x.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $siteurl; ?>/assets/ico/icon-722x.png" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $statistics_code; ?>', 'auto');
  ga('send', 'pageview');

</script>
<?php if (isset($downloadlink) && $downloadlink=='on') {
echo $cookiescode;
}
?>
</head>
<body data-spy="scroll" data-target=".navbar" class="pages">

<?php include("inc/nav.php");?>
    
    <!-- CONTAINER -->
	<div class="container">
	

    <!--  PAGE CONTENT -->


      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Page template</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>


      </div> <!-- /container -->
   <!-- / PAGE CONTENT -->


<?php include("inc/footer.php");?>


    </div>
    <!-- / CONTAINER -->


<?php include("inc/modals.php");?>

    
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo $siteurl; ?>/assets/js/popper.min.js"></script>
<script src="<?php echo $siteurl; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $siteurl; ?>/assets/js/jquery.localScroll.min.js" type="text/javascript" ></script>
<script src="<?php echo $siteurl; ?>/assets/js/jquery.scrollTo.min.js" type="text/javascript" ></script>
<script src="<?php echo $siteurl; ?>/assets/js/app.js" type="text/javascript" ></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $addthis;?>"></script>
<a href="#0" class="cd-top btn btn-primary"><span><i class="fa fa-arrow-up"></i></span></a>
</body>
</html>