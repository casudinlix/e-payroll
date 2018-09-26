<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <form action="" class="horizontal-form" method="POST">
          <div class="form-body">
            <h3 class="form-section">Edit insentif</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Insentif Code</label>
  <input type="text" name="code" class="form-control" value="<?php echo $insentif->code ?>" autocomplete="off" required=''>


                </div>
                <div class="form-group">
                  <label class="control-label">Insentif Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $insentif->insentif_name ?>" autocomplete="off" required=''>
        <input type="hidden" name="id" value="<?php echo $insentif->id?>">

                </div>
                <div class="form-group">
                  <label class="control-label">Amount</label>
        <input type="text" name="amount" class="form-control" value="<?php echo $insentif->amount ?>" autocomplete="off" required='' onkeypress="return angka(event)">

                </div>
              </div>
              <!--/span-->

              <!--/span-->
            </div>
            <!--/row-->

            <!--/row-->

          </div>
          <div class="form-actions right">
            <a href="<?php echo site_url('masters/management') ?>"><button type="button" class="btn default">Cancel</button></a>
            <button type="submit" class="btn blue" name="insentif"><i class="fa fa-check"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
