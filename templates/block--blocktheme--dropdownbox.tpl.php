<?php ?>

<div id="block--<?php print $block->module . '-' . $block->delta; ?>" class="dropdown-box <?php print $classes; ?>" <?php print $attributes; ?>>
	<s data-toggle="dropdown"><i></i></s>
	<div class="block-outside relativo">
		<?php print render($title_prefix); ?>
		<?php if ($block->subject): ?>
			<h3 class="block-title"><span><?php print $block->subject ?></span></h3>
		<?php endif;?>
		<?php print render($title_suffix); ?>
		<div class="block-inside"<?php print $content_attributes; ?>>
			<?php print $content ?>
		</div>
	</div>
</div>