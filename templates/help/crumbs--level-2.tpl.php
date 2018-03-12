<?php ?>

<nav id="crumbs" class="crumbs">
	<?php if ($node->type == "mba"): ?> 
	  <a href="./"><i class="fa fa-long-arrow-left"></i> <?php print t("International MBAs"); ?></a>
	<?php elseif ($node->type == "diplomados"): ?> 
	  <a href="./"><i class="fa fa-long-arrow-left"></i> <?php print t("Certification Programs"); ?></a> 
	<?php elseif ($node->type == "paes"): ?> 
	  <a href="./"><i class="fa fa-long-arrow-left"></i> <?php print t("PAE'S"); ?></a>
	<?php elseif ($node->type == "maestrias"): ?> 
	  <a href="./"><i class="fa fa-long-arrow-left"></i> <?php print t("Master Degree Programs"); ?></a>    
	<?php else: ?>   
	<?php endif; ?>
</nav>