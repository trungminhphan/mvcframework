<?php

/* Backend/Attribute/list.html.twig */
class __TwigTemplate_5c2f3c1ae4678f8600b72212b24bd1386d0d0bc16cf7d0ed579ded926184919a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Attribute/list.html.twig", 1);
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
        echo "Danh sách thuộc tính sản phẩm";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/thuoc-tinh-san-pham/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh mục thuộc tính sản phẩm</h3>
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
                        <table id=\"demo-foo-addrow2\" class=\"table table-bordered table-hover toggle-circle\" data-page-size=\"7\">
                            <thead>
                                <tr>
                                    <th data-sort-initial=\"true\" data-toggle=\"true\">STT</th>
                                    <th>Tên thuộc tính sản phẩm</th>
                                    <th data-sort-ignore=\"true\" class=\"text-center\">#</th>
                                </tr>
                            </thead>
                            <div class=\"m-t-40\">
                                <div class=\"d-flex\">
                                    <div class=\"mr-auto\">
                                        <div class=\"form-group\">
                                            </div>
                                    </div>
                                    <div class=\"ml-auto\">
                                        <div class=\"form-group\">
                                            <input id=\"demo-input-search2\" type=\"text\" placeholder=\"Tìm kiếm\" autocomplete=\"on\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <tbody>
                            ";
        // line 40
        if (($context["list"] ?? null)) {
            // line 41
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 42
                echo "                                <tr>
                                    <td>";
                // line 43
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo "</td>
                                    <td class=\"text-center\">
                                        <a href=\"/thuoc-tinh-san-pham/delete?id=";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "&_token=";
                echo twig_escape_filter($this->env, ($context["_token"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"mdi mdi-delete\"></i> Xóa</a>
                                        <a href=\"/thuoc-tinh-san-pham/edit?id=";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-pencil-circle\"></i> Sửa</a>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            ";
        }
        // line 52
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=\"6\">
                                        <div class=\"text-right\">
                                            <ul class=\"pagination\">
                                            </ul>
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
";
    }

    // line 71
    public function block_js($context, array $blocks = array())
    {
        // line 72
        echo "  <script src=\"/assets/Backend/plugins/footable/js/footable.all.min.js\"></script>
  <script src=\"/assets/Backend/js/footable-init.js\"></script>
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
";
    }

    public function getTemplateName()
    {
        return "Backend/Attribute/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  135 => 71,  114 => 52,  111 => 51,  101 => 47,  95 => 46,  90 => 44,  86 => 43,  83 => 42,  78 => 41,  76 => 40,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}

{% block title %}Danh sách thuộc tính sản phẩm{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/thuoc-tinh-san-pham/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh mục thuộc tính sản phẩm</h3>
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
                        <table id=\"demo-foo-addrow2\" class=\"table table-bordered table-hover toggle-circle\" data-page-size=\"7\">
                            <thead>
                                <tr>
                                    <th data-sort-initial=\"true\" data-toggle=\"true\">STT</th>
                                    <th>Tên thuộc tính sản phẩm</th>
                                    <th data-sort-ignore=\"true\" class=\"text-center\">#</th>
                                </tr>
                            </thead>
                            <div class=\"m-t-40\">
                                <div class=\"d-flex\">
                                    <div class=\"mr-auto\">
                                        <div class=\"form-group\">
                                            </div>
                                    </div>
                                    <div class=\"ml-auto\">
                                        <div class=\"form-group\">
                                            <input id=\"demo-input-search2\" type=\"text\" placeholder=\"Tìm kiếm\" autocomplete=\"on\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <tbody>
                            {% if list %}
                                {% for key, item in list %}
                                <tr>
                                    <td>{{key+1}}</td>
                                    <td>{{item.ten}}</td>
                                    <td class=\"text-center\">
                                        <a href=\"/thuoc-tinh-san-pham/delete?id={{item._id}}&_token={{_token}}\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"mdi mdi-delete\"></i> Xóa</a>
                                        <a href=\"/thuoc-tinh-san-pham/edit?id={{item._id}}\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-pencil-circle\"></i> Sửa</a>
                                    </td>
                                </tr>
                                {% endfor %}
                            {% endif %}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=\"6\">
                                        <div class=\"text-right\">
                                            <ul class=\"pagination\">
                                            </ul>
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
{% endblock %}

{% block js%}
  <script src=\"/assets/Backend/plugins/footable/js/footable.all.min.js\"></script>
  <script src=\"/assets/Backend/js/footable-init.js\"></script>
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
", "Backend/Attribute/list.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Attribute\\list.html.twig");
    }
}
