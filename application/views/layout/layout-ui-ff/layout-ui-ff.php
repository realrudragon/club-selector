<?php // load header?>
<?php $this->load->view($this->config->item ('app_layout_ui_ff') . 'header'); ?>

<?php // load Menu?>
<?php $this->load->view($this->config->item ('app_layout_ui_ff') . 'menu'); ?>
<?php // load Content One?>
<?php //$this->load->view($this->config->item ('app_layout_ui_ff') . 'content-one'); ?>
<script>
    function burl() {
        return '<?php echo BURL; ?>';
    }
</script>
<?php //View?>
<?php //echo "hoar"; ?>

<?php //View?>
<?php if(isset($view)){ $this->load->view($view); } ?>

<?php //Script ?>
<?php if(isset($script) || $script != '' || $script != null){ $this->load->view($script); } ?>

<?php // load Content Two?>
<?php //$this->load->view($this->config->item ('app_layout_ui_ff') . 'content-two'); ?>

<?php // load Footer?>
<?php $this->load->view($this->config->item ('app_layout_ui_ff') . 'footer'); ?>

</div>

</div>
</div>
</div class="ddd">
<?php // load Jquery Add?>
<?php $this->load->view($this->config->item ('app_layout_ui_ff') . 'jqueryadd'); ?>

<?php // load Jquery?>
<?php $this->load->view($this->config->item ('app_layout_ui_ff') . 'jquery'); ?>
