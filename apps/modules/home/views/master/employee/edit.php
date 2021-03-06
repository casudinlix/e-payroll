<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">
  <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box yellow" id="form_wizard_1">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-group"></i> Form Edit Employee
              </div>
              <div class="tools hidden-xs">
                <a href="javascript:;" class="collapse">
                </a>



              </div>
            </div>
            <div class="portlet-body form">
              <form action="<?php echo site_url('masters/employee/editemp') ?>" class="form-horizontal" method="POST">
                <div class="form-wizard">
                  <div class="form-body">
                    <ul class="nav nav-pills nav-justified steps">
                      <li>
                        <a href="#tab1" data-toggle="tab" class="step">
                        <span class="number">
                        1 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Account Setup </span>
                        </a>
                      </li>
                      <li>
                        <a href="#tab2" data-toggle="tab" class="step">
                        <span class="number">
                        2 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Data Profile Setup </span>
                        </a>
                      </li>
                      <li>
                        <a href="#tab3" data-toggle="tab" class="step active">
                        <span class="number">
                        3 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Payment Setup </span>
                        </a>
                      </li>
                      <li>
                        <a href="#tab4" data-toggle="tab" class="step">
                        <span class="number">
                        4 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Identity ID </span>
                        </a>
                      </li>
                    </ul>
                    <div id="bar" class="progress progress-striped" role="progressbar">
                      <div class="progress-bar progress-bar-success">
                      </div>
                    </div>
                    <div class="tab-content">

                      <div class="tab-pane active" id="tab1">

                        <div class="form-group">
                          <label class="control-label col-md-3">NIP <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                          <input type="text" onkeypress="return angka(event)" class="form-control" name="nip" value="<?php echo $employee->new_nip ?>"/>

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Password <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="password" class="form-control" name="pass" value="<?php echo base64_decode($employee->pass) ?>"/>

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Finger ID <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" onkeypress="return angka(event)" class="form-control" name="fid" required='' value="<?php echo $employee->fid ?>"/>

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Group<span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                          <select name="group" class="form-control select2" required="">

                            <option value="<?php echo $employee->group_id ?>"><?php echo $employee->nama_group ?></option>
                            <?php foreach ($group as $key): ?>
                              <option value="<?php echo $key->id?>"><?php echo $key->nama_group ?></option>
                            <?php endforeach; ?>
                          </select>

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Email <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="email" class="form-control" name="email" required='true' autocomplete="off" value="<?php echo $employee->email ?>"/>

                          </div>
                        </div>

                      </div>
                      <div class="tab-pane" id="tab2">
                        <div class="portlet-body form">
    											<div class="form-body">
      												<h3 class="form-section">Personal Info</h3>
      												<div class="row">
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Name</label>
      															<div class="col-md-9">
      																<input type="text" class="form-control" required="" value="<?php echo $employee->emp_name ?>" name="nama" autocomplete="false">

      															</div>
      														</div>
      													</div>
      													<!--/span-->
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Date of Birth</label>
      															<div class="col-md-9">
<input class="form-control form-control-inline input-medium date-picker" type="text" name="ttl" placeholder="MM/DD/YYYY"/ value="<?php echo $employee->birth_date ?>">

      															</div>
      														</div>
      													</div>
      													<!--/span-->
      												</div>
      												<!--/row-->
      												<div class="row">
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Gender</label>
      															<div class="col-md-9">
      																<select class="form-control select2" name="sex">
                                        <option value="<?php echo $employee->sex?>"><?php echo $employee->sex?></option>
      																	<option value="MALE">MALE</option>
      																	<option value="FEMALE">FEMALE</option>
      																</select>

      															</div>
      														</div>
      													</div>
      													<!--/span-->
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Phone</label>
      															<div class="col-md-9">
      																<input type="text" onkeypress="return angka(event)" name="phone" class="form-control" placeholder="eg. 085xx" value="<?php echo $employee->phone?>">
      															</div>
      														</div>
      													</div>
      													<!--/span-->
      												</div>
      												<!--/row-->
      												<div class="row">
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Merital Status</label>
      															<div class="col-md-9">
      																<select class="select2 form-control" name="nikah" required='true'>
      																	<option value="<?php echo $employee->merital_status?>"><?php echo $employee->merital_status?></option>
      																	<option value="KAWIN">KAWIN</option>
      																	<option value="TIDAK KAWIN">TIDAK KAWIN</option>
      																	<option value="MENDUDA">MENDUDA</option>
                                        <option value="MENJANDA">MENJANDA</option>
      																</select>
      															</div>
      														</div>
                                  <div class="form-group">
      															<label class="control-label col-md-3">Join date</label>
      															<div class="col-md-9">
<input class="form-control form-control-inline input-medium date-picker" type="text" name="join" placeholder="MM/DD/YYYY"/ value="<?php echo $employee->join_date?>">
      															</div>
      														</div>
      													</div>
      													<!--/span-->
                                <div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Religion</label>
      															<div class="col-md-9">
      																<select class="select2 form-control" name="agama" required=''>

      																	<option value="<?php echo $employee->agama_id?>"><?php echo $employee->nama_agama?></option>
      																	<?php foreach ($agama as $key): ?>
                                          <option value="<?php echo $key->id?>"><?php echo $key->nama_agama ?></option>

                                        <?php endforeach; ?>
      																</select>
      															</div>
      														</div>
                                  <div class="form-group">
      															<label class="control-label col-md-3">Education</label>
      															<div class="col-md-9">
      																<select class="select2 form-control" name="edu" required=''>

      																	<option value="<?php echo $employee->edu_id?>"><?php echo $employee->edu_name?></option>
      																	<?php foreach ($edu as $key): ?>
                                          <option value="<?php echo $key->id?>"><?php echo $key->edu_code." ".$key->edu_name ?></option>

                                        <?php endforeach; ?>
      																</select>
      															</div>
      														</div>
      													</div>

      													<!--/span-->
      												</div>
      												<h3 class="form-section">Address & Placement</h3>
      												<!--/row-->
      												<div class="row">
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Address</label>
      															<div class="col-md-9">
      																<textarea class="form-control" required='true' placeholder="Kampung RT/RW Kec , Kabupaten" name="address" autocomplete='off'><?php echo $employee->address?></textarea>
      															</div>
      														</div>
      													</div>
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Departrment</label>
      															<div class="col-md-9">
                                      <select class="select2 form-control" name="dept" required=''>
      																	<option value="<?php echo $employee->dept_id?>"><?php echo $employee->dept_name?></option>

      																	<?php foreach ($dept as $key): ?>
                                          <option value="<?php echo $key->id?>"><?php echo $key->dept_name ?></option>

                                        <?php endforeach; ?>
      																</select>
      															</div>
      														</div>
      													</div>
      												</div>
      												<div class="row">
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Position</label>
      															<div class="col-md-9">
                                      <select class="select2 form-control" name="pos" required=''>

      																	<option value="<?php echo $employee->position_id?>"><?php echo $employee->position_name?></option>
      																	<?php foreach ($position as $key): ?>
                                          <option value="<?php echo $key->id?>"><?php echo $key->position_name ?></option>

                                        <?php endforeach; ?>
      																</select>
      															</div>
      														</div>
      													</div>
      													<!--/span-->
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Employee Type</label>
      															<div class="col-md-9">
                                      <select class="select2 form-control" name="emptype" required=''>
      																	<option value="<?php echo $employee->emp_type_id?>"><?php echo $employee->type_name?></option>
      																	<?php foreach ($emptype as $key): ?>
                                          <option value="<?php echo $key->id?>"><?php echo $key->type_name ?></option>

                                        <?php endforeach; ?>
      																</select>
      															</div>
      														</div>
      													</div>
      													<!--/span-->
      												</div>
      												<!--/row-->
      												<div class="row">
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Contract End</label>
      															<div class="col-md-9">
      																<input type="text" class="form-control date-picker" name="end" placeholder="MM/DD/YYYY" value="<?php echo $employee->contract_end?>">
      															</div>
      														</div>
      													</div>
      													<!--/span-->
      													<div class="col-md-6">
      														<div class="form-group">
      															<label class="control-label col-md-3">Company</label>
      															<div class="col-md-9">
                                      <select class="select2 form-control" name="company" required=''>
      																	<option value="<?php echo $employee->company_id?>"><?php echo $employee->company_name?></option>
      																	<?php foreach ($company as $key): ?>
                                          <option value="<?php echo $key->id?>"><?php echo $key->company_name ?></option>

                                        <?php endforeach; ?>
      																</select>
      															</div>
      														</div>
      													</div>
      													<!--/span-->
      												</div>
      												<!--/row-->
      											</div>


      										<!-- END FORM-->
      									</div>
                      </div>
                      <div class="tab-pane" id="tab3">
                        <h3 class="block">Provide your Payment Bank</h3>
                        <div class="form-group">
                          <label class="control-label col-md-3">Account Number <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" onkeypress="return angka(event)"  class="form-control" name="account" autocomplete="off" required='' value="<?php echo $employee->bank_account?>"/>

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Bank<span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <select class="select2 form-control" name="bank" required=''>
                              <option value="<?php echo $employee->bank_type?>"><?php echo $employee->bank_name?></option>
                              <?php foreach ($bank as $key): ?>
                                <option value="<?php echo $key->id?>"><?php echo $key->bank_name ?></option>

                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Net Salary <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
  <input type="text" class="form-control" name="salary" onkeypress="return angka(event)" autocomplete="off" required='' value="<?php echo number_format($employee->salary) ?>"/>

                          </div>
                        </div>


                      </div>
                      <div class="tab-pane" id="tab4">
                        <h3 class="block">Identity Etc</h3>

                        <div class="form-group">
                          <label class="control-label col-md-3">NIK:</label>
                          <div class="col-md-4">
                            <input type="number" maxlength="16" name="nik" value="<?php echo $employee->nik?>" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">NPWP:</label>
                          <div class="col-md-4">
                            <input type="number" value="<?php echo $employee->npwp?>" maxlength="16" name="npwp" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3">BPJS KES:</label>
                          <div class="col-md-4">
                            <input type="text" onkeypress="return angka(event)" maxlength="16" required='' name="bpjskes" class="form-control" value="<?php echo $employee->bpjskes?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">BPJS TK:</label>
                          <div class="col-md-4">
                            <input type="text" onkeypress="return angka(event)" maxlength="16" required='' name="bpjstk" class="form-control" <?php echo $employee->bpjstk?>>
                          </div>
                        </div>
<input type="hidden" name="id" value="<?php echo $employee->emp_id ?>">





                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <div class="row">
                      <div class="col-md-offset-3 col-md-9">
                        <a href="<?php echo site_url('masters/employee') ?>" class="btn default button-previous">
                        <i class="m-icon-swapleft"></i> Back </a>

                        <button href="javascript:;" class="btn green button-submit" type="submit">
                        Submit <i class="m-icon-swapright m-icon-white"></i>
                      </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE CONTENT-->
    </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
