<?php

/* Frontend/index.html.twig */
class __TwigTemplate_bb98dee7a8d27033baea310850f58617f8f8d83425f421533a90c32e95485608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Frontend/layout.html.twig", "Frontend/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Frontend/layout.html.twig";
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
        echo "<div style=\"width:100%;margin:auto;\">
    <a href=\"/chi-tiet-san-pham\">
        <img src=\"/assets/Frontend/images/Art_home.jpg\" style=\"width:100%;\" />
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "Frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Frontend/layout.html.twig\" %}

{% block title %}Home{% endblock %}

{% block body %}
<div style=\"width:100%;margin:auto;\">
    <a href=\"/chi-tiet-san-pham\">
        <img src=\"/assets/Frontend/images/Art_home.jpg\" style=\"width:100%;\" />
    </a>
</div>
{% endblock %}
", "Frontend/index.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Frontend\\index.html.twig");
    }
}
