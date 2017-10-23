<?php

/* Backend/layout.html.twig */
class __TwigTemplate_c54a91cfc67c206963e355a6d6af71619244d7115d77873113d86a91c0b8cf8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/assets/Backend/images/favicon.png\">
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"/assets/Backend/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"/assets/Backend/css/style.css\" rel=\"stylesheet\">
    <!-- You can change the theme colors from here -->
    <link href=\"/assets/Backend/css/colors/blue.css\" id=\"theme\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
    ";
        // line 25
        $this->displayBlock('css', $context, $blocks);
        // line 26
        echo "</head>
<body class=\"fix-header card-no-border logo-center\">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class=\"preloader\">
        <svg class=\"circular\" viewBox=\"25 25 50 50\">
            <circle class=\"path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"2\" stroke-miterlimit=\"10\" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id=\"main-wrapper\">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class=\"topbar\">
            <nav class=\"navbar top-navbar navbar-expand-md navbar-light\">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class=\"navbar-header\">
                   <a class=\"navbar-brand\" href=\"/admin\">
                        <img src=\"/assets/Backend/images/logo-icon.png\" alt=\"homepage\" class=\"dark-logo\" />
                        <img src=\"/assets/Backend/images/logo-light-icon.png\" alt=\"homepage\" class=\"light-logo\" />
                        <span style=\"color:#fff;\">JAYBranding</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class=\"navbar-collapse\">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class=\"navbar-nav mr-auto mt-md-0\">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class=\"navbar-nav my-lg-0\">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"/assets/Backend/images/users/1.jpg\" alt=\"user\" class=\"profile-pic\" /></a>
                            <div class=\"dropdown-menu dropdown-menu-right scale-up\">
                                <ul class=\"dropdown-user\">
                                    <li>
                                        <div class=\"dw-user-box\">
                                            <div class=\"u-img\"><img src=\"/assets/Backend/images/users/1.jpg\" alt=\"user\"></div>
                                            <div class=\"u-text\">
                                                <h4>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "fullname", array()), "html", null, true);
        echo "</h4>
                                                <p class=\"text-muted\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "username", array()), "html", null, true);
        echo "</p><a href=\"thong-tin-tai-khoan\" class=\"btn btn-rounded btn-danger btn-sm\">Xem thông tin</a></div>
                                        </div>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"/tai-khoan/profiles\"><i class=\"ti-user\"></i> Thông tin tài khoản</a></li>
                                    ";
        // line 84
        if (twig_in_filter("Admin", twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "roles", array()))) {
            // line 85
            echo "                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"/tai-khoan\"><i class=\"mdi mdi-account-multiple\"></i> Danh sách tài khoản</a></li>
                                    ";
        }
        // line 88
        echo "
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"/tai-khoan/change-password\"><i class=\"ti-settings\"></i> Đổi mật khẩu</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"/admin/logout\"><i class=\"fa fa-power-off\"></i> Đăng xuất</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class=\"left-sidebar\">
            <!-- Sidebar scroll-->
            <div class=\"scroll-sidebar\">
                <!-- Sidebar navigation-->
                <nav class=\"sidebar-nav\">
                    <ul id=\"sidebarnav\">
                        <li class=\"nav-small-cap\">PERSONAL</li>
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-apps\"></i><span class=\"hide-menu\">Quản lý chung</span></a>
                            <ul aria-expanded=\"false\" class=\"collapse\">
                                <li><a href=\"/loai-san-pham\">Loại sản phẩm</a></li>
                                <li><a href=\"/nha-san-xuat\">Nhà sản xuất</a></li>
                                <li><a href=\"/nhom-san-pham\">Nhóm sản phẩm</a></li>
                                <li><a href=\"/thuoc-tinh-san-pham\">Thuộc tính sản phẩm</a></li>
                                <li><a href=\"/don-vi-tien-te\">Đơn vị tiền tệ</a></li>
                            </ul>
                        </li>
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-book-plus\"></i><span class=\"hide-menu\">Đơn hàng</span></a>
                            <ul aria-expanded=\"false\" class=\"collapse\">
                                <li><a href=\"don-hang?status=all\">Tất cả</a></li>
                                <li><a href=\"don-hang?status=0\">Chờ xử lý</a></li>
                                <li><a href=\"don-hang?status=1\">Đang xử lý</a></li>
                                <li><a href=\"don-hang?status=2\">Hoàn tất</a></li>
                                <li><a href=\"don-hang?status=3\">Đơn hàng hủy</a></li>
                            </ul>
                        </li>
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-truck-delivery\"></i><span class=\"hide-menu\">Vận chuyển</span></a>
                            <ul aria-expanded=\"false\" class=\"collapse\">
                                <li><a href=\"tong-quan-van-chuyen\">Tổng quan</a></li>
                                <li><a href=\"van-chuyen\">Vận chuyển</a></li>
                                <li><a href=\"quan-ly-thu-ho\">Quản lý thu hộ</a></li>
                                <li><a href=\"cau-hinh-van-chuyen\">Cấu hình</a></li>
                            </ul>
                        </li>
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-trophy\"></i><span class=\"hide-menu\">Sản phẩm</span></a>
                            <ul aria-expanded=\"false\" class=\"collapse\">
                                <li><a href=\"san-pham\">Tất cả sản phẩm</a></li>
                                <li><a href=\"nhom-san-pham\">Nhóm sản phẩm</a></li>
                                <li><a href=\"san-pham-ton-kho\">Tồn kho</a></li>
                            </ul>
                        </li>
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"khach-hang\" aria-expanded=\"false\"><i class=\"mdi mdi-human-male-female\"></i><span class=\"hide-menu\">Khách hàng</span></a></li>
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"bao-cao\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-areaspline\"></i><span class=\"hide-menu\">Báo cáo</span></a></li>
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"khuyen-mai\" aria-expanded=\"false\"><i class=\"mdi mdi-bullseye\"></i><span class=\"hide-menu\">Khuyến mãi</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class=\"page-wrapper\">
            ";
        // line 156
        $this->displayBlock('body', $context, $blocks);
        // line 157
        echo "            <footer class=\"footer\">
                © 2017 JAYBranding
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src=\"/assets/Backend/plugins/jquery/jquery.min.js\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"/assets/Backend/plugins/bootstrap/js/popper.min.js\"></script>
    <script src=\"/assets/Backend/plugins/bootstrap/js/bootstrap.min.js\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"/assets/Backend/js/jquery.slimscroll.js\"></script>
    <!--Wave Effects -->
    <script src=\"/assets/Backend/js/waves.js\"></script>
    <!--Menu sidebar -->
    <script src=\"/assets/Backend/js/sidebarmenu.js\"></script>
    <!--stickey kit -->
    <script src=\"/assets/Backend/plugins/sticky-kit-master/dist/sticky-kit.min.js\"></script>
    <script src=\"/assets/Backend/plugins/sparkline/jquery.sparkline.min.js\"></script>
    <!--Custom JavaScript -->
    <script src=\"/assets/Backend/js/custom.min.js\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"/assets/Backend/plugins/styleswitcher/jQuery.style.switcher.js\"></script>
    ";
        // line 194
        $this->displayBlock('js', $context, $blocks);
        // line 195
        echo "</body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 25
    public function block_css($context, array $blocks = array())
    {
    }

    // line 156
    public function block_body($context, array $blocks = array())
    {
    }

    // line 194
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Backend/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 194,  256 => 156,  251 => 25,  246 => 12,  240 => 195,  238 => 194,  199 => 157,  197 => 156,  127 => 88,  122 => 85,  120 => 84,  112 => 79,  108 => 78,  54 => 26,  52 => 25,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/layout.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\layout.html.twig");
    }
}
