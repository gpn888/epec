<?php
?>

<!DOCTYPE html>

<!--[if lte IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]>     <html class="ie8"> <![endif]-->
<!--[if IE 9]>     <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> 
<html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>> 
<!--<![endif]-->

<head profile="<?php print $grddl_profile; ?>">

  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  

  <?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/styles/styles-all.tpl.php'; ?> 

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?> itemtype="http://schema.org/Organization" itemscope>

  <?php print $page_top; ?>
  <?php print $page; ?>
 
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  <?php print $page_bottom; ?>

</body>
</html>