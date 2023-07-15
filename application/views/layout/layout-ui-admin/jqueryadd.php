
<?php //jqueryadd ?>
    <?php //All
      //EX
      // echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . '--/--.js');
      // echo $this->layout_ui_ff->plugins_js('ui_templates' . '/' . 'admin_Ui' . '/' . '--/--.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/jquery/dist/jquery.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/popper.js/dist/umd/popper.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/bootstrap/dist/js/bootstrap.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'dist/js/app.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'dist/js/app.init.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'dist/js/app-style-switcher.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'extra-libs/sparkline/sparkline.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'dist/js/waves.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'dist/js/sidebarmenu.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'dist/js/custom.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'dist/js/custom.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/chartist/dist/chartist.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'extra-libs/c3/d3.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'extra-libs/jvector/jquery-jvectormap-2.0.2.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'extra-libs/jvector/jquery-jvectormap-world-mill-en.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'extra-libs/c3/c3.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/chart.js/dist/chart.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/raphael/raphael.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/morris.js/morris.min.js');
      echo $this->layout_ui_ff->js('ui_templates' . '/' . 'admin_Ui' . '/' . 'dist/js/pages/dashboards/dashboard1.js');
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
