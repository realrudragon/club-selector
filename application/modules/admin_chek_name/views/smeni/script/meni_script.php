<?php /*
<!-- slider-area-end -->
<div class="container-fluid">
  <?php //Start Page Content ?>

  <br>
  <?php if (ENVIRONMENT === 'development'): ?>
    <div class="row mb-5">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="form-group col-lg-12 col-md-12 col-ms-12 col-12">
              <?php //End Row ?>
                <?php echo '<pre style="box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0);">', print_r($this->session->userdata('member')); ?>
                <hr>
                <?php echo '<br/>', 'IP: ', $this->input->ip_address(); ?>
                <hr>
              <?php //Row ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php else: ?>
    <?php // ON Line ?>
  <?php endif; ?>
  <?php //End PAge Content ?>
</div>
*/ ?>
