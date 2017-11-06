<?php

/* Frontend/layout.html.twig */
class __TwigTemplate_07ba835a4df49a4091ee67e255caeb546339f82aba1772e6ffb5ea4c86701202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
    ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Frontend/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  41 => 5,  35 => 10,  33 => 8,  27 => 5,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}{% endblock %}</title>
</head>
<body>
    {% block body %}
    {% endblock %}
</body>
</html>
", "Frontend/layout.html.twig", "C:\\wamp64\\www\\mvcframework\\App\\Views\\Frontend\\layout.html.twig");
    }
}
