<?php
$pagemode = false;
include("config.php");
include("core.php");
if ($default_country == 'on') {
  include("inc/country.php");
}
?>
<!DOCTYPE html>
<html lang="<?php echo $language_code; ?>">

<head>
  <base href="<?php echo $siteurl; ?>" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="<?php echo $sitedescription; ?> - <?php echo $document_title; ?> - <?php echo _text(get_locale()); ?>" />
  <title>Smart Jobs</title>
  <?php if (isset($theme)) : ?>
  <link id="theme_switcher" href="<?php echo $siteurl; ?>/assets/themes/<?php echo $theme; ?>/bootstrap.min.css"
    rel="stylesheet">
  <?php else : ?>
  <link id="theme_switcher" href="<?php echo $siteurl; ?>/assets/themes/default/bootstrap.min.css" rel="stylesheet">
  <?php endif; ?>
  <link href="<?php echo $siteurl; ?>/assets/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="<?php echo $siteurl; ?>/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $siteurl; ?>/assets/js/spin.min.js"></script>
  <script type="text/javascript" src="<?php echo $siteurl; ?>/assets/js/iosOverlay.js"></script>
  <script type="text/javascript" src="https://gdc.indeed.com/ads/apiresults.js"></script>
  <!-- Favorite and ios icons -->
  <link rel="shortcut icon" href="<?php echo $siteurl; ?>/assets/img/ico/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $siteurl; ?>/assets/img/ico/icon-36.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $siteurl; ?>/assets/img/ico/icon-36.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $siteurl; ?>/assets/img/ico/icon-36.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $siteurl; ?>/assets/img/ico/icon-36.png" />
  <script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', '<?php echo $statistics_code; ?>', 'auto');
  ga('send', 'pageview');
  </script>
  <?php if (isset($downloadlink) && $downloadlink == 'on') {
    echo $cookiescode;
  }
  ?>
</head>

<body data-spy="scroll" data-target=".navbar" <?php if ($home) : ?>class="home" <?php endif; ?>>

  <?php include("inc/nav.php"); ?>

  <?php if ($home) : ?>
  <!-- HEADER -->
  <header id="top">
    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item  active">
          <img src="<?php echo $siteurl; ?>/assets/img/slider1.jpg" alt="<?php echo $sitename; ?>"
            class="img-responsive">

          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $sitename; ?></h1>
              <p><?php echo $siteslogan; ?></p>
              <p><a class="btn btn-large btn-primary" data-target="#myCarousel"
                  data-slide-to="1"><?php echo _text('BTN_LEARN_MORE'); ?></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="<?php echo $siteurl; ?>/assets/img/slider2.jpg" alt="<?php echo $slide1_title; ?>"
            class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $slide1_title; ?></h1>
              <p><?php echo $slide1_description; ?></p>
              <p><a class="btn btn-large btn-primary" data-target="#myCarousel"
                  data-slide-to="2"><?php echo _text('BTN_JOB_AGGREGATOR'); ?></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="<?php echo $siteurl; ?>/assets/img/slider5.jpg" alt="<?php echo $slide2_title; ?>"
            class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $slide2_title; ?></h1>
              <p><?php echo $slide2_description; ?></p>
              <p><a class="btn btn-large btn-primary" data-target="#myCarousel"
                  data-slide-to="3"><?php echo _text('BTN_JOB_AGGREGATOR'); ?></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="<?php echo $siteurl; ?>/assets/img/slider4.jpg" alt="<?php echo $slide3_title; ?>"
            class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $slide3_title; ?></h1>
              <p><?php echo $slide3_description; ?></p>
              <p><a class="btn btn-large btn-primary newsearch"
                  href="<?php echo get_site_url(array(), 'search'); ?>"><?php echo _text('BTN_FIND_YOUR_JOB'); ?></a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
  </header>
  <!-- / HEADER -->
  <?php endif; ?>




  <!-- SEARCHBOX -->
  <section id="search">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2><i class="fa fa-search"></i> <?php echo _text('HEADING_SEARCH_JOBS'); ?></h2>
        <p class="lead"> <?php echo _text('LEADING_FIND_JOBS_BY_KEYWORD_OR_LOCATION'); ?> </p>
        <!-- search form -->
        <div class="col-sm-12 col-lg-12">

          <form role="form" action="">
            <div class="form-row">

              <div class="form-group col-md-4">
                <input type="text" class="form-control input-lg" name="keyword" value="<?php if (isset($q) && !empty($q)) {
                                                                                          $show_categories = false;
                                                                                          echo $q;
                                                                                        } ?>" id="q"
                  placeholder="<?php echo _text('PLACEHOLDER_SEARCH'); ?>">
              </div>

              <div class="form-group col-md-4">
                <input type="text" class="form-control input-lg" name="job_location" value="<?php if (isset($query_vars['loc']) && !empty($query_vars['loc'])) {
                                                                                              $show_locations = false;
                                                                                              echo $query_vars['loc'];
                                                                                            } ?>" id="loc"
                  placeholder="<?php echo _text('PLACEHOLDER_LOCATION'); ?>">
              </div>

              <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-search"></i>
                  <?php echo _text('SEARCH'); ?></button>
              </div>


            </div>
          </form>
          <!-- /search form -->

        </div>
        <hr>

      </div>
    </div>
  </section>
  <!-- / SEARCHBOX -->



  <!-- ADS -->
  <!-- <div class="col-lg-12 text-center">
    <?#php echo $adsenseads; ?>
  </div> -->
  <!-- / ADS-->


  <!--  SEARCHRESULTS -->
  <section id="<?php echo _text('JOB_RESULTS'); ?>" class="results">
    <div class="container">
      <div class="row">
        <div class="page-header text-center col-sm-12 col-lg-12">

          <h2><i class="fa fa-briefcase"></i> <?php
                                              if (!empty($q) && empty($query_vars['loc'])) {
                                                echo _text('SEARCHRESULT_JOBS_FOR_TODAY_JOB', $q);
                                              } else if (empty($q) && !empty($query_vars['loc'])) {
                                                echo _text('SEARCHRESULT_JOBS_FOR_TODAY_LOC', ucfirst($query_vars['loc']));
                                              } else if (!empty($q) && !empty($query_vars['loc'])) {
                                                echo sprintf(_text('SEARCHRESULT_JOBS_FOR_TODAY_ALL'), ucfirst($q), ucfirst($query_vars['loc']));
                                              } else if (empty($q) && empty($query_vars['loc'])) {
                                                echo _text('JOBS');
                                              }
                                              ?> </h2>

          <p class="lead"><?php
                          $rp = !isset($q) || empty($q) ? ' ' : $q;
                          echo _text('SEARCHRESULT_DESCRIPTION', $rp); ?></p>
        </div>
      </div>




      <?php
      if (isset($feedlist) && is_array($feedlist)) {
        $c = 0;
      ?>


      <div class="row">
        <!-- SEARCH ITEMS-->
        <?php
          $t = isset($_REQUEST['t']) ? (int)$_REQUEST['t'] : 0;

          ?>
        <div class="tabbable col-md-8" id="myTabs">
          <ul class="nav nav-tabs">
            <?php foreach ($feedlist as $section) : ?>
            <li class="nav-item">
              <a class="nav-link <?php echo $c == $t ? 'active' : ''; ?>" data-idx="<?php echo $c; ?>"
                href="#tab<?php echo $c++; ?>" data-toggle="tab"
                title="<?php echo $section['title']; ?>"><?php echo $section['title']; ?></a>
            </li>
            <?php endforeach;
              $c = 0; ?>
          </ul>
          <div class="tab-content">
            <?php foreach ($feedlist as $section) : ?>
            <div role="tabpanel" class="tab-pane <?php echo $c == $t ? 'show active' : ''; ?>"
              id="tab<?php echo $c++; ?>"></div>
            <?php endforeach;
              $c = 0; ?>
          </div>
        </div>

        <!-- SIDEBAR Dialogflowです kawanoさん -->
        <style>
        df-messenger {
          --df-messenger-bot-message: #878fac;
          --df-messenger-button-titlebar-color: #42a5f5;
          --df-messenger-chat-background-color: #fafafa;
          --df-messenger-font-color: white;
          --df-messenger-send-icon: #878fac;
          --df-messenger-user-message: #479b3d;
          --df-messenger-chat-icon: "https://takawano120.xsrv.jp/assets/img/ico/icon-36.png"
        }
        </style>
        <div class="col-md-4 float-right" id="sidebar">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
                <df-messenger intent="WELCOME" chat-title="SmartJobs" agent-id="69f151eb-87b1-4597-9144-2de251db6976"
                  expand="true" language-code="ja"></df-messenger>

              </div>
            </div>
          </div>
        </div>


        <!-- / SIDEBAR -->

        <script type="text/javascript">
        var opts = {
          lines: 13, // The number of lines to draw
          length: 11, // The length of each line
          width: 5, // The line thickness
          radius: 17, // The radius of the inner circle
          corners: 1, // Corner roundness (0..1)
          rotate: 0, // The rotation offset
          color: '#FFF', // #rgb or #rrggbb
          speed: 1, // Rounds per second
          trail: 60, // Afterglow percentage
          shadow: false, // Whether to render a shadow
          hwaccel: false, // Whether to use hardware acceleration
          className: 'spinner', // The CSS class to assign to the spinner
          zIndex: 2e9, // The z-index (defaults to 2000000000) 
          top: 'auto', // Top position relative to parent in px
          left: 'auto' // Left position relative to parent in px
        };
        var target = document.createElement("div");
        document.body.appendChild(target);
        var spinner = new Spinner(opts).spin(target);
        var overlay = iosOverlay({
          text: "<?php echo _text('LOADING'); ?>",
          spinner: spinner
        });

        var numfeed = <?php echo count($feedlist); ?>;
        <?php
            $paginator = new Paginator();
            $count = count($feedlist);


            foreach ($feedlist as $feed) {
              if (!isset($feed['api']) || !$feed['api']) {

            ?>
        $.ajax({
          dataType: "json",
          url: "<?php echo $feed['url'] ?>",
          success: function(result) {
            if (result.length > 0) {
              $.each(result, function(i, entry) {
                var div = document.createElement("div");
                div_innerHTML = '<a class="jobtitle" href="' + entry.link +
                  '" target="_blank" rel="nofollow">' + entry.title + '</a>' + '';
                var timestamp = new Date(entry.date).getDate();
                div_innerHTML +=
                  '<p class="clearfix source"><span class="badge badge-pill badge-success"> <?php echo $feed['title']; ?></span> <i class="far fa-clock"></i> <?php echo _text('PUBLISHED_ON'); ?> <span class="realdate">' +
                  entry.date + '</span></p>';
                div_innerHTML += '<p>' + entry.desc + '</p><hr/>';
                div.innerHTML = div_innerHTML;
                jQuery(div).appendTo('#tab<?php echo $c; ?>');
              });
              if (result.length == 0) {
                <?php
                        $js_q = '';
                        if ($q) {
                          $js_q = "\"$q\"";
                        }
                        ?>
                jQuery('#tab<?php echo $c; ?>').html(
                  '<?php echo sprintf(_text('TEXT_NO_RESULT'), $js_q, $feed['title']) ?>');
              }
            } else {
              jQuery('#tab<?php echo $c; ?>').html(
                '<div><a href=\"<?php echo $feed['url']; ?>\"><?php echo $feed['title']; ?></a></div>');
            }
          }
        });

        if (--numfeed == 0) {
          overlay.hide();
        }
        <?php
              } else {
                $per_page = 25;
                $pagination = array();
                if (!isset($pagination['start_key'])) {
                  $pagination['start_key'] = 'start';
                }
                if (!isset($pagination['limit_key'])) {
                  $pagination['limit_key'] = 'limit';
                }

                if (isset($_REQUEST['page'])) {
                  $pagination['page'] = (int)$_REQUEST['page'];
                  if (!$pagination['page']) {
                    $pagination['page'] = 1;
                  }
                } else if (!isset($pagination['page'])) {
                  $pagination['page'] = 1;
                }

                if (isset($feed['url'])) {
                  // var_dump($pagination, $feed['url'], parse_url($feed['url'])); die;
                  $inf = parse_url($feed['url']);
                  $inf_query = array();
                  if (isset($inf['query'])) {
                    $tmp = explode('&', $inf['query']);
                    for ($i = 0; $i < count($tmp); $i++) {
                      $nvp = explode('=', $tmp[$i]);
                      if (count($nvp)) {
                        $inf_query[$nvp[0]] = !isset($nvp[1]) ? true : $nvp[1];
                      }
                    }
                  }

                  if ($inf['host'] == 'api.indeed.com') {
                    if (!isset($inf_query['start'])) {
                      $inf_query['start'] = ($pagination['page'] - 1) * $per_page;
                    }
                    if (!isset($inf_query['limit'])) {
                      $inf_query['limit'] = $per_page;
                    }
                    if (!isset($inf_query['co'])) {
                      $indeed_co = '';
                      $locale = get_locale();
                      $indeed_co = explode('-', $locale);
                      if (count($indeed_co)) {
                        $indeed_co = array_pop($indeed_co);
                      }
                      $inf_query['co'] = strtolower($indeed_co);;
                    }
                  }

                  // rebuild url
                  $new_query = '';
                  $tmp = array();
                  foreach ($inf_query as $n => $v) {
                    $tmp[] = $n . '=' . urlencode($v);
                  }
                  $new_query = implode('&', $tmp);

                  $scheme   = isset($inf['scheme']) ? $inf['scheme'] . '://' : '';
                  $host     = isset($inf['host']) ? $inf['host'] : '';
                  $port     = isset($inf['port']) ? ':' . $inf['port'] : '';
                  $user     = isset($inf['user']) ? $inf['user'] : '';
                  $pass     = isset($inf['pass']) ? ':' . $inf['pass']  : '';
                  $pass     = ($user || $pass) ? "$pass@" : '';
                  $path     = isset($inf['path']) ? $inf['path'] : '';
                  $query    = isset($new_query) ? '?' . $new_query : '';
                  $fragment = isset($inf['fragment']) ? '#' . $inf['fragment'] : '';

                  $feed['url'] = "$scheme$user$pass$host$port$path$query$fragment";
                }

                //print_r($feed);die;
                if (is_string($feed['api'])) {
                  if (preg_match('#careerjet#', $feed['api'])) {
                    $feed['url'] = array(
                      'page' => $pagination['page'],
                      'pagesize' => $per_page
                    );
                  }
                  $items = call_user_func_array($feed['api'], array($feed['url']));
                } else {
                  $items = get_live_feeds($feed['url']);
                }

                if (count($items)) {

                  foreach ($items as $entry) :
                    $att = isset($entry['onmousedown']) ? ' onmousedown="' . $entry['onmousedown'] . '"' : '';
                ?>
        try {
          var div = document.createElement("div");
          div_innerHTML =
            '<a class="jobtitle" href="<?php echo $entry['url']; ?>" rel="nofollow" target="_blank" <?php echo addslashes($att); ?> ><?php echo addslashes($entry['title']); ?></a>';
          var timestamp = new Date('<?php echo $entry['date']; ?>').getDate();
          div_innerHTML +=
            '<p class="clearfix source"><span class="badge badge-pill badge-success"> <?php echo addslashes($feed['title']); ?></span> <i class="far fa-clock"></i> <?php echo _text('PUBLISHED_ON'); ?> <span class="realdate"><?php echo $entry['date']; ?></span></p>';
          <?php if (isset($entry['company']) && isset($entry['city']) && isset($entry['state'])) : ?>
          div_innerHTML +=
            '<p class="clearfix sourcecompany text-warning"><?php echo addslashes($entry['company']); ?> - <?php echo addslashes($entry['city']); ?>, <?php echo addslashes($entry['state']); ?></p>';
          <?php endif; ?>
          div_innerHTML += "<p><?php echo clean_string($entry['snippet']); ?></p><hr/>";
          div.innerHTML = div_innerHTML;
          jQuery(div).appendTo('#tab<?php echo $c; ?>');

        } catch (e) {
          console.log && console.log(e);
        }
        <?php
                  endforeach;
                }

                ?>
        if (--numfeed == 0) {
          overlay.hide();
        }
        <?php
              }
              $c++;
            }
            ?>
        </script>
        <?php if ($paginator->items_total) : ?>
        <div class="col-md-12 text-center" id="tabs-paginator">
          <?php $paginator->paginate();
              echo $paginator->display_pages(); ?>
        </div>
        <?php endif; ?>
        <div class="col-md-12 text-center">
          <div class="page-header page-header-custom">
            <p><a class="btn btn-lg btn-success newsearch" href="<?php echo get_site_url(array(), 'search'); ?>"><i
                  class="fa fa-search"></i> <?php echo _text('START_NEW_SEARCH'); ?></a> </p>



          </div>
        </div>
        <?php } ?>
      </div>
      <!-- /SEARCH ITEMS-->

    </div>
    <!-- / CONTAINER-->
  </section>
  <!-- / SEARCHRESULTS -->

  <?#php if (isset($jobalert) && $jobalert == 'on') : ?>
  <!-- JOB ALERT -->
  <!-- <section id="jobalert">
    <div class="col-md-12 text-center">

      <div class="card border-secondary">
        <div class="card-header"><i class="fas fa-envelope"></i> Sign Up for Job Alerts
        </div>
        <div class="card-body">
          <p class="card-text">Get the latest jobs to your inbox daily!</p>
          <p class="card-text">
            <script src="https://www.zipalerts.com/subscribe-widget/<?#php echo $zipalert; ?>.js"></script>
          </p>
        </div>
      </div>
    </div>
  </section> -->
  <!-- JOB ALERT -->
  <?#php endif; ?>


  <!-- ADS -->
  <!-- <div class="col-lg-12 text-center">
    <?#php echo $adsenseads; ?>
  </div> -->
  <!-- / ADS-->


  <!-- BROWSE -->
  <section id="browse">
    <div class="row">
      <div class="col-lg-12 text-center">

        <h2><i class="fas fa-book-open"></i> <?php echo _text('BTN_BROWSE_JOBS'); ?></h2>
        <p class="text-center lead"><?php echo _text('TEXT_SEARCH_ON'); ?></p>


        <div class="col-lg-12">
          <ul class="nav nav-pills nav-fill navtop" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#categories"
                data-toggle="tab"><?php echo _text('HEADING_CATEGORIES'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#locations" data-toggle="tab"><?php echo _text('HEADING_LOCATIONS'); ?></a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="categories">

              <!-- CATEGORIES -->
              <div class="row multi-columns-row"><?php print_categories($categories); ?></div>
              <!-- / CATEGORIES -->

            </div>
            <div class="tab-pane" role="tabpanel" id="locations">

              <!-- LOCATIONS -->
              <div class="row multi-columns-row"><?php print_locations($locations); ?></div>
              <!-- / LOCATIONS -->

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- / BROWSE -->


  <?php if (isset($downloadlink) && $downloadlink == 'on') : ?>
  <section id="download">

    <div class="jumbotron">
      <h5 class="display-4">Smart Jobs</h5>
      <p class="lead">Jobs Aggregator software can be used for creating different kind of job portals.</p>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg" href="#" target="_blank" role="button">Learn more</a>
    </div>

  </section>
  <?php endif; ?>


  <?php include("inc/footer.php"); ?>



  </div>
  <!-- CONTAINER -->


  <?php include("inc/modals.php"); ?>


  <!-- Latest compiled and minified JavaScript -->
  <script src="<?php echo $siteurl; ?>/assets/js/popper.min.js"></script>
  <script src="<?php echo $siteurl; ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo $siteurl; ?>/assets/js/jquery.responsivetabs.js"></script>
  <script>
  $(function() {
    $('.nav-tabs').responsiveTabs({
      active: <?php echo $t | 0; ?>
    });
  });
  </script>
  <?php if (isset($smooth_scroll) && $smooth_scroll == 'on') : ?>
  <script src="<?php echo $siteurl; ?>/assets/js/jquery.localScroll.min.js" type="text/javascript"></script>
  <script src="<?php echo $siteurl; ?>/assets/js/jquery.scrollTo.min.js" type="text/javascript"></script>
  <?php endif; ?>
  <?php if (!empty($q) || !empty($query_vars['loc'])) : ?>
  <!--<script type="text/javascript" >if (!window.location.hash) window.location.hash = '#<?php echo _text('JOB_RESULTS'); ?>'; </script>-->
  <?php endif; ?>
  <script src="<?php echo $siteurl; ?>/assets/js/app.js" type="text/javascript"></script>

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $addthis; ?>"></script>
  <a href="#0" class="cd-top btn btn-primary"><span><i class="fa fa-arrow-up"></i></span></a>
</body>

</html>