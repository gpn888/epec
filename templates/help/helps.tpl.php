<?php ?>
 
<div class="arkyweb">
<?php if ($tabs): ?>
<div class="tabs-drupal">
 	<div class="container">
 		<div class="row">
    	<?php print render($tabs); ?>
    	</div>
  	</div>
</div>
<?php endif; ?> 
<?php if ($action_links): ?>
	<div class="container">
 		<div class="row">
  			<ul class="action-links">
    		<?php print render($action_links); ?>
  			</ul>
  		</div>
  	</div>
<?php endif; ?> 
<?php if ($messages): ?>
<div class="info-drupal">
  <div class="container">
 		<div class="row">
    	<?php print $messages; ?>
    	</div>
  </div>
</div>
<?php endif; ?>
</div> 