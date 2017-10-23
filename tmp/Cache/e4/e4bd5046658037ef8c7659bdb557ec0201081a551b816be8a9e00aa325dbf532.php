<?php

/* Backend/Promotion/list.html.twig */
class __TwigTemplate_dc871cf032b76556b8a781396fff140676cbb6eec5d07b914afedb6e2e41a816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Promotion/list.html.twig", 1);
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
        echo "Danh sách sản phẩm khuyến mãi";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/don-vi-tien-te/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách sản phẩm khuyến mãi</h3>
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
                        <div class=\"table-responsive\">
                            <table class=\"table product-overview\">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Photo</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Steave Jobs</td>
                                        <td>
                                            <img src=\"/assets/Backend/images/gallery/chair.jpg\" alt=\"iMac\" width=\"80\">
                                        </td>
                                        <td>20</td>
                                        <td>10-7-2017</td>
                                        <td>
                                            <span class=\"label label-success font-weight-100\">Paid</span>
                                        </td>
                                        <td><a href=\"javascript:void(0)\" class=\"text-inverse p-r-10\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Edit\"><i class=\"ti-marker-alt\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-trash\"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Varun Dhavan</td>
                                        <td>
                                            <img src=\"/assets/Backend/images/gallery/chair2.jpg\" alt=\"iPhone\" width=\"80\">
                                        </td>
                                        <td>25</td>
                                        <td>09-7-2017</td>
                                        <td>
                                            <span class=\"label label-warning font-weight-100\">Pending</span>
                                        </td>
                                        <td><a href=\"javascript:void(0)\" class=\"text-inverse p-r-10\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Edit\"><i class=\"ti-marker-alt\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-trash\"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ritesh Desh</td>
                                        <td>
                                            <img src=\"/assets/Backend/images/gallery/chair3.jpg\" alt=\"apple_watch\" width=\"80\">
                                        </td>
                                        <td>12</td>
                                        <td>08-7-2017</td>
                                        <td>
                                            <span class=\"label label-success font-weight-100\">Paid</span>
                                        </td>
                                        <td><a href=\"javascript:void(0)\" class=\"text-inverse p-r-10\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Edit\"><i class=\"ti-marker-alt\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-trash\"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Hrithik</td>
                                        <td>
                                            <img src=\"/assets/Backend/images/gallery/chair4.jpg\" alt=\"mac_mouse\" width=\"80\">
                                        </td>
                                        <td>18</td>
                                        <td>02-7-2017</td>
                                        <td>
                                            <span class=\"label label-danger font-weight-100\">Failed</span>
                                        </td>
                                        <td><a href=\"javascript:void(0)\" class=\"text-inverse p-r-10\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Edit\"><i class=\"ti-marker-alt\"></i></a> <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-trash\"></i></a></td>
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

    // line 96
    public function block_js($context, array $blocks = array())
    {
        // line 97
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
        return "Backend/Promotion/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 97,  132 => 96,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Promotion/list.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Promotion\\list.html.twig");
    }
}
