<?php

/* Backend/Order/list.html.twig */
class __TwigTemplate_0893938031352c5baa307b5fd2fd7e041ff7316e63e328e9fdfc636ab3304744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Order/list.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Danh sách đơn hàng";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/don-hang/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách đơn hàng</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                       <div class=\"table-responsive\">
                          <table class=\"table\">
                              <thead>
                                  <tr>
                                      <th>Mã đơn hàng</th>
                                      <th>Khách hàng</th>
                                      <th>Ngày mua</th>
                                      <th>Tổng đơn hàng</th>
                                      <th>Tình trạng</th>
                                      <th><i class=\"mdi mdi-printer\"></i></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><a href=\"javascript:void(0)\">Order #26589</a></td>
                                      <td>Herman Beck</td>
                                      <td><span class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> Oct 16, 2017</span> </td>
                                      <td>\$45.00</td>
                                      <td>
                                          <div class=\"label label-table label-success\">Paid</div>
                                      </td>
                                      <td><a href=\"/don-hang/print\"><i class=\"mdi mdi-printer\"></i></a></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 51
    public function block_js($context, array $blocks = array())
    {
        // line 52
        echo "    <script type=\"text/javascript\">
         \$(document).ready(function() {
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
        return "Backend/Order/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 52,  87 => 51,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}

{% block title %}Danh sách đơn hàng{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/don-hang/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách đơn hàng</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                       <div class=\"table-responsive\">
                          <table class=\"table\">
                              <thead>
                                  <tr>
                                      <th>Mã đơn hàng</th>
                                      <th>Khách hàng</th>
                                      <th>Ngày mua</th>
                                      <th>Tổng đơn hàng</th>
                                      <th>Tình trạng</th>
                                      <th><i class=\"mdi mdi-printer\"></i></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><a href=\"javascript:void(0)\">Order #26589</a></td>
                                      <td>Herman Beck</td>
                                      <td><span class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> Oct 16, 2017</span> </td>
                                      <td>\$45.00</td>
                                      <td>
                                          <div class=\"label label-table label-success\">Paid</div>
                                      </td>
                                      <td><a href=\"/don-hang/print\"><i class=\"mdi mdi-printer\"></i></a></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block js%}
    <script type=\"text/javascript\">
         \$(document).ready(function() {
            \$('.top').click(function(){
              \$('html, body').animate({
                scrollTop: \$( \$.attr(this, 'href') ).offset().top
              }, 500);
              return false;
            });
        });
    </script>
{% endblock %}
", "Backend/Order/list.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Order\\list.html.twig");
    }
}
