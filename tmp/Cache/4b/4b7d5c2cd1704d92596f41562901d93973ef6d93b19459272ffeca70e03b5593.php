<?php

/* Backend/Product/list.html.twig */
class __TwigTemplate_efe32177c67f0a56a0db570786b87bf99475d346726107331fbdf3f3a9963579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Product/list.html.twig", 1);
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
        echo "Danh sách sản phẩm";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/san-pham/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách sản phẩm</h3>
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
                        <!--<table class=\"table product-overview\">-->
                        <table id=\"demo-foo-addrow2\" class=\"table product-overview table-hover toggle-circle\" data-page-size=\"7\">
                            <thead>
                                <tr>
                                    <th>Hình</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Date</th>
                                    <th>Tình trạng</th>
                                    <th>Thao tác</th>
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
        // line 51
        if (($context["products"] ?? null)) {
            // line 52
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 53
                echo "                                <tr>
                                    <td>
                                    ";
                // line 55
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "hinhanh", array()), 0, array()), "aliasname", array())) {
                    // line 56
                    echo "                                      <img src=\"/uploads/images/thumb_300x200/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "hinhanh", array()), 0, array()), "aliasname", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "ten", array()), "html", null, true);
                    echo "\" width=\"80\">
                                    ";
                } else {
                    // line 58
                    echo "                                        <img src=\"/assets/Backend/images/gallery/chair.jpg\" alt=\"iMac\" width=\"80\">
                                    ";
                }
                // line 60
                echo "                                    </td>
                                    <td>Steave Jobs</td>
                                    <td>20</td>
                                    <td>10-7-2017</td>
                                    <td>
                                        <span class=\"label label-success font-weight-100\">Paid</span>
                                    </td>
                                    <td><a href=\"javascript:void(0)\" class=\"text-inverse p-r-10\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Edit\"><i class=\"ti-marker-alt\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-trash\"></i></a></td>
                                </tr>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            ";
        }
        // line 71
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

    // line 91
    public function block_js($context, array $blocks = array())
    {
        // line 92
        echo "<script src=\"/assets/Backend/plugins/footable/js/footable.all.min.js\"></script>
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
        return "Backend/Product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 92,  152 => 91,  130 => 71,  127 => 70,  112 => 60,  108 => 58,  100 => 56,  98 => 55,  94 => 53,  89 => 52,  87 => 51,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Product/list.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Product\\list.html.twig");
    }
}
