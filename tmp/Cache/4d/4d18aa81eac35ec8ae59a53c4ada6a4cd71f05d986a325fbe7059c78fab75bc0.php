<?php

/* Backend/ProductType/add.html.twig */
class __TwigTemplate_1eb503d5009a9c7439dcdd450ea2f15bff0ae178ca20281a60c1b523f5350a34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/ProductType/add.html.twig", 1);
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
        echo "Thêm loại sản phẩm";
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/loai-san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Thêm danh mục loại sản phẩm</h3>
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
                        <form action=\"/loai-san-pham/create\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
                          <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"";
        // line 22
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
                                                <input type=\"text\" id=\"ten\" name=\"ten\" class=\"form-control\" placeholder=\"Tên loại sản phẩm\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">ICON</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"text\" id=\"icon\" name=\"icon\" class=\"form-control\" placeholder=\"Icon font\">
                                            </div>
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Thứ tự</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"number\" id=\"thutu\" name=\"thutu\" class=\"form-control\" placeholder=\"Thứ tự\" value=\"0\">
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
        // line 57
        if (($context["list"] ?? null)) {
            // line 58
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 59
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()) == ($context["id_parent"] ?? null))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                                    ";
        }
        // line 62
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
                                <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\"></div>
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

    // line 94
    public function block_js($context, array $blocks = array())
    {
        // line 95
        echo "    <script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js\"></script>
    <!--<script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js\"></script>-->
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
        return "Backend/ProductType/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 95,  162 => 94,  128 => 62,  125 => 61,  110 => 59,  105 => 58,  103 => 57,  65 => 22,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block title %}Thêm loại sản phẩm{% endblock %}
{% block css%}
    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/loai-san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Thêm danh mục loại sản phẩm</h3>
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
                        <form action=\"/loai-san-pham/create\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
                          <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"{{_token}}\" />
                            <div class=\"form-body\">
                                <h3 class=\"card-title\">Thông tin loại sản phẩm</h3>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Tên</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" id=\"ten\" name=\"ten\" class=\"form-control\" placeholder=\"Tên loại sản phẩm\" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">ICON</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"text\" id=\"icon\" name=\"icon\" class=\"form-control\" placeholder=\"Icon font\">
                                            </div>
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Thứ tự</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"number\" id=\"thutu\" name=\"thutu\" class=\"form-control\" placeholder=\"Thứ tự\" value=\"0\">
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
                                                            <option value=\"{{item._id}}\" {% if item._id == id_parent %} selected {% endif %}>{{item.ten}}</option>
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
                                <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\"></div>
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
    <!--<script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js\"></script>-->
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
", "Backend/ProductType/add.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\ProductType\\add.html.twig");
    }
}
