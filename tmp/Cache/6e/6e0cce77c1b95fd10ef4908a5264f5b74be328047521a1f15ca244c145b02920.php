<?php

/* Backend/Users/list.html.twig */
class __TwigTemplate_d3c27a9d358808473746886b1fb525dc9909412229603430f51784a6702828d4 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Danh sách tài khoản người dùng";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
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
        // line 45
        if (($context["users"] ?? null)) {
            // line 46
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["user"]) {
                // line 47
                echo "                                        <tr>
                                            <td>";
                // line 48
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "fullname", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                ";
                // line 52
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "roles", array())) {
                    // line 53
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "roles", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 54
                        echo "                                                        <span class=\"label label-table label-info\">";
                        echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                        echo "</span>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                                                ";
                }
                // line 57
                echo "                                            </td>
                                            <td class=\"text-center\">
                                                ";
                // line 59
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "status", array()) == 1)) {
                    // line 60
                    echo "                                                    <i class=\"mdi mdi-check-circle text-info\"></i>
                                                ";
                } else {
                    // line 62
                    echo "                                                    <i class=\"mdi mdi-close-circle text-danger\"></i>
                                                ";
                }
                // line 64
                echo "                                            </td>
                                            <td class=\"text-center\">
                                                <a href=\"/tai-khoan/delete?id=";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"mdi mdi-delete\"></i> Xóa</a>
                                                <a href=\"/tai-khoan/edit?id=";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-account-edit\"></i> Sửa</a>
                                            </td>
                                        </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                    ";
        }
        // line 72
        echo "                                    </tbody>
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

    // line 93
    public function block_js($context, array $blocks = array())
    {
        // line 94
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
        return array (  183 => 94,  180 => 93,  157 => 72,  154 => 71,  144 => 67,  140 => 66,  136 => 64,  132 => 62,  128 => 60,  126 => 59,  122 => 57,  119 => 56,  110 => 54,  105 => 53,  103 => 52,  98 => 50,  94 => 49,  90 => 48,  87 => 47,  82 => 46,  80 => 45,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Users/list.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\Users\\list.html.twig");
    }
}
