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
            <table class="table table-striped table-bordered table-hover data-table" id="sample_1">
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
                 New NIP
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
              <?php $no=1;
              foreach ($employee as $key): ?>


            <tr class="odd gradeX">

              <td>
                 <?php echo $no++; ?>
              </td>
              <td>
                <a href="<?php echo site_url('masters/employee/detil/'.clean($key->emp_id)) ?>" title="Ditel"><?php echo $key->emp_name ?></a>
              </td>
              <td>
                 <?php echo $key->emp_nip ?>
              </td>
              <td>
                 <?php echo $key->new_nip ?>
              </td>
              <td class="center">
                <?php echo $key->company_name ?>
              </td>
              <td>
                 <?php echo $key->dept_name ?>
              </td>
              <td>
                 <?php echo $key->join_date ?>
              </td>
              <td>
                 <?php echo $key->position_name ?>
              </td>
              <td>
                 <?php echo $key->type_name ?>
              </td>
              <td><a href="<?php echo site_url("masters/employee/edit/".clean($key->emp_id) )?>" class="btn btn-warning" title="Edit"><i class="icon icon-note"></i></a>
              </td>
                <?php endforeach; ?>
            </tr>

            </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
