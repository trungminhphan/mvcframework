<?php

/* Backend/Order/add.html.twig */
class __TwigTemplate_8f92c4f39e842ed4268e5c505e0b3388462c16c6c1a6a08b34c1f34d06c87bbc extends Twig_Template
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
            <h3 class=\"card-title\">Thông tin khách hàng</h3>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group row\">
                        <label class=\"control-label col-md-2 text-right p-t-10\">Họ tên</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"hoten\" name=\"hoten\" class=\"form-control\" placeholder=\"Họ tên\" required>
                        </div>
                        <label class=\"control-label col-md-2 text-right p-t-10\">Điện thoại</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"dienthoai\" name=\"dienthoai\" class=\"form-control\" placeholder=\"Điện thoại\" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group row\">
                        <label class=\"control-label col-md-2 text-right p-t-10\">Email</label>
                        <div class=\"col-md-4\">
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                        </div>
                        <label class=\"control-label col-md-2 text-right p-t-10\">Địa chỉ</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"diachi\" name=\"diachi\" class=\"form-control\" placeholder=\"Địa chỉ\" required>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class=\"card-title\">Thông tin đơn hàng</h3>
            <hr>
            <div id=\"donhang_list\"> </div>
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <select name=\"id_product\" id=\"id_product\" class=\"select2 m-b-10\" style=\"width:100%;\"  data-placeholder=\"Chọn sản phẩm\">
                      <option value=\"\">Chọn sản phẩm</option>
                      ";
        // line 58
        if (($context["products"] ?? null)) {
            // line 59
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 60
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
            // line 62
            echo "                      ";
        }
        // line 63
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
                    <input type=\"number\" name=\"quantity\" value=\"1\" class=\"form-control\" placeholder=\"Số lượng\"/>
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

    // line 93
    public function block_js($context, array $blocks = array())
    {
        // line 94
        echo "  <script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
  <script src=\"/assets/Backend/js/order.js\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\">
     \$(document).ready(function() {
        \$(\".select2\").select2();
        sanpham();
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
        return array (  152 => 94,  149 => 93,  116 => 63,  113 => 62,  102 => 60,  97 => 59,  95 => 58,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
            <h3 class=\"card-title\">Thông tin khách hàng</h3>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group row\">
                        <label class=\"control-label col-md-2 text-right p-t-10\">Họ tên</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"hoten\" name=\"hoten\" class=\"form-control\" placeholder=\"Họ tên\" required>
                        </div>
                        <label class=\"control-label col-md-2 text-right p-t-10\">Điện thoại</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"dienthoai\" name=\"dienthoai\" class=\"form-control\" placeholder=\"Điện thoại\" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group row\">
                        <label class=\"control-label col-md-2 text-right p-t-10\">Email</label>
                        <div class=\"col-md-4\">
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                        </div>
                        <label class=\"control-label col-md-2 text-right p-t-10\">Địa chỉ</label>
                        <div class=\"col-md-4\">
                            <input type=\"text\" id=\"diachi\" name=\"diachi\" class=\"form-control\" placeholder=\"Địa chỉ\" required>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class=\"card-title\">Thông tin đơn hàng</h3>
            <hr>
            <div id=\"donhang_list\"> </div>
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
                    <input type=\"number\" name=\"quantity\" value=\"1\" class=\"form-control\" placeholder=\"Số lượng\"/>
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
        sanpham();
        \$('.top').click(function(){
          \$('html, body').animate({
            scrollTop: \$( \$.attr(this, 'href') ).offset().top
          }, 500);
          return false;
        });
    });
  </script>
{% endblock %}
", "Backend/Order/add.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\Order\\add.html.twig");
    }
}
