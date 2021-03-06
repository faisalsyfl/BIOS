<!doctype html>
<html lang="en">
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?=base_url(); ?>assets/img/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard | EIS B4T</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="//www.creative-tim.com/product/material-dashboard-pro" />

    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?=base_url(); ?>assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="<?=base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?=base_url(); ?>assets/css/google-roboto-300-700.css" rel="stylesheet" />
    <style type="text/css" media="screen">
        .ct-chart .ct-legend {
          position: relative;
          z-index: 10;
          list-style: none;
          text-align: center;
        }
        .ct-chart .ct-legend li {
          position: relative;
          padding-left: 23px;
          margin-right: 10px;
          margin-bottom: 3px;
          cursor: pointer;
          display: inline-block;
        }
        .ct-chart .ct-legend li:before {
          width: 12px;
          height: 12px;
          position: absolute;
          left: 0;
          content: "";
          border: 3px solid transparent;
          border-radius: 2px;
        }
        .ct-chart .ct-legend li .inactive:before {
          background: transparent;
        }
        .ct-chart .ct-legend li:nth-child(1)::before {
          background-color: #00bcd4;
        }
        .ct-chart .ct-legend li:nth-child(2)::before {
          background-color: #f05b4f;
        }
        .ct-chart .ct-legend li:nth-child(3)::before {
          background-color: #f4c63d;
        }
        .ct-chart .ct-legend li:nth-child(1n + 4)::before {
          background-color: #f06292;
        }
        .ct-chart .ct-legend .ct-legend-inside {
          position: absolute;
          top: 0;
          right: 0;
        }
        .modal-small .modal-body {
             margin-top: 0px; 
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?=base_url(); ?>assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Dashboard <b> B4T</b>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item <?php if($this->uri->segment(1) == "") echo "active"; ?>">
                        <a class="nav-link" href="<?=base_url(); ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == "Bios") echo "active"; ?>">
                        <a class="nav-link" href="<?=base_url(); ?>Bios">
                            <i class="fa fa-refresh"></i>
                            <p>Web Service BIOS</p>
                        </a>
                    </li>
<!--                     <li class="nav-item <?php if($this->uri->segment(1) == "Services") echo "active"; ?>">
    <a class="nav-link" href="<?=base_url(); ?>Services">
        <i class="material-icons">group_work</i>
        <p>Services Recap</p>
    </a>
</li> -->
                    <li class="nav-item <?php if($this->uri->segment(1) == "Testing") echo "active"; ?>">
                        <a class="nav-link" href="<?=base_url(); ?>Testing">
                            <i class="material-icons">build</i>
                            <p>Testing</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == "Certification") echo "active"; ?>">
                        <a class="nav-link" href="<?=base_url(); ?>Certification">
                            <i class="material-icons">description</i>
                            <p>Certification</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == "Inspection") echo "active"; ?>">
                        <a class="nav-link" href="<?=base_url(); ?>Services">
                            <i class="material-icons">business</i>
                            <p>Inspection</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == "Training") echo "active"; ?>">
                        <a class="nav-link" href="<?=base_url(); ?>Services">
                            <i class="material-icons">supervisor_account</i>
                            <p>Training</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == "Research") echo "active"; ?>">
                        <a class="nav-link" href="<?=base_url(); ?>Services">
                            <i class="material-icons">wb_incandescent</i>
                            <p>Research & Engineering</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Executive Information System <b>B4T</b> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>