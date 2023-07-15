
<?php //jquery ?>
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

  </body>
</html>
