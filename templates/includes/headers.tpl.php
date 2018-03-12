<?php ?>

<header id="header" class="header">
  <?php if (!empty($page['preheader'])): ?>
  <div class="preheader gris">
    <div class="preheader-inset centrado">
      <?php print render($page['preheader']); ?>
    </div>
  </div>
  <?php endif; ?>
  <div class="mainheader white">
    <div class="mainheader-inset centrado">
      <div class="logo-outset ambar">
        <div class="toggle">
          <i></i>
          <span><?php print t('Menu'); ?></span>
        </div>
        <h2 id="logo" class="logo">       
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" itemscope> 
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> 
          </a>
        </h2>
        <?php print render($page['postheader']); ?>
      </div>
      <?php print render($page['header']); ?>
    </div>
  </div>
</header>