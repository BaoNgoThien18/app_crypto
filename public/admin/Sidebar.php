<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?=$url?>" class="nav-link">Home</a>
                </li>
              
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
           

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class=" mt-3 pb-3 mb-3 d-flex">
                    <div class="">

                        <img width="200px" src="<?=$BNZ->site('logo')?>" class=""
                            alt="BNZ">
                    </div>
                   
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">


                      
                        <li class="nav-item">
                            <a href="<?=$url?>Admin/Home" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">


                      
                        <li class="nav-item">
                            <a href="<?=$url?>Admin/Users" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">


                      
                        <li class="nav-item">
                            <a href="<?=$url?>Admin/TaoGiaoDich" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Giao dịch
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">


                      
                        <li class="nav-item">
                            <a href="<?=$url?>Admin/Setting" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Cấu hình
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>