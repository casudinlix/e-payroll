<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <div class="portlet box grey-cascade">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-group"></i>Employee List
            </div>

          </div>
          <div class="portlet-body">
            <div class="table-toolbar">
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group">
                    <a href="<?php echo site_url('masters/employee/add') ?>"><button id="sample_editable_1_new" class="btn green">
                    Add New <i class="fa fa-plus"></i>
                  </button></a>
                  </div>
                  <div class="btn-group">
                    <a href="<?php echo site_url('report/employee') ?>"><button  class="btn yellow">
                    Export Excel<i class="fa fa-file-excel-o"></i>
                  </button></a>

                  </div>
                </div>

              </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="employee">
            <thead>
            <tr>

              <th>
                 No
              </th>
              <th>
               Name
              </th>
              <th>
                 NIP
              </th>

              <th>
                 Company
              </th>
              <th>
                 Departement
              </th>
              <th>
                 Join At
              </th>
              <th>
                 Position
              </th>
              <th>
                 Emp Type
              </th>
              <th>

              </th>
            </tr>
            </thead>
            <tbody>

            </table>
          </div>
        </div>

      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
