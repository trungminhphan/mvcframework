<?php

/* Backend/Order/print.html.twig */
class __TwigTemplate_92f8ec81317d0bb7d9d810e817893a33881dd798a24d6fe5a859dd6b339335f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Order/print.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "In đơn hàng";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row page-titles\">
    <div class=\"col-md-12 align-self-center\">
        <h3 class=\"text-themecolor\"><i class=\"mdi mdi-printer\"></i> In đơn hàng</h3>
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
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "madonhang", array()), "html", null, true);
        echo "</span></h3>
                <hr>
                ";
        // line 21
        $context["tongthanhtien"] = 0;
        // line 22
        echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"pull-left\">
                            <address>
                                <h3> &nbsp;<b class=\"text-danger\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "fullname", array()), "html", null, true);
        echo "</b></h3>
                                <p class=\"text-muted m-l-5\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "username", array()), "html", null, true);
        echo "</p>
                            </address>
                        </div>
                        <div class=\"pull-right text-right\">
                            <address>
                                <h3>Thông tin khách hàng,</h3>
                                <h4 class=\"font-bold\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "hoten", array()), "html", null, true);
        echo ",</h4>
                                <p class=\"text-muted m-l-30\">Điện thoại: ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "dienthoai", array()), "html", null, true);
        echo ",
                                    <br/> Email: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "email", array()), "html", null, true);
        echo ",
                                    <br/> Địa chỉ: ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "diachi", array()), "html", null, true);
        echo "</p>
                                <p class=\"m-t-30\"><b>Ngày mua :</b> <i class=\"fa fa-calendar\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "createAt", array()), "sec", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>
                            </address>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"table-responsive m-t-40\" style=\"clear: both;\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th class=\"text-center\">#</th>
                                        <th>Sản phẩm</th>
                                        <th class=\"text-right\">Số lượng</th>
                                        <th class=\"text-right\">Đơn giá</th>
                                        <th class=\"text-right\">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 54
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "sanpham", array())) {
            // line 55
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "sanpham", array()));
            foreach ($context['_seq'] as $context["key"] => $context["sp"]) {
                // line 56
                echo "                                ";
                $context["tongthanhtien"] = (($context["tongthanhtien"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thanhtien", array()));
                // line 57
                echo "                                    <tr>
                                        <td class=\"text-center\">";
                // line 58
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "tensanpham", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "tenthuoctinh", array()), "html", null, true);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "soluong", array()), "html", null, true);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 61
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "giaban", array()), 2, ",", "."), "html", null, true);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 62
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thanhtien", array()), 2, ",", "."), "html", null, true);
                echo "</td>
                                    </tr>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                ";
        }
        // line 66
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"pull-right m-t-30 text-right\">
                            <hr>
                            <h3><b>Tổng cộng :</b> ";
        // line 73
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["tongthanhtien"] ?? null), 2, ",", "."), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"card card-body text-right\">
                <button id=\"print\" class=\"btn btn-default btn-outline\" type=\"button\"> <span><i class=\"fa fa-print\"></i> In hóa đơn</span> </button>
            </div>
        </div>
    </div>
";
    }

    // line 85
    public function block_js($context, array $blocks = array())
    {
        // line 86
        echo "<script src=\"/assets/Backend/js/jquery.PrintArea.js\" type=\"text/JavaScript\"></script>
    <script>
    \$(document).ready(function() {
        \$(\"#print\").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == \"popup\";
            var options = {
                mode: mode,
                popClose: close
            };
            \$(\"div.printableArea\").printArea(options);
        });
    });
    </script>

";
    }

    public function getTemplateName()
    {
        return "Backend/Order/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 86,  186 => 85,  170 => 73,  161 => 66,  158 => 65,  149 => 62,  145 => 61,  141 => 60,  135 => 59,  131 => 58,  128 => 57,  125 => 56,  120 => 55,  118 => 54,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  73 => 27,  69 => 26,  63 => 22,  61 => 21,  56 => 19,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block title %}In đơn hàng{% endblock %}
{% block body %}
<div class=\"row page-titles\">
    <div class=\"col-md-12 align-self-center\">
        <h3 class=\"text-themecolor\"><i class=\"mdi mdi-printer\"></i> In đơn hàng</h3>
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
                <hr>
                {% set tongthanhtien = 0 %}
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
                    <div class=\"col-md-12\">
                        <div class=\"table-responsive m-t-40\" style=\"clear: both;\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th class=\"text-center\">#</th>
                                        <th>Sản phẩm</th>
                                        <th class=\"text-right\">Số lượng</th>
                                        <th class=\"text-right\">Đơn giá</th>
                                        <th class=\"text-right\">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% if order.sanpham %}
                                {% for key, sp in order.sanpham %}
                                {% set tongthanhtien = tongthanhtien + sp.thanhtien %}
                                    <tr>
                                        <td class=\"text-center\">{{key+1}}</td>
                                        <td>{{sp.tensanpham}} {{sp.tenthuoctinh}}</td>
                                        <td class=\"text-right\">{{sp.soluong}}</td>
                                        <td class=\"text-right\">{{sp.giaban|number_format(2, ',', '.')}}</td>
                                        <td class=\"text-right\">{{sp.thanhtien|number_format(2, ',', '.')}}</td>
                                    </tr>
                                  {% endfor %}
                                {% endif %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"pull-right m-t-30 text-right\">
                            <hr>
                            <h3><b>Tổng cộng :</b> {{tongthanhtien|number_format(2, ',', '.')}}</h3>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"card card-body text-right\">
                <button id=\"print\" class=\"btn btn-default btn-outline\" type=\"button\"> <span><i class=\"fa fa-print\"></i> In hóa đơn</span> </button>
            </div>
        </div>
    </div>
{% endblock %}
{% block js%}
<script src=\"/assets/Backend/js/jquery.PrintArea.js\" type=\"text/JavaScript\"></script>
    <script>
    \$(document).ready(function() {
        \$(\"#print\").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == \"popup\";
            var options = {
                mode: mode,
                popClose: close
            };
            \$(\"div.printableArea\").printArea(options);
        });
    });
    </script>

{% endblock %}
", "Backend/Order/print.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Order\\print.html.twig");
    }
}
