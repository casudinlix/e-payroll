<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <form action="" class="horizontal-form" method="POST">
          <div class="form-body">
            <h3 class="form-section">Edit Menu</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Menu Name</label>
  <input type="text" name="menu" class="form-control" placeholder="Menu Name" autocomplete="off" required='' value="<?php echo $menu->menu ?>">

                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Menu Order</label>
                  <input type="text" value="1" name="order" class="form-control" placeholder="Lim">

                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Publish</label>
                  <select class="form-control select2" name="publish" required='true'>
                    <option value="<?php echo $menu->is_published?>"><?php echo $menu->is_published?></option>
                    <option value="0">No</option>
                    <option value="1">YES</option>
                  </select>
                </div>

              </div>
              <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Parent</label>
                  <select class="form-control select2" name="parent" required='true'>
                    <?php if($parent->parent=="0"):?>
                      <option value="0">Is Root Menu</option>
                      <?php else: ?>
<?php $parentname=$this->db->get_where('tbl_menus',['id'=>$parent->parent])->row();
?>
<option value="<?php echo $parent->parent?>"><?php echo $parent->parent." ".$parentname->menu?></option>
<?php endif;?>
<option value="0">Is Root Menu</option>
    <?php foreach($menulist as $key):?>

 <option value="<?php echo $key->id?>"><?php echo $key->id." ".$key->menu?></option>
<?php endforeach;?>
                  </select>

                </div>
              </div>
              <!--/span-->

            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Link</label>
                  <input type="text" class="form-control" name="link" autocomplete="off" value="<?php echo $menu->link ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Icon</label>
                  <input type="text" class="form-control" name="icon" autocomplete="off" value="<?php echo $menu->icon ?>">
                </div>
              </div>
              <!--/span-->

            </div>
            <!--/row-->

<input type="hidden" name="id" value="<?php echo $menu->id ?>"


          </div>
          <div class="form-actions right">
            <a href="<?php echo site_url('settings/menu') ?>"><button type="button" class="btn default">Cancel</button></a>
            <button type="submit" class="btn blue" name="simpan"><i class="fa fa-check"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
