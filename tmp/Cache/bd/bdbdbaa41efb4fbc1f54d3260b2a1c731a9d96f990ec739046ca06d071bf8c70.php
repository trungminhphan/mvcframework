<?php

/* Backend/ProductType/list.html.twig */
class __TwigTemplate_d0ef0c90053009e56daf4c5dac04e867853615519666034e5c386e9cd7204148 extends Twig_Template
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
        echo "Home";
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
                                    <a href=\"/loai-san-pham/edit&id=";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\"><i class=\"mdi mdi-pencil-circle\"></i></a>
                                        <a href=\"/loai-san-pham/delete&id=";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Chắc chắn xóa?');\"><i class=\"mdi mdi-delete-circle\"></i></a>
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse_";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo " </a>
                                  </h5>
                                </div>
                                <div id=\"collapse_";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"heading_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\">
                                    <div class=\"card-body\">
                                        ";
                // line 32
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array())) {
                    // line 33
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 34
                        echo "                                            <span class=\"btn btn-info m-t-10\">
                                                <a href=\"/loai-san-pham/edit&id=";
                        // line 35
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                        echo "\" class=\"text-white\"><i class=\"mdi mdi-pencil-circle\"></i></a>
                                                <a href=\"/loai-san-pham/delete&id=";
                        // line 36
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                        echo "\" class=\"text-white\" onclick=\"return confirm('Chắc chắn xóa?');\"><i class=\"mdi mdi-delete-circle\"></i></a>
                                                ";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "ten", array()), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "                                    ";
                }
                // line 41
                echo "                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        ";
        }
        // line 46
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 54
    public function block_js($context, array $blocks = array())
    {
        // line 55
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
        return "Backend/ProductType/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 55,  147 => 54,  137 => 46,  134 => 45,  125 => 41,  122 => 40,  113 => 37,  109 => 36,  105 => 35,  102 => 34,  97 => 33,  95 => 32,  88 => 30,  78 => 27,  74 => 26,  70 => 25,  65 => 23,  62 => 22,  57 => 21,  55 => 20,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/ProductType/list.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\ProductType\\list.html.twig");
    }
}
