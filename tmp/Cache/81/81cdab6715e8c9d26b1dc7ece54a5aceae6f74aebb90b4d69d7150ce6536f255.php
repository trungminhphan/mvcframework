<?php

/* Backend/Product/add.html.twig */
class __TwigTemplate_ddc2f4183cb0d5b2b3916bed16397913dfb90eadba8db8b1c2a81024e5ee7481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Product/add.html.twig", 1);
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
        echo "Thêm sản phẩm";
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/assets/Backend/plugins/html5-editor/bootstrap-wysihtml5.css\" />
    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Thêm sản phẩm</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <form action=\"/san-pham/create\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["_token"] ?? null), "html", null, true);
        echo "\" />
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"form-body\">
                            <h3 class=\"card-title\">Thông tin sản phẩm</h3>
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
                                        <label class=\"control-label col-md-3 text-right p-t-10\">Loại sản phẩm</label>
                                        <div class=\"col-md-9\">
                                            <select class=\"select2 m-b-10 select2-multiple\" name=\"id_producttype[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn thuộc tính nhóm\">
                                                <option value=\"\">Chọn loại sản phẩm</option>
                                                ";
        // line 44
        if (($context["producttype"] ?? null)) {
            // line 45
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["producttype"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo "</option>
                                                        ";
                // line 47
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array())) {
                    // line 48
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 49
                        echo "                                                                <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                        echo "\">&nbsp;&nbsp;&nbsp;--- ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "ten", array()), "html", null, true);
                        echo "</option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                                                        ";
                }
                // line 52
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                                ";
        }
        // line 54
        echo "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group row\">
                                        <label class=\"control-label col-md-3 text-right p-t-10\">Mô tả</label>
                                        <div class=\"col-md-9\">
                                            <textarea class=\"mota form-control\" id=\"mota\" name=\"mota\" rows=\"5\" placeholder=\"Mô tả ...\"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group row\">
                                        <label class=\"control-label col-md-3 text-right p-t-10\">Mô tả chi tiết</label>
                                        <div class=\"col-md-9\">
                                            <textarea name=\"motachitiet\" id=\"motachitiet\" class=\"form-control\"></textarea>
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
                                        <label class=\"control-label col-md-3 text-right p-t-10\">
                                          <input type=\"checkbox\" id=\"md_checkbox_26\" name=\"status\" class=\"filled-in chk-col-blue\" value=\"1\" checked />
                                          <label for=\"md_checkbox_26\">Hiển thị</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\"></div>
                            <h3 class=\"card-title\">Thuộc tính sản phẩm</h3><hr>
                            <div id=\"attributes_list\">
                                <div class=\"row items\">
                                    <div class=\"form-group col-md-4\">
                                        <select name=\"id_attribute[]\" class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">
                                        ";
        // line 102
        if (($context["attributes"] ?? null)) {
            // line 103
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 104
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attribute"], "_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attribute"], "ten", array()), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                                        ";
        }
        // line 107
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"gia[]\" class=\"form-control\" placeholder=\"Giá\" required>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"giaban[]\" class=\"form-control\" placeholder=\"Giá bán\" required>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"soluong[]\" class=\"form-control\" placeholder=\"Số lượng\" required value=\"1\">
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <div style=\"width:40px;height:40px;float:left;margin-right:5px;background:#ccc;\" class=\"img_icon\">
                                            <img src=\"/assets/Backend/images/logo-icon.png\" style=\"width:40px;height:40px;\" class=\"icon\"/>
                                            <!--<a href=\"#\" onclick=\"return false;\" class=\"delete-icon\"><i class=\"fa fa-trash\"></i></a>-->
                                        </div>
                                        <label class=\"file btn btn-info btn-circle btn-sm\">
                                            <input type=\"file\" name=\"hinhanh[]\" style=\"display:none;\" accept=\"image/*\" class=\"image-icon\"/>
                                            <i class=\"fa fa-file-photo-o\"></i>
                                        </label>
                                        <a href=\"#\" onclick=\"return false;\" class=\"btn btn-primary btn-circle btn-sm add-attribute\"><i class=\"fa fa-plus\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-info\"> <i class=\"fa fa-check\"></i> Cập nhật</button>
                            <a href=\"/san-pham\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
                            <a href=\"#\" class=\"btn btn-primary add-attribute\" onclick=\"return false;\" id=\"add-attribute\"><i class=\"fa fa-plus\"></i> Thêm thuộc tính</a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</form>
";
    }

    // line 145
    public function block_js($context, array $blocks = array())
    {
        // line 146
        echo "    <script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/Backend/js/themsanpham.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"/assets/Backend/plugins/ckeditor/ckeditor.js\"></script>
    <script src=\"/assets/Backend/plugins/html5-editor/wysihtml5-0.3.0.js\"></script>
    <script src=\"/assets/Backend/plugins/html5-editor/bootstrap-wysihtml5.js\"></script>
    <script src=\"/assets/Backend/js/product.js\"></script>
    <script type=\"text/javascript\">
         \$(document).ready(function() {
            \$(\".select2\").select2();upload_hinhanh();delete_hinhanh();popup_images();
            delete_attribute(); add_icon();delete_icon();get_attribute();
            \$('.mota').wysihtml5();
            \$('.top').click(function(){
              \$('html, body').animate({
                scrollTop: \$( \$.attr(this, 'href') ).offset().top
              }, 500);
              return false;
            });
            CKEDITOR.replace('motachitiet' ,{
                filebrowserBrowseUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&subfolder=";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "',
                filebrowserUploadUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&subfolder=";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "',
                filebrowserImageBrowseUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&subfolder=";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "'
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Product/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 167,  273 => 166,  269 => 165,  248 => 146,  245 => 145,  205 => 107,  202 => 106,  191 => 104,  186 => 103,  184 => 102,  134 => 54,  131 => 53,  125 => 52,  122 => 51,  111 => 49,  106 => 48,  104 => 47,  97 => 46,  92 => 45,  90 => 44,  61 => 18,  50 => 9,  47 => 8,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block title %}Thêm sản phẩm{% endblock %}
{% block css%}
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/assets/Backend/plugins/html5-editor/bootstrap-wysihtml5.css\" />
    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Thêm sản phẩm</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <form action=\"/san-pham/create\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"_token\" id=\"_token\" value=\"{{_token}}\" />
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"form-body\">
                            <h3 class=\"card-title\">Thông tin sản phẩm</h3>
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
                                        <label class=\"control-label col-md-3 text-right p-t-10\">Loại sản phẩm</label>
                                        <div class=\"col-md-9\">
                                            <select class=\"select2 m-b-10 select2-multiple\" name=\"id_producttype[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn thuộc tính nhóm\">
                                                <option value=\"\">Chọn loại sản phẩm</option>
                                                {% if producttype %}
                                                    {% for item in producttype %}
                                                        <option value=\"{{item._id}}\">{{item.ten}}</option>
                                                        {% if item.childs %}
                                                            {% for child in item.childs %}
                                                                <option value=\"{{child.id}}\">&nbsp;&nbsp;&nbsp;--- {{child.ten}}</option>
                                                            {% endfor %}
                                                        {% endif %}
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
                                        <label class=\"control-label col-md-3 text-right p-t-10\">Mô tả</label>
                                        <div class=\"col-md-9\">
                                            <textarea class=\"mota form-control\" id=\"mota\" name=\"mota\" rows=\"5\" placeholder=\"Mô tả ...\"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group row\">
                                        <label class=\"control-label col-md-3 text-right p-t-10\">Mô tả chi tiết</label>
                                        <div class=\"col-md-9\">
                                            <textarea name=\"motachitiet\" id=\"motachitiet\" class=\"form-control\"></textarea>
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
                                        <label class=\"control-label col-md-3 text-right p-t-10\">
                                          <input type=\"checkbox\" id=\"md_checkbox_26\" name=\"status\" class=\"filled-in chk-col-blue\" value=\"1\" checked />
                                          <label for=\"md_checkbox_26\">Hiển thị</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\"></div>
                            <h3 class=\"card-title\">Thuộc tính sản phẩm</h3><hr>
                            <div id=\"attributes_list\">
                                <div class=\"row items\">
                                    <div class=\"form-group col-md-4\">
                                        <select name=\"id_attribute[]\" class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">
                                        {% if attributes %}
                                            {% for attribute in attributes %}
                                                <option value=\"{{attribute._id}}\">{{attribute.ten}}</option>
                                            {% endfor %}
                                        {% endif %}
                                        </select>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"gia[]\" class=\"form-control\" placeholder=\"Giá\" required>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"giaban[]\" class=\"form-control\" placeholder=\"Giá bán\" required>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"soluong[]\" class=\"form-control\" placeholder=\"Số lượng\" required value=\"1\">
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <div style=\"width:40px;height:40px;float:left;margin-right:5px;background:#ccc;\" class=\"img_icon\">
                                            <img src=\"/assets/Backend/images/logo-icon.png\" style=\"width:40px;height:40px;\" class=\"icon\"/>
                                            <!--<a href=\"#\" onclick=\"return false;\" class=\"delete-icon\"><i class=\"fa fa-trash\"></i></a>-->
                                        </div>
                                        <label class=\"file btn btn-info btn-circle btn-sm\">
                                            <input type=\"file\" name=\"hinhanh[]\" style=\"display:none;\" accept=\"image/*\" class=\"image-icon\"/>
                                            <i class=\"fa fa-file-photo-o\"></i>
                                        </label>
                                        <a href=\"#\" onclick=\"return false;\" class=\"btn btn-primary btn-circle btn-sm add-attribute\"><i class=\"fa fa-plus\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-info\"> <i class=\"fa fa-check\"></i> Cập nhật</button>
                            <a href=\"/san-pham\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
                            <a href=\"#\" class=\"btn btn-primary add-attribute\" onclick=\"return false;\" id=\"add-attribute\"><i class=\"fa fa-plus\"></i> Thêm thuộc tính</a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</form>
{% endblock %}

{% block js%}
    <script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/Backend/js/themsanpham.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"/assets/Backend/plugins/ckeditor/ckeditor.js\"></script>
    <script src=\"/assets/Backend/plugins/html5-editor/wysihtml5-0.3.0.js\"></script>
    <script src=\"/assets/Backend/plugins/html5-editor/bootstrap-wysihtml5.js\"></script>
    <script src=\"/assets/Backend/js/product.js\"></script>
    <script type=\"text/javascript\">
         \$(document).ready(function() {
            \$(\".select2\").select2();upload_hinhanh();delete_hinhanh();popup_images();
            delete_attribute(); add_icon();delete_icon();get_attribute();
            \$('.mota').wysihtml5();
            \$('.top').click(function(){
              \$('html, body').animate({
                scrollTop: \$( \$.attr(this, 'href') ).offset().top
              }, 500);
              return false;
            });
            CKEDITOR.replace('motachitiet' ,{
                filebrowserBrowseUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&subfolder={{session.user_id}}',
                filebrowserUploadUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&subfolder={{session.user_id}}',
                filebrowserImageBrowseUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&subfolder={{session.user_id}}'
            });
        });
    </script>
{% endblock %}
", "Backend/Product/add.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\Product\\add.html.twig");
    }
}
