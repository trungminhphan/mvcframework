<?php

/* Backend/Product/edit.html.twig */
class __TwigTemplate_9f1d2a758db1af38418a1427af67336c2427b6afde31112f281abed6237f26bb extends Twig_Template
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
  <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "_id", array()), "html", null, true);
            echo "\">
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
            // line 33
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
            // line 45
            if (($context["producttype"] ?? null)) {
                // line 46
                echo "                                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producttype"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "                                                      <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                    echo "\"
                                                      ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "id_producttype", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                        // line 49
                        echo "                                                       ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()) == $context["id"])) {
                            echo " selected ";
                        }
                        // line 50
                        echo "                                                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                                                      >";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                    echo "</option>
                                                      ";
                    // line 52
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array())) {
                        // line 53
                        echo "                                                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 54
                            echo "                                                              <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                            echo "\"
                                                              ";
                            // line 55
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "id_producttype", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                                // line 56
                                echo "                                                                ";
                                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()) == $context["id"])) {
                                    echo " selected ";
                                }
                                // line 57
                                echo "                                                              ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 58
                            echo "                                                              >&nbsp;&nbsp;&nbsp;--- ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "ten", array()), "html", null, true);
                            echo "</option>
                                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                                                      ";
                    }
                    // line 61
                    echo "                                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                                              ";
            }
            // line 63
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
            // line 73
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
            // line 83
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
                                        <input type=\"checkbox\" id=\"md_checkbox_26\" name=\"status\" class=\"filled-in chk-col-blue\" value=\"1\" ";
            // line 99
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "status", array()) == 1)) {
                echo " checked ";
            }
            echo "/>
                                        <label for=\"md_checkbox_26\">Hiển thị</label>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\">
                            ";
            // line 106
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh", array())) {
                // line 107
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "hinhanh", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["hinhanh"]) {
                    // line 108
                    echo "                            <div class=\"col-lg-3 col-md-6 items\">
                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "aliasname", array()), "html", null, true);
                    echo "\" readonly/>
                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "filename", array()), "html", null, true);
                    echo "\" class=\"form-control\"/>
                                <div class=\"card\">
                                    <div class=\"el-card-item\">
                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "aliasname", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "filename", array()), "html", null, true);
                    echo "\" />
                                            <div class=\"el-overlay\">
                                                <ul class=\"el-info\">
                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "aliasname", array()), "html", null, true);
                    echo "\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file=";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hinhanh"], "aliasname", array()), "html", null, true);
                    echo "\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"el-card-content\">
                                            <h3 class=\"box-title\">";
                    // line 122
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
                // line 128
                echo "                            ";
            }
            // line 129
            echo "                          </div>
                          <h3 class=\"card-title\">Thuộc tính sản phẩm</h3><hr>
                          <div id=\"attributes_list\">
                            ";
            // line 132
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array())) {
                // line 133
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                    // line 134
                    echo "                            <div class=\"row items\">
                                <div class=\"form-group col-md-4\">
                                    <select name=\"id_attribute[]\" class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">
                                      ";
                    // line 137
                    if (($context["attributes"] ?? null)) {
                        // line 138
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["att"]) {
                            // line 139
                            echo "                                          <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["att"], "_id", array()), "html", null, true);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["att"], "_id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "id_attribute", array()))) {
                                echo " selected ";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["att"], "ten", array()), "html", null, true);
                            echo "</option>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['att'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 141
                        echo "                                      ";
                    }
                    // line 142
                    echo "                                    </select>
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"gia[]\" class=\"form-control\" placeholder=\"Giá\" required value=\"";
                    // line 145
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "gia", array()), "html", null, true);
                    echo "\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"giaban[]\" class=\"form-control\" placeholder=\"Giá bán\" required value=\"";
                    // line 148
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "giaban", array()), "html", null, true);
                    echo "\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"soluong[]\" class=\"form-control\" placeholder=\"Số lượng\" required value=\"";
                    // line 151
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "soluong", array()), "html", null, true);
                    echo "\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <div style=\"width:40px;height:40px;float:left;margin-right:5px;background:#ccc;\" class=\"img_icon\">
                                      ";
                    // line 155
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "hinhanh", array())) {
                        // line 156
                        echo "                                        <img src=\"/uploads/images/thumb_100x100/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "hinhanh", array()), "html", null, true);
                        echo "\" style=\"width:40px;height:40px;\" class=\"icon\"/>
                                        <a href=\"#\" onclick=\"return false;\" class=\"delete_icon\"><i class=\"fa fa-trash\"></i></a>
                                        <input type=\"hidden\" name=\"old_hinhanh[]\" value=\"";
                        // line 158
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "hinhanh", array()), "html", null, true);
                        echo "\" class=\"old_hianhanh\">
                                      ";
                    } else {
                        // line 160
                        echo "                                        <img src=\"/assets/Backend/images/logo-icon.png\" style=\"width:40px;height:40px;\" class=\"icon\"/>
                                      ";
                    }
                    // line 162
                    echo "                                    </div>
                                    <label class=\"file\"> <!--btn btn-info btn-circle btn-sm-->
                                        <input type=\"file\" name=\"hinhanh[]\"  accept=\"image/*\" class=\"image-icon\"/>
                                        <!--<i class=\"fa fa-file-photo-o\"></i>-->
                                    </label>

                                    <a href=\"#\" onclick=\"return false;\" class=\"btn btn-danger btn-circle btn-sm delete-attribute\"><i class=\"fa fa-trash\"></i></a>
                                </div>
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                            ";
            } else {
                // line 173
                echo "                              <div class=\"row items\">
                                  <div class=\"form-group col-md-4\">
                                      <select name=\"id_attribute[]\" class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">
                                      ";
                // line 176
                if (($context["attributes"] ?? null)) {
                    // line 177
                    echo "                                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 178
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
                    // line 180
                    echo "                                      ";
                }
                // line 181
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
            // line 204
            echo "                          </div>
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
        } else {
            // line 218
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

    // line 235
    public function block_js($context, array $blocks = array())
    {
        // line 236
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
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "',
                filebrowserUploadUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&subfolder=";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user_id", array()), "html", null, true);
        echo "',
                filebrowserImageBrowseUrl : '/assets/Backend/plugins/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&subfolder=";
        // line 257
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
        return array (  507 => 257,  503 => 256,  499 => 255,  478 => 236,  475 => 235,  456 => 218,  440 => 204,  415 => 181,  412 => 180,  401 => 178,  396 => 177,  394 => 176,  389 => 173,  386 => 172,  371 => 162,  367 => 160,  362 => 158,  356 => 156,  354 => 155,  347 => 151,  341 => 148,  335 => 145,  330 => 142,  327 => 141,  312 => 139,  307 => 138,  305 => 137,  300 => 134,  295 => 133,  293 => 132,  288 => 129,  285 => 128,  273 => 122,  265 => 117,  261 => 116,  253 => 113,  247 => 110,  243 => 109,  240 => 108,  235 => 107,  233 => 106,  221 => 99,  202 => 83,  189 => 73,  177 => 63,  174 => 62,  168 => 61,  165 => 60,  156 => 58,  150 => 57,  145 => 56,  141 => 55,  136 => 54,  131 => 53,  129 => 52,  124 => 51,  118 => 50,  113 => 49,  109 => 48,  104 => 47,  99 => 46,  97 => 45,  82 => 33,  65 => 19,  62 => 18,  60 => 17,  50 => 9,  47 => 8,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block title %}Chỉnh sửa sản phẩm{% endblock %}
{% block css%}
    <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/assets/Backend/plugins/html5-editor/bootstrap-wysihtml5.css\" />
    <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Chỉnh sửa sản phẩm</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
{% if session.user_id == product.id_user %}
<form action=\"/san-pham/update\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
  <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{product._id}}\">
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
                                          <input type=\"text\" id=\"ten\" name=\"ten\" class=\"form-control\" placeholder=\"Tên loại sản phẩm\" required value=\"{{product.ten}}\">
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
                                                      <option value=\"{{item._id}}\"
                                                      {% for id in product.id_producttype %}
                                                       {% if item._id == id %} selected {% endif %}
                                                      {% endfor %}
                                                      >{{item.ten}}</option>
                                                      {% if item.childs %}
                                                          {% for child in item.childs %}
                                                              <option value=\"{{child.id}}\"
                                                              {% for id in product.id_producttype %}
                                                                {% if item._id == id %} selected {% endif %}
                                                              {% endfor %}
                                                              >&nbsp;&nbsp;&nbsp;--- {{child.ten}}</option>
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
                                          <textarea class=\"mota form-control\" id=\"mota\" name=\"mota\" rows=\"5\" placeholder=\"Mô tả ...\">{{product.mota}}</textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  <div class=\"form-group row\">
                                      <label class=\"control-label col-md-3 text-right p-t-10\">Mô tả chi tiết</label>
                                      <div class=\"col-md-9\">
                                          <textarea name=\"motachitiet\" id=\"motachitiet\" class=\"form-control\">{{product.motachitiet}}</textarea>
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
                                        <input type=\"checkbox\" id=\"md_checkbox_26\" name=\"status\" class=\"filled-in chk-col-blue\" value=\"1\" {% if product.status == 1 %} checked {% endif %}/>
                                        <label for=\"md_checkbox_26\">Hiển thị</label>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div id=\"list_hinhanh\" class=\"form-group row el-element-overlay\">
                            {% if product.hinhanh %}
                            {% for hinhanh in product.hinhanh %}
                            <div class=\"col-lg-3 col-md-6 items\">
                                <input type=\"hidden\" name=\"hinhanh_aliasname[]\" value=\"{{hinhanh.aliasname}}\" readonly/>
                                <input type=\"hidden\" name=\"hinhanh_filename[]\" value=\"{{hinhanh.filename}}\" class=\"form-control\"/>
                                <div class=\"card\">
                                    <div class=\"el-card-item\">
                                        <div class=\"el-card-avatar el-overlay-1\"> <img src=\"/uploads/images/thumb_300x200/{{hinhanh.aliasname}}\" alt=\"{{hinhanh.filename}}\" />
                                            <div class=\"el-overlay\">
                                                <ul class=\"el-info\">
                                                    <li><a class=\"btn default btn-outline image-popup-vertical-fit\" href=\"/uploads/images/{{hinhanh.aliasname}}\"><i class=\"mdi mdi-camera\"></i></a></li>
                                                    <li><a class=\"btn default btn-outline delete_file\" href=\"/image/delete?file={{hinhanh.aliasname}}\" onclick=\"return false;\"><i class=\"ti ti-trash\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"el-card-content\">
                                            <h3 class=\"box-title\">{{hinhanh.filename}}</h3><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                            {% endif %}
                          </div>
                          <h3 class=\"card-title\">Thuộc tính sản phẩm</h3><hr>
                          <div id=\"attributes_list\">
                            {% if product.thuoctinh %}
                            {% for tt in product.thuoctinh %}
                            <div class=\"row items\">
                                <div class=\"form-group col-md-4\">
                                    <select name=\"id_attribute[]\" class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">
                                      {% if attributes %}
                                        {% for att in attributes %}
                                          <option value=\"{{att._id}}\" {% if att._id == tt.id_attribute %} selected {% endif %}>{{att.ten}}</option>
                                        {% endfor %}
                                      {% endif %}
                                    </select>
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"gia[]\" class=\"form-control\" placeholder=\"Giá\" required value=\"{{tt.gia}}\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"giaban[]\" class=\"form-control\" placeholder=\"Giá bán\" required value=\"{{tt.giaban}}\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <input type=\"number\" name=\"soluong[]\" class=\"form-control\" placeholder=\"Số lượng\" required value=\"{{tt.soluong}}\">
                                </div>
                                <div class=\"form-group col-md-2\">
                                    <div style=\"width:40px;height:40px;float:left;margin-right:5px;background:#ccc;\" class=\"img_icon\">
                                      {% if tt.hinhanh %}
                                        <img src=\"/uploads/images/thumb_100x100/{{tt.hinhanh}}\" style=\"width:40px;height:40px;\" class=\"icon\"/>
                                        <a href=\"#\" onclick=\"return false;\" class=\"delete_icon\"><i class=\"fa fa-trash\"></i></a>
                                        <input type=\"hidden\" name=\"old_hinhanh[]\" value=\"{{tt.hinhanh}}\" class=\"old_hianhanh\">
                                      {% else %}
                                        <img src=\"/assets/Backend/images/logo-icon.png\" style=\"width:40px;height:40px;\" class=\"icon\"/>
                                      {% endif %}
                                    </div>
                                    <label class=\"file\"> <!--btn btn-info btn-circle btn-sm-->
                                        <input type=\"file\" name=\"hinhanh[]\"  accept=\"image/*\" class=\"image-icon\"/>
                                        <!--<i class=\"fa fa-file-photo-o\"></i>-->
                                    </label>

                                    <a href=\"#\" onclick=\"return false;\" class=\"btn btn-danger btn-circle btn-sm delete-attribute\"><i class=\"fa fa-trash\"></i></a>
                                </div>
                            </div>
                            {% endfor %}
                            {% else %}
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
                                      </div>
                                      <label class=\"file btn btn-info btn-circle btn-sm\">
                                          <input type=\"file\" name=\"hinhanh[]\" style=\"display:none;\" accept=\"image/*\" class=\"image-icon\"/>
                                          <i class=\"fa fa-file-photo-o\"></i>
                                      </label>
                                      <a href=\"#\" onclick=\"return false;\" class=\"btn btn-primary btn-circle btn-sm add-attribute\"><i class=\"fa fa-plus\"></i></a>
                                  </div>
                              </div>
                              {% endif %}
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
{% else %}
<div class=\"container-fluid\">
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
{% endif %}
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
", "Backend/Product/edit.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\Product\\edit.html.twig");
    }
}
