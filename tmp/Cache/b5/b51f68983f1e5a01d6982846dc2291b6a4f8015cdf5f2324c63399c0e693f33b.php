<?php

/* Backend/Get/product_add.html.twig */
class __TwigTemplate_315db71b1da098bd3f1461844d149cdea5f6274307560b6e5843404246c2190e extends Twig_Template
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
        if (($context["product"] ?? null)) {
            // line 2
            echo "<tr class=\"items\">
    <td>
      ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "ten", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()), ($context["k"] ?? null), array(), "array"), "tenthuoctinh", array()), "html", null, true);
            echo "
      <input type=\"hidden\" name=\"tensanpham[]\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "ten", array()), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"tenthuoctinh[]\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()), ($context["k"] ?? null), array(), "array"), "tenthuoctinh", array()), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"id_sanpham[]\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "_id", array()), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"id_thuoctinh[]\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()), ($context["k"] ?? null), array(), "array"), "_id", array()), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"id_seller[]\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "id_user", array()), "html", null, true);
            echo "\" />
    </td>
    <td class=\"text-right\">
      <input type=\"hidden\" name=\"soluong[]\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["soluong"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 13
            echo twig_escape_filter($this->env, ($context["soluong"] ?? null), "html", null, true);
            echo "
    </td>
    <td class=\"text-right\">
        <input type=\"hidden\" name=\"giaban[]\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()), ($context["k"] ?? null), array(), "array"), "giaban", array()), "html", null, true);
            echo "\">
        ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()), ($context["k"] ?? null), array(), "array"), "giaban", array()), "html", null, true);
            echo "
    </td>
    <td class=\"text-right\">
      <input type=\"hidden\" name=\"thanhtien[]\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()), ($context["k"] ?? null), array(), "array"), "giaban", array()) * ($context["soluong"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 21
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()), ($context["k"] ?? null), array(), "array"), "giaban", array()) * ($context["soluong"] ?? null)), "html", null, true);
            echo "
    </td>
    <td><a href=\"#\" onclick=\"return false;\" class=\"delete-item\"><i class=\"mdi mdi-delete\"></i></a></td>
</tr>
";
        }
    }

    public function getTemplateName()
    {
        return "Backend/Get/product_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  73 => 20,  67 => 17,  63 => 16,  57 => 13,  53 => 12,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product  %}
<tr class=\"items\">
    <td>
      {{product.ten}} {{product.thuoctinh[k].tenthuoctinh}}
      <input type=\"hidden\" name=\"tensanpham[]\" value=\"{{product.ten}}\" />
      <input type=\"hidden\" name=\"tenthuoctinh[]\" value=\"{{product.thuoctinh[k].tenthuoctinh}}\" />
      <input type=\"hidden\" name=\"id_sanpham[]\" value=\"{{product._id}}\" />
      <input type=\"hidden\" name=\"id_thuoctinh[]\" value=\"{{product.thuoctinh[k]._id}}\" />
      <input type=\"hidden\" name=\"id_seller[]\" value=\"{{product.id_user}}\" />
    </td>
    <td class=\"text-right\">
      <input type=\"hidden\" name=\"soluong[]\" value=\"{{soluong}}\">
      {{soluong}}
    </td>
    <td class=\"text-right\">
        <input type=\"hidden\" name=\"giaban[]\" value=\"{{product.thuoctinh[k].giaban}}\">
        {{product.thuoctinh[k].giaban}}
    </td>
    <td class=\"text-right\">
      <input type=\"hidden\" name=\"thanhtien[]\" value=\"{{product.thuoctinh[k].giaban * soluong}}\">
      {{product.thuoctinh[k].giaban * soluong}}
    </td>
    <td><a href=\"#\" onclick=\"return false;\" class=\"delete-item\"><i class=\"mdi mdi-delete\"></i></a></td>
</tr>
{% endif %}
", "Backend/Get/product_add.html.twig", "E:\\www\\mvcframework\\App\\Views\\Backend\\Get\\product_add.html.twig");
    }
}
