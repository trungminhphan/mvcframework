<?php

/* Backend/Get/attribute_list.html.twig */
class __TwigTemplate_c493c0859d183fe9286289e25973a26b25544207e82ca49969961ddcc83cd359 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array())) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "thuoctinh", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                // line 3
                echo "    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tt"], "tenthuoctinh", array()), "html", null, true);
                echo "</option>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "Backend/Get/attribute_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.thuoctinh %}
  {% for tt in product.thuoctinh %}
    <option value=\"{{tt._id}}\">{{tt.tenthuoctinh}}</option>
  {% endfor %}
{% endif %}
", "Backend/Get/attribute_list.html.twig", "C:\\wamp\\www\\mvcframework\\App\\Views\\Backend\\Get\\attribute_list.html.twig");
    }
}
