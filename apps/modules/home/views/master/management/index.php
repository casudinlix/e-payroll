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
              <i class="fa fa-ticket"></i>List Religion
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a data-target="#tambahagama" data-toggle="modal"><i class="fa fa-plus" title="Add NEW"></i>
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
                   Religion name
                </th>



                <th>

                </th>
              </tr>
              </thead>
              <tbody>
                <tr>
                <?php $no=1;
                foreach ($agama as $key): ?>

                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->nama_agama ?>
                </td>

                <td>
<a class="btn btn-warning" href="<?php echo site_url('masters/management/religion/'.clean($key->id))?>"><i class="fa fa-pencil"></i></a>
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
              <i class="fa fa-coffee"></i>List Departement
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a data-target="#tambahdept" data-toggle="modal"><i class="fa fa-plus" title="Add NEW"></i>
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
                   Dept Name
                </th>
                <th>

                </th>


              </tr>
              </thead>
              <tbody>
                  <tr>
                <?php
                 foreach ($dept as $key): ?>



                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->dept_name ?>
                </td>

                <td>
<a href="<?php echo site_url('masters/management/dept/'.clean($key->id))?>" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>
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
              <i class="fa fa-sitemap"></i>List Position
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a data-target="#tambahposisi" data-toggle="modal"><i class="fa fa-plus" title="Add NEW"></i>
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
                   Position Name
                </th>

                <th>

                </th>

              </tr>
              </thead>
              <tbody>
                <?php foreach ($position as $key): ?>


              <tr>
                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->position_name ?>
                </td>

                <td>
<a href="<?php echo site_url('masters/management/position/'.clean($key->id))?>" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>
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
              <i class="fa fa-user"></i>List Employee Type
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a href="#tambahtype" data-toggle="modal"><i class="fa fa-plus" title="Add NEW"></i>
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
                   Type Name
                </th>
                <th>

                </th>

              </tr>
              </thead>
              <tbody>
                <?php foreach ($type as $key): ?>


              <tr>
                <td>
                   <?php echo $no++ ?>
                </td>
                <td>
                   <?php echo $key->type_name ?>
                </td>
<td><a href="<?php echo site_url('masters/management/type/'.clean($key->id))?>" class="btn btn-warning" ><i class="fa fa-pencil"></i></a></td>

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
              <i class="fa fa-graduation-cap"></i>List Education
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a data-target="#tambahedu" data-toggle="modal"><i class="fa fa-plus" title="Add NEW"></i>
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
                   Edu Code
                </th>
                <th>
                  Edu Name
                </th>

                <th>

                </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($edu as $key): ?>


              <tr >
                <td>
                   <?php echo $no++ ?>
                </td>

                <td>
                   <?php echo $key->edu_code ?>
                </td>
                <td>
                   <?php echo $key->edu_name ?>
                </td>
                <td>
            <a href="<?php echo site_url('masters/management/edu/'.clean($key->id))?>" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>
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
              <i class="fa fa-money"></i>List Insentif
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a data-target="#tambahinsentif" data-toggle="modal"><i class="fa fa-plus" title="Add NEW"></i>
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
                   Code
                </th>
                <th>
                  Insentif Name
                </th>
                <th>
                Amount
                </th>

                <th>

                </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($insentif as $key): ?>


              <tr >
                <td>
                   <?php echo $no++ ?>
                </td>

                <td>
                   <?php echo $key->code ?>
                </td>
                <td>
                   <?php echo $key->insentif_name ?>
                </td>
                <td>
                   Rp. <?php echo number_format($key->amount) ?>
                </td>
                <td>
<a class="btn btn-warning" href="<?php echo site_url('masters/management/insentif/'.clean($key->id))?>"><i class="fa fa-pencil"></i></a>
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
<div id="tambahagama" class="modal fade" tabindex="-1" data-backdrop="tambahrole" data-keyboard="false" data-attention-animation="true">
								<div class="modal-body">
									<p>
                    <form action="" method="POST">
                              <div class="col-md-6">
                                <h4>Add Religion</h4>
  <input type="text" name="agama" class="form-control" autocomplete="off">

                              </div>
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
									<button type="submit" name="simpanagama" class="btn blue">Save</button>
								</div>
              </form>
							</div>


<div id="tambahdept" class="modal fade" tabindex="-1"  data-keyboard="false" data-attention-animation="false">
<div class="modal-body">
  <div class="row">
    <form action="" method="POST">

              <div class="col-md-6">
                <h4>Add New Dept</h4>
                <p>
<input type="text" autocomplete="off" name="dept" class="form-control">
                </p>

              </div>
</div>
<div class="modal-footer">

  <button type="button" class="btn default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn blue" name="tambahdept">Save</button>
</div>
</div>
<!-- /.modal-content -->
</form>
</div>


<div id="tambahposisi" class="modal fade" tabindex="-1" data-backdrop="tambahmenu" data-keyboard="false" data-attention-animation="false">
<div class="modal-body">
  <div class="row">
    <form action="" method="POST">

              <div class="col-md-6">
                <h4>Position Name</h4>
                <p>
<input type="text" name="posisi" autocomplete="off" class="form-control">
                </p>

              </div>
</div>
<div class="modal-footer">

  <button type="button" class="btn default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn blue" name="simpanposisi">Save</button>
</div>
</div>
<!-- /.modal-content -->
</form>
</div>


<div id="tambahtype" class="modal fade" tabindex="-1" data-backdrop="tambahmenu" data-keyboard="false" data-attention-animation="false">
<div class="modal-body">
  <div class="row">
    <form action="" method="POST">
              <div class="col-md-6">
                <h4>TYPE EMPLOYE</h4>
                <p>
                  <input type="text" name="type" class="form-control" autocomplete="off">
                </p>

              </div>

</div>
<div class="modal-footer">

  <button type="button" class="btn default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn blue" name="tambahtype">Save</button>
</div>
</div>
<!-- /.modal-content -->
</form>
</div>

<div id="tambahedu" class="modal fade" tabindex="-1" data-backdrop="tambahmenu" data-keyboard="false" data-attention-animation="false">
<div class="modal-body">
  <div class="row">
    <form action="" method="POST">
              <div class="col-md-6">
                <h4>Edu Code</h4>
                <p>
                  <input type="text" name="code" class="form-control" autocomplete="off">
                </p>

              </div>
              <div class="col-md-6">
                <h4>Edu Name</h4>
                <p>
                  <input type="text" name="name" class="form-control" autocomplete="off">
                </p>

              </div>
</div>
<div class="modal-footer">

  <button type="button" class="btn default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn blue" name="edu">Save</button>
</div>
</div>
<!-- /.modal-content -->
</form>
</div>

<div id="tambahinsentif" class="modal fade" tabindex="-1" data-backdrop="tambahrole" data-keyboard="false" data-attention-animation="true">
								<div class="modal-body">
									<p>
                    <form action="" method="POST">
                              <div class="col-md-6">
                                <h4>Code</h4>
                                <p>
                                  <input type="text" name="code" class="form-control" autocomplete="off">
                                </p>

                              </div>
                              <div class="col-md-6">
                                <h4>Insentif Name</h4>
                                <p>
                                  <input type="text" name="name" class="form-control" autocomplete="off">
                                </p>

                              </div>
                              <div class="col-md-6">
                                <h4>Amount</h4>
                                <p>
                                  <input type="text" name="amount" onkeypress="return angka(event)" class="form-control" autocomplete="off">
                                </p>

                              </div>
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
									<button type="submit" name="insentif" class="btn blue">Save</button>
								</div>
              </form>
							</div>
