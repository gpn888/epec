<?php ?>

<!DOCTYPE html>

<!--[if lte IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]>     <html class="ie8"> <![endif]-->
<!--[if IE 9]>     <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> 
<html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> 
<!--<![endif]-->

<head>

  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  

  <?php include_once drupal_get_path('theme', 'arkyepec') . '/templates/styles/styles-all.tpl.php'; ?> 

</head>

<body class="<?php print $classes; ?> sistema mantenimiento" <?php print $attributes;?> itemtype="http://schema.org/Organization" itemscope>

<main id="main" class="main white">
  <div class="centrado relleno">
    <div class="alineado"> 
      <section id="main-content" class="main-content">
        <?php if (!empty($logo)): ?>
          <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?> 
        <h1 id="title" class="page-title"><?php print $title; ?></h1>
        <?php if (!empty($messages)): print $messages; endif; ?>
        <p><?php print $content; ?></p>
        <small>
          Puedes comunicarte a los teléfonos en cada sede:<br>
          <strong>&bull;Los Olivos:</strong> +51 (01)6143311<br>
          <strong>&bull;Breña:</strong> +51 (01)6044700</strong><br>
          <strong>&bull;San Juan de Lurigancho:</strong> +51 (01)6184660<br>
          <strong>&bull;Comas:</strong> +51 (01)6015700<br>
          <strong>&bull;Trujillo El Molino:</strong> +51 (44)606222<br>
          <strong>&bull;Trujillo San Isidro:</strong> +51 (44)606200<br>
          <strong>&bull;Cajamarca:</strong> +51 (76)602525
          <br><br>
          <strong>&copy; 2017 - Universidad Privada del Norte</strong>
        </small>
      </section> 
    </div>
  </div>
</main> 
 
<?php print $styles; ?> 

</body>
</html>