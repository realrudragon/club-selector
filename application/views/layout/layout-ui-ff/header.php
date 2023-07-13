<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="80x80" href="<?php echo B_ICON;?>">
    <title><?php echo " " . $title; ?> - <?php echo $this->config->item('app_title_ui_ff'); ?></title>
    <?php // Tell the browser to be responsive to screen width ?>
    <meta name="robots" content="<?php echo $this->config->item('app_robots_ui_hoar'); ?>"/>
    <meta name="googlebot" content="<?php echo $this->config->item('app_googlebot_ui_hoar'); ?>"/>
    <meta name="google-site-verification" content="<?php echo $this->config->item('app_google-site-verification_ui_hoar'); ?>"/>
    <meta name="author" content='<?php echo $this->config->item('app_author_ui_hoar'); ?>' />
    <meta name="keywords" content="<?php echo "" . $keywords; ?>, <?php echo $this->config->item('app_keywords_ui_hoar'); ?>" />
    <meta name="description" content="<?php echo "" . $description; ?> <?php echo $this->config->item('app_description_ui_hoar'); ?>" />
    <meta name="revisit-after" content="<?php echo $this->config->item('app_revisit-after_ui_hoar'); ?>" />
    <meta http-equiv="content-language" content="<?php echo $this->config->item('app_content-language_ui_hoar'); ?>" />
    <meta name="distribution" content="<?php echo $this->config->item('app_distribution_ui_hoar'); ?>" />
    <meta http-equiv="content-type" content="<?php echo $this->config->item('app_content-type_ui_hoar'); ?>" />
    <?php // canonical seo ?>
    <link rel='canonical' href='<?php echo $control_url; ?>' />
    <?php //Facebook ?>
    <meta property="og:url" content="<?php echo $control_url; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">
    <?php // URL base_url ?>
    <input type="hidden" name="token" value="dwqeqdsdadasxzcsfdaewrhr3249qwufj1uhldsjzxkdjaslbndajh3g418ywhljwiuiuhdfsak">
    <meta name="flurl" content="<?php echo FURL; ?>">
    <meta name="baseurl" content="<?php echo base_url(); ?>">
    <meta name="libsUrl" content="<?php echo $this->layout_url->url('assets/libs')?>">
    <?php //Add
      //EX
      // echo $this->layout_ui_ff->css('ui_templates' . '/' . 'roofing_ff' . '/' . '--/--.css');
      echo $this->layout_ui_ff->css('ui_templates' . '/' . 'club-selector' . '/' . 'css/app.min.css');
      echo $this->layout_ui_ff->css('ui_templates' . '/' . 'club-selector' . '/' . 'css/add.css');
      echo $this->layout_ui_ff->css('ui_templates' . '/' . 'club-selector' . '/' . 'css/input.css');
    ?>
    <?php //Add Libs
      //EX
      // echo $this->layout_ui_ff->css_info('addlibs/--/--.css');
      //lobibox
     // echo $this->layout_ui_ff->css_info('lobibox/css/lobibox.min.css');

    ?>
    <?php
      //CSS Url
      if (isset($css_url)) {
        foreach ($css_url as $link_css) {
          echo $this->layout_ui_ff->css_url($link_css);
        }
      }
    ?>
    <?php
      //CSS Info
      if (isset($css_info)) {
        foreach ($css_info as $link_css) {
          echo $this->layout_ui_ff->css_info($link_css);
        }
      }
    ?>
    <?php
      //CSS Add
      if (isset($css_add)) {
        foreach ($css_add as $link_css) {
          echo $this->layout_ui_ff->css_add($link_css);
        }
      }
    ?>

    <?php if (ENVIRONMENT === 'development'): ?>
      <?php // ?>
    <?php else: ?>
      <!-- ahrefs -->
      <meta name="ahrefs-site-verification" content="15095cb0c8a77f1618ab76f05bbf6207856d9cf9b6c195861e23b788ea872092">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-228724591-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-228724591-1');
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB09FPYLF4"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-QB09FPYLF4');
      </script>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PSHK3HR');</script>
      <!-- End Google Tag Manager -->
    <?php endif; ?>

  </head>
