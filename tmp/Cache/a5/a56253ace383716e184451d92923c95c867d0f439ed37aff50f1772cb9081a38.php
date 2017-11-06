<?php

/* Backend/ProductType/edit.html.twig */
class __TwigTemplate_7645b50d8cd711bb2e19dcd84d2c388036b657909bc003be19c298203de437e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/ProductType/edit.html.twig", 1);
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
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/loai-san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Chỉnh sửa danh mục loại sản phẩm</h3>
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
                        <form action=\"/loai-san-pham/update\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "_id", array()), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["_token"] ?? null), "html", null, true);
        echo "\" />
                            <div class=\"form-body\">
                                <h3 class=\"card-title\">Thông tin loại sản phẩm</h3>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Tên</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" id=\"ten\" name=\"ten\" class=\"form-control\" placeholder=\"Tên loại sản phẩm\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "ten", array()), "html", null, true);
        echo "\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">ICON</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"text\" id=\"icon\" name=\"icon\" class=\"form-control\" placeholder=\"Icon font\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "icon", array()), "html", null, true);
        echo "\">
                                            </div>
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Thứ tự</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"number\" id=\"thutu\" name=\"thutu\" class=\"form-control\" placeholder=\"Thứ tự\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thutu", array()), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Thuộc nhóm</label>
                                            <div class=\"col-md-9\">
                                                <select class=\"select2 m-b-10 select2-multiple\" name=\"id_parent[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn thuộc tính nhóm\">
                                                    <option value=\"\">Chọn nhóm</option>}
                                                    ";
        // line 59
        if (($context["list"] ?? null)) {
            // line 60
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\"
                                                            ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "id_parent", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 63
                    echo "                                                                ";
                    if (($context["p"] == twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()))) {
                        echo " selected ";
                    }
                    // line 64
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                                                            >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                                    ";
        }
        // line 68
        echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Hình ảnh</label>
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
        // line 87
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh_aliasname", array())) {
            // line 88
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh_aliasname", array()));
            foreach ($context['_seq'] as $context["key"] => $context["ha"]) {
                // line 89
                echo "                                            <div class=\"col-lg-3 col-md-6 items\">
                                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"";
                // line 90
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" readonly/>
                                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "\" class=\"form-control\"/>
                                                <div class=\"card\">
                                                    <div class=\"el-card-item\">
                                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/";
                // line 94
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "\" />
                                                            <div class=\"el-overlay\">
                                                                <ul class=\"el-info\">
                                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/";
                // line 97
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file=";
                // line 98
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=\"el-card-content\">
                                                            <h3 class=\"box-title\">";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
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
            // line 109
            echo "                                    ";
        }
        // line 110
        echo "                                </div>
                            </div>
                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-info\"> <i class=\"fa fa-check\"></i> Cập nhật</button>
                                <a href=\"/loai-san-pham\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 124
    public function block_js($context, array $blocks = array())
    {
        // line 125
        echo "    <script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/Backend/js/themsanpham.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
         \$(document).ready(function() {
            \$(\".select2\").select2();upload_hinhanh();delete_hinhanh();popup_images();
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
        return "Backend/ProductType/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 125,  247 => 124,  231 => 110,  228 => 109,  216 => 103,  208 => 98,  204 => 97,  196 => 94,  190 => 91,  186 => 90,  183 => 89,  178 => 88,  176 => 87,  155 => 68,  152 => 67,  143 => 65,  137 => 64,  132 => 63,  128 => 62,  123 => 61,  118 => 60,  116 => 59,  101 => 47,  94 => 43,  81 => 33,  69 => 24,  65 => 23,  49 => 9,  46 => 8,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}

{% block title %}Home{% endblock %}
{% block css%}
    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/loai-san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Chỉnh sửa danh mục loại sản phẩm</h3>
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
                        <form action=\"/loai-san-pham/update\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{ product._id }}\">
                            <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"{{_token}}\" />
                            <div class=\"form-body\">
                                <h3 class=\"card-title\">Thông tin loại sản phẩm</h3>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Tên</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" id=\"ten\" name=\"ten\" class=\"form-control\" placeholder=\"Tên loại sản phẩm\" value=\"{{product.ten}}\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">ICON</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"text\" id=\"icon\" name=\"icon\" class=\"form-control\" placeholder=\"Icon font\" value=\"{{ product.icon}}\">
                                            </div>
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Thứ tự</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"number\" id=\"thutu\" name=\"thutu\" class=\"form-control\" placeholder=\"Thứ tự\" value=\"{{product.thutu}}\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Thuộc nhóm</label>
                                            <div class=\"col-md-9\">
                                                <select class=\"select2 m-b-10 select2-multiple\" name=\"id_parent[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn thuộc tính nhóm\">
                                                    <option value=\"\">Chọn nhóm</option>}
                                                    {% if list %}
                                                        {% for item in list %}
                                                            <option value=\"{{item._id}}\"
                                                            {% for p in product.id_parent %}
                                                                {% if p == item._id %} selected {% endif %}
                                                            {% endfor %}
                                                            >{{item.ten}}</option>
                                                        {% endfor %}
                                                    {% endif %}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Hình ảnh</label>
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
                                    {% if product.hinhanh_aliasname %}
                                        {% for key,ha in product.hinhanh_aliasname %}
                                            <div class=\"col-lg-3 col-md-6 items\">
                                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"{{ha}}\" readonly/>
                                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"{{product.hinhanh_filename[key]}}\" class=\"form-control\"/>
                                                <div class=\"card\">
                                                    <div class=\"el-card-item\">
                                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/{{ha}}\" alt=\"{{product.hinhanh_filename[key]}}\" />
                                                            <div class=\"el-overlay\">
                                                                <ul class=\"el-info\">
                                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/{{ha}}\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file={{ha}}\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=\"el-card-content\">
                                                            <h3 class=\"box-title\">{{product.hinhanh_filename[key]}}</h3><br/>
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
                                <a href=\"/loai-san-pham\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
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
    <script src=\"/assets/Backend/js/themsanpham.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
         \$(document).ready(function() {
            \$(\".select2\").select2();upload_hinhanh();delete_hinhanh();popup_images();
            \$('.top').click(function(){
              \$('html, body').animate({
                scrollTop: \$( \$.attr(this, 'href') ).offset().top
              }, 500);
              return false;
            });
        });
    </script>
{% endblock %}
", "Backend/ProductType/edit.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\ProductType\\edit.html.twig");
    }
}
