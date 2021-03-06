<?php

/* Backend/login.html.twig */
class __TwigTemplate_2fa5d9d594256b8323e6848351340db3b7ffd2550c0285798aafc9c9fef3ad38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>Đăng nhập hệ thống</title>
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
</head>

<body>
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
    <section id=\"wrapper\">
        <div class=\"login-register\" style=\"background-image:url(/assets/Backend/images/background/login-register.jpg);\">
            <div class=\"login-box card\">
            <div class=\"card-body\">
                <form class=\"form-horizontal form-material\" id=\"loginform\" action=\"/admin/auth\" method=\"POST\">
                    <h3 class=\"box-title m-b-20\">Đăng nhập hệ thống</h3>
                    ";
        // line 45
        if (($context["msg"] ?? null)) {
            // line 46
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
            echo "</div>
                    ";
        }
        // line 48
        echo "                    <div class=\"form-group \">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"text\" required=\"required\" placeholder=\"Tài khoản\" name=\"username\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\"> </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"password\" required=\"required\" placeholder=\"Mật khẩu\" name=\"password\"> </div>
                    </div>
                    <div class=\"form-group text-center m-t-20\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light\" type=\"submit\">Đăng nhập</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </section>
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
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "Backend/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 50,  73 => 48,  67 => 46,  65 => 45,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>Đăng nhập hệ thống</title>
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
</head>

<body>
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
    <section id=\"wrapper\">
        <div class=\"login-register\" style=\"background-image:url(/assets/Backend/images/background/login-register.jpg);\">
            <div class=\"login-box card\">
            <div class=\"card-body\">
                <form class=\"form-horizontal form-material\" id=\"loginform\" action=\"/admin/auth\" method=\"POST\">
                    <h3 class=\"box-title m-b-20\">Đăng nhập hệ thống</h3>
                    {% if msg %}
                        <div class=\"alert alert-success\">{{ msg }}</div>
                    {% endif %}
                    <div class=\"form-group \">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"text\" required=\"required\" placeholder=\"Tài khoản\" name=\"username\" value=\"{{username}}\"> </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"password\" required=\"required\" placeholder=\"Mật khẩu\" name=\"password\"> </div>
                    </div>
                    <div class=\"form-group text-center m-t-20\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light\" type=\"submit\">Đăng nhập</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </section>
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
</body>

</html>
", "Backend/login.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\login.html.twig");
    }
}
