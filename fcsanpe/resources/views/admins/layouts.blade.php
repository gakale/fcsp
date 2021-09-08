<!DOCTYPE html>
<html>
@include('../admins/entets-dashs')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="/index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>Fc</b>Sp</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Fc</b>Sanpedro</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                       
                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="/../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Admin - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            {{--            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
<<<<<<< HEAD
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="#" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p> Fc Sanpedro</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
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
                <li class="active treeview">
                  <a href="dashboard">
                    <i class="fa fa-dashboard"></i> <span>Tableau de Bord</span>
        
                  </a>
        
                </li>
        
        
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Gestion Personnel</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{route('joueurs.index')}}"><i class="fa fa-user-secret"></i>Joueurs</a></li>
                    <li><a href="#"><i class="fa fa-users"></i>Equipes</a></li>
                      <li><a href="#"><i class="fa fa-send"></i>Fourniseur</a></li>
                    <li><a href="#"><i class="fa fa-opera"></i>Operateur</a></li>
        
                  </ul>
                </li>
        
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-edit"></i> <span>Gestion competion</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-book"></i>Les Compétion</a></li>
                    <li><a href="#"><i class="fa fa-chain"></i> Match</a></li>
                    <li><a href="#"><i class="fa fa-calendar"></i>Saison</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-car"></i> <span>Le Staff  </span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="vehicule"><i class="fa fa-car"></i>liste Staff</a></li>
                  </ul>
                </li>
        
                <li>
                  <a href="mail">
                    <i class="fa fa-envelope"></i> <span>Mail</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-yellow">Ecrire Message</small>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-folder"></i> <span>Caterogie</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Les Categories</a></li>
        
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-cog"></i> <span>Les buts</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-cog"></i>Buts</a></li>
                    <li class="treeview">
                  </ul>
                </li>
              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                @yield('grands')
                <small>@yield('petit-text')</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">@yield('grand-text')</li>
              </ol>
            </section>
=======
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="/../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                   
                </div>
                
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                        <a href="dashboard">
                            <i class="fa fa-dashboard"></i> <span>Tableau de Bord</span>

                        </a>

                    </li>


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Gestion Personnel</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-user-secret"></i>Joueurs</a></li>
                            <li><a href="#"><i class="fa fa-taxi"></i>Equipes</a></li>
                            <li><a href="#"><i class="fa fa-send"></i>Staff</a></li>
                            <li><a href="#"><i class="fa fa-opera"></i>Categorie</a></li>

                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Gestion Mission</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-book"></i> Rédaction</a></li>
                            <li><a href="#"><i class="fa fa-chain"></i> Mission en coure</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>Course</a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i>Courses en coure</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-car"></i> <span>Gestion Vehicule</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-car"></i>Ajout Voiture</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="mail">
                            <i class="fa fa-envelope"></i> <span>Mail</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-yellow">Ecrire Message</small>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>PANNE</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>Panne</a></li>
                            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i>Top 10 Panne</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cog"></i> <span>GARAGE</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-cog"></i>Entretient</a></li>
                            <li class="treeview">

                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-users"></i> <span>Assurance</span></a></li>

                        <li><a href="documents"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                        <li class="header">LABELS</li>
                        <li><a href="#"><i class="fa fa-thermometer-full text-red"></i> <span>CARBURANT</span></a></li>
                        <li><a href="#"><i class="fa fa-share text-yellow"></i> <span>STOCK</span></a></li>
                        <li><a href="#"><i class="fa fa-map text-aqua"></i> <span>GPS</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @yield('grands')
                        <small>@yield('petit-text')</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">@yield('grand-text')</li>
                    </ol>
                </section>

>>>>>>> aab7de708f137049a812198f97b9710e53624831
                <!-- Main content -->
                {{--    c'est ici que nous avons inséré le dashboad--}}
                @yield('content')
            </div>
            <!-- /.content-wrapper -->
           
           
            <!-- /.control-sidebar -->
            <!-- Add the sidebar s background. This div must be placed
                immediately after the control sidebar -->
                <div class="control-sidebar-bg"></div>
            </div>
            <!-- ./wrapper -->


            @include('../admins/pieds-dahs')



        </body>
        </html>

