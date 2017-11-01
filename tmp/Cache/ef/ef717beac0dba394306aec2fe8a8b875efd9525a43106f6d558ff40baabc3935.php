<?php

/* Backend/Producer/list.html.twig */
class __TwigTemplate_258053e891aea94aae2ba3db14726989e789fa73ee24071644c8cdd0d6fa9e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Producer/list.html.twig", 1);
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
        echo "Danh sách nhà sản xuất";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/nha-san-xuat/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh mục nhà sản xuất</h3>
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
                                        <th>Hình</th>
                                        <th>Tên nhà sản xuất</th>
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
        if (($context["list"] ?? null)) {
            // line 44
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 45
                echo "                                    <tr>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                                        <td>
                                            ";
                // line 48
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "hinhanh_aliasname", array()), 0, array())) {
                    // line 49
                    echo "                                                <img src=\"/uploads/images/thumb_300x200/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "hinhanh_aliasname", array()), 0, array()), "html", null, true);
                    echo "\" height=\"30\" />
                                            ";
                }
                // line 51
                echo "                                        </td>
                                        <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo "</td>
                                        <td class=\"text-center\">
                                            <a href=\"/nha-san-xuat/delete?id=";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"mdi mdi-delete\"></i> Xóa</a>
                                            <a href=\"/nha-san-xuat/edit?id=";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-pencil-circle\"></i> Sửa</a>
                                        </td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                                ";
        }
        // line 60
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

    // line 80
    public function block_js($context, array $blocks = array())
    {
        // line 81
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
        return "Backend/Producer/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 81,  148 => 80,  126 => 60,  123 => 59,  113 => 55,  109 => 54,  104 => 52,  101 => 51,  95 => 49,  93 => 48,  88 => 46,  85 => 45,  80 => 44,  78 => 43,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Producer/list.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\Producer\\list.html.twig");
    }
}
