<?php

/* Backend/Users/add.html.twig */
class __TwigTemplate_12ae0ccd433c25d1ac4cda6ddc9905488326d7c56fcda9586d6d9c587441b26e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Users/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
    <link href=\"/assets/Backend/plugins/switchery/dist/switchery.min.css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/tai-khoan\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Thêm tài khoản người dùng</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <form action=\"/tai-khoan/create\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
                            <div class=\"form-body\">
                                <h3 class=\"card-title\">Thông tin tài khoản</h3>
                                <hr>
                                ";
        // line 27
        if (($context["msg"] ?? null)) {
            // line 28
            echo "                                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
            echo "</div>
                                ";
        }
        // line 30
        echo "                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Email</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"Email (tài khoản)\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Họ tên</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" id=\"fullname\" name=\"fullname\" class=\"form-control\" placeholder=\"Họ tên\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "fullname", array()), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Mật khẩu</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Mật khẩu\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "password", array()), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Quyền</label>
                                            <div class=\"col-md-6\">
                                                <select class=\"select2 m-b-10 select2-multiple\" name=\"id_parent[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn quyền\">
                                                    <option value=\"\">Chọn quyền</option>}
                                                    ";
        // line 67
        if (($context["roles"] ?? null)) {
            // line 68
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 69
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                                    ";
        }
        // line 72
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-md-3 switchery-demo\">
                                                Hoạt động:&nbsp;&nbsp;&nbsp;
                                                <input type=\"checkbox\" name=\"status\" id=\"status\" checked class=\"js-switch\" data-color=\"#009efb\" value=\"1\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Hình ảnh</label>
                                            <div class=\"col-md-2\">
                                                <input type=\"file\" name=\"dinhkem[]\" class=\"dinhkem btn btn-info\" multiple accept=\"image/*\" placeholder=\"Chọn hình ảnh\" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\"></div>
                            </div>
                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-info\"> <i class=\"fa fa-check\"></i> Cập nhật</button>
                                <a href=\"/tai-khoan\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 106
    public function block_js($context, array $blocks = array())
    {
        // line 107
        echo "    <script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js\"></script>
    <!--<script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js\"></script>-->
    <script src=\"/assets/Backend/plugins/footable/js/footable.all.min.js\"></script>
    <script src=\"/assets/Backend/js/footable-init.js\"></script>
    <script src=\"/assets/Backend/plugins/styleswitcher/jQuery.style.switcher.js\"></script>
    <script src=\"/assets/Backend/plugins/switchery/dist/switchery.min.js\"></script>
    <script src=\"/assets/Backend/js/themsanpham.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
         \$(document).ready(function() {
            \$(\".select2\").select2();upload_hinhanh();delete_hinhanh();popup_images();
            \$('.js-switch').each(function() {
                new Switchery(\$(this)[0], \$(this).data());
            });

            \$('.top').click(function(){
              \$('html, body').animate({
                scrollTop: \$( \$.attr(this, 'href') ).offset().top
              }, 500);
              return false;
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Users/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 107,  182 => 106,  146 => 72,  143 => 71,  132 => 69,  127 => 68,  125 => 67,  110 => 55,  97 => 45,  84 => 35,  77 => 30,  71 => 28,  69 => 27,  50 => 10,  47 => 9,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Users/add.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\Users\\add.html.twig");
    }
}
