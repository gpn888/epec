<?php ?>

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/headers.tpl.php'; ?> 

<?php if (!empty($page['banner'])): ?>
<section id="banner" class="banner">
  <?php print render($page['banner']); ?>
</section>
<?php endif; ?>

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
        <?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/help/crumbs--common.tpl.php'; ?>
        <h1 id="title" class="page-title"><?php print $title; ?></h1>
        <?php print render($page['content']); ?>
      </section>
      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" class="sidebar-second <?php print $ss_class; ?>">
        <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/prefooters.tpl.php'; ?> 
<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/footers.tpl.php'; ?> 
<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/mobile.tpl.php'; ?> 