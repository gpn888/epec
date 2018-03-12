<?php ?>

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/headers.tpl.php'; ?> 

<section id="banner" class="banner ambar">
  <div class="centrado relativo">
    <div class="flotado banner-text"> 
      <?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/help/crumbs--escuela.tpl.php'; ?>
      <div class="ambar">
        <h1 id="title" class="title"><?php print $title; ?></h1>
      </div>
      <?php print render($page['banner']); ?>
    </div>
  </div>
</section>

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/help/helps.tpl.php'; ?>  

<main id="main" class="main white">
  <div class="centrado relleno">
    <div class="alineado">
      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first" class="sidebar-first <?php print $sf_class; ?>">
        <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>
      <section id="main-content" class="main-content <?php print $pg_class; ?>">
        <?php print render($page['content']); ?>
      </section>
      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" class="sidebar-second <?php print $ss_class; ?>">
          <div class="base-webform">
            <?php print render($page['sidebar_second']); ?>
          </div>
        </aside>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/prefooters.tpl.php'; ?> 
<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/footers.tpl.php'; ?> 
<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/mobile.tpl.php'; ?> 