<a href="#main" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a>
<?php if ($main_menu): ?>
<a href="#main-nav" class="element-invisible element-focusable" data-target=".nav-collapse" data-toggle="collapse"><?php print t('Skip to navigation'); ?></a>
<?php endif; ?>
<!-- /#skipnav -->
<?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>
<div id="admin-shortcuts" class="admin-shortcuts clearfix"> <?php print render($secondary_nav); ?> <?php print render($page['admin_shortcuts']); ?> </div>
<?php endif; ?>
<!-- /#admin-shortcuts -->
<?php if ($logo || $site_name || $site_slogan || ($page['header']) || ($page['search_box']) || ($page['site_login'])): ?>
<div id="header" class="clearfix header" role="banner">
  <div class="container">
    <div class="row">
      <div class="header-section <?php if (($page['search_box']) || ($page['site_login'])): print 'col-xs-8'; else: print 'col-xs-12'; endif; ?>">
        <?php if ($logo): ?>
        <div id="logo" class="site-logo"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" role="presentation" /> </a></div>
        <?php endif; ?>
        <!-- /#logo -->
        <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
          <div id="site-name" class="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
          <div id="site-slogan" class="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if (!($site_name || $site_slogan)): ?>
        <div id="site" class="hide">
          <div id="name"><a href="<?php print $front_page; ?>"><?php print $my_site_title; ?></a></div>
        </div>
        <?php endif; ?>
        <!-- /#name-and-slogan -->
        <?php if ($page['header']): ?>
        <div id="header-content" class="row-fluid header-content"><?php print render($page['header']); ?></div>
        <?php endif; ?>
        <!-- /#header-content -->
      </div>
      <?php if ($page['site_login']): ?>
      <div class="site-login" class="span4">
        <?php print render($page['site_login']); ?>
      </div>
      <?php endif; ?>
      <!-- /#site-login -->
    </div>
  </div>
</div>
<!-- /#header -->
<?php endif; ?>
<?php if (($main_menu) || ($page['search_box'])): ?>
<nav role="navigation"  class=" navbar-custom <?php print $navbar_classes;?>">

  <div class ="nav-crest-img pull-left"> <img src="<?php print $base_path . $directory .'/images/crest_left.png'; ?>" alt="George Stevens Crest" /></div>
  <div class ="nav-crest-img pull-right"> <img src="<?php print $base_path . $directory .'/images/crest_right.png'; ?>" alt="George Stevens Crest" /></div>
    <div class="navbar-header">    
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav)): ?>
      <div class="navbar-collapse collapse">
        
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
       
      </div>
    <?php endif; ?>
  
</nav>
<?php endif; ?>
<div class="main-container container">

  <header role="banner" id="page-header">
    
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-xs-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <?php print render($page['highlighted']); ?>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
     
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-xs-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<footer class="footer-container container">
  <?php print render($page['footer']); ?>
</footer>