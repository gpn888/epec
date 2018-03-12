<?php ?>

<?php if (!empty($page['footer'])): ?>
<footer id="footer" class="footer">
	<div class="centrado relleno">
		<div class="alineado">
		<?php print render($page['footer']); ?>
		</div>
	</div>
</footer>
<?php endif; ?>