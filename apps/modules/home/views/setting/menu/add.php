<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <form action="" class="horizontal-form" method="POST">
          <div class="form-body">
            <h3 class="form-section">Add New Menu</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Menu Name</label>
  <input type="text" name="menu" class="form-control" placeholder="Menu Name" autocomplete="off" required=''>

                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Menu Order</label>
                  <input type="text" value="1" name="order" class="form-control" placeholder="Lim">

                </div>

              </div>
              <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Parent</label>
                  <select class="form-control select2" name="parent" required='true'>
                    <option value=""></option>
                    <option value="0">Is Root Menu</option>
                    <?php foreach ($menu as $key): ?>
                        <option value="<?php echo $key->id?>"><?php echo $key->id. " ".$key->menu ?></option>
                    <?php endforeach; ?>
                  </select>

                </div>
              </div>
              <!--/span-->

            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Link</label>
                  <input type="text" class="form-control" name="link" autocomplete="off">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Icon</label>
                  <input type="text" class="form-control" name="icon" autocomplete="off">
                </div>
              </div>
              <!--/span-->

            </div>
            <!--/row-->




          </div>
          <div class="form-actions right">
            <a href="<?php echo site_url('settings/menu') ?>"><button type="button" class="btn default">Cancel</button></a>
            <button type="submit" class="btn blue" name="simpan"><i class="fa fa-check"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
