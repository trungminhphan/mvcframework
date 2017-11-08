<?php

/* Backend/Order/detail.html.twig */
class __TwigTemplate_6bfe7efef8349433d228ce4088c388cc69fa893cca91f6a077b861b3848f8d89 extends Twig_Template
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
            <div class=\"card card-body\">
                <h3><b>ĐƠN HÀNG</b> <span class=\"pull-right\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "madonhang", array()), "html", null, true);
        echo "</span></h3>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "_id", array()), "html", null, true);
        echo "\" />
                ";
        // line 25
        $context["tongthanhtien"] = 0;
        // line 26
        echo "                <hr>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"pull-left\">
                            <address>
                                <h3> &nbsp;<b class=\"text-danger\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "fullname", array()), "html", null, true);
        echo "</b></h3>
                                <p class=\"text-muted m-l-5\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "username", array()), "html", null, true);
        echo "</p>
                            </address>
                        </div>
                        <div class=\"pull-right text-right\">
                            <address>
                                <h3>Thông tin khách hàng,</h3>
                                <h4 class=\"font-bold\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "hoten", array()), "html", null, true);
        echo ",</h4>
                                <p class=\"text-muted m-l-30\">Điện thoại: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "dienthoai", array()), "html", null, true);
        echo ",
                                    <br/> Email: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "email", array()), "html", null, true);
        echo ",
                                    <br/> Địa chỉ: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "diachi", array()), "html", null, true);
        echo "</p>
                                <p class=\"m-t-30\"><b>Ngày mua :</b> <i class=\"fa fa-calendar\"></i> ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "createAt", array()), "sec", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>
                            </address>
                        </div>
                    </div>
                    ";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "sanpham", array())) {
            // line 47
            echo "                    <div class=\"col-md-12\">
                      <div class=\"card-body\">
                        <div class=\"profiletimeline\">
                          ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "sanpham", array()));
            foreach ($context['_seq'] as $context["sp_key"] => $context["sp"]) {
                // line 51
                echo "                          <input type=\"hidden\" name=\"id_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" id=\"id_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\">
                            <div class=\"sl-item\">
                                <div class=\"sl-left\"><img src=\"/uploads/images/thumb_100x100/";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thumb", array()), "html", null, true);
                echo "\" alt=\"\" class=\"img-circle\" /> </div>
                                <div class=\"sl-right\">
                                    <div>
                                        <h3>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "tensanpham", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "tenthuoctinh", array()), "html", null, true);
                echo "</h3>
                                        <div class=\"row p-b-10\">
                                          <div class=\"col-md-4\">Số lượng: ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "soluong", array()), "html", null, true);
                echo "</div>
                                          <div class=\"col-md-4\">Đơn giá: ";
                // line 59
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "giaban", array()), 2, ",", "."), "html", null, true);
                echo "</div>
                                          <div class=\"col-md-4\">Thành tiền: ";
                // line 60
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thanhtien", array()), 2, ",", "."), "html", null, true);
                echo "</div>
                                          ";
                // line 61
                $context["tongthanhtien"] = (($context["tongthanhtien"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thanhtien", array()));
                // line 62
                echo "                                        </div>
                                        ";
                // line 63
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "hinhanh", array())) {
                    // line 64
                    echo "                                        <div class=\"row\">
                                          ";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "hinhanh", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["ha"]) {
                        // line 66
                        echo "                                            <div class=\"col-lg-3 col-md-6\"><img src=\"/uploads/images/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ha"], "aliasname", array()), "html", null, true);
                        echo "\" class=\"img-responsive radius\" /></div>
                                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ha'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "                                        </div>
                                        ";
                }
                // line 70
                echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                              <div class=\"col-md-12\">
                                <h4 class=\"card-title\">Tình trạng giao hàng </h4>
                                <ul class=\"list-icons\" id=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" style=\"padding-left:20px;font-size:14px;\">
                                    <li><i class=\"ti-alarm-clock\"></i> ";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "createAt", array()), "sec", array()), "d/m/Y H:i"), "html", null, true);
                echo " <span class=\"label label-info font-weight-100\">Đặt hàng, chờ xử lý</span></li>
                                    ";
                // line 78
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "tinhtrang", array())) {
                    // line 79
                    echo "                                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "tinhtrang", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                        // line 80
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_tinhtrang", array()) == 0)) {
                            // line 81
                            echo "                                           ";
                            $context["label"] = "label-warning";
                            // line 82
                            echo "                                          ";
                        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_tinhtrang", array()) == 1)) {
                            // line 83
                            echo "                                            ";
                            $context["label"] = "label-info";
                            // line 84
                            echo "                                          ";
                        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_tinhtrang", array()) == 2)) {
                            // line 85
                            echo "                                            ";
                            $context["label"] = "label-success";
                            // line 86
                            echo "                                          ";
                        } else {
                            // line 87
                            echo "                                            ";
                            $context["label"] = "label-danger";
                            // line 88
                            echo "                                        ";
                        }
                        // line 89
                        echo "                                        <li><i class=\"ti-alarm-clock\"></i> ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "createAt", array()), "sec", array()), "d/m/Y H:i"), "html", null, true);
                        echo " <span class=\"label ";
                        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                        echo " font-weight-100\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["tinhtrang"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_tinhtrang", array()), array(), "array"), "html", null, true);
                        echo "</span> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "noidung", array()), "html", null, true);
                        echo " <a href=\"/don-hang/tinh-trang/delete?id=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "_id", array()), "html", null, true);
                        echo "&key=";
                        echo twig_escape_filter($this->env, $context["sp_key"], "html", null, true);
                        echo "&id_tinhtrang=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "_id", array()), "html", null, true);
                        echo "\" onclick=\"return false;\" class=\"delete_tinhtrang\"><i class=\"mdi mdi-delete\"></i></a></li>
                                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                                    ";
                }
                // line 92
                echo "                                </ul>
                              </div>
                            </div>
                            <h4>Cập nhật tình trạng giao hàng</h4>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                              <div class=\"form-group\">
                                  <input type=\"hidden\" name=\"key_";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" id=\"key_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["sp_key"], "html", null, true);
                echo "\" />
                                  <input type=\"text\" name=\"noidung\" id=\"noidung_";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" value=\"\" class=\"form-control\" placeholder=\"Nội dung\">
                                </div>
                              </div>
                              <div class=\"col-md-4\">
                                <select name=\"id_tinhtrang\" id=\"id_tinhtrang_";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" class=\"select2\" style=\"width:100%;\">
                                  ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tinhtrang"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tt"]) {
                    // line 106
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
                // line 108
                echo "                                </select>
                              </div>
                              <div class=\"col-md-2\">
                                <a href=\"#\" class=\"btn btn-info add_tinhtrang\" name=\"";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "_id", array()), "html", null, true);
                echo "\" onclick=\"return false;\"><i class=\"mdi mdi-pencil\"></i></a>
                              </div>
                            </div>
                            <hr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sp_key'], $context['sp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                        </div>
                    </div>
                  </div>
                  ";
        }
        // line 120
        echo "                    <div class=\"col-md-12\">
                        <div class=\"pull-right m-t-30 text-right\">
                            <hr>
                            <h3><b>Tổng cộng :</b> ";
        // line 123
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["tongthanhtien"] ?? null), 2, ",", "."), "html", null, true);
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

    // line 132
    public function block_js($context, array $blocks = array())
    {
        // line 133
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
        return array (  352 => 133,  349 => 132,  336 => 123,  331 => 120,  325 => 116,  314 => 111,  309 => 108,  298 => 106,  294 => 105,  290 => 104,  283 => 100,  275 => 99,  266 => 92,  263 => 91,  242 => 89,  239 => 88,  236 => 87,  233 => 86,  230 => 85,  227 => 84,  224 => 83,  221 => 82,  218 => 81,  215 => 80,  210 => 79,  208 => 78,  204 => 77,  200 => 76,  192 => 70,  188 => 68,  179 => 66,  175 => 65,  172 => 64,  170 => 63,  167 => 62,  165 => 61,  161 => 60,  157 => 59,  153 => 58,  146 => 56,  140 => 53,  130 => 51,  126 => 50,  121 => 47,  119 => 46,  112 => 42,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  87 => 32,  83 => 31,  76 => 26,  74 => 25,  70 => 24,  66 => 23,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
            <div class=\"card card-body\">
                <h3><b>ĐƠN HÀNG</b> <span class=\"pull-right\">{{order.madonhang}}</span></h3>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{order._id}}\" />
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
                          {% for sp_key, sp in order.sanpham %}
                          <input type=\"hidden\" name=\"id_{{sp._id}}\" id=\"id_{{sp._id}}\" value=\"{{sp._id}}\">
                            <div class=\"sl-item\">
                                <div class=\"sl-left\"><img src=\"/uploads/images/thumb_100x100/{{sp.thumb}}\" alt=\"\" class=\"img-circle\" /> </div>
                                <div class=\"sl-right\">
                                    <div>
                                        <h3>{{sp.tensanpham}} {{sp.tenthuoctinh}}</h3>
                                        <div class=\"row p-b-10\">
                                          <div class=\"col-md-4\">Số lượng: {{sp.soluong}}</div>
                                          <div class=\"col-md-4\">Đơn giá: {{sp.giaban|number_format(2, ',', '.')}}</div>
                                          <div class=\"col-md-4\">Thành tiền: {{sp.thanhtien|number_format(2, ',', '.')}}</div>
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
                                <ul class=\"list-icons\" id=\"{{sp._id}}\" style=\"padding-left:20px;font-size:14px;\">
                                    <li><i class=\"ti-alarm-clock\"></i> {{sp.createAt.sec|date(\"d/m/Y H:i\")}} <span class=\"label label-info font-weight-100\">Đặt hàng, chờ xử lý</span></li>
                                    {% if sp.tinhtrang %}
                                      {% for t in sp.tinhtrang %}
                                        {% if t.id_tinhtrang == 0 %}
                                           {% set label = 'label-warning' %}
                                          {% elseif t.id_tinhtrang == 1 %}
                                            {% set label = 'label-info' %}
                                          {% elseif t.id_tinhtrang == 2 %}
                                            {% set label = 'label-success' %}
                                          {% else %}
                                            {% set label = 'label-danger' %}
                                        {% endif %}
                                        <li><i class=\"ti-alarm-clock\"></i> {{t.createAt.sec|date(\"d/m/Y H:i\")}} <span class=\"label {{label}} font-weight-100\">{{tinhtrang[t.id_tinhtrang]}}</span> {{t.noidung}} <a href=\"/don-hang/tinh-trang/delete?id={{order._id}}&key={{sp_key}}&id_tinhtrang={{t._id}}\" onclick=\"return false;\" class=\"delete_tinhtrang\"><i class=\"mdi mdi-delete\"></i></a></li>
                                      {% endfor %}
                                    {% endif %}
                                </ul>
                              </div>
                            </div>
                            <h4>Cập nhật tình trạng giao hàng</h4>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                              <div class=\"form-group\">
                                  <input type=\"hidden\" name=\"key_{{sp._id}}\" id=\"key_{{sp._id}}\" value=\"{{sp_key}}\" />
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
                            <h3><b>Tổng cộng :</b> {{tongthanhtien|number_format(2, ',', '.')}}</h3>
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
", "Backend/Order/detail.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Order\\detail.html.twig");
    }
}
