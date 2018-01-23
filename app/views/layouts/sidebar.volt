<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <?php
                    if($this->session->has("auth")){
                        $auth = $this->session->get("auth");
                        $username = $auth['username'];
                        echo ' <p>'.$username.'</p>';
                    }
                 ?>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
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
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-money"></i> <span>Keuangan</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  <li><a href="keuHarian"><i class="fa fa-circle-o"></i> Harian</a></li>
                  <li><a href="rekapHarian"><i class="fa fa-circle-o"></i> Rekap Harian</a></li>
                  <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Rekap Bulanan</a></li>
                  <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Rekap Tahunan</a></li>
                  <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Rekap Akun</a></li>
                  <li><a href="../index2.html"><i class="fa fa-circle-o"></i> History</a></li>
                </ul>
              </li>
            <li><a href="user"><i class="fa fa-user"></i> <span>User</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>