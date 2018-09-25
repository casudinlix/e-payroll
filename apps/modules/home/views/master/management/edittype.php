<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <form action="" class="horizontal-form" method="POST">
          <div class="form-body">
            <h3 class="form-section">Edit Type Employe</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Type Name</label>
  <input type="text" name="type" class="form-control" value="<?php echo $type->type_name ?>" autocomplete="off" required=''>
  <input type="hidden" name="id" value="<?php echo $type->id?>">

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
            <button type="submit" class="btn blue" name="edittype"><i class="fa fa-check"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
