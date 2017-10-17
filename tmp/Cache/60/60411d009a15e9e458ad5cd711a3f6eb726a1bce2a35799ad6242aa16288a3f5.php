<?php

/* Backend/layout.html.twig */
class __TwigTemplate_31671761eca068a61edb4375dde5c4800ae3341fb3f1db873bb324704f8dc85d extends Twig_Template
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
        // line 13
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
        // line 26
        $this->displayBlock('css', $context, $blocks);
        // line 27
        echo "</head>
<body class=\"fix-header card-no-border logo-center\">
<div id=\"top\"></div>
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
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "fullname", array()), "html", null, true);
        echo "</h4>
                                                <p class=\"text-muted\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "username", array()), "html", null, true);
        echo "</p><a href=\"thong-tin-tai-khoan\" class=\"btn btn-rounded btn-danger btn-sm\">Xem thông tin</a></div>
                                        </div>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"thong-tin-tai-khoan\"><i class=\"ti-user\"></i> Thông tin tài khoản</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"doi-mat-khau\"><i class=\"ti-settings\"></i> Đổi mật khẩu</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"admin/logout\"><i class=\"fa fa-power-off\"></i> Đăng xuất</a></li>
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
                                <li><a href=\"danh-muc-loai-san-pham\">Loại sản phẩm</a></li>
                                <li><a href=\"danh-muc-nha-san-xuat\">Nhà sản xuất</a></li>
                                <li><a href=\"danh-muc-nhom-san-pham\">Nhóm sản phẩm</a></li>
                            </ul>
                        </li>
                        <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-book-plus\"></i><span class=\"hide-menu\">Đơn hàng</span></a>
                            <ul aria-expanded=\"false\" class=\"collapse\">
                                <li><a href=\"don-hang\">Tất cả</a></li>
                                <li><a href=\"don-hang-chua-xy-ly\">Chưa xử lý</a></li>
                                <li><a href=\"don-hang-dang-xu-ly\">Đang xử lý</a></li>
                                <li><a href=\"don-hang-hoan-tat\">Hoàn tất</a></li>
                                <li><a href=\"don-hang-huy\">Đơn hàng hủy</a></li>
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
                                <li><a href=\"nhom-san-ham\">Nhóm sản phẩm</a></li>
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
        // line 151
        $this->displayBlock('body', $context, $blocks);
        // line 152
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
        // line 188
        $this->displayBlock('js', $context, $blocks);
        // line 189
        echo "</body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 26
    public function block_css($context, array $blocks = array())
    {
    }

    // line 151
    public function block_body($context, array $blocks = array())
    {
    }

    // line 188
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
        return array (  250 => 188,  245 => 151,  240 => 26,  235 => 13,  229 => 189,  227 => 188,  189 => 152,  187 => 151,  114 => 81,  110 => 80,  55 => 27,  53 => 26,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/layout.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\layout.html.twig");
    }
}
