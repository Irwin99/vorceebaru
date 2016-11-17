<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
      <a href="<?php echo base_url('adminpanel/dashboard')?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span>Users</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/user/add-user') ?>"><i class="fa fa-circle-o"></i> add user</a></li>
        <li><a href="<?php echo base_url('adminpanel/user/manage-user') ?>"><i class="fa fa-circle-o"></i> manage user</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-tags" aria-hidden="true"></i>
        <span>Catalog</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/category/add_category') ?>"><i class="fa fa-plus"></i> add category</a></li>
        <li><a href="<?php echo base_url('adminpanel/category/manage_category') ?>"><i class="fa fa-sitemap"></i> manage category</a></li>
        <!-- <li><a href="<?php echo base_url('adminpanel/product/add_product') ?>"><i class="fa fa-plus"></i> add product</a></li>
        <li><a href="<?php echo base_url('adminpanel/product/manage_product') ?>"><i class="fa fa-tags"></i> manage product</a></li> -->
        <li><a href="<?php echo base_url('adminpanel/workshop/add_workshop') ?>"><i class="fa fa-plus"></i> add workshop</a></li>
        <li><a href="<?php echo base_url('adminpanel/workshop/manage_workshop') ?>"><i class="fa fa-tags"></i> manage workshop</a></li>
        </ul>
    </li>
    <!-- <li class="treeview">
      <a href="#">
        <i class="fa fa-usd" aria-hidden="true"></i>
        <span>Tip</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo base_url('adminpanel/tip/add_tip') ?>"><i class="fa fa-plus"></i>add tip</a></li>
          <li><a href="<?php echo base_url('adminpanel/tip/manage_tip') ?>"><i class="fa fa-usd"></i>manage tip</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-gear" aria-hidden="true"></i>
        <span>Setting</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/setting/edit_setting') ?>"><i class="fa fa-gear"></i>edit setting</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-money" aria-hidden="true"></i>
        <span>Payment</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/payment/add-payment') ?>"><i class="fa fa-plus"></i>Add Payment</a></li>
          <li><a href="<?php echo base_url('adminpanel/payment/manage-payment') ?>"><i class="fa fa-shopping-cart"></i>Manage Payment</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span>Class</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/class/add-class') ?>"><i class="fa fa-plus"></i>Add Class</a></li>
          <li><a href="<?php echo base_url('adminpanel/class/manage-class') ?>"><i class="fa fa-shopping-cart"></i>Manage Class</a></li>
      </ul>
    </li> -->
</section>
<!-- /.sidebar -->
