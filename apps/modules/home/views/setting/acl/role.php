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
              <i class="fa fa-sitemap"></i>Role List
            </div>

          </div>
          <div class="portlet-body">
            <div class="table-toolbar">
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group">
                    <a href="<?php echo site_url('settings/role/add') ?>"><button id="sample_editable_1_new" class="btn green">
                    Add Role <i class="fa fa-plus"></i>
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
                 Role Name
              </th>
              <th>
                 Module
              </th>
              <th>
              Method
              </th>
              <th>
                 Create At
              </th>
              <th>
                 Update At
              </th>
              <th>
                 Add by
              </th>
              <th>
                 Update by
              </th>
              <th>

              </th>
            </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($role as $key): ?>


            <tr class="odd gradeX">

              <td>
                 <?php echo $no++; ?>
              </td>
              <td>
                <?php echo $key->role_name ?>
              </td>
              <td>
                 <?php echo $key->module ?>
              </td>
              <td>
                 <?php echo $key->method ?>
              </td>
              <td class="center">
                <?php echo $key->add_at ?>
              </td>
              <td>
                 <?php echo $key->update_at ?>
              </td>
              <td>
                 <?php echo $key->add_by ?>
              </td>
              <td>
                 <?php echo $key->update_by ?>
              </td>

              <td><a href="<?php echo site_url('settings/role/edit/'.clean($key->id) )?>" class="btn btn-warning" title="Edit"><i class="icon icon-note"></i></a>
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
