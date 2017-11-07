<?php

/* Backend/Order/print.html.twig */
class __TwigTemplate_d0b1e35fee1fad71b785a00059f992a491ca55e47f0091e5c3ac8c9432030222 extends Twig_Template
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
                <h3><b>ĐƠN HÀNG</b> <span class=\"pull-right\">#5669626</span></h3>
                <hr>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"pull-left\">
                            <address>
                                <h3> &nbsp;<b class=\"text-danger\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "fullname", array()), "html", null, true);
        echo "</b></h3>
                                <p class=\"text-muted m-l-5\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "username", array()), "html", null, true);
        echo "</p>
                            </address>
                        </div>
                        <div class=\"pull-right text-right\">
                            <address>
                                <h3>Thông tin khách hàng,</h3>
                                <h4 class=\"font-bold\">Phan Minh Trung,</h4>
                                <p class=\"text-muted m-l-30\">Điện thoại: 0985.954347,
                                    <br/> Email: trungminhphan@gmail.com,
                                    <br/> Địa chỉ: 60 Lưu Hữu Phước, Tp. Long Xuyên, An Giang</p>
                                <p class=\"m-t-30\"><b>Ngày mua :</b> <i class=\"fa fa-calendar\"></i> 06/11/2017 10:30</p>
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
                                    <tr>
                                        <td class=\"text-center\">1</td>
                                        <td>Milk Powder</td>
                                        <td class=\"text-right\">2 </td>
                                        <td class=\"text-right\"> \$24 </td>
                                        <td class=\"text-right\"> \$48 </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">2</td>
                                        <td>Air Conditioner</td>
                                        <td class=\"text-right\"> 3 </td>
                                        <td class=\"text-right\"> \$500 </td>
                                        <td class=\"text-right\"> \$1500 </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">3</td>
                                        <td>RC Cars</td>
                                        <td class=\"text-right\"> 20 </td>
                                        <td class=\"text-right\"> %600 </td>
                                        <td class=\"text-right\"> \$12000 </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">4</td>
                                        <td>Down Coat</td>
                                        <td class=\"text-right\"> 60 </td>
                                        <td class=\"text-right\">\$5 </td>
                                        <td class=\"text-right\"> \$300 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"pull-right m-t-30 text-right\">
                            <hr>
                            <h3><b>Tổng cộng :</b> \$13,986</h3>
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

    // line 100
    public function block_js($context, array $blocks = array())
    {
        // line 101
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
        return array (  147 => 101,  144 => 100,  66 => 26,  62 => 25,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
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
                <h3><b>ĐƠN HÀNG</b> <span class=\"pull-right\">#5669626</span></h3>
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
                                <h4 class=\"font-bold\">Phan Minh Trung,</h4>
                                <p class=\"text-muted m-l-30\">Điện thoại: 0985.954347,
                                    <br/> Email: trungminhphan@gmail.com,
                                    <br/> Địa chỉ: 60 Lưu Hữu Phước, Tp. Long Xuyên, An Giang</p>
                                <p class=\"m-t-30\"><b>Ngày mua :</b> <i class=\"fa fa-calendar\"></i> 06/11/2017 10:30</p>
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
                                    <tr>
                                        <td class=\"text-center\">1</td>
                                        <td>Milk Powder</td>
                                        <td class=\"text-right\">2 </td>
                                        <td class=\"text-right\"> \$24 </td>
                                        <td class=\"text-right\"> \$48 </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">2</td>
                                        <td>Air Conditioner</td>
                                        <td class=\"text-right\"> 3 </td>
                                        <td class=\"text-right\"> \$500 </td>
                                        <td class=\"text-right\"> \$1500 </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">3</td>
                                        <td>RC Cars</td>
                                        <td class=\"text-right\"> 20 </td>
                                        <td class=\"text-right\"> %600 </td>
                                        <td class=\"text-right\"> \$12000 </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">4</td>
                                        <td>Down Coat</td>
                                        <td class=\"text-right\"> 60 </td>
                                        <td class=\"text-right\">\$5 </td>
                                        <td class=\"text-right\"> \$300 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"pull-right m-t-30 text-right\">
                            <hr>
                            <h3><b>Tổng cộng :</b> \$13,986</h3>
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
", "Backend/Order/print.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\Order\\print.html.twig");
    }
}
