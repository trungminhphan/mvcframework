<?php

/* Backend/Report/list.html.twig */
class __TwigTemplate_a40fa38fe453a0c649fc9f5e351ce6a5a9c6c3d9bbf323b4395592eb3f67baa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Report/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
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
        echo "Danh sách sản phẩm";
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"/assets/Backend/plugins/morrisjs/morris.css\" rel=\"stylesheet\">
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/don-vi-tien-te/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách sản phẩm</h3>
        </div>
        <div>
            <a href=\"#top\" class=\"right-side-toggle waves-effect top waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-arrow-circle-up text-white\"></i></a>
        </div>
    </div>
    <div class=\"container-fluid\">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class=\"row\">
            <!-- Column -->
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <!-- Row -->
                        <div class=\"row\">
                            <div class=\"col-8\"><h2>2376 <i class=\"ti-angle-down font-14 text-danger\"></i></h2>
                                <h6>Order Received</h6></div>
                            <div class=\"col-4 align-self-center text-right  p-l-0\">
                                <div id=\"sparklinedash3\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <!-- Row -->
                        <div class=\"row\">
                            <div class=\"col-8\"><h2 class=\"\">3670 <i class=\"ti-angle-up font-14 text-success\"></i></h2>
                                <h6>Tax Deduction</h6></div>
                            <div class=\"col-4 align-self-center text-right p-l-0\">
                                <div id=\"sparklinedash\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <!-- Row -->
                        <div class=\"row\">
                            <div class=\"col-8\"><h2>1562 <i class=\"ti-angle-up font-14 text-success\"></i></h2>
                                <h6>Revenue Stats</h6></div>
                            <div class=\"col-4 align-self-center text-right p-l-0\">
                                <div id=\"sparklinedash2\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <!-- Row -->
                        <div class=\"row\">
                            <div class=\"col-8\"><h2>35% <i class=\"ti-angle-down font-14 text-danger\"></i></h2>
                                <h6>Yearly Sales</h6></div>
                            <div class=\"col-4 align-self-center text-right p-l-0\">
                                <div id=\"sparklinedash4\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-7\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex flex-wrap\">
                            <div>
                                <h4 class=\"card-title\">Yearly Earning</h4>
                            </div>
                            <div class=\"ml-auto\">
                                <ul class=\"list-inline\">
                                    <li>
                                        <h6 class=\"text-muted text-success\"><i class=\"fa fa-circle font-10 m-r-10 \"></i>iMac</h6> </li>
                                    <li>
                                        <h6 class=\"text-muted  text-info\"><i class=\"fa fa-circle font-10 m-r-10\"></i>iPhone</h6> </li>
                                        
                                </ul>
                            </div>
                        </div>
                        <div id=\"morris-area-chart2\" style=\"height: 405px;\"></div>

                    </div>
                </div>
                <div class=\"card card-default\">
                            <div class=\"card-header\">
                                <div class=\"card-actions\">
                                    <a class=\"\" data-action=\"collapse\"><i class=\"ti-minus\"></i></a>
                                    <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>
                                    <a class=\"btn-close\" data-action=\"close\"><i class=\"ti-close\"></i></a>
                                </div>
                                <h4 class=\"card-title m-b-0\">Product Overview</h4>
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
            <div class=\"col-lg-4 col-md-5\">
                <!-- Column -->
                <div class=\"card card-default\">
                    <div class=\"card-header\">
                        <div class=\"card-actions\">
                            <a class=\"\" data-action=\"collapse\"><i class=\"ti-minus\"></i></a>
                            <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>
                            <a class=\"btn-close\" data-action=\"close\"><i class=\"ti-close\"></i></a>
                        </div>
                        <h4 class=\"card-title m-b-0\">Order Stats</h4>
                    </div>
                    <div class=\"card-body collapse show\">
                    <div id=\"morris-donut-chart\" class=\"ecomm-donute\" style=\"height: 317px;\"></div>
                        <ul class=\"list-inline m-t-20 text-center\">
                        <li >
                            <h6 class=\"text-muted\"><i class=\"fa fa-circle text-info\"></i> Order</h65>
                            <h4 class=\"m-b-0\">8500</h4>
                        </li>
                        <li>
                            <h6 class=\"text-muted\"><i class=\"fa fa-circle text-danger\"></i> Pending</h6>
                            <h4 class=\"m-b-0\">3630</h4>
                        </li>
                        <li>
                            <h6 class=\"text-muted\"> <i class=\"fa fa-circle text-success\"></i> Delivered</h6>
                            <h4 class=\"m-b-0\">4870</h4>
                        </li>
                    </ul>

                    </div>
                </div>
                <!-- Column -->
                <div class=\"card card-default\">
                    <div class=\"card-header\">
                        <div class=\"card-actions\">
                            <a class=\"\" data-action=\"collapse\"><i class=\"ti-minus\"></i></a>
                            <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>
                            <a class=\"btn-close\" data-action=\"close\"><i class=\"ti-close\"></i></a>
                        </div>
                        <h4 class=\"card-title m-b-0\">Offer for you</h4>
                    </div>
                    <div class=\"card-body collapse show bg-info\">
                        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                            <!-- Carousel items -->
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item flex-column\">
                                    <i class=\"fa fa-shopping-cart fa-2x text-white\"></i>
                                    <p class=\"text-white\">25th Jan</p>
                                    <h3 class=\"text-white font-light\">Now Get <span class=\"font-bold\">50% Off</span><br>
                              on buy</h3>
                                    <div class=\"text-white m-t-20\">
                                        <i>- Ecommerce site</i>
                                    </div>
                                </div>
                                <div class=\"carousel-item flex-column\">
                                    <i class=\"fa fa-shopping-cart fa-2x text-white\"></i>
                                    <p class=\"text-white\">25th Jan</p>
                                    <h3 class=\"text-white font-light\">Now Get <span class=\"font-bold\">50% Off</span><br>
                              on buy</h3>
                                    <div class=\"text-white m-t-20\">
                                        <i>- Ecommerce site</i>
                                    </div>
                                </div>
                                <div class=\"carousel-item flex-column active\">
                                    <i class=\"fa fa-shopping-cart fa-2x text-white\"></i>
                                    <p class=\"text-white\">25th Jan</p>
                                    <h3 class=\"text-white font-light\">Now Get <span class=\"font-bold\">50% Off</span><br>
                              on buy</h3>
                                    <div class=\"text-white m-t-20\">
                                        <i>- Ecommerce site</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class=\"card card-default\">
                    <div class=\"card-header\">
                        <div class=\"card-actions\">
                            <a class=\"\" data-action=\"collapse\"><i class=\"ti-minus\"></i></a>
                            <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>
                            <a class=\"btn-close\" data-action=\"close\"><i class=\"ti-close\"></i></a>
                        </div>
                        <h4 class=\"card-title m-b-0\">Latest Products</h4>
                    </div>
                    <div class=\"card-body p-0 collapse show text-center\">
                        <div id=\"myCarousel2\" class=\"carousel slide\" data-ride=\"carousel\">
                            <!-- Carousel items -->
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item flex-column\">
                                    <img src=\"/assets/Backend/images/gallery/chair.jpg\" alt=\"user\">
                                    <h4 class=\"m-b-30\">Brand New Chair</h4>
                                </div>
                                <div class=\"carousel-item flex-column\">
                                    <img src=\"/assets/Backend/images/gallery/chair2.jpg\" alt=\"user\">
                                    <h4 class=\"m-b-30\">Brand New Chair</h4>
                                </div>
                                <div class=\"carousel-item flex-column active carousel-item-left\">
                                    <img src=\"/assets/Backend/images/gallery/chair3.jpg\" alt=\"user\">
                                    <h4 class=\"m-b-30\">Brand New Chair</h4>
                                </div>
                                <div class=\"carousel-item flex-column carousel-item-next carousel-item-left\">
                                    <img src=\"/assets/Backend/images/gallery/chair4.jpg\" alt=\"user\">
                                    <h4 class=\"m-b-30\">Brand New Chair</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

";
    }

    // line 296
    public function block_js($context, array $blocks = array())
    {
        // line 297
        echo "    <script src=\"/assets/Backend/plugins/raphael/raphael-min.js\"></script>
    <script src=\"/assets/Backend/plugins/morrisjs/morris.min.js\"></script>
    <!-- sparkline chart -->
    <script src=\"/assets/Backend/plugins/sparkline/jquery.sparkline.min.js\"></script>
    <script src=\"/assets/Backend/js/dashboard4.js\"></script>

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
        return "Backend/Report/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 297,  339 => 296,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Report/list.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Report\\list.html.twig");
    }
}
