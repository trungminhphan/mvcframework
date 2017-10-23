<?php

/* Frontend/layout.html.twig */
class __TwigTemplate_ec9a03b1f8998c91b112f99305a7554c619346fe4dc87fcaaa7f716dbe695643 extends Twig_Template
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
        return new Twig_Source("", "Frontend/layout.html.twig", "E:\\www\\mvcframework\\App\\Views\\Frontend\\layout.html.twig");
    }
}
