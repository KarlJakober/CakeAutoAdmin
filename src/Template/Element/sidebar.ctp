<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/cake_auto_admin/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>
      <li class="header">Models</li>
      <?php
      foreach ($modelMenu as $humanized => $classified) { ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span><?= $humanized ?></span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="/cake_auto_admin/<?= $classified ?>"><i class="fa fa-circle-o"></i> View All</a></li>
              <li><a href="/cake_auto_admin/edit/<?= $classified ?>"><i class="fa fa-circle-o"></i> Create New</a></li>
            </ul>
          </li>
      <?php } ?>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
