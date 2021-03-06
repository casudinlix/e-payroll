<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <div class="row profile">
  				<div class="col-md-12">
  					<!--BEGIN TABS-->
  					<div class="tabbable-line tabbable-full-width">
  						<ul class="nav nav-tabs">
  							<li class="active">
  								<a href="#tab_1_1" data-toggle="tab">
  								Overview </a>
  							</li>
  							<li>
  								<a href="#tab_1_3" data-toggle="tab">
  								Account </a>
  							</li>
  							<li>
  								<a href="#tab_1_4" data-toggle="tab">
  								Projects </a>
  							</li>
  							<li>
  								<a href="#tab_1_6" data-toggle="tab">
  								Help </a>
  							</li>
  						</ul>
  						<div class="tab-content">
  							<div class="tab-pane active" id="tab_1_1">
  								<div class="row">
  									<div class="col-md-3">
  										<ul class="list-unstyled profile-nav">
  											<li>
  												<img src="<?php echo employee().$emp->photo ?>" class="img-responsive" alt="" height="100px" width="200px"/>

  											</li>

  										</ul>
  									</div>
  									<div class="col-md-9">
  										<div class="row">
  											<div class="col-md-8 profile-info">
  												<h1><?php echo $emp->emp_name ?></h1>


  												<ul class="list-inline">
  													<li>
  														<i class="fa fa-map-marker"></i> Indonesia
  													</li>
  													<li>
  														<i class="fa fa-calendar"></i> <?php echo $emp->birth_date ?>
  													</li>
  													<li>
  														<i class="fa fa-briefcase"></i> <?php echo $emp->position_name ?>
  													</li>
                            <li>
  														<i class="fa fa-bank"></i> <?php echo $emp->company_name ?>
  													</li>
                            <li>
                              <i class="fa fa-users"></i> <?php echo $manager->manager_name ?>
                            </li>
                            <li>
                              <i class="fa fa-child"></i> <?php echo $umur ?>
                            </li>
                            <li>
                              <i class="fa fa-clock-o"></i> <?php echo $kerja ?>
                            </li>
                            <li>
                              <i class="fa fa-sliders"></i> <?php echo $emp->type_name ?>
                            </li>


  												</ul>
  											</div>
  											<!--end col-md-8-->

  											<!--end col-md-4-->
  										</div>
  										<!--end row-->
  										<div class="tabbable-line tabbable-custom-profile">
  											<ul class="nav nav-tabs">
  												<li class="active">
  													<a href="#tab_1_11" data-toggle="tab">
  													Family </a>
  												</li>
  												<li>
  													<a href="#tab_1_22" data-toggle="tab">
  													Payment </a>
  												</li>
  											</ul>
  											<div class="tab-content">

  												<div class="tab-pane active" id="tab_1_11">
                            <a href="#tab_1_4" data-toggle="tab" class="btn btn-success">Add Family</a>
  													<div class="portlet-body">
  														<table class="table table-striped table-bordered table-advance table-hover data-table">
  														<thead>
  														<tr>
                                <th>
  																<i class="fa fa-sort-numeric-asc"></i> No
  															</th>
  															<th>
  																<i class="fa fa-briefcase"></i> Name
  															</th>
  															<th class="hidden-xs">
  																<i class="fa fa-question"></i> Status
  															</th>
  															<th>
  																<i class="fa fa-road"></i> Address
  															</th>
  															<th>
  															</th>
  														</tr>
  														</thead>
  														<tbody>

                                <?php $no=1;
                                foreach ($family as $key): ?>
                                  <tr>
                                  <td><?php echo $no++ ?></td>
                                    <td><?php echo $key->family_name ?></td>
                                      <td><?php echo $key->family_status ?></td>
                                        <td><?php echo $key->address ?></td>
                                        <td><i class="fa fa-edit btn btn-warning" ></i></td>


                                <?php endforeach; ?>
</tr>
  														</tbody>
  														</table>
  													</div>
  												</div>
  												<!--tab-pane-->
  												<div class="tab-pane" id="tab_1_22">
  													<div class="tab-pane active" id="tab_1_1_1">
  														<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
  															<ul class="feeds">
  																<li>
  																	<div class="col1">
  																		<div class="cont">
  																			<div class="cont-col1">
  																				<div class="label label-success">
  																					<i class="fa fa-money"></i>
  																				</div>
  																			</div>
  																			<div class="cont-col2">
  																				<div class="desc">
  																					 Rp. <?php echo number_format($emp->salary) ?> / Month Net
  																					</span>
  																				</div>
  																			</div>
  																		</div>
  																	</div>

  																</li>


  															</ul>
  														</div>
  													</div>
  												</div>
  												<!--tab-pane-->
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
  							<!--tab_1_2-->
  							<div class="tab-pane" id="tab_1_3">
  								<div class="row profile-account">
  									<div class="col-md-3">
  										<ul class="ver-inline-menu tabbable margin-bottom-10">

  											<li class="active">
  												<a data-toggle="tab" href="#tab_2-2">
  												<i class="fa fa-picture-o"></i> Change Avatar </a>
  											</li>
  											<li>
  												<a data-toggle="tab" href="#tab_3-3">
  												<i class="fa fa-lock"></i> Change Password </a>
  											</li>

  										</ul>
  									</div>
  									<div class="col-md-9">
  										<div class="tab-content">

  											<div id="tab_2-2" class="tab-pane active">
  												<p>
  													 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
  												</p>
<form action="<?php echo site_url('api/uploadpict') ?>" method="post" enctype="multipart/form-data">

  													<div class="form-group">
  														<div class="fileinput fileinput-new" data-provides="fileinput">
  															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
<img src="<?php echo employee().$emp->photo ?>" alt=""/>
  															</div>
  															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                  <img>
  															</div>
  															<div>
                                  <input type="hidden" name="id" value="<?php echo $emp->emp_id ?>">
  																<span class="btn default btn-file">
  																<span class="fileinput-new">
  																Select image </span>
  																<span class="fileinput-exists">
  																Change </span>
  																<input type="file" name="file">
  																</span>
  																<button type="reset" class="btn default fileinput-exists" data-dismiss="fileinput">
  																Remove </button>
  															</div>
  														</div>
  														<div class="clearfix margin-top-10">
  															<span class="label label-danger">
  															NOTE! </span>
  															<span>
  															Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
  														</div>
  													</div>
  													<div class="margin-top-10">
  														<button type="submit" class="btn green">
  														Submit </button>
  														<a href="javascript:;" class="btn default">
  														Cancel </a>
  													</div>
  												</form>
  											</div>
  											<div id="tab_3-3" class="tab-pane">
  												<form action="<?php echo site_url('mode/gantipass') ?>" method="POST">
  													<div class="form-group">
  														<label class="control-label">Current Password</label>
  														<input type="password" class="form-control" name="pass1"/>
  													</div>
  													<div class="form-group">
  														<label class="control-label">New Password</label>
  														<input type="password" class="form-control" name="pass2"/>
  													</div>
  													<div class="form-group">
  														<label class="control-label">Re-type New Password</label>
  														<input type="password" class="form-control" name="pass3"/>
  													</div>
  													<div class="margin-top-10">
  														<a href="javascript:;" class="btn green">
  														Change Password </a>
  														<a href="javascript:;" class="btn default">
  														Cancel </a>
  													</div>
  												</form>
  											</div>

  										</div>
  									</div>
  									<!--end col-md-9-->
  								</div>
  							</div>
  							<!--end tab-pane-->
  							<div class="tab-pane" id="tab_1_4">
  								<div class="row">

  								</div>

  								<div class="row portfolio-block">

  									</div>
  									<div class="col-md-5 portfolio-stat">
  										<div class="portfolio-info">
  											 Today Sold <span>
  											24 </span>
  										</div>
  										<div class="portfolio-info">
  											 Total Sold <span>
  											975 </span>
  										</div>
  										<div class="portfolio-info">
  											 Earns <span>
  											$21.700 </span>
  										</div>
  									</div>
  									<div class="col-md-2 portfolio-btn">
  										<a href="javascript:;" class="btn bigicn-only">
  										<span>
  										Manage </span>
  										</a>
  									</div>
  								</div>
  								<!--end row-->
  							</div>
  							<!--end tab-pane-->
  							<div class="tab-pane" id="tab_1_6">
  								<div class="row">
  									<div class="col-md-3">
  										<ul class="ver-inline-menu tabbable margin-bottom-10">
  											<li class="active">
  												<a data-toggle="tab" href="#tab_1">
  												<i class="fa fa-briefcase"></i> General Questions </a>
  												<span class="after">
  												</span>
  											</li>
  											<li>
  												<a data-toggle="tab" href="#tab_2">
  												<i class="fa fa-group"></i> Membership </a>
  											</li>
  											<li>
  												<a data-toggle="tab" href="#tab_3">
  												<i class="fa fa-leaf"></i> Terms Of Service </a>
  											</li>
  											<li>
  												<a data-toggle="tab" href="#tab_1">
  												<i class="fa fa-info-circle"></i> License Terms </a>
  											</li>
  											<li>
  												<a data-toggle="tab" href="#tab_2">
  												<i class="fa fa-tint"></i> Payment Rules </a>
  											</li>
  											<li>
  												<a data-toggle="tab" href="#tab_3">
  												<i class="fa fa-plus"></i> Other Questions </a>
  											</li>
  										</ul>
  									</div>
  									<div class="col-md-9">
  										<div class="tab-content">
  											<div id="tab_1" class="tab-pane active">
  												<div id="accordion1" class="panel-group">
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
  															1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
  															</h4>
  														</div>
  														<div id="accordion1_1" class="panel-collapse collapse in">
  															<div class="panel-body">
  																 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
  															2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
  															</h4>
  														</div>
  														<div id="accordion1_2" class="panel-collapse collapse">
  															<div class="panel-body">
  																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-success">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
  															3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
  															</h4>
  														</div>
  														<div id="accordion1_3" class="panel-collapse collapse">
  															<div class="panel-body">
  																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-warning">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
  															4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
  															</h4>
  														</div>
  														<div id="accordion1_4" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-danger">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
  															5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
  															</h4>
  														</div>
  														<div id="accordion1_5" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
  															6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
  															</h4>
  														</div>
  														<div id="accordion1_6" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
  															7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
  															</h4>
  														</div>
  														<div id="accordion1_7" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  												</div>
  											</div>
  											<div id="tab_2" class="tab-pane">
  												<div id="accordion2" class="panel-group">
  													<div class="panel panel-warning">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1">
  															1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
  															</h4>
  														</div>
  														<div id="accordion2_1" class="panel-collapse collapse in">
  															<div class="panel-body">
  																<p>
  																	 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  																</p>
  																<p>
  																	 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  																</p>
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-danger">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2">
  															2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
  															</h4>
  														</div>
  														<div id="accordion2_2" class="panel-collapse collapse">
  															<div class="panel-body">
  																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-success">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3">
  															3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
  															</h4>
  														</div>
  														<div id="accordion2_3" class="panel-collapse collapse">
  															<div class="panel-body">
  																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4">
  															4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
  															</h4>
  														</div>
  														<div id="accordion2_4" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5">
  															5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
  															</h4>
  														</div>
  														<div id="accordion2_5" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6">
  															6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
  															</h4>
  														</div>
  														<div id="accordion2_6" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7">
  															7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
  															</h4>
  														</div>
  														<div id="accordion2_7" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  												</div>
  											</div>
  											<div id="tab_3" class="tab-pane">
  												<div id="accordion3" class="panel-group">
  													<div class="panel panel-danger">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1">
  															1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
  															</h4>
  														</div>
  														<div id="accordion3_1" class="panel-collapse collapse in">
  															<div class="panel-body">
  																<p>
  																	 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
  																</p>
  																<p>
  																	 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
  																</p>
  																<p>
  																	 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  																</p>
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-success">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2">
  															2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
  															</h4>
  														</div>
  														<div id="accordion3_2" class="panel-collapse collapse">
  															<div class="panel-body">
  																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3">
  															3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
  															</h4>
  														</div>
  														<div id="accordion3_3" class="panel-collapse collapse">
  															<div class="panel-body">
  																 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4">
  															4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
  															</h4>
  														</div>
  														<div id="accordion3_4" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5">
  															5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
  															</h4>
  														</div>
  														<div id="accordion3_5" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6">
  															6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
  															</h4>
  														</div>
  														<div id="accordion3_6" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  													<div class="panel panel-default">
  														<div class="panel-heading">
  															<h4 class="panel-title">
  															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7">
  															7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
  															</h4>
  														</div>
  														<div id="accordion3_7" class="panel-collapse collapse">
  															<div class="panel-body">
  																 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
  															</div>
  														</div>
  													</div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
  							<!--end tab-pane-->
  						</div>
  					</div>
  					<!--END TABS-->
  				</div>
  			</div>

      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
