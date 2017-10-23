<?php

/* Backend/Customer/list.html.twig */
class __TwigTemplate_114c0f77ce3c8811130e05e88812b46aea6e6177cdc0460664d4c9c61bc74ab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Backend/layout.html.twig", "Backend/Customer/list.html.twig", 1);
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
        echo "Danh sách Khách hàng";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-12 align-self-center\">
            <h3 class=\"text-themecolor\"><a href=\"/don-vi-tien-te/add\" class=\"btn btn-info\"><i class=\"mdi mdi-folder-plus\"></i></a> Danh sách Khách hàng</h3>
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
                        <div class=\"card-body collapse show\">
                                        <div class=\"table-responsive\">
                                        <table id=\"demo-foo-addrow\" class=\"table m-t-30 table-hover no-wrap contact-list\" data-page-size=\"10\">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Role</th>
                                                    <th>Age</th>
                                                    <th>Joining date</th>
                                                    <th>Salery</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/1.jpg\" alt=\"user\" class=\"img-circle\" /> Genelia Deshmukh</a>
                                                    </td>
                                                    <td>genelia@gmail.com</td>
                                                    <td>+123 456 789</td>
                                                    <td><span class=\"label label-danger\">Designer</span> </td>
                                                    <td>23</td>
                                                    <td>12-10-2014</td>
                                                    <td>\$1200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/2.jpg\" alt=\"user\" class=\"img-circle\" /> Arijit Singh</a>
                                                    </td>
                                                    <td>arijit@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class=\"label label-info\">Developer</span> </td>
                                                    <td>26</td>
                                                    <td>10-09-2014</td>
                                                    <td>\$1800</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/3.jpg\" alt=\"user\" class=\"img-circle\" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class=\"label label-success\">Accountant</span></td>
                                                    <td>28</td>
                                                    <td>1-10-2013</td>
                                                    <td>\$2200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/4.jpg\" alt=\"user\" class=\"img-circle\" /> Hritik Roshan</a>
                                                    </td>
                                                    <td>hritik@gmail.com</td>
                                                    <td>+456 456 789</td>
                                                    <td><span class=\"label label-inverse\">HR</span></td>
                                                    <td>25</td>
                                                    <td>2-10-2017</td>
                                                    <td>\$200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/5.jpg\" alt=\"user\" class=\"img-circle\" /> John Abraham</a>
                                                    </td>
                                                    <td>john@gmail.com</td>
                                                    <td>+567 456 789</td>
                                                    <td><span class=\"label label-danger\">Manager</span></td>
                                                    <td>23</td>
                                                    <td>10-9-2015</td>
                                                    <td>\$1200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/6.jpg\" alt=\"user\" class=\"img-circle\" /> Pawandeep kumar</a>
                                                    </td>
                                                    <td>pawandeep@gmail.com</td>
                                                    <td>+678 456 789</td>
                                                    <td><span class=\"label label-warning\">Chairman</span></td>
                                                    <td>29</td>
                                                    <td>10-5-2013</td>
                                                    <td>\$1500</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/7.jpg\" alt=\"user\" class=\"img-circle\" /> Ritesh Deshmukh</a>
                                                    </td>
                                                    <td>ritesh@gmail.com</td>
                                                    <td>+123 456 789</td>
                                                    <td><span class=\"label label-danger\">Designer</span></td>
                                                    <td>35</td>
                                                    <td>05-10-2012</td>
                                                    <td>\$3200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/8.jpg\" alt=\"user\" class=\"img-circle\" /> Salman Khan</a>
                                                    </td>
                                                    <td>salman@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class=\"label label-info\">Developer</span></td>
                                                    <td>27</td>
                                                    <td>11-10-2014</td>
                                                    <td>\$1800</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/1.jpg\" alt=\"user\" class=\"img-circle\" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class=\"label label-success\">Accountant</span></td>
                                                    <td>18</td>
                                                    <td>12-5-2017</td>
                                                    <td>\$100</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/2.jpg\" alt=\"user\" class=\"img-circle\" /> Sonu Nigam</a>
                                                    </td>
                                                    <td>sonu@gmail.com</td>
                                                    <td>+456 456 789</td>
                                                    <td><span class=\"label label-inverse\">HR</span></td>
                                                    <td>36</td>
                                                    <td>18-5-2009</td>
                                                    <td>\$4200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/3.jpg\" alt=\"user\" class=\"img-circle\" /> Varun Dhawan</a>
                                                    </td>
                                                    <td>varun@gmail.com</td>
                                                    <td>+567 456 789</td>
                                                    <td><span class=\"label label-danger\">Manager</span></td>
                                                    <td>43</td>
                                                    <td>12-10-2010</td>
                                                    <td>\$5200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/4.jpg\" alt=\"user\" class=\"img-circle\" /> Genelia Deshmukh</a>
                                                    </td>
                                                    <td>genelia@gmail.com</td>
                                                    <td>+123 456 789</td>
                                                    <td><span class=\"label label-danger\">Designer</span> </td>
                                                    <td>23</td>
                                                    <td>12-10-2014</td>
                                                    <td>\$1200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/5.jpg\" alt=\"user\" class=\"img-circle\" /> Arijit Singh</a>
                                                    </td>
                                                    <td>arijit@gmail.com</td>
                                                    <td>+234 456 789</td>
                                                    <td><span class=\"label label-info\">Developer</span> </td>
                                                    <td>26</td>
                                                    <td>10-09-2014</td>
                                                    <td>\$1800</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>
                                                        <a href=\"app-contact-detail.html\"><img src=\"/assets/Backend/images/users/6.jpg\" alt=\"user\" class=\"img-circle\" /> Govinda jalan</a>
                                                    </td>
                                                    <td>govinda@gmail.com</td>
                                                    <td>+345 456 789</td>
                                                    <td><span class=\"label label-success\">Accountant</span></td>
                                                    <td>28</td>
                                                    <td>1-10-2013</td>
                                                    <td>\$2200</td>
                                                    <td>
                                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan=\"2\">
                                                        <button type=\"button\" class=\"btn btn-info btn-rounded\" data-toggle=\"modal\" data-target=\"#add-contact\">Add New Contact</button>
                                                    </td>
                                                    <div id=\"add-contact\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add New Contact</h4>
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <from class=\"form-horizontal form-material\">
                                                                        <div class=\"form-group\">
                                                                            <div class=\"col-md-12 m-b-20\">
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Type name\"> </div>
                                                                            <div class=\"col-md-12 m-b-20\">
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Email\"> </div>
                                                                            <div class=\"col-md-12 m-b-20\">
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Phone\"> </div>
                                                                            <div class=\"col-md-12 m-b-20\">
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Designation\"> </div>
                                                                            <div class=\"col-md-12 m-b-20\">
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Age\"> </div>
                                                                            <div class=\"col-md-12 m-b-20\">
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Date of joining\"> </div>
                                                                            <div class=\"col-md-12 m-b-20\">
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Salary\"> </div>
                                                                            <div class=\"col-md-12 m-b-20\">
                                                                                <div class=\"fileupload btn btn-danger btn-rounded waves-effect waves-light\"><span><i class=\"ion-upload m-r-5\"></i>Upload Contact Image</span>
                                                                                    <input type=\"file\" class=\"upload\"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </from>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Save</button>
                                                                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Cancel</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <td colspan=\"7\">
                                                        <div class=\"text-right\">
                                                            <ul class=\"pagination\"> </ul>
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

    // line 316
    public function block_js($context, array $blocks = array())
    {
        // line 317
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
        return "Backend/Customer/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 317,  352 => 316,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Customer/list.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Customer\\list.html.twig");
    }
}
