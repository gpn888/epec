<?php ?>

<div id="block--<?php print $block->module . '-' . $block->delta; ?>" class="dropdown-box <?php print $classes; ?>" <?php print $attributes; ?>>
	<?php print render($title_prefix); ?>
		<?php if ($block->subject): ?>
			<div class="drop-title" data-toggle="dropdown">
				<h3 class="block-title"><span><?php print $block->subject ?></span></h3>
			</div>
		<?php endif;?>
	<?php print render($title_suffix); ?>
	<div class="block-outside relativo">
		<div class="block-inside"<?php print $content_attributes; ?>>
			<?php print $content ?>
		</div>
	</div>
</div>