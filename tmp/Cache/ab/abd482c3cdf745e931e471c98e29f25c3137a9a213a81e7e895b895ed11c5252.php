<?php

/* Backend/Get/attributes.html.twig */
class __TwigTemplate_3676af09ea2c7bccb28ec2ab5f363bc6e8beb93c3009eeb74cd696947018c5e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row items\">
    <div class=\"form-group col-md-4\">
        <select class=\"form-control custom-select select2\" style=\"width: 100%; height:36px;\">
            ";
        // line 4
        if (($context["attributes"] ?? null)) {
            // line 5
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 6
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attribute"], "_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attribute"], "ten", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            ";
        }
        // line 9
        echo "        </select>
    </div>
    <div class=\"form-group col-md-2\">
        <input type=\"number\" name=\"price[]\" class=\"form-control\" placeholder=\"Giá\" required>
    </div>
    <div class=\"form-group col-md-2\">
        <input type=\"number\" name=\"selling_price[]\" class=\"form-control\" placeholder=\"Giá bán\" required>
    </div>
    <div class=\"form-group col-md-2\">
        <input type=\"number\" name=\"quantity[]\" class=\"form-control\" placeholder=\"Số lượng\" required value=\"1\">
    </div>
    <div class=\"form-group col-md-2\">
        <div style=\"width:40px;height:40px;float:left;margin-right:5px;background:#ccc;\" class=\"img_icon\">
            <img src=\"/assets/Backend/images/logo-icon.png\" style=\"width:40px;height:40px;\" class=\"icon\"/>
        </div>
        <label class=\"file btn btn-info btn-circle\">
            <input type=\"file\" name=\"img[]\" style=\"display:none;\" accept=\"image/*\" class=\"image-icon\"/>
            <i class=\"fa fa-file-photo-o\"></i>
        </label>
        <a href=\"#\" onclick=\"return false;\" class=\"btn btn-danger btn-circle delete-attribute\"><i class=\"fa fa-trash\"></i></a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Backend/Get/attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Backend/Get/attributes.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Get\\attributes.html.twig");
    }
}
