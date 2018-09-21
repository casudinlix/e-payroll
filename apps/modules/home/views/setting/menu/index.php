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
              <i class="fa fa-sitemap"></i>Menu List
            </div>

          </div>
          <div class="portlet-body">
            <div class="table-toolbar">
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group">
                    <a href="<?php echo site_url('settings/menu/add') ?>"><button id="sample_editable_1_new" class="btn green">
                    Add New <i class="fa fa-plus"></i>
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
                 Menu Name
              </th>
              <th>
                 create By
              </th>
              <th>
                 Update By
              </th>
              <th>
                 Create At
              </th>
              <th>
                 Update At
              </th>
              <th>
                 Status
              </th>
              <th>

              </th>
            </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($menu as $key): ?>


            <tr class="odd gradeX">

              <td>
                 <?php echo $no++; ?>
              </td>
              <td>
                <?php echo $key->menu ?>
              </td>
              <td>
                 <?php echo $key->create_by ?>
              </td>
              <td>
                 <?php echo $key->update_by ?>
              </td>
              <td class="center">
                <?php echo $key->created_at ?>
              </td>
              <td>
                 <?php echo $key->updated_at ?>
              </td>
              <td>
                <?php if ($key->is_published==1): ?>
                  <span class="label label-sm label-success">
                  Publish </span>
                <?php else: ?>
                  <span class="label label-sm label-danger">
                  No </span>
                <?php endif; ?>

              </td>
              <td><a href="<?php echo site_url('settings/menu/edit/').clean($key->id) ?>" class="btn btn-warning" title="Edit"><i class="icon icon-note"></i></a><a href="#" class="btn btn-danger" title="Non Active" onClick="nonactive('<?php echo $key->id ?>')"><i class="fa fa-power-off"></i></a>
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
