<?php

/* Backend/Producer/edit.html.twig */
class __TwigTemplate_d89adbdf088d89cfd91991cfdda8ed72a089c3ef0642c6aa039bdb46d50e2c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Producer/edit.html.twig", 1);
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
            <h3 class=\"text-themecolor\"><a href=\"/nha-san-xuat\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Chỉnh sửa danh mục nhà sản xuất</h3>
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
                        <form action=\"/nha-san-xuat/update\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "_id", array()), "html", null, true);
        echo "\">
                            <div class=\"form-body\">
                                <h3 class=\"card-title\">Thông tin nhà sản xuất</h3>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Tên</label>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" id=\"ten\" name=\"ten\" class=\"form-control\" placeholder=\"Tên nhà sản xuất\" required value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "ten", array()), "html", null, true);
        echo "\">
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
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "icon", array()), "html", null, true);
        echo "\">
                                            </div>
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Thứ tự</label>
                                            <div class=\"col-md-3\">
                                                <input type=\"number\" id=\"thutu\" name=\"thutu\" class=\"form-control\" placeholder=\"Thứ tự\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "thutu", array()), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group row\">
                                            <label class=\"control-label col-md-3 text-right p-t-10\">Loại sản phẩm sản xuất</label>
                                            <div class=\"col-md-9\">
                                                <select class=\"select2 m-b-10 select2-multiple\" name=\"id_product_type[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn loại sản phẩm\">
                                                    <option value=\"\">Chọn loại sản </option>}
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
                echo "\" 
                                                            ";
                // line 60
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "id_product_type", array())) {
                    // line 61
                    echo "                                                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "id_product_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 62
                        echo "                                                                    ";
                        if (($context["p"] == twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()))) {
                            // line 63
                            echo "                                                                        selected 
                                                                    ";
                        }
                        // line 65
                        echo "                                                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "                                                            ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                                    ";
        }
        // line 69
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
                                                <input type=\"file\" name=\"dinhkem[]\" class=\"dinhkem btn btn-info\" multiple accept=\"image/*\" placeholder=\"Chọn hình ảnh\" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\">
                                    ";
        // line 85
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "hinhanh_aliasname", array())) {
            // line 86
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "hinhanh_aliasname", array()));
            foreach ($context['_seq'] as $context["key"] => $context["ha"]) {
                // line 87
                echo "                                            <div class=\"col-lg-3 col-md-6 items\">
                                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" readonly/>
                                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "\" class=\"form-control\"/>
                                                <div class=\"card\">
                                                    <div class=\"el-card-item\">
                                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/";
                // line 92
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
                echo "\" />
                                                            <div class=\"el-overlay\">
                                                                <ul class=\"el-info\">
                                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/";
                // line 95
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file=";
                // line 96
                echo twig_escape_filter($this->env, $context["ha"], "html", null, true);
                echo "\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class=\"el-card-content\">
                                                            <h3 class=\"box-title\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["producer"] ?? null), "hinhanh_filename", array()), $context["key"], array(), "array"), "html", null, true);
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
            // line 107
            echo "                                    ";
        }
        // line 108
        echo "                                </div>
                            </div>
                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-info\"> <i class=\"fa fa-check\"></i> Cập nhật</button>
                                <a href=\"/nha-san-xuat\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 122
    public function block_js($context, array $blocks = array())
    {
        // line 123
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
        return "Backend/Producer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 123,  247 => 122,  231 => 108,  228 => 107,  216 => 101,  208 => 96,  204 => 95,  196 => 92,  190 => 89,  186 => 88,  183 => 87,  178 => 86,  176 => 85,  158 => 69,  155 => 68,  144 => 66,  138 => 65,  134 => 63,  131 => 62,  126 => 61,  124 => 60,  119 => 59,  114 => 58,  112 => 57,  97 => 45,  90 => 41,  77 => 31,  65 => 22,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Producer/edit.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Producer\\edit.html.twig");
    }
}
