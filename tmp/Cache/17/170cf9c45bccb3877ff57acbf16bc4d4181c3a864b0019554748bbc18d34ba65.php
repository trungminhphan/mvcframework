<?php

/* Backend/Product/edit.html.twig */
class __TwigTemplate_a29d8408a1e8e37855306dc926cafd1c1ecf56dd9335a83955f1f336ca8e9866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Product/edit.html.twig", 1);
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
        echo "Chỉnh sửa sản phẩm";
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
            <h3 class=\"text-themecolor\"><a href=\"/san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Chỉnh sửa sản phẩm</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
";
        // line 17
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "id_user", array()))) {
            // line 18
            echo "<form action=\"/san-pham/update\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
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
                                          <input type=\"text\" id=\"ten\" name=\"ten\" class=\"form-control\" placeholder=\"Tên loại sản phẩm\" required value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "ten", array()), "html", null, true);
            echo "\">
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
                echo "                                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producttype"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "                                                      <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                    echo "\"
                                                      ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "id_producttype", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                        // line 48
                        echo "                                                       ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()) == $context["id"])) {
                            echo " selected ";
                        }
                        // line 49
                        echo "                                                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "                                                      >";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                    echo "</option>
                                                      ";
                    // line 51
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array())) {
                        // line 52
                        echo "                                                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 53
                            echo "                                                              <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                            echo "\"
                                                              ";
                            // line 54
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "id_producttype", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                                // line 55
                                echo "                                                                ";
                                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()) == $context["id"])) {
                                    echo " selected ";
                                }
                                // line 56
                                echo "                                                              ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 57
                            echo "                                                              >&nbsp;&nbsp;&nbsp;--- ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "ten", array()), "html", null, true);
                            echo "</option>
                                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 59
                        echo "                                                      ";
                    }
                    // line 60
                    echo "                                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                                              ";
            }
            // line 62
            echo "                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  <div class=\"form-group row\">
                                      <label class=\"control-label col-md-3 text-right p-t-10\">Mô tả</label>
                                      <div class=\"col-md-9\">
                                          <textarea class=\"mota form-control\" id=\"mota\" name=\"mota\" rows=\"5\" placeholder=\"Mô tả ...\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "mota", array()), "html", null, true);
            echo "</textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  <div class=\"form-group row\">
                                      <label class=\"control-label col-md-3 text-right p-t-10\">Mô tả chi tiết</label>
                                      <div class=\"col-md-9\">
                                          <textarea name=\"motachitiet\" id=\"motachitiet\" class=\"form-control\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "motachitiet", array()), "html", null, true);
            echo "</textarea>
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
                          <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\">
                            ";
            // line 105
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh", array())) {
                // line 106
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["hinhanh"]) {
                    // line 107
                    echo "                            <div class=\"col-lg-3 col-md-6 items\">
                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "aliasname", array()), "html", null, true);
                    echo "\" readonly/>
                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "filename", array()), "html", null, true);
                    echo "\" class=\"form-control\"/>
                                <div class=\"card\">
                                    <div class=\"el-card-item\">
                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "aliasname", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "filename", array()), "html", null, true);
                    echo "\" />
                                            <div class=\"el-overlay\">
                                                <ul class=\"el-info\">
                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "aliasname", array()), "html", null, true);
                    echo "\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file=";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "aliasname", array()), "html", null, true);
                    echo "\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"el-card-content\">
                                            <h3 class=\"box-title\">";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "filename", array()), "html", null, true);
                    echo "</h3><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hinhanh'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                            ";
            }
            // line 128
            echo "                          </div>
                          <h3 class=\"card-title\">Thuộc tính sản phẩm</h3><hr>
                          <div id=\"attributes_list\">
                            ";
            // line 131
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array())) {
                // line 132
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                    // line 133
                    echo "                            ";
                    $context["att"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "iterator", array());
                    // line 134
                    echo "
                            <div class=\"row items\">
                                <div class=\"form-group col-md-4\">
                                    <select name=\"id_attribute[]\" class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">

                                  
                                    </select>
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"gia[]\" class=\"form-control\" placeholder=\"Giá\" required value=\"";
                    // line 143
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "gia", array()), "html", null, true);
                    echo "\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"giaban[]\" class=\"form-control\" placeholder=\"Giá bán\" required value=\"";
                    // line 146
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "giaban", array()), "html", null, true);
                    echo "\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"soluong[]\" class=\"form-control\" placeholder=\"Số lượng\" required value=\"";
                    // line 149
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "soluong", array()), "html", null, true);
                    echo "\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <div style=\"width:40px;height:40px;float:left;margin-right:5px;background:#ccc;\" class=\"img_icon\">
                                      ";
                    // line 153
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "hinhanh", array())) {
                        // line 154
                        echo "                                        <img src=\"/uploads/images/thumb_100x100/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "hinhanh", array()), "html", null, true);
                        echo "\" style=\"width:40px;height:40px;\" class=\"icon\"/>
                                      ";
                    } else {
                        // line 156
                        echo "                                        <img src=\"/assets/Backend/images/logo-icon.png\" style=\"width:40px;height:40px;\" class=\"icon\"/>
                                      ";
                    }
                    // line 158
                    echo "                                    </div>
                                    <label class=\"file btn btn-info btn-circle btn-sm\">
                                        <input type=\"file\" name=\"hinhanh[]\" style=\"display:none;\" accept=\"image/*\" class=\"image-icon\"/>
                                        <i class=\"fa fa-file-photo-o\"></i>
                                    </label>
                                    <a href=\"#\" onclick=\"return false;\" class=\"btn btn-danger btn-circle btn-sm delete-attribute\"><i class=\"fa fa-trash\"></i></a>
                                </div>
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                            ";
            } else {
                // line 168
                echo "                              <div class=\"row items\">
                                  <div class=\"form-group col-md-4\">
                                      <select name=\"id_attribute[]\" class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">
                                      ";
                // line 171
                if (($context["attributes"] ?? null)) {
                    // line 172
                    echo "                                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 173
                        echo "                                              <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attribute"], "_id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attribute"], "ten", array()), "html", null, true);
                        echo "</option>
                                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "                                      ";
                }
                // line 176
                echo "                                      </select>
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
                                      </div>
                                      <label class=\"file btn btn-info btn-circle btn-sm\">
                                          <input type=\"file\" name=\"hinhanh[]\" style=\"display:none;\" accept=\"image/*\" class=\"image-icon\"/>
                                          <i class=\"fa fa-file-photo-o\"></i>
                                      </label>
                                      <a href=\"#\" onclick=\"return false;\" class=\"btn btn-primary btn-circle btn-sm add-attribute\"><i class=\"fa fa-plus\"></i></a>
                                  </div>
                              </div>
                              ";
            }
            // line 199
            echo "                          </div>
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
        } else {
            // line 213
            echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"alert alert-danger alert-rounded\">
                      Không có quyền chỉnh sửa
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
";
        }
    }

    // line 230
    public function block_js($context, array $blocks = array())
    {
        // line 231
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
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "',
                filebrowserUploadUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&subfolder=";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "',
                filebrowserImageBrowseUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&subfolder=";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "'
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 252,  467 => 251,  463 => 250,  442 => 231,  439 => 230,  420 => 213,  404 => 199,  379 => 176,  376 => 175,  365 => 173,  360 => 172,  358 => 171,  353 => 168,  350 => 167,  336 => 158,  332 => 156,  326 => 154,  324 => 153,  317 => 149,  311 => 146,  305 => 143,  294 => 134,  291 => 133,  286 => 132,  284 => 131,  279 => 128,  276 => 127,  264 => 121,  256 => 116,  252 => 115,  244 => 112,  238 => 109,  234 => 108,  231 => 107,  226 => 106,  224 => 105,  198 => 82,  185 => 72,  173 => 62,  170 => 61,  164 => 60,  161 => 59,  152 => 57,  146 => 56,  141 => 55,  137 => 54,  132 => 53,  127 => 52,  125 => 51,  120 => 50,  114 => 49,  109 => 48,  105 => 47,  100 => 46,  95 => 45,  93 => 44,  78 => 32,  62 => 18,  60 => 17,  50 => 9,  47 => 8,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Product/edit.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\Product\\edit.html.twig");
    }
}
