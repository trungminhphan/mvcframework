<?php

/* Backend/Product/add.html.twig */
class __TwigTemplate_d07cd37705811820bf816a15db10b2f22bf3748612bf7acee639c83346a0f29c extends Twig_Template
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
            <h3 class=\"text-themecolor\"><a href=\"/loai-san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Thêm sản phẩm</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <form action=\"/loai-san-pham/create\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
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
                                            <select class=\"select2 m-b-10 select2-multiple\" name=\"id_parent[]\" style=\"width: 100%\" multiple=\"multiple\" data-placeholder=\"Chọn thuộc tính nhóm\">
                                                <option value=\"\">Chọn loại sản phẩm</option>
                                                ";
        // line 43
        if (($context["producttype"] ?? null)) {
            // line 44
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["producttype"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 45
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo "</option>
                                                        ";
                // line 46
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array())) {
                    // line 47
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 48
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
                    // line 50
                    echo "                                                        ";
                }
                // line 51
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                                ";
        }
        // line 53
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
                                    </div>
                                </div>
                            </div>
                            <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\"></div>
                            <h3 class=\"card-title\">Thuộc tính sản phẩm</h3><hr>
                            <div id=\"attributes_list\">
                                <div class=\"row items\">
                                    <div class=\"form-group col-md-4\">
                                        <select class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">
                                        ";
        // line 97
        if (($context["attributes"] ?? null)) {
            // line 98
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 99
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
            // line 101
            echo "                                        ";
        }
        // line 102
        echo "                                        </select>
                                    </div>                                  
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"price[]\" class=\"form-control\" placeholder=\"Giá\" required>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"selling_price[]\" class=\"form-control\" placeholder=\"Giá bán\" required>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <input type=\"number\" name=\"quantity[]\" class=\"form-control\" placeholder=\"Số lượng\" required>
                                    </div>
                                    <div class=\"form-group col-md-2\">
                                        <div style=\"width:40px;height:40px;float:left;margin-right:5px;background:#ccc;\">
                                            <img src=\"/assets/Backend/images/logo-icon.png\" style=\"width:40px;height:40px;\"/>
                                            <a href=\"\"></a>
                                        </div>
                                        <label class=\"btn btn-info btn-circle\">
                                            <input type=\"file\" name=\"img[]\" style=\"display:none;\" accept=\"image/*\" />
                                            <i class=\"fa fa-file-photo-o\"></i>
                                        </label>
                                        <a href=\"#\" onclick=\"return false;\" class=\"btn btn-primary btn-circle add-attribute\"><i class=\"fa fa-plus\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-info\"> <i class=\"fa fa-check\"></i> Cập nhật</button>
                            <a href=\"/loai-san-pham\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
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

    // line 140
    public function block_js($context, array $blocks = array())
    {
        // line 141
        echo "    <script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/Backend/js/themsanpham.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"/assets/Backend/plugins/ckeditor/ckeditor.js\"></script>
    <script src=\"/assets/Backend/plugins/html5-editor/wysihtml5-0.3.0.js\"></script>
    <script src=\"/assets/Backend/plugins/html5-editor/bootstrap-wysihtml5.js\"></script>
    <script type=\"text/javascript\">
         \$(document).ready(function() {
            \$(\".select2\").select2();upload_hinhanh();delete_hinhanh();popup_images();
            \$(\".delete-attribute\").click(function(){
                var _this = \$(this);
                _this.parents(\".items\").fadeOut();
            });
            \$(\".add-attribute\").click(function(){
                \$.get('/get/attributes', function(data){
                    \$(\"#attributes_list\").append(data);    
                    \$(\".delete-attribute\").click(function(){
                    var _this = \$(this);
                        _this.parents(\".items\").remove();
                    });
                    \$(\".select2\").select2();
                });               
            });
            \$('.mota').wysihtml5();
            \$('.top').click(function(){
              \$('html, body').animate({
                scrollTop: \$( \$.attr(this, 'href') ).offset().top
              }, 500);
              return false;
            });
            CKEDITOR.replace('motachitiet' ,{
                filebrowserBrowseUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&subfolder=";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "',
                filebrowserUploadUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&subfolder=";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "',
                filebrowserImageBrowseUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&subfolder=";
        // line 174
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
        return array (  281 => 174,  277 => 173,  273 => 172,  240 => 141,  237 => 140,  197 => 102,  194 => 101,  183 => 99,  178 => 98,  176 => 97,  130 => 53,  127 => 52,  121 => 51,  118 => 50,  107 => 48,  102 => 47,  100 => 46,  93 => 45,  88 => 44,  86 => 43,  50 => 9,  47 => 8,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Product/add.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\Product\\add.html.twig");
    }
}
