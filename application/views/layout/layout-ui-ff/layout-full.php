<!DOCTYPE html>
<?php //head ?>
<?php echo "head"; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="80x80" href="<?php echo '';?>">
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
    <meta name="baseurl" content="<?php echo base_url(); ?>">
    <meta name="libsUrl" content="<?php echo $this->layout_url->url('assets/libs')?>">
    <?php //Add
      //EX
      echo $this->layout_ui_ff->css('ui_templates' . '/' . 'roofing_ff' . '/' . '--/--.css');
    ?>
    <?php //Add Libs
      //EX
      echo $this->layout_ui_ff->css_info('addlibs/--/--.css');
      //lobibox
      echo $this->layout_ui_ff->css_info('lobibox/css/lobibox.min.css');
      //toastr
      echo $this->layout_ui_ff->css_info('jquerypopupbox/css/toastrsuccessicon.css');
      //growl-notification
      echo $this->layout_ui_ff->css_info('growl-notification/css/dark-theme.min.css');
      echo $this->layout_ui_ff->css_info('growl-notification/css/colored-theme.min.css');
      echo $this->layout_ui_ff->css_info('growl-notification/css/light-theme.min.css');
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
  </head>
  <body>
    <?php //menu ?>
    <?php echo "menu"; ?>

    <?php //content-one ?>
    <?php echo "content-one"; ?>

    <?php echo "1"; ?>
    <?php echo "2"; ?>

    <?php //content-two ?>
    <?php echo "content-two"; ?>

    <?php //footer ?>
    <?php echo "footer"; ?>
    <b>
      <?php echo $this->config->item('app_footer_ui_hoar'); ?>
    </b>

    <?php //jqueryadd ?>
    <?php echo "jqueryadd"; ?>
    <?php //All
      //EX
     // echo $this->layout_ui_ff->js('ui_templates' . '/' . 'club-selector' . '/' . 'js/jquery-3.js');
    ?>
    <?php //All Add Libs
      //EX
      echo $this->layout_ui_ff->js_info('addlibs/--/--.js');
      echo $this->layout_ui_ff->plugins_js_info('addlibs/--/--.js');
      //baseurl
      echo $this->layout_ui_ff->js_info('baseurl/js/burlglobal.js');
      echo $this->layout_ui_ff->js_info('baseurl/js/axios.js');
      // echo $this->layout_ui_ff->js_info('baseurl/js/vue.js');
      // echo $this->layout_ui_ff->js_info('baseurl/js/audio-global.js');
      // echo $this->layout_ui_ff->js_info('baseurl/js/ism-global.js');
      // echo $this->layout_ui_ff->js_info('baseurl/js/ism-language-lang.js');
      //jquery-loading
      echo $this->layout_ui_ff->js_info('jquery-loading/jquery.loading.min.js');
      //lobibox
      echo $this->layout_ui_ff->js_info('lobibox/js/lobibox.js');
      // sweetalert2
      echo $this->layout_ui_ff->js_info('sweetalert2/js/sweetalert2.all.min.js');
      //toastr
      echo $this->layout_ui_ff->js_info('jquerypopupbox/js/toastr-bottomright.js');
      //growl-notification
      echo $this->layout_ui_ff->js_info('growl-notification/js/growl-notification.min.js');
      //main
      echo $this->layout_ui_ff->js_info('baseurl/js/main.js');
    ?>
    <?php if (ENVIRONMENT === 'development'): ?>
      <?php // ?>
    <?php else: ?>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119556728-3"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-119556728-4');
      </script> -->
      <script data-ad-client="ca-pub-4513740475442790" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
      </script>
    <?php endif; ?>

    <?php //jquery ?>
    <?php echo "jquery"; ?>
    <?php
      //Jquery url
      if (isset($js_url)) {
        foreach ($js_url as $link_js) {
          echo $this->layout_ui_ff->js_url($link_js);
        }
      }
      if (isset($plugins_js_url)) {
        foreach ($plugins_js_url as $link_plugins_js) {
          echo $this->layout_ui_ff->plugins_js_url($link_plugins_js);
        }
      }
    ?>
    <?php
      //Jquery info
      if (isset($js_info)) {
        foreach ($js_info as $link_js) {
          echo $this->layout_ui_ff->js_info($link_js);
        }
      }
      if (isset($plugins_js_info)) {
        foreach ($plugins_js_info as $link_plugins_js) {
          echo $this->layout_ui_ff->plugins_js_info($link_plugins_js);
        }
      }
    ?>
    <?php
      //Jquery add
      if (isset($js_add)) {
        foreach ($js_add as $link_js) {
          echo $this->layout_ui_ff->js_add($link_js);
        }
      }
      if (isset($plugins_js_add)) {
        foreach ($plugins_js_add as $link_plugins_js) {
          echo $this->layout_ui_ff->plugins_js_add($link_plugins_js);
        }
      }
    ?>

    <script type="text/javascript">
      (function() {
        if (!localStorage.getItem('cookieconsent')) {
          document.body.innerHTML += '\
          <div class="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#000;color:#FFF;text-align:center;width:100%;z-index:99999;">\
            เว็บไซต์ เรามีการใช้งานคุกกี้เพื่อวัตถุประสงค์ในการจัดการประสบการณ์ของผู้ใช้งานให้ดีที่สุด ได้แก่ คุกกี้ที่มีความจำเป็นอย่างยิ่ง คุกกี้เพื่อการวิเคราะห์ประสิทธิภาพ คุกกี้เพื่อการทำงานของเว็บไซต์ และคุกกี้กำหนดกลุ่มเป้าหมาย ศึกษารายละเอียดและการตั้งค่าคุกกี้เพิ่มเติมเพื่อความเป็นส่วนตัวของท่านได้ใน. \
            ความเป็นส่วนตัว > การตรวจสอบถึงพฤติกรรมการสืบค้นข้อมูล\
            <br/> \
            <a class="btn btn-outline-light p2 weight-700 clickCookieconsent" href="#" style="color:#ffff; margin-top: 20px;"; ?>ยอมรับ คลิก\
          </div>\
          ';
          // document.body.innerHTML += '\
          // <div class="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#000;color:#FFF;text-align:center;width:100%;z-index:99999;">\
          //   This site uses cookies. By continuing to use this website, you agree to their use. \
          //   <a href="#" style="color:#CCCCCC;">I Understand</a>\
          // </div>\
          // ';
          document.querySelector('.cookieconsent a').onclick = function(e) {
            e.preventDefault();
            document.querySelector('.cookieconsent').style.display = 'none';
            localStorage.setItem('cookieconsent', true);
          };
        }
      })();
    </script>
  </body>
</html>
