
<?php //jqueryadd ?>
    <?php //All
      //EX
      // echo $this->layout_ui_ff->js('ui_templates' . '/' . 'club-selector' . '/' . '--/--.js');
      // echo $this->layout_ui_ff->plugins_js('ui_templates' . '/' . 'club-selector' . '/' . '--/--.js');
      // echo $this->layout_ui_ff->js('ui_templates' . '/' . 'club-selector' . '/' . 'js/jquery.js');
     echo $this->layout_ui_ff->js('ui_templates' . '/' . 'club-selector' . '/' . 'js/vendors.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'club-selector' . '/' . 'js/app.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'club-selector' . '/' . 'vendors/chartjs/Chart.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'club-selector' . '/' . 'js/main.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'club-selector' . '/' . 'js/pages/dashboard-default.js');
    ?>
    <?php //All Add Libs
      //EX
      // echo $this->layout_ui_ff->js_info('addlibs/--/--.js');
      // echo $this->layout_ui_ff->plugins_js_info('addlibs/--/--.js');
      //baseurl
     echo $this->layout_ui_ff->js_info('sweetalert2/js/sweetalert2.all.min.js');
      //echo $this->layout_ui_ff->js_info('pages/dashboard-default.js');
      //echo $this->layout_ui_ff->js_info('baseurl/js/axios.js');

      //main
      // echo $this->layout_ui_ff->js_info('baseurl/js/main.js');
    ?>
    <?php if (ENVIRONMENT === 'development'): ?>
      <?php // ?>
    <?php else: ?>

    <?php endif; ?>
