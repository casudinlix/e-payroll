<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-6">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-building"></i>List Company
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a data-target="#tambahcompany" data-toggle="modal"><i class="fa fa-plus" title="Add Roles"></i>
              <a href="javascript:;" class="reload">
              </a>

            </div>
          </div>
          <div class="portlet-body">
            <div class="table-scrollable">
              <table class="table table-hover data-table">
              <thead>
              <tr>
                <th>
                   #
                </th>
                <th>
                   Company Name
                </th>

                <th>
                   Phone
                </th>
                <th>
                   Fax
                </th>
                <th>
                   Email
                </th>

                <th>

                </th>
              </tr>
              </thead>
              <tbody>
                <tr>
                <?php $no=1;
                foreach ($company as $key): ?>

                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->company_name ?>
                </td>

                <td>
                   <?php echo $key->phone ?>
                </td>
                <td>
                   <?php echo $key->fax ?>
                </td>
                <td>
                   <?php echo $key->email ?>
                </td>

                <td>
                  <a href="<?php echo site_url('masters/company/edit/'.clean($key->id)) ?>"><span class="label label-sm label-danger">
                  Edit </span></a>
                </td>
              </tr>
            <?php endforeach; ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
      </div>
      <div class="col-md-6">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box yellow">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-coffee"></i>Report Employee
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>

              </a>
              <a href="javascript:;" class="reload">
              </a>

              </a>
            </div>
          </div>
          <div class="portlet-body">
            <div class="table-scrollable">
              <table class="table table-bordered table-hover data-table">
              <thead>
              <tr>
                <th>
                   #
                </th>
                <th>
                   Company Name
                </th>
                <th>
                   Total Employee
                </th>


              </tr>
              </thead>
              <tbody>
                  <tr>
                <?php
                 foreach ($report as $key): ?>



                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->company_name ?>
                </td>
                <td>
                   <?php echo $key->total_employe ?>
                </td>


              </tr>
<?php endforeach; ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
      </div>

    </div>


  </div>

</div>
<div id="tambahcompany" class="modal fade" tabindex="-1" data-backdrop="tambahrole" data-keyboard="false" data-attention-animation="true">
								<div class="modal-body">

                    <form action="" method="POST">
                              <div class="col-md-6">
                                <h4>Company Name</h4>
                                <p>
<input type="text" autocomplete="off" name="company" required='true' class="form-control">
                                </p>

                              </div>
                              <div class="col-md-6">
                                <h4>Company phone</h4>
                                <p>
<input type="text" autocomplete="off" name="phone" required='true' class="form-control">
                                </p>

                              </div>
                              <div class="col-md-6">
                                <h4>Company Fax</h4>
                                <p>
<input type="text" autocomplete="off" name="fax" required='true' class="form-control">
                                </p>

                              </div>
                              <div class="col-md-6">
                                <h4>Company Email</h4>
                                <p>
<input type="text" autocomplete="off" name="email" required='true' class="form-control">
                                </p>

                              </div>

								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
									<button type="submit" name="simpan" class="btn blue">Save</button>
								</div>
              </form>
							</div>
