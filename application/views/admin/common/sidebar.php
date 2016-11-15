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
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
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
        <li><a href="<?php echo base_url('adminpanel/product/add_product') ?>"><i class="fa fa-plus"></i> add product</a></li>
        <li><a href="<?php echo base_url('adminpanel/product/manage_product') ?>"><i class="fa fa-tags"></i> manage product</a></li>
        <li><a href="<?php echo base_url('adminpanel/ads/add_ads') ?>"><i class="fa fa-plus"></i> add ads</a></li>
        <li><a href="<?php echo base_url('adminpanel/ads/manage_ads') ?>"><i class="fa fa-tags"></i> manage ads</a></li>
        <li><a href="<?php echo base_url('adminpanel/ads/add_hit_ads') ?>"><i class="fa fa-plus"></i> add hit ads</a></li>
        <li><a href="<?php echo base_url('adminpanel/ads/manage_hit_ads') ?>"><i class="fa fa-tags"></i> manage hit ads</a></li>
        <li><a href="<?php echo base_url('adminpanel/banner/add_banner') ?>"><i class="fa fa-plus"></i> add banner</a></li>
        <li><a href="<?php echo base_url('adminpanel/banner/manage_banner') ?>"><i class="fa fa-tags"></i> manage banner</a></li>
        </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-truck" aria-hidden="true"></i>
        <span>Delivery</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/delivery/add_delivery') ?>"><i class="fa fa-plus"></i> add delivery slips</a></li>
        <li><a href="<?php echo base_url('adminpanel/delivery/manage_delivery') ?>"><i class="fa fa-file-o"></i> manage delivery slips</a></li>
        <li><a href="<?php echo base_url('adminpanel/shipping/add_shipping') ?>"><i class="fa fa-plus"></i> add shipping</a></li>
        <li><a href="<?php echo base_url('adminpanel/shipping/manage_shipping') ?>"><i class="fa fa-truck"></i> manage shipping</a></li>
      </ul>
    </li>
    <li class="treeview">
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
        <i class="fa fa-book" aria-hidden="true"></i>
        <span>Promotion</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/promotion/add_promotion') ?>"><i class="fa fa-plus"></i>add promotion</a></li>
        <li><a href="<?php echo base_url('adminpanel/promotion/manage_promotion') ?>"><i class="fa fa-book"></i>manage_promotion</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-ticket" aria-hidden="true"></i>
        <span>Voucher</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/voucher/add_voucher') ?>"><i class="fa fa-plus"></i>add voucher</a></li>
        <li><a href="<?php echo base_url('adminpanel/voucher/manage_voucher') ?>"><i class="fa fa-ticket"></i>manage voucher</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <span>Order</span>
        <span class="label label-primary pull-right"></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('adminpanel/order/manage-order') ?>"><i class="fa fa-plus"></i>manage order</a></li>
          <li><a href="<?php echo base_url('adminpanel/order/manage-confirm-payment') ?>"><i class="fa fa-shopping-cart"></i>manage confirm payment</a></li>
      </ul>
    </li>




</section>
<!-- /.sidebar -->
