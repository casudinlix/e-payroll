<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">

        								<div>

      <form action="" method="POST">
                                      <div class="col-md-6">
                                        <h4>Company Name</h4>
                                        <p>
        <input type="text" autocomplete="off" name="company" required='true' class="form-control" value="<?php echo $company->company_name ?>">
                                        </p>

                                      </div>
                                      <div class="col-md-6">
                                        <h4>Company phone</h4>
                                        <p>
        <input type="text" autocomplete="off" name="phone" required='true' class="form-control" value="<?php echo $company->phone ?>">
                                        </p>

                                      </div>
                                      <div class="col-md-6">
                                        <h4>Company Fax</h4>
                                        <p>
        <input type="text" value="<?php echo $company->fax ?>" autocomplete="off" name="fax" required='true' class="form-control">
                                        </p>

                                      </div>
                                      <div class="col-md-6">
                                        <h4>Company Email</h4>
                                        <p>
        <input type="text" value="<?php echo $company->email ?>" autocomplete="off" name="email" required='true' class="form-control">
                                        </p>
<input type="hidden" name="id" value="<?php echo $company->id ?>">
                                      </div>

        								</div>
        								<div class="modal-footer">
        								<a href="<?php echo site_url('masters/company') ?>">	<button type="button" class="btn btn-default">Cancel</button></a>
        									<button type="submit" name="simpan" class="btn blue">Update</button>
        								</div>
                      </form>


      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
