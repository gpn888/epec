<?php ?>

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/headers.tpl.php'; ?> 

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/help/helps.tpl.php'; ?> 

<main id="main" class="main">
  <div class="centrado relleno">
    <div class="alineado">
      <section id="main-content" class="main-content <?php print $pg_class; ?>">
        <h1 id="title" class="title"><?php print $title; ?></h1>
        <?php print render($page['content']); ?>
      </section>
    </div>
  </div>
</main>