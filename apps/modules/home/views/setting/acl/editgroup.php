<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <form action="" class="horizontal-form" method="POST">
          <div class="form-body">
            <h3 class="form-section">Add New Group</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Group Name</label>
  <input type="text" name="group" class="form-control" value="<?php echo $group->nama_group ?>" autocomplete="off" required=''>
  <input type="hidden" name="id" value="<?php echo $group->id?>">

                </div>
              </div>
              <!--/span-->

              <!--/span-->
            </div>
            <!--/row-->

            <!--/row-->

          </div>
          <div class="form-actions right">
            <a href="<?php echo site_url('settings/group') ?>"><button type="button" class="btn default">Cancel</button></a>
            <button type="submit" class="btn blue" name="simpan"><i class="fa fa-check"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
