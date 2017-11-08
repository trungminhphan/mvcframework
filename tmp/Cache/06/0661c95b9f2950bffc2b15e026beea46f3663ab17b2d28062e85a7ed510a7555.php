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
                                      <th class=\"text-right\">Tổng đơn hàng</th>
                                      <th><i class=\"mdi mdi-printer\"></i></th>
                                  </tr>
                              </thead>
                              <tbody>
                              ";
        // line 30
        if (($context["orders"] ?? null)) {
            // line 31
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 32
                echo "                                ";
                $context["tongthanhtien"] = 0;
                // line 33
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "sanpham", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
                    // line 34
                    echo "                                  ";
                    $context["tongthanhtien"] = (($context["tongthanhtien"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["sp"], "thanhtien", array()));
                    // line 35
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                                  <tr>
                                      <td><a href=\"/don-hang/detail?id=";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "madonhang", array()), "html", null, true);
                echo "</a></td>
                                      <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "hoten", array()), "html", null, true);
                echo "</td>
                                      <td><span class=\"text-muted\">";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["oder"] ?? null), "createAt", array()), "sec", array()), "d/m/Y H:i"), "html", null, true);
                echo "</span> </td>
                                      <td class=\"text-right\">";
                // line 40
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["tongthanhtien"] ?? null), 2, ",", "."), "html", null, true);
                echo "</td>
                                      <td><a href=\"/don-hang/print?id=";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "_id", array()), "html", null, true);
                echo "\"><i class=\"mdi mdi-printer\"></i></a></td>
                                  </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                ";
        }
        // line 45
        echo "                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 55
    public function block_js($context, array $blocks = array())
    {
        // line 56
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
        return array (  138 => 56,  135 => 55,  123 => 45,  120 => 44,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  93 => 37,  90 => 36,  84 => 35,  81 => 34,  76 => 33,  73 => 32,  68 => 31,  66 => 30,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
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
                                      <th class=\"text-right\">Tổng đơn hàng</th>
                                      <th><i class=\"mdi mdi-printer\"></i></th>
                                  </tr>
                              </thead>
                              <tbody>
                              {% if orders %}
                              {% for order in orders %}
                                {% set tongthanhtien = 0 %}
                                {% for sp in order.sanpham %}
                                  {% set tongthanhtien = tongthanhtien + sp.thanhtien %}
                                {% endfor %}
                                  <tr>
                                      <td><a href=\"/don-hang/detail?id={{order._id}}\">{{order.madonhang}}</a></td>
                                      <td>{{order.hoten}}</td>
                                      <td><span class=\"text-muted\">{{oder.createAt.sec|date(\"d/m/Y H:i\")}}</span> </td>
                                      <td class=\"text-right\">{{tongthanhtien|number_format(2, ',', '.')}}</td>
                                      <td><a href=\"/don-hang/print?id={{order._id}}\"><i class=\"mdi mdi-printer\"></i></a></td>
                                  </tr>
                                {% endfor %}
                                {% endif %}
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
