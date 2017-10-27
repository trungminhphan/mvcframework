<?php

/* Backend/Order/list.html.twig */
class __TwigTemplate_950731af339792f386192d6af5a5452f2d33c4ac27b541371b05c7a682ac9b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Order/list.html.twig", 1);
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
        echo "Danh sách đơn hàng";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/don-vi-tien-te/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách đơn hàng</h3>
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
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Invoice</th>
                                                <th>User</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href=\"javascript:void(0)\">Order #26589</a></td>
                                                <td>Herman Beck</td>
                                                <td><span class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> Oct 16, 2017</span> </td>
                                                <td>\$45.00</td>
                                                <td>
                                                    <div class=\"label label-table label-success\">Paid</div>
                                                </td>
                                                <td>EN</td>
                                            </tr>
                                            <tr>
                                                <td><a href=\"javascript:void(0)\">Order #58746</a></td>
                                                <td>Mary Adams</td>
                                                <td><span class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> Oct 12, 2017</span> </td>
                                                <td>\$245.30</td>
                                                <td>
                                                    <div class=\"label label-table label-danger\">Shipped</div>
                                                </td>
                                                <td>CN</td>
                                            </tr>
                                            <tr>
                                                <td><a href=\"javascript:void(0)\">Order #98458</a></td>
                                                <td>Caleb Richards</td>
                                                <td><span class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> May 18, 2017</span> </td>
                                                <td>\$38.00</td>
                                                <td>
                                                    <div class=\"label label-table label-info\">Shipped</div>
                                                </td>
                                                <td>AU</td>
                                            </tr>
                                            <tr>
                                                <td><a href=\"javascript:void(0)\">Order #32658</a></td>
                                                <td>June Lane</td>
                                                <td><span class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> Apr 28, 2017</span> </td>
                                                <td>\$77.99</td>
                                                <td>
                                                    <div class=\"label label-table label-success\">Paid</div>
                                                </td>
                                                <td>FR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 82
    public function block_js($context, array $blocks = array())
    {
        // line 83
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
        return "Backend/Order/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 83,  118 => 82,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Order/list.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Backend\\Order\\list.html.twig");
    }
}
