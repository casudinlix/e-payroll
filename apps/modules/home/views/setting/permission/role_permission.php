<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-6">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-users"></i>List Role User
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a href="#tambahrole">
              </a>
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
                   Role Name
                </th>

                <th>
                   User Name
                </th>

                <th>

                </th>
              </tr>
              </thead>
              <tbody>
                <tr>
                <?php $no=1;
                foreach ($user as $key): ?>

                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->role_name ?>
                </td>

                <td>
                   <?php echo $key->username ?>
                </td>
                <td>
                  <span class="label label-sm label-danger" onclick="hapusrole('<?php echo $key->permission_id ?>')">
                  Delete </span>
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
              <i class="fa fa-coffee"></i>List Role Master
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a data-target="#tambahrole" data-toggle="modal"><i class="fa fa-plus" title="Add Roles"></i>
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
                   Role Name
                </th>
                <th>
                   Module Name
                </th>
                <th>
                   Method
                </th>

              </tr>
              </thead>
              <tbody>
                  <tr>
                <?php
                 foreach ($role as $key): ?>



                <td>
                   <?php echo $no++ ?>
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
    <div class="row">
      <div class="col-md-6">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-user-md"></i>List menu Group
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
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
                   Group Name
                </th>
                <th>
                   Menu Name
                </th>
                <th>

                </th>

              </tr>
              </thead>
              <tbody>
                <?php foreach ($group as $key): ?>


              <tr>
                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->nama_group ?>
                </td>
                <td>
                   <?php echo $key->menu?>
                </td>
                <td>
                  <span class="label label-sm label-danger" onclick="hapusmenu('<?php echo $key->id ?>')">
                  Delete </span>
                </td>
                </td>


            <?php endforeach; ?>
            </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
      </div>
      <div class="col-md-6">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-sitemap"></i>List Menu Master
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a href="#tambahmenu" data-toggle="modal"><i class="fa fa-plus" title="Add Menu"></i>
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
                   Menu Name
                </th>
                <th>
                   Status Active
                </th>

              </tr>
              </thead>
              <tbody>
                <?php foreach ($menu as $key): ?>


              <tr>
                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->menu ?>
                </td>
<?php if ($key->is_published==1): ?>
  <td>
    <span class="label label-sm label-success">
    Yes </span>
  </td>
<?php else: ?>
                <td>
                  <span class="label label-sm label-danger">
                  No </span>
                </td>
<?php endif; ?>

                <?php endforeach; ?>
              </tr>

              </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box yellow">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-building"></i>List Compay Permission
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
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
                   Users
                </th>

                <th>

                </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($companyid as $key): ?>


              <tr >
                <td>
                   <?php echo $no++ ?>
                </td>

                <td>
                   <?php echo $key->company_name ?>
                </td>
                <td>
                   <?php echo $key->username ?>
                </td>
                <td>
                  <span class="label label-sm label-danger" onclick="hapuscompany('<?php echo $key->id?>')">
                  Delete </span>
                </td>

<?php endforeach; ?>
</tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
      </div>
      <div class="col-md-6">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box green">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-sitemap"></i>List Company Master
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a data-target="#tambahcompany" data-toggle="modal"><i class="fa fa-plus" title="Add Company"></i>
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

              </tr>
              </thead>
              <tbody>
                <?php foreach ($company as $key): ?>


              <tr>
                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->company_name ?>
                </td>

<?php endforeach; ?>
</tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
      </div>
    </div>
  </div>

</div>
<div id="tambahrole" class="modal fade" tabindex="-1" data-backdrop="tambahrole" data-keyboard="false" data-attention-animation="true">
								<div class="modal-body">
									<p>
                    <form action="" method="POST">
                              <div class="col-md-6">
                                <h4>Role</h4>
                                <p>
                                  <select class="form-control select2" name="roleid" required='true'>
                                    <option value=""></option>
                                    <?php foreach ($role as $key): ?>
                                      <option value="<?php echo $key->id?>"><?php echo $key->id." ".$key->role_name ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </p>

                              </div>
                              <div class="col-md-6">
                                <h4>User List</h4>
                                <p>
                                  <select class="form-control select2" name="user" required='true'>
                                    <option value=""></option>
                                    <?php foreach ($userid as $key): ?>
                                      <option value="<?php echo $key->id ?>"><?php echo $key->id." ".$key->username ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </p>

                              </div>
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
									<button type="submit" name="role" class="btn blue">Save</button>
								</div>
              </form>
							</div>


<div id="tambahmenu" class="modal fade" tabindex="-1" data-backdrop="tambahmenu" data-keyboard="false" data-attention-animation="false">
<div class="modal-body">
  <div class="row">
    <form action="" method="POST">
              <div class="col-md-6">
                <h4>List Menu</h4>
                <p>
                  <select class="form-control select2" name="menuid" required='true'>
                    <option value=""></option>
                    <?php foreach ($menu as $key): ?>
                      <option value="<?php echo $key->id?>"><?php echo $key->id." ".$key->menu ?></option>
                    <?php endforeach; ?>
                  </select>
                </p>

              </div>
              <div class="col-md-6">
                <h4>List Group</h4>
                <p>
                  <select class="form-control select2" name="groupid" required='true'>
                    <option value=""></option>
                    <?php foreach ($groupid as $key): ?>
                      <option value="<?php echo $key->id ?>"><?php echo $key->id." ".$key->nama_group ?></option>
                    <?php endforeach; ?>
                  </select>
                </p>

              </div>
</div>
<div class="modal-footer">

  <button type="button" class="btn default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn blue" name="menu">Save</button>
</div>
</div>
<!-- /.modal-content -->
</form>
</div>


<div id="tambahcompany" class="modal fade" tabindex="-1" data-backdrop="tambahmenu" data-keyboard="false" data-attention-animation="false">
<div class="modal-body">
  <div class="row">
    <form action="" method="POST">
              <div class="col-md-6">
                <h4>List Company</h4>
                <p>
                  <select class="form-control select2" name="companyid" required='true'>
                    <option value=""></option>
                    <?php foreach ($company as $key): ?>
                      <option value="<?php echo $key->id?>"><?php echo $key->id." ".$key->company_name ?></option>
                    <?php endforeach; ?>
                  </select>
                </p>

              </div>
              <div class="col-md-6">
                <h4>List Users</h4>
                <p>
                  <select class="form-control select2" name="userid" required='true'>
                    <option value=""></option>
                    <?php foreach ($userid as $key): ?>
                      <option value="<?php echo $key->id ?>"><?php echo $key->id." ".$key->username ?></option>
                    <?php endforeach; ?>
                  </select>
                </p>

              </div>
</div>
<div class="modal-footer">

  <button type="button" class="btn default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn blue" name="company">Save</button>
</div>
</div>
<!-- /.modal-content -->
</form>
</div>
