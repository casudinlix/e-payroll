<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <form action="" class="horizontal-form" method="POST">
          <div class="form-body">
            <h3 class="form-section">Edit New Role</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Role Name</label>
  <input type="text" name="role" class="form-control" placeholder="Role Name" autocomplete="off" value="<?php echo $role->role_name ?>">

                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Module</label>
                  <input type="text"  name="module" class="form-control" autocomplete="true" value="<?php echo $role->module ?>">

                </div>

              </div>
              <!--/span-->
            </div>
            <!--/row-->

            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Method</label>
                  <input type="text" value="<?php echo $role->method ?>" class="form-control" name="method" autocomplete="off">
                </div>
              </div>
<input type="hidden" name="id" value="<?php echo $role->id ?>"

            </div>
            <!--/row-->




          </div>
          <div class="form-actions right">
            <a href="<?php echo site_url('settings/role') ?>"><button type="button" class="btn default">Cancel</button></a>
            <button type="submit" class="btn blue" name="simpan"><i class="fa fa-check"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
