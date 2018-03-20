<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo ITQ_BASE_URL; ?> ">
    <title>
        <?php echo isset($seo['title']) ? htmlspecialchars($seo['title']) : ""; ?>
    </title>
    <meta name="keyword" content="<?php echo isset($seo['keyword']) ? $seo['keyword'] : " " ?>">
    <meta name="description" content="<?php echo isset($seo['description']) ? $seo['description'] : " " ?>">
    <link rel="stylesheet" type="text/css" href="public/template/backend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/template/backend/css/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="public/template/backend/css/style-admin.css">
    <link rel="stylesheet" type="text/css" href="public/template/backend/css/util.css">
    <link rel="stylesheet" type="text/css" href="public/template/backend/css/main.css">
    <link rel="stylesheet" type="text/css" href="public/template/backend/css/custom.css">
    <link rel="stylesheet" type="text/css" href="public/template/backend/font-awesome/css/font-awesome.min.css">
    <style type="text/css">
    .error li {
        color: red;
    }
    </style>
    <!--===========================================================================================-->
</head>
<div class="admin-wapper">
    <div>
        <div class="header-admin">
            <div class="col-md-6">
                <div class="title-logo">Admin - <?php echo  $data['auth']['fullname'] ?></div>
            </div>
            <div class="col-md-6">
                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="backend\account\infor"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="backend\account\change_password"><i class="fa fa-gear fa-fw"></i> Change password</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo ITQ_BASE_URL.'backend/auth/logout'; ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <div class="menu-left">
                <!-- Navigation -->
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- /.navbar-header -->
                    <div class="navbar-admin sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#">List Category</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Category</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#">List Product</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Product</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="backend/user/group">List group</a>
                                        </li>
                                        <li>
                                            <a href="backend/user/addgroup">Add group</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
            <?php $this->load->view($template, isset($data) ? $data : NULL); ?>
        </div>
    </div>
</div>

<body>
    <!--===============================================================================================-->
    <script src="public/template/backend/js/jquery-2.1.1.js"></script>
    <script src="public/template/backend/js/bootstrap.min.js"></script>
    <script src="public/template/backend/js/main.js"></script>
    <script src="public/template/backend/js/metisMenu.min.js"></script>
    <script src="public/template/backend/js/sb-admin-2.js"></script>
</body>

</html>