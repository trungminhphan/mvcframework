<?php

/* Backend/Users/add.html.twig */
class __TwigTemplate_89e46ae645c79f360a6e8c020a4e75596bf5cdce3bf62d2316fe5ec5e06be672 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Thêm tài khoản người dùng";
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
    <link href=\"/assets/Backend/plugins/switchery/dist/switchery.min.css\" rel=\"stylesheet\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
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
        // line 26
        if (($context["msg"] ?? null)) {
            // line 27
            echo "                                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
            echo "</div>
                                ";
        }
        // line 29
        echo "                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Email</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"Email (tài khoản)\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "\" required />
                                            </div>
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Mật khẩu</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Mật khẩu\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "password", array()), "html", null, true);
        echo "\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Họ tên</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"text\" id=\"fullname\" name=\"fullname\" class=\"form-control\" placeholder=\"Họ tên\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "fullname", array()), "html", null, true);
        echo "\">
                                            </div>
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Điện thoại</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Điện thoại\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "phone", array()), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Địa chỉ</label>
                                            <div class=\"col-md-10\">
                                                <input type=\"text\" id=\"address\" name=\"address\" class=\"form-control\" placeholder=\"Địa chỉ\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "address", array()), "html", null, true);
        echo "\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Quyền</label>
                                            <div class=\"col-md-6\">
                                                <select class=\"select2 m-b-10 select2-multiple\" name=\"roles[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn quyền\">
                                                    <option value=\"\">Chọn quyền</option>}
                                                    ";
        // line 75
        if (($context["roles"] ?? null)) {
            // line 76
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["role"]) {
                // line 77
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["role"], twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "roles", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                                    ";
        }
        // line 80
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-md-3 switchery-demo\">
                                                Hoạt động:&nbsp;&nbsp;&nbsp;
                                                <input type=\"checkbox\" name=\"status\" id=\"status\" ";
        // line 84
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "status", array()) == 1)) {
            echo " checked  ";
        }
        echo " class=\"js-switch\" data-color=\"#009efb\" value=\"1\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Hình ảnh</label>
                                            <div class=\"col-md-2\">
                                              <label class=\"btn btn-info\">
                                                <input type=\"file\" name=\"dinhkem[]\" class=\"dinhkem btn btn-info\" multiple accept=\"image/*\" placeholder=\"Chọn hình ảnh\" style=\"display:none;\" />
                                                <i class=\"fa fa-file-photo-o\"></i> Chọn hình ảnh
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\">
                                    ";
        // line 103
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_aliasname", array())) {
            // line 104
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_aliasname", array()));
            foreach ($context['_seq'] as $context["key"] => $context["ha"]) {
                // line 105
                echo "                                            <div class=\"col-lg-3 col-md-6 items\">
                                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"";
                // line 106
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" readonly/>
                                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "\" class=\"form-control\"/>
                                                <div class=\"card\">
                                                    <div class=\"el-card-item\">
                                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/";
                // line 110
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "\" />
                                                            <div class=\"el-overlay\">
                                                                <ul class=\"el-info\">
                                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/";
                // line 113
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file=";
                // line 114
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=\"el-card-content\">
                                                            <h3 class=\"box-title\">";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "</h3><br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['ha'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                    ";
        }
        // line 126
        echo "                                </div>
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

    // line 141
    public function block_js($context, array $blocks = array())
    {
        // line 142
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
        return array (  270 => 142,  267 => 141,  250 => 126,  247 => 125,  235 => 119,  227 => 114,  223 => 113,  215 => 110,  209 => 107,  205 => 106,  202 => 105,  197 => 104,  195 => 103,  171 => 84,  165 => 80,  162 => 79,  147 => 77,  142 => 76,  140 => 75,  124 => 62,  111 => 52,  104 => 48,  91 => 38,  84 => 34,  77 => 29,  71 => 27,  69 => 26,  50 => 9,  47 => 8,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block title %}Thêm tài khoản người dùng{% endblock %}
{% block css%}
    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
    <link href=\"/assets/Backend/plugins/switchery/dist/switchery.min.css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
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
                                {% if msg %}
                                    <div class=\"alert alert-success\">{{msg}}</div>
                                {% endif %}
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Email</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"Email (tài khoản)\" value=\"{{user.username}}\" required />
                                            </div>
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Mật khẩu</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Mật khẩu\" value=\"{{user.password}}\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Họ tên</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"text\" id=\"fullname\" name=\"fullname\" class=\"form-control\" placeholder=\"Họ tên\" value=\"{{user.fullname}}\">
                                            </div>
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Điện thoại</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Điện thoại\" value=\"{{user.phone}}\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Địa chỉ</label>
                                            <div class=\"col-md-10\">
                                                <input type=\"text\" id=\"address\" name=\"address\" class=\"form-control\" placeholder=\"Địa chỉ\" value=\"{{user.address}}\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Quyền</label>
                                            <div class=\"col-md-6\">
                                                <select class=\"select2 m-b-10 select2-multiple\" name=\"roles[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn quyền\">
                                                    <option value=\"\">Chọn quyền</option>}
                                                    {% if roles %}
                                                        {% for key, role in roles %}
                                                            <option value=\"{{role}}\" {% if role in user.roles %} selected {% endif %}>{{role}}</option>
                                                        {% endfor %}
                                                    {% endif %}
                                                </select>
                                            </div>
                                            <div class=\"col-md-3 switchery-demo\">
                                                Hoạt động:&nbsp;&nbsp;&nbsp;
                                                <input type=\"checkbox\" name=\"status\" id=\"status\" {% if user.status == 1 %} checked  {% endif %} class=\"js-switch\" data-color=\"#009efb\" value=\"1\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Hình ảnh</label>
                                            <div class=\"col-md-2\">
                                              <label class=\"btn btn-info\">
                                                <input type=\"file\" name=\"dinhkem[]\" class=\"dinhkem btn btn-info\" multiple accept=\"image/*\" placeholder=\"Chọn hình ảnh\" style=\"display:none;\" />
                                                <i class=\"fa fa-file-photo-o\"></i> Chọn hình ảnh
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\">
                                    {% if user.hinhanh_aliasname %}
                                        {% for key,ha in user.hinhanh_aliasname %}
                                            <div class=\"col-lg-3 col-md-6 items\">
                                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"{{ha}}\" readonly/>
                                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"{{user.hinhanh_filename[key]}}\" class=\"form-control\"/>
                                                <div class=\"card\">
                                                    <div class=\"el-card-item\">
                                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/{{ha}}\" alt=\"{{user.hinhanh_filename[key]}}\" />
                                                            <div class=\"el-overlay\">
                                                                <ul class=\"el-info\">
                                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/{{ha}}\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file={{ha}}\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=\"el-card-content\">
                                                            <h3 class=\"box-title\">{{user.hinhanh_filename[key]}}</h3><br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}
                                </div>
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

{% endblock %}

{% block js%}
    <script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
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
{% endblock %}
", "Backend/Users/add.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Users\\add.html.twig");
    }
}
