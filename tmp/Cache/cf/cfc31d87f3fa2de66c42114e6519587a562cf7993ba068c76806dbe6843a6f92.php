<?php

/* Backend/Order/detail.html.twig */
class __TwigTemplate_607d3120515efde411937894757308de291df4bce045cba8c68d40f901a94a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Order/detail.html.twig", 1);
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
        echo "Thông tin đơn hàng";
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row page-titles\">
    <div class=\"col-md-12 align-self-center\">
        <h3 class=\"text-themecolor\"><i class=\"mdi mdi-cart-plus\"></i> Thông tin đơn hàng</h3>
    </div>
    <div>
        <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
    </div>
</div>
<div class=\"container-fluid\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card card-body printableArea\">
                <h3><b>ĐƠN HÀNG</b> <span class=\"pull-right\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "madonhang", array()), "html", null, true);
        echo "</span></h3>
                ";
        // line 24
        $context["tongthanhtien"] = 0;
        // line 25
        echo "                <hr>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"pull-left\">
                            <address>
                                <h3> &nbsp;<b class=\"text-danger\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "fullname", array()), "html", null, true);
        echo "</b></h3>
                                <p class=\"text-muted m-l-5\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "username", array()), "html", null, true);
        echo "</p>
                            </address>
                        </div>
                        <div class=\"pull-right text-right\">
                            <address>
                                <h3>Thông tin khách hàng,</h3>
                                <h4 class=\"font-bold\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "hoten", array()), "html", null, true);
        echo ",</h4>
                                <p class=\"text-muted m-l-30\">Điện thoại: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "dienthoai", array()), "html", null, true);
        echo ",
                                    <br/> Email: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "email", array()), "html", null, true);
        echo ",
                                    <br/> Địa chỉ: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "diachi", array()), "html", null, true);
        echo "</p>
                                <p class=\"m-t-30\"><b>Ngày mua :</b> <i class=\"fa fa-calendar\"></i> ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "createAt", array()), "sec", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>
                            </address>
                        </div>
                    </div>
                    ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "sanpham", array())) {
            // line 46
            echo "                    <div class=\"col-md-12\">
                      <div class=\"card-body\">
                        <div class=\"profiletimeline\">
                          ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "sanpham", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
                // line 50
                echo "                            <div class=\"sl-item\">
                                <div class=\"sl-left\"><img src=\"/uploads/images/thumb_100x100/";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thumb", array()), "html", null, true);
                echo "\" alt=\"\" class=\"img-circle\" /> </div>
                                <div class=\"sl-right\">
                                    <div>
                                        <h3>Tên sản phẩm</h3>
                                        <div class=\"row p-b-10\">
                                          <div class=\"col-md-4\">Số lượng: ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "soluong", array()), "html", null, true);
                echo "</div>
                                          <div class=\"col-md-4\">Đơn giá: ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "giaban", array()), "html", null, true);
                echo "</div>
                                          <div class=\"col-md-4\">Thành tiền: ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thanhtien", array()), "html", null, true);
                echo "</div>
                                          ";
                // line 59
                $context["tongthanhtien"] = (($context["tongthanhtien"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thanhtien", array()));
                // line 60
                echo "                                        </div>
                                        ";
                // line 61
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "hinhanh", array())) {
                    // line 62
                    echo "                                        <div class=\"row\">
                                          ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "hinhanh", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["ha"]) {
                        // line 64
                        echo "                                            <div class=\"col-lg-3 col-md-6\"><img src=\"/uploads/images/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ha"], "aliasname", array()), "html", null, true);
                        echo "\" class=\"img-responsive radius\" /></div>
                                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ha'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "                                        </div>
                                        ";
                }
                // line 68
                echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                              <div class=\"col-md-12\">
                                <h4 class=\"card-title\">Tình trạng giao hàng </h4>
                                <ul class=\"list-icons\" id=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\">
                                    <li><i class=\"ti-alarm-clock\"></i> 10/10/2017 10:30 <span class=\"label label-info font-weight-100\">Giao hàng</span> Lorem ipsum dolor sit amet ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo " <a href=\"#\" onclick=\"return false;\" class=\"delete_tinhtrang\"><i class=\"mdi mdi-delete\"></i></a></li>
                                </ul>
                              </div>
                            </div>
                            <h4>Cập nhật tình trạng giao hàng</h4>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                              <div class=\"form-group\">
                                  <input type=\"text\" name=\"noidung\" id=\"noidung_";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" value=\"\" class=\"form-control\" placeholder=\"Nội dung\">
                                </div>
                              </div>
                              <div class=\"col-md-4\">
                                <select name=\"id_tinhtrang\" id=\"id_tinhtrang_";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" class=\"select2\" style=\"width:100%;\">
                                  ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tinhtrang"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tt"]) {
                    // line 89
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["tt"], "html", null, true);
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                                </select>
                              </div>
                              <div class=\"col-md-2\">
                                <a href=\"#\" class=\"btn btn-info add_tinhtrang\" name=\"";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" onclick=\"return false;\"><i class=\"mdi mdi-pencil\"></i></a>
                              </div>
                            </div>
                            <hr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                        </div>
                    </div>
                  </div>
                  ";
        }
        // line 103
        echo "                    <div class=\"col-md-12\">
                        <div class=\"pull-right m-t-30 text-right\">
                            <hr>
                            <h3><b>Tổng cộng :</b> ";
        // line 106
        echo twig_escape_filter($this->env, ($context["tongthanhtien"] ?? null), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 115
    public function block_js($context, array $blocks = array())
    {
        // line 116
        echo "<script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js\"></script>
<script src=\"/assets/Backend/js/order.js\" type=\"text/javascript\">
</script>
    <script>
    \$(document).ready(function() {
        \$(\".select2\").select2();add_tinhtrang();delete_tinhtrang();
    });
    </script>

";
    }

    public function getTemplateName()
    {
        return "Backend/Order/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 116,  265 => 115,  252 => 106,  247 => 103,  241 => 99,  230 => 94,  225 => 91,  214 => 89,  210 => 88,  206 => 87,  199 => 83,  188 => 75,  184 => 74,  176 => 68,  172 => 66,  163 => 64,  159 => 63,  156 => 62,  154 => 61,  151 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  129 => 51,  126 => 50,  122 => 49,  117 => 46,  115 => 45,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  83 => 31,  79 => 30,  72 => 25,  70 => 24,  66 => 23,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block title %}Thông tin đơn hàng{% endblock %}
{% block css %}
  <link href=\"/assets/Backend/plugins/select2/dist/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"/assets/Backend/plugins/Magnific-Popup-master/dist/magnific-popup.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"row page-titles\">
    <div class=\"col-md-12 align-self-center\">
        <h3 class=\"text-themecolor\"><i class=\"mdi mdi-cart-plus\"></i> Thông tin đơn hàng</h3>
    </div>
    <div>
        <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
    </div>
</div>
<div class=\"container-fluid\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card card-body printableArea\">
                <h3><b>ĐƠN HÀNG</b> <span class=\"pull-right\">{{order.madonhang}}</span></h3>
                {% set tongthanhtien = 0 %}
                <hr>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"pull-left\">
                            <address>
                                <h3> &nbsp;<b class=\"text-danger\">{{session.fullname}}</b></h3>
                                <p class=\"text-muted m-l-5\">{{session.username}}</p>
                            </address>
                        </div>
                        <div class=\"pull-right text-right\">
                            <address>
                                <h3>Thông tin khách hàng,</h3>
                                <h4 class=\"font-bold\">{{order.hoten}},</h4>
                                <p class=\"text-muted m-l-30\">Điện thoại: {{order.dienthoai}},
                                    <br/> Email: {{order.email}},
                                    <br/> Địa chỉ: {{order.diachi}}</p>
                                <p class=\"m-t-30\"><b>Ngày mua :</b> <i class=\"fa fa-calendar\"></i> {{order.createAt.sec|date(\"d/m/Y H:i\")}}</p>
                            </address>
                        </div>
                    </div>
                    {% if order.sanpham %}
                    <div class=\"col-md-12\">
                      <div class=\"card-body\">
                        <div class=\"profiletimeline\">
                          {% for sp in order.sanpham %}
                            <div class=\"sl-item\">
                                <div class=\"sl-left\"><img src=\"/uploads/images/thumb_100x100/{{sp.thumb}}\" alt=\"\" class=\"img-circle\" /> </div>
                                <div class=\"sl-right\">
                                    <div>
                                        <h3>Tên sản phẩm</h3>
                                        <div class=\"row p-b-10\">
                                          <div class=\"col-md-4\">Số lượng: {{sp.soluong}}</div>
                                          <div class=\"col-md-4\">Đơn giá: {{sp.giaban}}</div>
                                          <div class=\"col-md-4\">Thành tiền: {{sp.thanhtien}}</div>
                                          {% set tongthanhtien = tongthanhtien + sp.thanhtien %}
                                        </div>
                                        {% if sp.hinhanh %}
                                        <div class=\"row\">
                                          {% for ha in sp.hinhanh %}
                                            <div class=\"col-lg-3 col-md-6\"><img src=\"/uploads/images/{{ha.aliasname}}\" class=\"img-responsive radius\" /></div>
                                          {% endfor %}
                                        </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                              <div class=\"col-md-12\">
                                <h4 class=\"card-title\">Tình trạng giao hàng </h4>
                                <ul class=\"list-icons\" id=\"{{sp._id}}\">
                                    <li><i class=\"ti-alarm-clock\"></i> 10/10/2017 10:30 <span class=\"label label-info font-weight-100\">Giao hàng</span> Lorem ipsum dolor sit amet {{sp._id}} <a href=\"#\" onclick=\"return false;\" class=\"delete_tinhtrang\"><i class=\"mdi mdi-delete\"></i></a></li>
                                </ul>
                              </div>
                            </div>
                            <h4>Cập nhật tình trạng giao hàng</h4>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                              <div class=\"form-group\">
                                  <input type=\"text\" name=\"noidung\" id=\"noidung_{{sp._id}}\" value=\"\" class=\"form-control\" placeholder=\"Nội dung\">
                                </div>
                              </div>
                              <div class=\"col-md-4\">
                                <select name=\"id_tinhtrang\" id=\"id_tinhtrang_{{sp._id}}\" class=\"select2\" style=\"width:100%;\">
                                  {% for key, tt in tinhtrang %}
                                    <option value=\"{{key}}\">{{tt}}</option>
                                  {% endfor %}
                                </select>
                              </div>
                              <div class=\"col-md-2\">
                                <a href=\"#\" class=\"btn btn-info add_tinhtrang\" name=\"{{sp._id}}\" onclick=\"return false;\"><i class=\"mdi mdi-pencil\"></i></a>
                              </div>
                            </div>
                            <hr>
                        {% endfor %}
                        </div>
                    </div>
                  </div>
                  {% endif %}
                    <div class=\"col-md-12\">
                        <div class=\"pull-right m-t-30 text-right\">
                            <hr>
                            <h3><b>Tổng cộng :</b> {{tongthanhtien}}</h3>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block js %}
<script src=\"/assets/Backend/plugins/select2/dist/js/select2.full.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/Backend/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js\"></script>
<script src=\"/assets/Backend/js/order.js\" type=\"text/javascript\">
</script>
    <script>
    \$(document).ready(function() {
        \$(\".select2\").select2();add_tinhtrang();delete_tinhtrang();
    });
    </script>

{% endblock %}
", "Backend/Order/detail.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\Order\\detail.html.twig");
    }
}
