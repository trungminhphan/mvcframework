<?php

/* Backend/Customer/edit.html.twig */
class __TwigTemplate_69f71f6785daaa523cd6bb03eb0aef258a4f812c6520addb62a0b6abe60cee90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Customer/edit.html.twig", 1);
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
        echo "Chỉnh sửa tài khoản khách hàng";
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
            <h3 class=\"text-themecolor\"><a href=\"/khach-hang\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Chỉnh sửa tài khoản khách hàng</h3>
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
                        <form action=\"/khach-hang/update\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "_id", array()), "html", null, true);
        echo "\">
                            <div class=\"form-body\">
                                <h3 class=\"card-title\">Thông tin tài khoản</h3>
                                <hr>
                                ";
        // line 28
        if (($context["msg"] ?? null)) {
            // line 29
            echo "                                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
            echo "</div>
                                ";
        }
        // line 31
        echo "                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Email</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"Email (tài khoản)\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "\" required  readonly/>
                                            </div>
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Mật khẩu</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Mật khẩu\" value=\"";
        // line 40
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
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "fullname", array()), "html", null, true);
        echo "\">
                                            </div>
                                            <label class=\"control-label col-md-2 text-right p-t-10\">Điện thoại</label>
                                            <div class=\"col-md-4\">
                                                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Điện thoại\" value=\"";
        // line 54
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
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "address", array()), "html", null, true);
        echo "\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-2 text-right p-t-10\"></label>
                                            <div class=\"col-md-3 switchery-demo\">
                                                Hoạt động:&nbsp;&nbsp;&nbsp;
                                                <input type=\"checkbox\" name=\"status\" id=\"status\" ";
        // line 76
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
                                                <i class=\"fa fa-file-photo-o\"></i> Chọn hình ảnh 600x600
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\">
                                    ";
        // line 95
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_aliasname", array())) {
            // line 96
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_aliasname", array()));
            foreach ($context['_seq'] as $context["key"] => $context["ha"]) {
                // line 97
                echo "                                            <div class=\"col-lg-3 col-md-6 items\">
                                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"";
                // line 98
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" readonly/>
                                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "\" class=\"form-control\"/>
                                                <div class=\"card\">
                                                    <div class=\"el-card-item\">
                                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/";
                // line 102
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "\" />
                                                            <div class=\"el-overlay\">
                                                                <ul class=\"el-info\">
                                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/";
                // line 105
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file=";
                // line 106
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=\"el-card-content\">
                                                            <h3 class=\"box-title\">";
                // line 111
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
            // line 117
            echo "                                    ";
        }
        // line 118
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

    // line 133
    public function block_js($context, array $blocks = array())
    {
        // line 134
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
        return "Backend/Customer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 134,  239 => 133,  222 => 118,  219 => 117,  207 => 111,  199 => 106,  195 => 105,  187 => 102,  181 => 99,  177 => 98,  174 => 97,  169 => 96,  167 => 95,  143 => 76,  128 => 64,  115 => 54,  108 => 50,  95 => 40,  88 => 36,  81 => 31,  75 => 29,  73 => 28,  66 => 24,  50 => 10,  47 => 9,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}

{% block title %}Chỉnh sửa tài khoản khách hàng{% endblock %}
{% block css%}
    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
    <link href=\"/assets/Backend/plugins/switchery/dist/switchery.min.css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/khach-hang\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Chỉnh sửa tài khoản khách hàng</h3>
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
                        <form action=\"/khach-hang/update\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{user._id}}\">
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
                                                <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"Email (tài khoản)\" value=\"{{user.username}}\" required  readonly/>
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
                                            <label class=\"control-label col-md-2 text-right p-t-10\"></label>
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
                                                <i class=\"fa fa-file-photo-o\"></i> Chọn hình ảnh 600x600
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
", "Backend/Customer/edit.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Customer\\edit.html.twig");
    }
}
