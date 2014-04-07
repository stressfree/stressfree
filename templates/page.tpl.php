<div class="body-wrapper">

<div class="body-container">

<div class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <div class="header">

    <?php if ($site_name || $site_slogan): ?>
    <div class="site-name-slogan">
      <div class="site-name">
        <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
        <?php endif; ?>
        <h2>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <?php print $site_name; ?>
          </a>
        </h2>
      </div>
      
      <div class="site-slogan">
        <?php print $site_slogan; ?>
      </div>
    </div>
    <?php endif; ?>
    
    <?php if ($main_menu): ?>
    <div class="main-menu">
      <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          )
        )); ?>
    </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
    <div class="secondary-menu">
      <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          )
        )); ?>
    </div>
    <?php endif; ?>

    <?php if ($page['header']): ?>
    <div class="header-region">
      <?php print render($page['header']); ?>
    </div>
    <?php endif; ?>
    
  </div>

  <div class="main">

    <div class="content">
      <div class="content-inner">

        <?php if ($title|| $tabs || $action_links): ?>
          <div class="content-header">

		   <?php if ($page['highlight']): ?><div class="highlight"><?php print render($page['highlight']); ?></div><?php endif; ?>

            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
               <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php if ($tabs): ?>
               <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
               <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>

          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div class="main-content">
          <?php print render($page['content']) ?>
        </div>

		<div class="clear"><!-- --></div>
		
      </div>
    </div>
  </div>

  <?php if ($page['footer_top'] || $page['footer_bottom']): ?>
  <div class="footer">
    <?php if ($page['footer_top']): ?>
      <?php print render($page['footer_top']); ?>
    <?php endif; ?>
    <?php if ($page['footer_bottom']): ?>
      <?php print render($page['footer_bottom']); ?>
    <?php endif; ?>
  </div>
  <?php endif; ?>

</div>

</div>

</div>