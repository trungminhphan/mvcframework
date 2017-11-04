<?php

/* Backend/Product/list.html.twig */
class __TwigTemplate_89336c04ae85f876c5ca384848bfa95ba877917e2a3679c2ea15459c221c34fd extends Twig_Template
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
                                    <th>Ngày cập nhật</th>
                                    <th>Tình trạng</th>
                                    <th>Người bán</th>
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
        // line 52
        if (($context["products"] ?? null)) {
            // line 53
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 54
                echo "                                ";
                $context["tongsoluong"] = 0;
                // line 55
                echo "                                  ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "thuoctinh", array())) > 0)) {
                    // line 56
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "thuoctinh", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                        // line 57
                        echo "                                    ";
                        $context["tongsoluong"] = (($context["tongsoluong"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "soluong", array()));
                        // line 58
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                                  ";
                }
                // line 60
                echo "                                <tr>
                                    <td>
                                    ";
                // line 62
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "hinhanh", array()), 0, array()), "aliasname", array())) {
                    // line 63
                    echo "                                      <img src=\"/uploads/images/thumb_300x200/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "hinhanh", array()), 0, array()), "aliasname", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "ten", array()), "html", null, true);
                    echo "\" width=\"40\">
                                    ";
                } else {
                    // line 65
                    echo "                                        <img src=\"/assets/Backend/images/gallery/chair.jpg\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "ten", array()), "html", null, true);
                    echo "\" width=\"40\">
                                    ";
                }
                // line 67
                echo "                                    </td>
                                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "ten", array()), "html", null, true);
                echo "</td>
                                    <td><b>";
                // line 69
                echo twig_escape_filter($this->env, ($context["tongsoluong"] ?? null), "html", null, true);
                echo "</b> sản phẩm trong <b>";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "thuoctinh", array())), "html", null, true);
                echo "</b> nhóm</td>
                                    <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "updateAt", array()), "sec", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                    <td class=\"text-center\">
                                      ";
                // line 72
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "status", array()) == 1)) {
                    // line 73
                    echo "                                        <span class=\"label label-info font-weight-100\">On</span>
                                      ";
                } else {
                    // line 75
                    echo "                                        <span class=\"label label-danger font-weight-100\">Off</span>
                                      ";
                }
                // line 77
                echo "                                    </td>
                                    <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "username", array()), "html", null, true);
                echo "</td>
                                    <td>
                                      <a href=\"/san-pham/delete&id=";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "_id", array()), "html", null, true);
                echo "\" class=\"text-inverse\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Xóa\" onclick=\"return confirm('Chắc chắn xóa?')\"><i class=\"ti-trash\"></i></a>
                                      <a href=\"/san-pham/edit&id=";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "_id", array()), "html", null, true);
                echo "\" class=\"text-inverse p-r-10\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Sửa\"><i class=\"ti-marker-alt\"></i></a>
                                    </td>
                                </tr>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                            ";
        }
        // line 86
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

    // line 106
    public function block_js($context, array $blocks = array())
    {
        // line 107
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
        return array (  216 => 107,  213 => 106,  191 => 86,  188 => 85,  178 => 81,  174 => 80,  169 => 78,  166 => 77,  162 => 75,  158 => 73,  156 => 72,  151 => 70,  145 => 69,  141 => 68,  138 => 67,  132 => 65,  124 => 63,  122 => 62,  118 => 60,  115 => 59,  109 => 58,  106 => 57,  101 => 56,  98 => 55,  95 => 54,  90 => 53,  88 => 52,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Product/list.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\Product\\list.html.twig");
    }
}
