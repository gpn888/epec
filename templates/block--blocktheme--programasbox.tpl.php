<?php ?>

<div id="block--<?php print $block->module . '-' . $block->delta; ?>" class="dropdown-box menu-programas <?php print $classes; ?>" <?php print $attributes; ?>>
	<?php print render($title_prefix); ?>
		<?php if ($block->subject): ?>
			<div class="drop-title" data-toggle="dropdown">
				<span></span> <i class="fa fa-bars"></i>
			</div>
		<?php endif;?>
	<?php print render($title_suffix); ?> 
	<div class="block-outside relativo">
		<div class="block-inside"<?php print $content_attributes; ?>>
			<?php print $content ?>
		</div>
	</div>
</div>