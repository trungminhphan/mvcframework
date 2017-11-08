<?php

/* Backend/Customer/list.html.twig */
class __TwigTemplate_1e363050044bf48d180223cde7d56480d7aa800aa02238fda70a84bb79b11b9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Customer/list.html.twig", 1);
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
        echo "Danh sách Khách hàng";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/khach-hang/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách Khách hàng</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card card-default\">
                    <div class=\"card-header\">
                        <div class=\"card-actions\">
                            <a class=\"\" data-action=\"collapse\"><i class=\"ti-minus\"></i></a>
                            <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>
                            <a class=\"btn-close\" data-action=\"close\"><i class=\"ti-close\"></i></a>
                        </div>
                    </div>
                    <div class=\"card-body collapse show\">
                        <div class=\"card-body collapse show\">
                          <div class=\"table-responsive\">
                          <table id=\"demo-foo-addrow\" class=\"table m-t-30 table-hover no-wrap contact-list\" data-page-size=\"10\">
                              <thead>
                                  <tr>
                                      <th>STT</th>
                                      <th>Họ tên</th>
                                      <th>Email</th>
                                      <th>Điện thoại</th>
                                      <th>Địa chỉ</th>
                                      <th>#</th>
                                  </tr>
                              </thead>
                              <tbody>
                              ";
        // line 38
        if (($context["customers"] ?? null)) {
            // line 39
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["customer"]) {
                // line 40
                echo "                                  <tr>
                                      <td>";
                // line 41
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                                      <td>
                                        ";
                // line 43
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "hinhanh_aliasname", array()), 0, array())) {
                    // line 44
                    echo "                                          <img src=\"/uploads/images/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "hinhanh_aliasname", array()), 0, array()), "html", null, true);
                    echo "\" alt=\"user\" class=\"img-circle\" />
                                        ";
                } else {
                    // line 46
                    echo "                                          <img src=\"/assets/Backend/images/default.png\" alt=\"user\" class=\"img-circle\" />
                                        ";
                }
                // line 48
                echo "                                          ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "fullname", array()), "html", null, true);
                echo "
                                      </td>
                                      <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "username", array()), "html", null, true);
                echo "</td>
                                      <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "phone", array()), "html", null, true);
                echo "</td>
                                      <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "address", array()), "html", null, true);
                echo "</td>
                                      <td class=\"text-center\">
                                          <a href=\"/khach-hang/delete?id=";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"mdi mdi-delete\"></i> Xóa</a>
                                          <a href=\"/khach-hang/edit?id=";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-account-edit\"></i> Sửa</a>
                                      </td>
                                  </tr>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                                ";
        }
        // line 60
        echo "                              </tbody>
                              <tfoot>
                                  <tr>
                                      <td colspan=\"6\">
                                          <div class=\"text-right\">
                                              <ul class=\"pagination\"></ul>
                                          </div>
                                      </td>
                                  </tr>
                              </tfoot>
                          </table>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 79
    public function block_js($context, array $blocks = array())
    {
        // line 80
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
        return "Backend/Customer/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 80,  159 => 79,  138 => 60,  135 => 59,  125 => 55,  121 => 54,  116 => 52,  112 => 51,  108 => 50,  102 => 48,  98 => 46,  92 => 44,  90 => 43,  85 => 41,  82 => 40,  77 => 39,  75 => 38,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block title %}Danh sách Khách hàng{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/khach-hang/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách Khách hàng</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card card-default\">
                    <div class=\"card-header\">
                        <div class=\"card-actions\">
                            <a class=\"\" data-action=\"collapse\"><i class=\"ti-minus\"></i></a>
                            <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>
                            <a class=\"btn-close\" data-action=\"close\"><i class=\"ti-close\"></i></a>
                        </div>
                    </div>
                    <div class=\"card-body collapse show\">
                        <div class=\"card-body collapse show\">
                          <div class=\"table-responsive\">
                          <table id=\"demo-foo-addrow\" class=\"table m-t-30 table-hover no-wrap contact-list\" data-page-size=\"10\">
                              <thead>
                                  <tr>
                                      <th>STT</th>
                                      <th>Họ tên</th>
                                      <th>Email</th>
                                      <th>Điện thoại</th>
                                      <th>Địa chỉ</th>
                                      <th>#</th>
                                  </tr>
                              </thead>
                              <tbody>
                              {% if customers %}
                              {% for key, customer in customers %}
                                  <tr>
                                      <td>{{key+1}}</td>
                                      <td>
                                        {% if customer.hinhanh_aliasname.0 %}
                                          <img src=\"/uploads/images/{{customer.hinhanh_aliasname.0}}\" alt=\"user\" class=\"img-circle\" />
                                        {% else %}
                                          <img src=\"/assets/Backend/images/default.png\" alt=\"user\" class=\"img-circle\" />
                                        {% endif %}
                                          {{customer.fullname}}
                                      </td>
                                      <td>{{customer.username}}</td>
                                      <td>{{customer.phone}}</td>
                                      <td>{{customer.address}}</td>
                                      <td class=\"text-center\">
                                          <a href=\"/khach-hang/delete?id={{customer._id}}\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"mdi mdi-delete\"></i> Xóa</a>
                                          <a href=\"/khach-hang/edit?id={{customer._id}}\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-account-edit\"></i> Sửa</a>
                                      </td>
                                  </tr>
                                  {% endfor %}
                                {% endif %}
                              </tbody>
                              <tfoot>
                                  <tr>
                                      <td colspan=\"6\">
                                          <div class=\"text-right\">
                                              <ul class=\"pagination\"></ul>
                                          </div>
                                      </td>
                                  </tr>
                              </tfoot>
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
", "Backend/Customer/list.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Customer\\list.html.twig");
    }
}
