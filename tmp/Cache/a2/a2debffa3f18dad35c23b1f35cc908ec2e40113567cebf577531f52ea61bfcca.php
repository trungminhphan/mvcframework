<?php

/* Backend/Users/list.html.twig */
class __TwigTemplate_c293d33e287b9c761b720387b4e7d3c48467a40d7b41c53b1485da3df10b9bdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Users/list.html.twig", 1);
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
        echo "Danh sách tài khoản người dùng";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/tai-khoan/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách tài khoản người dùng</h3>
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
                            <table id=\"demo-foo-addrow2\" class=\"table table-bordered table-hover toggle-circle\" data-page-size=\"7\">
                                <thead>
                                    <tr>
                                        <th data-sort-initial=\"true\" data-toggle=\"true\">STT</th>
                                        <th>Email</th>
                                        <th>Họ tên</th>
                                        <th>Quyền</th>
                                        <th class=\"text-center\">Tình trạng</th>
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
        // line 43
        if (($context["users"] ?? null)) {
            // line 44
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["user"]) {
                // line 45
                echo "                                    <tr>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                                        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "fullname", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            ";
                // line 50
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "roles", array())) {
                    // line 51
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "roles", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 52
                        echo "                                                    <span class=\"label label-table label-info\">";
                        echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                        echo "</span>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                                            ";
                }
                // line 55
                echo "                                        </td>
                                        <td class=\"text-center\">
                                            ";
                // line 57
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "status", array()) == 1)) {
                    // line 58
                    echo "                                                <i class=\"mdi mdi-check-circle text-info\"></i>
                                            ";
                } else {
                    // line 60
                    echo "                                                <i class=\"mdi mdi-close-circle text-danger\"></i>
                                            ";
                }
                // line 62
                echo "                                        </td>
                                        <td class=\"text-center\">
                                            <a href=\"/tai-khoan/delete?id=";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"mdi mdi-delete\"></i> Xóa</a>
                                            <a href=\"/tai-khoan/edit?id=";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-account-edit\"></i> Sửa</a>
                                        </td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                ";
        }
        // line 70
        echo "                                </tbody>
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
    </div>
";
    }

    // line 90
    public function block_js($context, array $blocks = array())
    {
        // line 91
        echo "    <script src=\"/assets/Backend/plugins/footable/js/footable.all.min.js\"></script>
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
        return "Backend/Users/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 91,  179 => 90,  157 => 70,  154 => 69,  144 => 65,  140 => 64,  136 => 62,  132 => 60,  128 => 58,  126 => 57,  122 => 55,  119 => 54,  110 => 52,  105 => 51,  103 => 50,  98 => 48,  94 => 47,  90 => 46,  87 => 45,  82 => 44,  80 => 43,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}
{% block title %}Danh sách tài khoản người dùng{% endblock %}
{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/tai-khoan/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách tài khoản người dùng</h3>
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
                            <table id=\"demo-foo-addrow2\" class=\"table table-bordered table-hover toggle-circle\" data-page-size=\"7\">
                                <thead>
                                    <tr>
                                        <th data-sort-initial=\"true\" data-toggle=\"true\">STT</th>
                                        <th>Email</th>
                                        <th>Họ tên</th>
                                        <th>Quyền</th>
                                        <th class=\"text-center\">Tình trạng</th>
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
                                {% if users %}
                                    {% for key, user in users %}
                                    <tr>
                                        <td>{{key+1}}</td>
                                        <td>{{user.username}}</td>
                                        <td>{{user.fullname}}</td>
                                        <td>
                                            {% if user.roles %}
                                                {% for role in user.roles %}
                                                    <span class=\"label label-table label-info\">{{role}}</span>
                                                {% endfor %}
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\">
                                            {% if user.status == 1 %}
                                                <i class=\"mdi mdi-check-circle text-info\"></i>
                                            {% else %}
                                                <i class=\"mdi mdi-close-circle text-danger\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\">
                                            <a href=\"/tai-khoan/delete?id={{user._id}}\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"mdi mdi-delete\"></i> Xóa</a>
                                            <a href=\"/tai-khoan/edit?id={{user._id}}\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-account-edit\"></i> Sửa</a>
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
", "Backend/Users/list.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\users\\list.html.twig");
    }
}
