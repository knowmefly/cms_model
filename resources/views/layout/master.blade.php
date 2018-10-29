<!DOCTYPE html>
<html>
<head>
    <?php error_reporting(E_ALL^E_NOTICE);  //屏蔽NOTICE级错误
    //SESSION验证
    session_start();
    if ($_SESSION["admin_name"] == "")
    {
        echo "<script>alert('您尚未登录，请登录后再访问！');window.location.href='login';</script>";
    }

    ?>
    <meta charset="UTF-8">
    <title>大连海事大学废弃物再生工程技术研究中心</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="admin">首页</a></li>
                <li><a href="index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href=""><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="show?rout=admin.dync&table=evarese"><i class="icon-font">&#xe008;</i>研究方向</a></li>
                        <li><a href="show?rout=admin.poly&table=evaVTme"><i class="icon-font">&#xe005;</i>团队成员</a></li>
                        <li><a href="show?rout=admin.othe&table=evascie"><i class="icon-font">&#xe004;</i>科研项目</a></li>
                        <li><a href="show?rout=admin.poin&table=evaacad"><i class="icon-font">&#xe006;</i>学术成果</a></li>
                        <li><a href="show?rout=admin.know&table=evalabo"><i class="icon-font">&#xe006;</i>实验设备</a></li>
                        <li><a href="show?rout=admin.revw&table=evastud"><i class="icon-font">&#xe006;</i>学生天地</a></li>
                        <li><a href="show?rout=admin.revw&table=evacont"><i class="icon-font">&#xe006;</i>联系方式</a></li>
                        <li><a href="show?rout=admin.revw&table=evanews"><i class="icon-font">&#xe006;</i>新闻</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        @yield('content')
    </div>
    <!--/main-->
</div>
</body>
<script type="text/javascript">
    var date = document.get
</script>
</html>