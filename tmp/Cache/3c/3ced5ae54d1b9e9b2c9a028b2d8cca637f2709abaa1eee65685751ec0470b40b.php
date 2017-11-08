<?php

/* Backend/Order/add.html.twig */
class __TwigTemplate_21791b93113fc410a79a0be0b6078202b5ed8f4af764602a073793c080fcef94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Order/add.html.twig", 1);
        $this->blocks = array(
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
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "  <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row page-titles\">
    <div class=\"col-md-12 align-self-center\">
        <h3 class=\"text-themecolor\"><a href=\"/don-hang\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Thêm đơn hàng</h3>
    </div>
    <div>
        <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
    </div>
</div>
<form action=\"/don-hang/create\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            ";
        // line 20
        if (($context["msg"] ?? null)) {
            // line 21
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 23
        echo "            <h3 class=\"card-title\">Thông tin khách hàng</h3>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group row\">
                        <label class=\"control-label col-md-2 text-right p-t-10\">Họ tên</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"hoten\" name=\"hoten\" class=\"form-control\" placeholder=\"Họ tên\" required value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["hoten"] ?? null), "html", null, true);
        echo "\">
                        </div>
                        <label class=\"control-label col-md-2 text-right p-t-10\">Điện thoại</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"dienthoai\" name=\"dienthoai\" class=\"form-control\" placeholder=\"Điện thoại\" required value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["dienthoai"] ?? null), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group row\">
                        <label class=\"control-label col-md-2 text-right p-t-10\">Email</label>
                        <div class=\"col-md-4\">
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">
                        </div>
                        <label class=\"control-label col-md-2 text-right p-t-10\">Địa chỉ</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"diachi\" name=\"diachi\" class=\"form-control\" placeholder=\"Địa chỉ\" required value=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["diachi"] ?? null), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <h3 class=\"card-title\">Thông tin đơn hàng</h3>
            <hr>
            <div id=\"donhang_list\">
              <table class=\"table table-hover\" id=\"sanpham_list\">
                  <thead>
                      <tr>
                          <th>Sản phẩm</th>
                          <th class=\"text-right\">Số lượng</th>
                          <th class=\"text-right\">Đơn giá</th>
                          <th class=\"text-right\">Thành tiền</th>
                          <th>#</th>
                      </tr>
                  </thead>
                  <tbody></tbody>
              </table>
            </div>
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <select name=\"id_product\" id=\"id_product\" class=\"select2 m-b-10\" style=\"width:100%;\"  data-placeholder=\"Chọn sản phẩm\">
                      <option value=\"\">Chọn sản phẩm</option>
                      ";
        // line 74
        if (($context["products"] ?? null)) {
            // line 75
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 76
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "ten", array()), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                      ";
        }
        // line 79
        echo "                    </select>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <select name=\"id_attribute\" id=\"id_attribute\" class=\"select2 m-b-10\" style=\"width:100%;\"  data-placeholder=\"Chọn thuộc tính\">
                      <option value=\"\">Chọn thuộc tính</option>
                    </select>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"form-group\">
                  <div class=\"input-group\">
                    <input type=\"number\" name=\"quantity\" id=\"quantity\" value=\"1\" class=\"form-control\" placeholder=\"Số lượng\"/>
                    <a href=\"#\" onclick=\"return false;\" class=\"btn btn-info btn-circle\" id=\"add_product\"><i class=\"mdi mdi-plus\"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn btn-info\"> <i class=\"fa fa-check\"></i> Cập nhật</button>
                <a href=\"/don-hang\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
";
    }

    // line 109
    public function block_js($context, array $blocks = array())
    {
        // line 110
        echo "<script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/Backend/js/order.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
   \$(document).ready(function() {
      \$(\".select2\").select2();
      sanpham();delete_sanpham();add_sanpham();
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
        return "Backend/Order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 110,  184 => 109,  151 => 79,  148 => 78,  137 => 76,  132 => 75,  130 => 74,  101 => 48,  94 => 44,  81 => 34,  74 => 30,  65 => 23,  59 => 21,  57 => 20,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block css %}
  <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}
{% block body %}
<div class=\"row page-titles\">
    <div class=\"col-md-12 align-self-center\">
        <h3 class=\"text-themecolor\"><a href=\"/don-hang\" class=\"btn btn-info\"><i class=\"mdi mdi-reply-all\"></i></a> Thêm đơn hàng</h3>
    </div>
    <div>
        <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
    </div>
</div>
<form action=\"/don-hang/create\" method=\"POST\" id=\"dinhkemform\" enctype=\"multipart/form-data\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            {% if msg %}
                <div class=\"alert alert-danger\">{{ msg }}</div>
            {% endif %}
            <h3 class=\"card-title\">Thông tin khách hàng</h3>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group row\">
                        <label class=\"control-label col-md-2 text-right p-t-10\">Họ tên</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"hoten\" name=\"hoten\" class=\"form-control\" placeholder=\"Họ tên\" required value=\"{{hoten}}\">
                        </div>
                        <label class=\"control-label col-md-2 text-right p-t-10\">Điện thoại</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"dienthoai\" name=\"dienthoai\" class=\"form-control\" placeholder=\"Điện thoại\" required value=\"{{dienthoai}}\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group row\">
                        <label class=\"control-label col-md-2 text-right p-t-10\">Email</label>
                        <div class=\"col-md-4\">
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required value=\"{{email}}\">
                        </div>
                        <label class=\"control-label col-md-2 text-right p-t-10\">Địa chỉ</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"diachi\" name=\"diachi\" class=\"form-control\" placeholder=\"Địa chỉ\" required value=\"{{diachi}}\">
                        </div>
                    </div>
                </div>
            </div>
            <h3 class=\"card-title\">Thông tin đơn hàng</h3>
            <hr>
            <div id=\"donhang_list\">
              <table class=\"table table-hover\" id=\"sanpham_list\">
                  <thead>
                      <tr>
                          <th>Sản phẩm</th>
                          <th class=\"text-right\">Số lượng</th>
                          <th class=\"text-right\">Đơn giá</th>
                          <th class=\"text-right\">Thành tiền</th>
                          <th>#</th>
                      </tr>
                  </thead>
                  <tbody></tbody>
              </table>
            </div>
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <select name=\"id_product\" id=\"id_product\" class=\"select2 m-b-10\" style=\"width:100%;\"  data-placeholder=\"Chọn sản phẩm\">
                      <option value=\"\">Chọn sản phẩm</option>
                      {% if products %}
                      {% for product in products %}
                        <option value=\"{{product._id}}\">{{product.ten}}</option>
                      {% endfor  %}
                      {% endif %}
                    </select>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <select name=\"id_attribute\" id=\"id_attribute\" class=\"select2 m-b-10\" style=\"width:100%;\"  data-placeholder=\"Chọn thuộc tính\">
                      <option value=\"\">Chọn thuộc tính</option>
                    </select>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"form-group\">
                  <div class=\"input-group\">
                    <input type=\"number\" name=\"quantity\" id=\"quantity\" value=\"1\" class=\"form-control\" placeholder=\"Số lượng\"/>
                    <a href=\"#\" onclick=\"return false;\" class=\"btn btn-info btn-circle\" id=\"add_product\"><i class=\"mdi mdi-plus\"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn btn-info\"> <i class=\"fa fa-check\"></i> Cập nhật</button>
                <a href=\"/don-hang\" class=\"btn btn-inverse\"><i class=\"mdi mdi-reply-all\"></i> Trở về</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
{% endblock %}
{% block js %}
<script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/Backend/js/order.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
   \$(document).ready(function() {
      \$(\".select2\").select2();
      sanpham();delete_sanpham();add_sanpham();
      \$('.top').click(function(){
        \$('html, body').animate({
          scrollTop: \$( \$.attr(this, 'href') ).offset().top
        }, 500);
        return false;
      });
  });
</script>
{% endblock %}
", "Backend/Order/add.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\Order\\add.html.twig");
    }
}
