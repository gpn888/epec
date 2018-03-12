<?php ?>

<div id="block--<?php print $block->module . '-' . $block->delta; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
	<div class="block-outside">
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