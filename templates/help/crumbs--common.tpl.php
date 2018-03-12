<?php ?>

<nav id="crumbs" class="crumbs">

	<?php if (isset($node) && $node->type == "news"): ?>
		<a href="./"><i class="fa fa-long-arrow-left"></i> <?php print t("News"); ?></a>
	<?php endif; ?>
	<?php if (isset($node) && $node->type == "eventos"): ?>
		<a href="./"><i class="fa fa-long-arrow-left"></i> <?php print t("Events"); ?></a>
	<?php endif; ?>
	<?php if (isset($node) && $node->type == "galerias"): ?>
		<a href="./"><i class="fa fa-long-arrow-left"></i> <?php print t("Galleries"); ?></a>
	<?php endif; ?>
	<?php if (isset($node) && $node->type == "blogs"): ?>
		<a href="./"><i class="fa fa-long-arrow-left"></i> <?php print t("Blogs"); ?></a>
	<?php endif; ?>

</nav>