<?php ?>

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/headers-front.tpl.php'; ?> 

<?php if (!empty($page['banner'])): ?>
<section id="banner" class="banner">
  <?php print render($page['banner']); ?>
</section>
<?php endif; ?>

<main id="main" class="main white">
	<div class="centrado relleno">
  		<div class="alineado">
    	<?php print render($page['content']); ?>
  		</div>
  	</div>
</main>

<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/prefooters.tpl.php'; ?> 
<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/footers.tpl.php'; ?> 
<?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/includes/mobile.tpl.php'; ?> 