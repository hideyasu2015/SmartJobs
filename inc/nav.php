    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="<?php echo $siteurl; ?>"><i class="kawano_icon mr-2"><img
              src="/assets/img/ico/icon-36.png" alt=""></i>Smart Jobs</a>

        <!-- Brand and toggle get grouped for better mobile display -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-ex1-collapse"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php
        //get root url
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        ?>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="<?php echo get_site_url(array(), 'top'); ?>"><i
                  class="fa fa-home"></i> <?php echo _text('MENU_HOME'); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>test.php"><i class="fas fa-search"></i>
                Test </a></li>
            <li class="nav-item"><a class="nav-link" href="#<?php echo _text('JOB_RESULTS'); ?>"><i
                  class="fa fa-briefcase"></i>
                最近のお仕事一覧</a></li>

            <!-- <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo _text('MENU_BROWSE'); ?>
                <span class="caret"></span></a>

              <div class="dropdown-menu" aria-labelledby="browse">

                <a class="dropdown-item" href="<?#php echo get_site_url(array(), 'browse'); ?>"><i
                    class="fa fa-th-large"></i> <?#php echo _text('MENU_BROWSE'); ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?#php echo get_site_url(array(), 'categories'); ?>"><i
                    class="fa fa-th-large"></i> <?#php echo _text('MENU_CATEGORIES'); ?></a> <a class="dropdown-item"
                  href="<?#php echo get_site_url(array(), 'locations'); ?>"><i class="fas fa-map-marker-alt"></i>
                  <?//php echo _text('MENU_LOCATIONS'); ?></a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#about" data-toggle="modal" data-target="#about"><i -->
            <!-- class="fa fa-info-sign"></i> <?#php echo _text('MENU_ABOUT_US'); ?></a></li> -->

          </ul>



          <!-- <ul class="nav navbar-nav ml-auto">
            <?//php if (isset($jobalert) && $jobalert == 'on') : ?>
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#job_alert"><i
                  class="fas fa-bell"></i> Job Alert</a></li>
            <?//php endif; ?>

            <?//php if (isset($themeswitcher) && $themeswitcher == 'on') : ?>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                  class="fas fa-paint-brush"></i><span
                  id="current_theme"><?//php echo isset($theme) && isset($_themes[$theme]) ? $_themes[$theme] : 'Default'; ?></span>
                <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="themes">
                <?//php foreach ($_themes as $t => $label) : ?>
                <a class="dropdown-item" data-toggle="theme" href="<?//php echo "#$t"; ?>"><?php echo $label; ?></a>
                <?//php endforeach; ?>
              </div>
            </li>
            <?//php endif; ?>

            <?//php if (((isset($language_switcher) && $language_switcher == 'on') || !isset($language_switcher)) && $languages = get_languages()) : ?>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                title="<?php echo _text('MENU_LANGUAGE'); ?> "> <i class="fas fa-globe"></i> <span
                  class="caret"></span></a>
              <div class="dropdown-menu language-dropdown scrollable-menu" aria-labelledby="lang">
                <?#php
                  foreach ($languages as $lang) :
                    @list($tmp, $_country) = explode('-', $lang);
                    $return = base64_encode(get_current_url());
                    $lang_url = trailingslashit($siteurl) . $_country . '/';
                  ?>
                <a class="dropdown-item" href="<?php echo $lang_url; ?>"><?php echo _text($lang); ?></a>
                <?//php endforeach; ?>


              </div>
            </li>
            <?//php endif; ?>

            <?#php if (isset($downloadlink) && $downloadlink == 'on') : ?>
            <a class="btn btn-outline-secondary" href="https://www.mediageni.com/software/instant-jobs-search-engine"
              data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Download Job Software"><i
                class="fas fa-download"></i></a>
            <?#php endif; ?>
          </ul> -->



        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>