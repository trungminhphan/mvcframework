<?php

/* Backend/ProductType/list.html.twig */
class __TwigTemplate_c97490c7714195d1f085d92234839a80959818999f0ba367837b5f90d5d5698d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/ProductType/list.html.twig", 1);
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
        echo "Danh sách loại sản phẩm";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/loai-san-pham/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh mục loại sản phẩm</h3>
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
                        <div id=\"accordion2\" role=\"tablist\" class=\"minimal-faq\" aria-multiselectable=\"true\">
                        ";
        // line 20
        if (($context["list"] ?? null)) {
            // line 21
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            <div class=\"card m-b-0\">
                                <div class=\"card-header\" role=\"tab\" id=\"heading_";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\">
                                    <h5 class=\"mb-0\">
                                        <a href=\"/loai-san-pham/add?id_parent=";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\"><i class=\"mdi mdi-plus\"></i></a>
                                        <a href=\"/loai-san-pham/edit&id=";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-pencil-circle\"></i></a>
                                        <a href=\"/loai-san-pham/delete&id=";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Chắc chắn xóa?');\" class=\"btn btn-sm btn-danger\"><i class=\"mdi mdi-delete-circle\"></i></a>
                                        <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse_";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo " </a>
                                  </h5>
                                </div>
                                <div id=\"collapse_";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\">
                                    <div class=\"card-body\">
                                        ";
                // line 33
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array())) {
                    // line 34
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 35
                        echo "                                            <span class=\"btn btn-info m-t-10\">
                                                <a href=\"/loai-san-pham/edit&id=";
                        // line 36
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                        echo "\" class=\"text-white\"><i class=\"mdi mdi-pencil-circle\"></i></a>
                                                <a href=\"/loai-san-pham/delete&id=";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                        echo "\" class=\"text-white\" onclick=\"return confirm('Chắc chắn xóa?');\"><i class=\"mdi mdi-delete-circle\"></i></a>
                                                ";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "ten", array()), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                                    ";
                }
                // line 42
                echo "                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        ";
        }
        // line 47
        echo "                        </div>
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
        echo "<script type=\"text/javascript\">
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
        return "Backend/ProductType/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  151 => 55,  141 => 47,  138 => 46,  129 => 42,  126 => 41,  117 => 38,  113 => 37,  109 => 36,  106 => 35,  101 => 34,  99 => 33,  92 => 31,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  65 => 23,  62 => 22,  57 => 21,  55 => 20,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Backend/layout.html.twig\" %}

{% block title %}Danh sách loại sản phẩm{% endblock %}

{% block body %}
    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/loai-san-pham/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh mục loại sản phẩm</h3>
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
                        <div id=\"accordion2\" role=\"tablist\" class=\"minimal-faq\" aria-multiselectable=\"true\">
                        {% if list %}
                            {% for item in list %}
                            <div class=\"card m-b-0\">
                                <div class=\"card-header\" role=\"tab\" id=\"heading_{{item._id}}\">
                                    <h5 class=\"mb-0\">
                                        <a href=\"/loai-san-pham/add?id_parent={{item._id}}\" class=\"btn btn-sm btn-success\"><i class=\"mdi mdi-plus\"></i></a>
                                        <a href=\"/loai-san-pham/edit&id={{item._id}}\" class=\"btn btn-sm btn-info\"><i class=\"mdi mdi-pencil-circle\"></i></a>
                                        <a href=\"/loai-san-pham/delete&id={{item._id}}\" onclick=\"return confirm('Chắc chắn xóa?');\" class=\"btn btn-sm btn-danger\"><i class=\"mdi mdi-delete-circle\"></i></a>
                                        <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse_{{item._id}}\" aria-expanded=\"true\" aria-controls=\"collapse_{{item._id}}\"> {{item.ten}} </a>
                                  </h5>
                                </div>
                                <div id=\"collapse_{{item._id}}\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading_{{item._id}}\">
                                    <div class=\"card-body\">
                                        {% if item.childs %}
                                        {% for child in item.childs %}
                                            <span class=\"btn btn-info m-t-10\">
                                                <a href=\"/loai-san-pham/edit&id={{child.id}}\" class=\"text-white\"><i class=\"mdi mdi-pencil-circle\"></i></a>
                                                <a href=\"/loai-san-pham/delete&id={{child.id}}\" class=\"text-white\" onclick=\"return confirm('Chắc chắn xóa?');\"><i class=\"mdi mdi-delete-circle\"></i></a>
                                                {{child.ten}}
                                            </span>
                                        {% endfor %}
                                    {% endif %}
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        {% endif %}
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
", "Backend/ProductType/list.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\ProductType\\list.html.twig");
    }
}
