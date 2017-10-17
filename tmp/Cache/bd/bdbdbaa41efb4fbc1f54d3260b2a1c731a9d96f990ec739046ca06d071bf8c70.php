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
            <h3 class=\"text-themecolor\"><a href=\"/them-danh-muc-loai-san-pham\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh mục loại sản phẩm</h3>
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
                                <div class=\"card-header\" role=\"tab\" id=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\">
                                    <h3 class=\"mb-0\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne11\" aria-expanded=\"true\" aria-controls=\"collapseOne11\">
                                      <a href=\"/sua-danh-muc-loai-san-pham&id=";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\"><i class=\"mdi mdi-pencil-circle\"></i></a>
                                      <a href=\"/xoa-danh-muc-loai-san-pham&id=";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Chắc chắn xóa?');\"><i class=\"mdi mdi-delete-circle\"></i></a>
                                      ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "ten", array()), "html", null, true);
                echo "
                                    </a>
                                  </h3>
                                </div>
                                <div id=\"collapseOne11\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "_id", array()), "html", null, true);
                echo "\">
                                    <div class=\"card-body\">
                                    ";
                // line 34
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array())) {
                    // line 35
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "childs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 36
                        echo "                                            <span class=\"btn btn-info m-t-10\">
                                                <a href=\"/sua-danh-muc-loai-san-pham&id=";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                        echo "\" class=\"text-white\"><i class=\"mdi mdi-pencil-circle\"></i></a>
                                                <a href=\"/xoa-danh-muc-loai-san-pham&id=";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "id", array()), "html", null, true);
                        echo "\" class=\"text-white\" onclick=\"return confirm('Chắc chắn xóa?');\"><i class=\"mdi mdi-delete-circle\"></i></a>
                                                ";
                        // line 39
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "ten", array()), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                                    ";
                }
                // line 43
                echo "                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                        ";
        }
        // line 48
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        // line 57
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
        return array (  146 => 57,  143 => 56,  133 => 48,  130 => 47,  121 => 43,  118 => 42,  109 => 39,  105 => 38,  101 => 37,  98 => 36,  93 => 35,  91 => 34,  86 => 32,  79 => 28,  75 => 27,  71 => 26,  65 => 23,  62 => 22,  57 => 21,  55 => 20,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/ProductType/list.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\ProductType\\list.html.twig");
    }
}
